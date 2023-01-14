<?php

namespace DecimalSDK;

use BitcoinPHP\BitcoinECDSA\BitcoinECDSA;
use Cosmos\Tx\V1beta1\BroadcastMode;
use \DecimalSDK\Errors\DecimalException;
use DecimalSDK\Utils\ProtoManager;
use DecimalSDK\Utils\ApiRequester;
use DecimalSDK\Utils\Crypto\Encrypt;
use DecimalSDK\Utils\ProtoManagerAddition;
use DecimalSDK\Utils\TransactionHelpers;
use DecimalSDK\Wallet;
use Elliptic\EC;
use Exception;
use kornrunner\Keccak;
use Web3\Web3;
use Web3\Providers\HttpProvider;
use Web3\RequestManagers\HttpRequestManager;
use Web3\Contract;
use DecimalSDK\Utils\Abis;
use Web3p\EthereumTx\Transaction;
use Web3p\RLP\RLP;



class TransactionDecimal
{
    use TransactionHelpers;
    const D0VALOPER = 'd0valoper';

    const DEFAULT_GAS_LIMIT = '180000';
    const DEFAULT_ORDER_FIELD = 'createdAt';
    const DEFAULT_ORDER_DIRECTION = 'DESC';
    const DEFAULT_ORDER = 'order[' . self::DEFAULT_ORDER_FIELD . ']=' . self::DEFAULT_ORDER_DIRECTION;
    const SECONDS_TO_WAIT_FOR_RECEIPT = 15;

    private $account;
    private $wallet;
    private $requester;
    private $gateUrl;
    private $nodeRestUrl;
    private $chainId;
    private $isNodeDirectMode;
    private $network;
    private $nodeMeta;
    private $protoManager;
    private $protoManagerAddition;
    private $web3RpcNode;


    /**
     * Transaction constructor.
     * @param \DecimalSDK\Wallet $wallet
     * @param array $options
     * @throws DecimalException
     */

    public function __construct(Wallet $wallet, $network, $isNodeDirectMode = false, $options = [])
    {
        try {
            if (!$wallet) {
                throw new DecimalException('Wrong wallet');
            }

            $this->isNodeDirectMode = $isNodeDirectMode;
            $this->network = $network;
            $this->wallet = $wallet;
            $this->requester = new ApiRequester($wallet, $network, $isNodeDirectMode, $options);
            $this->gateUrl = Utils\getApiEndpoint($network);
            $this->chainId = $this->requester->getChainId();
            $this->web3RpcNode = isset($options['customNodeEndpoint']['web3Node']) ? $options['customNodeEndpoint']['web3Node'] : Utils\getWeb3Endpoint($network);
            $this->signMeta = $this->requester->getSignMeta($this->wallet);
            $this->protoManager = ProtoManager::instance();
            $this->protoManagerAddition = ProtoManagerAddition::instance();
        } catch (Exception $e) {
            throw new DecimalException("Creation of transaction instance failed.");
        }
    }

    public function createCoin($payload, $options = [])
    {
        [
            'title' => $title,
            'ticker' => $denom,
            'initSupply' => $initSupply,
            'maxSupply' => $maxSupply,
            'reserve' => $reserve,
            'crr' => $crr
        ] = $payload;

        $msg = $this->protoManager->getMsgCreateCoin(
                $this->wallet->getAddress(),
            strtolower(trim($title)),
            strtolower(trim($denom)),
            amountUNIRecalculate($initSupply),
            amountUNIRecalculate($maxSupply),
            amountUNIRecalculate($reserve),
            $crr
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
    }

    public function updateCoin($payload, $options = [])
    {
        [
            'maxSupply' => $maxSupply,
            'ticker' => $denom,
            'identity' => $identity,
        ] = $payload;

        $msg = $this->protoManager->getMsgUpdateCoin(
                $this->wallet->getAddress(),
            strtolower(trim($denom)),
            amountUNIRecalculate($maxSupply),
            $denom
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
    }

    public function burnCoins($payload, $options = [])
    {
        [
            'denom' => $denom,
            'amount' => $amount
        ] = $payload;

        $msg = $this->protoManager->getMsgBurnCoin(
                $this->wallet->getAddress(),
            strtolower(trim($denom)),
            amountUNIRecalculate($amount)
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
    }

    public function sendCoin($payload, $options = []) {
        [
            'recipient' => $recipient,
            'denom' => $denom,
            'amount' => $amount
        ] = $payload;

        try {
            if(!isBech32($recipient)) {
                return new Exception('Invalid address.');
            }
        } catch (Exception $er) {
            return $er;
        }

        $msg = $this->protoManager->getMsgSendCoin(
            $this->wallet->getAddress(),
            $recipient,
            strtolower(trim($denom)),
            amountUNIRecalculate($amount)
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
    }


    public function sellCoin($payload, $options = []) {
        [ 
            'denomSell'     => $denomSell,
            'denomBuy'      => $denomBuy,
            'amountSell'    => $amountSell
        ] = $payload;

        $msg = $this->protoManager->getMsgSellCoin(
            $this->wallet->getAddress(),
            strtolower(trim($denomSell)),
            amountUNIRecalculate($amountSell),
            strtolower(trim($denomBuy)),
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
    }

    public function buyCoin($payload, $options = []){
        [ 
            'denomSell'     => $denomSell,
            'denomBuy'      => $denomBuy,
            'amountSell'    => $amountSell,
            'amountBuy'     => $amountBuy
        ] = $payload;
    
        $msg = $this->protoManager->getMsgBuyCoin(
            $this->wallet->getAddress(),
                strtolower(trim($denomBuy)),
                amountUNIRecalculate($amountBuy),
                strtolower(trim($denomSell)),
                amountUNIRecalculate($amountSell)
            );

        $result = $this->sendTransaction($msg, $options);
        return $result;
    }

    public function sellAllCoin($payload, $options = []){
        [
            'denomSell' => $denomSell,
            'denomBuy'  => $denomBuy,
            // 'minCoinToBuy' => $amountBuy
        ] = $payload;

        $msg = $this->protoManager->getMsgSellAllCoin(
            $this->wallet->getAddress(),
                strtolower(trim($denomSell)),
                strtolower(trim($denomBuy)),
                1
            );

        $result = $this->sendTransaction($msg, $options);
        return $result;
    }

    public function multiSendCoins($payload, $options = []) {
        $sendsPrepare = [];

        foreach($payload['sends'] as $send) {
            $sendsPrepare[] = [
                'amount' => amountUNIRecalculate($send['amount']),
                'denom' => strtolower(trim($send['coin'])),
                'to' => $send['to']
            ];

            try {
                if (!isBech32($send['to'])) {
                    return new Exception('Invalid address.');
                }
            } catch (Exception $er) {
                return $er;
            }
        }

        $msg = $this->protoManager->getMsgMultiSendCoins($this->wallet->getAddress(),$sendsPrepare);

        $result = $this->sendTransaction($msg, $options);
        return $result;
    }

    public function mintNft($payload, $recipient = null , $options = [])
    {
        [
            'id' => $id,
            'denom' => $denom,
            'tokenUri' => $tokenUri,
            'quantity' => $quantity,
            'reserveDenom' => $reserveDenom,
            'reserveAmount' => $reserveAmount,
            'allowMint' => $allowMint,
        ] = $payload;
        if($recipient == null) {
            $recipient= $this->wallet->getAddress();
        }
        $reserve = [
            'denom' => strtolower(trim($reserveDenom)),
            'amount' => $reserveAmount
        ];

        try {
            if (!isBech32($recipient) && ($recipient != null)) {
                return new Exception('Invalid address.');
            }
        } catch (Exception $er) {
            return $er;
        }
        $msg = $this->protoManager->getMsgMintNft(
            $this->wallet->getAddress(),
            $recipient,
            strtolower(trim($denom)),
            $id,
            $tokenUri,
            $allowMint,
            $reserve,
            $quantity
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
    }

    public function burnNft($payload, $options = [])
    {
        [
            'id' => $id,
            'subtokenIds' => $subtokenIds,
        ] = $payload;

        $nftData = $this->getNftMetadata($id);

        $subIdsCheck = [];
        foreach ($nftData->result->nftReserve as $reserve){
            if(in_array($reserve->subTokenId, $subtokenIds)){
                $subIdsCheck[] = $reserve->subTokenId;
            }
        }

        if(count($subIdsCheck) == 0){
            throw new DecimalException('SubtokenIds is not exist');
        }

        $msg = $this->protoManager->getMsgBurnNft(
                $this->wallet->getAddress(),
            $id,
            $subtokenIds
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
    }

    public function nftEditMetadata($payload, $options = [])
    {
        [
            'tokenId' => $tokenId,
            'tokenURI' => $tokenURI,
        ] = $payload;

        $msg = $this->protoManager->getMsgNftEditMetadata(
                $this->wallet->getAddress(),
            $tokenId,
            $tokenURI
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
    }

    private function sendTransaction($msg, $options, $tryTimes = 2) {
        $sequence = $this->wallet->getSequence();
        $memo = isset($options['message']) ? $options['message'] : '';
        $txBody = $this->protoManager->getTxBody($msg, $memo);

        $denom = null;
        $fee = null;
        $feeCoin = null;

        if (!isset($options['feeCoin'])) {
            $denom = $this->network == 'testnet' ? 'tdel' : 'del';
        } else {
            $denom = strtolower(trim($options['feeCoin']));
        }

        $feeCoin = $this->protoManager->getCoin($denom, '0000000000000000000000000000');
        $fee = $this->protoManager->getFee(self::DEFAULT_GAS_LIMIT, $feeCoin);

        $signObj = $this->singTransaction($txBody, $fee);

        $txRaw = $this->protoManager->getTxRaw(
            $txBody->serializeToString(),
            $signObj['authInfoBytes'],
            [$signObj['signature']],
        );

        $txBytes = $txRaw->serializeToString();

        if (!$this->isNodeDirectMode) {
            $payload = [
                'tx_bytes' => bin2hex($txBytes),
                'denom' => $feeCoin->getDenom()
            ];
            $predictedFeeObj = $this->requester->post('tx/estimate', $payload);
            $predictedFee = $predictedFeeObj->result->commission;
        } else {
            $nodeEstimationEndpoint = Utils\getNodeFeeEstimationEndpoint(Utils\getRestNodeEndpoint($this->network), bin2hex($txBytes), $feeCoin->getDenom());
            $predictedFeeObj = $this->requester->getCommission($nodeEstimationEndpoint);
            $predictedFee = $predictedFeeObj->commission;
        }

        if (isset($options['simulate'])) {
            if ($options['simulate'] == 'true') {
                return [
                    'amount' => $predictedFee,
                    'coin' => $denom
                ];
            }
        }
        $feeCoin = $this->protoManager->getCoin($denom, "$predictedFee");
        $fee = $this->protoManager->getFee(self::DEFAULT_GAS_LIMIT, $feeCoin);
        
        $signObj = $this->singTransaction($txBody, $fee, $tryTimes);
        $txRaw = $this->protoManager->getTxRaw(          
            $txBody->serializeToString(),
            $signObj['authInfoBytes'],
            [$signObj['signature']]
        );

        $txBytes = $txRaw->serializeToString();

        $broadcastMode = BroadcastMode::BROADCAST_MODE_SYNC;
        if (isset($options['txBroadcastMode'])) {
            switch ($options['txBroadcastMode']) {
                case 'block':
                    $broadcastMode = BroadcastMode::BROADCAST_MODE_BLOCK;
                    break;
                case 'async':
                    $broadcastMode = BroadcastMode::BROADCAST_MODE_ASYNC;
                    break;
                    
            }
        }
        $broadcast = $this->protoManager->getBroadcastRequest($txBytes, $broadcastMode);

        $broadcastPreparedPayload = json_decode($broadcast->serializeToJsonString());

        try {
            $response = $this->requester->sendTxToBroadcast($broadcastPreparedPayload);
            
            if($broadcastMode == BroadcastMode::BROADCAST_MODE_ASYNC) {
                $this->wallet->setSequence(++$sequence);
                return true;
            }

            $secondsWaited = 0;
            while (!isset($response->tx_response)) {
                sleep(1);
                $secondsWaited++;
                if ($secondsWaited > 10) {
                    if (!isset($response->tx_response)) {
                        throw new DecimalException('Your transaction was not found on the chain yet. There was a wait of ' . $secondsWaited . ' seconds.');
                    }
                    break;
                }
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
        if($response->tx_response->code == 0) {
            $this->wallet->setSequence(++$sequence);
        } elseif ($response->tx_response->code == 32) {
            $str = $response->tx_response->raw_log;
            preg_match('!\d+!', $str, $matches);
            $this->wallet->setSequence($matches[0]);
            if ($tryTimes > 0) {
                $response = $this->sendTransaction($msg, $options, $tryTimes - 1);
            }
        }

        return $response;
    }

    private function singTransaction($txBody, $fee, $tryTimes = 2) {
        $privateKey = $this->wallet->getPrivateKey();
        $bitcoinECDSA = new BitcoinECDSA();
        $bitcoinECDSA->setPrivateKey($privateKey);

        $publicKey = $this->protoManager->getPubKey(hex2bin($bitcoinECDSA->getPubKey()));
        $sequence = $this->wallet->getSequence();
        $signerInfo = $this->protoManager->getSignerInfo($publicKey, $sequence);

        $authInfo = $this->protoManager->getAuthInfo($signerInfo, $fee);

        $authInfoBytes = $authInfo->serializeToString();
        $signBytes = $this->protoManager->getSignDoc(
            $txBody->serializeToString(),
            $authInfoBytes,
            $this->signMeta['chain_id'], // decimal_2020-22100701
            $this->signMeta['account_number'],
        );
        $signature = Encrypt::sepc256k1Sign($signBytes, $privateKey);

        return [
            'pub_key' => $publicKey,
            'signature' => $signature,
            'authInfoBytes' => $authInfoBytes,
        ];
    }

    private function makeSignBytes($authInfoBytes, $bodyBytes) {
        $msg = $this->protoManager->getSignDoc(
            $bodyBytes,
            $authInfoBytes,
            $this->signMeta['chain_id'],
            $this->signMeta['account_number'],
        );

        $result = $this->sendTransaction($msg,[]);

        return $result;
    }

    public function createToken($payload, $options = [])
    {
        $tokenBytecode = $this->requester->getTokenCreationBytecode($payload);

        $response = $this->sendRawEvmTransaction(null, $tokenBytecode, $options);

        return $response;
    }

    public function transferTokens($payload, $options = [])
    {
        [
            'recipient' => $recipient,
            'amount' => $amount,
            'tokenAddress' => $tokenAddress
        ] = $payload;

        $transferSelector = '0xa9059cbb';
        $rawTransactionData = $transferSelector . str_pad(substr($recipient, 2), 64, '0', STR_PAD_LEFT) . str_pad(dec2hex(amountUNIRecalculate($amount)), 64, '0', STR_PAD_LEFT);

        return $this->sendRawEvmTransaction($tokenAddress, $rawTransactionData, $options);
    }

    public function approveTokens($payload, $options = [])
    {
        [
            'spender' => $spender,
            'amount' => $amount,
            'tokenAddress' => $tokenAddress
        ] = $payload;

        $approveSelector = '0x095ea7b3';
        $rawTransactionData = $approveSelector . str_pad(substr($spender, 2), 64, '0', STR_PAD_LEFT) . str_pad(dec2hex(amountUNIRecalculate($amount)), 64, '0', STR_PAD_LEFT);

        return $this->sendRawEvmTransaction($tokenAddress, $rawTransactionData, $options);
    }

    public function mintTokens($payload, $options = [])
    {
        [
            'recipient' => $recipient,
            'amount' => $amount,
            'tokenAddress' => $tokenAddress
        ] = $payload;


        $transferSelector = '0x40c10f19';

        $rawTransactionData = $transferSelector . str_pad(substr($recipient, 2), 64, '0', STR_PAD_LEFT) . str_pad(dec2hex(amountUNIRecalculate($amount)), 64, '0', STR_PAD_LEFT);

        return $this->sendRawEvmTransaction($tokenAddress, $rawTransactionData, $options);
    }

    public function burnTokens($payload, $options = [])
    {
        [
            'recipient' => $recipient,
            'amount' => $amount,
            'tokenAddress' => $tokenAddress
        ] = $payload;

        $publicKey = $this->wallet->getPublicKey();
        $signer = $this->getEvmAddress($publicKey);

        if ($signer == $recipient) {
            $transferSelector = '0x42966c68';
            $rawTransactionData = $transferSelector . str_pad(dec2hex(amountUNIRecalculate($amount)), 64, '0', STR_PAD_LEFT);
        } else {
            $transferSelector = '0x79cc6790';
            $rawTransactionData = $transferSelector . str_pad(substr($recipient, 2), 64, '0', STR_PAD_LEFT) . str_pad(dec2hex(amountUNIRecalculate($amount)), 64, '0', STR_PAD_LEFT);
        }

        return $this->sendRawEvmTransaction($tokenAddress, $rawTransactionData, $options);
    }

    public function transferTokensFrom($payload, $options = [])
    {
        [
            'from' => $from,
            'to' => $to,
            'amount' => $amount,
            'tokenAddress' => $tokenAddress,
        ] = $payload;

        $transferFromSelector = '0x23b872dd';
        $rawTransactionData = $transferFromSelector . str_pad(substr($from, 2), 64, '0', STR_PAD_LEFT) . str_pad(substr($to, 2), 64, '0', STR_PAD_LEFT) . str_pad(dec2hex(amountUNIRecalculate($amount)), 64, '0', STR_PAD_LEFT);

        return $this->sendRawEvmTransaction($tokenAddress, $rawTransactionData, $options);
    }

    public function getBalanceOfToken($payload)
    {
        [
            'account' => $account,
            'tokenAddress' => $tokenAddress,
        ] = $payload;

        $web3 = new Web3(new HttpProvider(new HttpRequestManager($this->web3RpcNode)));
        $abi = Abis::ERC20_ABI;
        $contract = new Contract($web3->provider, $abi);

        try {
            $balance = null;
            $contract->at($tokenAddress)->call('balanceOf', $account, function ($err, $results) use (&$balance) {
                if ($err !== null) {
                    throw new DecimalException($err->getMessage());
                }
                $balance = $results;
            });

            return $balance;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getAllowanceOfToken($payload)
    {
        [
            'owner' => $owner,
            'spender' => $spender,
            'tokenAddress' => $tokenAddress,
        ] = $payload;

        $web3 = new Web3(new HttpProvider(new HttpRequestManager($this->web3RpcNode)));
        $abi = Abis::ERC20_ABI;
        $contract = new Contract($web3->provider, $abi);

        try {
            $allowance = null;
            $contract->at($tokenAddress)->call('allowance', $owner, $spender, function ($err, $results) use (&$allowance) {
                if ($err !== null) {
                    throw new DecimalException($err->getMessage());
                }
                $allowance = $results;
            });

            return $allowance;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getTokenInfo($payload)
    {
        [
            'tokenAddress' => $tokenAddress,
        ] = $payload;

        $web3 = new Web3(new HttpProvider(new HttpRequestManager($this->web3RpcNode)));
        $abi = Abis::ERC20_ABI;
        $contract = new Contract($web3->provider, $abi);

        try {
            $totalSupply = null;
            $contract->at($tokenAddress)->call('totalSupply', function ($err, $results) use (&$totalSupply) {
                if ($err !== null) {
                    throw new DecimalException($err->getMessage());
                }
                $totalSupply = $results;
            });

            $decimal = null;
            $contract->at($tokenAddress)->call('decimals', function ($err, $results) use (&$decimal) {
                if ($err !== null) {
                    throw new DecimalException($err->getMessage());
                }
                $decimal = $results;
            });

            $name = null;
            $contract->at($tokenAddress)->call('name', function ($err, $results) use (&$name) {
                if ($err !== null) {
                    throw new DecimalException($err->getMessage());
                }
                $name = $results;
            });

            $symbol = null;
            $contract->at($tokenAddress)->call('symbol', function ($err, $results) use (&$symbol) {
                if ($err !== null) {
                    throw new DecimalException($err->getMessage());
                }
                $symbol = $results;
            });

            $tokenInfo = [
                'name' => $name,
                'symbol' => $symbol,
                'decimal' => $decimal,
                'totalSupply' => $totalSupply
            ];


            return $tokenInfo;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    private function sendRawEvmTransaction($to, $rawTransactionData, $options)
    {
        $web3 = new Web3(new HttpProvider(new HttpRequestManager($this->web3RpcNode)));
        $sequence = $this->wallet->getSequence();

        $publicKey = $this->wallet->getPublicKey();
        $signer = $this->getEvmAddress($publicKey);

        if (isset($options['gasLimit'])) {
            $gasLimit = $options['gasLimit'];
        } else {
            $gasLimit = 1000000;
        }

        $transactionParams = [
            'nonce' => "0x" . dechex($sequence),
            'from' => $signer,
            'to' => $to,
            'gas' => '0x' . dechex($gasLimit),
            'value' => '0x0',
            'data' => $rawTransactionData,
        ];

        $estimatedGas = null;
        try {
            $web3->eth->estimateGas($transactionParams, function ($err, $gas) use (&$estimatedGas) {
                if ($err) {
                    throw new DecimalException($err->getMessage());
                } else {
                    $estimatedGas = $gas;
                }
            });

            $currentGasPrice = null;
            $web3->eth->gasPrice(function ($err, $gasPrice) use (&$currentGasPrice) {
                if ($err !== null) {
                    throw new DecimalException($err->getMessage());
                }
                $currentGasPrice = $gasPrice;
            });

            $transactionParams['gas'] = '0x' . dechex($estimatedGas->toString());
            $transactionParams['gasPrice'] = '0x' . dechex($currentGasPrice->toString());
            $transactionParams['chainId'] = $this->chainId;

            $tx = new Transaction($transactionParams);

            $privateKey = $this->wallet->getPrivateKey();
            $signedTx = '0x' . $tx->sign($privateKey);

            $web3->eth->sendRawTransaction($signedTx, function ($err, $txResult) use (&$txHash) {
                if ($err) {
                    throw new DecimalException($err->getMessage());
                } else {
                    $txHash = $txResult;
                }
            });

            $txReceipt = null;
            for ($i = 0; $i <= self::SECONDS_TO_WAIT_FOR_RECEIPT; $i++) {
                $web3->eth->getTransactionReceipt($txHash, function ($err, $txReceiptResult) use (&$txReceipt) {
                    if ($err) {
                        throw new DecimalException($err->getMessage());
                    } else {
                        $txReceipt = $txReceiptResult;
                    }
                });

                if ($txReceipt) {
                    break;
                }

                sleep(1);
            }
            $this->wallet->setSequence(++$sequence);
            return $txReceipt;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function getTransaction($hash) {
        $response = $this->requester->getTransaction($hash);
        return $response;
    }

    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */

    public function validatorDelegate($payload, $options = [])
    {
        [
            'address' => $validator,
            'coin' => $denom,
            'stake' => $stake
        ] = $payload;

        $msg = $this->protoManager->getMsgValidatorDelegate(
                $this->wallet->getAddress(),
            $validator,
            strtolower(trim($denom)),
            amountUNIRecalculate($stake)
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
    }

    public function validatorRedelegate($payload, $options = [])
    {
        [
            'old_validator' => $old_validator,
            'new_validator' => $new_validator,
            'coin' => $denom,
            'stake' => $stake
        ] = $payload;

        $msg = $this->protoManager->getMsgValidatorRedelegate(
                $this->wallet->getAddress(),
            $old_validator,
            $new_validator,
            strtolower(trim($denom)),
            amountUNIRecalculate($stake)
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
        
    }

    private function validatorCancelRedelegate($payload, $options = [])
    {
        [
            'old_validator' => $old_validator,
            'new_validator' => $new_validator,
            'creation_height' => $creation_height,
            'coin' => $denom,
            'stake' => $stake
        ] = $payload;

        $msg = $this->protoManager->getMsgValidatorCancelRedelegate(
                $this->wallet->getAddress(),
            $old_validator,
            $new_validator,
            $creation_height,
            strtolower(trim($denom)),
            amountUNIRecalculate($stake)
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
        
    }

    private function validatorCancelUndelegate($payload, $options = [])
    {
        [
            'validator' => $validator,
            'creation_height' => $creation_height,
            'coin' => $denom,
            'stake' => $stake
        ] = $payload;

        $msg = $this->protoManager->getMsgValidatorCancelUndelegate(
                $this->wallet->getAddress(),
            $validator,
            $creation_height,
            strtolower(trim($denom)),
            amountUNIRecalculate($stake)
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
        
    }

    public function validatorUnbound($payload, $options = []) {
        [
            'address'   => $validator,
            'coin'      => $denom,
            'stake'     => $stake
        ] = $payload;

        $msg = $this->protoManager->getMsgValidatorUnbond(
            $this->wallet->getAddress(),
            $validator,
            strtolower(trim($denom)),
            amountUNIRecalculate($stake)
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
    }

    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */

    public function validatorDeclare($payload, $options = [])
    {
        [
            'rewardAddress' => $rewardAddress,
            'stake' => $stake,
            'coin' => $coin,
            'pubKey' => $pubKey,
            'commission' => $commission,
            'moniker' => $moniker,
            'identity' => $identity,
            'website' => $website,
            'securityContact' => $securityContact,
            'details' => $details,
        ] = $payload;

        $pubKeyEd25519 = $this->protoManagerAddition->getPubKey(base64_decode($pubKey));

        $serializedPubKey = $pubKeyEd25519->serializeToString();

        if ($stake == 0) {
            throw new DecimalException('Stake too low.');
        }

        $msg = $this->protoManager->getMsgValidatorDeclare(
                $this->wallet->getValidatorAddress(),
            $rewardAddress,
            amountUNIRecalculate($stake),
            $coin,
            $serializedPubKey,
            getCommissionToUNI($commission),
            $moniker,
            $identity,
            $website,
            $securityContact,
            $details
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
        
    }

    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */

    public function validatorEdit($payload, $options = [])
    {
        [
            'rewardAddress' => $rewardAddress,
            'moniker' => $moniker,
            'identity' => $identity,
            'website' => $website,
            'securityContact' => $securityContact,
            'details' => $details,
        ] = $payload;

        $msg = $this->protoManager->getMsgEditValidator(
                $this->wallet->getValidatorAddress(),
                $rewardAddress,
                $moniker,
                $identity,
                $website,
                $securityContact,
                $details
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
        
    }

    /**
     * @return array|mixed
     * @throws DecimalException
     */

    public function disableValidator($payload, $options = [])
    {
        [
            'validator' => $validator,
        ] = $payload;
        $msg = $this->protoManager->getMsgValidatorDisable(
            $validator
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
        
    }

    /**
     * @return array|mixed
     * @throws DecimalException
     */

    public function enableValidator($payload, $options = [])
    {
        [
            'validator' => $validator,
        ] = $payload;
        $msg = $this->protoManager->getMsgValidatorEnable(
            $validator
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
        
    }

    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */

    public function multisigCreate($payload, $options = [])
    {
        [
            'threshold' => $threshold,
            'owners' => $owners,
            'weights' => $weights,
        ] = $payload;
        $msg = $this->protoManager->getMsgMultisigCreate(
            $this->wallet->getAddress(),
            $threshold,
            $owners,
            $weights
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
        
    }

    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */

    public function multisigCreateTX($payload, $options = [])
    {
        [
            'from' => $from,
            'to' => $to,
            'coin' => $coin,
            'amount' => $amount,
        ] = $payload;

        $type = "/decimal.coin.v1.MsgSendCoin";

        $preparedData = [
            'recipient' => $to,
            'amount' => amountUNIRecalculate($amount),
            'coin' => strtolower(trim($coin)),
        ];
        
        $msg = $this->protoManager->getMsgMultisigCreateTx(
                $this->wallet->getAddress(),
            $from,
            $type,
            $preparedData
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
        
    }

    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */

    public function multisigSignTX($payload, $options = [])
    {
        [
            'txId' => $txId,
        ] = $payload;

        $msg = $this->protoManager->getMsgMultisigSignTx(
                $this->wallet->getAddress(),
                $txId
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
        
    }

    
     /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */
    public function nftTransfer($payload, $options = [])
    {
        [
            'id' => $id,
            'sub_token_ids' => $sub_token_ids,
            'recipient' => $recipeint
        ] = $payload;

        $msg = $this->protoManager->getMsgTransferNft(
                $this->wallet->getAddress(),
            $recipeint,
            $id,
            $sub_token_ids
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
        
    }

    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */
    public function nftDelegate($payload, $options = [])
    {
        [
            'id' => $id,
            'sub_token_ids' => $sub_token_ids,
            'validator_address' => $validator_address
        ] = $payload;

        $msg = $this->protoManager->getMsgNftDelegate(
                $this->wallet->getAddress(),
            $validator_address,
            $id,
            $sub_token_ids
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
        
    }

    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */
    public function nftUndelegate($payload, $options = [])
    {
        [
            'id' => $id,
            'sub_token_ids' => $sub_token_ids,
            'validator_address' => $validator_address
        ] = $payload;

        $msg = $this->protoManager->getMsgNftUndelegate(
                $this->wallet->getAddress(),
            $validator_address,
            $id,
            $sub_token_ids
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
        
    }

    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */
    public function nftUpdateReserves($payload, $options = [])
    {
        [
            'id' => $id,
            'denom' => $denom,
            'sub_token_ids' => $sub_token_ids,
            'reserve' => $reserve
        ] = $payload;

        $msg = $this->protoManager->getMsgUpdateReserve(
                $this->wallet->getAddress(),
            $id,
            $sub_token_ids,
            $reserve,
            strtolower(trim($denom)),
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
        
    }

    public function nftRedelegate($payload, $options = [])
    {
        [
            'id' => $id,
            'sub_token_ids' => $sub_token_ids,
            'old_validator' => $old_validator,
            'new_validator' => $new_validator
        ] = $payload;

        $msg = $this->protoManager->getMsgNFTRedelegate(
                $this->wallet->getAddress(),
            $old_validator,
            $new_validator,
            $id,
            $sub_token_ids
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
        
    }

    private function nftCancelRedelegate($payload, $options = [])
    {
        [
            'id' => $id,
            'sub_token_ids' => $sub_token_ids,
            'old_validator' => $old_validator,
            'new_validator' => $new_validator,
            'creation_height' => $creation_height
        ] = $payload;

        $msg = $this->protoManager->getMsgCancelNFTRedelegate(
                $this->wallet->getAddress(),
            $old_validator,
            $new_validator,
            $creation_height,
            $id,
            $sub_token_ids
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
        
    }

    private function nftCancelUndelegate($payload, $options = [])
    {
        [
            'id' => $id,
            'sub_token_ids' => $sub_token_ids,
            'validator' => $validator,
            'creation_height' => $creation_height
        ] = $payload;

        $msg = $this->protoManager->getMsgCancelNFTUndelegate(
                $this->wallet->getAddress(),
            $validator,
            $creation_height,
            $id,
            $sub_token_ids
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
        
    }

    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */

    private function chainActivate($payload, $options = [])
    {
        [
            'chain_id' => $chain_id,
            'name' => $name
        ] = $payload;

        $msg = $this->protoManager->getMsgChainActivate(
                $this->wallet->getAddress(),
            $chain_id,
            $name,
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
        
    }

    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */

    private function chainDeactivate($payload, $options = [])
    {
        [
            'chain_id' => $chain_id
        ] = $payload;

        $msg = $this->protoManager->getMsgChainDeactivate(
                $this->wallet->getAddress(),
            $chain_id
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
        
    }

    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */

    public function swapInit($payload, $options = [])
    {
         [
            'recipient' => $recipient,
            'tokenSymbol' => $tokenSymbol,
            'amount' => $amount,
            'destChain' => $destChain
        ] = $payload;

        $transactionNumber = time();

        $msg = $this->protoManager->getMsgSwapInit(
                $this->wallet->getAddress(),
                $recipient,
                $tokenSymbol,
                amountUNIRecalculate($amount),
                $destChain,
                $transactionNumber,
                1
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
        
    }

    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */

    public function swapRedeem($payload, $options = [])
    {
        [
            'from' => $from,
            'recipient' => $recipient,
            'amount' => $amount,
            'tokenSymbol' => $tokenSymbol,
            'transactionNumber' => $transactionNumber,
            'fromChain' => $fromChain,
            'v' => $v,
            'r' => $r,
            's' => $s
        ] = $payload;

        $msg = $this->protoManager->getMsgSwapRedeem(
                $this->wallet->getAddress(),
                $from,
            $recipient,
            $amount,
            $tokenSymbol,
            $transactionNumber,
            $fromChain,
            1,
            hexdec($v),
            substr($r, 2, 64),
            substr($s, 2, 64)
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
        
    }

    private function updateCoinPrices($payload, $options = [])
    {
         [
            'oracle' => $oracle,
            'denoms' => $denoms,
            'quotes' => $quotes,
            'prices' => $prices,
            'updatedAt' => $updatedAt
        ] = $payload;

        $preparedCoinPrices = [];
        for ($i = 0; $i < count($denoms); $i++) {
            array_push($preparedCoinPrices, $this->protoManager->getCoinPrice($denoms[$i], $quotes[$i], $prices[$i], $this->protoManager->getTimestamp($updatedAt[$i])));
        }

        $msg = $this->protoManager->getMsgUpdateCoinPrices(
            $oracle,
            $preparedCoinPrices
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
        
    }

    public function reownLegacy($options = [])
    {
        $privateKey = $this->wallet->getPrivateKey();
        $bitcoinECDSA = new BitcoinECDSA();
        $bitcoinECDSA->setPrivateKey($privateKey);
        if($this->isNodeDirectMode) {
            $msg = $this->protoManager->getMsgReturnLegacy(
                $this->wallet->getAddress(),
                hex2bin($bitcoinECDSA->getPubKey())
            );
            $result = $this->sendTransaction($msg, $options);
        } else {
            $pubKey = $bitcoinECDSA->getPubKey();
            $result = $this->requester->post('rpc/check-legacy', (object) ['pubKey' => $pubKey]);
        }
        return $result;
    }


    /**
     * @param $addresssNft
     * @return array|mixed
     * @throws DecimalException
     */

    public function getNftMetadata($addressNft) {
        $response = $this->requester->getNftMetadata($addressNft);
        return $response;
    }

    public function getNftList($limit = 1, $offset = 0, $query = null) {
        $response = $this->requester->getNftList($this->wallet->getAddress(), $limit, $offset, $query);
        return $response;
    }

    /**
     * @param $addressNft
     * @return mixed
     * @throws DecimalException
     */

    public function getNft($addressNft)
    {
        $timestamp = time();
        $signature = $this->signWithElliptic([
            'nftId' => $addressNft,
            'timestamp' => $timestamp
        ]);
        return $this->requester->getNftById($addressNft, $timestamp, $signature);
    }

    /**
     * @param $address
     * @param int $limit
     * @param int $offset
     * @param null $query
     * @return null
     */
    public function getNfts($address, $limit = 10, $offset = 0, $query = null)
    {
        if ($address == $this->wallet->getAddress()) {
            $timestamp = time();
            $signature = $this->signWithElliptic(['timestamp' => $timestamp]);
            return $this->requester->getNfts($address, $timestamp, $signature, $limit, $offset, $query);
        } else {
            return null;
        }
    }

    /**
     * @param $address
     * @param int $txLimit
     * @return array|mixed
     * @throws DecimalException
     */

    public function getAddress($address, $txLimit = 0)
    {
        $params = $this->checkWalletAddressNft($address);
        return $this->requester->getAddress($address, $txLimit, $params);
    }

    /**
     * @param $address
     * @param int $limit
     * @param int $offset
     * @param string $order
     * @return array|mixed
     * @throws DecimalException
     */

    public function getNftsTxes($address, $limit = 10, $offset = 0, $order = self::DEFAULT_ORDER)
    {
        $params = $this->checkWalletAddressNft($address);
        return $this->requester->getNftsTxes($address, $limit, $offset, $order, $params);
    }

    /**
     * @param $addressNft
     * @param int $limit
     * @param int $offset
     * @param string $order
     * @return array|mixed
     * @throws DecimalException
     */

    public function getNftTxes($addressNft, $limit = 10, $offset = 0, $order = self::DEFAULT_ORDER)
    {
        $timestamp = time();
        $signature = $this->signWithElliptic([
            'nftId' => $addressNft,
            'timestamp' => $timestamp
        ]);

        return $this->requester->getNftTxes($addressNft, $timestamp, $signature, $limit, $offset, $order);
    }

    /**
     * @param $address
     * @return mixed
     * @throws DecimalException
     */

    public function getNftStakesByAddress($address)
    {
        return $this->requester->getNftStakesByAddress($address);
    }

    /**
     * @param $addressNft
     * @return mixed
     * @throws DecimalException
     */

    public function getStakesByAddress($addressNft)
    {
        return $this->requester->getStakesByAddress($addressNft);
    }

    public function getCoinsList($limit = 1, $offset = 0, $query = null)
    {
        $response = $this->requester->getCoinsList($this->wallet->getAddress(), $limit, $offset, $query);
        return $response;
    }

    /**
     * @param $object
     * @return mixed
     */

    private function signWithElliptic($object)
    {
        $privateKey = $this->wallet->getPrivateKey();
        $hash = Keccak::hash(json_encode($object), '256');
        $ec = new EC('secp256k1');
        $signature = $ec->sign($hash, $privateKey, 'hex', ['canonical' => true]);
        return $signature;
    }

    /**
     * @param $address
     * @return array
     */

    private function checkWalletAddressNft($address)
    {
        if ($address == $this->wallet->getAddress()) {
            $params['timestamp'] = time();
            $params['signature'] = $this->signWithElliptic(['timestamp' => $params['timestamp']]);
            return $params;
        } else {
            return [];
        }
    }

    /** */
    private function getEvmAddress($publicKey) 
    {
        return '0x' . substr(Keccak::hash(hex2bin(substr($publicKey, 2)), 256), -40);
    }

    function gen_uuid()
    {
        return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            // 32 bits for "time_low"
            mt_rand(0, 0xffff), mt_rand(0, 0xffff),

            // 16 bits for "time_mid"
            mt_rand(0, 0xffff),

            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            mt_rand(0, 0x0fff) | 0x4000,

            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            mt_rand(0, 0x3fff) | 0x8000,

            // 48 bits for "node"
            mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
        );
    }

    private function rlpHash($hash) {
        $rlp = new RLP;
        $result = Keccak::hash($rlp->encode($hash), '256');
        return $result;
    }
}?>
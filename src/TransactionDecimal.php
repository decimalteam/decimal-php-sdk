<?php

namespace DecimalSDK;

use stdClass;
use BitcoinPHP\BitcoinECDSA\BitcoinECDSA;
use \DecimalSDK\Errors\DecimalException;
use DecimalSDK\Utils\ProtoManager;
use DecimalSDK\Utils\ApiRequester;
use DecimalSDK\Utils\Crypto\Encrypt;
use DecimalSDK\Utils\ProtoManagerAddition;
use DecimalSDK\Utils\TransactionHelpers;
use DecimalSDK\Wallet;
use Elliptic\EC;
use Exception;
use Google\Protobuf\StringValue;
use GPBMetadata\Google\Protobuf\Timestamp;
use kornrunner\Keccak;
use Web3\Web3;
use Web3\Providers\HttpProvider;
use Web3\RequestManagers\HttpRequestManager;
use Web3\Contract;
use DecimalSDK\Utils\Abis;
use Web3p\EthereumTx\Transaction;
use Web3\Utils;

class TransactionDecimal
{
    use TransactionHelpers;
    const DXVALOPER = 'dxvaloper';

    //constants for fee
    const COIN_REDEEM_CHECK = 30;
    const COIN_ISSUE_CHECK = 0;
    const VALIDATOR_CANDIDATE = 10000;
    const VALIDATOR_DELEGATE = 200;
    const VALIDATOR_SET_ONLINE = 100;
    const VALIDATOR_SET_OFFLINE = 100;
    const VALIDATOR_UNBOND = 200;
    const VALIDATOR_CANDIDATE_EDIT = 10000;
    const MULTISIG_CREATE_WALLET = 100;
    const MULTISIG_CREATE_TX = 100;
    const MULTISIG_SIGN_TX = 100;
    const PROPOSAL_SUBMIT = 0;
    const PROPOSAL_VOTE = 0;
    const SWAP_INIT = 0;
    const SWAP_REDEEM = 0;
    const NFT_TRANSFER = 0;
    const NFT_DELEGATE = 0;
    const NFT_UNBOUND = 0;

    const MAX_SPEND_LIMIT = '100000000000';
    const ADDITIONAL_COMISSION = 20;
    const UNIT = 0.001;
    const PUB_KEY_TYPE = 'tendermint/PubKeySecp256k1';
    const DEFAULT_GAS_LIMIT = '9000000000000000000';
    const DEFAULT_ORDER_FIELD = 'createdAt';
    const DEFAULT_ORDER_DIRECTION = 'DESC';
    const DEFAULT_ORDER = 'order[' . self::DEFAULT_ORDER_FIELD . ']=' . self::DEFAULT_ORDER_DIRECTION;
    const CHAIN_ID = 2020;
    const SECONDS_TO_WAIT_FOR_RECEIPT = 15;
    const WEB3_RPC_NODE = 'https://devnet-val.decimalchain.com/web3/';

    private $account;
    private $wallet;
    private $requester;
    private $nodeMeta;
    private $protoManager;
    private $protoManagerAddition;


    protected $txSchemes = [
        'COIN_REDEEM_CHECK' => [
            'fee' => self::COIN_REDEEM_CHECK,
            'type' => 'coin/redeem_check',
            'scheme' => [
                'fieldTypes' => [
                    'check' => 'string',
                    'password' => 'string',
                ],
                'requiredFields' => [
                    'check',
                    'password',
                ],
            ],
        ],
        'COIN_ISSUE_CHECK' => [
            'fee' => self::COIN_ISSUE_CHECK,
            'type' => 'coin/issue_check',
            'scheme' => [
                'fieldTypes' => [
                    'nonce' => 'number',
                    'coin' => 'string',
                    'amount' => 'number',
                    'password' => 'string',
                    'dueBlock' => 'number',
                ],
                'requiredFields' => [
                    'nonce',
                    'coin',
                    'amount',
                    'password',
                    'dueBlock'
                ],
            ],
        ],
        'VALIDATOR_CANDIDATE' => [
            'fee' => self::VALIDATOR_CANDIDATE,
            'type' => 'validator/declare_candidate',
            'scheme' => [
                'fieldTypes' => [
                    'rewardAddress' => 'string',
                    'stake' => 'number',
                    'coin' => 'string',
                    'pubKey' => 'string',
                    'commission' => 'number',
                    'moniker' => 'string',
                    'identity' => 'string',
                    'website' => 'string',
                    'securityContact' => 'string',
                    'details' => 'string',
                ],
                'requiredFields' => [
                    'rewardAddress',
                    'stake',
                    'coin',
                    'pubKey',
                    'commission',
                    'moniker',
                    'identity',
                    'website',
                    'securityContact',
                    'details',
                ],
            ],
        ],
        'VALIDATOR_SET_ONLINE' => [
            'fee' => self::VALIDATOR_SET_ONLINE,
            'type' => 'validator/set_online'
        ],
        'VALIDATOR_SET_OFFLINE' => [
            'fee' => self::VALIDATOR_SET_OFFLINE,
            'type' => 'validator/set_offline'
        ],
        'VALIDATOR_CANDIDATE_EDIT' => [
            'fee' => self::VALIDATOR_CANDIDATE_EDIT,
            'type' => 'validator/edit_candidate',
            'scheme' => [
                'fieldTypes' => [
                    'rewardAddress' => 'string',
                    'moniker' => 'string',
                    'identity' => 'string',
                    'website' => 'string',
                    'securityContact' => 'string',
                    'details' => 'string',
                ],
                'requiredFields' => [
                    'rewardAddress',
                    'moniker',
                    'identity',
                    'website',
                    'securityContact',
                    'details',
                ],
            ],
        ],
        'MULTISIG_CREATE_WALLET' => [
            'fee' => self::MULTISIG_CREATE_WALLET,
            'type' => 'multisig/create_wallet',
            'scheme' => [
                'fieldTypes' => [
                    'threshold' => 'string',
                    'owners' => 'array',
                    'weights' => 'array',
                ],
                'requiredFields' => [
                    'threshold',
                    'owners',
                    'weights',
                ],
            ],
        ],
        'MULTISIG_CREATE_TX' => [
            'fee' => self::MULTISIG_CREATE_TX,
            'type' => 'multisig/create_transaction',
            'scheme' => [
                'fieldTypes' => [
                    'from' => 'string',
                    'to' => 'string',
                    'coin' => 'string',
                    'amount' => 'number',
                ],
                'requiredFields' => [
                    'from',
                    'to',
                    'coin',
                    'amount',
                ],
            ],
        ],
        'MULTISIG_SIGN_TX' => [
            'fee' => self::MULTISIG_SIGN_TX,
            'type' => 'multisig/sign_transaction',
            'scheme' => [
                'fieldTypes' => [
                    'txId' => 'string',
                ],
                'requiredFields' => [
                    'txId',
                ],
            ],
        ],
        'PROPOSAL_VOTE' => [
            'fee' => self::PROPOSAL_VOTE,
            'type' => 'cosmos-sdk/MsgVote',
            'scheme' => [
                'fieldTypes' => [
                    'id' => 'number',
                    'decision' => 'string'
                ],
                'requiredFields' => [
                    'id',
                    'decision'
                ],
            ]
        ],
        'SWAP_INIT' => [
            'fee' => self::SWAP_INIT,
            'type' => 'swap/msg_initialize',
            'scheme' => [
                'fieldTypes' => [
                    'recipient' => 'string',
                    'amount' => 'number',
                    'tokenSymbol' => 'string',
                    'destChain' => 'number'
                ],
                'requiredFields' => [
                    'recipient',
                    'amount',
                    'tokenSymbol',
                    'destChain'
                ],
            ]
        ],
        'CREATE_COIN' => [
            'fee' => self::SWAP_INIT,
            'type' => 'swap/msg_initialize',
            'scheme' => [
                'fieldTypes' => [
                    'recipient' => 'string',
                    'amount' => 'number',
                    'tokenSymbol' => 'string',
                    'destChain' => 'number'
                ],
                'requiredFields' => [
                    'recipient',
                    'amount',
                    'tokenSymbol',
                    'destChain'
                ],
            ]
        ],
        'SWAP_REDEEM' => [
            'fee' => self::SWAP_REDEEM,
            'type' => 'swap/msg_redeem',
            'scheme' => [
                'fieldTypes' => [
                    'from' => 'string',
                    'amount' => 'number',
                    'recipient' => 'string',
                    'tokenName' => 'string',
                    'transactionNumber' => 'string',
                    'tokenSymbol' => 'string',
                    'fromChain' => 'number',
                    'v' => 'number',
                    'r' => 'string',
                    's' => 'string'
                ],
                'requiredFields' => [
                    'from',
                    'amount',
                    'recipient',
                    'tokenName',
                    'transactionNumber',
                    'tokenSymbol',
                    'fromChain',
                    'v',
                    'r',
                    's'
                ],
            ]
        ],
    ];

    /**
     * Transaction constructor.
     * @param \DecimalSDK\Wallet $wallet
     * @param array $options
     * @throws DecimalException
     */

    public function __construct(Wallet $wallet, $options = [])
    {
        if (!$wallet) {
            throw new DecimalException('Wrong wallet');
        }

        $this->wallet = $wallet;
        $this->requester = new ApiRequester($wallet, $options);
        $this->signMeta = $this->requester->getSignMeta($this->wallet);
        $this->protoManager = ProtoManager::instance();
        $this->protoManagerAddition = ProtoManagerAddition::instance();

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
            'amountSell'    => $amountSell,
            'amountBuy'     => $amountBuy
        ] = $payload;

        $msg = $this->protoManager->getMsgSellCoin(
            $this->wallet->getAddress(),
            strtolower(trim($denomSell)),
            amountUNIRecalculate($amountSell),
            strtolower(trim($denomBuy)),
            amountUNIRecalculate($amountBuy)
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
            'minCoinToBuy' => $amountBuy
        ] = $payload;

        $msg = $this->protoManager->getMsgSellAllCoin(
            $this->wallet->getAddress(),
                strtolower(trim($denomSell)),
                strtolower(trim($denomBuy)),
                amountUNIRecalculate($amountBuy)
            );

        $result = $this->sendTransaction($msg, $options);
        return $result;
    }

    public function coinRedeemCheck($payload, $options = []){
        [
            'check' => $check,
            'proof'  => $proof
        ] = $payload;

        $msg = $this->protoManager->getMsgCoinRedeemCheck(
            $this->wallet->getAddress(),
                strtolower(trim($check)),
                strtolower(trim($proof))
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

        //  $tokenUrlArray = explode('/', $tokenURI);
        // $slug = end($tokenUrlArray);

        // $activeNft = $this->requester->post("https://devnet-dec2.console.decimalchain.com/api/nfts/service/$slug/activate", ['tokenId' => $id]);

        // if (!$activeNft['success']) {
        //     throw new DecimalException(json_decode($activeNft['error']['errorMessage']));
        // }

        $result = $this->sendTransaction($msg, $options);
        return $result;
    }

    private function sendTransaction($msg, $options) {
        $sequence = $this->wallet->getSequence();
        var_dump($sequence);
        $memo = isset($options['message']) ? $options['message'] : '';
        $txBody = $this->protoManager->getTxBody($msg, $memo);

        $fee = null;
        if (!isset($options['feeCoin'])) {
            $fee = $this->protoManager->getDefaultFee();
        } else {
            $feeCoin = $this->protoManager->getCoin($options['feeCoin'], '0000000000000000000000000000');
            $fee = $this->protoManager->getFee(self::DEFAULT_GAS_LIMIT, $feeCoin);

            $signObj = $this->singTransaction($txBody, $fee);

            $txRaw = $this->protoManager->getTxRaw(
                $txBody->serializeToString(),
                $signObj['authInfoBytes'],
                [$signObj['signature']],
            );

            $txBytes = $txRaw->serializeToString();

            $payload = [
                'tx_bytes' => bin2hex($txBytes),
                'denom' => $feeCoin->getDenom()
            ];
            $predictedFee = $this->requester->post('tx/estimate', $payload);
            if(isset($options['simulate'])) {
                if ($options['simulate'] == 'true') {
                    return $predictedFee->result->commission;
                }
            }
            $feeCoin = $this->protoManager->getCoin($options['feeCoin'], $predictedFee->result->commission);
            $fee = $this->protoManager->getFee(self::DEFAULT_GAS_LIMIT, $feeCoin);
        }
        
        $signObj = $this->singTransaction($txBody, $fee);
        $txRaw = $this->protoManager->getTxRaw(          
            $txBody->serializeToString(),
            $signObj['authInfoBytes'],
            [$signObj['signature']]
        );

        $txBytes = $txRaw->serializeToString();

        $broadcast = $this->protoManager->getBroadcastRequest($txBytes);

        $broadcastPreparedPayload = json_decode($broadcast->serializeToJsonString());

        $response = $this->requester->sendTxToBroadcast($broadcastPreparedPayload);

        // if($response->tx_response->txhash) {
        //     $tx = $this->requester->getTransaction("56078AF64D254724952D0A9F4290F7B8BFF4F21997674F024B29E43FFA13FC33");
        //     var_dump($tx);
        // }

        if($response->tx_response->code == 0) {
            $this->wallet->setSequence(++$sequence);
        }

        return $response;
    }

    private function singTransaction($txBody, $fee) {
        $privateKey = $this->wallet->getPrivateKey();
        $bitcoinECDSA = new BitcoinECDSA();
        $bitcoinECDSA->setPrivateKey($privateKey);

        $publicKey = $this->protoManager->getPubKey(hex2bin($bitcoinECDSA->getPubKey()));
        $signerInfo = $this->protoManager->getSignerInfo($publicKey, $this->wallet->getSequence());

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

    public function createToken($payload)
    {
        $tokenBytecode = $this->requester->getTokenCreationBytecode($payload);

        $response = $this->sendRawEvmTransaction(null, $tokenBytecode);

        return $response;
    }

    public function transferTokens($payload)
    {
        [
            'recipient' => $recipient,
            'amount' => $amount,
            'tokenAddress' => $tokenAddress
        ] = $payload;

        $transferSelector = '0xa9059cbb';
        $rawTransactionData = $transferSelector . str_pad(substr($recipient, 2), 64, '0', STR_PAD_LEFT) . str_pad(dec2hex(amountUNIRecalculate($amount)), 64, '0', STR_PAD_LEFT);

        return $this->sendRawEvmTransaction($tokenAddress, $rawTransactionData);
    }

    public function approveTokens($payload)
    {
        [
            'spender' => $spender,
            'amount' => $amount,
            'tokenAddress' => $tokenAddress
        ] = $payload;

        $approveSelector = '0x095ea7b3';
        $rawTransactionData = $approveSelector . str_pad(substr($spender, 2), 64, '0', STR_PAD_LEFT) . str_pad(dec2hex(amountUNIRecalculate($amount)), 64, '0', STR_PAD_LEFT);

        return $this->sendRawEvmTransaction($tokenAddress, $rawTransactionData);
    }

    public function mintTokens($payload)
    {
        [
            'recipient' => $recipient,
            'amount' => $amount,
            'tokenAddress' => $tokenAddress
        ] = $payload;


        $transferSelector = '0x40c10f19';

        $rawTransactionData = $transferSelector . str_pad(substr($recipient, 2), 64, '0', STR_PAD_LEFT) . str_pad(dec2hex(amountUNIRecalculate($amount)), 64, '0', STR_PAD_LEFT);

        return $this->sendRawEvmTransaction($tokenAddress, $rawTransactionData);
    }

    public function burnTokens($payload)
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

        return $this->sendRawEvmTransaction($tokenAddress, $rawTransactionData);
    }

    public function transferTokensFrom($payload)
    {
        [
            'from' => $from,
            'to' => $to,
            'amount' => $amount,
            'tokenAddress' => $tokenAddress,
        ] = $payload;

        $transferFromSelector = '0x23b872dd';
        $rawTransactionData = $transferFromSelector . str_pad(substr($from, 2), 64, '0', STR_PAD_LEFT) . str_pad(substr($to, 2), 64, '0', STR_PAD_LEFT) . str_pad(dec2hex(amountUNIRecalculate($amount)), 64, '0', STR_PAD_LEFT);

        return $this->sendRawEvmTransaction($tokenAddress, $rawTransactionData);
    }

    public function balanceOfToken($payload)
    {
        [
            'account' => $account,
            'tokenAddress' => $tokenAddress,
        ] = $payload;

        $web3 = new Web3(new HttpProvider(new HttpRequestManager(self::WEB3_RPC_NODE)));
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

    public function allowanceOfToken($payload)
    {
        [
            'owner' => $owner,
            'spender' => $spender,
            'tokenAddress' => $tokenAddress,
        ] = $payload;

        $web3 = new Web3(new HttpProvider(new HttpRequestManager(self::WEB3_RPC_NODE)));
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

    public function tokenInfo($payload)
    {
        [
            'tokenAddress' => $tokenAddress,
        ] = $payload;

        $web3 = new Web3(new HttpProvider(new HttpRequestManager(self::WEB3_RPC_NODE)));
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

    private function sendRawEvmTransaction($to, $rawTransactionData)
    {
        $web3 = new Web3(new HttpProvider(new HttpRequestManager(self::WEB3_RPC_NODE)));
        $sequence = $this->wallet->getSequence();

        $publicKey = $this->wallet->getPublicKey();
        $signer = $this->getEvmAddress($publicKey);

        $transactionParams = [
            'nonce' => "0x" . dechex($sequence),
            'from' => $signer,
            'to' => $to,
            'gas' => '0x' . dechex(80000),
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
            $transactionParams['chainId'] = self::CHAIN_ID;

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

    public function validatorCancelRedelegate($payload, $options = [])
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

    public function validatorCancelUndelegate($payload, $options = [])
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

        $msg = $this->protoManager->getMsgValidatorDeclare(
                $this->wallet->getValidatorAddress(),
            $rewardAddress,
            $stake,
            $coin,
            $serializedPubKey,
            $commission,
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
        // var_dump(intval($threshold));
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

        $type = '/decimal.coin.v1.MsgSendCoin';

        $preparedData = [
            'sender' => $from,
            'recipient' => $to,
            'amount' => $amount,
            'coin' => $coin,
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
            $denom,
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

    public function nftCancelRedelegate($payload, $options = [])
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

    public function nftCancelUndelegate($payload, $options = [])
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
        //EDITED
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
        //EDITED
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
                $amount,
                $destChain,
                $transactionNumber,
                1
        );

        $result = $this->sendTransaction($msg, $options);
        return $result;
        //EDITED
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

    public function updateCoinPrices($payload, $options = [])
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
        //EDITED
    }

    public function reownLegacy($payload, $options = [])
    {
        [ 'pubKey' => $pubKey ] = $payload;
        // $privateKey = $this->wallet->getPrivateKey();
        // $bitcoinECDSA = new BitcoinECDSA();
        // $bitcoinECDSA->setPrivateKey($privateKey);

        $result = $this->requester->post('rpc/check-legacy', (object) ['pubKey' => $pubKey]);

        // $msg = $this->protoManager->getMsgReturnLegacy(
        //         $this->wallet->getAddress(),
        //     hex2bin($bitcoinECDSA->getPubKey())
        // );

        // $result = $this->sendTransaction($msg, $options);
        return $result;
        //EDITED
    }

    /**
     * @param $type
     * @param $payload
     * @param $options
     * @return float
     * @throws DecimalException
     */

    public function estimateTxFee($type, $payload, $options)
    {
        foreach ($this->txSchemes as $key => $value) {
            if ($type == $this->txSchemes[$key]['type']) {
                $typeTrans = $key;
                $result = $this->checkRequiredFields($key, $payload);
            }
        }
        $payload['fee'] = $this->txSchemes[$typeTrans]['fee'];

        $prePayload = $this->formatePrepayload($type, $payload);
        $flag = ['estimateTxFee' => true];
        $preparedTx = $this->prepareTransaction($type, $prePayload, $flag);

        $fee = $this->getCommission($preparedTx, $options['feeCoin'], $payload['fee']);

        return $fee['value'] * 0.001;
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

    public function getNftList($limit, $offset, $query = null) {
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
     * @param $name
     * @param $payload
     * @return bool
     * @throws DecimalException
     */

    private function checkRequiredFields($name, $payload)
    {
        if (!$this->txSchemes[$name] || !$this->txSchemes[$name]['scheme']) {
            throw new DecimalException('Called scheme not exists');
        }

        $scheme = $this->txSchemes[$name]['scheme'];
        $errors = $this->fieldsValidation($scheme, $payload);
        if (count($scheme['requiredFields'])) {
            $errors = array_merge(array_fill_keys($scheme['requiredFields'], 'field is required'), $errors);
        }
        if (count($errors)) {
            throw new DecimalException("payload validation fails " . json_encode($errors, JSON_UNESCAPED_SLASHES));
        }

        return true;
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
}?>
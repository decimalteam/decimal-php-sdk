<?php


namespace DecimalSDK;

use BitcoinPHP\BitcoinECDSA\BitcoinECDSA;
use \DecimalSDK\Errors\DecimalException;
use DecimalSDK\Utils\ProtoManager;
use DecimalSDK\Utils\ApiRequester;
use DecimalSDK\Utils\Crypto\Encrypt;
use DecimalSDK\Utils\TransactionHelpers;
use DecimalSDK\Wallet;
use Elliptic\EC;
use kornrunner\Keccak;

class Transaction
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
    const NFT_UNBOND = 0;

    const MAX_SPEND_LIMIT = '100000000000';
    const ADDITIONAL_COMISSION = 20;
    const UNIT = 0.001;
    const PUB_KEY_TYPE = 'tendermint/PubKeySecp256k1';
    const DEFAULT_GAS_LIMIT = '9000000000000000000';
    const DEFAULT_ORDER_FIELD = 'createdAt';
    const DEFAULT_ORDER_DIRECTION = 'DESC';
    const DEFAULT_ORDER = 'order[' . self::DEFAULT_ORDER_FIELD . ']=' . self::DEFAULT_ORDER_DIRECTION;

    private $account;
    private $wallet;
    private $requester;
    private $nodeMeta;
    private $protoManager;


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

    }

    public function sendCoin($payload) {
        [
            'recipient' => $recipient,
            'denom' => $denom,
            'amount' => $amount
        ] = $payload;

        $msg = $this->protoManager->getMsgSendCoin(
            $this->wallet->getAddress(),
            $recipient,
            strtolower(trim($denom)),
            amountUNIRecalculate($amount)
        );

        $result = $this->sendTransaction($msg, []);
        var_dump($result);
        return $result;
    }


    public function sellCoin($payload) {
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

        $result = $this->sendTransaction($msg, []);
        return $result;
    }

    public function buyCoin($payload){
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

        $result = $this->sendTransaction($msg,[]);
        return $result;
    }

    public function sellAllCoin($payload){
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

        $result = $this->sendTransaction($msg, []);
        return $result;
    }


    public function multiSendCoins($payload) {
        $sendsPrepare = [];

        foreach($payload['sends'] as $send) {
            $sendsPrepare[] = [
                'amount' => amountUNIRecalculate($send['amount']),
                'denom' => strtolower(trim($send['coin'])),
                'to' => $send['to']
            ]; 
        }

        $msg = $this->protoManager->getMsgMultiSendCoins($this->wallet->getAddress(),$sendsPrepare);

        $result = $this->sendTransaction($msg,[]);
        return $result;
    }

    public function mintNft($id,$recipient = null,$denom,$tokenUrl,$quantity,$reserve,$allowMint) {
        $msg = $this->protoManager->getMsgMintNft(
            $this->wallet->getAddress(),
            $recipient,
            strtolower(trim($denom)),
            $id,
            $tokenUrl,
            amountUNIRecalculate($allowMint),
            $reserve,
            amountUNIRecalculate($quantity)
        );

        $tokenUrlArray = explode('/',$tokenUrl);
        $slug = end($tokenUrlArray);

        $activeNft = $this->requester->post("https://devnet-dec2.console.decimalchain.com/api/nfts/service/$slug/activate",['tokenId' => $id]);

        if (!$activeNft['success']) {
            throw new DecimalException(json_decode($activeNft['error']['errorMessage']));
        }

        $result = $this->sendTransaction($msg, []);
        return $result;
    }

    private function sendTransaction($msg, $options, $simulate = false) {
        $sequence = $this->wallet->getSequence();
        
        $memo = isset($options['message']) ? $options['message'] : '';
        $txBody = $this->protoManager->getTxBody($msg, $memo);

        $feeCoin = $this->protoManager->getCoin('del', '0');
        $fee = $this->protoManager->getFee('180000', $feeCoin);

        $signObj = $this->singTransaction($txBody, $fee);

        $txRaw = $this->protoManager->getTxRaw(
            $txBody->serializeToString(),
            $signObj['authInfoBytes'],
            [$signObj['signature']],
        );

        $txBytes = $txRaw->serializeToString();
        
        $payload = [
            'tx_bytes' => base64_encode($txBytes),
            'feeCoin' => $feeCoin->getDenom()
        ];


        // TODO need fix format 
        
        // $predictedFee = $this->requester->post('rpc/simulate_fee', $payload);

        // if (!is_int($predictedFee)) {
        //     var_dump('------------------');
        //     throw new DecimalException($predictedFee['error']['errorMessage']);
        // }
        
        $this->wallet->setSequence($sequence++);

        $fee = $this->protoManager->getFee("180000", $this->protoManager->getCoin('del', 0));

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

        if($response->tx_response->txhash) {
            $this->wallet->setSequence($sequence++);
        }

        return $response;
    }

    private function singTransaction($txBody, $fee) {
        $privateKey = $this->wallet->getPrivateKey();
        $bitcoinECDSA = new BitcoinECDSA();
        $bitcoinECDSA->setPrivateKey($privateKey);

        $publicKey = $this->protoManager->getPubKey(hex2bin($bitcoinECDSA->getPubKey()));
        $signerInfo = $this->protoManager->getSignerInfo($publicKey, $this->wallet->getSequence());

        $feeCoin = $this->protoManager->getCoin('del', 0);
        $fee = $this->protoManager->getFee('180000', $feeCoin);

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

    public function getTransaction($hash) {
        $response = $this->requester->getTransaction($hash);
        return $response;
    }

    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */

     public function validatorDelegate($payload){
        [
            'address'   => $validator,
            'coin'      => $denom,
            'stake'     => $stake
        ] = $payload;

        $msg = $this->protoManager->getMsgValidatorDelegate(
            $this->wallet->getAddress(),
            $validator,
            strtolower(trim($denom)),
            amountUNIRecalculate($stake)
        );

        $result = $this->sendTransaction($msg,[]);
        return $result;
    }

    public function validatorUnbound($payload) {
        [
            'address'   => $validator,
            'coin'      => $denom,
            'stake'     => $stake
        ] = $payload;

        $msg = $this->protoManager->getMsgValidatorUnbound(
            $this->wallet->getAddress(),
            $validator,
            strtolower(trim($denom)),
            amountUNIRecalculate($stake)
        );

        $result = $this->sendTransaction($msg,[]);
        return $result;
    }


    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */

    public function validatorDeclare($payload)
    {
        $type = $this->txSchemes['VALIDATOR_CANDIDATE']['type'];
        $result = $this->checkRequiredFields('VALIDATOR_CANDIDATE', $payload);
        $payload['fee'] = $this->txSchemes['VALIDATOR_CANDIDATE']['fee'];
        $prePayload = $this->formatePrepayload($type, $payload);
        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
    }

    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */

    public function validatorEdit($payload)
    {
        $type = $this->txSchemes['VALIDATOR_CANDIDATE_EDIT']['type'];
        $result = $this->checkRequiredFields('VALIDATOR_CANDIDATE_EDIT', $payload);
        $payload['fee'] = $this->txSchemes['VALIDATOR_CANDIDATE_EDIT']['fee'];
        $prePayload = $this->formatePrepayload($type, $payload);
        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
    }

    /**
     * @return array|mixed
     * @throws DecimalException
     */

    public function disableValidator()
    {
        $type = $this->txSchemes['VALIDATOR_SET_OFFLINE']['type'];

        $prePayload = $this->formatePrepayload($type);
        $payload['fee'] = $this->txSchemes['VALIDATOR_SET_OFFLINE']['fee'];
        $preparedTx = $this->prepareTransaction($type, $prePayload);
        return $this->requester->sendTx($preparedTx);
    }

    /**
     * @return array|mixed
     * @throws DecimalException
     */

    public function enableValidator()
    {
        $type = $this->txSchemes['VALIDATOR_SET_ONLINE']['type'];
        $prePayload = $this->formatePrepayload($type);
        $payload['fee'] = $this->txSchemes['VALIDATOR_SET_ONLINE']['fee'];
        $preparedTx = $this->prepareTransaction($type, $prePayload);
        return $this->requester->sendTx($preparedTx);
    }

    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */

    public function createCoin($payload)
    {
        $type = $this->txSchemes['COIN_CREATE']['type'];
        $result = $this->checkRequiredFields('COIN_CREATE', $payload);
        $payload['fee'] = $this->txSchemes['COIN_CREATE']['fee'];
        $prePayload = $this->formatePrepayload($type, $payload);
        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
    }

    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */

    public function multisigCreate($payload)
    {
        $type = $this->txSchemes['MULTISIG_CREATE_WALLET']['type'];
        $result = $this->checkRequiredFields('MULTISIG_CREATE_WALLET', $payload);
        $payload['fee'] = $this->txSchemes['MULTISIG_CREATE_WALLET']['fee'];
        $prePayload = $this->formatePrepayload($type, $payload);
        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
    }

    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */

    public function multisigCreateTX($payload)
    {
        $type = $this->txSchemes['MULTISIG_CREATE_TX']['type'];
        $result = $this->checkRequiredFields('MULTISIG_CREATE_TX', $payload);
        $payload['fee'] = $this->txSchemes['MULTISIG_CREATE_TX']['fee'];
        $prePayload = $this->formatePrepayload($type, $payload);
        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
    }

    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */

    public function multisigSignTX($payload)
    {
        $type = $this->txSchemes['MULTISIG_SIGN_TX']['type'];
        $result = $this->checkRequiredFields('MULTISIG_SIGN_TX', $payload);
        $payload['fee'] = $this->txSchemes['MULTISIG_SIGN_TX']['fee'];
        $prePayload = $this->formatePrepayload($type, $payload);
        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
    }
    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */


    public function nftUnbond($payload)
    {
        $type = $this->txSchemes['NFT_UNBOND']['type'];
        $result = $this->checkRequiredFields('NFT_UNBOND', $payload);

        $payload['fee'] = $this->txSchemes['NFT_UNBOND']['fee'];
        $prePayload = $this->formatePrepayload($type, $payload);
        $preparedTx = $this->prepareTransaction($type, $prePayload);

        return $this->requester->sendTx($preparedTx);
    }

    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */

    public function proposalVote($payload)
    {
        $type = $this->txSchemes['PROPOSAL_VOTE']['type'];
        $result = $this->checkRequiredFields('PROPOSAL_VOTE', $payload);
        $payload['fee'] = $this->txSchemes['PROPOSAL_VOTE']['fee'];

        $prePayload = $this->formatePrepayload($type, $payload);

        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
    }

    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */

    public function msgSwapInit($payload)
    {
        $type = $this->txSchemes['SWAP_INIT']['type'];
        $result = $this->checkRequiredFields('SWAP_INIT', $payload);
        $payload['fee'] = $this->txSchemes['SWAP_INIT']['fee'];
        $prePayload = $this->formatePrepayload($type, $payload);
        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
    }

    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */

    public function msgSwapRedeem($payload)
    {
        $type = $this->txSchemes['SWAP_REDEEM']['type'];
        $result = $this->checkRequiredFields('SWAP_REDEEM', $payload);
        $payload['fee'] = $this->txSchemes['SWAP_REDEEM']['fee'];
        $prePayload = $this->formatePrepayload($type, $payload);
        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
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

        $fee = $this->getCommission($preparedTx, $options['freeCoin'], $payload['fee']);

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
        $params = $this->checkWalletAddressNft($address);
        return $this->requester->getNftStakesByAddress($address, $params);
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
     * @param null $data
     * @return string
     * @throws \Exception
     */

    private function guidv4($data = null)
    {
        // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
        $data = $data ?? random_bytes(16);
        assert(strlen($data) == 16);

        // Set version to 0100
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        // Set bits 6-7 to 10
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

        // Output the 36 character UUID.
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
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
}

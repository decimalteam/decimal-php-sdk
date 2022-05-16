<?php


namespace DecimalSDK;

use \DecimalSDK\Errors\DecimalException;
use DecimalSDK\Utils\ApiRequester;
use DecimalSDK\Utils\TransactionHelpers;
use DecimalSDK\Utils\WalletHelpers;
use DecimalSDK\Wallet;
use Elliptic\EC;
use kornrunner\Keccak;

class Transaction
{
    use TransactionHelpers;

    const DXVALOPER = 'dxvaloper';

    //constants for fee
    const COIN_SEND = 10;
    const COIN_BUY = 100;
    const COIN_CREATE = 100;
    const COIN_SELL = 100;
    const COIN_MULTISEND = 8;
    const COIN_SELL_ALL = 100;
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
    const COIN_UPDATE = 0;
    const NFT_MINT = 0;
    const NFT_BURN = 0;
    const NFT_EDIT_METADATA = 0;
    const NFT_UPDATE_RESERVE = 0;
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

    protected $txSchemes = [
        'COIN_BUY' => [
            'fee' => self::COIN_BUY,
            'type' => 'coin/buy_coin',
            'scheme' => [
                'fieldTypes' => [
                    'buyCoin' => 'string',
                    'amount' => 'number',
                    'spendCoin' => 'string',
                    'maxSpendLimit' => 'number',
                ],
                'requiredFields' => [
                    'buyCoin',
                    'amount',
                    'spendCoin',
                ],
            ],
        ],
        'COIN_CREATE' => [
            'fee' => self::COIN_CREATE,
            'type' => 'coin/create_coin',
            'scheme' => [
                'fieldTypes' => [
                    'title' => 'string',
                    'ticker' => 'string',
                    'initSupply' => 'number',
                    'maxSupply' => 'number',
                    'reserve' => 'number',
                    'crr' => 'number'
                ],
                'requiredFields' => [
                    'title',
                    'ticker',
                    'initSupply',
                    'maxSupply',
                    'reserve',
                    'crr',
                ],
            ],
        ],
        'COIN_UPDATE' => [
            'fee' => self::COIN_UPDATE,
            'type' => 'coin/update_coin',
            'scheme' => [
                'fieldTypes' => [
                    'ticker' => 'string',
                    'maxSupply' => 'number',
                    'identity' => 'string'
                ],
                'requiredFields' => [
                    'ticker',
//                    'maxSupply',
//                    'identity'
                ]
            ]
        ],
        'COIN_SELL' => [
            'fee' => self::COIN_SELL,
            'type' => 'coin/sell_coin',
            'scheme' => [
                'fieldTypes' => [
                    'getCoin' => 'string',
                    'amount' => 'number',
                    'sellCoin' => 'string',
                    'minBuyLimit' => 'number',
                ],
                'requiredFields' => [
                    'getCoin',
                    'amount',
                    'sellCoin'
                ],
            ],
        ],
        'COIN_SEND' => [
            'fee' => self::COIN_SEND,
            'type' => 'coin/send_coin',
            'scheme' => [
                'fieldTypes' => [
                    'to' => 'string',
                    'amount' => 'number',
                    'coin' => 'string',
                ],
                'requiredFields' => [
                    'to',
                    'amount',
                    'coin'
                ],
            ],
        ],

        //todo check schema multisend
        'COIN_MULTISEND' => [
            'fee' => self::COIN_MULTISEND,
            'type' => 'coin/multi_send_coin',
            'scheme' => [
                'fieldTypes' => [
                ],
                'requiredFields' => [
                    //todo check it too
                    //'to',
                    //'amount',
                    //'coin'
                ],
            ],
        ],
        'COIN_SELL_ALL' => [
            'fee' => self::COIN_SELL_ALL,
            'type' => 'coin/sell_all_coin',
            'scheme' => [
                'fieldTypes' => [
                    'sellCoin' => 'string',
                    'getCoin' => 'string',
                    'minBuyLimit' => 'number',
                ],
                'requiredFields' => [
                    'sellCoin',
                    'getCoin',
                ],
            ],
        ],
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
        'VALIDATOR_DELEGATE' => [
            'fee' => self::VALIDATOR_DELEGATE,
            'type' => 'validator/delegate',
            'scheme' => [
                'fieldTypes' => [
                    'address' => 'string',
                    'stake' => 'number',
                    'coin' => 'string',
                ],
                'requiredFields' => [
                    'address',
                    'stake',
                    'coin'
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
        'VALIDATOR_UNBOND' => [
            'fee' => self::VALIDATOR_UNBOND,
            'type' => 'validator/unbond',
            'scheme' => [
                'fieldTypes' => [
                    'address' => 'string',
                    'stake' => 'number',
                    'coin' => 'string',
                ],
                'requiredFields' => [
                    'address',
                    'stake',
                    'coin'
                ],
            ],
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
        'NFT_MINT' => [
            'fee' => self::NFT_MINT,
            'type' => 'nft/msg_mint',
            'scheme' => [
                'fieldTypes' => [
                    'id' => 'string',
                    'denom' => 'string',
                    'token_uri' => 'string',
                    'quantity' => 'integer',
                    'allow_mint' => 'boolean',
                    'reserve' => 'number'
                ],
                'requiredFields' => [
                    'id',
                    'denom',
                    'token_uri',
                    'quantity',
                    'allow_mint',
                    'reserve'
                ],
            ],
        ],
        'NFT_BURN' => [
            'fee' => self::NFT_BURN,
            'type' => 'nft/msg_burn',
            'scheme' => [
                'fieldTypes' => [
                    'denom' => 'string',
                    'id' => 'string',
                    'sub_token_ids' => 'array',

                ],
                'requiredFields' => [
                    'denom',
                    'id',
                    'sub_token_ids'
                ],
            ],
        ],
        'NFT_EDIT_METADATA' => [
            'fee' => self::NFT_EDIT_METADATA,
            'type' => 'nft/msg_edit_metadata',
            'scheme' => [
                'fieldTypes' => [
                    'id' => 'string',
                    'token_uri' => 'string',
                    'denom' => 'string',
                ],
                'requiredFields' => [
                    'id',
                    'token_uri',
                    'denom'
                ],
            ],
        ],
        'NFT_UPDATE_RESERVE' => [
            'fee' => self::NFT_UPDATE_RESERVE,
            'type' => 'nft/update_reserve',
            'scheme' => [
                'fieldTypes' => [
                    'id' => 'string',
                    'reserve' => 'string',
                    'sub_token_ids' => 'array',
                    'denom' => 'string'
                ],
                'requiredFields' => [
                    'id',
                    'reserve',
                ],
            ],
        ],
        'NFT_TRANSFER' => [
            'fee' => self::NFT_TRANSFER,
            'type' => 'nft/msg_transfer',
            'scheme' => [
                'fieldTypes' => [
                    'id' => 'string',
                    'recipient' => 'string',
                    'sub_token_ids' => 'array',
                    'denom' => 'string'
                ],
                'requiredFields' => [
                    'id',
                    'recipient',
                    'sub_token_ids',
                    'denom'
                ],
            ],
        ],
        'NFT_DELEGATE' => [
            'fee' => self::NFT_DELEGATE,
            'type' => 'validator/delegate_nft',
            'scheme' => [
                'fieldTypes' => [
                    'id' => 'string',
                    'validator_address' => 'string',
                    'sub_token_ids' => 'array',
                    'denom' => 'string'
                ],
                'requiredFields' => [
                    'id',
                    'validator_address',
                    'sub_token_ids',
                    'denom'
                ],
            ],
        ],
        'NFT_UNBOND' => [
            'fee' => self::NFT_UNBOND,
            'type' => 'validator/unbond_nft',
            'scheme' => [
                'fieldTypes' => [
                    'id' => 'string',
                    'validator_address' => 'string',
                    'sub_token_ids' => 'array',
                    'denom' => 'string'
                ],
                'requiredFields' => [
                    'id',
                    'validator_address',
                    'sub_token_ids',
                    'denom'
                ],
            ],
        ],
        'NFT_METADATA' => [
            'fee' => 0,
            'type' => 'nfts/',
            'scheme' => [
                'fieldTypes' => [],
                'requiredFields' => [],
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
        $this->requester = new ApiRequester($options);
        $this->signMeta = $this->requester->getSignMeta($this->wallet);
    }

    /**
     * @param $payload
     * @return array
     * @throws DecimalException
     */
    public function sendCoins($payload)
    {
        $type = $this->txSchemes['COIN_SEND']['type'];
        $this->checkRequiredFields('COIN_SEND', $payload);
        $payload['fee'] = $this->txSchemes['COIN_SEND']['fee'];
        $prePayload = $this->formatePrepayload($type, $payload);
        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
    }

    /**
     * Multisend Coin Transaction
     *
     * @param $payload array
     */
    public function multisendCoins($payload)
    {
        $type = $this->txSchemes['COIN_MULTISEND']['type'];

        foreach ($payload as $data){
            $this->checkRequiredFields('COIN_SEND', $data);
        }

        $payload['fee'] = $this->txSchemes['COIN_MULTISEND']['fee'];

        $prePayload = $this->formatePrepayload($type, $payload);

        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);

        return $this->requester->sendTx($preparedTx);
    }

    /**
     * get sends array for multiply send coins
     *
     * @param $payload
     * @return array
     */
    protected function getMultiplySends($payload)
    {
        $out = [];
        foreach ($payload as $key => $send) {
            if($key != 'fee'){
                $out[] = [
                    'receiver' => WalletHelpers::checkAddress($send['to'], WalletHelpers::DX),
                    'coin' => [
                        'amount' => amountUNIRecalculate($send['amount']),
                        'denom' => strtolower($send['coin']),
                    ]
                ];
            }
        }
        return $out;
    }

    /**
     * @param $payload
     * @return array
     * @throws DecimalException
     */
    public function getCoin($payload)
    {
        $type = $this->txSchemes['COIN_BUY']['type'];
        $this->checkRequiredFields('COIN_BUY', $payload);
        $payload['fee'] = $this->txSchemes['COIN_BUY']['fee'];
        if (isset($payload['maxSpendLimit'])) {
            $maxSpendLimit = amountUNIRecalculate($payload['maxSpendLimit']);
        } else {
            $maxSpendLimit = amountUNIRecalculate(100000000000);
        }
        $prePayload = [
            'sender' => $this->wallet->getAddress(),
            'coin_to_buy' => [
                'amount' => amountUNIRecalculate($payload['amount']),
                'denom' => strtolower($payload['buyCoin']),
            ],
            'max_coin_to_sell' => [
                'amount' => $maxSpendLimit,
                'denom' => strtolower($payload['spendCoin']),
            ],
        ];
        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);

        return $this->requester->sendTx($preparedTx);
    }

    /**
     * @param $payload
     * @return array
     * @throws DecimalException
     */
    public function sellCoin($payload)
    {
        $type = $this->txSchemes['COIN_SELL']['type'];
        $this->checkRequiredFields('COIN_SELL', $payload);
        $payload['fee'] = $this->txSchemes['COIN_SELL']['fee'];
        $prePayload = $this->formatePrepayload($type, $payload);
        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
    }

    /**
     * @param $payload
     * @return array
     * @throws DecimalException
     */
    public function sellAllCoinsData($payload)
    {
        $type = $this->txSchemes['COIN_SELL_ALL']['type'];
        $this->checkRequiredFields('COIN_SELL_ALL', $payload);
        $payload['fee'] = $this->txSchemes['COIN_SELL_ALL']['fee'];
        $prePayload = $this->formatePrepayload($type, $payload);
        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
    }

    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */

    public function validatorDelegate($payload)
    {
        $type = $this->txSchemes['VALIDATOR_DELEGATE']['type'];
        $result = $this->checkRequiredFields('VALIDATOR_DELEGATE', $payload);
        $payload['fee'] = $this->txSchemes['VALIDATOR_DELEGATE']['fee'];
        $prePayload = $this->formatePrepayload($type, $payload);
        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
    }

    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */

    public function validatorUnbound($payload)
    {
        $type = $this->txSchemes['VALIDATOR_UNBOND']['type'];
        $result = $this->checkRequiredFields('VALIDATOR_UNBOND', $payload);
        $payload['fee'] = $this->txSchemes['VALIDATOR_UNBOND']['fee'];
        $prePayload = $this->formatePrepayload($type, $payload);
        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
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

    public function updateCoin($payload)
    {
        $type = $this->txSchemes['COIN_UPDATE']['type'];
        $result = $this->checkRequiredFields('COIN_UPDATE', $payload);
        $payload['fee'] = $this->txSchemes['COIN_UPDATE']['fee'];
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

    public function createNftMint($payload)
    {
        $type = $this->txSchemes['NFT_MINT']['type'];
        $result = $this->checkRequiredFields('NFT_MINT', $payload);
        $payload['fee'] = $this->txSchemes['NFT_MINT']['fee'];
        $prePayload = $this->formatePrepayload($type, $payload);
        $preparedTx = $this->prepareTransaction($type, $prePayload, ['allow_mint' => $payload['allow_mint']]);

        return $this->requester->sendTx($preparedTx);
    }

    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */

    public function burnNft($payload)
    {
        $type = $this->txSchemes['NFT_BURN']['type'];
        $result = $this->checkRequiredFields('NFT_BURN', $payload);
        $payload['fee'] = $this->txSchemes['NFT_BURN']['fee'];
        $prePayload = $this->formatePrepayload($type, $payload);
        $preparedTx = $this->prepareTransaction($type, $prePayload);
        return $this->requester->sendTx($preparedTx);
    }

    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */

    public function transferNft($payload)
    {
        $type = $this->txSchemes['NFT_TRANSFER']['type'];
        $result = $this->checkRequiredFields('NFT_TRANSFER', $payload);

        $payload['fee'] = $this->txSchemes['NFT_TRANSFER']['fee'];
        $prePayload = $this->formatePrepayload($type, $payload);
        $preparedTx = $this->prepareTransaction($type, $prePayload);

        return $this->requester->sendTx($preparedTx);
    }

    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */

    public function editNftMetadata($payload)
    {
        $type = $this->txSchemes['NFT_EDIT_METADATA']['type'];
        $result = $this->checkRequiredFields('NFT_EDIT_METADATA', $payload);

        $payload['fee'] = $this->txSchemes['NFT_EDIT_METADATA']['fee'];
        $prePayload = $this->formatePrepayload($type, $payload);
        $preparedTx = $this->prepareTransaction($type, $prePayload);

        return $this->requester->sendTx($preparedTx);
    }

    public function nftUpdateReserve($payload)
    {
        $type = $this->txSchemes['NFT_UPDATE_RESERVE']['type'];
        $result = $this->checkRequiredFields('NFT_UPDATE_RESERVE', $payload);

        $payload['fee'] = $this->txSchemes['NFT_UPDATE_RESERVE']['fee'];
        $prePayload = $this->formatePrepayload($type, $payload);
        $preparedTx = $this->prepareTransaction($type, $prePayload);

        return $this->requester->sendTx($preparedTx);
    }

    /**
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */

    public function nftDelegate($payload)
    {
        $type = $this->txSchemes['NFT_DELEGATE']['type'];
        $result = $this->checkRequiredFields('NFT_DELEGATE', $payload);

        $payload['fee'] = $this->txSchemes['NFT_DELEGATE']['fee'];
        $prePayload = $this->formatePrepayload($type, $payload);
        $preparedTx = $this->prepareTransaction($type, $prePayload);

        return $this->requester->sendTx($preparedTx);
    }

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

    public function getNftMetadata($addressNft)
    {
        $url = $this->txSchemes['NFT_METADATA']['type'] . $addressNft . "??walletAddress=" . $this->wallet->getAddress();
        $payload['fee'] = $this->txSchemes['NFT_METADATA']['fee'];

        $wrappedTx = $this->wrapTx($url, $payload, [], false);
        $preparedTx = $this->makeSignature($payload);

        return $this->requester->getNftMetadata(
            $addressNft,
            $this->wallet->getAddress(),
            $preparedTx
        );
    }

    /**
     * @param $hash
     * @return mixed
     */
    public function checkTransaction($hash)
    {
        return $this->requester->checkTransaction($hash);
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
        return $this->requester->getCoinsList($limit, $offset, $query);
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

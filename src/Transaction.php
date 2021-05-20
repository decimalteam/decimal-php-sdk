<?php


namespace DecimalSDK;

use \DecimalSDK\Errors\DecimalException;
use DecimalSDK\Utils\ApiRequester;
use DecimalSDK\Utils\TransactionHelpers;
use DecimalSDK\Wallet;

class Transaction
{
    use TransactionHelpers;

    const MAX_SPEND_LIMIT = '100000000000';
    const ADDITIONAL_COMISSION = 20;
    const UNIT = 0.001;
    const PUB_KEY_TYPE = 'tendermint/PubKeySecp256k1';
    const DEFAULT_GAS_LIMIT = '9000000000000000000';

    private $account;
    private $wallet;
    private $requester;
    private $nodeMeta;

    protected $txSchemes = [
        'COIN_BUY' => [
            'fee' => 100,
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
            'fee' => 100,
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
            'fee' => 100,
            'type' => 'coin/update_coin',
            'scheme' => [
                'fieldTypes' => [
                    'ticker' => 'string',
                    'maxSupply' => 'number',
                    'identity' => 'string'
                ],
                'requiredFields' => [
                    'ticker',
                    'maxSupply',
                    'identity'
                ]
            ]
        ],
        'COIN_SELL' => [
            'fee' => 100,
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
            'fee' => 10,
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
            'fee' => 10,
            'type' => 'coin/multi_send_coin',
            'scheme' => [
                'fieldTypes' => [
                    'sends' => 'array'
                ],
                'requiredFields' => [
                    'sends',
                    //todo check it too
                    //'to',
                    //'amount',
                    //'coin'
                ],
            ],
        ],
        'COIN_SELL_ALL' => [
            'fee' => 100,
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
            'fee' => 30,
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
            'fee' => 0,
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
            'fee' => 10000,
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
            'fee' => 200,
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
            'fee' => 100,
            'type' => 'validator/set_online'
        ],
        'VALIDATOR_SET_OFFLINE' => [
            'fee' => 100,
            'type' => 'validator/set_offline'
        ],
        'VALIDATOR_UNBOND' => [
            'fee' => 200,
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
            'fee' => 10000,
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
            'fee' => 100,
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
            'fee' => 100,
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
            'fee' => 100,
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
            'fee' => 0,
            'type' => 'nft/msg_mint',
            'scheme' => [
                'fieldTypes' => [
                    'denom' => 'string',
                    'token_uri' => 'string',
                    'quantity' => 'number',
                    'allow_mint' => 'boolean',
                    'reserve' => 'number'
                ],
                'requiredFields' => [
                    'denom',
                    'token_uri',
                    'quantity',
                    'allow_mint',
                    'reserve'
                ],
            ],
        ],
        'NFT_BURN' => [
            'fee' => 0,
            'type' => 'nft/msg_burn',
            'scheme' => [
                'fieldTypes' => [
                    'denom' => 'string',
                    'id' => 'string',
                    'quantity' => 'number',

                ],
                'requiredFields' => [
                    'denom',
                    'id',
                    'quantity'
                ],
            ],
        ],
        'NFT_EDIT_METADATA' => [
            'fee' => 0,
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
        'NFT_TRANSFER' => [
            'fee' => 0,
            'type' => 'nft/msg_transfer',
            'scheme' => [
                'fieldTypes' => [
                    'id' => 'string',
                    'recipient' => 'string',
                    'quantity' => 'number',
                    'denom' => 'string'
                ],
                'requiredFields' => [
                    'id',
                    'recipient',
                    'quantity',
                    'denom'
                ],
            ],
        ],
        'PROPOSAL_VOTE' => [
            'fee' => 100,
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
        'SWAP_HTLT' => [
            'fee' => 100,
            'type' => 'swap/msg_htlt',
            'scheme' => [
                'fieldTypes' => [
                    'type' => 'string',
                    'from' => 'string',
                    'recipient' => 'string',
                    'secretHash' => 'string',
                    'amount' => 'number',
                    'coin' => 'string'
                ],
                'requiredFields' => [
                    'type',
                    'from',
                    'recipient',
                    'secretHash',
                    'amount',
                    'coin'
                ],
            ]
        ],
        'SWAP_REDEEM' => [
            'fee' => 100,
            'type' => 'swap/msg_redeem',
            'scheme' => [
                'fieldTypes' => [
                    'from' => 'string',
                    'secretHash' => 'string',
                ],
                'requiredFields' => [
                    'from',
                    'secretHash',
                ],
            ]
        ],
        'SWAP_REFUND' => [
            'fee' => 100,
            'type' => 'swap/msg_refund',
            'scheme' => [
                'fieldTypes' => [
                    'from' => 'string',
                    'secretHash' => 'string',
                ],
                'requiredFields' => [
                    'from',
                    'secretHash',
                ],
            ]
        ]
    ];

    /**
     * Transaction constructor.
     * @param \DecimalSDK\Wallet $wallet
     * @param array $options
     * @throws DecimalException
     */

    public function __construct(Wallet $wallet, $options = [])
    {
        if (!$wallet) throw new DecimalException('Wrong wallet');

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

        $this->checkRequiredFields('COIN_MULTISEND', $payload);
        $payload['fee'] = $this->txSchemes['COIN_MULTISEND']['fee'];

        $prePayload = $this->formatePrepayload($type, $payload);

        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        //dd($preparedTx);
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
        foreach ($payload['sends'] as $send) {
            $out[] = [
                'receiver' => $send['to'],
                'coin' => [
                    'amount' => amountUNIRecalculate($send['amount']),
                    'denom' => strtolower($send['coin']),
                ]
            ];
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
        $prePayload = [
            'sender' => $this->wallet->getAddress(),
            'coin_to_buy' => [
                'amount' => amountUNIRecalculate($payload['amount']),
                'denom' => strtolower($payload['buyCoin']),
            ],
            'max_coin_to_sell' => [
                'amount' => amountUNIRecalculate($maxSpendLimit),
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
        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload, $payload);
        return $this->requester->sendTx($preparedTx);
    }

    /**
     * @return array|mixed
     * @throws DecimalException
     */

    public function disableValidator()
    {
        $type = $this->txSchemes['VALIDATOR_SET_OFFLINE']['type'];

        $prePayload = $this->formatePrepayload($type, $payload);
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

        $prePayload = $this->formatePrepayload($type, $payload);
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

    public function msgSwapHTLT($payload)
    {
        $type = $this->txSchemes['SWAP_HTLT']['type'];
        $result = $this->checkRequiredFields('SWAP_HTLT', $payload);
        $payload['fee'] = $this->txSchemes['SWAP_HTLT']['fee'];
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
     * @param $payload
     * @return array|mixed
     * @throws DecimalException
     */

    public function msgSwapRefund($payload)
    {
        $type = $this->txSchemes['SWAP_REFUND']['type'];
        $result = $this->checkRequiredFields('SWAP_REFUND', $payload);
        $payload['fee'] = $this->txSchemes['SWAP_REFUND']['fee'];
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
        if (count($scheme['requiredFields']))
            $errors = array_merge(array_fill_keys($scheme['requiredFields'], 'field is required'), $errors);
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
}

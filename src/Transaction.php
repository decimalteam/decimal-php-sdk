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

    private $account;
    private $wallet;
    private $requester;
    private $nodeMeta;

    protected $unit = 0.001;
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
                    'reserve' => 'number',
                    'allow_mint' => 'boolean'
                ],
                'requiredFields' => [
                    'denom',
                    'token_uri',
                    'quantity',
                    'reserve',
                    'allow_mint'
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
                    'quantity',
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
                ],
                'requiredFields' => [
                    'id',
                    'token_uri',
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
                ],
                'requiredFields' => [
                    'id',
                    'recipient',
                    'quantity',
                ],
            ],
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
        $prePayload = [
            'sender' => $this->wallet->getAddress(),
            'receiver' => $payload['to'],
            'coin' => [
                'amount' => amountUNIRecalculate($payload['amount']),
                'denom' => strtolower($payload['coin']),
            ]
        ];

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
        $prePayload = [
            'sender' => $this->wallet->getAddress(),
            'sends' => $this->getMultiplySends($payload)
            //todo make sends from payload
        ];

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
        foreach ($payload['sends'] as $send){
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
        $maxSpendLimit = $payload['maxSpendLimit'] ?? self::MAX_SPEND_LIMIT;
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
        $minBuyLimit = $payload['minBuyLimit'] ?? '1';
        $type = $this->txSchemes['COIN_SELL']['type'];
        $this->checkRequiredFields('COIN_SELL', $payload);
        $payload['fee'] = $this->txSchemes['COIN_SELL']['fee'];
        $prePayload = [
            'sender' => $this->wallet->getAddress(),
            'coin_to_sell' => [
                'amount' => amountUNIRecalculate($payload['amount']),
                'denom' => strtolower($payload['sellCoin']),
            ],
            'min_coin_to_buy' => [
                'amount' => $minBuyLimit,
                'denom' => strtolower($payload['getCoin']),
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
    public function sellAllCoinsData($payload)
    {
        $type = $this->txSchemes['COIN_SELL_ALL']['type'];
        $this->checkRequiredFields('COIN_SELL_ALL', $payload);
        $payload['fee'] = $this->txSchemes['COIN_SELL_ALL']['fee'];
        $prePayload = [
            'sender' => $this->wallet->getAddress(),
            'coin_to_sell' => [
                'amount' => '0',
                'denom' => strtolower($payload['sellCoin']),
            ],
            'min_coin_to_buy' => [
                'amount' => $payload['minBuyLimit'] ?? '1',
                'denom' => strtolower($payload['getCoin']),
            ],
        ];

        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
    }

    public function validatorDelegate($payload)
    {
        $type = $this->txSchemes['VALIDATOR_DELEGATE']['type'];
        $result = $this->checkRequiredFields('VALIDATOR_DELEGATE', $payload);
        $payload['fee'] = $this->txSchemes['VALIDATOR_DELEGATE']['fee'];
        $prePayload = [
            'delegator_address' => $this->wallet->getAddress(),
            'validator_address' => $payload['address'],
            'coin' => [
                'amount' => amountUNIRecalculate($payload['stake']),
                'denom' => strtolower($payload['coin']),
            ],
        ];

        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
    }

    public function validatorUnbound($payload)
    {
        $type = $this->txSchemes['VALIDATOR_UNBOND']['type'];
        $result = $this->checkRequiredFields('VALIDATOR_UNBOND', $payload);
        $payload['fee'] = $this->txSchemes['VALIDATOR_UNBOND']['fee'];
        $prePayload = [
            'delegator_address' => $this->wallet->getAddress(),
            'validator_address' => $payload['address'],
            'coin' => [
                'amount' => amountUNIRecalculate($payload['stake']),
                'denom' => strtolower($payload['coin']),
            ],
        ];

        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
    }

    public function validatorDeclare($payload)
    {
        $type = $this->txSchemes['VALIDATOR_CANDIDATE']['type'];
        $result = $this->checkRequiredFields('VALIDATOR_CANDIDATE', $payload);
        $payload['fee'] = $this->txSchemes['VALIDATOR_CANDIDATE']['fee'];
        $prePayload = [
            'commission' => ($payload['commission'] / 100) . '00000000000000000',
            'validator_addr' => $this->wallet->getValidatorAddress(),
            'reward_addr' => $payload['rewardAddress'],
            'pub_key' => [
                'type' => 'tendermint/PubKeyEd25519',
                'value' => $payload['pubKey'],
            ],
            'stake' => [
                'denom' => $payload['coin'],
                'amount' => amountUNIRecalculate($payload['stake']),
            ],
            'description' => [
                'moniker' => $payload['moniker'],
                'identity' => $payload['identity'],
                'website' => $payload['website'],
                'security_contact' => $payload['securityContact'],
                'details' => $payload['details'],
            ],
        ];

        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
    }

    public function validatorEdit($payload)
    {
        $type = $this->txSchemes['VALIDATOR_CANDIDATE_EDIT']['type'];
        $result = $this->checkRequiredFields('VALIDATOR_CANDIDATE_EDIT', $payload);
        $payload['fee'] = $this->txSchemes['VALIDATOR_CANDIDATE_EDIT']['fee'];
        $prePayload = [
            'validator_address' => $this->wallet->getValidatorAddress(),
            'reward_address' => $payload['rewardAddress'],
            'description' => [
                'moniker' => $payload['moniker'],
                'identity' => $payload['identity'],
                'website' => $payload['website'],
                'security_contact' => $payload['securityContact'],
                'details' => $payload['details'],
            ],
        ];

        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload, $payload);
        return $this->requester->sendTx($preparedTx);
    }

    public function disableValidator()
    {
        $type = $this->txSchemes['VALIDATOR_SET_OFFLINE']['type'];

        $prePayload = ['validator_address' => $this->wallet->getValidatorAddress()];
        $payload['fee'] = $this->txSchemes['VALIDATOR_SET_OFFLINE']['fee'];

        $preparedTx = $this->prepareTransaction($type, $prePayload);
        return $this->requester->sendTx($preparedTx);
    }

    public function enableValidator()
    {
        $type = $this->txSchemes['VALIDATOR_SET_ONLINE']['type'];

        $prePayload = ['validator_address' => $this->wallet->getValidatorAddress()];
        $payload['fee'] = $this->txSchemes['VALIDATOR_SET_ONLINE']['fee'];
        $preparedTx = $this->prepareTransaction($type, $prePayload);
        return $this->requester->sendTx($preparedTx);
    }

    public function createCoin($payload)
    {
        $type = $this->txSchemes['COIN_CREATE']['type'];
        $result = $this->checkRequiredFields('COIN_CREATE', $payload);
        $payload['fee'] = $this->txSchemes['COIN_CREATE']['fee'];
        $prePayload = [
            'sender' => $this->wallet->getAddress(),
            'title' => $payload['title'],
            'symbol' => $payload['ticker'],
            'constant_reserve_ratio' => $payload['crr'],
            'initial_volume' => amountUNIRecalculate($payload['initSupply']),
            'initial_reserve' => amountUNIRecalculate($payload['reserve']),
            'limit_volume' => amountUNIRecalculate($payload['maxSupply'])
        ];

        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
    }

    public function multisigCreate($payload)
    {
        $type = $this->txSchemes['MULTISIG_CREATE_WALLET']['type'];
        $result = $this->checkRequiredFields('MULTISIG_CREATE_WALLET', $payload);
        $payload['fee'] = $this->txSchemes['MULTISIG_CREATE_WALLET']['fee'];
        $prePayload = [
            'sender' => $this->wallet->getAddress(),
            'owners' => $payload['owners'],
            'weights' => $payload['weights'],
            'threshold' => $payload['threshold']
        ];

        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
    }

    public function multisigCreateTX($payload)
    {
        $type = $this->txSchemes['MULTISIG_CREATE_TX']['type'];
        $result = $this->checkRequiredFields('MULTISIG_CREATE_TX', $payload);
        $payload['fee'] = $this->txSchemes['MULTISIG_CREATE_TX']['fee'];
        $prePayload = [
            'sender' => $this->wallet->getAddress(),
            'wallet' => $payload['from'],
            'receiver' => $payload['to'],
            'coins' => [
                [
                    'denom' => strtolower($payload['coin']),
                    'amount' => amountUNIRecalculate($payload['amount']),
                ]
            ]
        ];

        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
    }

    public function multisigSignTX($payload)
    {
        $type = $this->txSchemes['MULTISIG_SIGN_TX']['type'];
        $result = $this->checkRequiredFields('MULTISIG_SIGN_TX', $payload);
        $payload['fee'] = $this->txSchemes['MULTISIG_SIGN_TX']['fee'];
        $prePayload = [
            'sender' => $this->wallet->getAddress(),
            'tx_id' => $payload['txId'],
        ];

        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
    }

    public function createNftMint($payload)
    {
        $type = $this->txSchemes['NFT_MINT']['type'];
        $result = $this->checkRequiredFields('NFT_MINT', $payload);

        $payload['fee'] = $this->txSchemes['NFT_MINT']['fee'];

        $prePayload = [
            'id' => $this->guidv4(),
            'denom' => $payload['denom'],
            'token_uri' => $payload['token_uri'],
            'quantity' => $payload['quantity'],
            'reserve' => pow(10,18),//$payload['reserve'],
            'sender' => $this->wallet->getAddress(),
            'recipient' => $payload['recipient'] ?? $this->wallet->getAddress()
        ];
        $preparedTx = $this->prepareTransaction($type, $prePayload, ['allow_mint' => $payload['allow_mint']]);

        return $this->requester->sendTx($preparedTx);
    }

    public function burnNft($payload)
    {
        $type = $this->txSchemes['NFT_BURN']['type'];
        $result = $this->checkRequiredFields('NFT_BURN', $payload);

        $payload['fee'] = $this->txSchemes['NFT_BURN']['fee'];

        $prePayload = [
            'id' => $payload['id'],
            'denom' => $payload['denom'],
            'quantity' => $payload['quantity'],
        ];
        $preparedTx = $this->prepareTransaction($type, $prePayload);

        return $this->requester->sendTx($preparedTx);
    }

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

    function guidv4($data = null) {
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

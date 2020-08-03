<?php


namespace DecimalSDK;

use \DecimalSDK\Errors\DecimalException;
use DecimalSDK\Utils\ApiRequester;
use DecimalSDK\Utils\TransactionHelpers;
use DecimalSDK\Wallet;

class Transaction
{
    use TransactionHelpers;

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
        'COIN_MULTISEND' => 'coin/multi_send_coin',
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
        $this->checkRequiredFields('COIN_SEND',$payload);
        $prePayload = [
            'sender' => $this->wallet->getAddress(),
            'receiver' => $payload['to'],
            'coin' => [
                'amount' => amountUNIRecalculate($payload['amount']),
                'denom' => strtolower($payload['coin']),
            ]
        ];

        $preparedTx = $this->prepareTransaction($type,$prePayload,$payload);
        return $this->requester->sendTx($preparedTx);

    }

    /**
     * @param $payload
     * @return array
     * @throws DecimalException
     */
    public function getCoin($payload)
    {
        $maxSpendLimit = $payload['maxSpendLimit'] ?? '100000000000';
        $type = $this->txSchemes['COIN_BUY']['type'];
        $this->checkRequiredFields('COIN_BUY',$payload);
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
        $preparedTx = $this->prepareTransaction($type,$prePayload,$payload);
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
        $this->checkRequiredFields('COIN_SELL',$payload);
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

        $preparedTx = $this->prepareTransaction($type,$prePayload,$payload);
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
        $this->checkRequiredFields('COIN_SELL_ALL',$payload);
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

        $preparedTx = $this->prepareTransaction($type,$prePayload,$payload);
        return $this->requester->sendTx($preparedTx);
    }
    public function validatorDelegate($payload)
    {
        $type = $this->txSchemes['VALIDATOR_DELEGATE']['type'];
        $result = $this->checkRequiredFields('VALIDATOR_DELEGATE', $payload);
        $prePayload = [
            'delegator_address' => $this->wallet->getAddress(),
            'validator_address' => $payload['address'],
            'coin' => [
                'amount' => amountUNIRecalculate($payload['stake']),
                'denom' => strtolower($payload['coin']),
            ],
        ];

        $preparedTx = $this->prepareTransaction($type, $prePayload,$payload);
        return $this->requester->sendTx($preparedTx);
    }

    public function validatorUnbound($payload)
    {
        $type = $this->txSchemes['VALIDATOR_UNBOND']['type'];
        $result = $this->checkRequiredFields('VALIDATOR_UNBOND', $payload);
        $prePayload = [
            'delegator_address' => $this->wallet->getAddress(),
            'validator_address' => $payload['address'],
            'coin' => [
                'amount' => amountUNIRecalculate($payload['stake']),
                'denom' => strtolower($payload['coin']),
            ],
        ];

        $preparedTx = $this->prepareTransaction($type, $prePayload,$payload);
        return $this->requester->sendTx($preparedTx);
    }

    public function validatorDeclare($payload)
    {
        $type = $this->txSchemes['VALIDATOR_CANDIDATE']['type'];
        $result = $this->checkRequiredFields('VALIDATOR_CANDIDATE', $payload);
        $prePayload = [
            'commision' => ($payload['commission'] / 100) . '00000000000000000',
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
                'moniker' => $payload['description']['moniker'],
                'identity' => $payload['description']['identity'],
                'website' => $payload['description']['website'],
                'security_contact' => $payload['description']['securityContact'],
                'details' => $payload['description']['details'],
            ],
        ];

        $preparedTx = $this->prepareTransaction($type, $prePayload,$payload);
        return $this->requester->sendTx($preparedTx);
    }

    public function validatorEdit($payload)
    {
        $type = $this->txSchemes['VALIDATOR_CANDIDATE_EDIT']['type'];
        $result = $this->checkRequiredFields('VALIDATOR_CANDIDATE_EDIT', $payload);
        $prePayload = [
            'validator_addr' => $this->wallet->getValidatorAddress(),
            'reward_address' => $payload['rewardAddress'],
            'description' => [
                'moniker' => $payload['description']['moniker'],
                'identity' => $payload['description']['identity'],
                'website' => $payload['description']['website'],
                'security_contact' => $payload['description']['securityContact'],
                'details' => $payload['description']['details'],
            ],
        ];

        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload,$payload);
        return $this->requester->sendTx($preparedTx);
    }

    public function disableValidator()
    {
        $type = $this->txSchemes['VALIDATOR_SET_OFFLINE']['type'];

        $prePayload = ['validator_address' => $this->wallet->getValidatorAddress()];

        $preparedTx = $this->prepareTransaction($type, $prePayload);
        return $this->requester->sendTx($preparedTx);
    }

    public function enableValidator()
    {
        $type = $this->txSchemes['VALIDATOR_SET_ONLINE']['type'];

        $prePayload = ['validator_address' => $this->wallet->getValidatorAddress()];

        $preparedTx = $this->prepareTransaction($type, $prePayload);
        return $this->requester->sendTx($preparedTx);
    }

    public function createCoin($payload)
    {
        $type = $this->txSchemes['COIN_CREATE']['type'];
        $result = $this->checkRequiredFields('COIN_CREATE', $payload);
        $prePayload = [
            'sender' => $this->wallet->getAddress(),
            'title' => $payload['title'],
            'symbol' => $payload['ticker'],
            'constant_reserve_ratio' => $payload['crr'],
            'initial_volume' => amountUNIRecalculate($payload['initSupply']),
            'initial_reserve' => amountUNIRecalculate($payload['reserve']),
            'limit_volume' => amountUNIRecalculate($payload['maxSupply'])
        ];

        $preparedTx = $this->prepareTransaction($type, $prePayload,$payload);
        return $this->requester->sendTx($preparedTx);
    }

    public function multisigCreate($payload)
    {
        $type = $this->txSchemes['MULTISIG_CREATE_WALLET']['type'];
        $result = $this->checkRequiredFields('MULTISIG_CREATE_WALLET', $payload);
        $prePayload = [
            'sender' => $this->wallet->getAddress(),
            'owners' => $payload['owners'],
            'weights' => $payload['weights'],
            'threshold' => $payload['threshold']
        ];

        $preparedTx = $this->prepareTransaction($type, $prePayload,$payload);
        return $this->requester->sendTx($preparedTx);
    }

    public function multisigCreateTX($payload)
    {
        $type = $this->txSchemes['MULTISIG_CREATE_TX']['type'];
        $result = $this->checkRequiredFields('MULTISIG_CREATE_TX', $payload);
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

        $preparedTx = $this->prepareTransaction($type, $prePayload,$payload);
        return $this->requester->sendTx($preparedTx);
    }

    public function multisigSignTX($payload)
    {
        $type = $this->txSchemes['MULTISIG_SIGN_TX']['type'];
        $result = $this->checkRequiredFields('MULTISIG_SIGN_TX', $payload);
        $prePayload = [
            'sender' => $this->wallet->getAddress(),
            'tx_id' => $payload['txId'],
        ];

        $preparedTx = $this->prepareTransaction($type, $prePayload,$payload);
        return $this->requester->sendTx($preparedTx);
    }

    private function checkRequiredFields($name, $payload)
    {
        if (!$this->txSchemes[$name] || !$this->txSchemes[$name]['scheme']) throw new DecimalException('Called scheme not exists');
        $scheme = $this->txSchemes[$name]['scheme'];
        $errors = $this->fieldsValidation($scheme, $payload);
        if (count($scheme['requiredFields']))
            $errors = array_merge(array_fill_keys($scheme['requiredFields'], 'field is required'), $errors);
        if (count($errors)) throw new DecimalException("payload validation fails " . json_encode($errors, JSON_UNESCAPED_SLASHES));

        return true;
    }
}

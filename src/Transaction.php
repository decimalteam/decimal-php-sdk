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

    protected $txSchemes = [
        'COIN_BUY' => [
            'type' => 'coin/buy_coin',
            'scheme' => [
                'amount' => 'number',
                'buyCoin' => 'string',
                'spendCoin' => 'string',
            ]
        ],
        'COIN_CREATE' => 'coin/create_coin',
        'COIN_SELL' => [
            'type' => 'coin/sell_coin',
            'scheme' => [
                'amount' => 'number',
                'sellCoin' => 'string',
                'getCoin' => 'string',
            ],
        ],
        'COIN_SEND' => [
            'type' => 'coin/send_coin',
            'scheme' => [
                'amount' => 'number',
                'to' => 'string',
                'coin' => 'string'

            ]
        ],
        'COIN_MULTISEND' => 'coin/multi_send_coin',
        'COIN_SELL_ALL' => [
            'type' => 'coin/sell_all_coin',
            'scheme' => [
                'sellCoin' => 'string',
                'getCoin' => 'string',
            ],
        ],
        'COIN_REDEEM_CHECK' => 'coin/redeem_check',
        'COIN_ISSUE_CHECK' => 'coin/issue_check',
        'VALIDATOR_CANDIDATE' => 'validator/declare_candidate',
        'VALIDATOR_DELEGATE' => 'validator/delegate',
        'VALIDATOR_SET_ONLINE' => 'validator/set_online',
        'VALIDATOR_SET_OFFLINE' => 'validator/set_offline',
        'VALIDATOR_UNBOND' => 'validator/unbond',
        'VALIDATOR_CANDIDATE_EDIT' => 'validator/edit_candidate',
        'MULTISIG_CREATE_WALLET' => 'multisig/create_wallet',
        'MULTISIG_CREATE_TX' => 'multisig/create_transaction',
        'MULTISIG_SIGN_TX' => 'multisig/sign_transaction',
    ];

    /**
     * Transaction constructor.
     * @param \DecimalSDK\Wallet $wallet
     * @throws DecimalException
     */

    public function __construct(Wallet $wallet)
    {
        if (!$wallet) throw new DecimalException('Wrong wallet');

        $this->wallet = $wallet;
        $this->requester = new ApiRequester();
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

        $preparedTx = $this->prepareTransaction($type,$prePayload);
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
        $preparedTx = $this->prepareTransaction($type,$prePayload);
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

        $preparedTx = $this->prepareTransaction($type,$prePayload);
        return $this->requester->sendTx($preparedTx);
    }

    /**
     * @param $payload
     * @return array
     * @throws DecimalException
     */
    public function sellAllCoinsData($payload)
    {
        $minBuyLimit = $payload['minBuyLimit'] ?? '1';
        $type = $this->txSchemes['COIN_SELL_ALL']['type'];
        $this->checkRequiredFields('COIN_SELL_ALL',$payload);
        $prePayload = [
            'sender' => $this->wallet->getAddress(),
            'coin_to_sell' => [
                'amount' => '0',
                'denom' => strtolower($payload['sellCoin']),
            ],
            'min_coin_to_buy' => [
                'amount' => $minBuyLimit,
                'denom' => strtolower($payload['getCoin']),
            ],
        ];

        $preparedTx = $this->prepareTransaction($type,$prePayload);
        return $this->requester->sendTx($preparedTx);
    }
}

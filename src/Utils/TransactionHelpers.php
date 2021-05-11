<?php


namespace DecimalSDK\Utils;


use DecimalSDK\Errors\DecimalException;
use DecimalSDK\Utils\Crypto\Encrypt;

trait TransactionHelpers
{

    protected $pubKeyType = 'tendermint/PubKeySecp256k1';
    protected $defaultGasLimit = '9000000000000000000';
    protected $unit = 0.001;
    protected $signMeta = [
        'account_number' => null,
        'sequence' => null,
        'chain_id' => null,
    ];

    public function makeSignature($unsignedTx)
    {
        if (!$this->wallet || !$this->wallet->getPrivateKey()) throw new DecimalException('Private key not found');
        if (!$this->signMeta || !isset($this->signMeta['account_number'])) throw new DecimalException('Sign meta is wrong');
        $toSignPayload = [
            'account_number' => $this->signMeta['account_number'],
            'chain_id' => $this->signMeta['chain_id'],
            'fee' => $unsignedTx['fee'],
            'memo' => $unsignedTx['memo'],
            'msgs' => $unsignedTx['msg'],
            'sequence' => $this->signMeta['sequence'],
        ];

        $toSignPayload = sortPayload($toSignPayload);

        $signature = Encrypt::sepc256k1Sign(json_encode($toSignPayload, JSON_UNESCAPED_SLASHES), $this->wallet->getPrivateKey());

        $unsignedTx['signatures'] = [[
            'signature' => $signature,
            'pub_key' => [
                'type' => $this->pubKeyType,
                'value' => base64_encode(hex2bin($this->wallet->getPublicKey())),
            ],
        ]];

        return $unsignedTx;
    }

    public function prepareTransaction($type, $txValue, $options = [])
    {
        $sortedValue = sortPayload($txValue);
        $wrappedTx = $this->wrapTx($type, $sortedValue, $options);
        return $wrappedTx;
        return $this->makeSignature($wrappedTx);
    }

    public function wrapTx($type, $txValue, $options = [])
    {
        $wrapped = [
            'msg' => [
                ['type' => $type, 'value' => $txValue]
            ],
            'fee' => [
                'amount' => [],
                'gas' => '0'
            ],
            'memo' => $options['memo'] ?? 'sdk test'
        ];

        if (!isset($options['feeCoin']) || $type === 'coin/redeem_check') {

            return $wrapped;
        };


        return $this->setCommission($wrapped,$options['feeCoin'], $options);
    }


    /**
     * validate payload for transaction by scheme
     *
     * @param $scheme
     * @param array $payload
     * @return array
     * @throws DecimalException
     */
    public function fieldsValidation(&$scheme, $payload = [])
    {
        if (isset($scheme) && is_array($scheme)) {
            $errors = [];
            foreach ($payload as $key => $value) {
                if (!isset($scheme['fieldTypes'][$key])) {
                    if (is_array($value))
                        $errors = array_merge($errors, $this->fieldsValidation($scheme, $value));
                    else continue;
                }
                $mustBe = $scheme['fieldTypes'][$key];
                $fieldType = gettype($value);
                if (
                    ($mustBe === 'number' && (!in_array($fieldType,['integer','double']) && !is_numeric($value)))
                    || ($mustBe === 'string' && $fieldType !== 'string')
                    || ($mustBe === 'array' && !is_array($value))
                ) {
                    $errors[$key] = "field must be a $mustBe";
                    continue;
                }


                if (in_array($key, $scheme['requiredFields'])) {
                    if ($mustBe === 'array' && !count($value)) {
                        array_push($errors, [$key => 'array is empty']);
                        continue;
                    }
                    array_splice($scheme['requiredFields'], array_search($key, $scheme['requiredFields']), 1);
                }
            }

            return $errors;
        }
        throw new DecimalException('Wrong operation scheme');
    }

    public function getCoinPrice($ticker)
    {
        $coin = $this->requester->getCoin($ticker);

        if (!$coin || !$coin->result) throw new DecimalException('Coin not found');
        $coin = $coin->result;

        $supply = amountUNIRecalculate($coin->volume, true);
        $reserve = amountUNIRecalculate($coin->reserve, true);
        $crr = $coin->crr / 100;

        $amount = min($supply, 1);

        if ((float)$supply === 0) {
            return 0;
        }

        $result = $amount / $supply;
        $result = 1 - $result;
        $result = pow($result, 1 / $crr);
        $result = (1 - $result) * $reserve;

        return $result;
    }

    public function getTxSize($tx)
    {
        $preparedTx = [
            'type' => 'cosmos-sdk/StdTx',
            'value' => $tx
        ];
        $signatureSize = 109;
        $encodedTxResp = $this->requester->post('rpc/txs/encode', $preparedTx);

        return strlen(base64_decode($encodedTxResp->tx)) + $signatureSize;

    }

    public function getCommission($tx, $feeCoin, $operationFee = 0, $options = [])
    {
        $ticker = $feeCoin;
        $textSize = $this->getTxSize($tx);
        $feeForText = $textSize * 2;
        $feeInBase = $operationFee + $feeForText + 20;
        
        if ($tx['msg'][0]['type'] === 'coin/multi_send_coin') {
            $numberOfParticipants = count($tx['msg'][0]['value']['sends']);
            $feeForParticipants = 5 * ($numberOfParticipants - 1);
            $feeInBase = $feeInBase + $feeForParticipants;
        }

        if (in_array($feeCoin, ['del', 'tdel'])) {
            return ['coinPrice' => '1', 'value' => $feeInBase, 'base' => $feeInBase];
        }

        $coinPrice = $this->getCoinPrice($ticker);
        $feeInCustom = $feeInBase / ($coinPrice / $this->unit);

        return ['coinPrice' => (string)$coinPrice, 'value' => (string)($feeInCustom / $this->unit), 'base' => (string)$feeInBase];

    }
    public function setCommission($tx, $feeCoin, $options = [])
    {
        if(!isset($tx['fee']))$tx['fee'] = [];

        $tx['fee']['amount'] = [[
            'denom' => $feeCoin,
            'amount' => '0',
        ]];

        $fee = $this->getCommission($tx, $feeCoin, $options['fee'], $options);

        $feeAmountSize = strlen(amountUNIRecalculate($fee['value'] * $this->unit));
//        $gasAmountSize = strlen(round($fee['base'],0,PHP_ROUND_HALF_DOWN));
//        $feeForFeeAmount = ($feeAmountSize + $gasAmountSize) * 2;
        $feeForFeeAmount = $feeAmountSize * 2;
        $totalFee = '';
        if (!in_array($feeCoin,['tdel','del'])) {
            $feeForFeeAmountToCustom = $feeForFeeAmount / $fee['coinPrice'];
            $totalFee = ($fee['value'] + $feeForFeeAmountToCustom) * $this->unit;
        } else {
            $totalFee = ($fee['value'] + $feeForFeeAmount) * $this->unit;
        }

        $tx['fee']['amount'][0]['amount'] = amountUNIRecalculate($totalFee);
//        $tx['fee']['gas'] = (string)($fee['base'] + $feeForFeeAmount);

        return $tx;
    }
    public function formatePrepayload($type,$payload)
    {
        switch ($type){
            case $this->txSchemes['COIN_SEND']['type'];
            return [
                'sender' => $this->wallet->getAddress(),
                'receiver' => $payload['to'],
                'coin' => [
                    'amount' => amountUNIRecalculate($payload['amount']),
                    'denom' => strtolower($payload['coin']),
                ]
            ];
            break;
            case $this->txSchemes['COIN_BUY']['type'];
            return [
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
            break;
            case $this->txSchemes['COIN_SELL']['type'];
            return [
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
            break;
            case $this->txSchemes['COIN_SELL_ALL']['type'];
            return [
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
            break;
            case $this->txSchemes['VALIDATOR_DELEGATE']['type'];
            return [
                'delegator_address' => $this->wallet->getAddress(),
                'validator_address' => $payload['address'],
                'coin' => [
                    'amount' => amountUNIRecalculate($payload['stake']),
                    'denom' => strtolower($payload['coin']),
                ],
            ];
            break;
            case $this->txSchemes['VALIDATOR_UNBOND']['type'];
            return [
                'delegator_address' => $this->wallet->getAddress(),
                'validator_address' => $payload['address'],
                'coin' => [
                    'amount' => amountUNIRecalculate($payload['stake']),
                    'denom' => strtolower($payload['coin']),
                ],
            ];
            break;
            case $this->txSchemes['VALIDATOR_CANDIDATE']['type'];
            return [
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
            break;
            case $this->txSchemes['VALIDATOR_CANDIDATE_EDIT']['type'];
            return [
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
            break;
            case $this->txSchemes['VALIDATOR_SET_OFFLINE']['type'];
            case $this->txSchemes['VALIDATOR_SET_ONLINE']['type'];
            return ['validator_address' => $this->wallet->getValidatorAddress()];
            break;
            case $this->txSchemes['COIN_CREATE']['type'];
            return [
                'sender' => $this->wallet->getAddress(),
                'title' => $payload['title'],
                'symbol' => $payload['ticker'],
                'constant_reserve_ratio' => $payload['crr'],
                'initial_volume' => amountUNIRecalculate($payload['initSupply']),
                'initial_reserve' => amountUNIRecalculate($payload['reserve']),
                'limit_volume' => amountUNIRecalculate($payload['maxSupply'])
            ];
            break;
            case $this->txSchemes['COIN_UPDATE']['type'];
                return [
                    'sender' => $this->wallet->getAddress(),
                    'symbol' => $payload['ticker'],
                    'identity'=>$payload['identity'],
                    'limit_volume' => amountUNIRecalculate($payload['maxSupply'])
                ];
                break;
            case $this->txSchemes['MULTISIG_CREATE_WALLET']['type'];
            return [
                'sender' => $this->wallet->getAddress(),
                'owners' => $payload['owners'],
                'weights' => $payload['weights'],
                'threshold' => $payload['threshold']
            ];
            break;
            case $this->txSchemes['MULTISIG_CREATE_TX']['type'];
                return [
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
                break;
            case $this->txSchemes['MULTISIG_SIGN_TX']['type'];
                return [
                    'sender' => $this->wallet->getAddress(),
                    'tx_id' => $payload['txId'],
                ];
                break;
            case $this->txSchemes['COIN_MULTISEND']['type'];
                return [
                    'sender' => $this->wallet->getAddress(),
                    'sends' => $this->getMultiplySends($payload)
                ];
                break;
            case $this->txSchemes['NFT_MINT']['type'];
                return [
                    'id' => $this->guidv4(),
                    'denom' => $payload['denom'],
                    'token_uri' => $payload['token_uri'],
                    'quantity' => $payload['quantity'],
                    'reserve' => pow(10,18),
                    'sender' => $this->wallet->getAddress(),
                    'recipient' => $payload['recipient'] ?? $this->wallet->getAddress()
                ];
                break;
            case $this->txSchemes['NFT_BURN']['type'];
                return [
                    'id' => $payload['id'],
                    'denom' => $payload['denom'],
                    'quantity' => $payload['quantity'],
                ];
                break;
            case $this->txSchemes['NFT_EDIT_METADATA']['type'];
                return [
                    'id' => $payload['id'],
                    'token_uri' => $payload['token_uri'],
                ];
                break;
            case $this->txSchemes['NFT_TRANSFER']['type'];
                return [
                    'id' => $payload['id'],
                    'recipient' => $payload['recipient'],
                    'quantity' => $payload['quantity'],
                ];
                break;
                case  $this->txSchemes['PROPOSAL_VOTE']['type'];
                return [
                    'proposal_id' => $payload['id'],
                    'option'=> $payload['decision'],
                    'voter'=>$this->wallet->getValidatorAddress()
                ];
                    break;
                case $this->txSchemes['SWAP_HTLT']['type'];
                    if($payload['type']=='out'){
                        $transfer_type=1;
                    }else{
                        $transfer_type=0;
                    }
                    $hashed_secret=hash('sha256',$payload['secretHash']);
                    return [
                        'amount' => [
                            [
                                'amount' => amountUNIRecalculate($payload['amount']),
                                'denom' => strtolower($payload['coin']),
                            ]
                        ],
                        'transfer_type'=>$transfer_type,
                        'from'=>$payload['from'],
                        'recipient'=>$payload['recipient'],
                        'hashed_secret'=>$hashed_secret
                    ];
                    break;
                    case $this->txSchemes['SWAP_REDEEM']['type'];
                        $hashed_secret=hash('sha256',$payload['secretHash']);
                        return [
                            'from'=>$payload['from'],
                            'secret'=>$hashed_secret
                        ];
                        break;
                        case $this->txSchemes['SWAP_REFUND']['type'];
                        $hashed_secret=hash('sha256',$payload['secretHash']);
                        return [
                            'from'=>$payload['from'],
                            'secret'=>$hashed_secret
                        ];
                        break;
                        default:
                            throw new DecimalException('Invalid type of transaction');
        }
    }
}

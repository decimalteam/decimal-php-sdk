<?php


namespace DecimalSDK\Utils;


use DecimalSDK\Errors\DecimalException;
use DecimalSDK\Utils\Crypto\Encrypt;

trait TransactionHelpers
{
    protected $signMeta = [
        'account_number' => null,
        'sequence' => null,
        'chain_id' => null,
    ];

    public function makeSignature($unsignedTx)
    {
        if (!$this->wallet || !$this->wallet->getPrivateKey()) {
            throw new DecimalException('Private key not found');
        }
        if (!$this->signMeta || !isset($this->signMeta['account_number'])) {
            throw new DecimalException('Sign meta is wrong');
        }

        $toSignPayload = [
            'account_number' => $this->signMeta['account_number'],
            'chain_id' => $this->signMeta['chain_id'],
            'fee' => $unsignedTx['fee'],
            'memo' => $unsignedTx['memo'] ?? '',
            'msgs' => $unsignedTx['msg'] ?? '',
            'sequence' => $this->signMeta['sequence'],
        ];

        $toSignPayload = $this->sortPayload($toSignPayload);

        $signature = Encrypt::sepc256k1Sign(json_encode($toSignPayload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
            $this->wallet->getPrivateKey());

        return $unsignedTx;
    }

    public function prepareTransaction($type, $txValue, $options = [])
    {
        $sortedValue = $this->sortPayload($txValue);
        $wrappedTx = $this->wrapTx($type, $sortedValue, $options);
        if (isset($options['estimateTxFee'])) {
            return $wrappedTx;
        }
        return $this->makeSignature($wrappedTx);
    }

    public function sortPayload($payload)
    {
        $sorted = [];
        if (is_object($payload)) {
            $payload = (array)$payload;
        }
        $keys = array_keys($payload);
        sort($keys);

        foreach ($keys as $key) {
            $sorted[$key] = is_array($payload[$key]) ? $this->sortPayload($payload[$key]) : $this->isBool($payload[$key]);
        }

        return $sorted;
    }

    public function isBool($value)
    {
        return is_bool($value) ? $value : (string)$value;
    }

    public function wrapTx($type, $txValue, $options = [], $commision = true)
    {
        $wrapped = [
            'msg' => [
                ['type' => $type, 'value' => $txValue]
            ],
            'fee' => [
                'amount' => [],
                'gas' => '0'
            ],
            'memo' => $options['memo'] ?? ''
        ];

        if (!isset($options['feeCoin']) || $type === 'coin/redeem_check' || !$commision) {
            return $wrapped;
        };

        return $this->setCommission($wrapped, $options['feeCoin'], $options);
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
                    if (is_array($value)) {
                        $errors = array_merge($errors, $this->fieldsValidation($scheme, $value));
                    } else {
                        continue;
                    }
                }
                $mustBe = $scheme['fieldTypes'][$key];
                $fieldType = gettype($value);
                if ($mustBe == 'integer') {
                    $value *= 1;
                }
                if (
                    ($mustBe === 'number' && (!in_array($fieldType, ['integer', 'double']) && !is_numeric($value)))
                    || ($mustBe === 'string' && $fieldType !== 'string')
                    || ($mustBe === 'array' && !is_array($value)) || ($mustBe == 'integer' && !is_int($value))
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

        if (!$coin || !$coin->result) {
            throw new DecimalException('Coin not found');
        }
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

    public function getTxSize($tx, $rpc = false)
    {
        $preparedTx = [
            'type' => 'cosmos-sdk/StdTx',
            'value' => $tx
        ];
        $signatureSize = 109;
        $url = '/txs/encode';
        $encodedTxResp = $this->requester->post($url, $preparedTx, $rpc);

        try {
            $tx_len = strlen(base64_decode($encodedTxResp->tx));
        } catch (\Exception $e) {
            $tx_len = 0;
        }
        return $tx_len + $signatureSize;
    }

    public function getCommission($tx, $feeCoin, $operationFee = 0, $options = [])
    {
        $ticker = $feeCoin;
        $textSize = $this->getTxSize($tx);
        $feeForText = $textSize * 2;
        $feeInBase = $operationFee + $feeForText + self::ADDITIONAL_COMISSION;

        if ($tx['msg'][0]['type'] === 'coin/multi_send_coin') {
            $numberOfParticipants = count($tx['msg'][0]['value']['sends']);
            $feeForParticipants = 5 * ($numberOfParticipants - 1);
            $feeInBase = $feeInBase + $feeForParticipants;
        }

        if (in_array($feeCoin, ['del', 'tdel'])) {
            return ['coinPrice' => '1', 'value' => $feeInBase, 'base' => $feeInBase];
        }

        $coinPrice = $this->getCoinPrice($ticker);
        $feeInCustom = $feeInBase / ($coinPrice / self::UNIT);

        return [
            'coinPrice' => (string)$coinPrice,
            'value' => (string)($feeInCustom / self::UNIT),
            'base' => (string)$feeInBase
        ];

    }

    public function setCommission($tx, $feeCoin, $options = [])
    {
        if (!isset($tx['fee'])) {
            $tx['fee'] = [];
        }

        $tx['fee']['amount'] = [
            [
                'denom' => $feeCoin,
                'amount' => '0',
            ]
        ];

        $fee = $this->getCommission($tx, $feeCoin, $options['fee'], $options);

        $feeAmountSize = strlen(amountUNIRecalculate($fee['value'] * self::UNIT));
        $feeForFeeAmount = $feeAmountSize * 2;
        $totalFee = '';
        if (!in_array($feeCoin, ['tdel', 'del'])) {
            $feeForFeeAmountToCustom = $feeForFeeAmount / $fee['coinPrice'];
            $totalFee = ($fee['value'] + $feeForFeeAmountToCustom) * self::UNIT;
        } else {
            $totalFee = ($fee['value'] + $feeForFeeAmount) * self::UNIT;
        }

        $tx['fee']['amount'][0]['amount'] = amountUNIRecalculate($totalFee);

        return $tx;
    }

    public function simulateFeePayload($payload) {
        return [
            'to' => $payload['to'],
            'coin' => [
                'amount' => amountUNIRecalculate($payload['amount']),
                'demon' => strtolower($payload['coin'])
            ],
        ];
    }

    public function coinSellPayload($payload)
    {
        return [
            'sender' => $this->wallet->getAddress(),
            'coin_to_sell' => [
                'amount' => amountUNIRecalculate($payload['amount']),
                'denom' => strtolower($payload['sellCoin']),
            ],
            'min_coin_to_buy' => [
                'amount' => $payload['minBuyLimit'] ?? '1',
                'denom' => strtolower($payload['getCoin']),
            ],
        ];
    }

    public function coinBuyPayload($payload)
    {
        return [
            'sender' => $this->wallet->getAddress(),
            'coin_to_buy' => [
                'amount' => amountUNIRecalculate($payload['amount']),
                'denom' => strtolower($payload['buyCoin']),
            ],
            'max_coin_to_sell' => [
                'amount' => amountUNIRecalculate($payload['maxSpendLimit'] ?? self::MAX_SPEND_LIMIT),
                'denom' => strtolower($payload['spendCoin']),
            ],
        ];
    }

    public function coinSellAllPayload($payload)
    {
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
    }

    public function validatorDelegatePayload($payload)
    {
        return [
            'delegator_address' => $this->wallet->getAddress(),
            'validator_address' => WalletHelpers::checkAddress($payload['address'], WalletHelpers::D0VALOPER),
            'coin' => [
                'amount' => amountUNIRecalculate($payload['stake']),
                'denom' => strtolower($payload['coin']),
            ],
        ];
    }

    public function validatorUnbondPayload($payload)
    {
        return [
            'delegator_address' => $this->wallet->getAddress(),
            'validator_address' => WalletHelpers::checkAddress($payload['address'], WalletHelpers::D0VALOPER),
            'coin' => [
                'amount' => amountUNIRecalculate($payload['stake']),
                'denom' => strtolower($payload['coin']),
            ],
        ];
    }

    public function validatorCandidatePayload($payload)
    {
        return [
            'commission' => ($payload['commission'] / 100) . '.000000000000000000',
            'validator_addr' => $this->wallet->getValidatorAddress(),
            'reward_addr' => WalletHelpers::checkAddress($payload['rewardAddress'], WalletHelpers::D0),
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
    }

    public function validatorCandidateEditPayload($payload)
    {
        return [
            'validator_address' => $this->wallet->getValidatorAddress(),
            'reward_address' => WalletHelpers::checkAddress($payload['rewardAddress'], WalletHelpers::D0),
            'description' => [
                'moniker' => $payload['moniker'],
                'identity' => $payload['identity'],
                'website' => $payload['website'],
                'security_contact' => $payload['securityContact'],
                'details' => $payload['details'],
            ],
        ];
    }

    public function coinCreatePayload($payload)
    {
        return [
            'sender' => $this->wallet->getAddress(),
            //todo check
            'title' => $payload['title'],
            //todo check
            'symbol' => $payload['ticker'],
            'constant_reserve_ratio' => $payload['crr'],
            'initial_volume' => amountUNIRecalculate($payload['initSupply']),
            'initial_reserve' => amountUNIRecalculate($payload['reserve']),
            'limit_volume' => amountUNIRecalculate($payload['maxSupply'])
        ];
    }

    public function coinUpdatePayload($payload)
    {
        $data = [];
        $data['sender'] = $this->wallet->getAddress();
        $data['symbol'] =  $payload['ticker'];
        if(isset($payload['identity'])){
            $data['identity'] = $payload['identity'];
        }
        if(isset($payload['maxSupply'])){
            $data['limit_volume'] = amountUNIRecalculate($payload['maxSupply']);
        }
        return $data;
    }

    public function multisigCreateWalletPayload($payload)
    {
        foreach ($payload['owners'] as $owner) {
            WalletHelpers::checkAddress($owner, WalletHelpers::D0);
        }
        return [
            'sender' => $this->wallet->getAddress(),
            'owners' => $payload['owners'],
            'weights' => $payload['weights'],
            'threshold' => $payload['threshold']
        ];
    }

    public function multisigCreateTXPayload($payload)
    {
        return [
            'sender' => $this->wallet->getAddress(),
            'wallet' => $payload['from'],
            'receiver' => WalletHelpers::checkAddress($payload['to'], WalletHelpers::D0),
            'coins' => [
                [
                    'denom' => strtolower($payload['coin']),
                    'amount' => amountUNIRecalculate($payload['amount']),
                ]
            ]
        ];
    }

    public function multisigSignTXPayload($payload)
    {
        return [
            'sender' => $this->wallet->getAddress(),
            'tx_id' => $payload['txId'],
        ];
    }

    public function coinMultiSendPayload($payload)
    {
        return [
            'sender' => $this->wallet->getAddress(),
            'sends' => $this->getMultiplySends($payload)
        ];
    }

    public function nftMintPayload($payload)
    {
        return [
            'id' => $payload['id'],
            'denom' => $payload['denom'],
            'token_uri' => $payload['token_uri'],
            'quantity' => $payload['quantity'],
            'reserve' => amountUNIRecalculate($payload['reserve']),
            'sender' => $this->wallet->getAddress(),
            'recipient' => WalletHelpers::checkAddress($payload['recipient'],
                    WalletHelpers::D0) ?? $this->wallet->getAddress(),
            'allow_mint' => $payload['allow_mint']
        ];
    }

    public function nftBurnPayload($payload)
    {
        return [
            'id' => $payload['id'],
            'denom' => $payload['denom'],
            'sub_token_ids' => $payload['sub_token_ids'],
            'sender' => $this->wallet->getAddress()
        ];
    }

    public function nftEditMetadataPayload($payload)
    {
        return [
            'id' => $payload['id'],
            'token_uri' => $payload['token_uri'],
            'sender' => $this->wallet->getAddress(),
            //todo check
            'denom' => $payload['denom']
        ];
    }

    public function nftUpdateReservePayload($payload)
    {
        $this->checkInt($payload['reserve']);
        return [
            'id' => $payload['id'],
            'sender' => $this->wallet->getAddress(),
            'denom' => $payload['denom'],
            'reserve' => amountUNIRecalculate($payload['reserve']),
            'sub_token_ids' => $payload['sub_token_ids']
        ];
    }

    public function ntfTransferPayload($payload)
    {
        return [
            'id' => $payload['id'],
            'recipient' => WalletHelpers::checkAddress($payload['recipient'], WalletHelpers::D0),
            'sub_token_ids' => $payload['sub_token_ids'],
            'denom' => $payload['denom'],
            'sender' => $this->wallet->getAddress()
        ];
    }

    public function nftDelegatePayload($payload)
    {
        return [
            'id' => $payload['id'],
            'validator_address' => WalletHelpers::checkAddress($payload['validator_address'], WalletHelpers::D0),
            'sub_token_ids' => $payload['sub_token_ids'],
            'denom' => $payload['denom'],
            'delegator_address' => $this->wallet->getAddress()
        ];
    }

    public function nftUnboundPayload($payload)
    {
        return [
            'id' => $payload['id'],
            'validator_address' => WalletHelpers::checkAddress($payload['validator_address'], WalletHelpers::D0),
            'sub_token_ids' => $payload['sub_token_ids'],
            'denom' => $payload['denom'],
            'delegator_address' => $this->wallet->getAddress()
        ];
    }

    public function proposalVotePayload($payload)
    {
        return [
            'proposal_id' => $payload['id'],
            'option' => $payload['decision'],
            'voter' => $this->wallet->getValidatorAddress()
        ];
    }

    public function msgSwapInitPayload($payload)
    {
        return [
            'from' => $this->wallet->getAddress(),
            'recipient' => WalletHelpers::checkAddress($payload['recipient'], WalletHelpers::D0),
            'amount' => amountUNIRecalculate($payload['amount']),
            'token_symbol' => $payload['tokenSymbol'],
            'transaction_number' => date('U'),
            'from_chain' => '1',
            'dest_chain' => $payload['destChain']

        ];
    }

    public function msgSwapRedeemPayload($payload)
    {
        return [
            'sender' => $this->wallet->getAddress(),
            'from' => $payload['from'],
            'recipient' => $payload['recipient'],
            'amount' => amountUNIRecalculate($payload['amount']),
            'token_name' => $payload['tokenName'],
            'token_symbol' => $payload['tokenSymbol'],
            'transaction_number' => $payload['transactionNumber'],
            'from_chain' => $payload['fromChain'],
            'dest_chain' => '1',
            'v' => $payload['v'],
            'r' => substr($payload['r'], 2),
            's' => substr($payload['s'], 2)
        ];
    }

    public function generateNftId($headline, $description, $slug, $coverHash = null, $assetHash = null)
    {
        try {
            $hashes = [
                sha1($headline),
                sha1($description),
                sha1($slug),
                $coverHash,
                $assetHash
            ];
            $id = implode('', $hashes);

            return sha1($id);
        } catch (\Exception $error) {
            throw new DecimalException('Error wher trying to get hash ' . $error->getMessage());
        }

    }

    private function checkInt(string $int): string
    {
        if (intval($int) > 0) {
            return $int;
        } else {
            throw new DecimalException("reserve should be integer > 0, as string, we have \"" . $int . "\"");
        }
    }

}

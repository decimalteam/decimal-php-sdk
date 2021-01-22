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
        return $this->makeSignature($wrappedTx);
    }

    public function wrapTx($type, $txValue, $options = [])
    {
//        $operationFee = 100;
//        foreach ($this->txSchemes as $value){
//            if(is_array($value) && in_array('type',$value) && $value['type'] === $type){
//                $operationFee = $value['fee'];
//            }
//        }
        $wrapped = [
            'msg' => [
                ['type' => $type, 'value' => $txValue]
            ],
            'fee' => [
                'amount' => [],
//                'gas' => $options['gas'] ?? $this->defaultGasLimit
                'gas' => '0'
            ],
            'memo' => $options['memo'] ?? ''
        ];

        if (!isset($options['feeCoin']) || $type === 'coin/redeem_check') {

            return $wrapped;
        };


        $customFeedTx = $this->setCommission($wrapped,$options['feeCoin'], $options);
//
        return $customFeedTx;

    }


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

    public function getCoinPrice($ticker, $options = [])
    {
        $requester = new ApiRequester($options);
        $coin = $requester->getCoin($ticker);

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
        $result = 1 - ($result * $reserve);

        return $result;
    }

    public function getTxSize($tx, $options = [])
    {
        $preparedTx = [
            'type' => 'cosmos-sdk/StdTx',
            'value' => $tx
        ];
        $signatureSize = 109;
        $requester = new ApiRequester($options);
        $encodeTxResp = $requester->post('rpc/txs/encode', $preparedTx);
        $size = strlen(base64_decode($encodeTxResp->tx)) + $signatureSize;

        return $size;
    }

    public function getCommission($tx, $feeCoin, $operationFee = 0, $options = [])
    {

        $ticker = $feeCoin;
        $textSize = $this->getTxSize($tx, $options);

        $feeForText = $textSize * 2;
        $feeInBase = $operationFee + $feeForText + 10;

        if ($tx['msg'][0]['type'] === 'coin/multi_send_coin') {
            $numberOfParticipants = count($tx['msg'][0]['value']['sends']);
            $feeForParticipants = 5 * ($numberOfParticipants - 1);
            $feeInBase = $feeInBase + $feeForParticipants;
        }

        if (in_array($feeCoin, ['del', 'tdel'])) {
            return ['coinPrice' => '1', 'value' => $feeInBase, 'base' => $feeInBase];
        }

        $coinPrice = $this->getCoinPrice($ticker, $options);
        $feeInCustom = $feeInBase / ($coinPrice / $this->unit);

        return ['coinPrice' => (string)$coinPrice, 'value' => (string)($feeInCustom / $this->unit), 'base' => (string)$feeInBase];

    }
    public function setCommission($tx, $feeCoin, $options = [])
    {
        $tx['fee']['amount'] = [[
            'denom' => $feeCoin,
            'amount' => '0',
        ]];

        $fee = $this->getCommission($tx, $feeCoin, $options['fee'], $options);

        $feeAmountSize = strlen(amountUNIRecalculate($fee['value'] * $this->unit));
        $gasAmountSize = strlen(round($fee['base'],0,PHP_ROUND_HALF_DOWN));
        $feeForFeeAmount = ($feeAmountSize + $gasAmountSize) * 2;

        $totalFee = '';

        if (in_array($feeCoin,['tdel','del'])) {
            $feeForFeeAmountToCustom = $feeForFeeAmount * $fee['coinPrice'];
            $totalFee = ($fee['value'] + $feeForFeeAmountToCustom) * $this->unit;
        } else {
            $totalFee = ($fee['value'] + $feeForFeeAmount) * $this->unit;
        }

        $tx['fee']['amount'][0]['amount'] = amountUNIRecalculate($totalFee);
        $tx['fee']['gas'] = (string)($fee['base'] + $feeForFeeAmount);

        return $tx;
    }
}

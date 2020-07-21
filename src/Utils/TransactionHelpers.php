<?php


namespace DecimalSDK\Utils;


use DecimalSDK\Errors\DecimalException;
use DecimalSDK\Utils\Crypto\Encrypt;

trait TransactionHelpers {

    protected $pubKeyType = 'tendermint/PubKeySecp256k1';
    protected $defaultGasLimit = '9000000000000000000';
    protected $signMeta = [
        'account_number' => null,
        'sequence' => null,
        'chain_id' => null,
    ];
    public function makeSignature($unsignedTx)
	{
	    if(!$this->wallet || !$this->wallet->getPrivateKey()) throw new DecimalException('Private key not found');
	    if(!$this->signMeta || !isset($this->signMeta['account_number'])) throw new DecimalException('Sign meta is wrong');
	    $toSignPayload = [
            'account_number' => $this->signMeta['account_number'],
            'chain_id' => $this->signMeta['chain_id'],
            'fee' => $unsignedTx['fee'],
            'memo' => $unsignedTx['memo'],
            'msgs' => $unsignedTx['msg'],
            'sequence' => $this->signMeta['sequence'],
        ];
	    $toSignPayload = sortPayload($toSignPayload);

	    $signature = Encrypt::sepc256k1Sign(json_encode($toSignPayload,JSON_UNESCAPED_SLASHES),$this->wallet->getPrivateKey());

	    $unsignedTx['signatures'] = [[
	        'signature' => $signature,
	        'pub_key' => [
	            'type' => $this->pubKeyType,
	            'value' => base64_encode(hex2bin($this->wallet->getPublicKey())),
            ],
        ]];

	    return $unsignedTx;
	}

	public function prepareTransaction($type,$txValue,$options = [])
    {
        $sortedValue = sortPayload($txValue);
        $wrappedTx = $this->wrapTx($type,$sortedValue,$options);
        return $this->makeSignature($wrappedTx);
    }

    public function wrapTx($type, $txValue, $options = [])
    {
        $wrapped = [
            'msg' => [
                ['type' => $type,'value' => $txValue]
            ],
            'fee' => [
                'amount' => [],
                'gas' => $options['gas'] ?? $this->defaultGasLimit
            ],
            'memo' => $options['memo'] ?? ''
        ];

        if(!isset($options['feeCoin']) || $type = '') return $wrapped;

    }


    public function checkRequiredFields($type,$payload = [])
    {
        if ($scheme = $this->txSchemes[$type]) {
            $errors = [];
            foreach ($scheme['scheme'] as $k => $v) {
                if (!isset($payload[$k])) {
                    array_push($errors, [$k => 'not found']);
                    continue;
                }
                $t = gettype($payload[$k]);
                $isNum = $t === 'integer' || ctype_digit($payload[$k]);
                if ($v === 'number' && !$isNum) {
                    array_push($errors, [$k => 'field must be a number']);
                } else if ($v === 'string' && $t !== 'string') {
                    array_push($errors, [$k => 'field must be a string']);
                }
            }
            if (count($errors)) throw new DecimalException("Fields validation errors: " . json_encode($errors, JSON_UNESCAPED_SLASHES));
            return true;
        }
        throw new DecimalException('Wrong operation scheme');
    }
}

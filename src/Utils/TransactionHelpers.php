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


    public function fieldsValidation(&$scheme,$payload = [])
    {
        if (isset($scheme) && is_array($scheme)) {
            $errors = [];
            foreach ($payload as $key => $value){
                if(!$scheme['fieldTypes'][$key]){
                    if(is_array($value))
                        $errors = array_merge($errors,$this->fieldsValidation($scheme,$value));
                    else continue;
                }
                $mustBe = $scheme['fieldTypes'][$key];
                $fieldType = gettype($value);

                if(
                    ($mustBe === 'number' && ($fieldType !== 'integer' && !ctype_digit($value)))
                    || ($mustBe === 'string' && $fieldType !== 'string')
                    || ($mustBe === 'array' && !is_array($value))
                ){
                    $errors[$key] = "field must be a $mustBe";continue;
                }


                if(in_array($key,$scheme['requiredFields'])){
                    if($mustBe === 'array' && !count($value)){
                        array_push($errors, [$key => 'array is empty']);
                        continue;
                    }
                    array_splice($scheme['requiredFields'],array_search($key,$scheme['requiredFields']),1);
                }
            }

            return $errors;
        }
        throw new DecimalException('Wrong operation scheme');
    }
}

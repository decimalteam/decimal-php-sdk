<?php

namespace DecimalSDK\Utils\Crypto\Bip44;

//use DecimalSDK\Utils\Crypto\Bip44\KeyPairs;

class BIP44
{
    /**
     * Password
     */
    const SECRET = "Bitcoin seed";

    /**
     * @param string $seed
     * @return KeyPairs
     * @throws \Exception
     */

    public static function fromMasterSeed(string $seed)
    {
        $I = hash_hmac('sha512', hex2bin($seed), self::SECRET);
        $IL = substr($I, 0, 64);
        $IR = substr($I, 64, 64);

        return new KeyPairs([
            'privateKey' => $IL,
            'chainCode' => $IR
        ]);
    }
}

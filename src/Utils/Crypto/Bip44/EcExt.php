<?php


namespace DecimalSDK\Utils\Crypto\Bip44;


use BN\BN;
use Elliptic\EC\KeyPair as ECKeyPair;

class EcExt extends ECKeyPair
{
    public function privateKeyTweakAdd(string $privateKey, string $tweak, string $enc): BN
    {
        $bn = new BN($tweak, $enc);

        if ($bn->cmp($this->ec->n) >= 0) {
            throw new \Exception('EC private key tweak add failed');
        }

        $bn->iadd(new BN($privateKey, $enc));
        if ($bn->cmp($this->ec->n) >= 0) {
            $bn->isub($this->ec->n);
        }

        if ($bn->isZero()) {
            throw new \Exception('EC private key tweak add failed');
        }

        return $bn;
    }
}

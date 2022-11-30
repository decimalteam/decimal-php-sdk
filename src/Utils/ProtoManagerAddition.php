<?php

namespace DecimalSDK\Utils;

use Cosmos\Crypto\Ed25519\PubKey;

// TODO: rename/find better solution
// Firstly created because of the same name of class for pubKey with Ed25519 crypto.
class ProtoManagerAddition
{
    const DEFAULT_GAS_LIMIT = '9000000000000000000';
    private static $instance;
    private $classesByType = [];

    public static function instance(): ProtoManagerAddition
    {
        if (!isset(ProtoManagerAddition::$instance)) {
            ProtoManagerAddition::$instance = new ProtoManagerAddition();
        }

        return ProtoManagerAddition::$instance;
    }

    private function __construct() {}

    public function protoByType(string $txType)
    {
        return $this->classesByType[$txType];
    }

    public function getPubKey($pubKeyBytes): PubKey
    {
        $pubKey = new PubKey();
        $pubKey->setKey($pubKeyBytes);
        return $pubKey;
    }
}
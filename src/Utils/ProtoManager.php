<?php

namespace DecimalSDK\Utils;

use Cosmos\Tx\V1beta1\AuthInfo;
use Cosmos\Tx\V1beta1\TxBody;
use Decimal\Coin\V1\MsgBuyCoin;
use Cosmos\Base\V1beta1\Coin;
use Cosmos\Tx\V1beta1\Fee;
use Cosmos\Tx\V1beta1\ModeInfo;
use Cosmos\Tx\V1beta1\ModeInfo\Single;
use Cosmos\Tx\V1beta1\SignDoc;
use Cosmos\Tx\V1beta1\SignerInfo;
use Cosmos\Tx\V1beta1\TxRaw;
use Decimal\Coin\V1\MsgSendCoin;
use Ethermint\Crypto\V1\Ethsecp256k1\PubKey;
use Google\Protobuf\Any;

class ProtoManager
{
    private static $instance;
    private $classesByType = [];

    public static function instance(): ProtoManager
    {
        if(!isset(ProtoManager::$instance)){
            ProtoManager::$instance = new ProtoManager();
        }

        return ProtoManager::$instance;
    }

    private static function setClassList(): array
    {
        return [
            \DecimalSDK\Utils\TxTypes::COIN_BUY => MsgBuyCoin::class,
            \DecimalSDK\Utils\TxTypes::COIN_SEND => MsgSendCoin::class
        ];
    }

    private function __construct()
    {
        $this->classesByType = self::setClassList();
    }

    public function protoByType(string $txType)
    {
        return $this->classesByType[$txType];
    }

    public function getCoin($data): Coin
    {
        return new Coin($data);
    }

    public function getMsgBuyCoin($data): MsgBuyCoin
    {
        return new MsgBuyCoin($data);
    }

    public function getAny($data): Any
    {
        return new Any($data);
    }

    public function getTxBody($data): TxBody
    {
        return new TxBody($data);
    }

    public function getPubKey($data): PubKey
    {
        return new PubKey($data);
    }

    public function getMsgSendCoin($data) {
        return new MsgSendCoin($data);
    }
    
    public function getAuthInfo($payload = null) {
        return new AuthInfo($payload);
    }

    public function getSignerInfo($payload) {
        return new SignerInfo($payload);
    }

    public function getModeInfo($payload) {
        return new ModeInfo($payload);
    }

    public function getSingle($payload) { 
        return new Single($payload);
    }

    public function getFee($payload) {
        return new Fee($payload);
    }

    public function getSignDoc($payload) {
        return new SignDoc($payload);
    }

    public function getTxRaw($payload) {
        return new TxRaw($payload);
    }
}
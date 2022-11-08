<?php

namespace DecimalSDK\Utils;

use Google\Protobuf\Any;
use Cosmos\Base\V1beta1\Coin;
use Cosmos\Tx\Signing\V1beta1\SignMode;
use Cosmos\Tx\V1beta1\AuthInfo;
use Cosmos\Tx\V1beta1\BroadcastTxRequest;
use Cosmos\Tx\V1beta1\BroadcastMode;
use Cosmos\Tx\V1beta1\TxBody;
use Cosmos\Tx\V1beta1\Fee;
use Cosmos\Tx\V1beta1\ModeInfo;
use Cosmos\Tx\V1beta1\SignDoc;
use Cosmos\Tx\V1beta1\SignerInfo;
use Cosmos\Tx\V1beta1\TxRaw;
use Cosmos\Tx\V1beta1\ModeInfo\Single;
use Cosmos\Tx\V1beta1\SimulateRequest;
use Ethermint\Crypto\V1\Ethsecp256k1\PubKey;
use Decimal\Coin\V1\MsgBuyCoin;
use Decimal\Coin\V1\MsgMultiSendCoin;
use Decimal\Coin\V1\MsgSellAllCoin;
use Decimal\Coin\V1\MsgSellCoin;
use Decimal\Coin\V1\MsgSendCoin;
use Decimal\Coin\V1\MultiSendEntry;
use Decimal\Nft\V1\MsgBurnToken;
use Decimal\Nft\V1\MsgMintToken;
use Decimal\Nft\V1\MsgSendToken;
use Decimal\Nft\V1\MsgUpdateReserve;
use Decimal\Nft\V1\MsgUpdateToken;
use Decimal\Validator\V1\MsgDelegate;
use Decimal\Validator\V1\MsgUndelegate;

class ProtoManager
{
    private static $instance;
    private $classesByType = [];

    public static function instance(): ProtoManager
    {
        if (!isset(ProtoManager::$instance)) {
            ProtoManager::$instance = new ProtoManager();
        }

        return ProtoManager::$instance;
    }

    private static function setClassList(): array
    {
        return [
            TxTypes::COIN_BUY => MsgBuyCoin::class,
            TxTypes::COIN_SEND => MsgSendCoin::class,
            TxTypes::COIN_SELL => MsgSellCoin:: class,
            TxTypes::COIN_SELL_ALL => MsgSellAllCoin::class,
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

    public function getMsgMultiSendCoins($sender,$sends) {
        $msg = new MsgMultiSendCoin();
        $sendsPrepared  = [];
        foreach($sends as $send) {
            $sendEntity = new MultiSendEntry();

            $sendEntity->setRecipient($send['to']);
            $sendEntity->setCoin($this->getCoin($send['denom'], $send['amount']));
            $sendsPrepared[] = $sendEntity;
        }

        $msg->setSender($sender);
        $msg->setSends($sendsPrepared);

        return $this->getAny([
            'type_url' => TxTypes::COIN_MULTISEND,
            'value' => $msg->serializeToString(),
        ]);

    }

    public function getMsgValidatorDelegate($delegator, $validator, $denom, $amount) {
        $msg = new MsgDelegate();
        $msg->setDelegator($delegator);
        $msg->setValidator($validator);
        $msg->setCoin($this->getCoin($denom, $amount));

        return $this->getAny([
            'type_url' => TxTypes::VALIDATOR_DELEGATE,
            'value' => $msg->serializeToString()
        ]);
    }

    public function getMsgValidatorUnbound($delegator, $validator, $denom, $amount) {
        $msg = new MsgUndelegate();
        $msg->setDelegator($delegator);
        $msg->setValidator($validator);
        $msg->setCoin($this->getCoin($denom,$amount));

        return $this->getAny([
            'type_url' => TxTypes::VALIDATOR_UNBOUND,
            'value' => $msg->serializeToString()
        ]);
    }

    public function getMsgMintNft($sender, $recipient, $denom,$tokenId, $tokenUri,$allowMint,$reserve,$quantity) {
        $msg = new MsgMintToken();
        $msg->setSender($sender);
        $msg->setDenom($denom);
        $msg->setRecipient($recipient);
        $msg->setTokenId($tokenId);
        $msg->setTokenUri($tokenUri);
        $msg->setAllowMint($allowMint);
        $msg->setReserve($this->getCoin(strtolower(trim($reserve['denom'])), amountUNIRecalculate($reserve['amount'])));
        $msg->setQuantity($quantity);

        return $this->getAny([
            'type_url' => TxTypes::NFT_MINT,
            'value'     => $msg->serializeToString()
        ]);

    }
    public function getCoin($denom, $amount): Coin
    {
        $coin = new Coin();
        $coin->setDenom($denom);
        $coin->setAmount($amount);
        return $coin;
    }

    public function getMsgBurnNft($sender, $tokenId, $subTokenId) {
        $msg = new MsgBurnToken();
        $msg->setSender($sender);
        $msg->setTokenId($tokenId);
        $msg->setSubTokenIds($subTokenId);

        return $this->getAny([
            'type_url' => TxTypes::NFT_BURN,
            'value' => $msg->serializeToString()
        ]);
    }

    public function getMsgTransferNft($sender, $recipient, $tokenId, $subTokenId) {
        $msg = new MsgSendToken();
        $msg->setSender($sender);
        $msg->setRecipient($recipient);
        $msg->setTokenId($tokenId);
        $msg->setSubTokenIds($subTokenId);

        return $this->getAny([
            'type_url' => TxTypes::NFT_TRANSFER,
            'value' => $msg->serializeToString()
        ]);
    }

    public function getMsgEditNftMetadata($sender, $tokenId, $tokenUri) {
        $msg = new MsgUpdateToken();
        $msg->setSender($sender);
        $msg->setTokenId($tokenId);
        $msg->setTokenUri($tokenUri);

        return $this->getAny([
            'type_url' => TxTypes::NFT_EDIT_METADATA,
            'value' => $msg->serializeToString(),
        ]);
    }

    public function getMsgUpdateReserve($sender,$tokenId,$subTokenIds,$reserve, $denom) {
        $msg = new MsgUpdateReserve();
        $msg->setSender($sender);
        $msg->setTokenId($tokenId);
        $msg->setSubTokenIds($subTokenIds);
        $msg->setReserve($this->getCoin($denom,$reserve));

        return $this->getAny([
            'type_url' => TxTypes::NFT_UPDATE_RESERVE,
            'value' => $msg->serializeToString(), 
        ]);
    }

    public function getMsgSellCoin($sender, $denomSell, $amountSell, $denomBuy,$amountBuy) {
        $msg = new MsgSellCoin();
        $msg->setSender($sender);
        $msg->setCoinToSell($this->getCoin($denomSell, $amountSell));
        $msg->setMinCoinToBuy($this->getCoin($denomBuy, $amountBuy));
  
        return $this->getAny([
            'type_url'  => TxTypes::COIN_SELL,
            'value'     => $msg->serializeToString()
        ]);
    }

    public function getMsgBuyCoin($sender,$denomBuy,$amountBuy,$denomSell,$amountSell) {
        $msg = new MsgBuyCoin();
        $msg->setSender($sender);
        $msg->setCoinToBuy($this->getCoin($denomBuy, $amountBuy));
        $msg->setMaxCoinToSell($this->getCoin($denomSell, $amountSell));

        return $this->getAny([
            'type_url'  => TxTypes::COIN_BUY,
            'value'     => $msg->serializeToString()
        ]);
    }

    public function getMsgSellAllCoin($sender,$denomSell, $denomBuy, $amountBuy){
        $msg = new MsgSellAllCoin();
        $msg->setSender($sender);
        $msg->setCoinDenomToSell($denomSell);
        $msg->setMinCoinToBuy($this->getCoin($denomBuy, $amountBuy));

        return $this->getAny([
            'type_url' => TxTypes::COIN_SELL_ALL,
            'value' => $msg->serializeToString(),
        ]);
    }

    public function getAny($data): Any
    {
        return new Any($data);
    }

    public function getTxBody($message, $memo = ''): TxBody
    {
        return new TxBody([
            'messages'                          => [$message],
            'memo'                              => $memo,
            'timeout_height'                    => 0,
            'extension_options'                 => [],
            'non_critical_extension_options'    => []
        ]);
    }

    public function getPubKey($pubKeyBytes): PubKey
    {
        $pubKey = new PubKey();
        $pubKey->setKey($pubKeyBytes);
        return $pubKey;
    }

    public function getMsgSendCoin($sender, $recipient, $denom, $amount)
    {
        $msg = new MsgSendCoin();
        $msg->setSender($sender);
        $msg->setRecipient($recipient);
        $msg->setCoin($this->getCoin($denom, $amount));
        return $this->getAny([
            'type_url'  => TxTypes::COIN_SEND,
            'value'     => $msg->serializeToString()
        ]);
    }

    public function getAuthInfo($signerInfo,$fee) {
        $authInfo = new AuthInfo(); 
        $authInfo->setSignerInfos([$signerInfo]);
        $authInfo->setFee($fee);
        return $authInfo;
    }

    public function getSignerInfo($pubKey, $sequence)
    {
        $signerInfo = new SignerInfo();
        $signerInfo->setPublicKey($this->getAny([
            'type_url' => '/ethermint.crypto.v1.ethsecp256k1.PubKey',
            'value' => $pubKey->serializeToString()
        ]));
        $signerInfo->setSequence($sequence);
        $signerInfo->setModeInfo($this->getSingleModeInfo());
        return $signerInfo;
    }

    public function getSingleModeInfo()
    {
        return new ModeInfo(['single' => new Single(['mode' => SignMode::SIGN_MODE_DIRECT])]);
    }

    public function getFee($gasLimit, $coin)
    {
        $fee = new Fee();
        $fee->setGasLimit($gasLimit);
        $fee->setAmount([$coin]);
        return  $fee;
    }

    public function getSignDoc($bodyBytes, $authInfoBytes, $chainId, $accountNumber)
    {
        $signDoc = new SignDoc();
        $signDoc->setBodyBytes($bodyBytes);
        $signDoc->setAuthInfoBytes($authInfoBytes);
        $signDoc->setChainId($chainId);
        $signDoc->setAccountNumber($accountNumber);
        return $signDoc;
    }

    public function getTxRaw($bodyBytes, $authInfoBytes, $signature)
    {
        $txRaw = new TxRaw();
        $txRaw->setBodyBytes($bodyBytes);
        $txRaw->setAuthInfoBytes($authInfoBytes);
        $txRaw->setSignatures($signature);
        return $txRaw;
    }

    public function getBroadcastRequest($txBytes) {
        $broadcastRequest = new BroadcastTxRequest();
        $broadcastRequest->setTxBytes($txBytes);
        $broadcastRequest->setMode(BroadcastMode::BROADCAST_MODE_SYNC); // always sync mode for now
        return $broadcastRequest;
    }

    public function getSimulateFeePayload($payload){
        $feePayload = new SimulateRequest();
        $feePayload->setTxBytes($payload);

        return $feePayload;
    }
}

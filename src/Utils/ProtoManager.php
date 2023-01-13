<?php

namespace DecimalSDK\Utils;

use Decimal\Coin\V1\MsgCreateCoin;
use Decimal\Coin\V1\MsgRedeemCheck;
use Decimal\Coin\V1\MsgUpdateCoin;
use Decimal\Legacy\V1\MsgReturnLegacy;
use Decimal\Nft\V1\Token;
use Decimal\Nft\V1\TokenCounter;
use Decimal\Validator\V1\Description;
use Google\Protobuf\Any;
use Cosmos\Base\V1beta1\Coin;
use Decimal\Fee\V1\CoinPrice;
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
use Decimal\Coin\V1\MsgBurnCoin;
use Decimal\Coin\V1\MsgMultiSendCoin;
use Decimal\Coin\V1\MsgSellAllCoin;
use Decimal\Coin\V1\MsgSellCoin;
use Decimal\Coin\V1\MsgSendCoin;
use Decimal\Coin\V1\MultiSendEntry;
use Decimal\Fee\V1\MsgUpdateCoinPrices;
use Decimal\Multisig\V1\MsgCreateWallet;
use Decimal\Multisig\V1\MsgCreateTransaction;
use Decimal\Multisig\V1\MsgSignTransaction;
use Decimal\Nft\V1\MsgBurnToken;
use Decimal\Nft\V1\MsgMintToken;
use Decimal\Nft\V1\MsgSendToken;
use Decimal\Nft\V1\MsgUpdateReserve;
use Decimal\Nft\V1\MsgUpdateToken;
use Decimal\Swap\V1\MsgActivateChain;
use Decimal\Swap\V1\MsgDeactivateChain;
use Decimal\Swap\V1\MsgInitializeSwap;
use Decimal\Swap\V1\MsgRedeemSwap;
use Decimal\Validator\V1\MsgDelegate;
use Decimal\Validator\V1\MsgRedelegate;
use Decimal\Validator\V1\MsgCancelRedelegation;
use Decimal\Validator\V1\MsgCancelUndelegation;
use Decimal\Validator\V1\MsgUndelegate;
use Decimal\Validator\V1\MsgSetOffline;
use Decimal\Validator\V1\MsgSetOnline;
use Decimal\Validator\V1\MsgEditValidator;
use Decimal\Validator\V1\MsgCreateValidator;
use Decimal\Validator\V1\MsgDelegateNFT;
use Decimal\Validator\V1\MsgUndelegateNFT;
use Decimal\Validator\V1\MsgRedelegateNFT;
use Decimal\Validator\V1\MsgCancelRedelegationNFT;
use Decimal\Validator\V1\MsgCancelUndelegationNFT;
use Google\Protobuf\Timestamp;

class ProtoManager
{
    const DEFAULT_GAS_LIMIT = '180000';
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
            TxTypes::COIN_SELL => MsgSellCoin::class,
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

    public function getMsgMultiSendCoins($sender, $sends)
    {
        $msg = new MsgMultiSendCoin();
        $sendsPrepared = [];
        foreach ($sends as $send) {
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

    public function getMsgMultisigCreate($sender, $treshold, $owners, $weights)
    {
        $msg = new MsgCreateWallet();

        $msg->setSender($sender);
        $msg->setOwners($owners);
        $msg->setWeights($weights);
        $msg->setThreshold($treshold);

        return $this->getAny([
            'type_url' => TxTypes::MULTISIG_CREATE_WALLET,
            'value' => $msg->serializeToString(),
        ]);
    }

    public function getMsgMultisigCreateTx($sender, $from, $type, $content)
    {
        $msg = new MsgCreateTransaction();

        $msg->setSender($sender);
        $msg->setWallet($from);

        $sendCoinMsg = $this->getMsgSendCoin($from, $content['recipient'], $content['coin'], $content['amount']);

        $msg->setContent($sendCoinMsg);
        
        return $this->getAny([
            'type_url' => TxTypes::MULTISIG_CREATE_TX,
            'value' => $msg->serializeToString(),
        ]);
    }

    public function getMsgMultisigSignTx($sender, $id)
    {
        $msg = new MsgSignTransaction();

        $msg->setSender($sender);
        $msg->setId($id);

        return $this->getAny([
            'type_url' => TxTypes::MULTISIG_SIGN_TX,
            'value' => $msg->serializeToString(),
        ]);
    }

    public function getMsgValidatorDelegate($delegator, $validator, $denom, $amount)
    {
        $msg = new MsgDelegate();
        $msg->setDelegator($delegator);
        $msg->setValidator($validator);
        $msg->setCoin($this->getCoin($denom, $amount));

        return $this->getAny([
            'type_url' => TxTypes::VALIDATOR_DELEGATE,
            'value' => $msg->serializeToString()
        ]);
    }

    public function getMsgValidatorRedelegate($delegator, $validatorSrc, $validatorDst, $denom, $amount)
    {
        $msg = new MsgRedelegate();
        $msg->setDelegator($delegator);
        $msg->setValidatorSrc($validatorSrc);
        $msg->setValidatorDst($validatorDst);
        $msg->setCoin($this->getCoin($denom, $amount));

        return $this->getAny([
            'type_url' => TxTypes::VALIDATOR_REDELEGATE,
            'value' => $msg->serializeToString()
        ]);
    }

    public function getMsgValidatorCancelRedelegate($delegator, $validatorSrc, $validatorDst, $creationHeight, $denom, $amount)
    {
        $msg = new MsgCancelRedelegation();
        $msg->setDelegator($delegator);
        $msg->setValidatorSrc($validatorSrc);
        $msg->setValidatorDst($validatorDst);
        $msg->setCreationHeight($creationHeight);
        $msg->setCoin($this->getCoin($denom, $amount));

        return $this->getAny([
            'type_url' => TxTypes::VALIDATOR_CANCEL_REDELEGATE,
            'value' => $msg->serializeToString()
        ]);
    }

    public function getMsgValidatorCancelUndelegate($delegator, $validator, $creationHeight, $denom, $amount)
    {
        $msg = new MsgCancelUndelegation();
        $msg->setDelegator($delegator);
        $msg->setValidator($validator);
        $msg->setCreationHeight($creationHeight);
        $msg->setCoin($this->getCoin($denom, $amount));

        return $this->getAny([
            'type_url' => TxTypes::VALIDATOR_CANCEL_UNDELEGATE,
            'value' => $msg->serializeToString()
        ]);
    }

    public function getMsgValidatorDeclare($operatorAddress, $rewardAddress, $stake, $coin, $pubKey, $commission, $moniker, $identity, $website, $securityContact, $details)
    {
        $msg = new MsgCreateValidator();
        $msg->setOperatorAddress($operatorAddress);
        $msg->setRewardAddress($rewardAddress);
        $msg->setStake($this->getCoin($coin, $stake));

        $consensusPubkey = $this->getAny([
            'type_url' => '/cosmos.crypto.ed25519.PubKey',
            'value' => ($pubKey)
        ]);

        $msg->setConsensusPubkey($consensusPubkey);
        $msg->setCommission($commission);

        $desc = new Description();
        $desc->setMoniker($moniker);
        $desc->setIdentity($identity);
        $desc->setWebsite($website);
        $desc->setSecurityContact($securityContact);
        $desc->setDetails($details);

        $msg->setDescription($desc);

        return $this->getAny([
            'type_url' => TxTypes::VALIDATOR_CREATE,
            'value' => $msg->serializeToString()
        ]);
    }

    public function getMsgEditValidator($operatorAddress, $rewardAddress, $moniker, $identity, $website, $securityContact, $details)
    {
        $msg = new MsgEditValidator();
        $msg->setOperatorAddress($operatorAddress);
        $msg->setRewardAddress($rewardAddress);

        $desc = new Description();
        $desc->setMoniker($moniker);
        $desc->setIdentity($identity);
        $desc->setWebsite($website);
        $desc->setSecurityContact($securityContact);
        $desc->setDetails($details);

        $msg->setDescription($desc);

        return $this->getAny([
            'type_url' => TxTypes::VALIDATOR_EDIT,
            'value' => $msg->serializeToString()
        ]);
    }

    public function getMsgValidatorUnbond($delegator, $validator, $denom, $amount)
    {
        $msg = new MsgUndelegate();
        $msg->setDelegator($delegator);
        $msg->setValidator($validator);
        $msg->setCoin($this->getCoin($denom, $amount));

        return $this->getAny([
            'type_url' => TxTypes::VALIDATOR_UNBOND,
            'value' => $msg->serializeToString()
        ]);
    }

    public function getMsgValidatorDisable($validator)
    {
        $msg = new MsgSetOffline();
        $msg->setValidator($validator);

        return $this->getAny([
            'type_url' => TxTypes::VALIDATOR_DISABLE,
            'value' => $msg->serializeToString()
        ]);
    }

    public function getMsgValidatorEnable($validator)
    {
        $msg = new MsgSetOnline();
        $msg->setValidator($validator);

        return $this->getAny([
            'type_url' => TxTypes::VALIDATOR_ENABLE,
            'value' => $msg->serializeToString()
        ]);
    }

    public function getMsgMintNft($sender, $recipient, $denom, $tokenId, $tokenUri, $allowMint, $reserve, $quantity)
    {
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
            'value' => $msg->serializeToString()
        ]);

    }
    public function getCoin($denom, $amount): Coin
    {
        $coin = new Coin();
        $coin->setDenom($denom);
        $coin->setAmount($amount);
        return $coin;
    }

    public function getCoinPrice($denom, $price, $quote, $updatedAt): CoinPrice
    {
        $coinPrice = new CoinPrice();
        $coinPrice->setDenom($denom);
        $coinPrice->setPrice($price);
        $coinPrice->setQuote($quote);
        $coinPrice->setUpdatedAt($updatedAt);
        return $coinPrice;
    }

    public function getTimestamp($seconds, $nanos = 0): Timestamp
    {
        $timestamp = new Timestamp();
        $timestamp->setSeconds($seconds);
        $timestamp->setNanos($nanos);
        return $timestamp;
    }

    public function getMsgBurnNft($sender, $tokenId, $subTokenId)
    {
        $msg = new MsgBurnToken();
        $msg->setSender($sender);
        $msg->setTokenId($tokenId);
        $msg->setSubTokenIds($subTokenId);

        return $this->getAny([
            'type_url' => TxTypes::NFT_BURN,
            'value' => $msg->serializeToString()
        ]);
    }

    public function getMsgNftEditMetadata($sender, $tokenId, $tokenURI)
    {
        $msg = new MsgUpdateToken();
        $msg->setSender($sender);
        $msg->setTokenId($tokenId);
        $msg->setTokenUri($tokenURI);

        return $this->getAny([
            'type_url' => TxTypes::NFT_EDIT_METADATA,
            'value' => $msg->serializeToString()
        ]);
    }

    public function getMsgTransferNft($sender, $recipient, $tokenId, $subTokenId)
    {
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

    public function getMsgNftdelegate($delegator, $validator, $tokenId, $subTokenIds)
    {
        $msg = new MsgDelegateNFT();
        $msg->setDelegator($delegator);
        $msg->setValidator($validator);
        $msg->setTokenId($tokenId);
        $msg->setSubTokenIds($subTokenIds);

        return $this->getAny([
            'type_url' => TxTypes::NFT_DELEGATE,
            'value' => $msg->serializeToString()
        ]);
        // EDITED
    }

    public function getMsgNftUndelegate($delegator, $validator, $tokenId, $subTokenIds)
    {
        $msg = new MsgUndelegateNFT();
        $msg->setDelegator($delegator);
        $msg->setValidator($validator);
        $msg->setTokenId($tokenId);
        $msg->setSubTokenIds($subTokenIds);

        return $this->getAny([
            'type_url' => TxTypes::NFT_UNDELEGATE,
            'value' => $msg->serializeToString()
        ]);
        // EDITED
    }

    public function getMsgNFTRedelegate($delegator, $validatorSrc, $validatorDst, $tokenId, $subTokenIds)
    {
        $msg = new MsgRedelegateNFT();
        $msg->setDelegator($delegator);
        $msg->setValidatorSrc($validatorSrc);
        $msg->setValidatorDst($validatorDst);
        $msg->setTokenId($tokenId);
        $msg->setSubTokenIds($subTokenIds);

        return $this->getAny([
            'type_url' => TxTypes::NFT_REDELEGATE,
            'value' => $msg->serializeToString()
        ]);
        // EDITED
    }

    public function getMsgCancelNFTRedelegate($delegator, $validatorSrc, $validatorDst, $creationHeight, $tokenId, $subTokenIds)
    {
        $msg = new MsgCancelRedelegationNFT();
        $msg->setDelegator($delegator);
        $msg->setValidatorSrc($validatorSrc);
        $msg->setValidatorDst($validatorDst);
        $msg->setCreationHeight($creationHeight);
        $msg->setTokenId($tokenId);
        $msg->setSubTokenIds($subTokenIds);

        return $this->getAny([
            'type_url' => TxTypes::NFT_CANCEL_REDELEGATE,
            'value' => $msg->serializeToString()
        ]);
    }

    public function getMsgCancelNFTUndelegate($delegator, $validator, $creationHeight, $tokenId, $subTokenIds)
    {
        $msg = new MsgCancelUndelegationNFT();
        $msg->setDelegator($delegator);
        $msg->setValidator($validator);
        $msg->setCreationHeight($creationHeight);
        $msg->setTokenId($tokenId);
        $msg->setSubTokenIds($subTokenIds);

        return $this->getAny([
            'type_url' => TxTypes::NFT_CANCEL_UNDELEGATE,
            'value' => $msg->serializeToString()
        ]);
    }

    public function getMsgChainActivate($sender, $id, $name)
    {
        $msg = new MsgActivateChain();
        $msg->setSender($sender);
        $msg->setId($id);
        $msg->setName($name);

        return $this->getAny([
            'type_url' => TxTypes::CHAIN_ACTIVATE,
            'value' => $msg->serializeToString()
        ]);
    }

    public function getMsgChainDeactivate($sender, $id)
    {
        $msg = new MsgDeactivateChain();
        $msg->setSender($sender);
        $msg->setId($id);

        return $this->getAny([
            'type_url' => TxTypes::CHAIN_DEACTIVATE,
            'value' => $msg->serializeToString()
        ]);
    }

    public function getMsgSwapInit($sender, $recipient, $tokenSymbol, $amount, $destChain, $transactionNumber, $fromChain)
    {
        $msg = new MsgInitializeSwap();
        $msg->setSender($sender);
        $msg->setRecipient($recipient);
        $msg->setTokenSymbol($tokenSymbol);
        $msg->setAmount($amount);
        $msg->setDestChain($destChain);
        $msg->setTransactionNumber($transactionNumber);
        $msg->setFromChain($fromChain);

        return $this->getAny([
            'type_url' => TxTypes::SWAP_INIT,
            'value' => $msg->serializeToString()
        ]);
    }

    public function getMsgSwapRedeem($sender, $from, $recipient, $amount, $tokenSymbol, $transactionNumber, $fromChain, $destChain, $v, $r, $s)
    {
        $msg = new MsgRedeemSwap();
        $msg->setSender($sender);
        $msg->setFrom($from);
        $msg->setRecipient($recipient);
        $msg->setAmount($amount);
        $msg->setTokenSymbol($tokenSymbol);
        $msg->setTransactionNumber($transactionNumber);
        $msg->setFromChain($fromChain);
        $msg->setDestChain($destChain);
        $msg->setV($v);
        $msg->setR($r);
        $msg->setS($s);

        return $this->getAny([
            'type_url' => TxTypes::SWAP_REDEEM,
            'value' => $msg->serializeToString()
        ]);
    }

    public function getMsgEditNftMetadata($sender, $tokenId, $tokenUri)
    {
        $msg = new MsgUpdateToken();
        $msg->setSender($sender);
        $msg->setTokenId($tokenId);
        $msg->setTokenUri($tokenUri);

        return $this->getAny([
            'type_url' => TxTypes::SWAP_REDEEM,
            'value' => $msg->serializeToString(),
        ]);
    }

    public function getMsgUpdateReserve($sender, $tokenId, $subTokenIds, $reserve, $denom)
    {
        $msg = new MsgUpdateReserve();
        $msg->setSender($sender);
        $msg->setTokenId($tokenId);
        $msg->setSubTokenIds($subTokenIds);
        $msg->setReserve($this->getCoin($denom, amountUNIRecalculate($reserve)));

        return $this->getAny([
            'type_url' => TxTypes::NFT_UPDATE_RESERVE,
            'value' => $msg->serializeToString(),
        ]);
    }

    public function getMsgCreateCoin($sender, $title, $denom, $initSupply, $maxSupply, $reserve, $crr)
    {
        $msg = new MsgCreateCoin();
        $msg->setSender($sender);
        $msg->setTitle($title);
        $msg->setDenom($denom);
        $msg->setInitialVolume($initSupply);
        $msg->setLimitVolume($maxSupply);
        $msg->setInitialReserve($reserve);
        $msg->setCrr($crr);

        return $this->getAny([
            'type_url' => TxTypes::COIN_CREATE,
            'value' => $msg->serializeToString()
        ]);
    }

    public function getMsgUpdateCoin($sender, $denom, $maxSupply, $identity)
    {
        $msg = new MsgUpdateCoin();
        $msg->setSender($sender);
        $msg->setDenom($denom);
        $msg->setLimitVolume($maxSupply);
        $msg->setIdentity($identity);

        return $this->getAny([
            'type_url' => TxTypes::COIN_UPDATE,
            'value' => $msg->serializeToString()
        ]);
    }

    public function getMsgSellCoin($sender, $denomSell, $amountSell, $denomBuy)
    {
        $msg = new MsgSellCoin();
        $msg->setSender($sender);
        $msg->setCoinToSell($this->getCoin($denomSell, $amountSell));
        $msg->setMinCoinToBuy($this->getCoin($denomBuy, 1));

        return $this->getAny([
            'type_url' => TxTypes::COIN_SELL,
            'value' => $msg->serializeToString()
        ]);
    }

    public function getMsgBuyCoin($sender, $denomBuy, $amountBuy, $denomSell, $amountSell)
    {
        $msg = new MsgBuyCoin();
        $msg->setSender($sender);
        $msg->setCoinToBuy($this->getCoin($denomBuy, $amountBuy));
        $msg->setMaxCoinToSell($this->getCoin($denomSell, $amountSell));

        return $this->getAny([
            'type_url' => TxTypes::COIN_BUY,
            'value' => $msg->serializeToString()
        ]);
    }

    public function getMsgSellAllCoin($sender, $denomSell, $denomBuy, $amountBuy)
    {
        $msg = new MsgSellAllCoin();
        $msg->setSender($sender);
        $msg->setCoinDenomToSell($denomSell);
        $msg->setMinCoinToBuy($this->getCoin($denomBuy, $amountBuy));

        return $this->getAny([
            'type_url' => TxTypes::COIN_SELL_ALL,
            'value' => $msg->serializeToString(),
        ]);
    }

    public function getMsgCoinRedeemCheck($sender, $check, $proof)
    {
        $msg = new MsgRedeemCheck();
        $msg->setSender($sender);
        $msg->setCheck($check);
        $msg->setProof($proof);

        return $this->getAny([
            'type_url' => TxTypes::COIN_REDEEM_CHECK,
            'value' => $msg->serializeToString(),
        ]);
    }

    public function getMsgUpdateCoinPrices($oracle, $prices)
    {
        $msg = new MsgUpdateCoinPrices();
        $msg->setOracle($oracle);
        $msg->setPrices($prices);

        return $this->getAny([
            'type_url' => TxTypes::UPDATE_COIN_PRICES,
            'value' => $msg->serializeToString()
        ]);
    }

    public function getMsgReturnLegacy($sender, $publicKey)
    {
        $msg = new MsgReturnLegacy();
        $msg->setSender($sender);
        $msg->setPublicKey($publicKey);

        return $this->getAny([
            'type_url' => TxTypes::REOWN_LEGACY,
            'value' => $msg->serializeToString()
        ]);
    }

    public function getAny($data): Any
    {
        return new Any($data);
    }

    public function getTxBody($message, $memo = ''): TxBody
    {
        return new TxBody([
            'messages' => [$message],
            'memo' => $memo,
            'timeout_height' => 0,
            'extension_options' => [],
            'non_critical_extension_options' => []
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
            'type_url' => TxTypes::COIN_SEND,
            'value' => $msg->serializeToString()
        ]);
    }

    public function getMsgBurnCoin($sender, $denom, $amount)
    {
        $msg = new MsgBurnCoin();
        $msg->setSender($sender);
        $msg->setCoin($this->getCoin($denom, $amount));
        return $this->getAny([
            'type_url' => TxTypes::COIN_BURN,
            'value' => $msg->serializeToString()
        ]);
    }

    public function getAuthInfo($signerInfo, $fee)
    {
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
        return $fee;
    }

    public function getDefaultFee()
    {
        $fee = new Fee();
        $fee->setGasLimit(self::DEFAULT_GAS_LIMIT);
        $fee->setAmount([]);
        return $fee;
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

    public function getBroadcastRequest($txBytes, $broadcastMode = BroadcastMode::BROADCAST_MODE_SYNC)
    {
        $broadcastRequest = new BroadcastTxRequest();
        $broadcastRequest->setTxBytes($txBytes);
        $broadcastRequest->setMode($broadcastMode);
        return $broadcastRequest;
    }

    public function getSimulateFeePayload($payload)
    {
        $feePayload = new SimulateRequest();
        $feePayload->setTxBytes($payload);

        return $feePayload;
    }
}
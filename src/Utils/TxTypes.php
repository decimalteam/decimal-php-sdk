<?php

namespace DecimalSDK\Utils;

interface TxTypes
{
    const COIN_BUY = "/decimal.coin.v1.MsgBuyCoin";
    const COIN_CREATE = "/decimal.coin.v1.MsgCreateCoin";
    const COIN_UPDATE = "/decimal.coin.v1.MsgUpdateCoin";
    const COIN_SELL = "/decimal.coin.v1.MsgSellCoin";
    const COIN_SEND = "/decimal.coin.v1.MsgSendCoin";
    const COIN_BURN = "/decimal.coin.v1.MsgBurnCoin";
    const COIN_MULTISEND = "/decimal.coin.v1.MsgMultiSendCoin";
    const COIN_SELL_ALL = "/decimal.coin.v1.MsgSellAllCoin";
    const COIN_REDEEM_CHECK = "/decimal.coin.v1.MsgRedeemCheck";
    const MULTISIG_CREATE_WALLET = "/decimal.multisig.v1.MsgCreateWallet";
    const MULTISIG_CREATE_TX = "/decimal.multisig.v1.MsgCreateTransaction";
    const MULTISIG_SIGN_TX = "/decimal.multisig.v1.MsgSignTransaction";
    const CHAIN_ACTIVATE = "/decimal.swap.v1.MsgActivateChain";
    const CHAIN_DEACTIVATE = "/decimal.swap.v1.MsgDeactivateChain";
    const SWAP_INIT = "/decimal.swap.v1.MsgInitializeSwap";
    const SWAP_REDEEM = "/decimal.swap.v1.MsgRedeemSwap";
    const NFT_MINT = "/decimal.nft.v1.MsgMintToken";
    const NFT_BURN = "/decimal.nft.v1.MsgBurnToken";
    const NFT_EDIT_METADATA = "/decimal.nft.v1.MsgUpdateToken";
    const NFT_TRANSFER = "/decimal.nft.v1.MsgSendToken";
    const NFT_UPDATE_RESERVE = "/decimal.nft.v1.MsgUpdateReserve";
    const NFT_DELEGATE = "/decimal.validator.v1.MsgDelegateNFT";
    const NFT_UNDELEGATE = "/decimal.validator.v1.MsgUndelegateNFT";
    const NFT_REDELEGATE = "/decimal.validator.v1.MsgRedelegateNFT";
    const NFT_CANCEL_REDELEGATE = "/decimal.validator.v1.MsgCancelRedelegationNFT";
    const NFT_CANCEL_UNDELEGATE = "/decimal.validator.v1.MsgCancelUndelegationNFT";
    const VALIDATOR_CREATE = "/decimal.validator.v1.MsgCreateValidator";
    const VALIDATOR_DELEGATE = "/decimal.validator.v1.MsgDelegate";
    const VALIDATOR_REDELEGATE = "/decimal.validator.v1.MsgRedelegate";
    const VALIDATOR_CANCEL_REDELEGATE = "/decimal.validator.v1.MsgCancelRedelegation";
    const VALIDATOR_CANCEL_UNDELEGATE = "/decimal.validator.v1.MsgCancelUndelegation";
    const VALIDATOR_UNBOND = "/decimal.validator.v1.MsgUndelegate";
    const VALIDATOR_EDIT = "/decimal.validator.v1.MsgEditValidator";
    const VALIDATOR_DISABLE = "/decimal.validator.v1.MsgSetOffline";
    const VALIDATOR_ENABLE = "/decimal.validator.v1.MsgSetOnline";
    const UPDATE_COIN_PRICES = "/decimal.fee.v1.MsgUpdateCoinPrices";
    const REOWN_LEGACY = "/decimal.legacy.v1.MsgReturnLegacy";
}
<?php

namespace DecimalSDK\Utils;

interface TxTypes {
    const COIN_BUY = "/decimal.coin.v1.MsgBuyCoin";
    const COIN_CREATE = "/decimal.coin.v1.MsgCreateCoin";
    const COIN_UPDATE = "/decimal.coin.v1.MsgUpdateCoin";
    const COIN_SELL = "/decimal.coin.v1.MsgSellCoin";
    const COIN_SEND = "/decimal.coin.v1.MsgSendCoin";
    const COIN_MULTISEND = "/decimal.coin.v1.MsgMultiSendCoin";
    const COIN_SELL_ALL = "/decimal.coin.v1.MsgSellAllCoin";
    const COIN_REDEEM_CHECK = "/decimal.coin.v1.MsgRedeemCheck";
    const MULTISIG_CREATE_WALLET = "/decimal.multisig.v1.MsgCreateWallet";
    const MULTISIG_CREATE_TX = "/decimal.multisig.v1.MsgCreateTransaction";
    const MULTISIG_SIGN_TX = "/decimal.multisig.v1.MsgSignTransaction";
    const SWAP_INIT = "/decimal.swap.v1.MsgSwapInitialize";
    const SWAP_REDEEM = "/decimal.swap.v1.MsgSwapRedeem";
    const NFT_MINT = "/decimal.nft.v1.MsgMintToken";
    const NFT_BURN = "/decimal.nft.v1.MsgBurnToken";
    const NFT_EDIT_METADATA = "/decimal.nft.v1.MsgUpdateToken";
    const NFT_TRANSFER = "/decimal.nft.v1.MsgSendToken";
    const NFT_UPDATE_RESERVE = "/decimal.nft.v1.MsgUpdateReserve";
    const VALIDATOR_DELEGATE = "/decimal.validator.v1.MsgDelegate";
}
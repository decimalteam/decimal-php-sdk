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
    const NFT_MINT = "/decimal.nft.v1.MsgMintNFT";
    const NFT_BURN = "/decimal.nft.v1.MsgBurnNFT";
    const NFT_EDIT_METADATA = "/decimal.nft.v1.MsgEditNFTMetadata";
    const NFT_TRANSFER = "/decimal.nft.v1.MsgTransferNFT";
    const NFT_UPDATE_RESERVE = "/decimal.nft.v1.MsgUpdateReserveNFT";
}
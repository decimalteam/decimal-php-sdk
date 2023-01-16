<?php


namespace DecimalSDK\Utils;


class Networks
{
    const MAINNET = "mainnet";
    const TESTNET = "testnet";
    const DEVNET = "devnet";

    const REST_NODE = [
        self::DEVNET => "https://devnet-val.decimalchain.com/rest/",
        self::TESTNET => "https://testnet-val.decimalchain.com/rest/",
        self::MAINNET => "https://node.decimalchain.com/rest/",
    ];

    const API_NODE = [
        self::DEVNET => "https://devnet-gate.decimalchain.com/api/",
        self::TESTNET => "https://testnet-gate.decimalchain.com/api/",
        self::MAINNET => "https://mainnet-gate.decimalchain.com/api/",
    ];

    const WEB3_NODE = [
        self::DEVNET => "https://devnet-gate.decimalchain.com/api/",
        self::TESTNET => "https://testnet-gate.decimalchain.com/api/",
        self::MAINNET => "https://mainnet-gate.decimalchain.com/api/",
    ];

    const RPC = [
        DecimalNetworks::DEVNET => [
            'gateHost' => "https://devnet-gate.decimalchain.com/api/rpc/broadcast",
            'nodeHost' => "https://devnet-val.decimalchain.com/rpc/",
        ],
        DecimalNetworks::TESTNET => [
            'gateHost' => "https://testnet-gate.decimalchain.com/api/rpc/",
            'nodeHost' => "https://testnet-val.decimalchain.com/rpc/",
        ],
        DecimalNetworks::MAINNET => [
            'gateHost' => "https://mainnet-gate.decimalchain.com/api/rpc/",
            'nodeHost' => "https://node.decimalchain.com/rpc/",
        ],
    ];
}
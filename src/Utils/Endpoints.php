<?php

namespace DecimalSDK\Utils;


abstract class DecimalNetworks
{
    const MAINNET = "mainnet";
    const TESTNET = "testnet";
    const DEVNET = "devnet";
}

function getApiEndpoint($network): string {
    return apiEndpoints[$network];
}

function getRestNodeEndpoint($network): string {
  return restNodeEndpoints[$network];
}

function getRpcEndpoint(
  $network,
  $isNodeDirectMode
): string {
  $networkEndpoints = rpcEndpoints[$network];
  return $isNodeDirectMode
    ? $networkEndpoints['nodeHost']
    : $networkEndpoints['gateHost'];
}

const gateEstimationEndpoint = "tx/estimate";

function getNodeFeeEstimationEndpoint(
  $nodeRestHost,
  $txBytes,
  $denom
): string {
  return "{$nodeRestHost}decimal/fee/v1/calculate_commission?tx_bytes={$txBytes}&denom={$denom}";
}

const devnetEndpoints = [
    'gateHost' => "https://devnet-gate.decimalchain.com/api/rpc/broadcast",
    'nodeHost' => "https://devnet-val.decimalchain.com/rpc/",
];

const testnetEndpoints = [
    'gateHost' => "https://testnet-gate.decimalchain.com/api/rpc/",
    'nodeHost' => "https://testnet-val.decimalchain.com/rpc/",
];

// // for now does not know
const mainnetEndpoints = [
    'gateHost' => "https://mainnet-gate.decimalchain.com/api/rpc/",
    'nodeHost' => "https://node.decimalchain.com/rpc/",
];

const rpcEndpoints = [
    DecimalNetworks::DEVNET => devnetEndpoints,
    DecimalNetworks::TESTNET => testnetEndpoints,
    DecimalNetworks::MAINNET => mainnetEndpoints,
];

const restNodeEndpoints = [
    DecimalNetworks::DEVNET => "https://devnet-val.decimalchain.com/rest/",
    DecimalNetworks::TESTNET => "https://testnet-val.decimalchain.com/rest/",
    DecimalNetworks::MAINNET => "https://node.decimalchain.com/rest/",
];

const apiEndpoints = [
    DecimalNetworks::DEVNET => "https://devnet-gate.decimalchain.com/api/",
    DecimalNetworks::TESTNET => "https://testnet-gate.decimalchain.com/api/",
    DecimalNetworks::MAINNET => "https://mainnet-gate.decimalchain.com/api/",
];

<?php


namespace DecimalSDK\Utils;

use DecimalSDK\Errors\DecimalException;
use DecimalSDK\Wallet;
use GuzzleHttp\Client as GClient;

require __DIR__ . '/Endpoints.php';

class ApiRequester
{
    const TEST_GATE_API = 'https://devnet-gate.decimalchain.com/api/';
    const GET = 'get';
    const POST = 'post';
    const TIMEOUT = 6.0;
    const DEFAULT_NODE_URL = 'https://devnet-gate.decimalchain.com/api/rpc/broadcast';
    const DEFAULT_DEFAULT_NODE_RPC_PORT = '26657';
    const DEFAULT_DEFAULT_NODE_REST_PORT = '1317';


    private $options;
    private $isNodeDirectMode;
    private $client;
    private $clientRpc;
    private $useGate;
    private $gateUrl;
    private $nodeUrl;
    private $rpcPort;
    private $restPort;
    private $validModes = ['sync', 'async', 'block'];
    private $wallet;
    private $chain = 'dev';

    /**
     * ApiRequester constructor.
     *
     * awailable options
     * useGate = true/false
     * gateUrl
     * nodeUrl
     * rpcPort
     * restPort
     *
     *
     * @param array $options
     *
     *
     */
    public function __construct(Wallet $wallet, $network, $isNodeDirectMode, $options = [])
    {
        $this->isNodeDirectMode = $isNodeDirectMode;
        $this->validateOptions($network, $options);
        $this->setClient();
        $this->wallet = $wallet;
    }

    protected function validateOptions($network, $options)
    {
        $this->options = $options;
        $nodeRestUrl = 0;
        $rpcEndpoint = 0;
        if (isset($options['customNodeEndpoint']) && $this->isNodeDirectMode) {
            $nodeRestUrl = $options['customNodeEndpoint']['nodeRestUrl'];
            $rpcEndpoint = $options['customNodeEndpoint']['rpcEndpoint'];
        } else {
            $nodeRestUrl = getRestNodeEndpoint($network);
            $rpcEndpoint = getRpcEndpoint($network, $this->isNodeDirectMode);
        }
        $this->options['gateUrl'] = getApiEndpoint($network);

        $this->options['nodeRestUrl'] = $nodeRestUrl;
        $this->options['rpcEndpoint'] = $rpcEndpoint;

        if (isset($this->options['mode']) && !in_array($options['mode'], $this->validModes)) {
            throw new DecimalException('Mode is not valid');
        }

        if (!isset($this->options['mode'])) {
            $this->options['mode'] = $this->validModes[0];
        }

        if (!isset($this->options['setNonceAutomatically'])) {
            $this->options['setNonceAutomatically'] = true;
        }
        if (!is_bool($this->options['setNonceAutomatically'])) {
            throw new DecimalException('Set nonce automatically should be a boolean');
        }
    }

    protected function setClient()
    {
        if (!$this->isNodeDirectMode) {
            $params = [
                'base_uri' => $this->options['gateUrl'],
                'timeout' => self::TIMEOUT,
            ];
        } else {
            $params = [
                'base_uri' => $this->options['nodeRestUrl'],
                'timeout' => self::TIMEOUT,
            ];
            $paramsRpc = [
                'base_uri' => $this->options['rpcEndpoint'],
                'timeout' => self::TIMEOUT,
            ];
            $this->clientRpc = new GClient($paramsRpc);
        }
        $this->client = new GClient($params);
    }

    protected function getRpcPrefix()
    {
        return $this->options['useGate'] ? 'rpc/' : 'rest/';
    }

    public function getSignMeta(Wallet $wallet)
    {
        $nodeInfo = $this->getNodeInfo();
        $accountInfo = (object) $this->getAccountInfo($wallet->getAddress());

        $meta = [
            'account_number' => $accountInfo->account->base_account->account_number ?? 0,
            'chain_id' => $nodeInfo->default_node_info->network ?? 0,
        ];

        $wallet->setSequence($accountInfo->account->base_account->sequence ?? 0);
        return $meta;
    }

    public function getAccountInfo($address)
    {
        $response = @file_get_contents($this->options['nodeRestUrl'] . "cosmos/auth/v1beta1/accounts/" . $address);

        return json_decode($response);
    }


    public function getNodeInfo()
    { 
        if ($this->isNodeDirectMode) {
            $url = 'cosmos/base/tendermint/v1beta1/node_info';
        } else {
            $url = 'rpc/node_info';
        }
        
        $response = $this->_request($url, self::GET, false);
        return $response;
    }

    public function getChainId()
    {
        $nodeInfo = $this->getNodeInfo();
        preg_match('/_(.*?)-/', $nodeInfo->default_node_info->network, $chainId);
        return $chainId[1];
    }

    
    public function getCoinsList($address, $limit = 1, $offset = 0, $query = null)
    {
        //todo this coin to coins
        $url = "address/$address/coins?limit=$limit&offset=$offset";

        if ($query) {
            $url += "&$query";
        }

        return $this->_request($url, self::GET, false);
    }

    public function getCoin($symbol)
    {
        if (!$symbol) {
            throw new DecimalException('symbol is required');
        }

        $url = "coin/$symbol";

        return $this->_request($url, self::GET, false);
    }


    public function getAddress($address, $txLimit = 0, $params = [])
    {
        $signature = isset($params['signature']) ? '&signature=' . json_encode($params['signature']) : '';
        $timestamp = isset($params['timestamp']) ? '&timestamp=' . $params['timestamp'] : '';
        if (!$address) {
            throw new DecimalException('address is required');
        }

        try {
            $url = "address/$address?txLimit=$txLimit$timestamp$signature";
        } catch (\Exception $e) {
            throw new DecimalException('Address not initialized yet.');
        }

        return $this->_request($url, self::GET);
    }

    public function getNftsTxes($address, $limit, $offset, $order, $params = [])
    {
        $signature = isset($params['signature']) ? '&signature=' . json_encode($params['signature']) : '';
        $timestamp = isset($params['timestamp']) ? '&timestamp=' . $params['timestamp'] : '';
        if (!$address) {
            throw new DecimalException('address is required');
        }
        $url = "address/$address/nfts/txs?$order&limit=$limit&offset=$offset$timestamp$signature";

        return $this->_request($url, self::GET);
    }

    public function getNftTxes($addressNft, $timestamp, $signature, $limit, $offset, $order)
    {
        $signature = json_encode($signature);
        if (!$addressNft) {
            throw new DecimalException('Nft id is required');
        }
        $url = "nfts/$addressNft/txs?$order&limit=$limit&offset=$offset&timestamp=$timestamp&signature=$signature";

        return $this->_request($url, self::GET);
    }

    public function getNonce($address)
    {
        return $this->wallet->getSequence();
    }

    public function getTransaction($hash)
    {
        if (!$hash) {
            throw new DecimalException('hash is required');
        }

        if ($this->isNodeDirectMode) {
            $url = "tx?hash=0x$hash";
            $rpc = true;
        } else {
            $url = "tx/$hash";
            $rpc = false;
        }

        $response = $this->_request($url, self::GET, $rpc);
        return $response;
    }

    public function getNftMetadata($addressNft)
    {
        if (!$addressNft) {
            throw new DecimalException('address is required');
        }
        $url = "nfts/$addressNft";
        $res = $this->_request($url, self::GET, false);
        return $res;
    }

    public function getNftList($address, $limit = 1, $offset = 0, $query = 0)
    {
        if (!$address) {
            throw new DecimalException('address is required');
        }

        $url = "address/$address/nfts?limit=$limit&offset=$offset";

        if ($query) {
            $url += "&$query";
        }

        $response = $this->_request($url, self::GET . false);
        return $response;
    }

    public function getMultiSigsByAddress($address)
    {
        if (!$address) {
            throw new DecimalException('address is required');
        }

        $url = "address/$address/multisigs";

        $res = $this->_request($url, self::GET, false);
        return $res->result;
    }

    public function getMultisig($address)
    {
        if (!$address) {
            throw new DecimalException('address is required');
        }

        $url = "multisig/$address";

        $res = $this->_request($url, self::GET);
        return $res->result;
    }

    public function getMultisigTXs($address, $limit = 1, $offset = 0)
    {
        if (!$address) {
            throw new DecimalException('address is required');
        }

        $url = "multisig/$address/txs?limit=$limit&offset=$offset";

        $res = $this->_request($url, self::GET);
        return $res->result;
    }

    public function getStakesByAddress($address)
    {
        if (!$address) {
            throw new DecimalException('address is required');
        }

        $url = "address/$address/stakes";

        $res = $this->_request($url, self::GET);
        return $res->result;
    }

    public function getNftStakesByAddress($address)
    {
        if (!$address) {
            throw new DecimalException('address is required');
        }

        $url = "address/$address/nfts/stakes";

        $res = $this->_request($url, self::GET);

        return $res->result;
    }

    public function getValidator($address)
    {
        try {
            if (!$address) {
                throw new DecimalException('address is required');
            }

            $url = "validator/$address";

            $res = $this->_request($url, self::GET);

            return $res->result;

        } catch (\Exception $e) {
            throw new DecimalException('Such a validator does not exist');
        }
    }

    public function getTokenCreationBytecode($payload)
    {
        [
            'name' => $name,
            'symbol' => $symbol,
            'supply' => $supply,
            'maxSupply' => $maxSupply,
            'mintable' => $mintable,
            'burnable' => $burnable,
            'capped' => $capped
        ] = $payload;

        $url = $this->options['gateUrl'] . 
            "evm-token/data?name=$name&symbol=$symbol&supply=$supply&maxSupply=$maxSupply&mintable=$mintable&burnable=$burnable&capped=$capped";

        $res = $this->_request($url, self::GET);

        return $res->result;
    }

    public function getCommission($url)
    {
        $res = $this->_request($url, self::GET);
        return $res;
    }

    public function checkTransaction($hash)
    {
        try {
            $url = 'tx/' . $hash;
            $res = $this->client->get($url);
            $body = $res->getBody();
            return json_decode($body->getContents(), true);
        } catch (\Exception $exception) {
            return $this->getError(json_encode($exception->getMessage()));
        }
    }

    public function sendTx($tx, $rpc = false, $options = [], $method = self::POST)
    {
        try {
            $url = '/txs';
            $tx = ['tx' => $tx, 'mode' => $this->options['mode']];

            return $this->txResult($this->_request($url, $method, $rpc, $tx, $options));
        } catch (\Exception $exception) {
            return $this->getError(json_encode($exception->getMessage()));
        }
    }


    public function post($url, $payload, $rpc = false)
    {
        return $this->_request($url, self::POST, $rpc, $payload);
    }

    private function _request($url, $method, $rpc = false, $payload = null, $optional = [])
    {
        try {
            $options = [];
            if ($payload) {
                $options['headers'] = [
                    'Content-Type' => 'application/json',
                ];
                $options['body'] = json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
            }
            if ($rpc) {
                $client = $this->clientRpc;
            } else {
                $client = $this->client;
            }

            $res = $client->$method($url, $options);
            $body = $res->getBody();
            $decoded = json_decode($body);

            return $decoded;

        } catch (\Exception $exception) {

            return $this->getError(json_encode($exception->getMessage()));
        }
    }

    public function txResult($jsonResp)
    {
        $resp = $jsonResp;
        $errorMessage = null;
        if (property_exists($jsonResp, 'code') && property_exists($jsonResp, 'raw_log')) {
            if ($jsonResp->raw_log) {
                $rawLogAsString = json_encode($jsonResp->raw_log);
                if (substr($rawLogAsString, 0) === '{' && $jsonResp->raw_log->message) {
                    $errorMessage = $jsonResp->raw_log->message;
                } else {
                    $errorMessage = $rawLogAsString;
                }
            }
        }

        if (property_exists($jsonResp, 'code') && !empty($jsonResp->code)) {
            $error = [
                'errorCode' => $resp->code,
                'errorMessage' => $errorMessage
            ];
        } else {
            $error = null;
        }

        $resp = [
            'hash' => $resp->txhash,
            'height' => $resp->height,
            'success' => !$resp->code,
            'pending' => $resp->pending,
            'error' => $error,
        ];

        if (boolval($this->wallet->getSequence())) {
            WalletHelpers::updateNonce($this->wallet, $jsonResp->code ? null : (int) $this->wallet->getSequence() + 1);
        }


        return $resp;

    }

    /**
     *  get error body
     *
     * @param $exception
     * @param  null  $txhash
     * @return array
     */
    protected function getError($exception, $code = null, $txhash = null)
    {
        return [
            'hash' => $txhash,
            'success' => false,
            'error' => [
                'errorCode' => $code,
                'errorMessage' => $exception,
            ]
        ];
    }

    public function getNfts($address, $timestamp, $signature, $limit = 10, $offset = 0, $query = null)
    {
        $signature = json_encode($signature);
        $query = $query ? '&query=' . $query : '';
        $url = "address/$address/nfts?limit=$limit&offset=$offset&timestamp=$timestamp&signature=$signature$query";
        try {
            $res = $this->client->get($url);
            $body = $res->getBody();
            return json_decode($body->getContents(), true);
        } catch (\Exception $exception) {
            return $this->getError(json_encode($exception->getMessage()));
        }
    }

    public function getNftById($addressNft, $timestamp, $signature)
    {
        $signature = json_encode($signature);
        $url = "nfts/$addressNft?timestamp=$timestamp&signature=$signature";
        try {
            $res = $this->client->get($url);
            $body = $res->getBody();
            $response = json_decode($body->getContents(), true);

            return $response;
        } catch (\Exception $exception) {
            return $this->getError(json_encode($exception->getMessage()));
        }
    }

    public function sendTxToBroadcast($broadcastPayload)
    {
        $response = $this->post($this->options['nodeRestUrl'] . 'cosmos/tx/v1beta1/txs', $broadcastPayload);
        return $response;
    }

}
<?php


namespace DecimalSDK\Utils;

use DecimalSDK\Errors\DecimalException;
use DecimalSDK\Wallet;
use GuzzleHttp\Client as GClient;

class ApiRequester
{
    const TEST_GATE_API = 'https://testnet-gate.decimalchain.com/api/';
    const GET = 'get';
    const POST = 'post';


    private $options;
    private $client;
    private $validModes = ['sync', 'async', 'block'];

    public function __construct($options = [])
    {
        $this->options = $options;
        $this->client = new GClient([
            'base_uri' => $this->options['baseUrl'] ?? self::TEST_GATE_API,
            'timeout' => 5.0,
        ]);
    }

    public function getSignMeta(Wallet $wallet)
    {
        $nodeInfo = $this->getNodeInfo();

        $accountInfo = $this->getAccountInfo($wallet->getAddress());

        return [
            'sequence' => $accountInfo->result->value->sequence,
            'account_number' => $accountInfo->result->value->account_number,
            'chain_id' => $nodeInfo->node_info->network,
        ];
    }

    public function getNodeInfo()
    {
        $url = 'rpc/node_info';
        return $this->_request($url, self::GET);
    }

    public function getAccountInfo($address)
    {
        if (isset($this->options['createNonce'])) {
            $url = "rpc/auth/accounts/$address";
        } else {
            $url = "rpc/accounts/$address";
        }
        return $this->_request($url, self::GET);
    }

    public function getCoinsList($limit = 1, $offset = 0, $query = null)
    {
        $url = "coin?limit=$limit&offset=$offset";

        if ($query) $url += "&$query";

        return $this->_request($url, self::GET);
    }

    public function getCoin($symbol)
    {
        if (!$symbol) throw new DecimalException('symbol is required');

        $url = "coin/$symbol";

        return $this->_request($url, self::GET);
    }

    public function getAddress($address, $txLimit = 0)
    {
        if (!$address) throw new DecimalException('address is required');

        $url = "address/$address?txLimit=$txLimit";

        return $this->_request($url, self::GET);
    }

    public function getNonce($address)
    {
        if (!$address) throw new DecimalException('address is required');

        $url = "rpc/auth/accounts/$address";

        $res = $this->_request($url, self::GET);
        $res->result->value->sequence++;
        return $res;
    }

    public function getMultisigsByAdress($address)
    {
        if (!$address) throw new DecimalException('address is required');

        $url = "address/$address/multisigs";

        $res = $this->_request($url, self::GET);
        return $res->result;
    }

    public function getMultisig($address)
    {
        if (!$address) throw new DecimalException('address is required');

        $url = "multisig/$address";

        $res = $this->_request($url, self::GET);
        return $res->result;
    }

    public function getMultisigTXs($address, $limit = 1, $offset = 0)
    {
        if (!$address) throw new DecimalException('address is required');

        $url = "multisig/$address/txs?limit=$limit&offset=$offset";

        $res = $this->_request($url, self::GET);
        return $res->result;
    }

    public function getStakesByAddress($address)
    {
        if (!$address) throw new DecimalException('address is required');

        $url = "address/$address/stakes";

        $res = $this->_request($url, self::GET);
        return $res->result;
    }

    public function getValidator($address)
    {
        try {
            if (!$address) throw new DecimalException('address is required');

            $url = "validator/$address";

            $res = $this->_request($url, self::GET);

            return $res->result;

        } catch (\Exception $e) {
            throw new DecimalException('Such a validator does not exist');
        }
    }

    public function sendTx($tx, $options = [])
    {
        $url = "rpc/txs";
        $mode = isset($options['mode']) ? $options['mode'] : 'sync';
        $tx = ['tx' => $tx, 'mode' => $mode];
        return $this->txResult($this->_request($url, self::POST, $tx, $options));
    }

    public function post($url, $payload)
    {
        return $this->_request($url, self::POST, $payload);
    }

    private function _request($url, $method, $payload = null, $optional = [])
    {
        $options = [];
        if ($payload) {
            $options['headers'] = [
                'Content-Type' => 'application/json',
            ];
            $options['body'] = json_encode($payload, JSON_UNESCAPED_SLASHES);
        }

        try {
            $res = $this->client->$method($url, $options);
            $body = $res->getBody();
            return json_decode($body->getContents());
        } catch (\Exception $exception) {
            return $this->getError(json_encode($exception->getMessage()));
        }
    }

    public function txResult($jsonResp)
    {
        $resp = $jsonResp;

        if (property_exists('jsonResp', 'code')) {
            if ($jsonResp->raw_log) {
                $rawLogAsString = json_encode($jsonResp->raw_log);
                if (substr($rawLogAsString, 0) === '{' && $jsonResp->raw_log->message) {
                    $errorMessage = $jsonResp->raw_log->message;
                } else {
                    $errorMessage = $rawLogAsString;
                }
                $resp = $this->getError($errorMessage, $jsonResp->code, $jsonResp->txhash);
            }
        } else if (property_exists('jsonResp', 'txhash')) {
            $resp = [
                'hash' => $jsonResp->txhash,
                'success' => true,
                'error' => null
            ];
        }

        return $resp;
    }

    /**
     *  get error body
     *
     * @param $exception
     * @param null $txhash
     * @return array
     */
    protected function getError($exception, $code = null, $txhash = null)
    {
        //todo log errors
        return [
            'hash' => $txhash,
            'success' => false,
            'error' => [
                'errorCode' => $code,
                'errorMessage' => $exception,
            ]
        ];
    }
}

<?php


namespace DecimalSDK\Utils;

use DecimalSDK\Errors\DecimalException;
use DecimalSDK\Wallet;
use GuzzleHttp\Client as GClient;

class ApiRequester
{
	const TEST_GATE_API = 'https://devnet-gate.decimalchain.com/api/';
    const GET = 'get';
    const POST = 'post';
	const TIMEOUT = 5.0;
	const DEFAULT_NODE_URL = 'https://devnet-gate.decimalchain.com/api/rpc/broadcast';
    const DEFAULT_DEFAULT_NODE_RPC_PORT = '26657';
    const DEFAULT_DEFAULT_NODE_REST_PORT = '1317';


    private $options;
    private $client;
    private $clientRpc;
    private $useGate;
    private $gateUrl;
    private $nodeUrl;
    private $rpcPort;
    private $restPort;
    private $validModes = ['sync', 'async', 'block'];
    private $wallet;

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
    public function __construct(Wallet $wallet, $options = [])
    {
        $this->validateOptions($options);
        $this->setClient();
        $this->wallet = $wallet;
    }

    protected function validateOptions($options)
    {
        $this->options = $options;
        if (!array_key_exists('useGate', $this->options)) {
            $this->options['useGate'] = true;
        }
        if ($this->options['useGate']) {
            $this->options['baseUrl'] = $this->options['gateUrl'] ?? self::TEST_GATE_API;
        } elseif (!$this->options['useGate']) {
            $this->options['baseUrl'] = $this->options['nodeUrl'] ?? self::DEFAULT_NODE_URL;
            $this->options['rpcPort'] = ':' . ($this->options['rpcPort'] ?? self::DEFAULT_DEFAULT_NODE_RPC_PORT);
            $this->options['restPort'] = ':' . ($this->options['restPort'] ?? self::DEFAULT_DEFAULT_NODE_REST_PORT);
        }

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
        if ($this->options['useGate']) {
            $params = [
                'base_uri' => $this->options['baseUrl'],
                'timeout' => self::TIMEOUT,
            ];
        } elseif (!$this->options['useGate']) {
            $params = [
                'base_uri' => $this->options['baseUrl'] . $this->options['restPort'],
                'timeout' => self::TIMEOUT,
            ];
            $paramsRpc = [
                'base_uri' => $this->options['baseUrl'] . $this->options['rpcPort'],
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
		$accountInfo = (object)$this->getAccountInfo($wallet->getAddress());

		$meta = [
			'account_number' => $accountInfo->account->base_account->account_number ?? 0,
			'chain_id' => $nodeInfo->default_node_info->network ?? 0,
		];

		$wallet->setSequence($accountInfo->account->base_account->sequence ?? 0);
		return $meta;
	}

	public function getNodeInfo()
	{
		$url = 'rpc/node_info';
		$response = $this->_request($url, self::GET, false);
		return $response;
	}

	public function getAccountInfo($address)
	{
		//todo check it
		if (isset($this->options['createNonce'])) {
			$url = "/accounts/$address";
		} else {
			$url = "accounts/$address";
		}

		//todo temp fix
		$response = file_get_contents("https://devnet-val.decimalchain.com/rest/cosmos/auth/v1beta1/accounts/". $address);

		return json_decode($response);
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

        $url = "address/$address?txLimit=$txLimit$timestamp$signature";

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
        if (!$address) {
            throw new DecimalException('address is required');
        }

        $url = $this->getRpcPrefix() . "auth/accounts-with-unconfirmed-nonce/$address";

        if ($this->options['baseUrl'] == self::MAINNET_GATE_API) {
            $url = $this->getRpcPrefix() . "auth/accounts/$address";
        }

        $res = $this->_request($url, self::GET, false);
        $res->result->value->sequence++;
        return $res;
    }

	public function getTransaction($hash) {
		if (!$hash) {
			throw new DecimalException('hash is required');
		}

		$url = "https://devnet-dec2-explorer-api.decimalchain.com/api/tx/$hash";

		$response = $this->_request($url, self::GET, false);
		return $response;
	}


	public function getEstimateTxFee($type, $data,$options=null){
		var_dump("Estimate TX Fee");
		var_dump("Type:", $type);
		var_dump("Data: ", $data);
		
		return 0.453;
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

	public function getNftList($address, $limit=1, $offset=0, $query = 0) {
		if(!$address) {
			throw new DecimalException('address is required');
		}

		$url = "address/$address/nfts?limit=$limit&offset=$offset";

		if ($query) {
			$url += "&$query";
		}

		$response = $this->_request($url, self::GET. false);
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
        $url = $this->getRpcPrefix() . 'txs';
        $tx = ['tx' => $tx, 'mode' => $this->options['mode']];

		return $this->txResult($this->_request($url, $method, $rpc, $tx, $options));
    }


	public function post($url, $payload, $rpc = false) {
		return $this->_request($url, self::POST,$rpc, $payload);
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

        if (boolval($this->wallet->currentNonce)) {
            WalletHelpers::updateNonce($this->wallet, $jsonResp->code ? null : (int)$this->wallet->currentNonce + 1);
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

    public function sendTxToBroadcast($broadcastPayload) {
		$response = $this->post('https://devnet-val.decimalchain.com/rest/cosmos/tx/v1beta1/txs',$broadcastPayload);
		return $response;
	}
	
}

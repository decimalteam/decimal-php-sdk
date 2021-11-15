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
	const TIMEOUT = 5.0;
	const DEFAULT_NODE_URL = 'http://localhost';
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
	 * @param  array  $options
	 *
	 *
	 */
	public function __construct($options = [])
	{
		$this->validateOptions($options);
		$this->setClient();
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
			$this->options['rpcPort'] = ':'.($this->options['rpcPort'] ?? self::DEFAULT_DEFAULT_NODE_RPC_PORT);
			$this->options['restPort'] = ':'.($this->options['restPort'] ?? self::DEFAULT_DEFAULT_NODE_REST_PORT);
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
				'base_uri' => $this->options['baseUrl'].$this->options['restPort'],
				'timeout' => self::TIMEOUT,
			];
			$paramsRpc = [
				'base_uri' => $this->options['baseUrl'].$this->options['rpcPort'],
				'timeout' => self::TIMEOUT,
			];
			$this->clientRpc = new GClient($paramsRpc);
		}
		$this->client = new GClient($params);
	}

	public function getRpcPrefix()
	{
		return $this->options['useGate'] ? 'rpc/' : '';
	}

	public function getSignMeta(Wallet $wallet)
	{
		$nodeInfo = $this->getNodeInfo();

		$accountInfo = (object)$this->getAccountInfo($wallet->getAddress());

		$meta = [
			'sequence' => $accountInfo->result->value->sequence ?? 0,
			'account_number' => $accountInfo->result->value->account_number ?? 0,
			'chain_id' => $nodeInfo->node_info->network ?? 0,
		];

		return $meta;
	}

	public function getNodeInfo()
	{
		$url = $this->getRpcPrefix().'node_info';
		return $this->_request($url, self::GET, false);
	}

	public function getAddressCount()
	{
		return $this->_request('address/count', 'GET');
	}

	public function getAccountInfo($address)
	{
		//todo check it
		if (isset($this->options['createNonce'])) {
			$url = $this->getRpcPrefix()."auth/accounts/$address";
		} else {
			$url = $this->getRpcPrefix()."accounts/$address";
		}

		//todo temp fix
		$url = $this->getRpcPrefix()."auth/accounts/$address";
		return $this->_request($url, self::GET, false);
	}

	public function getCoinsList($limit = 1, $offset = 0, $query = null)
	{
		//todo this coin to coins
		$url = "coins?limit=$limit&offset=$offset";

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

	//todo check it
	public function getAddress($address, $txLimit = 0)
	{
		if (!$address) {
			throw new DecimalException('address is required');
		}

		$url = "address/$address?txLimit=$txLimit";

		return $this->_request($url, self::GET);
	}

	public function getNonce($address)
	{
		if (!$address) {
			throw new DecimalException('address is required');
		}

		$url = $this->getRpcPrefix()."auth/accounts/$address";

		$res = $this->_request($url, self::GET, false);
		$res->result->value->sequence++;
		return $res;
	}

	public function getNftMetadata($addressNft, $address, $payload)
	{
		$url = "nfts/$addressNft?walletAddress=".$address;

		$res = $this->_request($url, self::GET, false, $payload);
		return $res;
	}

    public function getNftById($addressNft, $timestamp, $signature)
    {
        $signature = json_encode($signature);
        $url = "nfts/$addressNft?timestamp=$timestamp&signature=$signature";
        try {
            $res = $this->client->get($url);
            $body = $res->getBody();
            return json_decode($body->getContents(), true);
        } catch (\Exception $exception) {
            return $this->getError(json_encode($exception->getMessage()));
        }
    }

	public function getMultisigsByAdress($address)
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

	public function sendTx($tx, $rpc = false, $options = [], $method = self::POST)
	{
		$url = $this->getRpcPrefix()."txs";

		$mode = isset($options['mode']) ? $options['mode'] : 'sync';
		$tx = ['tx' => $tx, 'mode' => $mode];

		return $this->txResult($this->_request($url, $method, $rpc, $tx, $options));
	}


	public function post($url, $payload, $rpc = false)
	{
		return $this->_request($url, self::POST, $rpc, $payload);
	}

	private function _request($url, $method, $rpc = false, $payload = null, $optional = [])
	{
		$options = [];
		if ($payload) {
			$options['headers'] = [
				'Content-Type' => 'application/json',
			];
			$options['body'] = json_encode($payload, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
		}
		if ($rpc) {
			$client = $this->clientRpc;
		} else {
			$client = $this->client;
		}
		try {
			$res = $client->$method($url, $options);
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
		} else {
			if (property_exists('jsonResp', 'txhash')) {
				$resp = [
					'hash' => $jsonResp->txhash,
					'success' => true,
					'error' => null
				];
			}
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
}

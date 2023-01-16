<?php

namespace DecimalSDK;

use BitcoinPHP\BitcoinECDSA\BitcoinECDSA;
use Cosmos\Tx\V1beta1\BroadcastMode;
use \DecimalSDK\Errors\DecimalException;
use DecimalSDK\Utils\ProtoManager;
use DecimalSDK\Utils\ApiRequester;
use DecimalSDK\Utils\Crypto\Encrypt;
use DecimalSDK\Utils\ProtoManagerAddition;
use DecimalSDK\Utils\TransactionHelpers;
use DecimalSDK\Wallet;
use Elliptic\EC;
use Exception;
use GuzzleHttp\Client as GClient;
use kornrunner\Keccak;
use Web3\Web3;
use Web3\Providers\HttpProvider;
use Web3\RequestManagers\HttpRequestManager;
use Web3\Contract;
use DecimalSDK\Utils\Abis;
use Web3p\EthereumTx\Transaction;
use Web3p\RLP\RLP;



class NetworkOldInfo
{

    const D0VALOPER = 'dxvaloper';

    const DEFAULT_ORDER_FIELD = 'date';
    const DEFAULT_ORDER_DIRECTION = 'DESC';
    const DEFAULT_ORDER = 'order[' . self::DEFAULT_ORDER_FIELD . ']=' . self::DEFAULT_ORDER_DIRECTION;
    const SECONDS_TO_WAIT_FOR_RECEIPT = 15;
    const OLD_MAINNET = 'https://mainnet-explorer-api-old.decimalchain.com/api/';
    const GET = 'get';
    const POST = 'post';
    const TIMEOUT = 6.0;

    private $account;
    private $wallet;
    private $client;


    /**
     * Transaction constructor.
     * @param \DecimalSDK\Wallet $wallet
     * @param array $options
     * @throws DecimalException
     */

    public function __construct()
    {
        $this->setClient();
    }

    protected function setClient()
    {
        $params = [
            'base_uri' => self::OLD_MAINNET,
            'timeout' => self::TIMEOUT,
        ];

        $this->client = new GClient($params);
    }

    public function post($url, $payload)
    {
        return $this->_request($url, self::POST, $payload);
    }

    public function get($url, $payload)
    {
        return $this->_request($url, self::POST, $payload);
    }

    private function _request($url, $method, $payload = null, $optional = [])
    {
        try {
            $options = [];
            if ($payload) {
                $options['headers'] = [
                    'Content-Type' => 'application/json',
                ];
                $options['body'] = json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
            }

            $client = $this->client;

            $res = $client->$method($url, $options);
            $body = $res->getBody();
            $decoded = json_decode($body);

            return $decoded;

        } catch (\Exception $exception) {

            return $this->getError(json_encode($exception->getMessage()));
        }
    }

    public function getAddress($addressOld)
    {
        if (!$addressOld) {
            throw new DecimalException('address is required');
        }

        $url = "address/$addressOld";

        return $this->_request($url, self::GET);
    }

    /**
     * @param $addressOld
     * @param int $limit
     * @param int $offset
     * @param $order
     * @return mixed
     * @throws DecimalException
     */

    public function getAddressRewards($addressOld, $limit = 10, $offset = 0, $order = self::DEFAULT_ORDER)
    {
        if (!$addressOld) {
            throw new DecimalException('address is required');
        }

        $url = "address/$addressOld/rewards?limit=$limit&offset=$offset&$order";

        return $this->_request($url, self::GET);
    }

    public function getCoinsList($limit = 1, $offset = 0, $query = null)
    {
        $response = $this->requester->getCoinsList($this->wallet->getAddress(), $limit, $offset, $query);
        return $response;
    }

    function gen_uuid()
    {
        return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            // 32 bits for "time_low"
            mt_rand(0, 0xffff), mt_rand(0, 0xffff),

            // 16 bits for "time_mid"
            mt_rand(0, 0xffff),

            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            mt_rand(0, 0x0fff) | 0x4000,

            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            mt_rand(0, 0x3fff) | 0x8000,

            // 48 bits for "node"
            mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
        );
    }

    private function rlpHash($hash) {
        $rlp = new RLP;
        $result = Keccak::hash($rlp->encode($hash), '256');
        return $result;
    }
}
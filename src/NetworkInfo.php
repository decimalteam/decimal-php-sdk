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
use kornrunner\Keccak;
use Web3\Web3;
use Web3\Providers\HttpProvider;
use Web3\RequestManagers\HttpRequestManager;
use Web3\Contract;
use DecimalSDK\Utils\Abis;
use Web3p\EthereumTx\Transaction;
use Web3p\RLP\RLP;



class NetworkInfo
{

    const D0VALOPER = 'd0valoper';

    const DEFAULT_GAS_LIMIT = '180000';
    const DEFAULT_ORDER_FIELD = 'createdAt';
    const DEFAULT_ORDER_DIRECTION = 'DESC';
    const DEFAULT_ORDER = 'order[' . self::DEFAULT_ORDER_FIELD . ']=' . self::DEFAULT_ORDER_DIRECTION;
    const SECONDS_TO_WAIT_FOR_RECEIPT = 15;

    private $account;
    private $wallet;
    private $requester;
    private $gateUrl;
    private $nodeRestUrl;
    private $chainId;
    private $isNodeDirectMode;
    private $network;
    private $nodeMeta;
    private $protoManager;
    private $protoManagerAddition;
    private $web3RpcNode;


    /**
     * Transaction constructor.
     * @param \DecimalSDK\Wallet $wallet
     * @param array $options
     * @throws DecimalException
     */

    public function __construct(Wallet $wallet, $network, $isNodeDirectMode = false, $options = [])
    {
        try {
            if (!$wallet) {
                throw new DecimalException('Wrong wallet');
            }

            $this->isNodeDirectMode = $isNodeDirectMode;
            $this->network = $network;
            $this->wallet = $wallet;
            $this->requester = new ApiRequester($wallet, $network, $isNodeDirectMode, $options);
            $this->gateUrl = Utils\getApiEndpoint($network);
            $this->chainId = $this->requester->getChainId();
            $this->web3RpcNode = isset($options['customNodeEndpoint']['web3Node']) ? $options['customNodeEndpoint']['web3Node'] : Utils\getWeb3Endpoint($network);
            $this->signMeta = $this->requester->getSignMeta($this->wallet);
            $this->protoManager = ProtoManager::instance();
            $this->protoManagerAddition = ProtoManagerAddition::instance();
        } catch (Exception $e) {
            throw new DecimalException("Creation of transaction instance failed.");
        }
    }

    public function getBalanceOfToken($payload)
    {
        [
            'account' => $account,
            'tokenAddress' => $tokenAddress,
        ] = $payload;

        $web3 = new Web3(new HttpProvider(new HttpRequestManager($this->web3RpcNode)));
        $abi = Abis::ERC20_ABI;
        $contract = new Contract($web3->provider, $abi);

        try {
            $balance = null;
            $contract->at($tokenAddress)->call('balanceOf', $account, function ($err, $results) use (&$balance) {
                if ($err !== null) {
                    throw new DecimalException($err->getMessage());
                }
                $balance = $results;
            });

            return $balance;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getAllowanceOfToken($payload)
    {
        [
            'owner' => $owner,
            'spender' => $spender,
            'tokenAddress' => $tokenAddress,
        ] = $payload;

        $web3 = new Web3(new HttpProvider(new HttpRequestManager($this->web3RpcNode)));
        $abi = Abis::ERC20_ABI;
        $contract = new Contract($web3->provider, $abi);

        try {
            $allowance = null;
            $contract->at($tokenAddress)->call('allowance', $owner, $spender, function ($err, $results) use (&$allowance) {
                if ($err !== null) {
                    throw new DecimalException($err->getMessage());
                }
                $allowance = $results;
            });

            return $allowance;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getTokenInfo($payload)
    {
        [
            'tokenAddress' => $tokenAddress,
        ] = $payload;

        $web3 = new Web3(new HttpProvider(new HttpRequestManager($this->web3RpcNode)));
        $abi = Abis::ERC20_ABI;
        $contract = new Contract($web3->provider, $abi);

        try {
            $totalSupply = null;
            $contract->at($tokenAddress)->call('totalSupply', function ($err, $results) use (&$totalSupply) {
                if ($err !== null) {
                    throw new DecimalException($err->getMessage());
                }
                $totalSupply = $results;
            });

            $decimal = null;
            $contract->at($tokenAddress)->call('decimals', function ($err, $results) use (&$decimal) {
                if ($err !== null) {
                    throw new DecimalException($err->getMessage());
                }
                $decimal = $results;
            });

            $name = null;
            $contract->at($tokenAddress)->call('name', function ($err, $results) use (&$name) {
                if ($err !== null) {
                    throw new DecimalException($err->getMessage());
                }
                $name = $results;
            });

            $symbol = null;
            $contract->at($tokenAddress)->call('symbol', function ($err, $results) use (&$symbol) {
                if ($err !== null) {
                    throw new DecimalException($err->getMessage());
                }
                $symbol = $results;
            });

            $tokenInfo = [
                'name' => $name,
                'symbol' => $symbol,
                'decimal' => $decimal,
                'totalSupply' => $totalSupply
            ];


            return $tokenInfo;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getTransaction($hash) {
        $response = $this->requester->getTransaction($hash);
        return $response;
    }


    /**
     * @param $addresssNft
     * @return array|mixed
     * @throws DecimalException
     */

    public function getNftMetadata($addressNft) {
        $response = $this->requester->getNftMetadata($addressNft);
        return $response;
    }

    public function getNftList($limit = 1, $offset = 0, $query = null) {
        $response = $this->requester->getNftList($this->wallet->getAddress(), $limit, $offset, $query);
        return $response;
    }

    /**
     * @param $idNft
     * @return mixed
     * @throws DecimalException
     */

    public function getNft($idNft)
    {
        $timestamp = time();
        $signature = $this->signWithElliptic([
            'nftId' => $idNft,
            'timestamp' => $timestamp
        ]);
        return $this->requester->getNftById($idNft, $timestamp, $signature);
    }

    /**
     * @param $address
     * @param int $limit
     * @param int $offset
     * @param null $query
     * @return null
     * @throws DecimalException
     */
    public function getNfts($address, $limit = 10, $offset = 0, $query = null)
    {
        if ($address == $this->wallet->getAddress()) {
            $timestamp = time();
            $signature = $this->signWithElliptic(['timestamp' => $timestamp]);
            return $this->requester->getNfts($address, $timestamp, $signature, $limit, $offset, $query);
        } else {
            return null;
        }
    }

    /**
     * @param $address
     * @param int $txLimit
     * @return array|mixed
     * @throws DecimalException
     */

    public function getAddress($address, $txLimit = 0)
    {
        return $this->requester->getAddress($address, $txLimit);
    }

    /**
     * @param $address
     * @param int $limit
     * @param int $offset
     * @param string $order
     * @return array|mixed
     * @throws DecimalException
     */

    public function getNftsTxes($address, $limit = 10, $offset = 0, $order = self::DEFAULT_ORDER)
    {
        return $this->requester->getNftsTxes($address, $limit, $offset, $order);
    }

    /**
     * @param $addressNft
     * @param int $limit
     * @param int $offset
     * @param string $order
     * @return array|mixed
     * @throws DecimalException
     */

    public function getNftTxes($addressNft, $limit = 10, $offset = 0, $order = self::DEFAULT_ORDER)
    {
        return $this->requester->getNftTxes($addressNft, time(), '', $limit, $offset, $order);
    }

    /**
     * @param $address
     * @return mixed
     * @throws DecimalException
     */

    public function getNftStakesByAddress($address)
    {
        return $this->requester->getNftStakesByAddress($address);
    }

    /**
     * @param $addressNft
     * @return mixed
     * @throws DecimalException
     */

    public function getStakesByAddress($addressNft)
    {
        return $this->requester->getStakesByAddress($addressNft);
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
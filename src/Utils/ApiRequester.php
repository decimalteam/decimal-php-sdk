<?php


namespace DecimalSDK\Utils;

use DecimalSDK\Wallet;
use GuzzleHttp\Client as GClient;
class ApiRequester
{
    private $options;
    private $client;
    private $get = 'get';
    private $post = 'post';
    private $put = 'put';
    private $delete = 'delete';
    private $patch = 'patch';

    public function __construct($options = null)
    {
        $this->options = $options;
        $this->client = $client = new GClient([
            'base_uri' => 'https://testnet-gate.decimalchain.com/api/',
            'timeout'  => 5.0,
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
        return $this->_request($url,$this->get);
    }

    public function getAccountInfo($address)
    {
        $url = "rpc/auth/accounts/$address";
        return $this->_request($url,$this->get);
    }

    public function sendTx($tx)
    {
        $url = "rpc/txs";
        return $this->txResult($this->_request($url,$this->post,$tx));
    }

    private function _request($url,$method,$payload = null)
    {
        $options = [];
        if($payload){
            $options['headers'] = [
                'Content-Type' => 'application/json',
            ];
            $options['body'] = json_encode(['tx' => $payload,'mode' => 'sync'],JSON_UNESCAPED_SLASHES);
        }
        $res = $this->client->$method($url,$options);
        if($res->getStatusCode() === 200){
            $body = $res->getBody();
            $res = json_decode($body->getContents());
            return $res;
        }else{
            pretty_p($res->getReasonPhrase());
        }
    }

    public function txResult($jsonResp)
    {
        $resp = $jsonResp;
        if($jsonResp->code){
            if($jsonResp->raw_log){
                $rawLogAsString = json_encode($jsonResp->raw_log);
                if(substr($rawLogAsString,0) === '{' && $jsonResp->raw_log->message){
                    $errorMessage = $jsonResp->raw_log->message;
                }else{
                    $errorMessage = $rawLogAsString;
                }

                $resp = [
                    'hash' => $jsonResp->txhash,
                    'success' => false,
                    'error' => [
                        'errorCode' => $jsonResp->code,
                        'errorMessage' => $errorMessage,
                    ]
                ];
            }
        }else{
            $resp = [
                'hash' => $jsonResp->txhash,
                'success' => true,
                'error' => null
            ];
        }

        return $resp;
    }
}

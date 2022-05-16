<?php

namespace DecimalSDK\Tests;

use DecimalSDK\Wallet;
use DecimalSDK\Transaction;
use Mockery\Exception;
use DecimalSDK\Errors\DecimalException;

include_once("test_data/devnet_data.php");
include_once("test_data/testnet_data.php");

class Test
{
    public static function runTest(
        Wallet $wallet,
               $transactionPayload
    ){
        try {
            if(str_contains($transactionPayload['gateUrl'], 'devnet')){
                $test_data = DEVNET_DATA;
            }
            if(str_contains($transactionPayload['gateUrl'], 'testnet')){
                $test_data = TESTNET_DATA;
            }
            $test_data = self::getTestData();
            // check transaction methods
            $transactionHashes = [];
            foreach ($test_data['transaction'] as $func_name => $data) {
                $transaction = new Transaction($wallet, $transactionPayload);
                if ($func_name == 'createNftMint') {
                    // generate data for creating nft
                    $data = self::generateDataNft($transaction, $data);
                }
                $result = $transaction->$func_name($data);
                $transactionHashes[$func_name] = $result->txhash;
            }
            $result = [];
            // check wallet methods and add to result array
            foreach ($test_data['wallet'] as $func_name){
                $result[$func_name] = $wallet->$func_name();
            }

            sleep(10);
            // get status of transactions and add to result array
            $transaction = new Transaction($wallet, $transactionPayload);
            foreach ($transactionHashes as $func_name => $txhash) {
                $result[$func_name] = $transaction->checkTransaction($txhash);
            }
            return $result;
        }catch (\Exception $e){
            throw new DecimalException($e->getMessage());
        }

    }

    function generateDataNft(Transaction $transaction ,$data)
    {
        $characters = "CadgWIHKcOkPzn5X0Eji96F7RLiLAxPQ";
        $randomString = '';
        for ($i = 0; $i < strlen($characters); $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
        $assetHash = hash_file('sha1',__DIR__.'/images_nft/nft_cover.jpeg',false);
        $coverHash = hash_file('sha1',__DIR__.'/images_nft/nft_image.jpeg',false);
        $id = $transaction->generateNftId('headline', 'description', $randomString, $coverHash, $assetHash);
        $data['id'] = $id;
        $data['token_uri'] .= $randomString;
        return $data;
    }

}

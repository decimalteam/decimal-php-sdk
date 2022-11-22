<?php

use DecimalSDK\Wallet as Wallet;
use DecimalSDK\TransactionDecimal;

require __DIR__.'/vendor/autoload.php';

(function(){
    $rpcEndpoint = 'http://185.242.122.118/rpc/';
    $apiEndpoint = 'https://testnet-gate.decimalchain.com/api/';
    // $mnemonic = 'cinnamon holiday garbage glue raven one fork vital paddle ready vibrant engage bridge camera leg jar trophy crater turtle renew entire juice shop whisper';
    // $mnemonic = "hold liquid enhance slim clerk frame grape welcome hybrid tower window grab bottom cluster cry tonight need depart table april good jar suspect napkin";
    $mnemonic = "merry fog lab maximum unhappy panic item grit mass cage symptom fatigue";

   
    // do not destroy the transaction and wallets object
    $wallet = new Wallet($mnemonic);

    $transaction = new TransactionDecimal($wallet, [
        'gateWay' => $apiEndpoint,
    ]);

    // $i = 0;
    $payload = [
        'recipient' => 'dx184qe86tyhurv5fxlxgvcwa6znfg3ugk8ajn4r3',
        'denom' => 'testtt',
        'amount' => 5,
    ];

    // $payload = [
    //     'name' => 'testR',
    //     'symbol' => 'RTTA',
    //     'supply' => '100',
    //     'maxSupply' => '1000000',
    //     'mintable' => 'true',
    //     'burnable' => 'true',
    //     'capped' => 'false'
    // ];
    $options = [];
    // $result = $transaction->createToken($payload);
    // var_dump($result);
    $options = ['feeCoin' => 'testtt'];
    // // while ($i < 3) {

        // $result = $transaction->sendCoin($payload);
    // $payload = [
    //     'title' => 'test php sdk',
    //     'ticker' => 'tps',
    //     'initSupply' => '50000',
    //     'maxSupply' => '200000',
    //     'reserve' => '12000',
    //     'crr' => '45'
    // ];
    // $result = $transaction->createCoin($txPayload);
    // var_dump($result);
        $result = $transaction->sendCoin($payload, $options);
        var_dump($result);


    //     sleep(10);
    //     $i++;
    // }
    // $payload = [
    //         'recipient' => '0xC8419191Cb1A3bF4FfC022D01f857D5AFdeD01ba',
    //         'tokenAddress' => '0xB58e0dD2D30fE457B581f38B9B4d401a4b41Cd0F',
    //         'amount' => 1
    //     ];
    // $txReceipt = $transaction->burnTokens($payload);
    // var_dump($txReceipt);
    // $payload = [
    //         'recipient' => '0x8A7798E68Ebc792971510DaF1Bdc2B4538e6f0cD',
    //         'tokenAddress' => '0x10a8CB653ad9d7a22d334607FE301BB407d50C10',
    //         'amount' => 0.5
    //     ];

    // // for ($i = 0; $i < 20; $i++) {
    //     $txReceipt = $transaction->transferTokens($payload);
    //     var_dump($txReceipt);
    //     sleep(1);
    // }

    // $payload = [
    //     'account' => '0xC8419191Cb1A3bF4FfC022D01f857D5AFdeD01ba',
    //     'tokenAddress' => '0x10a8CB653ad9d7a22d334607FE301BB407d50C10'
    // ];
    // $balance = $transaction->balanceOfToken($payload);
    // var_dump($balance);
    // $payload = [
    //     'tokenAddress' => '0x10a8CB653ad9d7a22d334607FE301BB407d50C10'
    // ];
    // $tokenInfo = $transaction->tokenInfo($payload);
    // var_dump($tokenInfo);
    // var_dump($tokenInfo['totalSupply']);

    // $payload = [    
    //     'owner' => '0xC8419191Cb1A3bF4FfC022D01f857D5AFdeD01ba',
    //     'spender' => '0x8A7798E68Ebc792971510DaF1Bdc2B4538e6f0cD',
    //     'tokenAddress' => '0x10a8CB653ad9d7a22d334607FE301BB407d50C10'
    // ];
    // $allowance = $transaction->allowanceOfToken($payload);
    // var_dump($allowance);

    // $payload = [
    //         'from' => '0x8A7798E68Ebc792971510DaF1Bdc2B4538e6f0cD',
    //         'to' => '0xC8419191Cb1A3bF4FfC022D01f857D5AFdeD01ba',
    //         'tokenAddress' => '0x10a8CB653ad9d7a22d334607FE301BB407d50C10',
    //         'amount' => 2
    //     ];

    // $txReceipt =  $transaction->transferTokensFrom($payload);
    // var_dump($txReceipt);

    // $payload = [
    //     'spender' => '0x8A7798E68Ebc792971510DaF1Bdc2B4538e6f0cD',
    //     'amount' => 170,
    //     'tokenAddress' => '0x10a8CB653ad9d7a22d334607FE301BB407d50C10',
    // ];

    // $txReceipt = $transaction->approveTokens($payload);
    // var_dump($txReceipt);

    // $payload = [
    //     'owner' => '0xC8419191Cb1A3bF4FfC022D01f857D5AFdeD01ba',
    //     'spender' => '0x8A7798E68Ebc792971510DaF1Bdc2B4538e6f0cD',
    //     'tokenAddress' => '0x10a8CB653ad9d7a22d334607FE301BB407d50C10'
    // ];
    // $allowance = $transaction->allowanceOfToken($payload);
    // var_dump($allowance);
})();

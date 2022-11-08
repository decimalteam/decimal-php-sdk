<?php

use DecimalSDK\Wallet as Wallet;
use DecimalSDK\Transaction;

require __DIR__.'/vendor/autoload.php';

(function(){

    $rpcEndpoint = 'http://185.242.122.118/rpc/';
    $apiEndpoint = 'https://testnet-gate.decimalchain.com/api/';
    // $mnemonic = 'cinnamon holiday garbage glue raven one fork vital paddle ready vibrant engage bridge camera leg jar trophy crater turtle renew entire juice shop whisper';
    $mnemonic = "hold liquid enhance slim clerk frame grape welcome hybrid tower window grab bottom cluster cry tonight need depart table april good jar suspect napkin";

   
    // do not destroy the transaction and wallets object
    $wallet = new Wallet($mnemonic);

    $transaction = new Transaction($wallet,[
        'gateWay' => $apiEndpoint,
    ]);

    while(true) {
        $payload = [
            'recipient' => 'dx14x9aqf062ey3hr9y3ktv5cu7tchdfjgxg3l3kj',
            'denom' => 'del',
            'amount' => 0.0005
        ];

    $transaction->sendCoin($payload);
    $transaction->sendCoin($payload);


    sleep(10);

}

})();

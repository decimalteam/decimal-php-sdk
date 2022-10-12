<?php

use DecimalSDK\Wallet as Wallet;
use DecimalSDK\Transaction;

require __DIR__.'/vendor/autoload.php';

(function(){

    $rpcEndpoint = 'http://185.242.122.118/rpc/';
    $apiEndpoint = 'https://devnet-dec2.console.decimalchain.com/api/';
    $mnemonic = 'cinnamon holiday garbage glue raven one fork vital paddle ready vibrant engage bridge camera leg jar trophy crater turtle renew entire juice shop whisper';
   
    // do not destroy the transaction and wallets object
    $wallet = new Wallet($mnemonic);

    $transaction = new Transaction($wallet,[
        'gateWay' => $apiEndpoint
    ]);

    while(true) {

    $transaction->sendCoin('dx184qe86tyhurv5fxlxgvcwa6znfg3ugk8ajn4r3', 'del', 0.0005);
    $transaction->sendCoin('dx184qe86tyhurv5fxlxgvcwa6znfg3ugk8ajn4r3', 'del', 0.0005);


    sleep(10);

}

})();

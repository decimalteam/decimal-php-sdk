<?php

use DecimalSDK\Wallet as Wallet;
use DecimalSDK\Decimal;
use Decimal\Coin\V1\MsgBuyCoin;
use Cosmos\Base\V1beta1\Coin;
use DecimalSDK\Transaction;

require __DIR__.'/vendor/autoload.php';

(function(){

//    phpinfo();
//    return;
//    $rpcEndpoint = 'https://devnet-dec2.console.decimalchain.com/api/rpc/broadcast';
    // $rpcEndpoint = 'devnet-dec2.console.decimalchain.com';
   $rpcEndpoint = 'http://185.242.122.118/rpc/';
//    $rpcEndpoint = '185.242.122.118';
    $apiEndpoint = 'https://devnet-dec2.console.decimalchain.com/api/';
    $mnemonic = "hold liquid enhance slim clerk frame grape welcome hybrid tower window grab bottom cluster cry tonight need depart table april good jar suspect napkin";
    $wallet = new Wallet($mnemonic);

    $transaction = new Transaction($wallet, [
        'baseUrl' => 'https://devnet-dec2.console.decimalchain.com/api/',
        'useGate' => true,
        'createNonce' => true
    ]);

    $txPayload = [
        // 'recipient' => 'dx13ykakvugqwzqqmqdj2j2hgqauxmftdn3kqy69g',
        'to' => 'dx13ykakvugqwzqqmqdj2j2hgqauxmftdn3kqy69g', //receiver address
        'coin' => 'DEL', //coin
        'amount' => '1', // 100 tDEL
        'message' => 'memo' // optional
    ];

    $transaction->sendCoin($txPayload);
//    $wallet = new Wallet($mnemonic);
//    print_r($wallet);
//    $tx = new Transaction($wallet);



//    echo $wallet->getAddress();
})();
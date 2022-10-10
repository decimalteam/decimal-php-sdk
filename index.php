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
        // 'createNonce' => true
    ]);

    $txSends = [          
         'sends'=>[
            [
             'to'=> 'dx1lh8uv55uwras3zgzpe8awq35ucxhr66pn3d97k',
            'coin'=>  'DEL',
            'amount'=> 100 ],
            [
             'to'=> 'dx1n4hnaynrm0n56yza9959604t93hlnpvmfasw67',
             'coin'=>  'DEL',
             'amount'=> 100
            ]
        ]
    ];

    $txMintNtf = [
        'recipient'=> 'dx1lx4lvt8sjuxj8vw5dcf6knnq0pacre4w6hdh2v',
        'denom'=> 'phone',
        'token_uri'=> 'https://develop.nft.decimalchain.com/api/nfts/pepe112',
        'quantity'=> '1',
        'reserve'=> ['denom' => 'del', 'amount'=>1],
        'allow_mint'=> true
    ];
    // TODO sellCoin implementation
    // TODO buyCoin implementation
    // TODO sellAllCoin implementation
    // TODO multiSendCoins implementation
    // TODO mintNft implementation
    // TODO burnNft implementation
    // TODO transferNft implementation
    // TODO editNftMetadata implementation
    // TODO updateNtfReserve implementation



    // $transaction->sendCoin('dx14x9aqf062ey3hr9y3ktv5cu7tchdfjgxg3l3kj', 'del', amountUNIRecalculate('3'));

    // $transaction->sellCoin('INITIALD', 'del', 1, 2);
    // $transaction->buyCoin('eth','del', amountUNIRecalculate(1), amountUNIRecalculate(2));
    // $transaction->multiSendCoins($txSends);
    // $transaction->sellAllCoin('btc','bel',2);
    // $transaction->mintNft(
    //     'dx1lx4lvt8sjuxj8vw5dcf6knnq0pacre4w6hdh2v',
    //     'phone',
    //     'https://develop.nft.decimalchain.com/api/nfts/pepe112',
    //     '1',
    //     ['denom' => 'del', 'amount'=>1],
    //     true
    // );
    // $transaction->burnNft('d6ebb0c3-f075-43f2-ac60-ac0d02858154', [1,2]);
    // $transaction->transferNft('d6ebb0c3-f075-43f2-ac60-ac0d02858154','dx1lx4lvt8sjuxj8vw5dcf6knnq0pacre4w6hdh2v',[1,2]);
    // $transaction->editNftMetadata('d6ebb0c3-f075-43f2-ac60-ac0d02858154','https://develop.nft.decimalchain.com/api/nfts/pepe111');
    // $transaction->updateNtfReserve('d6ebb0c3-f075-43f2-ac60-ac0d02858154',[1,2],'10','del');

    $transaction->getCoinsList(2,0);
    // $transaction->nftDelegate('d6ebb0c3-f075-43f2-ac60-ac0d02858154',[1,2],'dx1lx4lvt8sjuxj8vw5dcf6knnq0pacre4w6hdh2v');



})();
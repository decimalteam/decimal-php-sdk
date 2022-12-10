<?php

use DecimalSDK\Utils\ApiRequester;
use DecimalSDK\Wallet as Wallet;
use DecimalSDK\TransactionDecimal;

require __DIR__.'/vendor/autoload.php';

(function(){
    $rpcEndpoint = 'http://185.242.122.118/rpc/';
    $apiEndpoint = 'https://testnet-gate.decimalchain.com/api/';
    // $mnemonic = 'cinnamon holiday garbage glue raven one fork vital paddle ready vibrant engage bridge camera leg jar trophy crater turtle renew entire juice shop whisper';
    // $mnemonic = "hold liquid enhance slim clerk frame grape welcome hybrid tower window grab bottom cluster cry tonight need depart table april good jar suspect napkin";
    $mnemonic = "merry fog lab maximum unhappy panic item grit mass cage symptom fatigue";
    // $mnemonic = "twenty umbrella bless honey garden sunny vote cream another bacon youth twenty document shoe risk library van slight radar banana argue venture father master";
    // $mnemonic = "exit clean improve explain labor miracle party question heavy entire art impact artist symbol voice convince verb enable ranch beyond dilemma front library cushion";
    // $mnemonic = "soldier vapor emotion stick improve drift total thank item tank tomorrow motion hat survey math day ignore glide bracket misery already file celery salad"; // bsc balance

   
    // do not destroy the transaction and wallets object
    $wallet = new Wallet($mnemonic);

    $apiRequester = new ApiRequester($wallet);

    $transaction = new TransactionDecimal($wallet, [
        'gateWay' => $apiEndpoint,
    ]);
    $options = [];

    // $result = $apiRequester->getTransaction("DAA614CBCCC4D0C723F648D9E2D6EE5B6D9EA8BC699FC0997C561F01C8CBAC52");
    // $result = $apiRequester->getNftById();
    $result = $transaction->getNft('90b6dc232e040d38a1bb2ec7711ab35629b9ca5e');
    // $result = $transaction->getNftMetadata('9b77cec21155f4ad9e4f456ccbaf9d7504c9b958');
    // $result = $transaction->getCoinsList(2);
    // $result = $transaction->getCoinsList(2);
    // var_dump($result['result']);

    // // BUY COIN
    // $payload = [
    //     'denomBuy' => 'MICHAIL3',
    //     'amountBuy' => '95',
    //     'denomSell' => 'del',
    //     'amountSell' => '100',
    // ];
    // // $options = ['feeCoin' => 'testsdk3'];
    // // $options = ['feeCoin' => 'testsdk10', 'simulate' => 'true'];
    // $result = $transaction->buyCoin($payload, $options);
    // var_dump($result);

    // // CREATE COIN
    // $payload = [
    //     'title' => 'test php sdk10',
    //     'ticker' => 'testsdk11',
    //     'initSupply' => '50000',
    //     'maxSupply' => '200000',
    //     'reserve' => '12000',
    //     'crr' => '45'
    // ];
    // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // $result = $transaction->createCoin($payload, $options);
    // var_dump($result);

    // // UPDATE COIN
    // $payload = [
    //     'maxSupply' => '270000',
    //     'ticker' => 'testsdk10',
    //     'identity' => '2a3f8bbdbed335aa7544836a9ff57a79'
    // ];
    // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // $result = $transaction->updateCoin($payload, $options);
    // var_dump($result);

    // // COIN SELL
    // $payload = [
    //     'denomBuy' => 'testsdk10',
    //     'amountBuy' => '1',
    //     'denomSell' => 'del',
    //     'amountSell' => '1',
    // ];
    // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // $result = $transaction->sellCoin($payload, $options);
    // var_dump($result);

    // // COIN SEND
    $payload = [
        'recipient' => 'd01ykrttqa27eruxt3ve5ym27qq66r4qssgqthpcd',
        'denom' => 'del',
        'amount' => 7,
    ];
    // $options = ['feeCoin' => 'TESTSDK13', 'simulate' => 'false'];
    // $result = $transaction->sendCoin($payload, $options);
    // var_dump($result);
    $options = ['feeCoin' => 'TESTSDK13', 'simulate' => 'false', 'txBroadcastMode' => 'async'];
    for ($i = 0; $i <= 14; $i++) {
        if ($i == 15) {
            sleep(2);
        }
        if ($i >= 40 && $i <= 50) {
            echo "kekw";
            $payload2 = [
                'recipient' => 'd01ykrttqa27eruxt3ve5ym27qq66r4qssgqthpcd',
                'denom' => 'testsdk121',
                'amount' => 5,
            ];
            $result = $transaction->sendCoin($payload2, $options);
        } else {
            $result = $transaction->sendCoin($payload, $options);
        }
        // $result = $transaction->sendCoin($payload, $options);
        var_dump($result);
    }

    // // COIN BURN
    // $payload = [
    //     'denom' => 'testsdk10',
    //     'amount' => 5,
    // ];
    // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // $result = $transaction->burnCoins($payload, $options);
    // var_dump($result);

    // // COIN MULTISEND
    // $payload = [
    //     'sends' => [
    //         [
    //             'to' => 'd01ykrttqa27eruxt3ve5ym27qq66r4qssgqthpcd',
    //             'coin' => 'testsdk10',
    //             'amount' => 5,
    //         ],
    //         [
    //             'to' => 'd01ykrttqa27eruxt3ve5ym27qq66r4qssgqthpcd',
    //             'coin' => 'DEL',
    //             'amount' => 5,
    //         ],
    //     ],
    // ];
    // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // $result = $transaction->multiSendCoins($payload, $options);
    // var_dump($result);

    // // SELL ALL COINS
    // $payload = [
    //     'denomSell' => 'MICHAIL3',
    //     'denomBuy' => 'del',
    //     // 'minCoinToBuy' => '1'
    // ];
    // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // $result = $transaction->sellAllCoin($payload, $options);
    // var_dump($result);

    // // COIN REDEEM CHECK
    // $payload = [
    //     'check' => 'KBnu4unsSvYD2f6kovxxBiTNY3eSvbWYJak2eqt84sPrSQTVzctaZixY38PAtTcBPpbLdGT1evypMAQy9vLcuPoxQ6ez5ZXafrnkRV4o6FyYFigi46cCN4esUuwezGzKBzVRRQA6jSDHrtbvs1HKfi8ECy7C3Zh6c39xbByy3Cm5tRXbRHdwtZEfFRW96N4fDVi1S4T9nq9hg4gWLVRCmSvrPg2DiouKtCEo6hkV12GX7rzkwc',
    //     'proof' => 'gw6PdD5H7Jyqu7HHkrCr'
    // ];
    // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // $result = $transaction->coinRedeemCheck($payload, $options);
    // var_dump($result);

    // // // MULTISIG CREATE WALLET
    // $payload = [
    //     'threshold' => 2,
    //     'owners' => ['d01epqerywtrgalfl7qytgplptatt776qd65p64w6', 'd01fatzsagt96pfglxlq245th252mv3neckg3cu3c'],
    //     'weights' => [1, 2],
    // ];
    // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // $result = $transaction->multisigCreate($payload, $options);
    // var_dump($result);

    // // MULTISIG CREATE TX
    // // TODO: universal multisig txs
    // $payload = [
    //     'from' => 'd0123m0ngp3tdh7dzh7pvv77stx73zkhf350v7apy',
    //     'to' => 'd01awcpcet7d6yd0lzsqnamrfhchgvkpujg3yxckp',
    //     'coin' => 'del',
    //     'amount' => '5'
    // ];
    // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // $result = $transaction->multisigCreateTx($payload, $options);
    // var_dump($result);

    // // // MULTISIG SIGN TX
    // $payload = [
    //     'txId' => 'd0mstx15msjhrkkfetgvjqjfxrqd74u0kdxjwp5tnf58n',
    // ];
    // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // $result = $transaction->multisigSignTX($payload, $options);
    // var_dump($result);

    // // // CHAIN ACTIVATE
    // // $payload = [
    // //     'chain_id' => '1',
    // //     'name' => 'decimal'
    // // ];
    // // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // // $result = $transaction->chainActivate($payload, $options);
    // // var_dump($result);

    // // // CHAIN DEACTIVATE
    // // $payload = [
    // //     'chain_id' => '1',
    // // ];
    // // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // // $result = $transaction->chainDeactivate($payload, $options);
    // // var_dump($result);

    // с Яриком
    // // SWAP INIT
    // $payload = [
    //     'recipient' => '0xa618f8e2b953593c1f08f2b3dce2a963ce130916',
    //     'tokenSymbol' => 'del',
    //     'amount' => '1',
    //     'destChain' => '3'
    // ];
    // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // $result = $transaction->swapInit($payload, $options);
    // var_dump($result);

    // // SWAP REDEEM
    // $payload = [
    //     'from' => '0x4F5628750B2E82947CDF02Ab45dd5456d919E716',
    //     'recipient' => 'd01nasacsqeknkllf9l9kwm0m78t65laf55722xd9',
    //     'amount' => '1000000000000000000',
    //     'tokenSymbol' => 'del',
    //     'transactionNumber' => '1669623583508',
    //     'fromChain' => 3,
    //     'v' => '0x1b',
    //     'r' => '0x5cbf0d075b0e5c16a9970a171d1d3fa65c106c17fabf0410f04ef0dd386b2b8b',
    //     's' => '0x4b2a8af58785705ed6d1f1fd451ed584120ad01fd5ce3747b12dc02b2af80ace'
    // ];
    // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // $result = $transaction->swapRedeem($payload, $options);
    // var_dump($result);

    // // NFT MINT
    // // TODO: nft id generation and metadata upload
    // $payload = [
    //     'id' => 'dd5d84d6151e2d44f8c0ce9ff147e6bacd4eb50a',
    //     'denom' => 'Testsdkup',
    //     'tokenUri' => 'https://devnet-nft.decimalchain.com/api/nfts/o1kT5aqNDmI8VZYWIGzYMuqW2RLUPOyi',
    //     'quantity' => '4',
    //     'reserveDenom' => 'del',
    //     'reserveAmount' => '10',
    //     'allowMint' => true,
    // ];
    // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // $result = $transaction->mintNft($payload, $options);
    // $result = $transaction->mintNft('90b6dc232e040d38a1bb2ec7711ab35629b9ca5e', '$testCollectionname', 'https://devnet-nft.decimalchain.com/api/nfts/k8aUD7GMGR74LlHuYeEmvRtYScrGIfQy', '2', '1', 'del', true);
    // var_dump($result);

    // // NFT EDIT METADATA
    // // parser fail
    // $payload = [
    //     'tokenId' => '90b6dc232e040d38a1bb2ec7711ab35629b9ca5e',
    //     'tokenURI' => 'https://devnet-nft.decimalchain.com/api/nfts/k8aUD7GMGR74LlHuYeEmvRtYScrGIfQy'
    // ];
    // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // $result = $transaction->nftEditMetadata($payload, $options);
    // var_dump($result);

    // // NFT DELEGATE
    // $payload = [
    //     'id' => 'dd5d84d6151e2d44f8c0ce9ff147e6bacd4eb50a',
    //     'validator_address' => 'd0valoper14elhyzmq95f98wrkvujtsr5cyudffp6qwyerml',
    //     'sub_token_ids' => ['3']
    // ];
    // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // $result = $transaction->nftDelegate($payload, $options);
    // var_dump($result);

    // // NFT UNDELEGATE
    // $payload = [
    //     'id' => 'dd5d84d6151e2d44f8c0ce9ff147e6bacd4eb50a',
    //     'validator_address' => 'd0valoper14elhyzmq95f98wrkvujtsr5cyudffp6qwyerml',
    //     'sub_token_ids' => ['1', '2']
    // ];
    // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // $result = $transaction->nftUndelegate($payload, $options);
    // var_dump($result);

    // // NFT UPDATE RESERVES
    // $payload = [
    //     'id' => 'dd5d84d6151e2d44f8c0ce9ff147e6bacd4eb50a',
    //     'sub_token_ids' => ['1', '2'],
    //     'denom' => 'del',
    //     'reserve' => '20'
    // ];
    // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // $result = $transaction->nftUpdateReserves($payload, $options);
    // var_dump($result);

    // // NFT REDELEGATE
    // $payload = [
    //     'id' => 'dd5d84d6151e2d44f8c0ce9ff147e6bacd4eb50a',
    //     'old_validator' => 'd0valoper14elhyzmq95f98wrkvujtsr5cyudffp6qwyerml',
    //     'new_validator' => 'd0valoper1yvgq6uh35a395hexhxcde2zfpwwafzpa7dtezu',
    //     'sub_token_ids' => ['4']
    // ];
    // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // $result = $transaction->nftRedelegate($payload, $options);
    // var_dump($result);

    // // NFT TRANSFER
    // $payload = [
    //     'id' => '90b6dc232e040d38a1bb2ec7711ab35629b9ca5e',
    //     'recipient' => 'd0184qe86tyhurv5fxlxgvcwa6znfg3ugk8e4sqgw',
    //     'sub_token_ids' => [1]
    // ];
    // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // $result = $transaction->nftTransfer($payload, $options);
    // var_dump($result);

    // // NFT BURN
    // $payload = [
    //     'id' => '90b6dc232e040d38a1bb2ec7711ab35629b9ca5e',
    //     'subtokenIds' => ['2']
    // ];
    // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // $result = $transaction->burnNft($payload, $options);
    // var_dump($result);

    // // NFT CANCEL REDELEGATE
    // $payload = [
    //     'id' => '90b6dc232e040d38a1bb2ec7711ab35629b9ca5e',
    //     'old_validator' => 'd0valoper14elhyzmq95f98wrkvujtsr5cyudffp6qwyerml',
    //     'new_validator' => 'd0valoper1yvgq6uh35a395hexhxcde2zfpwwafzpa7dtezu',
    //     'sub_token_ids' => ['2'],
    //     'creation_height' => '200'
    // ];
    // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // $result = $transaction->nftCancelRedelegate($payload, $options);
    // var_dump($result);

    // // NFT CANCEL UNDELEGATE
    // $payload = [
    //     'id' => '90b6dc232e040d38a1bb2ec7711ab35629b9ca5e',
    //     'validator' => 'd0valoper14elhyzmq95f98wrkvujtsr5cyudffp6qwyerml',
    //     'sub_token_ids' => ['2'],
    //     'creation_height' => '200'
    // ];
    // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // $result = $transaction->nftCancelUndelegate($payload, $options);
    // var_dump($result);

    // // VALIDATOR CREATE
    // $payload = [
    //      'rewardAddress' => 'd01awcpcet7d6yd0lzsqnamrfhchgvkpujg3yxckp',
    //         'stake' => '100',
    //         'coin' => 'del',
    //         'pubKey' => '6MLm63Cyv/Ez1lMj7uFFFUw4WvdRfukCAgMarvQOmE4=',
    //         'commission' => '10',
    //         'moniker' => 'testname2',
    //         'identity' => '7b6fabb54dfb2d53736ea6eaac59ee01',
    //         'website' => 'testsite2.ru',
    //         'securityContact' => 'test2@mail.ru',
    //         'details' => 'testdiscription2',
    // ];
    // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // $result = $transaction->validatorDeclare($payload, $options);
    // var_dump($result);

    // // VALIDATOR DELEGATE
    // $payload = [
    //      'address' => 'd0valoper1awcpcet7d6yd0lzsqnamrfhchgvkpujg3s4c33',
    //         'stake' => '200',
    //         'coin' => 'TESTSDK13'
    // ];
    // $options = ['feeCoin' => 'testsdk13', 'simulate' => 'false'];
    // $result = $transaction->validatorDelegate($payload, $options);
    // var_dump($result);

    // // VALIDATOR REDELEGATE
    // $payload = [
    //      'old_validator' => 'd0valoper1awcpcet7d6yd0lzsqnamrfhchgvkpujg3s4c33',
    //      'new_validator' => 'd0valoper14elhyzmq95f98wrkvujtsr5cyudffp6qwyerml',
    //         'stake' => '10',
    //         'coin' => 'TESTSDK13'
    // ];
    // $options = ['feeCoin' => 'TESTSDK13', 'simulate' => 'false'];
    // $result = $transaction->validatorRedelegate($payload, $options);
    // var_dump($result);

    // // VALIDATOR CANCEL REDELEGATE
    // $payload = [
    //      'old_validator' => 'd0valoper14elhyzmq95f98wrkvujtsr5cyudffp6qwyerml',
    //      'new_validator' => 'd0valoper1yvgq6uh35a395hexhxcde2zfpwwafzpa7dtezu',
    //         'stake' => '1',
    //         'coin' => 'del',
    //         'creation_height' => '2'
    // ];
    // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // $result = $transaction->validatorCancelRedelegate($payload, $options);
    // var_dump($result);

    // // VALIDATOR CANCEL UNDELEGATE
    // $payload = [
    //      'validator' => 'd0valoper14elhyzmq95f98wrkvujtsr5cyudffp6qwyerml',
    //         'stake' => '1',
    //         'coin' => 'del',
    //         'creation_height' => '2'
    // ];
    // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // $result = $transaction->validatorCancelUndelegate($payload, $options);
    // var_dump($result);

    // // VALIDATOR UNBOND
    // $payload = [
    //      'address' => 'd0valoper1awcpcet7d6yd0lzsqnamrfhchgvkpujg3s4c33',
    //         'stake' => '10',
    //         'coin' => 'testsdk13'
    // ];
    // $options = ['feeCoin' => 'testsdk13', 'simulate' => 'false'];
    // $result = $transaction->validatorUnbound($payload, $options);
    // var_dump($result);

    // // VALIDATOR EDIT
    // $payload = [
    //      'rewardAddress' => 'd01awcpcet7d6yd0lzsqnamrfhchgvkpujg3yxckp',
    //         'moniker' => 'xioh-testnode-tim-test',
    //         'identity' => '7b6fabb54dfb2d53736ea6eaac59ee01',
    //         'website' => 'xioh-testnode-tim-test.ru',
    //         'securityContact' => 'gonako9960@probdd.com',
    //         'details' => 'xioh-testnode1'
    // ];
    // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // $result = $transaction->validatorEdit($payload, $options);
    // var_dump($result);

    // // VALIDATOR DISABLE
    // $payload = [
    //      'validator' => 'd0valoper1awcpcet7d6yd0lzsqnamrfhchgvkpujg3s4c33',
    // ];
    // $options = ['feeCoin' => 'del', 'simulate' => 'false'];
    // $result = $transaction->disableValidator($payload, $options);
    // var_dump($result);

    // // VALIDATOR ENABLE
    // $payload = [
    //      'validator' => 'd0valoper1awcpcet7d6yd0lzsqnamrfhchgvkpujg3s4c33',
    // ];
    // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // $result = $transaction->enableValidator($payload, $options);
    // var_dump($result);

    // // UPDATE COIN PRICES
    // // WARNING: invalid inputs
    // $payload = [
    //      'oracle' => 'xioh-testnode-tim-test.ru',
    //     'denoms' => ['testsdk2'],
    //     'quotes' => ['1'],
    //     'prices' => ['1'],
    //     'updatedAt' => ['100000000000']
    // ];
    // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // $result = $transaction->updateCoinPrices($payload, $options);
    // var_dump($result);

    // // REOWN LEGACY
    // $payload = [
    //     'pubKey' => '04b7a5dcb1cd9078a6e55ff2dbeb58afad5f235065d5b82ff15e18e89394cc2cf3ae2e200c897045d7fd9ae1a9029578d07419b6fc52ca6124c71ff88002f1d2cb'
    // ];
    // // $options = ['feeCoin' => 'testsdk2', 'simulate' => 'true'];
    // $result = $transaction->reownLegacy($payload, $options);
    // var_dump($result);


    // // ERC20 TOKEN CREATION
    // $payload = [
    //     'name' => 'testR',
    //     'symbol' => 'RTTA',
    //     'supply' => '100',
    //     'maxSupply' => '1000000',
    //     'mintable' => 'true',
    //     'burnable' => 'true',
    //     'capped' => 'false'
    // ];
    // $result = $transaction->createToken($payload);
    // var_dump($result);

    // // ERC20 TOKEN MINT
    // $payload = [
    //         'recipient' => '0xC8419191Cb1A3bF4FfC022D01f857D5AFdeD01ba',
    //         'tokenAddress' => '0xB58e0dD2D30fE457B581f38B9B4d401a4b41Cd0F',
    //         'amount' => 1
    //     ];
    // $txReceipt = $transaction->mintTokens($payload);
    // var_dump($txReceipt);

    // // ERC20 TOKEN BURN
    // $payload = [
    //         'recipient' => '0xC8419191Cb1A3bF4FfC022D01f857D5AFdeD01ba',
    //         'tokenAddress' => '0xB58e0dD2D30fE457B581f38B9B4d401a4b41Cd0F',
    //         'amount' => 1
    //     ];
    // $txReceipt = $transaction->burnTokens($payload);
    // var_dump($txReceipt);

    // // ERC20 TOKEN TRANSFER
    // $payload = [
    //         'recipient' => '0x8A7798E68Ebc792971510DaF1Bdc2B4538e6f0cD',
    //         'tokenAddress' => '0x10a8CB653ad9d7a22d334607FE301BB407d50C10',
    //         'amount' => 0.5
    //     ];
    //
    //     $txReceipt = $transaction->transferTokens($payload);
    //     var_dump($txReceipt);

    // // GET ERC20 TOKEN BALANCE
    // $payload = [
    //     'account' => '0xC8419191Cb1A3bF4FfC022D01f857D5AFdeD01ba',
    //     'tokenAddress' => '0x10a8CB653ad9d7a22d334607FE301BB407d50C10'
    // ];
    // $balance = $transaction->balanceOfToken($payload);
    // var_dump($balance);

    // GET ERC20 TOKEN INFO(symbol,name,decimal,total supply)
    $payload = [
        'tokenAddress' => '0x61e84615d929653952e5d68d79641ecd7c588eb4'
    ];
    $tokenInfo = $transaction->tokenInfo($payload);
    var_dump($tokenInfo);

    // // GET ERC20 ALLOWANCE
    // $payload = [    
    //     'owner' => '0xC8419191Cb1A3bF4FfC022D01f857D5AFdeD01ba',
    //     'spender' => '0x8A7798E68Ebc792971510DaF1Bdc2B4538e6f0cD',
    //     'tokenAddress' => '0x10a8CB653ad9d7a22d334607FE301BB407d50C10'
    // ];
    // $allowance = $transaction->allowanceOfToken($payload);
    // var_dump($allowance);

    // // ERC20 TOKEN TRANSFERFROM
    // $payload = [
    //         'from' => '0x8A7798E68Ebc792971510DaF1Bdc2B4538e6f0cD',
    //         'to' => '0xC8419191Cb1A3bF4FfC022D01f857D5AFdeD01ba',
    //         'tokenAddress' => '0x10a8CB653ad9d7a22d334607FE301BB407d50C10',
    //         'amount' => 2
    //     ];
    // $txReceipt =  $transaction->transferTokensFrom($payload);
    // var_dump($txReceipt);

    // // ERC20 TOKEN APPROVE
    // $payload = [
    //     'spender' => '0x8A7798E68Ebc792971510DaF1Bdc2B4538e6f0cD',
    //     'amount' => 170,
    //     'tokenAddress' => '0x10a8CB653ad9d7a22d334607FE301BB407d50C10',
    // ];
    // $txReceipt = $transaction->approveTokens($payload);
    // var_dump($txReceipt);

//         public function coinIssueCheck($payload, $options = [])
//     {
//         [
//             'coin' => $coin,
//             'amount' => $amount,
//             'nonce' => $nonce,
//             'due_block' => $due_block,
//             'passphrase' => $password
//         ] = $payload;
        
//         $chainId = self::CHAIN_ID;

//         $passPhrasePrivKey = hash('sha256', $password);

//         $rlp = new RLP;

//         $checkHash = $this->rlpHash([
//             $chainId,
//             $coin,
//             $amount,
//             $nonce,
//             $due_block
//         ]);


//         $ecdsa = new Ecdsa;
//         $signature = $ecdsa->sign($checkHash, $passPhrasePrivKey);
//         $signature->toBase64();

//         $checkLockedHash = $this->rlpHash([
//             $chainId,
//             $coin,
//             $amount,
//             $nonce,
//             $due_block,
//             $signature
//         ]);

//         $checkObj = $ecdsa->sign($checkLockedHash, $this->wallet->getPrivateKey());
//         $check = $rlp->encode([
//              $chainId,
//             $coin,
//             $amount,
//             $nonce,
//             $due_block,
//             $signature,
//             $checkObj->recoveryId + 27,
//             $checkObj->r,
//             $checkObj->s
//         ]);

//         $base58 = new \Tuupola\Base58;
//         return $base58->encode($check);
//     }


//     public function coinRedeemCheck($payload, $options = []) {
//         [
//             'check' => $check,
//             'proof'  => $proof
//         ] = $payload;

//         var_dump($proof);
//         $passPhrasePrivKey = hash('sha256', $proof);
//         var_dump($passPhrasePrivKey);

//         $words = \BitWasp\Bech32\decode($this->wallet->getAddress());
// var_dump($words);
//         $senderAddressHash = $this->rlpHash($words);
//         var_dump($senderAddressHash);
//         $secp256k1 = new Secp256k1;

//         $proofObj = $secp256k1->sign($senderAddressHash, $passPhrasePrivKey);
//         var_dump($proofObj);

//         $r = dec2hex(gmp_strval($proofObj->getR()));
//         $s = dec2hex(gmp_strval($proofObj->getS()));
//         $recoveryParam = dec2hex(gmp_strval($proofObj->getRecoveryParam()) + 27);

//         $proofSignature = $r . $s . $recoveryParam;

//         var_dump($proofSignature);

//         var_dump(dec2hex(gmp_strval($proofObj->getR())));
//         var_dump(dec2hex(gmp_strval($proofObj->getS())));
//         var_dump(dec2hex(gmp_strval($proofObj->getRecoveryParam())));
//         var_dump(gmp_strval($proofObj->getR()));
//         var_dump(gmp_strval($proofObj->getS()));
//         var_dump($proofObj->getS());
//         var_dump($proofObj->getRecoveryParam());

//         $bin = hex2bin($proofSignature);
//         $proof = base64_encode($bin);
//         var_dump($proof);
            
//         $msg = $this->protoManager->getMsgCoinRedeemCheck(
//             $this->wallet->getAddress(),
//                 $check,
//                 $proof
//             );

//         $result = $this->sendTransaction($msg, $options);
//         return $result;
//     }
})();

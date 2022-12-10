# Decimal PHP SDK

For detailed explanation on how things work, checkout the:

- [Decimal SDK docs](https://help.decimalchain.com/api-sdk/).
- [Decimal Console site](https://console.decimalchain.com/).

# Install

```bash
$ composer require decimalteam/decimal-php-sdk
```

## Pacagist decimalteam/decimal-php-sdk

https://packagist.org/packages/decimalteam/decimal-php-sdk

# Usage

## Verify Address

```php
$wHelper = new WalletHelpers();
return $wHelper->checkAddress('address', 'd0'); // d0 || d0valoper
```

## Create wallet

```php
use DecimalSDK\Wallet;

// Use class Wallet to create address and key pairs
$wallet = new Wallet(/*your mnemonics*/);

echo $wallet->getAddress();
//d013ykakvugqwzqqmqdj2j2hgqauxmftdn3kqy69g
```

## Get public key wallet

Return the public key string of 64 hex characters

```php
use DecimalSDK\Wallet;

echo $wallet->getPublicKey();
// 02f85bb9b5d87cda4197b09d0cd0ef5a1fb97f74f261f508f48a26d7dba2d0ed12
```

## Get private key wallet

Return the private key string of 64 hex characters

```php
use DecimalSDK\Wallet;

echo $wallet->getPrivateKey();
// 8f7370936a728ff3d2306cbf2422382a4297f9059aecb5703fe83eef49d3e828
```

## Coins operations

```php
use DecimalSDK\Wallet;
use DecimalSDK\TransactionDecimal;

// Use wallet instance to init transaction
// gateUrl - mainnet/devnet
// nodeUrl - if not set using http://localhost
// rpcPort - default 26657
// restPort - default 1317
$wallet = new Wallet();
// Enter your address node http://your-address.node/api
$transaction = new TransactionDecimal($wallet, [
    'gateUrl' => 'http://your-address.node/api',
    'useGate' => true/false,
    'mode' => 'sync', // Broadcast tx mode (sync | async | block) (default value sync)
    'setNonceAutomatically' => true/false, // (optional) Automatically calculate nonce within a small transaction pool, after getting the first one from blockchain (default value true)
     'nonce' => '100' // (optional)  Custom nonce for the transaction {valid number string}. If you don't set nonce, sdk get it from blockchain
]);
```

## Create coins

```php

$txPayload = [
    'title' => 'Test coin',
    'ticker' => 'TESTTT',
    'initSupply' => '50000',
    'maxSupply' => '100000',
    'reserve' => '12000',
    'crr' => '45'
];
// For all functions that sends transactions, You can provide address of custom coin that should be used as fee in 'options'.
// Also You can provide 'simulate' flag for estimate fee value. Can be estimated, only if 'feeCoin' set.
// To simulate fee in DEL, set 'feeCoin' => 'del'.
// Also You can provide 'txBroadcastMode' option which should be equal 'sync', 'async' or 'block', default: 'sync'. 
// Modes:
// 'sync' - waiting for blockchain's response and returning respone object.
// 'async' - isn't waiting any responses, always return true.
// 'block' - waiting until transaction will be include in block and return transaction object.
$options = ['feeCoin' => 'testtt', 'simulate' => 'false'];

// 'options' is optional argument that equal empty array by default $options = [] and using DEL as fee coin.
$result = $transaction->createCoin($payload, $options);
// => {hash: '4C0A408B6EBC33AD...', success: true, error: null}
```

## Update coin

```php

$payload = [
    'maxSupply' => '270000',
    'ticker' => 'testsdk10',
    'identity' => '2a3f8bbdbed335aa7544836a9ff57a79'
];

$options = ['feeCoin' => 'testtt', 'simulate' => 'false'];

// 'options' is optional argument that equal empty array by default $options = []
$result = $transaction->updateCoin($payload, $options);
// => {hash: '4C0A408B6EBC33AD...', success: true, error: null}
```

## Send coins

```php

$payload = [
  'recipient' = 'd014x9aqf062ey3hr9y3ktv5cu7tchdfjgxg3l3kj';
  'denom' = 'del';
  'amount' = 3;
];

$options = ['feeCoin' => 'testtt', 'simulate' => 'false'];

// 'options' is optional argument that equal empty array by default $options = []
$result = $transaction->sendCoin($payload, $options);
// => {hash: '4C0A408B6EBC33AD...', success: true, error: null}
```

## Burn coins

```php
$txPayload = [
    'coin' => 'tDEL', //coin
    'amount' => '100', // 100 tDEL
];

$options = ['feeCoin' => 'testtt', 'simulate' => 'false'];

// 'options' is optional argument that equal empty array by default $options = []
$result = $transaction->burnCoins($txPayload, $options);
```

## Sell coins

```php
$payload = [
  'denomSell' = 'del';
  'denomBuy' = 'a1111111';
  'amountSell' = 10;
  'amountBuy' = 2;
];

$options = ['feeCoin' => 'testtt', 'simulate' => 'false'];

// 'options' is optional argument that equal empty array by default $options = []
$result = $transaction->sellCoin($payload, $options);
```

## Buy Coins

```php
$payload = [
  'denomSell' = 'del';
  'denomBuy' = 'a1111111';
  'amountBuy' = 10;
  'amountSell' = 10;
];

$options = ['feeCoin' => 'testtt', 'simulate' => 'false'];

// 'options' is optional argument that equal empty array by default $options = []
$result = $transaction->buyCoin($payload, $options);
```

## Sell all coins

```php

$payload = [
  'denomSell' = 'A1111111';
  'denomBuy' = 'del';
];

$options = ['feeCoin' => 'testtt', 'simulate' => 'false'];

// 'options' is optional argument that equal empty array by default $options = []
$result = $transaction->sellAllCoin($payload, $options);
```


## Validator delegate

```php

$payload = [
'address' = 'd0valoper1ajytg8jg8ypx0rj9p792x32fuxyezga4dq2uk0';
'coin' = 'tdel';
'stake' = '10';
];

$options = ['feeCoin' => 'testtt', 'simulate' => 'false'];

// 'options' is optional argument that equal empty array by default $options = []
$result = $transaction->validatorDelegate($payload, $options);
```

## Validator undelegate

```php
$payload = [
  'address' = 'd0valoper1ajytg8jg8ypx0rj9p792x32fuxyezga4dq2uk0';
  'coin' = 'tdel';
  'stake' = '10';
];

$options = ['feeCoin' => 'testtt', 'simulate' => 'false'];

// 'options' is optional argument that equal empty array by default $options = []
$result = $transaction->validatorUndelegate($payload, $options);
```

## Validator redelegate

```php
$payload = [
    'old_validator' => 'd0valoper14elhyzmq95f98wrkvujtsr5cyudffp6qk9wmzm',
    'new_validator' => 'd0valoper1yvgq6uh35a395hexhxcde2zfpwwafzpaxvupmc',
    'stake' => '1',
    'coin' => 'del'
];

$options = ['feeCoin' => 'testtt', 'simulate' => 'false'];

// 'options' is optional argument that equal empty array by default $options = []
$result = $transaction->validatorRedelegate($payload, $options);
```

## Validator declare

```php
$txPayload = [
    'rewardAddress' => 'd013ykakvugqwzqqmqdj2j2hgqauxmftdn3kqy69g',
    'stake' => '10',
    'coin' => 'tdel',
    'pubKey' => 'JRlv38BXuD1TvWQJ9ic1KHr8PzuOITZH3rD8Zm0Vj3Y',
    'commission' => '10',
    'moniker' => 'my-node-123',
    'identity' => '',
    'website' => 'hello.ru',
    'securityContact' => 'test@test.com',
    'details' => 'details node',
];

$options = ['feeCoin' => 'testtt', 'simulate' => 'false'];

// 'options' is optional argument that equal empty array by default $options = []
$result = $transaction->validatorDeclare($txPayload, $options);
```

## Validator edit

```php
$txPayload = [
    'rewardAddress' => 'd013ykakvugqwzqqmqdj2j2hgqauxmftdn3kqy69g',
    'moniker' => 'my-node-123-edit',
    'identity' => '321',
    'website' => 'hello.ru',
    'securityContact' => 'test@test.com',
    'details' => 'details node',
];
$options = ['feeCoin' => 'testtt', 'simulate' => 'false'];

// 'options' is optional argument that equal empty array by default $options = []
$result = $transaction->validatorEdit($txPayload, $options);
```

## Disable validator

```php
$payload = [
    'validator' => 'd0valoper1fatzsagt96pfglxlq245th252mv3necksyuy0v',
];

$options = ['feeCoin' => 'testtt', 'simulate' => 'false'];

// 'options' is optional argument that equal empty array by default $options = []
$result = $transaction->disableValidator($payload, $options);
```

## Enable validator

```php
$payload = [
    'validator' => 'd0valoper1fatzsagt96pfglxlq245th252mv3necksyuy0v',
];

$options = ['feeCoin' => 'testtt', 'simulate' => 'false'];

// 'options' is optional argument that equal empty array by default $options = []
$result = $transaction->enableValidator($payload, $options);
```

## Multisig create

```php
$txPayload = [
    'threshold' => '2',
    'owners' => ['d013ykakvugqwzqqmqdj2j2hgqauxmftdn3kqy69g', 'd01v9macmluxh7rk3zsd69v7dwv9fsjhctn2jfhz9'],
    'weights' => ['1', '1'],
];

$options = ['feeCoin' => 'testtt', 'simulate' => 'false'];

// 'options' is optional argument that equal empty array by default $options = []
$result = $transaction->multisigCreate($txPayload, $options);
```

## Multisig create tx

```php
$txPayload = [
    'from' => 'd01am6ke3l79kjzdqhwgx37em04mzg686ekf9p3pq',
    'to' => 'd013ykakvugqwzqqmqdj2j2hgqauxmftdn3kqy69g',
    'coin' => 'tdel',
    'amount' => '10',
];

$options = ['feeCoin' => 'testtt', 'simulate' => 'false'];

// 'options' is optional argument that equal empty array by default $options = []
$result = $transaction->multisigCreateTX($txPayload, $options);
```

## Multisig Sign tx

```php
$txPayload = [
    'txId' => 'd0mstx1tqmjch2x5uk9wgnu8zl88rj6h4hy8rm8mtqfft',
];

$options = ['feeCoin' => 'testtt', 'simulate' => 'false'];

// 'options' is optional argument that equal empty array by default $options = []
$result = $transaction->multisigSignTX($txPayload, $options);
```

## Multisend Coins

```php
$txPayload = [
        'sends' => [
             [
                'to'=> 'd01lh8uv55uwras3zgzpe8awq35ucxhr66pn3d97k',
               'coin'=>  'DEL',
               'amount'=> 100
            ],
            [
                'to'=> 'd01n4hnaynrm0n56yza9959604t93hlnpvmfasw67',
                'coin'=>  'DEL',
                'amount'=> 100
            ],
        ],
        'memo' => 'message' // optional
];

$options = ['feeCoin' => 'testtt', 'simulate' => 'false'];

// 'options' is optional argument that equal empty array by default $options = []
$result = $transaction->multiSendCoins($txPayload, $options);

```

## Swap init

```php
$txPayload = [
      'recipient'=> '0x45376AD024c767577714C7B92882578aE8B7f98C',
      'amount'=> '1',
      'tokenSymbol'=> 'DEL',
      'destChain'=> '2'
     ];

$options = ['feeCoin' => 'testtt', 'simulate' => 'false'];

// 'options' is optional argument that equal empty array by default $options = []
$result = $transaction->swapInit($txPayload, $options);
```

## Swap redeem

```php
$txPayload = [
    'from'=> '0x45376AD024c767577714C7B92882578aE8B7f98C',
    'amount'=> '1',
    'recipient'=> 'd013ykakvugqwzqqmqdj2j2hgqauxmftdn3kqy69g',
    'transactionNumber'=> 'lksdnd-asvkla-SDCds',
    'tokenSymbol'=> 'del',
    'fromChain'=> '2',
     'v'=> 0x1c,
     'r'=> '0x0e0eb6089caa52794f7ad64a5ad7ab500b12cc7b640180e30b30b48a19c296e1',
     's'=> '0x2005adafda24593f221aec030126d989609455b2ed66969b2bb64926137f3ce3',
     ];

$options = ['feeCoin' => 'testtt', 'simulate' => 'false'];

// 'options' is optional argument that equal empty array by default $options = []
$result = $transaction->swapRedeem($txPayload, $options);
```

## NFT mint

```php
// response after creating nft
/*
 * {
    "ok": true,
    "result": {
        "token": {
            "isPrivate": false,
            "id": 553,
            "headline": "headline_example",
            "description": "description_example",
            "slug": "CadgWIHKcOkPzn5X0Eji96F7RLiLAxPQ",
            "asset": "assets/CadgWIHKcOkPzn1X0Eji96F7RLiLAxPN_67acc.jpg",
            "cover": "",
            "misc": {
                "coverHash": "4e48fea99881386372c8edf93736a91684ed6a46",
                "coverPath": "CadgWIHKcOkPzn1X0Eji96F7RLiLAxPN_cover_1d223.jpg",
                "coverExtension": "jpg"
            },
            "status": "inactive",
            "updatedAt": "2022-02-16T07:57:49.883Z",
            "createdAt": "2022-02-16T07:57:49.883Z"
        }
    }
}
 * */

// denom - name of nft collection
$recipient ='d01lx4lvt8sjuxj8vw5dcf6knnq0pacre4w6hdh2v';
$denom = 'test';
$tokenUri = 'https://devnet-nft.decimalchain.com/api/nfts/ZOmGepIA6YWSkrTFaXXb5klr38Mv40Kv';
$reserve = ['denom' => 'del', 'amount'=> 1];
$quantity = '1';
$allow_mint = true;

$options = ['feeCoin' => 'testtt', 'simulate' => 'false'];

// 'options' is optional argument that equal empty array by default $options = []
$result = $transaction->mintNft($id,
        $recipient, // optional
        $denom,
        $tokenUri,
        $quantity,
        $reserve,
        $allow_mint,
        $options // optional
        );
```

## NFT burn

```php
$payload = [
    'id' => '90b6dc232e040d38a1bb2ec7711ab35629b9ca5e',
    'subtokenIds' => ['1', '2']
];

$options = ['feeCoin' => 'testtt', 'simulate' => 'false'];

// 'options' is optional argument that equal empty array by default $options = []
$result = $transaction->burnNft($payload, $options);
```

## NFT edit metadata

```php

$payload = [
        'tokenId' => 'c3cb2a5ab98878d7ec5c6d3aaed2b17154f60689',
        'tokenURI' => 'c3cb2a5ab98878d7ec5c6d3aaed2b17154f60689'
    ];

$options = ['feeCoin' => 'testtt', 'simulate' => 'false'];

// 'options' is optional argument that equal empty array by default $options = []
$result = $transaction->editNftMetadata($payload, $options);
```

## NFT transfer

```php

$recipient = 'd01lx4lvt8sjuxj8vw5dcf6knnq0pacre4w6hdh2v';
$id ='c3cb2a5ab98878d7ec5c6d3aaed2b17154f60689';
$payload = [
        'id' => 'c3cb2a5ab98878d7ec5c6d3aaed2b17154f60689',
        'recipient' => 'd01lx4lvt8sjuxj8vw5dcf6knnq0pacre4w6hdh2v',
        'sub_token_ids' => [1]
    ];


$options = ['feeCoin' => 'testtt', 'simulate' => 'false'];

// 'options' is optional argument that equal empty array by default $options = []
$result = $transaction->transferNft($payload, $options);
```

## NFT delegate

```php
$txPayload = [
    'id'=> '78cd420474bf27ecdf4f5f87219e824f7aadf6f3',
    'sub_token_ids'=> [1,2],
    'validator_address'=> 'd01lx4lvt8sjuxj8vw5dcf6knnq0pacre4w6hdh2v'
     ];

$options = ['feeCoin' => 'testtt', 'simulate' => 'false'];

// 'options' is optional argument that equal empty array by default $options = []
$result = $transaction->nftDelegate($payload, $options);
```

## NFT undelegate

```php
$txPayload = [
    'id'=> '78cd420474bf27ecdf4f5f87219e824f7aadf6f3',
    'sub_token_ids'=> [1,2],
    'validator_address'=> 'd01lx4lvt8sjuxj8vw5dcf6knnq0pacre4w6hdh2v'
     ];

$options = ['feeCoin' => 'testtt', 'simulate' => 'false'];

// 'options' is optional argument that equal empty array by default $options = []
$result = $transaction->nftUndelegate($payload, $options);
```

## NFT redelegate

```php
$payload = [
    'id' => '90b6dc232e040d38a1bb2ec7711ab35629b9ca5e',
    'old_validator' => 'd0valoper14elhyzmq95f98wrkvujtsr5cyudffp6qk9wmzm',
    'new_validator' => 'd0valoper1yvgq6uh35a395hexhxcde2zfpwwafzpaxvupmc',
    'sub_token_ids' => ['2']
];

$options = ['feeCoin' => 'testtt', 'simulate' => 'false'];

// 'options' is optional argument that equal empty array by default $options = []
$result = $transaction->nftRedelegate($payload, $options);
```

## NFT reserve update

```php
$payload = [
        'id' => '78cd420474bf27ecdf4f5f87219e824f7aadf6f3',
        'sub_token_ids' => ['1'],
        'denom' => 'timPhone',
        'reserve' => '1'
    ];

$options = ['feeCoin' => 'testtt', 'simulate' => 'false'];

// 'options' is optional argument that equal empty array by default $options = []
$result = $transaction->nftUpdateReserves($payload, $options);
```

## Reown legacy

```php
$payload = [
    'pubKey' => '04b7a5dcb1cd9078a6e55ff2dbeb58afad5f235065d5b82ff15e18e89394cc2cf3ae2e200c897045d7fd9ae1a9029578d07419b6fc52ca6124c71ff88002f1d2cb'
];

// This function make call to backend, not to blockchain, so it's free.
$result = $transaction->reownLegacy($id,$sub_token_ids, $reserve, $denom);
```

## get NFT metadata

```php
$result = $transaction->getNftMetadata('ba3b4bbf39cfb042fad0eaec4e3496c48e1c04a6');
```

## get info about NFT

```php
$result = $transaction->getNft('49501d55a30944bf7b3b72e618c1cc564cdeaeee');
/*

common fields for all users

{
  allowMint: false
  blockId: 17187
  cover: "data:image/png;base64,iVBORw0KGgo..."
  createdAt: "2021-09-28T06:43:48.378Z"
  creator: "d01wjewzht52hfy3m0rpm8usdmfk764ca4yrwd6q8"
  description: "token"
  headline: "tok"
  id: 422
  misc: {coverHash: '307a3e7ccac8dfbd522805d980e199e5e5dc1541', coverPath: 'cSWF9hjezHlgxCPvAj4DtjpIstBnvHHo_cover_93b28.png', coverExtension: 'png'}
  nftCollection: "tok"
  nftId: "2ff8d64694c057777707739910f83f8bda53aa37"
  nftReserve: (10) [{…}, {…}, {…}, {…}, {…}, {…}, {…}, {…}, {…}, {…}]
  nonFungible: false
  owners: (3) [{…}, {…}, {…}]
  quantity: "10"
  slug: "cSWF9hjezHlgxCPvAj4DtjpIstBnvHHo"
  startReserve: "100000000000000000000"
  status: "active"
  tokenUri: "https://devnet-nft.decimalchain.com/api/nfts/cSWF9hjezHlgxCPvAj4DtjpIstBnvHHo"
  totalReserve: "1000000000000000000000"
  txHash: "33A41B8C910F7BCB03958448F9F59401EC9D3089F5CF7C621248F2CE2E168063"
  updatedAt: "2021-09-28T06:43:58.071Z
}

if user is owner of requested nft then response is

{
  asset: 'assets/JeqShgz5ySuYgrDr2f5Cz8MrKTSP2pyk_0299a.png',
  ...commonFields,
}

if user is not owner of requested nft then response is

{
  asset: null,
  ...commonFields,
}

*/
```

## get list of NFT

```php
$address = 'd01wjewzht52hfy3m0rpm8usdmfk764ca4yrwd6q8'; // address of requested user with nfts
$limit = 10;
$offset = 0;
$query = '2ff8d64694c05777770'; // nft id or nft collection to search
$result = $transaction->getNfts($address, $limit, $offset, $query);
/*

common fields for all users

{
  count: 1,
  tokens: [{
    asset: null
    isPrivate: true
    allowMint: false
    blockId: 17187
    createdAt: "2021-09-28T06:43:48.378Z"
    creator: "d01wjewzht52hfy3m0rpm8usdmfk764ca4yrwd6q8"
    description: "token"
    headline: "tok"
    id: 422
    nftCollection: "tok"
    nftId: "2ff8d64694c057777707739910f83f8bda53aa37"
    nftReserve: (10) [{…}, {…}, {…}, {…}, {…}, {…}, {…}, {…}, {…}, {…}]
    nonFungible: false
    owners: (3) [{…}, {…}, {…}]
    quantity: "10"
    slug: "cSWF9hjezHlgxCPvAj4DtjpIstBnvHHo"
    startReserve: "100000000000000000000"
    status: "active"
    tokenUri: "https://devnet-nft.decimalchain.com/api/nfts/cSWF9hjezHlgxCPvAj4DtjpIstBnvHHo"
    totalReserve: "1000000000000000000000"
    txHash: "33A41B8C910F7BCB03958448F9F59401EC9D3089F5CF7C621248F2CE2E168063"
    updatedAt: "2021-09-28T06:43:58.071Z
  }]
}

if user's address

{
  cover: "data:image/png;base64,iVBORw0KGgoAAAA...", // original cover of nft
  misc: {coverHash: '307a3e7ccac8dfbd522805d980e199e5e5dc1541', coverPath: 'cSWF9hjezHlgxCPvAj4DtjpIstBnvHHo_cover_93b28.png', coverExtension: 'png'}
  ...commonFields,
}

if not user's address

{
  // predefined data
  cover: "data:image/png;base64,FrrvfwqeyttytyT...", // a placeholder image used for common display
  misc: null,
  ...commonFields,
}

*/
```

## get address

```php
$address = 'd013ykakvugqwzqqmqdj2j2hgqauxmftdn3kqy69g'; // address of requested user, required property
$txLimit = 10; // optional property
$result = $transaction->getAddress($address, $txLimit);
/*
{
  "address": {
    "id": 31,
    "address": "d013ykakvugqwzqqmqdj2j2hgqauxmftdn3kqy69g",
    "type": "single",
    "balance": {
      "tdel": "14999120000000000000000"
    },
    "balanceNft": [
      {
        amount: "1"
        collection: "testovaya"
        // if user's address then original cover of nft
        // else a placeholder image used for common display
        cover: "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAYI
        nftId: "4a482a53b16345bb625a214b2f9c3f2968461cd0"
        nftReserve: [{...}]
        nftStake: [{...}]
      }
    ],
    "nonce": 2,
    "txes": 5,
    "createdAt": "2020-07-29T07:48:15.089Z",
    "updatedAt": "2020-07-29T08:07:36.086Z",
    "totalStake": null,
    "txs": [
      // ...
    ]
  },
  "coins": [
    // ...
  ]
}
*/
```

## get info about transaction

```php
$hash = '90EFE7E117B9C27355AB0885077E0B22C343594280ED8CBC4100D516FC228BFD'; // transaction hash
$apiRequester->getTransaction($hash);

/*
[ "ok" => true
  "result" => array:15 [
    "id" => 52510
    "hash" => "90EFE7E117B9C27355AB0885077E0B22C343594280ED8CBC4100D516FC228BFD"
    "timestamp" => "2022-02-14T07:01:01.964Z"
    "status" => "Success"
    "type" => "multi_send_coin"
    "fee" => array:4 [
      "gas_coin" => null
      "gas_used" => "1059000000000000000"
      "gas_amount" => null
      "gas_used_number" => 1059000000000000000
    ]
    "data" => array:48 [
      "log" => ""
      "nft" => array:8 [
        "nftId" => ""
        "creator" => ""
        "reserve" => ""
        "quantity" => ""
        "tokenUri" => ""
        "recipient" => ""
        "nftCollection" => ""
        "sub_token_ids" => []
      ]
      "coin" => ""
      "check" => ""
      "coins" => ""
      "proof" => ""
      "title" => ""
      "amount" => ""
      "issuer" => ""
      "owners" => ""
      "sender" => "d019uw05epj00fctthnv6y8tnayf9k8rnsqr46au3"
      "symbol" => ""
      "wallet" => ""
      "weights" => ""
      "identity" => ""
      "coin_base" => ""
      "confirmed" => null
      "due_block" => ""
      "recipient" => ""
      "threshold" => ""
      "coin_check" => ""
      "commission" => ""
      "amount_base" => ""
      "atomic_swap" => array:7 [
        "from" => ""
        "amount" => ""
        "secret" => ""
        "recipient" => ""
        "time_locked" => ""
        "hashed_secret" => ""
        "transfer_type" => ""
      ]
      "coin_to_buy" => ""
      "nonce_check" => null
      "transaction" => ""
      "amount_check" => ""
      "coin_to_sell" => ""
      "limit_volume" => ""
      "amount_to_buy" => ""
      "confirmations" => null
      "signer_weight" => null
      "swap_multiple" => array:16 [
        "r" => ""
        "s" => ""
        "v" => ""
        "from" => ""
        "amount" => ""
        "sender" => ""
        "chainTo" => ""
        "chainFrom" => ""
        "chainName" => ""
        "recipient" => ""
        "tokenName" => ""
        "chainNameTo" => ""
        "chainNumber" => ""
        "tokenSymbol" => ""
        "chainNameFrom" => ""
        "transactionNumber" => ""
      ]
      "amount_to_sell" => ""
      "initial_volume" => ""
      "reward_address" => ""
      "validator_desc" => array:5 [
        "details" => ""
        "moniker" => ""
        "website" => ""
        "identity" => ""
        "security_contact" => ""
      ]
      "completion_time" => ""
      "initial_reserve" => ""
      "softwareUpgrade" => array:4 [
        "plan" => array:3 [
          "name" => ""
          "time" => ""
          "height" => ""
        ]
        "title" => ""
        "proposer" => ""
        "description" => ""
      ]
      "submit_proposal" => array:8 [
        "vote" => ""
        "title" => ""
        "proposer" => ""
        "description" => ""
        "proposal_id" => null
        "validator_id" => ""
        "voting_end_block" => ""
        "voting_start_block" => ""
      ]
      "delegator_address" => ""
      "min_amount_to_buy" => ""
      "validator_address" => ""
      "max_amount_to_sell" => ""
      "multisend_receivers" => "[{"d017uvraxkrlvuwfwwgz7yqe0kdzv4dttze4394vq":{"amount":"182963397998034976768","coin":"tdel"}},{"d01xc0x5zemdyu29m0yufyxldm68fwqx39vy6twkk":{"amount":"231753637464179015680","coin":"tdel"}},{"d01hmk05dlv7npzmy3q7hsj7yvds8yr3ff6fa6mkr":{"amount":"48790239466142703616","coin":"tdel"}},{"d01ptj8fcf7df8nczdgwnhsszmzm5xyv6x0k2vqfq":{"amount":"176102270573110001664","coin":"tdel"}},{"d01lzs6psv3u6vzgm5qnrz49ugvtmnd4hx09c6l5d":{"amount":"176102270573110001664","coin":"tdel"}},{"d01wgrgknfdcft06e3604alec2a50d8gcm7w2kfem":{"amount":"6098779933267869696","coin":"tdel"}}]"
      "constant_reserve_ratio" => null
    ]
    "nonce" => 21
    "code" => 0
    "message" => ""
    "blockId" => 2499678
    "from" => "d019uw05epj00fctthnv6y8tnayf9k8rnsqr46au3"
    "to" => null
    "createdAt" => "2022-02-14T07:01:09.242Z"
    "updatedAt" => "2022-02-14T07:01:09.245Z"
  ]
]
*/
```

## getNftsTxes

```php
$address = 'd013ykakvugqwzqqmqdj2j2hgqauxmftdn3kqy69g'; // address of requested user with nfts, required property
$limit = 10; // optional property
$offset = 0; // optional property
$order = 'order[createdAt]=DESC'; // sort field and direction in format order[FIELD]=DIRECTION where DIRECTION in (DISC, ASC), optional property
$result = $transaction->getNftsTxes($address, $limit, $offset, $order);
/*

## getNftTxes

```php
$id= '1b2a71cfc20aabab7e9d0151b963732828e155ec'; // nft id of requested nft txes, required property
$limit = 10; // optional property
$offset = 0; // optional property
$order = 'order[createdAt]=DESC'; // sort field and direction in format order[FIELD]=DIRECTION where DIRECTION in (DISC, ASC), optional property
$result = $transaction->getNftTxes($id, $limit, $offset, $order);

/*

common fields for all users

{
  count: 1,
  txs: [{
    blockId: 648044
    code: 0
    cover: "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUQ
    createdAt: "2021-10-15T04:53:40.411Z"
    creator: "d01zenxxwspj8rnjstqyst9qvwaptq7jwwjnzul04"
    data: {log: "",…}
    description: "DAY"
    fee: {gas_coin: null, gas_used: "430000000000000000", gas_amount: null, gas_used_number: 430000000000000000}
    from: "d01wjewzht52hfy3m0rpm8usdmfk764ca4yrwd6q8"
    hash: "7F3BFBBAB54373E7E83EA7ECAF32CB1C42BC5ED4CD37AE3ECBF984D3058E8F00"
    headline: "DAY"
    id: 528
    isPrivate: false
    message: ""
    misc: {coverHash: "6c37327f0e961595787924a89944894cd62d2a83",…}
    nonce: 119
    slug: "ndFK0PT2V1VmrEvd7F9jhzZLbG3b8cfI"
    status: "active"
    timestamp: "2021-11-15T10:15:52.669Z"
    to: null
    type: "delegate_nft"
    updatedAt: "2021-10-15T04:53:48.550Z"
  }]
}

if user's nft

{
  cover: "data:image/png;base64,iVBORw0KGgoAAAA...", // original cover of nft
  misc: {coverHash: '307a3e7ccac8dfbd522805d980e199e5e5dc1541', coverPath: 'cSWF9hjezHlgxCPvAj4DtjpIstBnvHHo_cover_93b28.png', coverExtension: 'png'}
  ...commonFields,
}

if not user's nft

{
  // predefined data
  cover: "data:image/png;base64,FrrvfwqeyttytyT...", // a placeholder image used for common display
  misc: null,
  ...commonFields,
}

*/
```

## get stakes

```php
$id = 'd013ykakvugqwzqqmqdj2j2hgqauxmftdn3kqy69g';
$result = $transaction->getStakesByAddress($id);
/*
{
  "validators": [
    {
      "validatorId": "d0valoper1ajytg8jg8ypx0rj9p792x32fuxyezga4dq2uk0",
      "stakesNfts": [
        {
           "baseQuantity": "1000",
           "nftCollection": "denom1",
           "quantity": "10",
           "unbondQuantity": "10"
        }
      ],
      "totalStake": "500000000000000000000",
      "validator": {
        "address": "d0valoper1ajytg8jg8ypx0rj9p792x32fuxyezga4dq2uk0",
        "consensusAddress": "d0valcons17ntss5hyuutk5w4a4upptz3xc9f3f0tgwwmfw8",
        "rewardAddress": "d01ajytg8jg8ypx0rj9p792x32fuxyezga43jd3ry",
        "moniker": "test-node-fra1-02",
        "website": "decimalchain.com",
        "details": "Declaring validator on test-node-fra1-02",
        "identity": null,
        "security_contact": null,
        "blockId": 0,
        "skippedBlocks": 0,
        "delegators": 2,
        "fee": "0.100000000000000000",
        "slots": 2,
        "mins": "0",
        "stake": "40000500000000000000000000",
        "power": "40000500",
        "rating": null,
        "status": "online",
        "kind": "Validator",
        "createdAt": "2020-07-28T11:48:06.658Z",
        "updatedAt": "2020-07-29T12:51:33.002Z"
      }
    }
  ],
  "total": "1000"
}
*/
```

## get NFT stakes

```php
$id = 'd013ykakvugqwzqqmqdj2j2hgqauxmftdn3kqy69g'; // wallet id
$result = $transaction->getNftStakesByAddress($id);
/*
{
  "validators": [
    {
      "validatorId": "d0valoper1ajytg8jg8ypx0rj9p792x32fuxyezga4dq2uk0",
      "stakes": [
        {
          "coin": "tdel",
          "amount": "500000000000000000000",
          "baseAmount": "500000000000000000000",
          "unbondAmount": null
        }
      ],
      "totalStake": "500000000000000000000",
      "validator": {
        "address": "d0valoper1ajytg8jg8ypx0rj9p792x32fuxyezga4dq2uk0",
        "consensusAddress": "d0valcons17ntss5hyuutk5w4a4upptz3xc9f3f0tgwwmfw8",
        "rewardAddress": "d01ajytg8jg8ypx0rj9p792x32fuxyezga43jd3ry",
        "moniker": "test-node-fra1-02",
        "website": "decimalchain.com",
        "details": "Declaring validator on test-node-fra1-02",
        "identity": null,
        "security_contact": null,
        "blockId": 0,
        "skippedBlocks": 0,
        "delegators": 2,
        "fee": "0.100000000000000000",
        "slots": 2,
        "mins": "0",
        "stake": "40000500000000000000000000",
        "power": "40000500",
        "rating": null,
        "status": "online",
        "kind": "Validator",
        "createdAt": "2020-07-28T11:48:06.658Z",
        "updatedAt": "2020-07-29T12:51:33.002Z"
      }
    }
  ],
  "total": "500000000000000000000"
}
*/
```

## get coin list

```php
const LIMIT = 10;
const OFFSET = 0;
const QUERY = '';
$result = $transaction->getCoinsList(LIMIT,OFFSET,QUERY);
/*
{
  "count": 5,
  "coins": [
    {
      "symbol": "mycoin",
      "title": "MYCOIN",
      "volume": "1023454326378015905553",
      "reserve": "12609116636032889229477",
      "crr": 10,
      "limitVolume": "2000000000000000000000",
      "creator": "d01vkn4lje42gjmyghc3vneg0yqa39wfgqvh4f8zg",
      "txHash": "93AC6D86FF12BD9594889FEF4092542CBA6FEFA09F5E4A710D9E6CF12C1006A7",
      "blockId": 1529,
      "avatar": "data:image/png;base64...",
      "createdAt": "2020-07-28T14:09:38.852Z",
      "updatedAt": "2020-07-29T12:25:56.512Z"
    },
    // ...
  ]
}
*/
```

## ERC20 Token creation

```php
$payload = [
        'name' => 'testR',
        'symbol' => 'RTTA',
        'supply' => '100',
        'maxSupply' => '1000000', // Matters only if `capped` set as `true`
        'mintable' => 'true',
        'burnable' => 'true',
        'capped' => 'false'
    ];

// If executed successfully, returns tx object.
$result = $transaction->createToken($txPayload);
```

## ERC20 Token transfer

```php
$payload = [
            'recipient' => '0x8A7798E68Ebc792971510DaF1Bdc2B4538e6f0cD',
            'tokenAddress' => '0x10a8CB653ad9d7a22d334607FE301BB407d50C10',
            'amount' => 0.5
        ];

// If executed successfully, returns tx object.
$result = $transaction->transferTokens($txPayload);
```

## ERC20 Token approve

```php
$payload = [
        'spender' => '0x8A7798E68Ebc792971510DaF1Bdc2B4538e6f0cD',
        'amount' => 170,
        'tokenAddress' => '0x10a8CB653ad9d7a22d334607FE301BB407d50C10',
    ];

// If executed successfully, returns tx object.
$result = $transaction->approveTokens($txPayload);
```

## ERC20 Token transferFrom

```php
// Allowance must be greater than `amount`.
$payload = [
            'from' => '0x8A7798E68Ebc792971510DaF1Bdc2B4538e6f0cD',
            'to' => '0xC8419191Cb1A3bF4FfC022D01f857D5AFdeD01ba',
            'tokenAddress' => '0x10a8CB653ad9d7a22d334607FE301BB407d50C10',
            'amount' => 2
        ];

// If executed successfully, returns tx object.
$result = $transaction->transferTokensFrom($txPayload);
```

## ERC20 Token mint

```php
// Only if token is mintable.
$payload = [
            'recipient' => '0x8A7798E68Ebc792971510DaF1Bdc2B4538e6f0cD',
            'tokenAddress' => '0x10a8CB653ad9d7a22d334607FE301BB407d50C10',
            'amount' => 0.5
        ];

// If executed successfully, returns tx object.
$result = $transaction->mintTokens($txPayload);
```

## ERC20 Token burn

```php
// Only if token is burnable.
$payload = [
            'recipient' => '0x8A7798E68Ebc792971510DaF1Bdc2B4538e6f0cD',
            'tokenAddress' => '0x10a8CB653ad9d7a22d334607FE301BB407d50C10',
            'amount' => 0.5
        ];

// If executed successfully, returns tx object.
$result = $transaction->burnTokens($txPayload);
```

## ERC20 balanceOf

```php
$payload = [
        'account' => '0xC8419191Cb1A3bF4FfC022D01f857D5AFdeD01ba',
        'tokenAddress' => '0x10a8CB653ad9d7a22d334607FE301BB407d50C10'
    ];

// Returns token balance of given account.
$result = $transaction->balanceOfToken($txPayload);
```

## ERC20 allowance

```php
$payload = [
        'owner' => '0xC8419191Cb1A3bF4FfC022D01f857D5AFdeD01ba',
        'spender' => '0x8A7798E68Ebc792971510DaF1Bdc2B4538e6f0cD',
        'tokenAddress' => '0x10a8CB653ad9d7a22d334607FE301BB407d50C10'
    ];

// Returns allowance of given account.
$result = $transaction->allowanceOfToken($txPayload);
```

## ERC20 Token info

```php
$payload = [
        'tokenAddress' => '0x10a8CB653ad9d7a22d334607FE301BB407d50C10'
    ];

// Returns name, symbol, decimal and total supply of given ERC20 contract.
$result = $transaction->tokenInfo($txPayload);
```

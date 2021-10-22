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
return $wHelper->checkAddress('address', 'dx'); // dx || dxvaloper
```

## Get Address count

```php
$api = new ApiRequester();
$result = $api->getAddressCount();
return $result->result;
```

## Create wallet

```php
use DecimalSDK\Wallet;

// Use class Wallet to create address and key pairs
$wallet = new Wallet(/*your mnemonics*/);

echo $wallet->getAddress();
```

## Coins operations

```php
use DecimalSDK\Wallet;
use DecimalSDK\Transaction;

// Use wallet instance to init transaction
// gateUrl - mainnet/devnet
// nodeUrl - if not set using http://localhost
// rpcPort - default 26657 
// restPort - default 1317
$wallet = new Wallet();
// Enter your address node http://your-address.node/api
$transaction = new Transaction($wallet, [
    'gateUrl' => 'http://your-address.node/api',
    'useGate' => true/false,
    'createNonce' => true
]);
```

## Send coins

```php
$txPayload = [
    'to' => 'dx13ykakvugqwzqqmqdj2j2hgqauxmftdn3kqy69g', //receiver address
    'coin' => 'tDEL', //coin
    'amount' => '100', // 100 tDEL
];
$result = $transaction->sendCoins($txPayload);
```

## Sell coins

```php
$txPayload = [
    'sellCoin' => 'DEL',
    'getCoin' => 'ETH',
    'amount' => '10',
    'minBuyLimit' => '2', //Optionally
];

$result = $transaction->sellCoins($txPayload);
```

## Buy Coins

```php
$txPayload = [
    'buyCoin' => 'BTC',
    'spendCoin' => 'DEL',
    'amount' => '10',
    'maxSpendLimit' => '20', //Optionally
];

$result = $transaction->getCoins($txPayload);
```

## Sell all coins

```php
$txPayload = [
    'sellCoin' => 'BTC',
    'getCoin' => 'DEL',
    'maxSpendLimit' => '2', //Optionally
];

$result = $transaction->sellAllCoinsData($txPayload);
```

## Validator delegate

```php
$txPayload = [
    'adress' => 'dxvaloper1ajytg8jg8ypx0rj9p792x32fuxyezga4dq2uk0',
    'stake' => '10',
    'coin' => 'tdel',
];

$result = $transaction->validatorDelegate($txPayload);
```

## Validator unbound

```php
$txPayload = [
    'address' => 'dxvaloper1ajytg8jg8ypx0rj9p792x32fuxyezga4dq2uk0',
    'stake' => '10',
    'coin' => 'tdel',
];

$result = $transaction->validatorUnbound($txPayload);
```

## Validator declare

```php
$txPayload = [
    'rewardAddress' => 'dx13ykakvugqwzqqmqdj2j2hgqauxmftdn3kqy69g',
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

$result = $transaction->validatorDeclare($txPayload);
```

## Validator edit

```php
$txPayload = [
    'rewardAddress' => 'dx13ykakvugqwzqqmqdj2j2hgqauxmftdn3kqy69g',
    'moniker' => 'my-node-123-edit',
    'identity' => '321',
    'website' => 'hello.ru',
    'securityContact' => 'test@test.com',
    'details' => 'details node',
];

$result = $transaction->validatorEdit($txPayload);
```

## Disable validator

```php
$result = $transaction->disableValidator($txPayload);
```

## Enable validator

```php
$result = $transaction->enableValidator($txPayload);
```

## Create coin

```php
$txPayload = [
    'title' => 'Test coin',
    'ticker' => 'TESTTT',
    'initSupply' => '50000',
    'maxSupply' => '100000',
    'reserve' => '12000',
    'crr' => '45'
];

$result = $transaction->createCoin($txPayload);
```

## Update coin

```php
$txPayload = [
    'ticker' => 'TESTTT',
    'maxSupply' => '1000000',
    'identity'=>'e353b89e0de0a78974f9ecaf033721ac'
];

$result = $transaction->createCoin($txPayload);
```

## Multisig create

```php
$txPayload = [
    'threshold' => '2',
    'owners' => ['dx13ykakvugqwzqqmqdj2j2hgqauxmftdn3kqy69g', 'dx1v9macmluxh7rk3zsd69v7dwv9fsjhctn2jfhz9'],
    'weights' => ['1', '1'],
];

$result = $transaction->multisigCreate($txPayload);
```

## Multisig create tx

```php
$txPayload = [
    'from' => 'dx1am6ke3l79kjzdqhwgx37em04mzg686ekf9p3pq',
    'to' => 'dx13ykakvugqwzqqmqdj2j2hgqauxmftdn3kqy69g',
    'coin' => 'tdel',
    'amount' => '10',
];

$result = $transaction->multisigCreateTX($txPayload);
```

## Multisig Sign tx

```php
$txPayload = [
    'txId' => 'dxmstx1tqmjch2x5uk9wgnu8zl88rj6h4hy8rm8mtqfft',
];

$result = $transaction->multisigSignTX($txPayload);
```

## Multisend Coins

```php
$txPayload = [
    'sender'=>  $wallet->getAddress(),
    'sends'=>[
        [
            'to'=> 'dx1lh8uv55uwras3zgzpe8awq35ucxhr66pn3d97k',
           'coin'=>  'DEL',
           'amount'=> 100
        ],
        [
            'to'=> 'dx1n4hnaynrm0n56yza9959604t93hlnpvmfasw67',
            'coin'=>  'DEL',
            'amount'=> 100
        ]
    ]
];

$result = $transaction->multisigSignTX($txPayload);

```

## Proposal vote

```php
$txPayload = [
    'id' => 1,
   'decision'=> 'Yes'//Yes or No
    ];

$result = $transaction->proposalVote($txPayload);
```

## Swap init

```php
$txPayload = [
      'recipient'=> '0x45376AD024c767577714C7B92882578aE8B7f98C',
      'amount'=> '1',
      'tokenSymbol'=> 'DEL',
      'destChain'=> '2'
     ];

$result = $transaction->msgSwapInit($txPayload);
```

## Swap redeem

```php
$txPayload = [
    'from'=> '0x45376AD024c767577714C7B92882578aE8B7f98C',
    'amount'=> '1',
    'recipient'=> 'dx13ykakvugqwzqqmqdj2j2hgqauxmftdn3kqy69g',
    'tokenName'=> 'decimal',
    'transactionNumber'=> 'lksdnd-asvkla-SDCds',
    'tokenSymbol'=> 'del',
    'fromChain'=> '2',
     'v'=> 0x1c,
     'r'=> '0x0e0eb6089caa52794f7ad64a5ad7ab500b12cc7b640180e30b30b48a19c296e1',
     's'=> '0x2005adafda24593f221aec030126d989609455b2ed66969b2bb64926137f3ce3',
     ];

$result = $transaction->msgSwapRedeem($txPayload);
```

## NFT mint

```php
$txPayload = [
    'recipient'=> 'dx1lx4lvt8sjuxj8vw5dcf6knnq0pacre4w6hdh2v',
    'denom'=> 'phone',
    'token_uri'=> 'https://develop.nft.decimalchain.com/api/nfts/pepe112',
    'quantity'=> '1',
    'reserve'=> '1',
    'allow_mint'=> true
     ];
$result = $transaction->createNftMint($txPayload);
```

## NFT burn

```php
$txPayload = [
    'denom'=> 'phone',
    'id'=> 'd6ebb0c3-f075-43f2-ac60-ac0d02858154',
    'sub_token_ids'=> [1,2]
     ];
$result = $transaction->burnNft($txPayload);
```

## NFT edit metadata

```php
$txPayload = [
    'denom'=> 'phone',
    'id'=> 'd6ebb0c3-f075-43f2-ac60-ac0d02858154',
    'token_uri'=> 'uhttp://devnet.nft.decimalchain.com/api/nfts/CvavSYvudYqiGeOY67dzLmdl6NjqTdEb'
     ];
$result = $transaction->editNftMetadata($txPayload);
```

## NFT transfer

```php
$txPayload = [
    'denom'=> 'phone',
    'id'=> 'd6ebb0c3-f075-43f2-ac60-ac0d02858154',
    'sub_token_ids'=> [1,2],
    'recipient'=> 'dx1lx4lvt8sjuxj8vw5dcf6knnq0pacre4w6hdh2v'
     ];
$result = $transaction->transferNft($txPayload);
```

## NFT delegate

```php
$txPayload = [
    'denom'=> 'timPhone',
    'id'=> 'id25',
    'sub_token_ids'=> [1,2],
    'validator_address'=> 'dx1lx4lvt8sjuxj8vw5dcf6knnq0pacre4w6hdh2v'
     ];
$result = $transaction->nftDelegate($txPayload);
```

## NFT unbond

```php
$txPayload = [
    'denom'=> 'timPhone',
    'id'=> 'id25',
    'sub_token_ids'=> [1,2],
    'validator_address'=> 'dx1lx4lvt8sjuxj8vw5dcf6knnq0pacre4w6hdh2v'
     ];
$result = $transaction->nftUnbond($txPayload);
```

## NFT reserve update

```php
$txPayload = [
            'id'=> 'd6ebb0c3-f075-43f2-ac60-ac0d02858154',
            'reserve'=> '6'
        ];
        $result = $transaction->nftUpdateReserve($txPayload);
```

## get NFT metadata

```php
$result = $transaction->getNftMetadata('ba3b4bbf39cfb042fad0eaec4e3496c48e1c04a6');
```

## get NFT stakes

```php
$result = $transaction->getNftStakesByAddress('ba3b4bbf39cfb042fad0eaec4e3496c48e1c04a6');
```

## get coin list

```php
const LIMIT = 10;
const OFFSET = 0;
const QUERY = '';
$result = $transaction->getCoinsList(LIMIT,OFFSET,QUERY);
```

## Estimate tx fee

```php
$type='coin/send_coin';
$txPayload = [
    'to'=>'dx13ykakvugqwzqqmqdj2j2hgqauxmftdn3kqy69g',
    'coin'=>'del',
    'amount'=>'1'
     ];
$options=[
    'freeCoin'=> 'del',
    'message'=> 'message text',
    'gasLimit'=> '9000000000000000000',
    'mode' => 'sync'
    ];
$transaction = new Transaction($wallet);
$result = $transaction->estimateTxFee($type ,$txPayload,$options);
```

## Check required fields

```php
$result = $transaction->checkRequiredFields($data ,$txPayload);
```

# Decimal PHP SDK

For detailed explanation on how things work, checkout the:

- [Decimal SDK docs](https://help.decimalchain.com/api-sdk/).
- [Decimal Console site](https://console.decimalchain.com/).

# Install

```bash
$ composer require decimalteam/decimal-php-sdk
```

# Usage

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
$wallet = new Wallet();
$transaction = new Transaction($wallet,['createNonce'=>true]);
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

## Swap HTLT

```php
$txPayload = [
    'from'=>  'dx1gtlgwrnads2xh7uydlg6pa5htjmqgf69xjfgcf',
    'recipient'=>  '0x767315FBd4f90d05D5169E1611C0982629ff8d22',
    'secretHash'=>  'pass',
    'type'=>  'out',//out or in
    'amount'=>  '10',
    'coin'=>  'DEL',
     ];

$result = $transaction->msgSwapHTLT($txPayload);
```

## Swap redeem

```php
$txPayload = [
    'from'=>  'dx1gtlgwrnads2xh7uydlg6pa5htjmqgf69xjfgcf',
    'secretHash'=>  'pass',
     ];

$result = $transaction->msgSwapRedeem($txPayload);
```

## Swap refund

```php
$txPayload = [
    'from'=>  'dx1gtlgwrnads2xh7uydlg6pa5htjmqgf69xjfgcf',
    'secretHash'=>  'pass',
     ];
$result = $transaction->msgSwapRefund($txPayload);
```
## NTF mint
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

## NTF burn
```php
$txPayload = [
    'denom'=> 'phone',
    'id'=> 'd6ebb0c3-f075-43f2-ac60-ac0d02858154',
    'quantity'=> '1'
     ];
$result = $transaction->burnNft($txPayload);
```
## NTF edit metadata
```php
$txPayload = [
    'denom'=> 'phone',
    'id'=> 'd6ebb0c3-f075-43f2-ac60-ac0d02858154',
    'token_uri'=> 'uhttp://devnet.nft.decimalchain.com/api/nfts/CvavSYvudYqiGeOY67dzLmdl6NjqTdEb'
     ];
$result = $transaction->editNftMetadata($txPayload);
```
## NTF transfer
```php
$txPayload = [
    'denom'=> 'phone',
    'id'=> 'd6ebb0c3-f075-43f2-ac60-ac0d02858154',
    'quantity'=> '1',
    'recipient'=> 'dx1lx4lvt8sjuxj8vw5dcf6knnq0pacre4w6hdh2v'
     ];
$result = $transaction->transferNft($txPayload);
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
    'freeCoin'=>'del',
    'message'=>'message from Eugene',
    'gasLimit'=>'9000000000000000000',
    'mode'=>'sync'
    ];
$transaction = new Transaction($wallet);
$result = $transaction->estimateTxFee($type ,$txPayload,$options);
```



## Check required fields

```php
$result = $transaction->checkRequiredFields($data ,$txPayload);
```

# Decimal PHP SDK

For detailed explanation on how things work, checkout the:

- [Decimal SDK docs](https://help.decimalchain.com/api-sdk/).
- [Decimal Console site](https://console.decimalchain.com/).

# Install

```bash
$ composer require decimalteam/decimal-php-sdk
```
#Usage

Create wallet
```php
use DecimalSDK\Wallet;

// Use class Wallet to create address and key pairs
$wallet = new Wallet(/*your mnemonics*/);

echo $wallet->getAddress();
```

Coins operations

```php
use DecimalSDK\Wallet;
use DecimalSDK\Transaction;

// Use wallet instance to init transaction
$wallet = new Wallet();
$transaction = new Transaction($wallet);

// Send coins
// transaction payload
$txPayload = [
    'to' => 'dx13ykakvugqwzqqmqdj2j2hgqauxmftdn3kqy69g', //receiver address
    'coin' => 'tDEL', //coin
    'amount' => '100', // 100 tDEL
];
$result = $transaction->sendCoins($txPayload);

// Sell coins

$txPayload = [
    'sellCoin' => 'DEL',
    'getCoin' => 'ETH',
    'amount' => '10',
    'minBuyLimit' => '2', //Optionally
];

$result = $transaction->sendCoins($txPayload);

//Buy Coins

$txPayload = [
    'buyCoin' => 'BTC',
    'spendCoin' => 'DEL',
    'amount' => '10',
    'maxSpendLimit' => '20', //Optionally
];

$result = $transaction->sendCoins($txPayload);
```

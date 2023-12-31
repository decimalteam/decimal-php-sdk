### Changelog

All notable changes to this project will be documented in this file. Dates are displayed in UTC.

### [v0.14.02](https://bitbucket.org/decimalteam/decimal-php-sdk/compare/0.14.02%0D0.14.01?topic=0) - 2022-16-13
###
* Simulate fee of transactions with base coin changes and requires changes. [`PR`](https://bitbucket.org/decimalteam/decimal-php-sdk/pull-requests/74)

### [v0.14.01](https://bitbucket.org/decimalteam/decimal-php-sdk/compare/0.14.01%0D0.14?topic=0) - 2022-14-13
###
* Fixes of endpoints and web3 nodes for mainnet added. [`PR`](https://bitbucket.org/decimalteam/decimal-php-sdk/pull-requests/73)

### [v0.14](https://bitbucket.org/decimalteam/decimal-php-sdk/compare/0.14%0D0.13.01?topic=0) - 2022-14-13
###
* Update of mainnet endpoints. [`COMMIT`](https://bitbucket.org/decimalteam/decimal-php-sdk/commits/27426ef24444dbf11170b9fc3c3718744fa3d364)

### [v0.13.01](https://bitbucket.org/decimalteam/decimal-php-sdk/compare/0.13.01%0D0.13?topic=0) - 2022-12-13
###
* Reown legacy changes and readme fixes. [`PR`](https://bitbucket.org/decimalteam/decimal-php-sdk/pull-requests/71)

### [v0.13](https://bitbucket.org/decimalteam/decimal-php-sdk/compare/0.13%0Dv0.12?topic=0) - 2022-12-10
###
* Added functions to create and interact with ERC20 tokens. [`PR`](https://bitbucket.org/decimalteam/decimal-php-sdk/pull-requests/67)
* Updated protobufs files. Added option to choose broadcast mode. [`PR`](https://bitbucket.org/decimalteam/decimal-php-sdk/pull-requests/68)

### [v0.12](https://bitbucket.org/decimalteam/decimal-php-sdk/compare/v0.12%0D0.11?topic=0) - 2022-10-19
###
* Added protobufs files and redoing work with node through protobuff files [`PR`](https://bitbucket.org/decimalteam/decimal-php-sdk/pull-requests/61)

### [v0.11](https://bitbucket.org/decimalteam/decimal-php-sdk/compare/0.11..0.10.13) - 2022-06-30
#### Features
* Added transactions: in decimal api added new transaction type burn coins  [`COMMIT`](https://bitbucket.org/decimalteam/decimal-php-sdk/commits/83f68661bcbd3255e39d5a40318e0a4c2fdcb1ea)

### [v0.10.13](https://bitbucket.org/decimalteam/decimal-php-sdk/compare/0.10.13..0.10.12) - 2022-06-30
#### Features
* Support for vlucas/phpdotenv ^5 [`COMMIT`](https://bitbucket.org/decimalteam/decimal-php-sdk/commits/666d4b1bbc90acd48e34013d23b6a69339df3c33)

### [v0.10.12](https://bitbucket.org/decimalteam/decimal-php-sdk/compare/0.10.12..0.10.11) - 2022-06-01
#### Features
* Added package kornrunner/keccak  [`PR`](https://bitbucket.org/decimalteam/decimal-php-sdk/pull-requests/59)

### [v0.10.11](https://bitbucket.org/decimalteam/decimal-php-sdk/compare/0.10.11..0.10.10) - 2022-05-30
#### Features
* Added option 'mode' for Transaction sync | async | block [`COMMIT`](https://bitbucket.org/decimalteam/decimal-php-sdk/commits/40048d033c0afbb0fcaa3b323e273ffce7832d5e)
#### Fixes
* Removed timestamp parameter currentNonceValidUntil from class Wallet [`COMMIT`](https://bitbucket.org/decimalteam/decimal-php-sdk/commits/40048d033c0afbb0fcaa3b323e273ffce7832d5e)

### v0.10.10 - 2022-05-27
#### Fixes
* Set value for MAX_AUTOMATICALLY_NONCE_VALID_UNTIL = 6 seconds instead of 6000 [`COMMIT`](https://bitbucket.org/decimalteam/decimal-php-sdk/commits/769de17a5bea2768e0c2c0e475eaafc7b48d66c8)

### v0.10.08 - 2022-05-27
#### Fixes
* Edited checking response in method txResult in class ApiRequester: $jsonResp->code ? null instead of isset($jsonResp->code) [`COMMIT`](https://bitbucket.org/decimalteam/decimal-php-sdk/commits/4556d4b06058f7033c77cb9f4148db350a1de266)

### v0.10.06 - 2022-05-27
#### Fixes
* Edited method isNonceSetAutomatically in class WalletHelpers, set checking currentNonce: boolval($wallet->currentNonce) instead of $wallet->currentNonce != null [`COMMIT`](https://bitbucket.org/decimalteam/decimal-php-sdk/commits/59c02fb147829a7cfffafeecbfcbb3fa21e2b732)

### v0.10.05 - 2022-05-27
#### Fixes
* Default value for options true 'setNonceAutomatically' [`COMMIT`](https://bitbucket.org/decimalteam/decimal-php-sdk/commits/65f327cd0652989d38d2854ec37cb9b299a9684f)
* Edited checking flag in class ApiRequester if(boolval($this->wallet->currentNonce)) in method getSignMeta [`COMMIT`](https://bitbucket.org/decimalteam/decimal-php-sdk/commits/65f327cd0652989d38d2854ec37cb9b299a9684f)

### v0.10.04 - 2022-05-25
#### Features
* Created options 'setNonceAutomatically', 'nonce' for class Transaction [`COMMIT`](https://bitbucket.org/decimalteam/decimal-php-sdk/commits/604734eaaf7691fc4bf809fd2d6b1d4397f3bbb2)
* Added way to automatically set nonce within a small transaction pool [`COMMIT`](https://bitbucket.org/decimalteam/decimal-php-sdk/commits/604734eaaf7691fc4bf809fd2d6b1d4397f3bbb2)
#### Fixes
* Removed unused options from README.md [`COMMIT`](https://bitbucket.org/decimalteam/decimal-php-sdk/commits/604734eaaf7691fc4bf809fd2d6b1d4397f3bbb2)

### v0.10.03 - 2022-05-20
#### Fixes
* Method nftUpdateReserve was updated [`COMMIT`](https://bitbucket.org/decimalteam/decimal-php-sdk/commits/50fbf407bc6e003b53b76d9df074af14ad29bd1a)

### v0.10.02 - 2022-05-20
#### Features
* Created class Test for testing all sdk methods [`COMMIT`](https://bitbucket.org/decimalteam/decimal-php-sdk/commits/50121fa06f5a7d521ed0a97491d8a5965f79c1d7)
* Created test data for testing sdk in devnet and testnet [`COMMIT`](https://bitbucket.org/decimalteam/decimal-php-sdk/commits/50121fa06f5a7d521ed0a97491d8a5965f79c1d7)

### v0.9.99 - 2022-05-12
#### Fixes
* Changed url for method getAccountInfo, now using only 'auth/accounts-with-unconfirmed-nonce/$address' [`COMMIT`](https://bitbucket.org/decimalteam/decimal-php-sdk/commits/0820d8dd336e45d2d4ba177b71ef56c4131290d9)
* Removed flag 'createNonce' from Transaction option, because using one url in getAccountInfo [`COMMIT`](https://bitbucket.org/decimalteam/decimal-php-sdk/commits/0820d8dd336e45d2d4ba177b71ef56c4131290d9)

curl -XPOST -H'content-type:application/json' 'https://packagist.org/api/update-package?username=deathwing00000&apiToken=e82b3950868ac52fe624' -d'{"repository":{"url":"https://packagist.org/packages/decimalteam/decimal-php-sdk"}}'
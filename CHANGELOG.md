<a name="1.2.0"></a>

# [0.9.99](https://bitbucket.org/decimalteam/decimal-php-sdk/src/0.9.99/) (2022-05-12)
* [0820d8d](https://bitbucket.org/decimalteam/decimal-php-sdk/commits/0820d8dd336e45d2d4ba177b71ef56c4131290d9)


### Fixed

* changed url for method getAccountInfo, now using only 'auth/accounts-with-unconfirmed-nonce/$address'

### Removed

* removed flag 'createNonce' from Transaction option, because using one url in getAccountInfo

# [0.10.01](https://bitbucket.org/decimalteam/decimal-php-sdk/src/0.10.01/) (2022-05-13)
* [586939e](https://bitbucket.org/decimalteam/decimal-php-sdk/commits/586939ef2ef5562ad336ded060d5df4c3dafb8fe)


### Added

* created file CHANGELOG.md

# [0.10.02](https://bitbucket.org/decimalteam/decimal-php-sdk/src/0.10.02/) (2022-05-17)
* [50121fa](https://bitbucket.org/decimalteam/decimal-php-sdk/commits/50121fa06f5a7d521ed0a97491d8a5965f79c1d7)


### Added

* created class Test for testing all sdk methods
* created test data for testing sdk in devnet and testnet

# [0.10.03](https://bitbucket.org/decimalteam/decimal-php-sdk/src/0.10.03/) (2022-05-20)
* [50fbf40](https://bitbucket.org/decimalteam/decimal-php-sdk/commits/50fbf407bc6e003b53b76d9df074af14ad29bd1a)


### Fixed

*  method nftUpdateReserve was updated

# [0.10.04](https://bitbucket.org/decimalteam/decimal-php-sdk/src/0.10.04/) (2022-05-25)
* [604734e](https://bitbucket.org/decimalteam/decimal-php-sdk/commits/604734eaaf7691fc4bf809fd2d6b1d4397f3bbb2)


### Added

*  created options 'setNonceAutomatically', 'nonce' for class Transaction
*  added way to automatically set nonce within a small transaction pool

### Edited

*  changed responce form payload

### Removed

* removed unused options from README.md

# [0.10.05](https://bitbucket.org/decimalteam/decimal-php-sdk/src/0.10.05/) (2022-05-27)
* [65f327c](https://bitbucket.org/decimalteam/decimal-php-sdk/commits/65f327cd0652989d38d2854ec37cb9b299a9684f)


### Fixed

*  now default value for options true 'setNonceAutomatically'
*  edited checking flag in class ApiRequester if(boolval($this->wallet->currentNonce)) in method getSignMeta


# [0.10.06](https://bitbucket.org/decimalteam/decimal-php-sdk/src/0.10.06/) (2022-05-27)
* [59c02fb](https://bitbucket.org/decimalteam/decimal-php-sdk/commits/59c02fb147829a7cfffafeecbfcbb3fa21e2b732)


### Fixed

*  edited method isNonceSetAutomatically in class WalletHelpers, set checking currentNonce: boolval($wallet->currentNonce) instead of  $wallet->currentNonce != null

# [0.10.08](https://bitbucket.org/decimalteam/decimal-php-sdk/src/0.10.08/) (2022-05-27)
* [4556d4b](https://bitbucket.org/decimalteam/decimal-php-sdk/commits/4556d4b06058f7033c77cb9f4148db350a1de266)


### Fixed

*  edited checking response in method txResult in class ApiRequester: $jsonResp->code ? null instead of isset($jsonResp->code)

# [0.10.09] Error version

# [0.10.10](https://bitbucket.org/decimalteam/decimal-php-sdk/src/0.10.10/) (2022-05-27)
* [769de17](https://bitbucket.org/decimalteam/decimal-php-sdk/commits/769de17a5bea2768e0c2c0e475eaafc7b48d66c8)


### Fixed

*  set value for MAX_AUTOMATICALLY_NONCE_VALID_UNTIL = 6 seconds instead of 6000

# [0.10.11](https://bitbucket.org/decimalteam/decimal-php-sdk/src/0.10.11/) (2022-05-30)
* [40048d0](https://bitbucket.org/decimalteam/decimal-php-sdk/commits/40048d033c0afbb0fcaa3b323e273ffce7832d5e)


### Fixed

*  removed timestamp parameter currentNonceValidUntil from class Wallet 
*  added option 'mode' for Transaction sync | async | block








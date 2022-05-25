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




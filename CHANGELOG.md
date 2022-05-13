<a name="1.2.0"></a>
# [0.9.99](https://bitbucket.org/decimalteam/decimal-php-sdk/src/0.9.99/) (2022-05-12)
* [0820d8d](https://bitbucket.org/decimalteam/decimal-php-sdk/commits/0820d8dd336e45d2d4ba177b71ef56c4131290d9)


### Fixed

* changed url for method getAccountInfo, now using only 'auth/accounts-with-unconfirmed-nonce/$address'

### Removed

* removed flag 'createNonce' from Transaction option, because using one url in getAccountInfo

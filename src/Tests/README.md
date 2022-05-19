
# Start test for all methods sdk

### This functionalities is not autotests. Method runTest is for testing methods of classes Wallet and Transaction

For start test use class Test with static method runTest 

Method runTest uses testing data for devnet or testnet from file test_data.php (it depends on gateUrl).

```php
Test::runTest($wallet, [
  'gateUrl' => 'https://devnet-gate.decimalchain.com/api/',
  'useGate' => true,
  'mode' => 'sync'
  ]);
```

Testing data in file env. has to be edited according to your wallet, coin type, amount of coins and so on
You could look at example env.example
Don't forget create file .env

```dotenv
YOUR_WALLET=dx13ykakvugqwzqqmqdj2j2hgqauxmftdn3kqy69g
COIN=del
AMOUNT=1
SPEND_COIN=del
BUY_COIN=eth
MAX_SPEND_LIMIT=20
SELL_COIN=del
GET_COIN=eth
MIN_BUY_LIMIT=2
VALIDATOR_ADDRESS=dxvaloper1lx4lvt8sjuxj8vw5dcf6knnq0pacre4wx926l8
STAKE=1
```

Method names store in variable $test_data with keys wallet and transaction
You can comment some method if you don't need test it

Test response example

```php
/*
 * {
    "getAddress": "dx1lx4lvt8sjuxj8vw5dcf6knnq0pacre4w6hdh2v",
    "getPublicKey": "0325ed79a7004c1255b0d1a14c65308077cb3b89894d786f2bf1ffd8c2ce4f2968",
    "getPrivateKey": "1722974a65ab51ac71d95497edab28f8212b8881e3ac7cfc3fdcce35cf2e462d",
    "getMnemonics": "doctor transfer mystery electric any satisfy crop pill wet music legend hero success lock item dune shiver mesh badge orbit correct february rifle museum",
    "getArguments": {
        "0": "9a4093a14c469540be2d4c8d149af6a5a5677fccb2085540d368c5511318f30ee4b4d21401a6de3c3dcf50c45050ba7a94388481feddc7220e340c44171bef43",
        "privateExtendedKey": "xprvA1Kpcb9yg54ZeKNshq52eMdSRiw6c1EuEBJhdXdmYjnskxvFgAts2PZUZurZa46sRNx7onqux4Kk51qMso4DPKrNFkcD22BjXsBArtxBKhP",
        "publicExtendedKey": "xpub6EKB26gsWScrroTLorc31VaAykmb1TxkbQEJRv3P75KrdmFQDiD7aBsxRDEHo2qz5m4VEgQfSWb8ZZ17M1pb9SWyaDJkW1Efx57mXvpY6aa",
        "derivedPublicKey": "0325ed79a7004c1255b0d1a14c65308077cb3b89894d786f2bf1ffd8c2ce4f2968",
        "derivedSecretKey": "1722974a65ab51ac71d95497edab28f8212b8881e3ac7cfc3fdcce35cf2e462d",
        "address": "dx1lx4lvt8sjuxj8vw5dcf6knnq0pacre4w6hdh2v",
        "validatorAddress": "dx1lx4lvt8sjuxj8vw5dcf6knnq0pacre4w6hdh2v"
    },
    "sendCoins": {
        "ok": true,
        "result": {
            "id": 56,
            "hash": "8F8E27A0C426E3A1036C37D4F08C1E3E9F957F60F73A47D24BABB484D70E348C",
            "timestamp": "2022-05-19T07:06:15.401Z",
            "status": "Success",
            "type": "send_coin",
            "fee": {
                "gas_coin": null,
                "gas_used": "392000000000000000",
                "gas_amount": null,
                "gas_used_number": "392000000000000000"
            },
            "data": {
                "log": "",
                "nft": {
                    "nftId": "",
                    "creator": "",
                    "reserve": "",
                    "quantity": "",
                    "tokenUri": "",
                    "recipient": "",
                    "nftCollection": "",
                    "sub_token_ids": []
                },
                "coin": "del",
                "check": "",
                "coins": "",
                "proof": "",
                "title": "",
                "amount": "100000000000000000",
                "issuer": "",
                "owners": "",
                "sender": "dx1lx4lvt8sjuxj8vw5dcf6knnq0pacre4w6hdh2v",
                "symbol": "",
                "wallet": "",
                "weights": "",
                "identity": "",
                "coin_base": "",
                "confirmed": null,
                "due_block": "",
                "recipient": "",
                "threshold": "",
                "coin_check": "",
                "commission": "",
                "amount_base": "",
                "atomic_swap": {
                    "from": "",
                    "amount": "",
                    "secret": "",
                    "recipient": "",
                    "time_locked": "",
                    "hashed_secret": "",
                    "transfer_type": ""
                },
                "coin_to_buy": "",
                "nonce_check": null,
                "transaction": "",
                "amount_check": "",
                "coin_to_sell": "",
                "limit_volume": "",
                "amount_to_buy": "",
                "confirmations": null,
                "signer_weight": null,
                "swap_multiple": {
                    "r": "",
                    "s": "",
                    "v": "",
                    "from": "",
                    "amount": "",
                    "sender": "",
                    "chainTo": "",
                    "chainFrom": "",
                    "chainName": "",
                    "recipient": "",
                    "tokenName": "",
                    "chainNameTo": "",
                    "chainNumber": "",
                    "tokenSymbol": "",
                    "chainNameFrom": "",
                    "transactionNumber": ""
                },
                "amount_to_sell": "",
                "initial_volume": "",
                "reward_address": "",
                "validator_desc": {
                    "details": "",
                    "moniker": "",
                    "website": "",
                    "identity": "",
                    "security_contact": ""
                },
                "completion_time": "",
                "initial_reserve": "",
                "softwareUpgrade": {
                    "plan": {
                        "name": "",
                        "time": "",
                        "height": ""
                    },
                    "title": "",
                    "proposer": "",
                    "description": ""
                },
                "submit_proposal": {
                    "vote": "",
                    "title": "",
                    "proposer": "",
                    "description": "",
                    "proposal_id": null,
                    "validator_id": "",
                    "voting_end_block": "",
                    "voting_start_block": ""
                },
                "delegator_address": "",
                "min_amount_to_buy": "",
                "validator_address": "",
                "max_amount_to_sell": "",
                "multisend_receivers": "",
                "constant_reserve_ratio": null
            },
            "nonce": 3,
            "code": 0,
            "message": "",
            "blockId": 1673,
            "from": "dx1lx4lvt8sjuxj8vw5dcf6knnq0pacre4w6hdh2v",
            "to": "dx13ykakvugqwzqqmqdj2j2hgqauxmftdn3kqy69g",
            "createdAt": "2022-05-19T07:06:22.396Z",
            "updatedAt": "2022-05-19T07:06:22.396Z"
        }
    },
    "multisendCoins": {
        "ok": true,
        "result": {
            "id": 57,
            "hash": "D3DF5A499DE26148F199934449D9958C91B16A33FFBDDDDF34786336CC526638",
            "timestamp": "2022-05-19T07:06:15.401Z",
            "status": "Success",
            "type": "multi_send_coin",
            "fee": {
                "gas_coin": null,
                "gas_used": "509000000000000000",
                "gas_amount": null,
                "gas_used_number": "509000000000000000"
            },
            "data": {
                "log": "",
                "nft": {
                    "nftId": "",
                    "creator": "",
                    "reserve": "",
                    "quantity": "",
                    "tokenUri": "",
                    "recipient": "",
                    "nftCollection": "",
                    "sub_token_ids": []
                },
                "coin": "",
                "check": "",
                "coins": "",
                "proof": "",
                "title": "",
                "amount": "",
                "issuer": "",
                "owners": "",
                "sender": "dx1lx4lvt8sjuxj8vw5dcf6knnq0pacre4w6hdh2v",
                "symbol": "",
                "wallet": "",
                "weights": "",
                "identity": "",
                "coin_base": "",
                "confirmed": null,
                "due_block": "",
                "recipient": "",
                "threshold": "",
                "coin_check": "",
                "commission": "",
                "amount_base": "",
                "atomic_swap": {
                    "from": "",
                    "amount": "",
                    "secret": "",
                    "recipient": "",
                    "time_locked": "",
                    "hashed_secret": "",
                    "transfer_type": ""
                },
                "coin_to_buy": "",
                "nonce_check": null,
                "transaction": "",
                "amount_check": "",
                "coin_to_sell": "",
                "limit_volume": "",
                "amount_to_buy": "",
                "confirmations": null,
                "signer_weight": null,
                "swap_multiple": {
                    "r": "",
                    "s": "",
                    "v": "",
                    "from": "",
                    "amount": "",
                    "sender": "",
                    "chainTo": "",
                    "chainFrom": "",
                    "chainName": "",
                    "recipient": "",
                    "tokenName": "",
                    "chainNameTo": "",
                    "chainNumber": "",
                    "tokenSymbol": "",
                    "chainNameFrom": "",
                    "transactionNumber": ""
                },
                "amount_to_sell": "",
                "initial_volume": "",
                "reward_address": "",
                "validator_desc": {
                    "details": "",
                    "moniker": "",
                    "website": "",
                    "identity": "",
                    "security_contact": ""
                },
                "completion_time": "",
                "initial_reserve": "",
                "softwareUpgrade": {
                    "plan": {
                        "name": "",
                        "time": "",
                        "height": ""
                    },
                    "title": "",
                    "proposer": "",
                    "description": ""
                },
                "submit_proposal": {
                    "vote": "",
                    "title": "",
                    "proposer": "",
                    "description": "",
                    "proposal_id": null,
                    "validator_id": "",
                    "voting_end_block": "",
                    "voting_start_block": ""
                },
                "delegator_address": "",
                "min_amount_to_buy": "",
                "validator_address": "",
                "max_amount_to_sell": "",
                "multisend_receivers": "[{\"dx1lh8uv55uwras3zgzpe8awq35ucxhr66pn3d97k\":{\"amount\":\"1000000000000000000\",\"coin\":\"del\"}},{\"dx1n4hnaynrm0n56yza9959604t93hlnpvmfasw67\":{\"amount\":\"1000000000000000000\",\"coin\":\"del\"}}]",
                "constant_reserve_ratio": null
            },
            "nonce": 4,
            "code": 0,
            "message": "",
            "blockId": 1673,
            "from": "dx1lx4lvt8sjuxj8vw5dcf6knnq0pacre4w6hdh2v",
            "to": null,
            "createdAt": "2022-05-19T07:06:22.469Z",
            "updatedAt": "2022-05-19T07:06:22.469Z"
        }
    }
}
 * */
```

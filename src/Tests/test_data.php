<?php

$test_data = [
    'wallet' => [
        'getAddress',
        'getPublicKey',
        'getPrivateKey',
        'getMnemonics',
        'getArguments'
    ],
    'transaction' => [
        'sendCoins' => [
            'to' => $_ENV['WALLET_RECIEVER'],
            'coin' => $_ENV['COIN'],
            'amount' => $_ENV['AMOUNT']
        ],
        'getCoin' => [
            'buyCoin' => $_ENV['BUY_COIN'],
            'spendCoin' => $_ENV['SPEND_COIN'],
            'amount' => $_ENV['AMOUNT'],
            'maxSpendLimit' => $_ENV['MAX_SPEND_LIMIT']
        ],
        'sellCoin' => [
            'sellCoin' => $_ENV['SELL_COIN'],
            'getCoin' => $_ENV['GET_COIN'],
            'amount' => $_ENV['AMOUNT'],
            'minBuyLimit' => $_ENV['MIN_BUY_LIMIT'],
        ],
        'validatorDelegate' => [
            'address' => $_ENV['VALIDATOR_ADDRESS'],
            'stake' => $_ENV['STAKE'],
            'coin' => $_ENV['COIN'],
        ],
        'validatorUnbound' => [
            'address' => $_ENV['VALIDATOR_ADDRESS'],
            'stake' => $_ENV['STAKE'],
            'coin' => $_ENV['COIN'],
        ],
        'createCoin' => [
            'title' => $_ENV['TITLE_COIN'],
            'ticker' => $_ENV['TICKER_COIN'],
            'initSupply' => '100',
            'maxSupply' => '100',
            'reserve' => '1000',
            'crr' => '45'
        ],
        'updateCoin' => [
            'ticker' => $_ENV['TICKER_COIN'],
            'maxSupply' => '100',
            'identity' => 'e353b89e0de0a78974f9ecaf033721ac'
        ],
        'multisigCreate' => [
            'threshold' => '2',
            'owners' => ['dx1lx4lvt8sjuxj8vw5dcf6knnq0pacre4w6hdh2v', 'dx1v9macmluxh7rk3zsd69v7dwv9fsjhctn2jfhz9'],
            'weights' => ['1', '1']
        ],
        'multisigCreateTX' => [
            'from' => $_ENV['WALLER_SENDER'],
            'to' => $_ENV['WALLET_RECIEVER'],
            'coin' => $_ENV['COIN'],
            'amount' => $_ENV['AMOUNT'],
        ],
        'proposalVote' => [
            'id' => 1,
            'decision' => 'Yes'
        ],
        'createNftMint' => [
            'recipient' => $_ENV['WALLET_RECIEVER'],
            'denom' => $_ENV['DENOM'],
            'token_uri' => $_ENV['TOKEN_URI'],
            'quantity' => '1',
            'reserve' => '1',
            'allow_mint' => true
        ],
        'burnNft' => [
            'denom' => $_ENV['DENOM'],
            'id' => 'd365ab32a23117c2ad1c001633f89673d4790bf6',
            'sub_token_ids' => [1]
        ],
        'editNftMetadata' => [
            'denom' => $_ENV['DENOM'],
            'id' => $_ENV['NFT_ID'],
            'token_uri' => 'https://devnet-nft.decimalchain.com/api/nfts//CvavSYvudYqiGeOY67dzLmdl6NjqTdEb'
        ],
        'transferNft' => [
            'denom' => $_ENV['DENOM'],
            'id' => $_ENV['NFT_ID'],
            'sub_token_ids' => [1],
            'recipient' => 'dx1lx4lvt8sjuxj8vw5dcf6knnq0pacre4w6hdh2v'
        ],
        'nftDelegate' => [
            'denom' => $_ENV['DENOM'],
            'id' => $_ENV['NFT_ID'],
            'sub_token_ids' => [1],
            'validator_address' => 'dxvaloper1lx4lvt8sjuxj8vw5dcf6knnq0pacre4wx926l8'
        ],
        'nftUnbond' => [
            'denom' => $_ENV['DENOM'],
            'id' => $_ENV['NFT_ID'],
            'sub_token_ids' => [1],
            'validator_address' => 'dxvaloper1lx4lvt8sjuxj8vw5dcf6knnq0pacre4wx926l8'
        ],
        'nftUpdateReserve' => [
            'denom' => $_ENV['DENOM'],
            'id' => $_ENV['NFT_ID'],
            'reserve' => '2',
            'sub_token_ids' => [1],
        ],
        'multisendCoins' => [
            'sender' => $_ENV['WALLER_SENDER'],
            'sends' => [
                [
                    'to' => 'dx1lh8uv55uwras3zgzpe8awq35ucxhr66pn3d97k',
                    'coin' => $_ENV['COIN'],
                    'amount' => $_ENV['AMOUNT']
                ],
                [
                    'to' => 'dx1n4hnaynrm0n56yza9959604t93hlnpvmfasw67',
                    'coin' => $_ENV['COIN'],
                    'amount' => $_ENV['AMOUNT']
                ]
            ]

        ]
    ]
];



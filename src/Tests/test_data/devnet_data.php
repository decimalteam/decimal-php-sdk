<?php

const DEVNET_DATA = [
    'wallet' => [
        'getAddress',
        'getPublicKey',
        'getPrivateKey',
        'getMnemonics',
        'getArguments'
    ],
    'transaction' => [
        'sendCoins' => [
            'to' => 'dx13ykakvugqwzqqmqdj2j2hgqauxmftdn3kqy69g',
            'coin' => 'DEL',
            'amount' => '0.1'
        ],
        'getCoin' => [
            'buyCoin' => 'ETH',
            'spendCoin' => 'DEL',
            'amount' => '1',
            'maxSpendLimit' => '20'
        ],
        'sellCoin' => [
            'sellCoin' => 'DEL',
            'getCoin' => 'ETH',
            'amount' => '1',
            'minBuyLimit' => '2',
        ],
        'validatorDelegate' => [
            'address' => 'dxvaloper1lx4lvt8sjuxj8vw5dcf6knnq0pacre4wx926l8',
            'stake' => '1',
            'coin' => 'del',
        ],
        'validatorUnbound' => [
            'address' => 'dxvaloper1lx4lvt8sjuxj8vw5dcf6knnq0pacre4wx926l8',
            'stake' => '1',
            'coin' => 'del',
        ],
        'createCoin' => [
            'title' => 'Test coin',
            'ticker' => 'TESTCOIN1',
            'initSupply' => '100',
            'maxSupply' => '100',
            'reserve' => '1000',
            'crr' => '45'
        ],
        'updateCoin' => [
            'ticker' => 'TESTCOIN',
            'maxSupply' => '100',
            'identity' => 'e353b89e0de0a78974f9ecaf033721ac'
        ],
        'multisigCreate' => [
            'threshold' => '2',
            'owners' => ['dx1lx4lvt8sjuxj8vw5dcf6knnq0pacre4w6hdh2v', 'dx1v9macmluxh7rk3zsd69v7dwv9fsjhctn2jfhz9'],
            'weights' => ['1', '1']
        ],
        'multisigCreateTX' => [
            'from' => 'dx1lx4lvt8sjuxj8vw5dcf6knnq0pacre4w6hdh2v',
            'to' => 'dx13ykakvugqwzqqmqdj2j2hgqauxmftdn3kqy69g',
            'coin' => 'del',
            'amount' => '10',
        ],
        'proposalVote' => [
            'id' => 1,
            'decision' => 'Yes'
        ],
        'createNftMint' => [
            'recipient' => 'dx1lx4lvt8sjuxj8vw5dcf6knnq0pacre4w6hdh2v',
            'denom' => 'phone',
            'token_uri' => 'https://devnet-nft.decimalchain.com/api/nfts/',
            'quantity' => '1',
            'reserve' => '1',
            'allow_mint' => true
        ],
        'burnNft' => [
            'denom' => 'phone',
            'id' => 'd365ab32a23117c2ad1c001633f89673d4790bf6',
            'sub_token_ids' => [1]
        ],
        'editNftMetadata' => [
            'denom' => 'phone',
            'id' => 'd365ab32a23117c2ad1c001633f89673d4790bf6',
            'token_uri' => 'https://devnet-nft.decimalchain.com/api/nfts//CvavSYvudYqiGeOY67dzLmdl6NjqTdEb'
        ],
        'transferNft' => [
            'denom' => 'phone',
            'id' => 'd365ab32a23117c2ad1c001633f89673d4790bf6',
            'sub_token_ids' => [1],
            'recipient' => 'dx1lx4lvt8sjuxj8vw5dcf6knnq0pacre4w6hdh2v'
        ],
        'nftDelegate' => [
            'denom' => 'phone',
            'id' => 'd365ab32a23117c2ad1c001633f89673d4790bf6',
            'sub_token_ids' => [1],
            'validator_address' => 'dxvaloper1lx4lvt8sjuxj8vw5dcf6knnq0pacre4wx926l8'
        ],
        'nftUnbond' => [
            'denom' => 'phone',
            'id' => 'd365ab32a23117c2ad1c001633f89673d4790bf6',
            'sub_token_ids' => [1],
            'validator_address' => 'dxvaloper1lx4lvt8sjuxj8vw5dcf6knnq0pacre4wx926l8'
        ],
        'nftUpdateReserve' => [
            'denom' => 'phone',
            'id' => 'd365ab32a23117c2ad1c001633f89673d4790bf6',
            'reserve' => '2',
            'sub_token_ids' => [1],
        ],
        'multisendCoins' => [
            [
                'to'=> 'dx1lh8uv55uwras3zgzpe8awq35ucxhr66pn3d97k',
                'coin'=>  'DEL',
                'amount'=> 1
            ],
            [
                'to'=> 'dx1n4hnaynrm0n56yza9959604t93hlnpvmfasw67',
                'coin'=>  'DEL',
                'amount'=> 1
            ]
        ]
    ]
];


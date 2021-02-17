<?php


namespace DecimalSDK;

use \DecimalSDK\Errors\DecimalException;
use DecimalSDK\Utils\ApiRequester;
use DecimalSDK\Utils\Crypto\Encrypt;
use DecimalSDK\Utils\TransactionHelpers;
use DecimalSDK\Wallet;
use kornrunner\Secp256k1;
use kornrunner\Serializer\HexSignatureSerializer;
use Web3p\RLP\RLP;

class Transaction
{
    use TransactionHelpers;

    const MAX_SPEND_LIMIT = '100000000000';

    private $account;
    private $wallet;
    private $requester;
    private $nodeMeta;

    protected $unit = 0.001;
    protected $txSchemes = [
        'COIN_BUY' => [
            'fee' => 100,
            'type' => 'buy_coin',
            'scheme' => [
                'fieldTypes' => [
                    'buyCoin' => 'string',
                    'amount' => 'number',
                    'spendCoin' => 'string',
                    'maxSpendLimit' => 'number',
                ],
                'requiredFields' => [
                    'buyCoin',
                    'amount',
                    'spendCoin',
                ],
            ],
        ],
        'COIN_CREATE' => [
            'fee' => 100,
            'type' => 'coin/create_coin',
            'scheme' => [
                'fieldTypes' => [
                    'title' => 'string',
                    'ticker' => 'string',
                    'initSupply' => 'number',
                    'maxSupply' => 'number',
                    'reserve' => 'number',
                    'crr' => 'number'
                ],
                'requiredFields' => [
                    'title',
                    'ticker',
                    'initSupply',
                    'maxSupply',
                    'reserve',
                    'crr',
                ],
            ],
        ],
        'COIN_SELL' => [
            'fee' => 100,
            'type' => 'coin/sell_coin',
            'scheme' => [
                'fieldTypes' => [
                    'getCoin' => 'string',
                    'amount' => 'number',
                    'sellCoin' => 'string',
                    'minBuyLimit' => 'number',
                ],
                'requiredFields' => [
                    'getCoin',
                    'amount',
                    'sellCoin'
                ],
            ],
        ],
        'COIN_SEND' => [
            'fee' => 10,
            'type' => 'coin/send_coin',
            'scheme' => [
                'fieldTypes' => [
                    'to' => 'string',
                    'amount' => 'number',
                    'coin' => 'string',
                ],
                'requiredFields' => [
                    'to',
                    'amount',
                    'coin'
                ],
            ],
        ],
        //todo check schema multisend
        'COIN_MULTISEND' => [
            'fee' => 10,
            'type' => 'coin/multi_send_coin',
            'scheme' => [
                'fieldTypes' => [
                    'sender'=>'string',
                    'sends' => 'array',
//                    'to' => 'string',
//                    'coin' => 'string',
//                    'amount' => 'number',
                ],
                'requiredFields' => [
                    'sender',
                    'sends',
//                        'to',
//                        'amount',
//                        'coin'
                ],
            ],
        ],
        'COIN_SELL_ALL' => [
            'fee' => 100,
            'type' => 'coin/sell_all_coin',
            'scheme' => [
                'fieldTypes' => [
                    'sellCoin' => 'string',
                    'getCoin' => 'string',
                    'minBuyLimit' => 'number',
                ],
                'requiredFields' => [
                    'sellCoin',
                    'getCoin',
                ],
            ],
        ],
        'REDEEM_CHECK' => [
            'fee' => 30,
            'type' => 'coin/redeem_check',
            'scheme' => [
                'fieldTypes' => [
                    'check' => 'string',
                    'password' => 'string',
                ],
                'requiredFields' => [
                    'check',
                    'password',
                ],
            ],
        ],
        'ISSUE_CHECK' => [
            'fee' => 0,
            'type' => 'coin/issue_check',
            'scheme' => [
                'fieldTypes' => [
                    'nonce' => 'number',
                    'coin' => 'string',
                    'amount' => 'number',
                    'password' => 'string',
                    'dueBlock' => 'number',
                ],
                'requiredFields' => [
                    'nonce',
                    'coin',
                    'amount',
                    'password',
                    'dueBlock'
                ],
            ],
        ],
        'VALIDATOR_CANDIDATE' => [
            'fee' => 10000,
            'type' => 'validator/declare_candidate',
            'scheme' => [
                'fieldTypes' => [
                    'rewardAddress' => 'string',
                    'stake' => 'number',
                    'coin' => 'string',
                    'pubKey' => 'string',
                    'commission' => 'number',
                    'moniker' => 'string',
                    'identity' => 'string',
                    'website' => 'string',
                    'securityContact' => 'string',
                    'details' => 'string',
                ],
                'requiredFields' => [
                    'rewardAddress',
                    'stake',
                    'coin',
                    'pubKey',
                    'commission',
                    'moniker',
                    'identity',
                    'website',
                    'securityContact',
                    'details',
                ],
            ],
        ],
        'VALIDATOR_DELEGATE' => [
            'fee' => 200,
            'type' => 'validator/delegate',
            'scheme' => [
                'fieldTypes' => [
                    'address' => 'string',
                    'stake' => 'number',
                    'coin' => 'string',
                ],
                'requiredFields' => [
                    'address',
                    'stake',
                    'coin'
                ],
            ],
        ],
        'VALIDATOR_SET_ONLINE' => [
            'fee' => 100,
            'type' => 'validator/set_online'
        ],
        'VALIDATOR_SET_OFFLINE' => [
            'fee' => 100,
            'type' => 'validator/set_offline'
        ],
        'VALIDATOR_UNBOND' => [
            'fee' => 200,
            'type' => 'validator/unbond',
            'scheme' => [
                'fieldTypes' => [
                    'address' => 'string',
                    'stake' => 'number',
                    'coin' => 'string',
                ],
                'requiredFields' => [
                    'address',
                    'stake',
                    'coin'
                ],
            ],
        ],
        'VALIDATOR_CANDIDATE_EDIT' => [
            'fee' => 10000,
            'type' => 'validator/edit_candidate',
            'scheme' => [
                'fieldTypes' => [
                    'rewardAddress' => 'string',
                    'moniker' => 'string',
                    'identity' => 'string',
                    'website' => 'string',
                    'securityContact' => 'string',
                    'details' => 'string',
                ],
                'requiredFields' => [
                    'rewardAddress',
                    'moniker',
                    'identity',
                    'website',
                    'securityContact',
                    'details',
                ],
            ],
        ],
        'MULTISIG_CREATE_WALLET' => [
            'fee' => 100,
            'type' => 'multisig/create_wallet',
            'scheme' => [
                'fieldTypes' => [
                    'threshold' => 'string',
                    'owners' => 'array',
                    'weights' => 'array',
                ],
                'requiredFields' => [
                    'threshold',
                    'owners',
                    'weights',
                ],
            ],
        ],
        'MULTISIG_CREATE_TX' => [
            'fee' => 100,
            'type' => 'multisig/create_transaction',
            'scheme' => [
                'fieldTypes' => [
                    'from' => 'string',
                    'to' => 'string',
                    'coin' => 'string',
                    'amount' => 'number',
                ],
                'requiredFields' => [
                    'from',
                    'to',
                    'coin',
                    'amount',
                ],
            ],
        ],
        'MULTISIG_SIGN_TX' => [
            'fee' => 100,
            'type' => 'multisig/sign_transaction',
            'scheme' => [
                'fieldTypes' => [
                    'txId' => 'string',
                ],
                'requiredFields' => [
                    'txId',
                ],
            ],
        ],
        'PROPOSAL_VOTE'=>[
            'fee' => 100,
            'type' => 'cosmos-sdk/MsgVote',
            'scheme' => [
                'fieldTypes' => [
                    'id'=>'number',
                    'decision'=>'string'
                ],
                'requiredFields' => [
                    'id',
                    'decision'
                ],
            ]
        ],
        'SWAP_HTLT'=>[
            'fee' => 100,
            'type' => 'swap/msg_htlt',
            'scheme' => [
                'fieldTypes' => [
                    'type'=>'string',
                    'from'=>'string',
                    'recipient'=>'string',
                    'secretHash'=>'string',
                    'amount'=>'number',
                    'coin'=>'string'
                ],
                'requiredFields' => [
                    'type',
                    'from',
                    'recipient',
                    'secretHash',
                    'amount',
                    'coin'
                ],
            ]
        ],
        'SWAP_REDEEM'=>[
            'fee' => 100,
            'type' => 'swap/msg_redeem',
            'scheme' => [
                'fieldTypes' => [
                    'from'=>'string',
                    'secretHash'=>'string',
                ],
                'requiredFields' => [
                    'from',
                    'secretHash',
                ],
                ]
        ],
        'SWAP_REFUND'=>[
            'fee' => 100,
            'type' => 'swap/msg_refund',
            'scheme' => [
                'fieldTypes' => [
                    'from'=>'string',
                    'secretHash'=>'string',
                ],
                'requiredFields' => [
                    'from',
                    'secretHash',
                ],
            ]
        ]
    ];

    /**
     * Transaction constructor.
     * @param \DecimalSDK\Wallet $wallet
     * @param array $options
     * @throws DecimalException
     */

    public function __construct(Wallet $wallet, $options = [])
    {
        if (!$wallet) throw new DecimalException('Wrong wallet');

        $this->wallet = $wallet;
        $this->requester = new ApiRequester($options);
        $this->signMeta = $this->requester->getSignMeta($this->wallet);
    }

    /**
     * @param $payload
     * @return array
     * @throws DecimalException
     */
    public function sendCoins($payload)
    {
        $type = $this->txSchemes['COIN_SEND']['type'];
        $this->checkRequiredFields('COIN_SEND',$payload);
        $payload['fee'] = $this->txSchemes['COIN_SEND']['fee'];
        $prePayload = [
            'sender' => $this->wallet->getAddress(),
            'receiver' => $payload['to'],
            'coin' => [
                'amount' => amountUNIRecalculate($payload['amount']),
                'denom' => strtolower($payload['coin']),
            ]
        ];

        $preparedTx = $this->prepareTransaction($type,$prePayload,$payload);
        return $this->requester->sendTx($preparedTx);
    }

    /**
     * Multisend Coin Transaction
     *
     * @param $payload array
     */
    public function multisendCoins($payload)
    {
        $type = $this->txSchemes['COIN_MULTISEND']['type'];

        $this->checkRequiredFields('COIN_MULTISEND', $payload);
        $payload['fee'] = $this->txSchemes['COIN_MULTISEND']['fee'];
        $prePayload = [
            'sender' => $this->wallet->getAddress(),
            'sends' => $this->getMultiplySends($payload)
            //todo make sends from payload
        ];

        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);

        return $this->requester->sendTx($preparedTx);
    }


    /**
     * get sends array for multiply send coins
     *
     * @param $payload
     * @return array
     */
    protected function getMultiplySends($payload)
    {
        $out = [];
        foreach ($payload['sends'] as $send){
            $out[] = [
                'receiver' => $send['to'],
                'coin' => [
                    'amount' => amountUNIRecalculate($send['amount']),
                    'denom' => strtolower($send['coin']),
                ]
            ];
        }
        return $out;
    }

    /**
     * @param $payload
     * @return array
     * @throws DecimalException
     */
    public function getCoin($payload)
    {
        $maxSpendLimit = $payload['maxSpendLimit'] ?? '100000000000';
        $type = $this->txSchemes['COIN_BUY']['type'];
        $this->checkRequiredFields('COIN_BUY',$payload);
        $payload['fee'] = $this->txSchemes['COIN_BUY']['fee'];
        $prePayload = [
            'sender' => $this->wallet->getAddress(),
            'coin_to_buy' => [
                'amount' => amountUNIRecalculate($payload['amount']),
                'denom' => strtolower($payload['buyCoin']),
            ],
            'max_coin_to_sell' => [
                'amount' => amountUNIRecalculate($maxSpendLimit),
                'denom' => strtolower($payload['spendCoin']),
            ],
        ];
        $preparedTx = $this->prepareTransaction($type,$prePayload,$payload);
        return $this->requester->sendTx($preparedTx);
    }

    /**
     * @param $payload
     * @return array
     * @throws DecimalException
     */
    public function sellCoin($payload)
    {
        $minBuyLimit = $payload['minBuyLimit'] ?? '1';
        $type = $this->txSchemes['COIN_SELL']['type'];
        $this->checkRequiredFields('COIN_SELL',$payload);
        $payload['fee'] = $this->txSchemes['COIN_SELL']['fee'];
        $prePayload = [
            'sender' => $this->wallet->getAddress(),
            'coin_to_sell' => [
                'amount' => amountUNIRecalculate($payload['amount']),
                'denom' => strtolower($payload['sellCoin']),
            ],
            'min_coin_to_buy' => [
                'amount' => $minBuyLimit,
                'denom' => strtolower($payload['getCoin']),
            ],
        ];

        $preparedTx = $this->prepareTransaction($type,$prePayload,$payload);
        return $this->requester->sendTx($preparedTx);
    }

    /**
     * @param $payload
     * @return array
     * @throws DecimalException
     */
    public function sellAllCoinsData($payload)
    {
        $type = $this->txSchemes['COIN_SELL_ALL']['type'];
        $this->checkRequiredFields('COIN_SELL_ALL',$payload);
        $payload['fee'] = $this->txSchemes['COIN_SELL_ALL']['fee'];
        $prePayload = [
            'sender' => $this->wallet->getAddress(),
            'coin_to_sell' => [
                'amount' => '0',
                'denom' => strtolower($payload['sellCoin']),
            ],
            'min_coin_to_buy' => [
                'amount' => $payload['minBuyLimit'] ?? '1',
                'denom' => strtolower($payload['getCoin']),
            ],
        ];

        $preparedTx = $this->prepareTransaction($type,$prePayload,$payload);
        return $this->requester->sendTx($preparedTx);
    }
    public function validatorDelegate($payload)
    {
        $type = $this->txSchemes['VALIDATOR_DELEGATE']['type'];
        $result = $this->checkRequiredFields('VALIDATOR_DELEGATE', $payload);
        $payload['fee'] = $this->txSchemes['VALIDATOR_DELEGATE']['fee'];
        $prePayload = [
            'delegator_address' => $this->wallet->getAddress(),
            'validator_address' => $payload['address'],
            'coin' => [
                'amount' => amountUNIRecalculate($payload['stake']),
                'denom' => strtolower($payload['coin']),
            ],
        ];

        $preparedTx = $this->prepareTransaction($type, $prePayload,$payload);
        return $this->requester->sendTx($preparedTx);
    }

    public function validatorUnbound($payload)
    {
        $type = $this->txSchemes['VALIDATOR_UNBOND']['type'];
        $result = $this->checkRequiredFields('VALIDATOR_UNBOND', $payload);
        $payload['fee'] = $this->txSchemes['VALIDATOR_UNBOND']['fee'];
        $prePayload = [
            'delegator_address' => $this->wallet->getAddress(),
            'validator_address' => $payload['address'],
            'coin' => [
                'amount' => amountUNIRecalculate($payload['stake']),
                'denom' => strtolower($payload['coin']),
            ],
        ];

        $preparedTx = $this->prepareTransaction($type, $prePayload,$payload);
        return $this->requester->sendTx($preparedTx);
    }

    public function validatorDeclare($payload)
    {
        $type = $this->txSchemes['VALIDATOR_CANDIDATE']['type'];
        $result = $this->checkRequiredFields('VALIDATOR_CANDIDATE', $payload);
        $payload['fee'] = $this->txSchemes['VALIDATOR_CANDIDATE']['fee'];
        $prePayload = [
            'commission' => ($payload['commission'] / 100) . '00000000000000000',
            'validator_addr' => $this->wallet->getValidatorAddress(),
            'reward_addr' => $payload['rewardAddress'],
            'pub_key' => [
                'type' => 'tendermint/PubKeyEd25519',
                'value' => $payload['pubKey'],
            ],
            'stake' => [
                'denom' => $payload['coin'],
                'amount' => amountUNIRecalculate($payload['stake']),
            ],
            'description' => [
                'moniker' => $payload['moniker'],
                'identity' => $payload['identity'],
                'website' => $payload['website'],
                'security_contact' => $payload['securityContact'],
                'details' => $payload['details'],
            ],
        ];

        $preparedTx = $this->prepareTransaction($type, $prePayload,$payload);
        return $this->requester->sendTx($preparedTx);
    }

    public function validatorEdit($payload)
    {
        $type = $this->txSchemes['VALIDATOR_CANDIDATE_EDIT']['type'];
        $result = $this->checkRequiredFields('VALIDATOR_CANDIDATE_EDIT', $payload);
        $payload['fee'] = $this->txSchemes['VALIDATOR_CANDIDATE_EDIT']['fee'];
        $prePayload = [
            'validator_address' => $this->wallet->getValidatorAddress(),
            'reward_address' => $payload['rewardAddress'],
            'description' => [
                'moniker' => $payload['moniker'],
                'identity' => $payload['identity'],
                'website' => $payload['website'],
                'security_contact' => $payload['securityContact'],
                'details' => $payload['details'],
            ],
        ];

        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload, $payload);
        return $this->requester->sendTx($preparedTx);
    }

    public function disableValidator()
    {
        $type = $this->txSchemes['VALIDATOR_SET_OFFLINE']['type'];

        $prePayload = ['validator_address' => $this->wallet->getValidatorAddress()];
        $payload['fee'] = $this->txSchemes['VALIDATOR_SET_OFFLINE']['fee'];

        $preparedTx = $this->prepareTransaction($type, $prePayload);
        return $this->requester->sendTx($preparedTx);
    }

    public function enableValidator()
    {
        $type = $this->txSchemes['VALIDATOR_SET_ONLINE']['type'];

        $prePayload = ['validator_address' => $this->wallet->getValidatorAddress()];
        $payload['fee'] = $this->txSchemes['VALIDATOR_SET_ONLINE']['fee'];
        $preparedTx = $this->prepareTransaction($type, $prePayload);
        return $this->requester->sendTx($preparedTx);
    }

    public function createCoin($payload)
    {
        $type = $this->txSchemes['COIN_CREATE']['type'];
        $result = $this->checkRequiredFields('COIN_CREATE', $payload);
        $payload['fee'] = $this->txSchemes['COIN_CREATE']['fee'];
        $prePayload = [
            'sender' => $this->wallet->getAddress(),
            'title' => $payload['title'],
            'symbol' => $payload['ticker'],
            'constant_reserve_ratio' => $payload['crr'],
            'initial_volume' => amountUNIRecalculate($payload['initSupply']),
            'initial_reserve' => amountUNIRecalculate($payload['reserve']),
            'limit_volume' => amountUNIRecalculate($payload['maxSupply'])
        ];

        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
    }

    public function multisigCreate($payload)
    {
        $type = $this->txSchemes['MULTISIG_CREATE_WALLET']['type'];
        $result = $this->checkRequiredFields('MULTISIG_CREATE_WALLET', $payload);
        $payload['fee'] = $this->txSchemes['MULTISIG_CREATE_WALLET']['fee'];
        $prePayload = [
            'sender' => $this->wallet->getAddress(),
            'owners' => $payload['owners'],
            'weights' => $payload['weights'],
            'threshold' => $payload['threshold']
        ];

        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
    }

    public function multisigCreateTX($payload)
    {
        $type = $this->txSchemes['MULTISIG_CREATE_TX']['type'];
        $result = $this->checkRequiredFields('MULTISIG_CREATE_TX', $payload);
        $payload['fee'] = $this->txSchemes['MULTISIG_CREATE_TX']['fee'];
        $prePayload = [
            'sender' => $this->wallet->getAddress(),
            'wallet' => $payload['from'],
            'receiver' => $payload['to'],
            'coins' => [
                [
                    'denom' => strtolower($payload['coin']),
                    'amount' => amountUNIRecalculate($payload['amount']),
                ]
            ]
        ];

        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
    }
    /**
     * Issue check
     *
     * @param $payload
     * @return array
     * @throws DecimalException
     */
    public function issueCheck($payload)
    {

//        $type = $this->txSchemes['ISSUE_CHECK']['type'];
//
//        $this->checkRequiredFields('ISSUE_CHECK', $payload);
//        $payload['fee'] = $this->txSchemes['ISSUE_CHECK']['fee'];
//
//        $chainID=$this->requester->getNodeInfo()->node_info->network;
//        $coin=strtolower($payload['coin']);
//        $amount=amountUNIRecalculate($payload['amount']);
//
//        $hashPass=hash('sha256',$payload['password']);
//
//        $rlp = new RLP();
//        $checkHash = $rlp->encode(
//            $chainID,
//            $coin,
//            $amount,
//            $payload['nonce'],
//            $payload['dueBlock']
//        );
//
//        $lockObj= (new Secp256k1())->sign($checkHash,$hashPass);
//        $signature=gmp_strval($lockObj->getR(),10);
//        $signature=Encrypt::sepc256k1Sign($checkHash,$hashPass);
//
//        $recid=$lockObj->getRecoveryParam();
//        $lockSignature=mb_substr($signature,0,64);
//        $lockSignature.=$recid;
//
//        $checkLockedHash = $rlp->encode([
//            $chainID,
//            $coin,
//            $amount,
//            $payload['nonce'],
//            $payload['dueBlock'],
//            $lockSignature
//        ]);
//        $checkObj=(new Secp256k1())->sign($checkLockedHash,$this->wallet->getPrivateKey());
//        $signature1=gmp_strval($checkObj->getR(),10);
//
//        $check=$rlp->encode([
//            $chainID,
//            $coin,
//            $amount,
//            $payload['nonce'],
//            $payload['dueBlock'],
//            $lockSignature,
//            $checkObj->getRecoveryParam()+27,
//            mb_substr($signature1,0,32),
//            mb_substr($signature1,32,32)
//        ]);
//        print_r($this->bs58Encode($check));die();
//        return $check;
//        $prePayload = [
//            'nonce' => $payload['nonce'],
//            'coin' => [
//                'amount' => amountUNIRecalculate($payload['amount']),
//                'denom' => strtolower($payload['coin']),
//            ],
//            'password'=>$payload['password'],
//            'dueBlock'=>$payload['dueBlock']
//        ];
    }
    public function redeemCheck($payload)
    {
        $type = $this->txSchemes['REDEEM_CHECK']['type'];
        $result = $this->checkRequiredFields('REDEEM_CHECK', $payload);
        $payload['fee'] = $this->txSchemes['REDEEM_CHECK']['fee'];
        $proof=hash('sha256',$payload['password']);
        $prePayload = [
            'sender'=>$this->wallet->getAddress(),
            'check'=>$payload['check'],
            'proof'=>$proof
        ];
        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
    }
    public function proposalVote($payload)
    {
        $type = $this->txSchemes['PROPOSAL_VOTE']['type'];
        $result = $this->checkRequiredFields('PROPOSAL_VOTE', $payload);
        $payload['fee'] = $this->txSchemes['PROPOSAL_VOTE']['fee'];

        $prePayload = [
            'proposal_id' => $payload['id'],
            'option'=> $payload['decision'],
            'voter'=>$this->wallet->getValidatorAddress()
        ];

        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
    }
    public function msgSwapHTLT($payload)
    {
        $type = $this->txSchemes['SWAP_HTLT']['type'];
        $result = $this->checkRequiredFields('SWAP_HTLT', $payload);
        $payload['fee'] = $this->txSchemes['SWAP_HTLT']['fee'];
        if($payload['type']=='out'){
            $transfer_type=1;
        }else{
            $transfer_type=0;
        }
        $hashed_secret=hash('sha256',$payload['secretHash']);
        $prePayload = [
            'amount' => [
                [
                'amount' => amountUNIRecalculate($payload['amount']),
                'denom' => strtolower($payload['coin']),
            ]
            ],
            'transfer_type'=>$transfer_type,
            'from'=>$payload['from'],
            'recipient'=>$payload['recipient'],
            'hashed_secret'=>$hashed_secret
        ];

        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
    }
    public function msgSwapRedeem($payload)
    {
        $type = $this->txSchemes['SWAP_REDEEM']['type'];
        $result = $this->checkRequiredFields('SWAP_REDEEM', $payload);
        $payload['fee'] = $this->txSchemes['SWAP_REDEEM']['fee'];
        $hashed_secret=$this->hex($payload['secretHash']);
        $prePayload = [
            'from'=>$payload['from'],
            'secret'=>$hashed_secret
        ];
        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
    }
    public function msgSwapRefund($payload)
    {
        $type = $this->txSchemes['SWAP_REFUND']['type'];
        $result = $this->checkRequiredFields('SWAP_REFUND', $payload);
        $payload['fee'] = $this->txSchemes['SWAP_REFUND']['fee'];
        $hashed_secret=hash('sha256',$payload['secretHash']);
        $prePayload = [
            'from'=>$payload['from'],
            'hashed_secret'=>$hashed_secret
        ];
        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
    }
    public function multisigSignTX($payload)
    {
        $type = $this->txSchemes['MULTISIG_SIGN_TX']['type'];
        $result = $this->checkRequiredFields('MULTISIG_SIGN_TX', $payload);
        $payload['fee'] = $this->txSchemes['MULTISIG_SIGN_TX']['fee'];
        $prePayload = [
            'sender' => $this->wallet->getAddress(),
            'tx_id' => $payload['txId'],
        ];

        $preparedTx = $this->prepareTransaction($type, $prePayload, $payload);
        return $this->requester->sendTx($preparedTx);
    }

    private function checkRequiredFields($name, $payload)
    {
        if (!$this->txSchemes[$name] || !$this->txSchemes[$name]['scheme']) {
            throw new DecimalException('Called scheme not exists');
        }

        $scheme = $this->txSchemes[$name]['scheme'];
        $errors = $this->fieldsValidation($scheme, $payload);
        if (count($scheme['requiredFields']))
            $errors = array_merge(array_fill_keys($scheme['requiredFields'], 'field is required'), $errors);
        if (count($errors)) {
            throw new DecimalException("payload validation fails " . json_encode($errors, JSON_UNESCAPED_SLASHES));
        }

        return true;
    }
}

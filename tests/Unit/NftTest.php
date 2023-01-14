<?php

namespace Tests\Unit;

use App\Models\UserMobile;
use App\Models\UserTelegram;
use App\Porto\Task\User\GetCodeConfirmEmailTask;
use DecimalSDK\Errors\DecimalException;
use DecimalSDK\TransactionDecimal;
use DecimalSDK\Utils\WalletHelpers;
use DecimalSDK\Wallet;
use Tests\ClassData;
use Tests\TestCase;

class NftTest extends TestCase
{

    private $idNftEdit;

    public function __construct()
    {
        parent::__construct();
        $this->getFaucetCoin();
        $this->createTrx($this->addressSend);

        $characters = "CadgWIHKcOkPzn5X0Eji96F7RLiLAxPQ";
        $randomString = '';
        for ($i = 0; $i < strlen($characters); $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        $id = generateNftId(
            'headline',
            'description' ,
            dirname(__DIR__) . '/img_nft/nft_image.png',
            dirname(__DIR__) . '/img_nft/nft_image.png'
        );
        ClassData::$nftId = $id;
    }

    public function testCreateNewNft()
    {

        $payload = [
            'id'=> ClassData::$nftId,
            'denom'=> 'Testsdkup',
            'tokenUri'=> 'https://devnet-nft.decimalchain.com/api/nfts/' . $this->idNftEdit,
            'quantity'=> '4',
            'reserveDenom'=> 'del',
            'reserveAmount'=> '10',
            'allowMint'=> true,
        ];

        $result = $this->transaction->mintNft($payload);

        $this->assertEquals(0, $result->tx_response->code);

        sleep(20);

        $nftData = $this->transaction->getNftMetadata(ClassData::$nftId);

        $this->assertEquals(4, count($nftData->result->nftReserve));
    }

    public function testNftMint()
    {
        $payload = [
            'id'=> ClassData::$nftId,
            'denom'=> 'Testsdkup',
            'quantity'=> '4',
            'reserveDenom'=> 'del',
            'reserveAmount'=> '10',
        ];

        $result = $this->transaction->mintNft($payload);

        $this->assertEquals(0, $result->tx_response->code);
        sleep(20);

        $nftData = $this->transaction->getNftMetadata(ClassData::$nftId);

        $this->assertEquals(8, count($nftData->result->nftReserve));
    }

    public function testNftBurn()
    {
        $payload = [
            'id'=> ClassData::$nftId,
            'subtokenIds' => ['1', '2']
        ];

        $result = $this->transaction->burnNft($payload);

        $this->assertEquals(0, $result->tx_response->code);
        sleep(20);
    }

    public function testNftBurnError()
    {
        $this->expectException(DecimalException::class);

        $payload = [
            'id'=> ClassData::$nftId,
            'subtokenIds' => ['1', '2']
        ];

        $result = $this->transaction->burnNft($payload);
    }

}

<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/nft/v1beta1/query.proto

namespace Cosmos\Nft\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryNFTResponse is the response type for the Query/NFT RPC method
 *
 * Generated from protobuf message <code>cosmos.nft.v1beta1.QueryNFTResponse</code>
 */
class QueryNFTResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.cosmos.nft.v1beta1.NFT nft = 1 [json_name = "nft"];</code>
     */
    protected $nft = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cosmos\Nft\V1beta1\NFT $nft
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Nft\V1Beta1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.cosmos.nft.v1beta1.NFT nft = 1 [json_name = "nft"];</code>
     * @return \Cosmos\Nft\V1beta1\NFT|null
     */
    public function getNft()
    {
        return $this->nft;
    }

    public function hasNft()
    {
        return isset($this->nft);
    }

    public function clearNft()
    {
        unset($this->nft);
    }

    /**
     * Generated from protobuf field <code>.cosmos.nft.v1beta1.NFT nft = 1 [json_name = "nft"];</code>
     * @param \Cosmos\Nft\V1beta1\NFT $var
     * @return $this
     */
    public function setNft($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Nft\V1beta1\NFT::class);
        $this->nft = $var;

        return $this;
    }

}


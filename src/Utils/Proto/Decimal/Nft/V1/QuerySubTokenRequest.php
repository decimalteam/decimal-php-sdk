<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/nft/v1/query.proto

namespace Decimal\Nft\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QuerySubTokenRequest is request type for the Query/SubToken RPC method.
 *
 * Generated from protobuf message <code>decimal.nft.v1.QuerySubTokenRequest</code>
 */
class QuerySubTokenRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * token_id defines NFT token ID.
     *
     * Generated from protobuf field <code>string token_id = 1 [json_name = "tokenId"];</code>
     */
    protected $token_id = '';
    /**
     * sub_token_id defines NFT sub-token ID.
     *
     * Generated from protobuf field <code>string sub_token_id = 2 [json_name = "subTokenId"];</code>
     */
    protected $sub_token_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $token_id
     *           token_id defines NFT token ID.
     *     @type string $sub_token_id
     *           sub_token_id defines NFT sub-token ID.
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Nft\V1\GPBMetadata\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * token_id defines NFT token ID.
     *
     * Generated from protobuf field <code>string token_id = 1 [json_name = "tokenId"];</code>
     * @return string
     */
    public function getTokenId()
    {
        return $this->token_id;
    }

    /**
     * token_id defines NFT token ID.
     *
     * Generated from protobuf field <code>string token_id = 1 [json_name = "tokenId"];</code>
     * @param string $var
     * @return $this
     */
    public function setTokenId($var)
    {
        GPBUtil::checkString($var, True);
        $this->token_id = $var;

        return $this;
    }

    /**
     * sub_token_id defines NFT sub-token ID.
     *
     * Generated from protobuf field <code>string sub_token_id = 2 [json_name = "subTokenId"];</code>
     * @return string
     */
    public function getSubTokenId()
    {
        return $this->sub_token_id;
    }

    /**
     * sub_token_id defines NFT sub-token ID.
     *
     * Generated from protobuf field <code>string sub_token_id = 2 [json_name = "subTokenId"];</code>
     * @param string $var
     * @return $this
     */
    public function setSubTokenId($var)
    {
        GPBUtil::checkString($var, True);
        $this->sub_token_id = $var;

        return $this;
    }

}

<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/nft/v1/query.proto

namespace Decimal\Nft\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryTokenResponse is response type for the Query/Token RPC method.
 * NOTE: Response contains info about NFT collection and full info about the NFT token with containing NFT sub-tokens.
 *
 * Generated from protobuf message <code>decimal.nft.v1.QueryTokenResponse</code>
 */
class QueryTokenResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * token contains the queried NFT token.
     *
     * Generated from protobuf field <code>.decimal.nft.v1.Token token = 1 [json_name = "token", (.gogoproto.nullable) = false];</code>
     */
    protected $token = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Decimal\Nft\V1\Token $token
     *           token contains the queried NFT token.
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Nft\V1\GPBMetadata\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * token contains the queried NFT token.
     *
     * Generated from protobuf field <code>.decimal.nft.v1.Token token = 1 [json_name = "token", (.gogoproto.nullable) = false];</code>
     * @return \Decimal\Nft\V1\Token|null
     */
    public function getToken()
    {
        return $this->token;
    }

    public function hasToken()
    {
        return isset($this->token);
    }

    public function clearToken()
    {
        unset($this->token);
    }

    /**
     * token contains the queried NFT token.
     *
     * Generated from protobuf field <code>.decimal.nft.v1.Token token = 1 [json_name = "token", (.gogoproto.nullable) = false];</code>
     * @param \Decimal\Nft\V1\Token $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkMessage($var, \Decimal\Nft\V1\Token::class);
        $this->token = $var;

        return $this;
    }

}


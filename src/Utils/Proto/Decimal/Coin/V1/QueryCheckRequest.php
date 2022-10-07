<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/coin/v1/query.proto

namespace Decimal\Coin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryCheckRequest is request type for the Query/Check RPC method.
 *
 * Generated from protobuf message <code>decimal.coin.v1.QueryCheckRequest</code>
 */
class QueryCheckRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes hash = 1 [json_name = "hash"];</code>
     */
    protected $hash = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $hash
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Decimal\Coin\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes hash = 1 [json_name = "hash"];</code>
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Generated from protobuf field <code>bytes hash = 1 [json_name = "hash"];</code>
     * @param string $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->hash = $var;

        return $this;
    }

}


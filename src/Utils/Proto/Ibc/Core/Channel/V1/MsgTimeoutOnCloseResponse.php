<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/core/channel/v1/tx.proto

namespace Ibc\Core\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MsgTimeoutOnCloseResponse defines the Msg/TimeoutOnClose response type.
 *
 * Generated from protobuf message <code>ibc.core.channel.v1.MsgTimeoutOnCloseResponse</code>
 */
class MsgTimeoutOnCloseResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ibc.core.channel.v1.ResponseResultType result = 1 [json_name = "result"];</code>
     */
    protected $result = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $result
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Core\Channel\V1\Tx::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ibc.core.channel.v1.ResponseResultType result = 1 [json_name = "result"];</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.ibc.core.channel.v1.ResponseResultType result = 1 [json_name = "result"];</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \Ibc\Core\Channel\V1\ResponseResultType::class);
        $this->result = $var;

        return $this;
    }

}


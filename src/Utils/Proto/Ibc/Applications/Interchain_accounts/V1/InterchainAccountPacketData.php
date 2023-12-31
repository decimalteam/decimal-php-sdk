<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/applications/interchain_accounts/v1/packet.proto

namespace Ibc\Applications\Interchain_accounts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * InterchainAccountPacketData is comprised of a raw transaction, type of transaction and optional memo field.
 *
 * Generated from protobuf message <code>ibc.applications.interchain_accounts.v1.InterchainAccountPacketData</code>
 */
class InterchainAccountPacketData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ibc.applications.interchain_accounts.v1.Type type = 1 [json_name = "type"];</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>bytes data = 2 [json_name = "data"];</code>
     */
    protected $data = '';
    /**
     * Generated from protobuf field <code>string memo = 3 [json_name = "memo"];</code>
     */
    protected $memo = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *     @type string $data
     *     @type string $memo
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Applications\InterchainAccounts\V1\Packet::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ibc.applications.interchain_accounts.v1.Type type = 1 [json_name = "type"];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.ibc.applications.interchain_accounts.v1.Type type = 1 [json_name = "type"];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Ibc\Applications\Interchain_accounts\V1\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes data = 2 [json_name = "data"];</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>bytes data = 2 [json_name = "data"];</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string memo = 3 [json_name = "memo"];</code>
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Generated from protobuf field <code>string memo = 3 [json_name = "memo"];</code>
     * @param string $var
     * @return $this
     */
    public function setMemo($var)
    {
        GPBUtil::checkString($var, True);
        $this->memo = $var;

        return $this;
    }

}


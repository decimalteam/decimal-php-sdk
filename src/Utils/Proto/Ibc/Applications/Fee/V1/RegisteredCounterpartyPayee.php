<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/applications/fee/v1/genesis.proto

namespace Ibc\Applications\Fee\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * RegisteredCounterpartyPayee contains the relayer address and counterparty payee address for a specific channel (used
 * for recv fee distribution)
 *
 * Generated from protobuf message <code>ibc.applications.fee.v1.RegisteredCounterpartyPayee</code>
 */
class RegisteredCounterpartyPayee extends \Google\Protobuf\Internal\Message
{
    /**
     * unique channel identifier
     *
     * Generated from protobuf field <code>string channel_id = 1 [json_name = "channelId", (.gogoproto.moretags) = "yaml:\"channel_id\""];</code>
     */
    protected $channel_id = '';
    /**
     * the relayer address
     *
     * Generated from protobuf field <code>string relayer = 2 [json_name = "relayer"];</code>
     */
    protected $relayer = '';
    /**
     * the counterparty payee address
     *
     * Generated from protobuf field <code>string counterparty_payee = 3 [json_name = "counterpartyPayee", (.gogoproto.moretags) = "yaml:\"counterparty_payee\""];</code>
     */
    protected $counterparty_payee = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $channel_id
     *           unique channel identifier
     *     @type string $relayer
     *           the relayer address
     *     @type string $counterparty_payee
     *           the counterparty payee address
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Applications\Fee\V1\Genesis::initOnce();
        parent::__construct($data);
    }

    /**
     * unique channel identifier
     *
     * Generated from protobuf field <code>string channel_id = 1 [json_name = "channelId", (.gogoproto.moretags) = "yaml:\"channel_id\""];</code>
     * @return string
     */
    public function getChannelId()
    {
        return $this->channel_id;
    }

    /**
     * unique channel identifier
     *
     * Generated from protobuf field <code>string channel_id = 1 [json_name = "channelId", (.gogoproto.moretags) = "yaml:\"channel_id\""];</code>
     * @param string $var
     * @return $this
     */
    public function setChannelId($var)
    {
        GPBUtil::checkString($var, True);
        $this->channel_id = $var;

        return $this;
    }

    /**
     * the relayer address
     *
     * Generated from protobuf field <code>string relayer = 2 [json_name = "relayer"];</code>
     * @return string
     */
    public function getRelayer()
    {
        return $this->relayer;
    }

    /**
     * the relayer address
     *
     * Generated from protobuf field <code>string relayer = 2 [json_name = "relayer"];</code>
     * @param string $var
     * @return $this
     */
    public function setRelayer($var)
    {
        GPBUtil::checkString($var, True);
        $this->relayer = $var;

        return $this;
    }

    /**
     * the counterparty payee address
     *
     * Generated from protobuf field <code>string counterparty_payee = 3 [json_name = "counterpartyPayee", (.gogoproto.moretags) = "yaml:\"counterparty_payee\""];</code>
     * @return string
     */
    public function getCounterpartyPayee()
    {
        return $this->counterparty_payee;
    }

    /**
     * the counterparty payee address
     *
     * Generated from protobuf field <code>string counterparty_payee = 3 [json_name = "counterpartyPayee", (.gogoproto.moretags) = "yaml:\"counterparty_payee\""];</code>
     * @param string $var
     * @return $this
     */
    public function setCounterpartyPayee($var)
    {
        GPBUtil::checkString($var, True);
        $this->counterparty_payee = $var;

        return $this;
    }

}


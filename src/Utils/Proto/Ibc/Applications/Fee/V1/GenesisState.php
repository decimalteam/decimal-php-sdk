<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/applications/fee/v1/genesis.proto

namespace Ibc\Applications\Fee\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GenesisState defines the ICS29 fee middleware genesis state
 *
 * Generated from protobuf message <code>ibc.applications.fee.v1.GenesisState</code>
 */
class GenesisState extends \Google\Protobuf\Internal\Message
{
    /**
     * list of identified packet fees
     *
     * Generated from protobuf field <code>repeated .ibc.applications.fee.v1.IdentifiedPacketFees identified_fees = 1 [json_name = "identifiedFees", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"identified_fees\""];</code>
     */
    private $identified_fees;
    /**
     * list of fee enabled channels
     *
     * Generated from protobuf field <code>repeated .ibc.applications.fee.v1.FeeEnabledChannel fee_enabled_channels = 2 [json_name = "feeEnabledChannels", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"fee_enabled_channels\""];</code>
     */
    private $fee_enabled_channels;
    /**
     * list of registered payees
     *
     * Generated from protobuf field <code>repeated .ibc.applications.fee.v1.RegisteredPayee registered_payees = 3 [json_name = "registeredPayees", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"registered_payees\""];</code>
     */
    private $registered_payees;
    /**
     * list of registered counterparty payees
     *
     * Generated from protobuf field <code>repeated .ibc.applications.fee.v1.RegisteredCounterpartyPayee registered_counterparty_payees = 4 [json_name = "registeredCounterpartyPayees", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"registered_counterparty_payees\""];</code>
     */
    private $registered_counterparty_payees;
    /**
     * list of forward relayer addresses
     *
     * Generated from protobuf field <code>repeated .ibc.applications.fee.v1.ForwardRelayerAddress forward_relayers = 5 [json_name = "forwardRelayers", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"forward_relayers\""];</code>
     */
    private $forward_relayers;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ibc\Applications\Fee\V1\IdentifiedPacketFees[]|\Google\Protobuf\Internal\RepeatedField $identified_fees
     *           list of identified packet fees
     *     @type \Ibc\Applications\Fee\V1\FeeEnabledChannel[]|\Google\Protobuf\Internal\RepeatedField $fee_enabled_channels
     *           list of fee enabled channels
     *     @type \Ibc\Applications\Fee\V1\RegisteredPayee[]|\Google\Protobuf\Internal\RepeatedField $registered_payees
     *           list of registered payees
     *     @type \Ibc\Applications\Fee\V1\RegisteredCounterpartyPayee[]|\Google\Protobuf\Internal\RepeatedField $registered_counterparty_payees
     *           list of registered counterparty payees
     *     @type \Ibc\Applications\Fee\V1\ForwardRelayerAddress[]|\Google\Protobuf\Internal\RepeatedField $forward_relayers
     *           list of forward relayer addresses
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Applications\Fee\V1\Genesis::initOnce();
        parent::__construct($data);
    }

    /**
     * list of identified packet fees
     *
     * Generated from protobuf field <code>repeated .ibc.applications.fee.v1.IdentifiedPacketFees identified_fees = 1 [json_name = "identifiedFees", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"identified_fees\""];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIdentifiedFees()
    {
        return $this->identified_fees;
    }

    /**
     * list of identified packet fees
     *
     * Generated from protobuf field <code>repeated .ibc.applications.fee.v1.IdentifiedPacketFees identified_fees = 1 [json_name = "identifiedFees", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"identified_fees\""];</code>
     * @param \Ibc\Applications\Fee\V1\IdentifiedPacketFees[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIdentifiedFees($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ibc\Applications\Fee\V1\IdentifiedPacketFees::class);
        $this->identified_fees = $arr;

        return $this;
    }

    /**
     * list of fee enabled channels
     *
     * Generated from protobuf field <code>repeated .ibc.applications.fee.v1.FeeEnabledChannel fee_enabled_channels = 2 [json_name = "feeEnabledChannels", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"fee_enabled_channels\""];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFeeEnabledChannels()
    {
        return $this->fee_enabled_channels;
    }

    /**
     * list of fee enabled channels
     *
     * Generated from protobuf field <code>repeated .ibc.applications.fee.v1.FeeEnabledChannel fee_enabled_channels = 2 [json_name = "feeEnabledChannels", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"fee_enabled_channels\""];</code>
     * @param \Ibc\Applications\Fee\V1\FeeEnabledChannel[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFeeEnabledChannels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ibc\Applications\Fee\V1\FeeEnabledChannel::class);
        $this->fee_enabled_channels = $arr;

        return $this;
    }

    /**
     * list of registered payees
     *
     * Generated from protobuf field <code>repeated .ibc.applications.fee.v1.RegisteredPayee registered_payees = 3 [json_name = "registeredPayees", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"registered_payees\""];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRegisteredPayees()
    {
        return $this->registered_payees;
    }

    /**
     * list of registered payees
     *
     * Generated from protobuf field <code>repeated .ibc.applications.fee.v1.RegisteredPayee registered_payees = 3 [json_name = "registeredPayees", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"registered_payees\""];</code>
     * @param \Ibc\Applications\Fee\V1\RegisteredPayee[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRegisteredPayees($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ibc\Applications\Fee\V1\RegisteredPayee::class);
        $this->registered_payees = $arr;

        return $this;
    }

    /**
     * list of registered counterparty payees
     *
     * Generated from protobuf field <code>repeated .ibc.applications.fee.v1.RegisteredCounterpartyPayee registered_counterparty_payees = 4 [json_name = "registeredCounterpartyPayees", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"registered_counterparty_payees\""];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRegisteredCounterpartyPayees()
    {
        return $this->registered_counterparty_payees;
    }

    /**
     * list of registered counterparty payees
     *
     * Generated from protobuf field <code>repeated .ibc.applications.fee.v1.RegisteredCounterpartyPayee registered_counterparty_payees = 4 [json_name = "registeredCounterpartyPayees", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"registered_counterparty_payees\""];</code>
     * @param \Ibc\Applications\Fee\V1\RegisteredCounterpartyPayee[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRegisteredCounterpartyPayees($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ibc\Applications\Fee\V1\RegisteredCounterpartyPayee::class);
        $this->registered_counterparty_payees = $arr;

        return $this;
    }

    /**
     * list of forward relayer addresses
     *
     * Generated from protobuf field <code>repeated .ibc.applications.fee.v1.ForwardRelayerAddress forward_relayers = 5 [json_name = "forwardRelayers", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"forward_relayers\""];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getForwardRelayers()
    {
        return $this->forward_relayers;
    }

    /**
     * list of forward relayer addresses
     *
     * Generated from protobuf field <code>repeated .ibc.applications.fee.v1.ForwardRelayerAddress forward_relayers = 5 [json_name = "forwardRelayers", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"forward_relayers\""];</code>
     * @param \Ibc\Applications\Fee\V1\ForwardRelayerAddress[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setForwardRelayers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ibc\Applications\Fee\V1\ForwardRelayerAddress::class);
        $this->forward_relayers = $arr;

        return $this;
    }

}


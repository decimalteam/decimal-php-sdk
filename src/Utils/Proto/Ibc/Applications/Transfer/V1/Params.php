<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/applications/transfer/v1/transfer.proto

namespace Ibc\Applications\Transfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Params defines the set of IBC transfer parameters.
 * NOTE: To prevent a single token from being transferred, set the
 * TransfersEnabled parameter to true and then set the bank module's SendEnabled
 * parameter for the denomination to false.
 *
 * Generated from protobuf message <code>ibc.applications.transfer.v1.Params</code>
 */
class Params extends \Google\Protobuf\Internal\Message
{
    /**
     * send_enabled enables or disables all cross-chain token transfers from this
     * chain.
     *
     * Generated from protobuf field <code>bool send_enabled = 1 [json_name = "sendEnabled", (.gogoproto.moretags) = "yaml:\"send_enabled\""];</code>
     */
    protected $send_enabled = false;
    /**
     * receive_enabled enables or disables all cross-chain token transfers to this
     * chain.
     *
     * Generated from protobuf field <code>bool receive_enabled = 2 [json_name = "receiveEnabled", (.gogoproto.moretags) = "yaml:\"receive_enabled\""];</code>
     */
    protected $receive_enabled = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $send_enabled
     *           send_enabled enables or disables all cross-chain token transfers from this
     *           chain.
     *     @type bool $receive_enabled
     *           receive_enabled enables or disables all cross-chain token transfers to this
     *           chain.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Applications\Transfer\V1\Transfer::initOnce();
        parent::__construct($data);
    }

    /**
     * send_enabled enables or disables all cross-chain token transfers from this
     * chain.
     *
     * Generated from protobuf field <code>bool send_enabled = 1 [json_name = "sendEnabled", (.gogoproto.moretags) = "yaml:\"send_enabled\""];</code>
     * @return bool
     */
    public function getSendEnabled()
    {
        return $this->send_enabled;
    }

    /**
     * send_enabled enables or disables all cross-chain token transfers from this
     * chain.
     *
     * Generated from protobuf field <code>bool send_enabled = 1 [json_name = "sendEnabled", (.gogoproto.moretags) = "yaml:\"send_enabled\""];</code>
     * @param bool $var
     * @return $this
     */
    public function setSendEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->send_enabled = $var;

        return $this;
    }

    /**
     * receive_enabled enables or disables all cross-chain token transfers to this
     * chain.
     *
     * Generated from protobuf field <code>bool receive_enabled = 2 [json_name = "receiveEnabled", (.gogoproto.moretags) = "yaml:\"receive_enabled\""];</code>
     * @return bool
     */
    public function getReceiveEnabled()
    {
        return $this->receive_enabled;
    }

    /**
     * receive_enabled enables or disables all cross-chain token transfers to this
     * chain.
     *
     * Generated from protobuf field <code>bool receive_enabled = 2 [json_name = "receiveEnabled", (.gogoproto.moretags) = "yaml:\"receive_enabled\""];</code>
     * @param bool $var
     * @return $this
     */
    public function setReceiveEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->receive_enabled = $var;

        return $this;
    }

}


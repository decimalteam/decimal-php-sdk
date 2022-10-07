<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/core/client/v1/query.proto

namespace Ibc\Core\Client\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryUpgradedConsensusStateResponse is the response type for the
 * Query/UpgradedConsensusState RPC method.
 *
 * Generated from protobuf message <code>ibc.core.client.v1.QueryUpgradedConsensusStateResponse</code>
 */
class QueryUpgradedConsensusStateResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Consensus state associated with the request identifier
     *
     * Generated from protobuf field <code>.google.protobuf.Any upgraded_consensus_state = 1 [json_name = "upgradedConsensusState"];</code>
     */
    protected $upgraded_consensus_state = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Any $upgraded_consensus_state
     *           Consensus state associated with the request identifier
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Core\Client\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Consensus state associated with the request identifier
     *
     * Generated from protobuf field <code>.google.protobuf.Any upgraded_consensus_state = 1 [json_name = "upgradedConsensusState"];</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getUpgradedConsensusState()
    {
        return $this->upgraded_consensus_state;
    }

    public function hasUpgradedConsensusState()
    {
        return isset($this->upgraded_consensus_state);
    }

    public function clearUpgradedConsensusState()
    {
        unset($this->upgraded_consensus_state);
    }

    /**
     * Consensus state associated with the request identifier
     *
     * Generated from protobuf field <code>.google.protobuf.Any upgraded_consensus_state = 1 [json_name = "upgradedConsensusState"];</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setUpgradedConsensusState($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->upgraded_consensus_state = $var;

        return $this;
    }

}


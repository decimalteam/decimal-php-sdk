<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/upgrade/v1beta1/query.proto

namespace Cosmos\Upgrade\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryUpgradedConsensusStateResponse is the response type for the Query/UpgradedConsensusState
 * RPC method.
 *
 * Generated from protobuf message <code>cosmos.upgrade.v1beta1.QueryUpgradedConsensusStateResponse</code>
 */
class QueryUpgradedConsensusStateResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Since: cosmos-sdk 0.43
     *
     * Generated from protobuf field <code>bytes upgraded_consensus_state = 2 [json_name = "upgradedConsensusState"];</code>
     */
    protected $upgraded_consensus_state = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $upgraded_consensus_state
     *           Since: cosmos-sdk 0.43
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Upgrade\V1Beta1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Since: cosmos-sdk 0.43
     *
     * Generated from protobuf field <code>bytes upgraded_consensus_state = 2 [json_name = "upgradedConsensusState"];</code>
     * @return string
     */
    public function getUpgradedConsensusState()
    {
        return $this->upgraded_consensus_state;
    }

    /**
     * Since: cosmos-sdk 0.43
     *
     * Generated from protobuf field <code>bytes upgraded_consensus_state = 2 [json_name = "upgradedConsensusState"];</code>
     * @param string $var
     * @return $this
     */
    public function setUpgradedConsensusState($var)
    {
        GPBUtil::checkString($var, False);
        $this->upgraded_consensus_state = $var;

        return $this;
    }

}


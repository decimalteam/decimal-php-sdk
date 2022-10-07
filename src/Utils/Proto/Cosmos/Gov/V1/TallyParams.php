<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/gov/v1/gov.proto

namespace Cosmos\Gov\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * TallyParams defines the params for tallying votes on governance proposals.
 *
 * Generated from protobuf message <code>cosmos.gov.v1.TallyParams</code>
 */
class TallyParams extends \Google\Protobuf\Internal\Message
{
    /**
     *  Minimum percentage of total stake needed to vote for a result to be
     *  considered valid.
     *
     * Generated from protobuf field <code>string quorum = 1 [json_name = "quorum", (.gogoproto.jsontag) = "quorum,omitempty", (.cosmos_proto.scalar) = "cosmos.Dec"];</code>
     */
    protected $quorum = '';
    /**
     *  Minimum proportion of Yes votes for proposal to pass. Default value: 0.5.
     *
     * Generated from protobuf field <code>string threshold = 2 [json_name = "threshold", (.gogoproto.jsontag) = "threshold,omitempty", (.cosmos_proto.scalar) = "cosmos.Dec"];</code>
     */
    protected $threshold = '';
    /**
     *  Minimum value of Veto votes to Total votes ratio for proposal to be
     *  vetoed. Default value: 1/3.
     *
     * Generated from protobuf field <code>string veto_threshold = 3 [json_name = "vetoThreshold", (.gogoproto.jsontag) = "veto_threshold,omitempty", (.cosmos_proto.scalar) = "cosmos.Dec"];</code>
     */
    protected $veto_threshold = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $quorum
     *            Minimum percentage of total stake needed to vote for a result to be
     *            considered valid.
     *     @type string $threshold
     *            Minimum proportion of Yes votes for proposal to pass. Default value: 0.5.
     *     @type string $veto_threshold
     *            Minimum value of Veto votes to Total votes ratio for proposal to be
     *            vetoed. Default value: 1/3.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Gov\V1\Gov::initOnce();
        parent::__construct($data);
    }

    /**
     *  Minimum percentage of total stake needed to vote for a result to be
     *  considered valid.
     *
     * Generated from protobuf field <code>string quorum = 1 [json_name = "quorum", (.gogoproto.jsontag) = "quorum,omitempty", (.cosmos_proto.scalar) = "cosmos.Dec"];</code>
     * @return string
     */
    public function getQuorum()
    {
        return $this->quorum;
    }

    /**
     *  Minimum percentage of total stake needed to vote for a result to be
     *  considered valid.
     *
     * Generated from protobuf field <code>string quorum = 1 [json_name = "quorum", (.gogoproto.jsontag) = "quorum,omitempty", (.cosmos_proto.scalar) = "cosmos.Dec"];</code>
     * @param string $var
     * @return $this
     */
    public function setQuorum($var)
    {
        GPBUtil::checkString($var, True);
        $this->quorum = $var;

        return $this;
    }

    /**
     *  Minimum proportion of Yes votes for proposal to pass. Default value: 0.5.
     *
     * Generated from protobuf field <code>string threshold = 2 [json_name = "threshold", (.gogoproto.jsontag) = "threshold,omitempty", (.cosmos_proto.scalar) = "cosmos.Dec"];</code>
     * @return string
     */
    public function getThreshold()
    {
        return $this->threshold;
    }

    /**
     *  Minimum proportion of Yes votes for proposal to pass. Default value: 0.5.
     *
     * Generated from protobuf field <code>string threshold = 2 [json_name = "threshold", (.gogoproto.jsontag) = "threshold,omitempty", (.cosmos_proto.scalar) = "cosmos.Dec"];</code>
     * @param string $var
     * @return $this
     */
    public function setThreshold($var)
    {
        GPBUtil::checkString($var, True);
        $this->threshold = $var;

        return $this;
    }

    /**
     *  Minimum value of Veto votes to Total votes ratio for proposal to be
     *  vetoed. Default value: 1/3.
     *
     * Generated from protobuf field <code>string veto_threshold = 3 [json_name = "vetoThreshold", (.gogoproto.jsontag) = "veto_threshold,omitempty", (.cosmos_proto.scalar) = "cosmos.Dec"];</code>
     * @return string
     */
    public function getVetoThreshold()
    {
        return $this->veto_threshold;
    }

    /**
     *  Minimum value of Veto votes to Total votes ratio for proposal to be
     *  vetoed. Default value: 1/3.
     *
     * Generated from protobuf field <code>string veto_threshold = 3 [json_name = "vetoThreshold", (.gogoproto.jsontag) = "veto_threshold,omitempty", (.cosmos_proto.scalar) = "cosmos.Dec"];</code>
     * @param string $var
     * @return $this
     */
    public function setVetoThreshold($var)
    {
        GPBUtil::checkString($var, True);
        $this->veto_threshold = $var;

        return $this;
    }

}


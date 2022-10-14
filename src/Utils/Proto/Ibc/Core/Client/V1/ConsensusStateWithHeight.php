<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/core/client/v1/client.proto

namespace Ibc\Core\Client\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ConsensusStateWithHeight defines a consensus state with an additional height
 * field.
 *
 * Generated from protobuf message <code>ibc.core.client.v1.ConsensusStateWithHeight</code>
 */
class ConsensusStateWithHeight extends \Google\Protobuf\Internal\Message
{
    /**
     * consensus state height
     *
     * Generated from protobuf field <code>.ibc.core.client.v1.Height height = 1 [json_name = "height", (.gogoproto.nullable) = false];</code>
     */
    protected $height = null;
    /**
     * consensus state
     *
     * Generated from protobuf field <code>.google.protobuf.Any consensus_state = 2 [json_name = "consensusState", (.gogoproto.moretags) = "yaml:\"consensus_state\""];</code>
     */
    protected $consensus_state = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ibc\Core\Client\V1\Height $height
     *           consensus state height
     *     @type \Google\Protobuf\Any $consensus_state
     *           consensus state
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Core\Client\V1\Client::initOnce();
        parent::__construct($data);
    }

    /**
     * consensus state height
     *
     * Generated from protobuf field <code>.ibc.core.client.v1.Height height = 1 [json_name = "height", (.gogoproto.nullable) = false];</code>
     * @return \Ibc\Core\Client\V1\Height|null
     */
    public function getHeight()
    {
        return $this->height;
    }

    public function hasHeight()
    {
        return isset($this->height);
    }

    public function clearHeight()
    {
        unset($this->height);
    }

    /**
     * consensus state height
     *
     * Generated from protobuf field <code>.ibc.core.client.v1.Height height = 1 [json_name = "height", (.gogoproto.nullable) = false];</code>
     * @param \Ibc\Core\Client\V1\Height $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkMessage($var, \Ibc\Core\Client\V1\Height::class);
        $this->height = $var;

        return $this;
    }

    /**
     * consensus state
     *
     * Generated from protobuf field <code>.google.protobuf.Any consensus_state = 2 [json_name = "consensusState", (.gogoproto.moretags) = "yaml:\"consensus_state\""];</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getConsensusState()
    {
        return $this->consensus_state;
    }

    public function hasConsensusState()
    {
        return isset($this->consensus_state);
    }

    public function clearConsensusState()
    {
        unset($this->consensus_state);
    }

    /**
     * consensus state
     *
     * Generated from protobuf field <code>.google.protobuf.Any consensus_state = 2 [json_name = "consensusState", (.gogoproto.moretags) = "yaml:\"consensus_state\""];</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setConsensusState($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->consensus_state = $var;

        return $this;
    }

}

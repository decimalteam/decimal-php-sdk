<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/core/connection/v1/query.proto

namespace Ibc\Core\Connection\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryConnectionConsensusStateResponse is the response type for the
 * Query/ConnectionConsensusState RPC method
 *
 * Generated from protobuf message <code>ibc.core.connection.v1.QueryConnectionConsensusStateResponse</code>
 */
class QueryConnectionConsensusStateResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * consensus state associated with the channel
     *
     * Generated from protobuf field <code>.google.protobuf.Any consensus_state = 1 [json_name = "consensusState"];</code>
     */
    protected $consensus_state = null;
    /**
     * client ID associated with the consensus state
     *
     * Generated from protobuf field <code>string client_id = 2 [json_name = "clientId"];</code>
     */
    protected $client_id = '';
    /**
     * merkle proof of existence
     *
     * Generated from protobuf field <code>bytes proof = 3 [json_name = "proof"];</code>
     */
    protected $proof = '';
    /**
     * height at which the proof was retrieved
     *
     * Generated from protobuf field <code>.ibc.core.client.v1.Height proof_height = 4 [json_name = "proofHeight", (.gogoproto.nullable) = false];</code>
     */
    protected $proof_height = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Any $consensus_state
     *           consensus state associated with the channel
     *     @type string $client_id
     *           client ID associated with the consensus state
     *     @type string $proof
     *           merkle proof of existence
     *     @type \Ibc\Core\Client\V1\Height $proof_height
     *           height at which the proof was retrieved
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Core\Connection\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * consensus state associated with the channel
     *
     * Generated from protobuf field <code>.google.protobuf.Any consensus_state = 1 [json_name = "consensusState"];</code>
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
     * consensus state associated with the channel
     *
     * Generated from protobuf field <code>.google.protobuf.Any consensus_state = 1 [json_name = "consensusState"];</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setConsensusState($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->consensus_state = $var;

        return $this;
    }

    /**
     * client ID associated with the consensus state
     *
     * Generated from protobuf field <code>string client_id = 2 [json_name = "clientId"];</code>
     * @return string
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * client ID associated with the consensus state
     *
     * Generated from protobuf field <code>string client_id = 2 [json_name = "clientId"];</code>
     * @param string $var
     * @return $this
     */
    public function setClientId($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_id = $var;

        return $this;
    }

    /**
     * merkle proof of existence
     *
     * Generated from protobuf field <code>bytes proof = 3 [json_name = "proof"];</code>
     * @return string
     */
    public function getProof()
    {
        return $this->proof;
    }

    /**
     * merkle proof of existence
     *
     * Generated from protobuf field <code>bytes proof = 3 [json_name = "proof"];</code>
     * @param string $var
     * @return $this
     */
    public function setProof($var)
    {
        GPBUtil::checkString($var, False);
        $this->proof = $var;

        return $this;
    }

    /**
     * height at which the proof was retrieved
     *
     * Generated from protobuf field <code>.ibc.core.client.v1.Height proof_height = 4 [json_name = "proofHeight", (.gogoproto.nullable) = false];</code>
     * @return \Ibc\Core\Client\V1\Height|null
     */
    public function getProofHeight()
    {
        return $this->proof_height;
    }

    public function hasProofHeight()
    {
        return isset($this->proof_height);
    }

    public function clearProofHeight()
    {
        unset($this->proof_height);
    }

    /**
     * height at which the proof was retrieved
     *
     * Generated from protobuf field <code>.ibc.core.client.v1.Height proof_height = 4 [json_name = "proofHeight", (.gogoproto.nullable) = false];</code>
     * @param \Ibc\Core\Client\V1\Height $var
     * @return $this
     */
    public function setProofHeight($var)
    {
        GPBUtil::checkMessage($var, \Ibc\Core\Client\V1\Height::class);
        $this->proof_height = $var;

        return $this;
    }

}


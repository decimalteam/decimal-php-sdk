<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/core/channel/v1/query.proto

namespace Ibc\Core\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryPacketAcknowledgementResponse defines the client query response for a
 * packet which also includes a proof and the height from which the
 * proof was retrieved
 *
 * Generated from protobuf message <code>ibc.core.channel.v1.QueryPacketAcknowledgementResponse</code>
 */
class QueryPacketAcknowledgementResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * packet associated with the request fields
     *
     * Generated from protobuf field <code>bytes acknowledgement = 1 [json_name = "acknowledgement"];</code>
     */
    protected $acknowledgement = '';
    /**
     * merkle proof of existence
     *
     * Generated from protobuf field <code>bytes proof = 2 [json_name = "proof"];</code>
     */
    protected $proof = '';
    /**
     * height at which the proof was retrieved
     *
     * Generated from protobuf field <code>.ibc.core.client.v1.Height proof_height = 3 [json_name = "proofHeight", (.gogoproto.nullable) = false];</code>
     */
    protected $proof_height = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $acknowledgement
     *           packet associated with the request fields
     *     @type string $proof
     *           merkle proof of existence
     *     @type \Ibc\Core\Client\V1\Height $proof_height
     *           height at which the proof was retrieved
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Core\Channel\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * packet associated with the request fields
     *
     * Generated from protobuf field <code>bytes acknowledgement = 1 [json_name = "acknowledgement"];</code>
     * @return string
     */
    public function getAcknowledgement()
    {
        return $this->acknowledgement;
    }

    /**
     * packet associated with the request fields
     *
     * Generated from protobuf field <code>bytes acknowledgement = 1 [json_name = "acknowledgement"];</code>
     * @param string $var
     * @return $this
     */
    public function setAcknowledgement($var)
    {
        GPBUtil::checkString($var, False);
        $this->acknowledgement = $var;

        return $this;
    }

    /**
     * merkle proof of existence
     *
     * Generated from protobuf field <code>bytes proof = 2 [json_name = "proof"];</code>
     * @return string
     */
    public function getProof()
    {
        return $this->proof;
    }

    /**
     * merkle proof of existence
     *
     * Generated from protobuf field <code>bytes proof = 2 [json_name = "proof"];</code>
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
     * Generated from protobuf field <code>.ibc.core.client.v1.Height proof_height = 3 [json_name = "proofHeight", (.gogoproto.nullable) = false];</code>
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
     * Generated from protobuf field <code>.ibc.core.client.v1.Height proof_height = 3 [json_name = "proofHeight", (.gogoproto.nullable) = false];</code>
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


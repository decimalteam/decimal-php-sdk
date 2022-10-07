<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/core/channel/v1/query.proto

namespace Ibc\Core\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryChannelResponse is the response type for the Query/Channel RPC method.
 * Besides the Channel end, it includes a proof and the height from which the
 * proof was retrieved.
 *
 * Generated from protobuf message <code>ibc.core.channel.v1.QueryChannelResponse</code>
 */
class QueryChannelResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * channel associated with the request identifiers
     *
     * Generated from protobuf field <code>.ibc.core.channel.v1.Channel channel = 1 [json_name = "channel"];</code>
     */
    protected $channel = null;
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
     *     @type \Ibc\Core\Channel\V1\Channel $channel
     *           channel associated with the request identifiers
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
     * channel associated with the request identifiers
     *
     * Generated from protobuf field <code>.ibc.core.channel.v1.Channel channel = 1 [json_name = "channel"];</code>
     * @return \Ibc\Core\Channel\V1\Channel|null
     */
    public function getChannel()
    {
        return $this->channel;
    }

    public function hasChannel()
    {
        return isset($this->channel);
    }

    public function clearChannel()
    {
        unset($this->channel);
    }

    /**
     * channel associated with the request identifiers
     *
     * Generated from protobuf field <code>.ibc.core.channel.v1.Channel channel = 1 [json_name = "channel"];</code>
     * @param \Ibc\Core\Channel\V1\Channel $var
     * @return $this
     */
    public function setChannel($var)
    {
        GPBUtil::checkMessage($var, \Ibc\Core\Channel\V1\Channel::class);
        $this->channel = $var;

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


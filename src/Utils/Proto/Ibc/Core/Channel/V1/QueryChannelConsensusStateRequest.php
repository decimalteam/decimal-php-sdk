<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/core/channel/v1/query.proto

namespace Ibc\Core\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryChannelConsensusStateRequest is the request type for the
 * Query/ConsensusState RPC method
 *
 * Generated from protobuf message <code>ibc.core.channel.v1.QueryChannelConsensusStateRequest</code>
 */
class QueryChannelConsensusStateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * port unique identifier
     *
     * Generated from protobuf field <code>string port_id = 1 [json_name = "portId"];</code>
     */
    protected $port_id = '';
    /**
     * channel unique identifier
     *
     * Generated from protobuf field <code>string channel_id = 2 [json_name = "channelId"];</code>
     */
    protected $channel_id = '';
    /**
     * revision number of the consensus state
     *
     * Generated from protobuf field <code>uint64 revision_number = 3 [json_name = "revisionNumber"];</code>
     */
    protected $revision_number = 0;
    /**
     * revision height of the consensus state
     *
     * Generated from protobuf field <code>uint64 revision_height = 4 [json_name = "revisionHeight"];</code>
     */
    protected $revision_height = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $port_id
     *           port unique identifier
     *     @type string $channel_id
     *           channel unique identifier
     *     @type int|string $revision_number
     *           revision number of the consensus state
     *     @type int|string $revision_height
     *           revision height of the consensus state
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Core\Channel\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * port unique identifier
     *
     * Generated from protobuf field <code>string port_id = 1 [json_name = "portId"];</code>
     * @return string
     */
    public function getPortId()
    {
        return $this->port_id;
    }

    /**
     * port unique identifier
     *
     * Generated from protobuf field <code>string port_id = 1 [json_name = "portId"];</code>
     * @param string $var
     * @return $this
     */
    public function setPortId($var)
    {
        GPBUtil::checkString($var, True);
        $this->port_id = $var;

        return $this;
    }

    /**
     * channel unique identifier
     *
     * Generated from protobuf field <code>string channel_id = 2 [json_name = "channelId"];</code>
     * @return string
     */
    public function getChannelId()
    {
        return $this->channel_id;
    }

    /**
     * channel unique identifier
     *
     * Generated from protobuf field <code>string channel_id = 2 [json_name = "channelId"];</code>
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
     * revision number of the consensus state
     *
     * Generated from protobuf field <code>uint64 revision_number = 3 [json_name = "revisionNumber"];</code>
     * @return int|string
     */
    public function getRevisionNumber()
    {
        return $this->revision_number;
    }

    /**
     * revision number of the consensus state
     *
     * Generated from protobuf field <code>uint64 revision_number = 3 [json_name = "revisionNumber"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setRevisionNumber($var)
    {
        GPBUtil::checkUint64($var);
        $this->revision_number = $var;

        return $this;
    }

    /**
     * revision height of the consensus state
     *
     * Generated from protobuf field <code>uint64 revision_height = 4 [json_name = "revisionHeight"];</code>
     * @return int|string
     */
    public function getRevisionHeight()
    {
        return $this->revision_height;
    }

    /**
     * revision height of the consensus state
     *
     * Generated from protobuf field <code>uint64 revision_height = 4 [json_name = "revisionHeight"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setRevisionHeight($var)
    {
        GPBUtil::checkUint64($var);
        $this->revision_height = $var;

        return $this;
    }

}

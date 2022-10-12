<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/core/client/v1/client.proto

namespace Ibc\Core\Client\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Height is a monotonically increasing data type
 * that can be compared against another Height for the purposes of updating and
 * freezing clients
 * Normally the RevisionHeight is incremented at each height while keeping
 * RevisionNumber the same. However some consensus algorithms may choose to
 * reset the height in certain conditions e.g. hard forks, state-machine
 * breaking changes In these cases, the RevisionNumber is incremented so that
 * height continues to be monitonically increasing even as the RevisionHeight
 * gets reset
 *
 * Generated from protobuf message <code>ibc.core.client.v1.Height</code>
 */
class Height extends \Google\Protobuf\Internal\Message
{
    /**
     * the revision that the client is currently on
     *
     * Generated from protobuf field <code>uint64 revision_number = 1 [json_name = "revisionNumber", (.gogoproto.moretags) = "yaml:\"revision_number\""];</code>
     */
    protected $revision_number = 0;
    /**
     * the height within the given revision
     *
     * Generated from protobuf field <code>uint64 revision_height = 2 [json_name = "revisionHeight", (.gogoproto.moretags) = "yaml:\"revision_height\""];</code>
     */
    protected $revision_height = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $revision_number
     *           the revision that the client is currently on
     *     @type int|string $revision_height
     *           the height within the given revision
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Core\Client\V1\Client::initOnce();
        parent::__construct($data);
    }

    /**
     * the revision that the client is currently on
     *
     * Generated from protobuf field <code>uint64 revision_number = 1 [json_name = "revisionNumber", (.gogoproto.moretags) = "yaml:\"revision_number\""];</code>
     * @return int|string
     */
    public function getRevisionNumber()
    {
        return $this->revision_number;
    }

    /**
     * the revision that the client is currently on
     *
     * Generated from protobuf field <code>uint64 revision_number = 1 [json_name = "revisionNumber", (.gogoproto.moretags) = "yaml:\"revision_number\""];</code>
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
     * the height within the given revision
     *
     * Generated from protobuf field <code>uint64 revision_height = 2 [json_name = "revisionHeight", (.gogoproto.moretags) = "yaml:\"revision_height\""];</code>
     * @return int|string
     */
    public function getRevisionHeight()
    {
        return $this->revision_height;
    }

    /**
     * the height within the given revision
     *
     * Generated from protobuf field <code>uint64 revision_height = 2 [json_name = "revisionHeight", (.gogoproto.moretags) = "yaml:\"revision_height\""];</code>
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


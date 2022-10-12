<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/lightclients/solomachine/v2/solomachine.proto

namespace Ibc\Lightclients\Solomachine\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * NextSequenceRecvData returns the SignBytes data for verification of the next
 * sequence to be received.
 *
 * Generated from protobuf message <code>ibc.lightclients.solomachine.v2.NextSequenceRecvData</code>
 */
class NextSequenceRecvData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes path = 1 [json_name = "path"];</code>
     */
    protected $path = '';
    /**
     * Generated from protobuf field <code>uint64 next_seq_recv = 2 [json_name = "nextSeqRecv", (.gogoproto.moretags) = "yaml:\"next_seq_recv\""];</code>
     */
    protected $next_seq_recv = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $path
     *     @type int|string $next_seq_recv
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Lightclients\Solomachine\V2\Solomachine::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes path = 1 [json_name = "path"];</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Generated from protobuf field <code>bytes path = 1 [json_name = "path"];</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, False);
        $this->path = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 next_seq_recv = 2 [json_name = "nextSeqRecv", (.gogoproto.moretags) = "yaml:\"next_seq_recv\""];</code>
     * @return int|string
     */
    public function getNextSeqRecv()
    {
        return $this->next_seq_recv;
    }

    /**
     * Generated from protobuf field <code>uint64 next_seq_recv = 2 [json_name = "nextSeqRecv", (.gogoproto.moretags) = "yaml:\"next_seq_recv\""];</code>
     * @param int|string $var
     * @return $this
     */
    public function setNextSeqRecv($var)
    {
        GPBUtil::checkUint64($var);
        $this->next_seq_recv = $var;

        return $this;
    }

}


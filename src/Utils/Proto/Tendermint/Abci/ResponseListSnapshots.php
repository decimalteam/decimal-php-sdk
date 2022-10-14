<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/abci/types.proto

namespace Tendermint\Abci;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tendermint.abci.ResponseListSnapshots</code>
 */
class ResponseListSnapshots extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .tendermint.abci.Snapshot snapshots = 1 [json_name = "snapshots"];</code>
     */
    private $snapshots;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Tendermint\Abci\Snapshot>|\Google\Protobuf\Internal\RepeatedField $snapshots
     * }
     */
    public function __construct($data = NULL) {
        \Tendermint\Abci\GPBMetadata\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .tendermint.abci.Snapshot snapshots = 1 [json_name = "snapshots"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSnapshots()
    {
        return $this->snapshots;
    }

    /**
     * Generated from protobuf field <code>repeated .tendermint.abci.Snapshot snapshots = 1 [json_name = "snapshots"];</code>
     * @param array<\Tendermint\Abci\Snapshot>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSnapshots($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tendermint\Abci\Snapshot::class);
        $this->snapshots = $arr;

        return $this;
    }

}

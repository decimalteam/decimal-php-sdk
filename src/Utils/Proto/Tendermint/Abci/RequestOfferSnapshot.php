<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/abci/types.proto

namespace Tendermint\Abci;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * offers a snapshot to the application
 *
 * Generated from protobuf message <code>tendermint.abci.RequestOfferSnapshot</code>
 */
class RequestOfferSnapshot extends \Google\Protobuf\Internal\Message
{
    /**
     * snapshot offered by peers
     *
     * Generated from protobuf field <code>.tendermint.abci.Snapshot snapshot = 1 [json_name = "snapshot"];</code>
     */
    protected $snapshot = null;
    /**
     * light client-verified app hash for snapshot height
     *
     * Generated from protobuf field <code>bytes app_hash = 2 [json_name = "appHash"];</code>
     */
    protected $app_hash = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tendermint\Abci\Snapshot $snapshot
     *           snapshot offered by peers
     *     @type string $app_hash
     *           light client-verified app hash for snapshot height
     * }
     */
    public function __construct($data = NULL) {
        \Tendermint\Abci\GPBMetadata\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * snapshot offered by peers
     *
     * Generated from protobuf field <code>.tendermint.abci.Snapshot snapshot = 1 [json_name = "snapshot"];</code>
     * @return \Tendermint\Abci\Snapshot|null
     */
    public function getSnapshot()
    {
        return $this->snapshot;
    }

    public function hasSnapshot()
    {
        return isset($this->snapshot);
    }

    public function clearSnapshot()
    {
        unset($this->snapshot);
    }

    /**
     * snapshot offered by peers
     *
     * Generated from protobuf field <code>.tendermint.abci.Snapshot snapshot = 1 [json_name = "snapshot"];</code>
     * @param \Tendermint\Abci\Snapshot $var
     * @return $this
     */
    public function setSnapshot($var)
    {
        GPBUtil::checkMessage($var, \Tendermint\Abci\Snapshot::class);
        $this->snapshot = $var;

        return $this;
    }

    /**
     * light client-verified app hash for snapshot height
     *
     * Generated from protobuf field <code>bytes app_hash = 2 [json_name = "appHash"];</code>
     * @return string
     */
    public function getAppHash()
    {
        return $this->app_hash;
    }

    /**
     * light client-verified app hash for snapshot height
     *
     * Generated from protobuf field <code>bytes app_hash = 2 [json_name = "appHash"];</code>
     * @param string $var
     * @return $this
     */
    public function setAppHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->app_hash = $var;

        return $this;
    }

}


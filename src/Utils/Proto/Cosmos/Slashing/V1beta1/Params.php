<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/slashing/v1beta1/slashing.proto

namespace Cosmos\Slashing\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Params represents the parameters used for by the slashing module.
 *
 * Generated from protobuf message <code>cosmos.slashing.v1beta1.Params</code>
 */
class Params extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 signed_blocks_window = 1 [json_name = "signedBlocksWindow", (.gogoproto.moretags) = "yaml:\"signed_blocks_window\""];</code>
     */
    protected $signed_blocks_window = 0;
    /**
     * Generated from protobuf field <code>bytes min_signed_per_window = 2 [json_name = "minSignedPerWindow", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Dec", (.gogoproto.moretags) = "yaml:\"min_signed_per_window\""];</code>
     */
    protected $min_signed_per_window = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Duration downtime_jail_duration = 3 [json_name = "downtimeJailDuration", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"downtime_jail_duration\"", (.gogoproto.stdduration) = true];</code>
     */
    protected $downtime_jail_duration = null;
    /**
     * Generated from protobuf field <code>bytes slash_fraction_double_sign = 4 [json_name = "slashFractionDoubleSign", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Dec", (.gogoproto.moretags) = "yaml:\"slash_fraction_double_sign\""];</code>
     */
    protected $slash_fraction_double_sign = '';
    /**
     * Generated from protobuf field <code>bytes slash_fraction_downtime = 5 [json_name = "slashFractionDowntime", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Dec", (.gogoproto.moretags) = "yaml:\"slash_fraction_downtime\""];</code>
     */
    protected $slash_fraction_downtime = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $signed_blocks_window
     *     @type string $min_signed_per_window
     *     @type \Google\Protobuf\Duration $downtime_jail_duration
     *     @type string $slash_fraction_double_sign
     *     @type string $slash_fraction_downtime
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Slashing\V1beta1\GPBMetadata\Slashing::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 signed_blocks_window = 1 [json_name = "signedBlocksWindow", (.gogoproto.moretags) = "yaml:\"signed_blocks_window\""];</code>
     * @return int|string
     */
    public function getSignedBlocksWindow()
    {
        return $this->signed_blocks_window;
    }

    /**
     * Generated from protobuf field <code>int64 signed_blocks_window = 1 [json_name = "signedBlocksWindow", (.gogoproto.moretags) = "yaml:\"signed_blocks_window\""];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSignedBlocksWindow($var)
    {
        GPBUtil::checkInt64($var);
        $this->signed_blocks_window = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes min_signed_per_window = 2 [json_name = "minSignedPerWindow", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Dec", (.gogoproto.moretags) = "yaml:\"min_signed_per_window\""];</code>
     * @return string
     */
    public function getMinSignedPerWindow()
    {
        return $this->min_signed_per_window;
    }

    /**
     * Generated from protobuf field <code>bytes min_signed_per_window = 2 [json_name = "minSignedPerWindow", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Dec", (.gogoproto.moretags) = "yaml:\"min_signed_per_window\""];</code>
     * @param string $var
     * @return $this
     */
    public function setMinSignedPerWindow($var)
    {
        GPBUtil::checkString($var, False);
        $this->min_signed_per_window = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration downtime_jail_duration = 3 [json_name = "downtimeJailDuration", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"downtime_jail_duration\"", (.gogoproto.stdduration) = true];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getDowntimeJailDuration()
    {
        return $this->downtime_jail_duration;
    }

    public function hasDowntimeJailDuration()
    {
        return isset($this->downtime_jail_duration);
    }

    public function clearDowntimeJailDuration()
    {
        unset($this->downtime_jail_duration);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration downtime_jail_duration = 3 [json_name = "downtimeJailDuration", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"downtime_jail_duration\"", (.gogoproto.stdduration) = true];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setDowntimeJailDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->downtime_jail_duration = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes slash_fraction_double_sign = 4 [json_name = "slashFractionDoubleSign", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Dec", (.gogoproto.moretags) = "yaml:\"slash_fraction_double_sign\""];</code>
     * @return string
     */
    public function getSlashFractionDoubleSign()
    {
        return $this->slash_fraction_double_sign;
    }

    /**
     * Generated from protobuf field <code>bytes slash_fraction_double_sign = 4 [json_name = "slashFractionDoubleSign", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Dec", (.gogoproto.moretags) = "yaml:\"slash_fraction_double_sign\""];</code>
     * @param string $var
     * @return $this
     */
    public function setSlashFractionDoubleSign($var)
    {
        GPBUtil::checkString($var, False);
        $this->slash_fraction_double_sign = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes slash_fraction_downtime = 5 [json_name = "slashFractionDowntime", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Dec", (.gogoproto.moretags) = "yaml:\"slash_fraction_downtime\""];</code>
     * @return string
     */
    public function getSlashFractionDowntime()
    {
        return $this->slash_fraction_downtime;
    }

    /**
     * Generated from protobuf field <code>bytes slash_fraction_downtime = 5 [json_name = "slashFractionDowntime", (.gogoproto.nullable) = false, (.gogoproto.customtype) = "github.com/cosmos/cosmos-sdk/types.Dec", (.gogoproto.moretags) = "yaml:\"slash_fraction_downtime\""];</code>
     * @param string $var
     * @return $this
     */
    public function setSlashFractionDowntime($var)
    {
        GPBUtil::checkString($var, False);
        $this->slash_fraction_downtime = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/core/channel/v1/channel.proto

namespace Ibc\Core\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Channel defines pipeline for exactly-once packet delivery between specific
 * modules on separate blockchains, which has at least one end capable of
 * sending packets and one end capable of receiving packets.
 *
 * Generated from protobuf message <code>ibc.core.channel.v1.Channel</code>
 */
class Channel extends \Google\Protobuf\Internal\Message
{
    /**
     * current state of the channel end
     *
     * Generated from protobuf field <code>.ibc.core.channel.v1.State state = 1 [json_name = "state"];</code>
     */
    protected $state = 0;
    /**
     * whether the channel is ordered or unordered
     *
     * Generated from protobuf field <code>.ibc.core.channel.v1.Order ordering = 2 [json_name = "ordering"];</code>
     */
    protected $ordering = 0;
    /**
     * counterparty channel end
     *
     * Generated from protobuf field <code>.ibc.core.channel.v1.Counterparty counterparty = 3 [json_name = "counterparty", (.gogoproto.nullable) = false];</code>
     */
    protected $counterparty = null;
    /**
     * list of connection identifiers, in order, along which packets sent on
     * this channel will travel
     *
     * Generated from protobuf field <code>repeated string connection_hops = 4 [json_name = "connectionHops", (.gogoproto.moretags) = "yaml:\"connection_hops\""];</code>
     */
    private $connection_hops;
    /**
     * opaque channel version, which is agreed upon during the handshake
     *
     * Generated from protobuf field <code>string version = 5 [json_name = "version"];</code>
     */
    protected $version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $state
     *           current state of the channel end
     *     @type int $ordering
     *           whether the channel is ordered or unordered
     *     @type \Ibc\Core\Channel\V1\Counterparty $counterparty
     *           counterparty channel end
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $connection_hops
     *           list of connection identifiers, in order, along which packets sent on
     *           this channel will travel
     *     @type string $version
     *           opaque channel version, which is agreed upon during the handshake
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Core\Channel\V1\Channel::initOnce();
        parent::__construct($data);
    }

    /**
     * current state of the channel end
     *
     * Generated from protobuf field <code>.ibc.core.channel.v1.State state = 1 [json_name = "state"];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * current state of the channel end
     *
     * Generated from protobuf field <code>.ibc.core.channel.v1.State state = 1 [json_name = "state"];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Ibc\Core\Channel\V1\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * whether the channel is ordered or unordered
     *
     * Generated from protobuf field <code>.ibc.core.channel.v1.Order ordering = 2 [json_name = "ordering"];</code>
     * @return int
     */
    public function getOrdering()
    {
        return $this->ordering;
    }

    /**
     * whether the channel is ordered or unordered
     *
     * Generated from protobuf field <code>.ibc.core.channel.v1.Order ordering = 2 [json_name = "ordering"];</code>
     * @param int $var
     * @return $this
     */
    public function setOrdering($var)
    {
        GPBUtil::checkEnum($var, \Ibc\Core\Channel\V1\Order::class);
        $this->ordering = $var;

        return $this;
    }

    /**
     * counterparty channel end
     *
     * Generated from protobuf field <code>.ibc.core.channel.v1.Counterparty counterparty = 3 [json_name = "counterparty", (.gogoproto.nullable) = false];</code>
     * @return \Ibc\Core\Channel\V1\Counterparty|null
     */
    public function getCounterparty()
    {
        return $this->counterparty;
    }

    public function hasCounterparty()
    {
        return isset($this->counterparty);
    }

    public function clearCounterparty()
    {
        unset($this->counterparty);
    }

    /**
     * counterparty channel end
     *
     * Generated from protobuf field <code>.ibc.core.channel.v1.Counterparty counterparty = 3 [json_name = "counterparty", (.gogoproto.nullable) = false];</code>
     * @param \Ibc\Core\Channel\V1\Counterparty $var
     * @return $this
     */
    public function setCounterparty($var)
    {
        GPBUtil::checkMessage($var, \Ibc\Core\Channel\V1\Counterparty::class);
        $this->counterparty = $var;

        return $this;
    }

    /**
     * list of connection identifiers, in order, along which packets sent on
     * this channel will travel
     *
     * Generated from protobuf field <code>repeated string connection_hops = 4 [json_name = "connectionHops", (.gogoproto.moretags) = "yaml:\"connection_hops\""];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConnectionHops()
    {
        return $this->connection_hops;
    }

    /**
     * list of connection identifiers, in order, along which packets sent on
     * this channel will travel
     *
     * Generated from protobuf field <code>repeated string connection_hops = 4 [json_name = "connectionHops", (.gogoproto.moretags) = "yaml:\"connection_hops\""];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConnectionHops($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->connection_hops = $arr;

        return $this;
    }

    /**
     * opaque channel version, which is agreed upon during the handshake
     *
     * Generated from protobuf field <code>string version = 5 [json_name = "version"];</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * opaque channel version, which is agreed upon during the handshake
     *
     * Generated from protobuf field <code>string version = 5 [json_name = "version"];</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

}


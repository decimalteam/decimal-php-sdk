<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/abci/types.proto

namespace Tendermint\Abci;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tendermint.abci.ResponseDeliverTx</code>
 */
class ResponseDeliverTx extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 code = 1 [json_name = "code"];</code>
     */
    protected $code = 0;
    /**
     * Generated from protobuf field <code>bytes data = 2 [json_name = "data"];</code>
     */
    protected $data = '';
    /**
     * nondeterministic
     *
     * Generated from protobuf field <code>string log = 3 [json_name = "log"];</code>
     */
    protected $log = '';
    /**
     * nondeterministic
     *
     * Generated from protobuf field <code>string info = 4 [json_name = "info"];</code>
     */
    protected $info = '';
    /**
     * Generated from protobuf field <code>int64 gas_wanted = 5 [json_name = "gas_wanted"];</code>
     */
    protected $gas_wanted = 0;
    /**
     * Generated from protobuf field <code>int64 gas_used = 6 [json_name = "gas_used"];</code>
     */
    protected $gas_used = 0;
    /**
     * Generated from protobuf field <code>repeated .tendermint.abci.Event events = 7 [json_name = "events", (.gogoproto.nullable) = false, (.gogoproto.jsontag) = "events,omitempty"];</code>
     */
    private $events;
    /**
     * Generated from protobuf field <code>string codespace = 8 [json_name = "codespace"];</code>
     */
    protected $codespace = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $code
     *     @type string $data
     *     @type string $log
     *           nondeterministic
     *     @type string $info
     *           nondeterministic
     *     @type int|string $gas_wanted
     *     @type int|string $gas_used
     *     @type \Tendermint\Abci\Event[]|\Google\Protobuf\Internal\RepeatedField $events
     *     @type string $codespace
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Tendermint\Abci\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 code = 1 [json_name = "code"];</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>uint32 code = 1 [json_name = "code"];</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkUint32($var);
        $this->code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes data = 2 [json_name = "data"];</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>bytes data = 2 [json_name = "data"];</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

    /**
     * nondeterministic
     *
     * Generated from protobuf field <code>string log = 3 [json_name = "log"];</code>
     * @return string
     */
    public function getLog()
    {
        return $this->log;
    }

    /**
     * nondeterministic
     *
     * Generated from protobuf field <code>string log = 3 [json_name = "log"];</code>
     * @param string $var
     * @return $this
     */
    public function setLog($var)
    {
        GPBUtil::checkString($var, True);
        $this->log = $var;

        return $this;
    }

    /**
     * nondeterministic
     *
     * Generated from protobuf field <code>string info = 4 [json_name = "info"];</code>
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * nondeterministic
     *
     * Generated from protobuf field <code>string info = 4 [json_name = "info"];</code>
     * @param string $var
     * @return $this
     */
    public function setInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 gas_wanted = 5 [json_name = "gas_wanted"];</code>
     * @return int|string
     */
    public function getGasWanted()
    {
        return $this->gas_wanted;
    }

    /**
     * Generated from protobuf field <code>int64 gas_wanted = 5 [json_name = "gas_wanted"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setGasWanted($var)
    {
        GPBUtil::checkInt64($var);
        $this->gas_wanted = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 gas_used = 6 [json_name = "gas_used"];</code>
     * @return int|string
     */
    public function getGasUsed()
    {
        return $this->gas_used;
    }

    /**
     * Generated from protobuf field <code>int64 gas_used = 6 [json_name = "gas_used"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setGasUsed($var)
    {
        GPBUtil::checkInt64($var);
        $this->gas_used = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .tendermint.abci.Event events = 7 [json_name = "events", (.gogoproto.nullable) = false, (.gogoproto.jsontag) = "events,omitempty"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Generated from protobuf field <code>repeated .tendermint.abci.Event events = 7 [json_name = "events", (.gogoproto.nullable) = false, (.gogoproto.jsontag) = "events,omitempty"];</code>
     * @param \Tendermint\Abci\Event[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tendermint\Abci\Event::class);
        $this->events = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string codespace = 8 [json_name = "codespace"];</code>
     * @return string
     */
    public function getCodespace()
    {
        return $this->codespace;
    }

    /**
     * Generated from protobuf field <code>string codespace = 8 [json_name = "codespace"];</code>
     * @param string $var
     * @return $this
     */
    public function setCodespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->codespace = $var;

        return $this;
    }

}


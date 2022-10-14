<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ethermint/evm/v1/evm.proto

namespace Ethermint\Evm\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * TraceConfig holds extra parameters to trace functions.
 *
 * Generated from protobuf message <code>ethermint.evm.v1.TraceConfig</code>
 */
class TraceConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * custom javascript tracer
     *
     * Generated from protobuf field <code>string tracer = 1 [json_name = "tracer"];</code>
     */
    protected $tracer = '';
    /**
     * overrides the default timeout of 5 seconds for JavaScript-based tracing
     * calls
     *
     * Generated from protobuf field <code>string timeout = 2 [json_name = "timeout"];</code>
     */
    protected $timeout = '';
    /**
     * number of blocks the tracer is willing to go back
     *
     * Generated from protobuf field <code>uint64 reexec = 3 [json_name = "reexec"];</code>
     */
    protected $reexec = 0;
    /**
     * disable stack capture
     *
     * Generated from protobuf field <code>bool disable_stack = 5 [json_name = "disableStack", (.gogoproto.jsontag) = "disableStack"];</code>
     */
    protected $disable_stack = false;
    /**
     * disable storage capture
     *
     * Generated from protobuf field <code>bool disable_storage = 6 [json_name = "disableStorage", (.gogoproto.jsontag) = "disableStorage"];</code>
     */
    protected $disable_storage = false;
    /**
     * print output during capture end
     *
     * Generated from protobuf field <code>bool debug = 8 [json_name = "debug"];</code>
     */
    protected $debug = false;
    /**
     * maximum length of output, but zero means unlimited
     *
     * Generated from protobuf field <code>int32 limit = 9 [json_name = "limit"];</code>
     */
    protected $limit = 0;
    /**
     * Chain overrides, can be used to execute a trace using future fork rules
     *
     * Generated from protobuf field <code>.ethermint.evm.v1.ChainConfig overrides = 10 [json_name = "overrides"];</code>
     */
    protected $overrides = null;
    /**
     * enable memory capture
     *
     * Generated from protobuf field <code>bool enable_memory = 11 [json_name = "enableMemory", (.gogoproto.jsontag) = "enableMemory"];</code>
     */
    protected $enable_memory = false;
    /**
     * enable return data capture
     *
     * Generated from protobuf field <code>bool enable_return_data = 12 [json_name = "enableReturnData", (.gogoproto.jsontag) = "enableReturnData"];</code>
     */
    protected $enable_return_data = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tracer
     *           custom javascript tracer
     *     @type string $timeout
     *           overrides the default timeout of 5 seconds for JavaScript-based tracing
     *           calls
     *     @type int|string $reexec
     *           number of blocks the tracer is willing to go back
     *     @type bool $disable_stack
     *           disable stack capture
     *     @type bool $disable_storage
     *           disable storage capture
     *     @type bool $debug
     *           print output during capture end
     *     @type int $limit
     *           maximum length of output, but zero means unlimited
     *     @type \Ethermint\Evm\V1\ChainConfig $overrides
     *           Chain overrides, can be used to execute a trace using future fork rules
     *     @type bool $enable_memory
     *           enable memory capture
     *     @type bool $enable_return_data
     *           enable return data capture
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ethermint\Evm\V1\Evm::initOnce();
        parent::__construct($data);
    }

    /**
     * custom javascript tracer
     *
     * Generated from protobuf field <code>string tracer = 1 [json_name = "tracer"];</code>
     * @return string
     */
    public function getTracer()
    {
        return $this->tracer;
    }

    /**
     * custom javascript tracer
     *
     * Generated from protobuf field <code>string tracer = 1 [json_name = "tracer"];</code>
     * @param string $var
     * @return $this
     */
    public function setTracer($var)
    {
        GPBUtil::checkString($var, True);
        $this->tracer = $var;

        return $this;
    }

    /**
     * overrides the default timeout of 5 seconds for JavaScript-based tracing
     * calls
     *
     * Generated from protobuf field <code>string timeout = 2 [json_name = "timeout"];</code>
     * @return string
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * overrides the default timeout of 5 seconds for JavaScript-based tracing
     * calls
     *
     * Generated from protobuf field <code>string timeout = 2 [json_name = "timeout"];</code>
     * @param string $var
     * @return $this
     */
    public function setTimeout($var)
    {
        GPBUtil::checkString($var, True);
        $this->timeout = $var;

        return $this;
    }

    /**
     * number of blocks the tracer is willing to go back
     *
     * Generated from protobuf field <code>uint64 reexec = 3 [json_name = "reexec"];</code>
     * @return int|string
     */
    public function getReexec()
    {
        return $this->reexec;
    }

    /**
     * number of blocks the tracer is willing to go back
     *
     * Generated from protobuf field <code>uint64 reexec = 3 [json_name = "reexec"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setReexec($var)
    {
        GPBUtil::checkUint64($var);
        $this->reexec = $var;

        return $this;
    }

    /**
     * disable stack capture
     *
     * Generated from protobuf field <code>bool disable_stack = 5 [json_name = "disableStack", (.gogoproto.jsontag) = "disableStack"];</code>
     * @return bool
     */
    public function getDisableStack()
    {
        return $this->disable_stack;
    }

    /**
     * disable stack capture
     *
     * Generated from protobuf field <code>bool disable_stack = 5 [json_name = "disableStack", (.gogoproto.jsontag) = "disableStack"];</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableStack($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_stack = $var;

        return $this;
    }

    /**
     * disable storage capture
     *
     * Generated from protobuf field <code>bool disable_storage = 6 [json_name = "disableStorage", (.gogoproto.jsontag) = "disableStorage"];</code>
     * @return bool
     */
    public function getDisableStorage()
    {
        return $this->disable_storage;
    }

    /**
     * disable storage capture
     *
     * Generated from protobuf field <code>bool disable_storage = 6 [json_name = "disableStorage", (.gogoproto.jsontag) = "disableStorage"];</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableStorage($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_storage = $var;

        return $this;
    }

    /**
     * print output during capture end
     *
     * Generated from protobuf field <code>bool debug = 8 [json_name = "debug"];</code>
     * @return bool
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * print output during capture end
     *
     * Generated from protobuf field <code>bool debug = 8 [json_name = "debug"];</code>
     * @param bool $var
     * @return $this
     */
    public function setDebug($var)
    {
        GPBUtil::checkBool($var);
        $this->debug = $var;

        return $this;
    }

    /**
     * maximum length of output, but zero means unlimited
     *
     * Generated from protobuf field <code>int32 limit = 9 [json_name = "limit"];</code>
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * maximum length of output, but zero means unlimited
     *
     * Generated from protobuf field <code>int32 limit = 9 [json_name = "limit"];</code>
     * @param int $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt32($var);
        $this->limit = $var;

        return $this;
    }

    /**
     * Chain overrides, can be used to execute a trace using future fork rules
     *
     * Generated from protobuf field <code>.ethermint.evm.v1.ChainConfig overrides = 10 [json_name = "overrides"];</code>
     * @return \Ethermint\Evm\V1\ChainConfig|null
     */
    public function getOverrides()
    {
        return $this->overrides;
    }

    public function hasOverrides()
    {
        return isset($this->overrides);
    }

    public function clearOverrides()
    {
        unset($this->overrides);
    }

    /**
     * Chain overrides, can be used to execute a trace using future fork rules
     *
     * Generated from protobuf field <code>.ethermint.evm.v1.ChainConfig overrides = 10 [json_name = "overrides"];</code>
     * @param \Ethermint\Evm\V1\ChainConfig $var
     * @return $this
     */
    public function setOverrides($var)
    {
        GPBUtil::checkMessage($var, \Ethermint\Evm\V1\ChainConfig::class);
        $this->overrides = $var;

        return $this;
    }

    /**
     * enable memory capture
     *
     * Generated from protobuf field <code>bool enable_memory = 11 [json_name = "enableMemory", (.gogoproto.jsontag) = "enableMemory"];</code>
     * @return bool
     */
    public function getEnableMemory()
    {
        return $this->enable_memory;
    }

    /**
     * enable memory capture
     *
     * Generated from protobuf field <code>bool enable_memory = 11 [json_name = "enableMemory", (.gogoproto.jsontag) = "enableMemory"];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableMemory($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_memory = $var;

        return $this;
    }

    /**
     * enable return data capture
     *
     * Generated from protobuf field <code>bool enable_return_data = 12 [json_name = "enableReturnData", (.gogoproto.jsontag) = "enableReturnData"];</code>
     * @return bool
     */
    public function getEnableReturnData()
    {
        return $this->enable_return_data;
    }

    /**
     * enable return data capture
     *
     * Generated from protobuf field <code>bool enable_return_data = 12 [json_name = "enableReturnData", (.gogoproto.jsontag) = "enableReturnData"];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableReturnData($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_return_data = $var;

        return $this;
    }

}

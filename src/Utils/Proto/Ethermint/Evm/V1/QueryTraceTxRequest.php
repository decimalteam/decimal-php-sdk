<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ethermint/evm/v1/query.proto

namespace Ethermint\Evm\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryTraceTxRequest defines TraceTx request
 *
 * Generated from protobuf message <code>ethermint.evm.v1.QueryTraceTxRequest</code>
 */
class QueryTraceTxRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * msgEthereumTx for the requested transaction
     *
     * Generated from protobuf field <code>.ethermint.evm.v1.MsgEthereumTx msg = 1 [json_name = "msg"];</code>
     */
    protected $msg = null;
    /**
     * TraceConfig holds extra parameters to trace functions.
     *
     * Generated from protobuf field <code>.ethermint.evm.v1.TraceConfig trace_config = 3 [json_name = "traceConfig"];</code>
     */
    protected $trace_config = null;
    /**
     * the predecessor transactions included in the same block
     * need to be replayed first to get correct context for tracing.
     *
     * Generated from protobuf field <code>repeated .ethermint.evm.v1.MsgEthereumTx predecessors = 4 [json_name = "predecessors"];</code>
     */
    private $predecessors;
    /**
     * block number of requested transaction
     *
     * Generated from protobuf field <code>int64 block_number = 5 [json_name = "blockNumber"];</code>
     */
    protected $block_number = 0;
    /**
     * block hex hash of requested transaction
     *
     * Generated from protobuf field <code>string block_hash = 6 [json_name = "blockHash"];</code>
     */
    protected $block_hash = '';
    /**
     * block time of requested transaction
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp block_time = 7 [json_name = "blockTime", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
     */
    protected $block_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ethermint\Evm\V1\MsgEthereumTx $msg
     *           msgEthereumTx for the requested transaction
     *     @type \Ethermint\Evm\V1\TraceConfig $trace_config
     *           TraceConfig holds extra parameters to trace functions.
     *     @type \Ethermint\Evm\V1\MsgEthereumTx[]|\Google\Protobuf\Internal\RepeatedField $predecessors
     *           the predecessor transactions included in the same block
     *           need to be replayed first to get correct context for tracing.
     *     @type int|string $block_number
     *           block number of requested transaction
     *     @type string $block_hash
     *           block hex hash of requested transaction
     *     @type \Google\Protobuf\Timestamp $block_time
     *           block time of requested transaction
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ethermint\Evm\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * msgEthereumTx for the requested transaction
     *
     * Generated from protobuf field <code>.ethermint.evm.v1.MsgEthereumTx msg = 1 [json_name = "msg"];</code>
     * @return \Ethermint\Evm\V1\MsgEthereumTx|null
     */
    public function getMsg()
    {
        return $this->msg;
    }

    public function hasMsg()
    {
        return isset($this->msg);
    }

    public function clearMsg()
    {
        unset($this->msg);
    }

    /**
     * msgEthereumTx for the requested transaction
     *
     * Generated from protobuf field <code>.ethermint.evm.v1.MsgEthereumTx msg = 1 [json_name = "msg"];</code>
     * @param \Ethermint\Evm\V1\MsgEthereumTx $var
     * @return $this
     */
    public function setMsg($var)
    {
        GPBUtil::checkMessage($var, \Ethermint\Evm\V1\MsgEthereumTx::class);
        $this->msg = $var;

        return $this;
    }

    /**
     * TraceConfig holds extra parameters to trace functions.
     *
     * Generated from protobuf field <code>.ethermint.evm.v1.TraceConfig trace_config = 3 [json_name = "traceConfig"];</code>
     * @return \Ethermint\Evm\V1\TraceConfig|null
     */
    public function getTraceConfig()
    {
        return $this->trace_config;
    }

    public function hasTraceConfig()
    {
        return isset($this->trace_config);
    }

    public function clearTraceConfig()
    {
        unset($this->trace_config);
    }

    /**
     * TraceConfig holds extra parameters to trace functions.
     *
     * Generated from protobuf field <code>.ethermint.evm.v1.TraceConfig trace_config = 3 [json_name = "traceConfig"];</code>
     * @param \Ethermint\Evm\V1\TraceConfig $var
     * @return $this
     */
    public function setTraceConfig($var)
    {
        GPBUtil::checkMessage($var, \Ethermint\Evm\V1\TraceConfig::class);
        $this->trace_config = $var;

        return $this;
    }

    /**
     * the predecessor transactions included in the same block
     * need to be replayed first to get correct context for tracing.
     *
     * Generated from protobuf field <code>repeated .ethermint.evm.v1.MsgEthereumTx predecessors = 4 [json_name = "predecessors"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPredecessors()
    {
        return $this->predecessors;
    }

    /**
     * the predecessor transactions included in the same block
     * need to be replayed first to get correct context for tracing.
     *
     * Generated from protobuf field <code>repeated .ethermint.evm.v1.MsgEthereumTx predecessors = 4 [json_name = "predecessors"];</code>
     * @param \Ethermint\Evm\V1\MsgEthereumTx[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPredecessors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ethermint\Evm\V1\MsgEthereumTx::class);
        $this->predecessors = $arr;

        return $this;
    }

    /**
     * block number of requested transaction
     *
     * Generated from protobuf field <code>int64 block_number = 5 [json_name = "blockNumber"];</code>
     * @return int|string
     */
    public function getBlockNumber()
    {
        return $this->block_number;
    }

    /**
     * block number of requested transaction
     *
     * Generated from protobuf field <code>int64 block_number = 5 [json_name = "blockNumber"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setBlockNumber($var)
    {
        GPBUtil::checkInt64($var);
        $this->block_number = $var;

        return $this;
    }

    /**
     * block hex hash of requested transaction
     *
     * Generated from protobuf field <code>string block_hash = 6 [json_name = "blockHash"];</code>
     * @return string
     */
    public function getBlockHash()
    {
        return $this->block_hash;
    }

    /**
     * block hex hash of requested transaction
     *
     * Generated from protobuf field <code>string block_hash = 6 [json_name = "blockHash"];</code>
     * @param string $var
     * @return $this
     */
    public function setBlockHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->block_hash = $var;

        return $this;
    }

    /**
     * block time of requested transaction
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp block_time = 7 [json_name = "blockTime", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getBlockTime()
    {
        return $this->block_time;
    }

    public function hasBlockTime()
    {
        return isset($this->block_time);
    }

    public function clearBlockTime()
    {
        unset($this->block_time);
    }

    /**
     * block time of requested transaction
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp block_time = 7 [json_name = "blockTime", (.gogoproto.nullable) = false, (.gogoproto.stdtime) = true];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setBlockTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->block_time = $var;

        return $this;
    }

}


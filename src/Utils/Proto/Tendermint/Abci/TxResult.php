<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/abci/types.proto

namespace Tendermint\Abci;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * TxResult contains results of executing the transaction.
 * One usage is indexing transaction results.
 *
 * Generated from protobuf message <code>tendermint.abci.TxResult</code>
 */
class TxResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 height = 1 [json_name = "height"];</code>
     */
    protected $height = 0;
    /**
     * Generated from protobuf field <code>uint32 index = 2 [json_name = "index"];</code>
     */
    protected $index = 0;
    /**
     * Generated from protobuf field <code>bytes tx = 3 [json_name = "tx"];</code>
     */
    protected $tx = '';
    /**
     * Generated from protobuf field <code>.tendermint.abci.ResponseDeliverTx result = 4 [json_name = "result", (.gogoproto.nullable) = false];</code>
     */
    protected $result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $height
     *     @type int $index
     *     @type string $tx
     *     @type \Tendermint\Abci\ResponseDeliverTx $result
     * }
     */
    public function __construct($data = NULL) {
        \Tendermint\Abci\GPBMetadata\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 height = 1 [json_name = "height"];</code>
     * @return int|string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Generated from protobuf field <code>int64 height = 1 [json_name = "height"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkInt64($var);
        $this->height = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 index = 2 [json_name = "index"];</code>
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Generated from protobuf field <code>uint32 index = 2 [json_name = "index"];</code>
     * @param int $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes tx = 3 [json_name = "tx"];</code>
     * @return string
     */
    public function getTx()
    {
        return $this->tx;
    }

    /**
     * Generated from protobuf field <code>bytes tx = 3 [json_name = "tx"];</code>
     * @param string $var
     * @return $this
     */
    public function setTx($var)
    {
        GPBUtil::checkString($var, False);
        $this->tx = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.tendermint.abci.ResponseDeliverTx result = 4 [json_name = "result", (.gogoproto.nullable) = false];</code>
     * @return \Tendermint\Abci\ResponseDeliverTx|null
     */
    public function getResult()
    {
        return $this->result;
    }

    public function hasResult()
    {
        return isset($this->result);
    }

    public function clearResult()
    {
        unset($this->result);
    }

    /**
     * Generated from protobuf field <code>.tendermint.abci.ResponseDeliverTx result = 4 [json_name = "result", (.gogoproto.nullable) = false];</code>
     * @param \Tendermint\Abci\ResponseDeliverTx $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Tendermint\Abci\ResponseDeliverTx::class);
        $this->result = $var;

        return $this;
    }

}

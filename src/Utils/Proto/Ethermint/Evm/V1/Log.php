<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ethermint/evm/v1/evm.proto

namespace Ethermint\Evm\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Log represents an protobuf compatible Ethereum Log that defines a contract
 * log event. These events are generated by the LOG opcode and stored/indexed by
 * the node.
 *
 * Generated from protobuf message <code>ethermint.evm.v1.Log</code>
 */
class Log extends \Google\Protobuf\Internal\Message
{
    /**
     * address of the contract that generated the event
     *
     * Generated from protobuf field <code>string address = 1 [json_name = "address"];</code>
     */
    protected $address = '';
    /**
     * list of topics provided by the contract.
     *
     * Generated from protobuf field <code>repeated string topics = 2 [json_name = "topics"];</code>
     */
    private $topics;
    /**
     * supplied by the contract, usually ABI-encoded
     *
     * Generated from protobuf field <code>bytes data = 3 [json_name = "data"];</code>
     */
    protected $data = '';
    /**
     * block in which the transaction was included
     *
     * Generated from protobuf field <code>uint64 block_number = 4 [json_name = "blockNumber", (.gogoproto.jsontag) = "blockNumber"];</code>
     */
    protected $block_number = 0;
    /**
     * hash of the transaction
     *
     * Generated from protobuf field <code>string tx_hash = 5 [json_name = "txHash", (.gogoproto.jsontag) = "transactionHash"];</code>
     */
    protected $tx_hash = '';
    /**
     * index of the transaction in the block
     *
     * Generated from protobuf field <code>uint64 tx_index = 6 [json_name = "txIndex", (.gogoproto.jsontag) = "transactionIndex"];</code>
     */
    protected $tx_index = 0;
    /**
     * hash of the block in which the transaction was included
     *
     * Generated from protobuf field <code>string block_hash = 7 [json_name = "blockHash", (.gogoproto.jsontag) = "blockHash"];</code>
     */
    protected $block_hash = '';
    /**
     * index of the log in the block
     *
     * Generated from protobuf field <code>uint64 index = 8 [json_name = "index", (.gogoproto.jsontag) = "logIndex"];</code>
     */
    protected $index = 0;
    /**
     * The Removed field is true if this log was reverted due to a chain
     * reorganisation. You must pay attention to this field if you receive logs
     * through a filter query.
     *
     * Generated from protobuf field <code>bool removed = 9 [json_name = "removed"];</code>
     */
    protected $removed = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $address
     *           address of the contract that generated the event
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $topics
     *           list of topics provided by the contract.
     *     @type string $data
     *           supplied by the contract, usually ABI-encoded
     *     @type int|string $block_number
     *           block in which the transaction was included
     *     @type string $tx_hash
     *           hash of the transaction
     *     @type int|string $tx_index
     *           index of the transaction in the block
     *     @type string $block_hash
     *           hash of the block in which the transaction was included
     *     @type int|string $index
     *           index of the log in the block
     *     @type bool $removed
     *           The Removed field is true if this log was reverted due to a chain
     *           reorganisation. You must pay attention to this field if you receive logs
     *           through a filter query.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ethermint\Evm\V1\Evm::initOnce();
        parent::__construct($data);
    }

    /**
     * address of the contract that generated the event
     *
     * Generated from protobuf field <code>string address = 1 [json_name = "address"];</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * address of the contract that generated the event
     *
     * Generated from protobuf field <code>string address = 1 [json_name = "address"];</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     * list of topics provided by the contract.
     *
     * Generated from protobuf field <code>repeated string topics = 2 [json_name = "topics"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTopics()
    {
        return $this->topics;
    }

    /**
     * list of topics provided by the contract.
     *
     * Generated from protobuf field <code>repeated string topics = 2 [json_name = "topics"];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTopics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->topics = $arr;

        return $this;
    }

    /**
     * supplied by the contract, usually ABI-encoded
     *
     * Generated from protobuf field <code>bytes data = 3 [json_name = "data"];</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * supplied by the contract, usually ABI-encoded
     *
     * Generated from protobuf field <code>bytes data = 3 [json_name = "data"];</code>
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
     * block in which the transaction was included
     *
     * Generated from protobuf field <code>uint64 block_number = 4 [json_name = "blockNumber", (.gogoproto.jsontag) = "blockNumber"];</code>
     * @return int|string
     */
    public function getBlockNumber()
    {
        return $this->block_number;
    }

    /**
     * block in which the transaction was included
     *
     * Generated from protobuf field <code>uint64 block_number = 4 [json_name = "blockNumber", (.gogoproto.jsontag) = "blockNumber"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setBlockNumber($var)
    {
        GPBUtil::checkUint64($var);
        $this->block_number = $var;

        return $this;
    }

    /**
     * hash of the transaction
     *
     * Generated from protobuf field <code>string tx_hash = 5 [json_name = "txHash", (.gogoproto.jsontag) = "transactionHash"];</code>
     * @return string
     */
    public function getTxHash()
    {
        return $this->tx_hash;
    }

    /**
     * hash of the transaction
     *
     * Generated from protobuf field <code>string tx_hash = 5 [json_name = "txHash", (.gogoproto.jsontag) = "transactionHash"];</code>
     * @param string $var
     * @return $this
     */
    public function setTxHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->tx_hash = $var;

        return $this;
    }

    /**
     * index of the transaction in the block
     *
     * Generated from protobuf field <code>uint64 tx_index = 6 [json_name = "txIndex", (.gogoproto.jsontag) = "transactionIndex"];</code>
     * @return int|string
     */
    public function getTxIndex()
    {
        return $this->tx_index;
    }

    /**
     * index of the transaction in the block
     *
     * Generated from protobuf field <code>uint64 tx_index = 6 [json_name = "txIndex", (.gogoproto.jsontag) = "transactionIndex"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTxIndex($var)
    {
        GPBUtil::checkUint64($var);
        $this->tx_index = $var;

        return $this;
    }

    /**
     * hash of the block in which the transaction was included
     *
     * Generated from protobuf field <code>string block_hash = 7 [json_name = "blockHash", (.gogoproto.jsontag) = "blockHash"];</code>
     * @return string
     */
    public function getBlockHash()
    {
        return $this->block_hash;
    }

    /**
     * hash of the block in which the transaction was included
     *
     * Generated from protobuf field <code>string block_hash = 7 [json_name = "blockHash", (.gogoproto.jsontag) = "blockHash"];</code>
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
     * index of the log in the block
     *
     * Generated from protobuf field <code>uint64 index = 8 [json_name = "index", (.gogoproto.jsontag) = "logIndex"];</code>
     * @return int|string
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * index of the log in the block
     *
     * Generated from protobuf field <code>uint64 index = 8 [json_name = "index", (.gogoproto.jsontag) = "logIndex"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkUint64($var);
        $this->index = $var;

        return $this;
    }

    /**
     * The Removed field is true if this log was reverted due to a chain
     * reorganisation. You must pay attention to this field if you receive logs
     * through a filter query.
     *
     * Generated from protobuf field <code>bool removed = 9 [json_name = "removed"];</code>
     * @return bool
     */
    public function getRemoved()
    {
        return $this->removed;
    }

    /**
     * The Removed field is true if this log was reverted due to a chain
     * reorganisation. You must pay attention to this field if you receive logs
     * through a filter query.
     *
     * Generated from protobuf field <code>bool removed = 9 [json_name = "removed"];</code>
     * @param bool $var
     * @return $this
     */
    public function setRemoved($var)
    {
        GPBUtil::checkBool($var);
        $this->removed = $var;

        return $this;
    }

}

<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/base/abci/v1beta1/abci.proto

namespace Cosmos\Base\Abci\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * TxResponse defines a structure containing relevant tx data and metadata. The
 * tags are stringified and the log is JSON decoded.
 *
 * Generated from protobuf message <code>cosmos.base.abci.v1beta1.TxResponse</code>
 */
class TxResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The block height
     *
     * Generated from protobuf field <code>int64 height = 1 [json_name = "height"];</code>
     */
    protected $height = 0;
    /**
     * The transaction hash.
     *
     * Generated from protobuf field <code>string txhash = 2 [json_name = "txhash", (.gogoproto.customname) = "TxHash"];</code>
     */
    protected $txhash = '';
    /**
     * Namespace for the Code
     *
     * Generated from protobuf field <code>string codespace = 3 [json_name = "codespace"];</code>
     */
    protected $codespace = '';
    /**
     * Response code.
     *
     * Generated from protobuf field <code>uint32 code = 4 [json_name = "code"];</code>
     */
    protected $code = 0;
    /**
     * Result bytes, if any.
     *
     * Generated from protobuf field <code>string data = 5 [json_name = "data"];</code>
     */
    protected $data = '';
    /**
     * The output of the application's logger (raw string). May be
     * non-deterministic.
     *
     * Generated from protobuf field <code>string raw_log = 6 [json_name = "rawLog"];</code>
     */
    protected $raw_log = '';
    /**
     * The output of the application's logger (typed). May be non-deterministic.
     *
     * Generated from protobuf field <code>repeated .cosmos.base.abci.v1beta1.ABCIMessageLog logs = 7 [json_name = "logs", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "ABCIMessageLogs"];</code>
     */
    private $logs;
    /**
     * Additional information. May be non-deterministic.
     *
     * Generated from protobuf field <code>string info = 8 [json_name = "info"];</code>
     */
    protected $info = '';
    /**
     * Amount of gas requested for transaction.
     *
     * Generated from protobuf field <code>int64 gas_wanted = 9 [json_name = "gasWanted"];</code>
     */
    protected $gas_wanted = 0;
    /**
     * Amount of gas consumed by transaction.
     *
     * Generated from protobuf field <code>int64 gas_used = 10 [json_name = "gasUsed"];</code>
     */
    protected $gas_used = 0;
    /**
     * The request transaction bytes.
     *
     * Generated from protobuf field <code>.google.protobuf.Any tx = 11 [json_name = "tx"];</code>
     */
    protected $tx = null;
    /**
     * Time of the previous block. For heights > 1, it's the weighted median of
     * the timestamps of the valid votes in the block.LastCommit. For height == 1,
     * it's genesis time.
     *
     * Generated from protobuf field <code>string timestamp = 12 [json_name = "timestamp"];</code>
     */
    protected $timestamp = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $height
     *           The block height
     *     @type string $txhash
     *           The transaction hash.
     *     @type string $codespace
     *           Namespace for the Code
     *     @type int $code
     *           Response code.
     *     @type string $data
     *           Result bytes, if any.
     *     @type string $raw_log
     *           The output of the application's logger (raw string). May be
     *           non-deterministic.
     *     @type array<\Cosmos\Base\Abci\V1beta1\ABCIMessageLog>|\Google\Protobuf\Internal\RepeatedField $logs
     *           The output of the application's logger (typed). May be non-deterministic.
     *     @type string $info
     *           Additional information. May be non-deterministic.
     *     @type int|string $gas_wanted
     *           Amount of gas requested for transaction.
     *     @type int|string $gas_used
     *           Amount of gas consumed by transaction.
     *     @type \Google\Protobuf\Any $tx
     *           The request transaction bytes.
     *     @type string $timestamp
     *           Time of the previous block. For heights > 1, it's the weighted median of
     *           the timestamps of the valid votes in the block.LastCommit. For height == 1,
     *           it's genesis time.
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Base\Abci\V1beta1\GPBMetadata\Abci::initOnce();
        parent::__construct($data);
    }

    /**
     * The block height
     *
     * Generated from protobuf field <code>int64 height = 1 [json_name = "height"];</code>
     * @return int|string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * The block height
     *
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
     * The transaction hash.
     *
     * Generated from protobuf field <code>string txhash = 2 [json_name = "txhash", (.gogoproto.customname) = "TxHash"];</code>
     * @return string
     */
    public function getTxhash()
    {
        return $this->txhash;
    }

    /**
     * The transaction hash.
     *
     * Generated from protobuf field <code>string txhash = 2 [json_name = "txhash", (.gogoproto.customname) = "TxHash"];</code>
     * @param string $var
     * @return $this
     */
    public function setTxhash($var)
    {
        GPBUtil::checkString($var, True);
        $this->txhash = $var;

        return $this;
    }

    /**
     * Namespace for the Code
     *
     * Generated from protobuf field <code>string codespace = 3 [json_name = "codespace"];</code>
     * @return string
     */
    public function getCodespace()
    {
        return $this->codespace;
    }

    /**
     * Namespace for the Code
     *
     * Generated from protobuf field <code>string codespace = 3 [json_name = "codespace"];</code>
     * @param string $var
     * @return $this
     */
    public function setCodespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->codespace = $var;

        return $this;
    }

    /**
     * Response code.
     *
     * Generated from protobuf field <code>uint32 code = 4 [json_name = "code"];</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Response code.
     *
     * Generated from protobuf field <code>uint32 code = 4 [json_name = "code"];</code>
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
     * Result bytes, if any.
     *
     * Generated from protobuf field <code>string data = 5 [json_name = "data"];</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Result bytes, if any.
     *
     * Generated from protobuf field <code>string data = 5 [json_name = "data"];</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, True);
        $this->data = $var;

        return $this;
    }

    /**
     * The output of the application's logger (raw string). May be
     * non-deterministic.
     *
     * Generated from protobuf field <code>string raw_log = 6 [json_name = "rawLog"];</code>
     * @return string
     */
    public function getRawLog()
    {
        return $this->raw_log;
    }

    /**
     * The output of the application's logger (raw string). May be
     * non-deterministic.
     *
     * Generated from protobuf field <code>string raw_log = 6 [json_name = "rawLog"];</code>
     * @param string $var
     * @return $this
     */
    public function setRawLog($var)
    {
        GPBUtil::checkString($var, True);
        $this->raw_log = $var;

        return $this;
    }

    /**
     * The output of the application's logger (typed). May be non-deterministic.
     *
     * Generated from protobuf field <code>repeated .cosmos.base.abci.v1beta1.ABCIMessageLog logs = 7 [json_name = "logs", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "ABCIMessageLogs"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLogs()
    {
        return $this->logs;
    }

    /**
     * The output of the application's logger (typed). May be non-deterministic.
     *
     * Generated from protobuf field <code>repeated .cosmos.base.abci.v1beta1.ABCIMessageLog logs = 7 [json_name = "logs", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "ABCIMessageLogs"];</code>
     * @param array<\Cosmos\Base\Abci\V1beta1\ABCIMessageLog>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLogs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Base\Abci\V1beta1\ABCIMessageLog::class);
        $this->logs = $arr;

        return $this;
    }

    /**
     * Additional information. May be non-deterministic.
     *
     * Generated from protobuf field <code>string info = 8 [json_name = "info"];</code>
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Additional information. May be non-deterministic.
     *
     * Generated from protobuf field <code>string info = 8 [json_name = "info"];</code>
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
     * Amount of gas requested for transaction.
     *
     * Generated from protobuf field <code>int64 gas_wanted = 9 [json_name = "gasWanted"];</code>
     * @return int|string
     */
    public function getGasWanted()
    {
        return $this->gas_wanted;
    }

    /**
     * Amount of gas requested for transaction.
     *
     * Generated from protobuf field <code>int64 gas_wanted = 9 [json_name = "gasWanted"];</code>
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
     * Amount of gas consumed by transaction.
     *
     * Generated from protobuf field <code>int64 gas_used = 10 [json_name = "gasUsed"];</code>
     * @return int|string
     */
    public function getGasUsed()
    {
        return $this->gas_used;
    }

    /**
     * Amount of gas consumed by transaction.
     *
     * Generated from protobuf field <code>int64 gas_used = 10 [json_name = "gasUsed"];</code>
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
     * The request transaction bytes.
     *
     * Generated from protobuf field <code>.google.protobuf.Any tx = 11 [json_name = "tx"];</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getTx()
    {
        return $this->tx;
    }

    public function hasTx()
    {
        return isset($this->tx);
    }

    public function clearTx()
    {
        unset($this->tx);
    }

    /**
     * The request transaction bytes.
     *
     * Generated from protobuf field <code>.google.protobuf.Any tx = 11 [json_name = "tx"];</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setTx($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->tx = $var;

        return $this;
    }

    /**
     * Time of the previous block. For heights > 1, it's the weighted median of
     * the timestamps of the valid votes in the block.LastCommit. For height == 1,
     * it's genesis time.
     *
     * Generated from protobuf field <code>string timestamp = 12 [json_name = "timestamp"];</code>
     * @return string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Time of the previous block. For heights > 1, it's the weighted median of
     * the timestamps of the valid votes in the block.LastCommit. For height == 1,
     * it's genesis time.
     *
     * Generated from protobuf field <code>string timestamp = 12 [json_name = "timestamp"];</code>
     * @param string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->timestamp = $var;

        return $this;
    }

}


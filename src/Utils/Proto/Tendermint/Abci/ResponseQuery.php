<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/abci/types.proto

namespace Tendermint\Abci;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tendermint.abci.ResponseQuery</code>
 */
class ResponseQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 code = 1 [json_name = "code"];</code>
     */
    protected $code = 0;
    /**
     * bytes data = 2; // use "value" instead.
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
     * Generated from protobuf field <code>int64 index = 5 [json_name = "index"];</code>
     */
    protected $index = 0;
    /**
     * Generated from protobuf field <code>bytes key = 6 [json_name = "key"];</code>
     */
    protected $key = '';
    /**
     * Generated from protobuf field <code>bytes value = 7 [json_name = "value"];</code>
     */
    protected $value = '';
    /**
     * Generated from protobuf field <code>.tendermint.crypto.ProofOps proof_ops = 8 [json_name = "proofOps"];</code>
     */
    protected $proof_ops = null;
    /**
     * Generated from protobuf field <code>int64 height = 9 [json_name = "height"];</code>
     */
    protected $height = 0;
    /**
     * Generated from protobuf field <code>string codespace = 10 [json_name = "codespace"];</code>
     */
    protected $codespace = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $code
     *     @type string $log
     *           bytes data = 2; // use "value" instead.
     *     @type string $info
     *           nondeterministic
     *     @type int|string $index
     *     @type string $key
     *     @type string $value
     *     @type \Tendermint\Crypto\ProofOps $proof_ops
     *     @type int|string $height
     *     @type string $codespace
     * }
     */
    public function __construct($data = NULL) {
        \Tendermint\Abci\GPBMetadata\Types::initOnce();
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
     * bytes data = 2; // use "value" instead.
     *
     * Generated from protobuf field <code>string log = 3 [json_name = "log"];</code>
     * @return string
     */
    public function getLog()
    {
        return $this->log;
    }

    /**
     * bytes data = 2; // use "value" instead.
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
     * Generated from protobuf field <code>int64 index = 5 [json_name = "index"];</code>
     * @return int|string
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Generated from protobuf field <code>int64 index = 5 [json_name = "index"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkInt64($var);
        $this->index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes key = 6 [json_name = "key"];</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Generated from protobuf field <code>bytes key = 6 [json_name = "key"];</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes value = 7 [json_name = "value"];</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>bytes value = 7 [json_name = "value"];</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, False);
        $this->value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.tendermint.crypto.ProofOps proof_ops = 8 [json_name = "proofOps"];</code>
     * @return \Tendermint\Crypto\ProofOps|null
     */
    public function getProofOps()
    {
        return $this->proof_ops;
    }

    public function hasProofOps()
    {
        return isset($this->proof_ops);
    }

    public function clearProofOps()
    {
        unset($this->proof_ops);
    }

    /**
     * Generated from protobuf field <code>.tendermint.crypto.ProofOps proof_ops = 8 [json_name = "proofOps"];</code>
     * @param \Tendermint\Crypto\ProofOps $var
     * @return $this
     */
    public function setProofOps($var)
    {
        GPBUtil::checkMessage($var, \Tendermint\Crypto\ProofOps::class);
        $this->proof_ops = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 height = 9 [json_name = "height"];</code>
     * @return int|string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Generated from protobuf field <code>int64 height = 9 [json_name = "height"];</code>
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
     * Generated from protobuf field <code>string codespace = 10 [json_name = "codespace"];</code>
     * @return string
     */
    public function getCodespace()
    {
        return $this->codespace;
    }

    /**
     * Generated from protobuf field <code>string codespace = 10 [json_name = "codespace"];</code>
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


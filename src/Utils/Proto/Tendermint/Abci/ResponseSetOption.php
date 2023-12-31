<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/abci/types.proto

namespace Tendermint\Abci;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * nondeterministic
 *
 * Generated from protobuf message <code>tendermint.abci.ResponseSetOption</code>
 */
class ResponseSetOption extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 code = 1 [json_name = "code"];</code>
     */
    protected $code = 0;
    /**
     * bytes data = 2;
     *
     * Generated from protobuf field <code>string log = 3 [json_name = "log"];</code>
     */
    protected $log = '';
    /**
     * Generated from protobuf field <code>string info = 4 [json_name = "info"];</code>
     */
    protected $info = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $code
     *     @type string $log
     *           bytes data = 2;
     *     @type string $info
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
     * bytes data = 2;
     *
     * Generated from protobuf field <code>string log = 3 [json_name = "log"];</code>
     * @return string
     */
    public function getLog()
    {
        return $this->log;
    }

    /**
     * bytes data = 2;
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
     * Generated from protobuf field <code>string info = 4 [json_name = "info"];</code>
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
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

}


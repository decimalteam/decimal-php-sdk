<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/abci/types.proto

namespace Tendermint\Abci;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tendermint.abci.RequestCheckTx</code>
 */
class RequestCheckTx extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes tx = 1 [json_name = "tx"];</code>
     */
    protected $tx = '';
    /**
     * Generated from protobuf field <code>.tendermint.abci.CheckTxType type = 2 [json_name = "type"];</code>
     */
    protected $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tx
     *     @type int $type
     * }
     */
    public function __construct($data = NULL) {
        \Tendermint\Abci\GPBMetadata\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes tx = 1 [json_name = "tx"];</code>
     * @return string
     */
    public function getTx()
    {
        return $this->tx;
    }

    /**
     * Generated from protobuf field <code>bytes tx = 1 [json_name = "tx"];</code>
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
     * Generated from protobuf field <code>.tendermint.abci.CheckTxType type = 2 [json_name = "type"];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.tendermint.abci.CheckTxType type = 2 [json_name = "type"];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Tendermint\Abci\CheckTxType::class);
        $this->type = $var;

        return $this;
    }

}


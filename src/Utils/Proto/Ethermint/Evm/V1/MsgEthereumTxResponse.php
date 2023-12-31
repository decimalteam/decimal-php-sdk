<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ethermint/evm/v1/tx.proto

namespace Ethermint\Evm\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MsgEthereumTxResponse defines the Msg/EthereumTx response type.
 *
 * Generated from protobuf message <code>ethermint.evm.v1.MsgEthereumTxResponse</code>
 */
class MsgEthereumTxResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * ethereum transaction hash in hex format. This hash differs from the
     * Tendermint sha256 hash of the transaction bytes. See
     * https://github.com/tendermint/tendermint/issues/6539 for reference
     *
     * Generated from protobuf field <code>string hash = 1 [json_name = "hash"];</code>
     */
    protected $hash = '';
    /**
     * logs contains the transaction hash and the proto-compatible ethereum
     * logs.
     *
     * Generated from protobuf field <code>repeated .ethermint.evm.v1.Log logs = 2 [json_name = "logs"];</code>
     */
    private $logs;
    /**
     * returned data from evm function (result or data supplied with revert
     * opcode)
     *
     * Generated from protobuf field <code>bytes ret = 3 [json_name = "ret"];</code>
     */
    protected $ret = '';
    /**
     * vm error is the error returned by vm execution
     *
     * Generated from protobuf field <code>string vm_error = 4 [json_name = "vmError"];</code>
     */
    protected $vm_error = '';
    /**
     * gas consumed by the transaction
     *
     * Generated from protobuf field <code>uint64 gas_used = 5 [json_name = "gasUsed"];</code>
     */
    protected $gas_used = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $hash
     *           ethereum transaction hash in hex format. This hash differs from the
     *           Tendermint sha256 hash of the transaction bytes. See
     *           https://github.com/tendermint/tendermint/issues/6539 for reference
     *     @type \Ethermint\Evm\V1\Log[]|\Google\Protobuf\Internal\RepeatedField $logs
     *           logs contains the transaction hash and the proto-compatible ethereum
     *           logs.
     *     @type string $ret
     *           returned data from evm function (result or data supplied with revert
     *           opcode)
     *     @type string $vm_error
     *           vm error is the error returned by vm execution
     *     @type int|string $gas_used
     *           gas consumed by the transaction
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ethermint\Evm\V1\Tx::initOnce();
        parent::__construct($data);
    }

    /**
     * ethereum transaction hash in hex format. This hash differs from the
     * Tendermint sha256 hash of the transaction bytes. See
     * https://github.com/tendermint/tendermint/issues/6539 for reference
     *
     * Generated from protobuf field <code>string hash = 1 [json_name = "hash"];</code>
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * ethereum transaction hash in hex format. This hash differs from the
     * Tendermint sha256 hash of the transaction bytes. See
     * https://github.com/tendermint/tendermint/issues/6539 for reference
     *
     * Generated from protobuf field <code>string hash = 1 [json_name = "hash"];</code>
     * @param string $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->hash = $var;

        return $this;
    }

    /**
     * logs contains the transaction hash and the proto-compatible ethereum
     * logs.
     *
     * Generated from protobuf field <code>repeated .ethermint.evm.v1.Log logs = 2 [json_name = "logs"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLogs()
    {
        return $this->logs;
    }

    /**
     * logs contains the transaction hash and the proto-compatible ethereum
     * logs.
     *
     * Generated from protobuf field <code>repeated .ethermint.evm.v1.Log logs = 2 [json_name = "logs"];</code>
     * @param \Ethermint\Evm\V1\Log[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLogs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ethermint\Evm\V1\Log::class);
        $this->logs = $arr;

        return $this;
    }

    /**
     * returned data from evm function (result or data supplied with revert
     * opcode)
     *
     * Generated from protobuf field <code>bytes ret = 3 [json_name = "ret"];</code>
     * @return string
     */
    public function getRet()
    {
        return $this->ret;
    }

    /**
     * returned data from evm function (result or data supplied with revert
     * opcode)
     *
     * Generated from protobuf field <code>bytes ret = 3 [json_name = "ret"];</code>
     * @param string $var
     * @return $this
     */
    public function setRet($var)
    {
        GPBUtil::checkString($var, False);
        $this->ret = $var;

        return $this;
    }

    /**
     * vm error is the error returned by vm execution
     *
     * Generated from protobuf field <code>string vm_error = 4 [json_name = "vmError"];</code>
     * @return string
     */
    public function getVmError()
    {
        return $this->vm_error;
    }

    /**
     * vm error is the error returned by vm execution
     *
     * Generated from protobuf field <code>string vm_error = 4 [json_name = "vmError"];</code>
     * @param string $var
     * @return $this
     */
    public function setVmError($var)
    {
        GPBUtil::checkString($var, True);
        $this->vm_error = $var;

        return $this;
    }

    /**
     * gas consumed by the transaction
     *
     * Generated from protobuf field <code>uint64 gas_used = 5 [json_name = "gasUsed"];</code>
     * @return int|string
     */
    public function getGasUsed()
    {
        return $this->gas_used;
    }

    /**
     * gas consumed by the transaction
     *
     * Generated from protobuf field <code>uint64 gas_used = 5 [json_name = "gasUsed"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setGasUsed($var)
    {
        GPBUtil::checkUint64($var);
        $this->gas_used = $var;

        return $this;
    }

}


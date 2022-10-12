<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ethermint/evm/v1/evm.proto

namespace Ethermint\Evm\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * TransactionLogs define the logs generated from a transaction execution
 * with a given hash. It it used for import/export data as transactions are not
 * persisted on blockchain state after an upgrade.
 *
 * Generated from protobuf message <code>ethermint.evm.v1.TransactionLogs</code>
 */
class TransactionLogs extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string hash = 1 [json_name = "hash"];</code>
     */
    protected $hash = '';
    /**
     * Generated from protobuf field <code>repeated .ethermint.evm.v1.Log logs = 2 [json_name = "logs"];</code>
     */
    private $logs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $hash
     *     @type \Ethermint\Evm\V1\Log[]|\Google\Protobuf\Internal\RepeatedField $logs
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ethermint\Evm\V1\Evm::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string hash = 1 [json_name = "hash"];</code>
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
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
     * Generated from protobuf field <code>repeated .ethermint.evm.v1.Log logs = 2 [json_name = "logs"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLogs()
    {
        return $this->logs;
    }

    /**
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

}


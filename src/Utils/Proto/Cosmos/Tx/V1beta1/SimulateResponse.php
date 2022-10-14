<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/tx/v1beta1/service.proto

namespace Cosmos\Tx\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SimulateResponse is the response type for the
 * Service.SimulateRPC method.
 *
 * Generated from protobuf message <code>cosmos.tx.v1beta1.SimulateResponse</code>
 */
class SimulateResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * gas_info is the information about gas used in the simulation.
     *
     * Generated from protobuf field <code>.cosmos.base.abci.v1beta1.GasInfo gas_info = 1 [json_name = "gasInfo"];</code>
     */
    protected $gas_info = null;
    /**
     * result is the result of the simulation.
     *
     * Generated from protobuf field <code>.cosmos.base.abci.v1beta1.Result result = 2 [json_name = "result"];</code>
     */
    protected $result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cosmos\Base\Abci\V1beta1\GasInfo $gas_info
     *           gas_info is the information about gas used in the simulation.
     *     @type \Cosmos\Base\Abci\V1beta1\Result $result
     *           result is the result of the simulation.
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Tx\V1beta1\GPBMetadata\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * gas_info is the information about gas used in the simulation.
     *
     * Generated from protobuf field <code>.cosmos.base.abci.v1beta1.GasInfo gas_info = 1 [json_name = "gasInfo"];</code>
     * @return \Cosmos\Base\Abci\V1beta1\GasInfo|null
     */
    public function getGasInfo()
    {
        return $this->gas_info;
    }

    public function hasGasInfo()
    {
        return isset($this->gas_info);
    }

    public function clearGasInfo()
    {
        unset($this->gas_info);
    }

    /**
     * gas_info is the information about gas used in the simulation.
     *
     * Generated from protobuf field <code>.cosmos.base.abci.v1beta1.GasInfo gas_info = 1 [json_name = "gasInfo"];</code>
     * @param \Cosmos\Base\Abci\V1beta1\GasInfo $var
     * @return $this
     */
    public function setGasInfo($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Base\Abci\V1beta1\GasInfo::class);
        $this->gas_info = $var;

        return $this;
    }

    /**
     * result is the result of the simulation.
     *
     * Generated from protobuf field <code>.cosmos.base.abci.v1beta1.Result result = 2 [json_name = "result"];</code>
     * @return \Cosmos\Base\Abci\V1beta1\Result|null
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
     * result is the result of the simulation.
     *
     * Generated from protobuf field <code>.cosmos.base.abci.v1beta1.Result result = 2 [json_name = "result"];</code>
     * @param \Cosmos\Base\Abci\V1beta1\Result $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Base\Abci\V1beta1\Result::class);
        $this->result = $var;

        return $this;
    }

}


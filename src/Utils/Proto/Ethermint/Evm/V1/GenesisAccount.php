<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ethermint/evm/v1/genesis.proto

namespace Ethermint\Evm\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GenesisAccount defines an account to be initialized in the genesis state.
 * Its main difference between with Geth's GenesisAccount is that it uses a
 * custom storage type and that it doesn't contain the private key field.
 *
 * Generated from protobuf message <code>ethermint.evm.v1.GenesisAccount</code>
 */
class GenesisAccount extends \Google\Protobuf\Internal\Message
{
    /**
     * address defines an ethereum hex formated address of an account
     *
     * Generated from protobuf field <code>string address = 1 [json_name = "address"];</code>
     */
    protected $address = '';
    /**
     * code defines the hex bytes of the account code.
     *
     * Generated from protobuf field <code>string code = 2 [json_name = "code"];</code>
     */
    protected $code = '';
    /**
     * storage defines the set of state key values for the account.
     *
     * Generated from protobuf field <code>repeated .ethermint.evm.v1.State storage = 3 [json_name = "storage", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "Storage"];</code>
     */
    private $storage;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $address
     *           address defines an ethereum hex formated address of an account
     *     @type string $code
     *           code defines the hex bytes of the account code.
     *     @type \Ethermint\Evm\V1\State[]|\Google\Protobuf\Internal\RepeatedField $storage
     *           storage defines the set of state key values for the account.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ethermint\Evm\V1\Genesis::initOnce();
        parent::__construct($data);
    }

    /**
     * address defines an ethereum hex formated address of an account
     *
     * Generated from protobuf field <code>string address = 1 [json_name = "address"];</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * address defines an ethereum hex formated address of an account
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
     * code defines the hex bytes of the account code.
     *
     * Generated from protobuf field <code>string code = 2 [json_name = "code"];</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * code defines the hex bytes of the account code.
     *
     * Generated from protobuf field <code>string code = 2 [json_name = "code"];</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;

        return $this;
    }

    /**
     * storage defines the set of state key values for the account.
     *
     * Generated from protobuf field <code>repeated .ethermint.evm.v1.State storage = 3 [json_name = "storage", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "Storage"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * storage defines the set of state key values for the account.
     *
     * Generated from protobuf field <code>repeated .ethermint.evm.v1.State storage = 3 [json_name = "storage", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "Storage"];</code>
     * @param \Ethermint\Evm\V1\State[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStorage($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ethermint\Evm\V1\State::class);
        $this->storage = $arr;

        return $this;
    }

}


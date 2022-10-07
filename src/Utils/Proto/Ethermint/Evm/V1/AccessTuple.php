<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ethermint/evm/v1/evm.proto

namespace Ethermint\Evm\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AccessTuple is the element type of an access list.
 *
 * Generated from protobuf message <code>ethermint.evm.v1.AccessTuple</code>
 */
class AccessTuple extends \Google\Protobuf\Internal\Message
{
    /**
     * hex formatted ethereum address
     *
     * Generated from protobuf field <code>string address = 1 [json_name = "address"];</code>
     */
    protected $address = '';
    /**
     * hex formatted hashes of the storage keys
     *
     * Generated from protobuf field <code>repeated string storage_keys = 2 [json_name = "storageKeys", (.gogoproto.jsontag) = "storageKeys"];</code>
     */
    private $storage_keys;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $address
     *           hex formatted ethereum address
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $storage_keys
     *           hex formatted hashes of the storage keys
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ethermint\Evm\V1\Evm::initOnce();
        parent::__construct($data);
    }

    /**
     * hex formatted ethereum address
     *
     * Generated from protobuf field <code>string address = 1 [json_name = "address"];</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * hex formatted ethereum address
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
     * hex formatted hashes of the storage keys
     *
     * Generated from protobuf field <code>repeated string storage_keys = 2 [json_name = "storageKeys", (.gogoproto.jsontag) = "storageKeys"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStorageKeys()
    {
        return $this->storage_keys;
    }

    /**
     * hex formatted hashes of the storage keys
     *
     * Generated from protobuf field <code>repeated string storage_keys = 2 [json_name = "storageKeys", (.gogoproto.jsontag) = "storageKeys"];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStorageKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->storage_keys = $arr;

        return $this;
    }

}


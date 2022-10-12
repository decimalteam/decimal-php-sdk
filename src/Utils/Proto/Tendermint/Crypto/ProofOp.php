<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/crypto/proof.proto

namespace Tendermint\Crypto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ProofOp defines an operation used for calculating Merkle root
 * The data could be arbitrary format, providing nessecary data
 * for example neighbouring node hash
 *
 * Generated from protobuf message <code>tendermint.crypto.ProofOp</code>
 */
class ProofOp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string type = 1 [json_name = "type"];</code>
     */
    protected $type = '';
    /**
     * Generated from protobuf field <code>bytes key = 2 [json_name = "key"];</code>
     */
    protected $key = '';
    /**
     * Generated from protobuf field <code>bytes data = 3 [json_name = "data"];</code>
     */
    protected $data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $type
     *     @type string $key
     *     @type string $data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Tendermint\Crypto\Proof::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string type = 1 [json_name = "type"];</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>string type = 1 [json_name = "type"];</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes key = 2 [json_name = "key"];</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Generated from protobuf field <code>bytes key = 2 [json_name = "key"];</code>
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
     * Generated from protobuf field <code>bytes data = 3 [json_name = "data"];</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
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

}


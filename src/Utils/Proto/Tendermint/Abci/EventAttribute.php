<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tendermint/abci/types.proto

namespace Tendermint\Abci;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EventAttribute is a single key-value pair, associated with an event.
 *
 * Generated from protobuf message <code>tendermint.abci.EventAttribute</code>
 */
class EventAttribute extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes key = 1 [json_name = "key"];</code>
     */
    protected $key = '';
    /**
     * Generated from protobuf field <code>bytes value = 2 [json_name = "value"];</code>
     */
    protected $value = '';
    /**
     * nondeterministic
     *
     * Generated from protobuf field <code>bool index = 3 [json_name = "index"];</code>
     */
    protected $index = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key
     *     @type string $value
     *     @type bool $index
     *           nondeterministic
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Tendermint\Abci\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes key = 1 [json_name = "key"];</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Generated from protobuf field <code>bytes key = 1 [json_name = "key"];</code>
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
     * Generated from protobuf field <code>bytes value = 2 [json_name = "value"];</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>bytes value = 2 [json_name = "value"];</code>
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
     * nondeterministic
     *
     * Generated from protobuf field <code>bool index = 3 [json_name = "index"];</code>
     * @return bool
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * nondeterministic
     *
     * Generated from protobuf field <code>bool index = 3 [json_name = "index"];</code>
     * @param bool $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkBool($var);
        $this->index = $var;

        return $this;
    }

}


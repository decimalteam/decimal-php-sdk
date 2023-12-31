<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/core/client/v1/client.proto

namespace Ibc\Core\Client\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * IdentifiedClientState defines a client state with an additional client
 * identifier field.
 *
 * Generated from protobuf message <code>ibc.core.client.v1.IdentifiedClientState</code>
 */
class IdentifiedClientState extends \Google\Protobuf\Internal\Message
{
    /**
     * client identifier
     *
     * Generated from protobuf field <code>string client_id = 1 [json_name = "clientId", (.gogoproto.moretags) = "yaml:\"client_id\""];</code>
     */
    protected $client_id = '';
    /**
     * client state
     *
     * Generated from protobuf field <code>.google.protobuf.Any client_state = 2 [json_name = "clientState", (.gogoproto.moretags) = "yaml:\"client_state\""];</code>
     */
    protected $client_state = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $client_id
     *           client identifier
     *     @type \Google\Protobuf\Any $client_state
     *           client state
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Core\Client\V1\Client::initOnce();
        parent::__construct($data);
    }

    /**
     * client identifier
     *
     * Generated from protobuf field <code>string client_id = 1 [json_name = "clientId", (.gogoproto.moretags) = "yaml:\"client_id\""];</code>
     * @return string
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * client identifier
     *
     * Generated from protobuf field <code>string client_id = 1 [json_name = "clientId", (.gogoproto.moretags) = "yaml:\"client_id\""];</code>
     * @param string $var
     * @return $this
     */
    public function setClientId($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_id = $var;

        return $this;
    }

    /**
     * client state
     *
     * Generated from protobuf field <code>.google.protobuf.Any client_state = 2 [json_name = "clientState", (.gogoproto.moretags) = "yaml:\"client_state\""];</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getClientState()
    {
        return $this->client_state;
    }

    public function hasClientState()
    {
        return isset($this->client_state);
    }

    public function clearClientState()
    {
        unset($this->client_state);
    }

    /**
     * client state
     *
     * Generated from protobuf field <code>.google.protobuf.Any client_state = 2 [json_name = "clientState", (.gogoproto.moretags) = "yaml:\"client_state\""];</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setClientState($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->client_state = $var;

        return $this;
    }

}


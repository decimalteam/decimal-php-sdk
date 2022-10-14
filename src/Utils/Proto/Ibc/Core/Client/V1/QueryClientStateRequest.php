<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/core/client/v1/query.proto

namespace Ibc\Core\Client\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryClientStateRequest is the request type for the Query/ClientState RPC
 * method
 *
 * Generated from protobuf message <code>ibc.core.client.v1.QueryClientStateRequest</code>
 */
class QueryClientStateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * client state unique identifier
     *
     * Generated from protobuf field <code>string client_id = 1 [json_name = "clientId"];</code>
     */
    protected $client_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $client_id
     *           client state unique identifier
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Core\Client\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * client state unique identifier
     *
     * Generated from protobuf field <code>string client_id = 1 [json_name = "clientId"];</code>
     * @return string
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * client state unique identifier
     *
     * Generated from protobuf field <code>string client_id = 1 [json_name = "clientId"];</code>
     * @param string $var
     * @return $this
     */
    public function setClientId($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_id = $var;

        return $this;
    }

}

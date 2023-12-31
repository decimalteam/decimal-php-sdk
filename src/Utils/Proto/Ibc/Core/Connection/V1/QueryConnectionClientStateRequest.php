<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/core/connection/v1/query.proto

namespace Ibc\Core\Connection\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryConnectionClientStateRequest is the request type for the
 * Query/ConnectionClientState RPC method
 *
 * Generated from protobuf message <code>ibc.core.connection.v1.QueryConnectionClientStateRequest</code>
 */
class QueryConnectionClientStateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * connection identifier
     *
     * Generated from protobuf field <code>string connection_id = 1 [json_name = "connectionId", (.gogoproto.moretags) = "yaml:\"connection_id\""];</code>
     */
    protected $connection_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $connection_id
     *           connection identifier
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Core\Connection\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * connection identifier
     *
     * Generated from protobuf field <code>string connection_id = 1 [json_name = "connectionId", (.gogoproto.moretags) = "yaml:\"connection_id\""];</code>
     * @return string
     */
    public function getConnectionId()
    {
        return $this->connection_id;
    }

    /**
     * connection identifier
     *
     * Generated from protobuf field <code>string connection_id = 1 [json_name = "connectionId", (.gogoproto.moretags) = "yaml:\"connection_id\""];</code>
     * @param string $var
     * @return $this
     */
    public function setConnectionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->connection_id = $var;

        return $this;
    }

}


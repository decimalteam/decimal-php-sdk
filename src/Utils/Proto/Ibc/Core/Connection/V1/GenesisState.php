<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/core/connection/v1/genesis.proto

namespace Ibc\Core\Connection\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GenesisState defines the ibc connection submodule's genesis state.
 *
 * Generated from protobuf message <code>ibc.core.connection.v1.GenesisState</code>
 */
class GenesisState extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .ibc.core.connection.v1.IdentifiedConnection connections = 1 [json_name = "connections", (.gogoproto.nullable) = false];</code>
     */
    private $connections;
    /**
     * Generated from protobuf field <code>repeated .ibc.core.connection.v1.ConnectionPaths client_connection_paths = 2 [json_name = "clientConnectionPaths", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"client_connection_paths\""];</code>
     */
    private $client_connection_paths;
    /**
     * the sequence for the next generated connection identifier
     *
     * Generated from protobuf field <code>uint64 next_connection_sequence = 3 [json_name = "nextConnectionSequence", (.gogoproto.moretags) = "yaml:\"next_connection_sequence\""];</code>
     */
    protected $next_connection_sequence = 0;
    /**
     * Generated from protobuf field <code>.ibc.core.connection.v1.Params params = 4 [json_name = "params", (.gogoproto.nullable) = false];</code>
     */
    protected $params = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ibc\Core\Connection\V1\IdentifiedConnection[]|\Google\Protobuf\Internal\RepeatedField $connections
     *     @type \Ibc\Core\Connection\V1\ConnectionPaths[]|\Google\Protobuf\Internal\RepeatedField $client_connection_paths
     *     @type int|string $next_connection_sequence
     *           the sequence for the next generated connection identifier
     *     @type \Ibc\Core\Connection\V1\Params $params
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Core\Connection\V1\Genesis::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .ibc.core.connection.v1.IdentifiedConnection connections = 1 [json_name = "connections", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConnections()
    {
        return $this->connections;
    }

    /**
     * Generated from protobuf field <code>repeated .ibc.core.connection.v1.IdentifiedConnection connections = 1 [json_name = "connections", (.gogoproto.nullable) = false];</code>
     * @param \Ibc\Core\Connection\V1\IdentifiedConnection[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConnections($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ibc\Core\Connection\V1\IdentifiedConnection::class);
        $this->connections = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .ibc.core.connection.v1.ConnectionPaths client_connection_paths = 2 [json_name = "clientConnectionPaths", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"client_connection_paths\""];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClientConnectionPaths()
    {
        return $this->client_connection_paths;
    }

    /**
     * Generated from protobuf field <code>repeated .ibc.core.connection.v1.ConnectionPaths client_connection_paths = 2 [json_name = "clientConnectionPaths", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"client_connection_paths\""];</code>
     * @param \Ibc\Core\Connection\V1\ConnectionPaths[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClientConnectionPaths($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ibc\Core\Connection\V1\ConnectionPaths::class);
        $this->client_connection_paths = $arr;

        return $this;
    }

    /**
     * the sequence for the next generated connection identifier
     *
     * Generated from protobuf field <code>uint64 next_connection_sequence = 3 [json_name = "nextConnectionSequence", (.gogoproto.moretags) = "yaml:\"next_connection_sequence\""];</code>
     * @return int|string
     */
    public function getNextConnectionSequence()
    {
        return $this->next_connection_sequence;
    }

    /**
     * the sequence for the next generated connection identifier
     *
     * Generated from protobuf field <code>uint64 next_connection_sequence = 3 [json_name = "nextConnectionSequence", (.gogoproto.moretags) = "yaml:\"next_connection_sequence\""];</code>
     * @param int|string $var
     * @return $this
     */
    public function setNextConnectionSequence($var)
    {
        GPBUtil::checkUint64($var);
        $this->next_connection_sequence = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ibc.core.connection.v1.Params params = 4 [json_name = "params", (.gogoproto.nullable) = false];</code>
     * @return \Ibc\Core\Connection\V1\Params|null
     */
    public function getParams()
    {
        return $this->params;
    }

    public function hasParams()
    {
        return isset($this->params);
    }

    public function clearParams()
    {
        unset($this->params);
    }

    /**
     * Generated from protobuf field <code>.ibc.core.connection.v1.Params params = 4 [json_name = "params", (.gogoproto.nullable) = false];</code>
     * @param \Ibc\Core\Connection\V1\Params $var
     * @return $this
     */
    public function setParams($var)
    {
        GPBUtil::checkMessage($var, \Ibc\Core\Connection\V1\Params::class);
        $this->params = $var;

        return $this;
    }

}

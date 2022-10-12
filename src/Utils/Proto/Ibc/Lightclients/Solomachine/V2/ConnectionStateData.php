<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/lightclients/solomachine/v2/solomachine.proto

namespace Ibc\Lightclients\Solomachine\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ConnectionStateData returns the SignBytes data for connection state
 * verification.
 *
 * Generated from protobuf message <code>ibc.lightclients.solomachine.v2.ConnectionStateData</code>
 */
class ConnectionStateData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes path = 1 [json_name = "path"];</code>
     */
    protected $path = '';
    /**
     * Generated from protobuf field <code>.ibc.core.connection.v1.ConnectionEnd connection = 2 [json_name = "connection"];</code>
     */
    protected $connection = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $path
     *     @type \Ibc\Core\Connection\V1\ConnectionEnd $connection
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Lightclients\Solomachine\V2\Solomachine::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes path = 1 [json_name = "path"];</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Generated from protobuf field <code>bytes path = 1 [json_name = "path"];</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, False);
        $this->path = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ibc.core.connection.v1.ConnectionEnd connection = 2 [json_name = "connection"];</code>
     * @return \Ibc\Core\Connection\V1\ConnectionEnd|null
     */
    public function getConnection()
    {
        return $this->connection;
    }

    public function hasConnection()
    {
        return isset($this->connection);
    }

    public function clearConnection()
    {
        unset($this->connection);
    }

    /**
     * Generated from protobuf field <code>.ibc.core.connection.v1.ConnectionEnd connection = 2 [json_name = "connection"];</code>
     * @param \Ibc\Core\Connection\V1\ConnectionEnd $var
     * @return $this
     */
    public function setConnection($var)
    {
        GPBUtil::checkMessage($var, \Ibc\Core\Connection\V1\ConnectionEnd::class);
        $this->connection = $var;

        return $this;
    }

}


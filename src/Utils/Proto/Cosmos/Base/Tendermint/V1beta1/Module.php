<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/base/tendermint/v1beta1/query.proto

namespace Cosmos\Base\Tendermint\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Module is the type for VersionInfo
 *
 * Generated from protobuf message <code>cosmos.base.tendermint.v1beta1.Module</code>
 */
class Module extends \Google\Protobuf\Internal\Message
{
    /**
     * module path
     *
     * Generated from protobuf field <code>string path = 1 [json_name = "path"];</code>
     */
    protected $path = '';
    /**
     * module version
     *
     * Generated from protobuf field <code>string version = 2 [json_name = "version"];</code>
     */
    protected $version = '';
    /**
     * checksum
     *
     * Generated from protobuf field <code>string sum = 3 [json_name = "sum"];</code>
     */
    protected $sum = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $path
     *           module path
     *     @type string $version
     *           module version
     *     @type string $sum
     *           checksum
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Base\Tendermint\V1beta1\GPBMetadata\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * module path
     *
     * Generated from protobuf field <code>string path = 1 [json_name = "path"];</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * module path
     *
     * Generated from protobuf field <code>string path = 1 [json_name = "path"];</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * module version
     *
     * Generated from protobuf field <code>string version = 2 [json_name = "version"];</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * module version
     *
     * Generated from protobuf field <code>string version = 2 [json_name = "version"];</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * checksum
     *
     * Generated from protobuf field <code>string sum = 3 [json_name = "sum"];</code>
     * @return string
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * checksum
     *
     * Generated from protobuf field <code>string sum = 3 [json_name = "sum"];</code>
     * @param string $var
     * @return $this
     */
    public function setSum($var)
    {
        GPBUtil::checkString($var, True);
        $this->sum = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/base/tendermint/v1beta1/query.proto

namespace Cosmos\Base\Tendermint\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * VersionInfo is the type for the GetNodeInfoResponse message.
 *
 * Generated from protobuf message <code>cosmos.base.tendermint.v1beta1.VersionInfo</code>
 */
class VersionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1 [json_name = "name"];</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string app_name = 2 [json_name = "appName"];</code>
     */
    protected $app_name = '';
    /**
     * Generated from protobuf field <code>string version = 3 [json_name = "version"];</code>
     */
    protected $version = '';
    /**
     * Generated from protobuf field <code>string git_commit = 4 [json_name = "gitCommit"];</code>
     */
    protected $git_commit = '';
    /**
     * Generated from protobuf field <code>string build_tags = 5 [json_name = "buildTags"];</code>
     */
    protected $build_tags = '';
    /**
     * Generated from protobuf field <code>string go_version = 6 [json_name = "goVersion"];</code>
     */
    protected $go_version = '';
    /**
     * Generated from protobuf field <code>repeated .cosmos.base.tendermint.v1beta1.Module build_deps = 7 [json_name = "buildDeps"];</code>
     */
    private $build_deps;
    /**
     * Generated from protobuf field <code>string cosmos_sdk_version = 8 [json_name = "cosmosSdkVersion"];</code>
     */
    protected $cosmos_sdk_version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type string $app_name
     *     @type string $version
     *     @type string $git_commit
     *     @type string $build_tags
     *     @type string $go_version
     *     @type array<\Cosmos\Base\Tendermint\V1beta1\Module>|\Google\Protobuf\Internal\RepeatedField $build_deps
     *     @type string $cosmos_sdk_version
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Base\Tendermint\V1beta1\GPBMetadata\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1 [json_name = "name"];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1 [json_name = "name"];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string app_name = 2 [json_name = "appName"];</code>
     * @return string
     */
    public function getAppName()
    {
        return $this->app_name;
    }

    /**
     * Generated from protobuf field <code>string app_name = 2 [json_name = "appName"];</code>
     * @param string $var
     * @return $this
     */
    public function setAppName($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string version = 3 [json_name = "version"];</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Generated from protobuf field <code>string version = 3 [json_name = "version"];</code>
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
     * Generated from protobuf field <code>string git_commit = 4 [json_name = "gitCommit"];</code>
     * @return string
     */
    public function getGitCommit()
    {
        return $this->git_commit;
    }

    /**
     * Generated from protobuf field <code>string git_commit = 4 [json_name = "gitCommit"];</code>
     * @param string $var
     * @return $this
     */
    public function setGitCommit($var)
    {
        GPBUtil::checkString($var, True);
        $this->git_commit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string build_tags = 5 [json_name = "buildTags"];</code>
     * @return string
     */
    public function getBuildTags()
    {
        return $this->build_tags;
    }

    /**
     * Generated from protobuf field <code>string build_tags = 5 [json_name = "buildTags"];</code>
     * @param string $var
     * @return $this
     */
    public function setBuildTags($var)
    {
        GPBUtil::checkString($var, True);
        $this->build_tags = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string go_version = 6 [json_name = "goVersion"];</code>
     * @return string
     */
    public function getGoVersion()
    {
        return $this->go_version;
    }

    /**
     * Generated from protobuf field <code>string go_version = 6 [json_name = "goVersion"];</code>
     * @param string $var
     * @return $this
     */
    public function setGoVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->go_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.base.tendermint.v1beta1.Module build_deps = 7 [json_name = "buildDeps"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBuildDeps()
    {
        return $this->build_deps;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.base.tendermint.v1beta1.Module build_deps = 7 [json_name = "buildDeps"];</code>
     * @param array<\Cosmos\Base\Tendermint\V1beta1\Module>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBuildDeps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Base\Tendermint\V1beta1\Module::class);
        $this->build_deps = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cosmos_sdk_version = 8 [json_name = "cosmosSdkVersion"];</code>
     * @return string
     */
    public function getCosmosSdkVersion()
    {
        return $this->cosmos_sdk_version;
    }

    /**
     * Generated from protobuf field <code>string cosmos_sdk_version = 8 [json_name = "cosmosSdkVersion"];</code>
     * @param string $var
     * @return $this
     */
    public function setCosmosSdkVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->cosmos_sdk_version = $var;

        return $this;
    }

}

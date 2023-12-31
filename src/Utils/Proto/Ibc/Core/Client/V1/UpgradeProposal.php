<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/core/client/v1/client.proto

namespace Ibc\Core\Client\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * UpgradeProposal is a gov Content type for initiating an IBC breaking
 * upgrade.
 *
 * Generated from protobuf message <code>ibc.core.client.v1.UpgradeProposal</code>
 */
class UpgradeProposal extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string title = 1 [json_name = "title"];</code>
     */
    protected $title = '';
    /**
     * Generated from protobuf field <code>string description = 2 [json_name = "description"];</code>
     */
    protected $description = '';
    /**
     * Generated from protobuf field <code>.cosmos.upgrade.v1beta1.Plan plan = 3 [json_name = "plan", (.gogoproto.nullable) = false];</code>
     */
    protected $plan = null;
    /**
     * An UpgradedClientState must be provided to perform an IBC breaking upgrade.
     * This will make the chain commit to the correct upgraded (self) client state
     * before the upgrade occurs, so that connecting chains can verify that the
     * new upgraded client is valid by verifying a proof on the previous version
     * of the chain. This will allow IBC connections to persist smoothly across
     * planned chain upgrades
     *
     * Generated from protobuf field <code>.google.protobuf.Any upgraded_client_state = 4 [json_name = "upgradedClientState", (.gogoproto.moretags) = "yaml:\"upgraded_client_state\""];</code>
     */
    protected $upgraded_client_state = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $title
     *     @type string $description
     *     @type \Cosmos\Upgrade\V1beta1\Plan $plan
     *     @type \Google\Protobuf\Any $upgraded_client_state
     *           An UpgradedClientState must be provided to perform an IBC breaking upgrade.
     *           This will make the chain commit to the correct upgraded (self) client state
     *           before the upgrade occurs, so that connecting chains can verify that the
     *           new upgraded client is valid by verifying a proof on the previous version
     *           of the chain. This will allow IBC connections to persist smoothly across
     *           planned chain upgrades
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Core\Client\V1\Client::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string title = 1 [json_name = "title"];</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 1 [json_name = "title"];</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 2 [json_name = "description"];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 2 [json_name = "description"];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cosmos.upgrade.v1beta1.Plan plan = 3 [json_name = "plan", (.gogoproto.nullable) = false];</code>
     * @return \Cosmos\Upgrade\V1beta1\Plan|null
     */
    public function getPlan()
    {
        return $this->plan;
    }

    public function hasPlan()
    {
        return isset($this->plan);
    }

    public function clearPlan()
    {
        unset($this->plan);
    }

    /**
     * Generated from protobuf field <code>.cosmos.upgrade.v1beta1.Plan plan = 3 [json_name = "plan", (.gogoproto.nullable) = false];</code>
     * @param \Cosmos\Upgrade\V1beta1\Plan $var
     * @return $this
     */
    public function setPlan($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Upgrade\V1beta1\Plan::class);
        $this->plan = $var;

        return $this;
    }

    /**
     * An UpgradedClientState must be provided to perform an IBC breaking upgrade.
     * This will make the chain commit to the correct upgraded (self) client state
     * before the upgrade occurs, so that connecting chains can verify that the
     * new upgraded client is valid by verifying a proof on the previous version
     * of the chain. This will allow IBC connections to persist smoothly across
     * planned chain upgrades
     *
     * Generated from protobuf field <code>.google.protobuf.Any upgraded_client_state = 4 [json_name = "upgradedClientState", (.gogoproto.moretags) = "yaml:\"upgraded_client_state\""];</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getUpgradedClientState()
    {
        return $this->upgraded_client_state;
    }

    public function hasUpgradedClientState()
    {
        return isset($this->upgraded_client_state);
    }

    public function clearUpgradedClientState()
    {
        unset($this->upgraded_client_state);
    }

    /**
     * An UpgradedClientState must be provided to perform an IBC breaking upgrade.
     * This will make the chain commit to the correct upgraded (self) client state
     * before the upgrade occurs, so that connecting chains can verify that the
     * new upgraded client is valid by verifying a proof on the previous version
     * of the chain. This will allow IBC connections to persist smoothly across
     * planned chain upgrades
     *
     * Generated from protobuf field <code>.google.protobuf.Any upgraded_client_state = 4 [json_name = "upgradedClientState", (.gogoproto.moretags) = "yaml:\"upgraded_client_state\""];</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setUpgradedClientState($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->upgraded_client_state = $var;

        return $this;
    }

}


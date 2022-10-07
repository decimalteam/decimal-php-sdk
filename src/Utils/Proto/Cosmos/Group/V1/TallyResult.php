<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/group/v1/types.proto

namespace Cosmos\Group\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * TallyResult represents the sum of weighted votes for each vote option.
 *
 * Generated from protobuf message <code>cosmos.group.v1.TallyResult</code>
 */
class TallyResult extends \Google\Protobuf\Internal\Message
{
    /**
     * yes_count is the weighted sum of yes votes.
     *
     * Generated from protobuf field <code>string yes_count = 1 [json_name = "yesCount"];</code>
     */
    protected $yes_count = '';
    /**
     * abstain_count is the weighted sum of abstainers.
     *
     * Generated from protobuf field <code>string abstain_count = 2 [json_name = "abstainCount"];</code>
     */
    protected $abstain_count = '';
    /**
     * no_count is the weighted sum of no votes.
     *
     * Generated from protobuf field <code>string no_count = 3 [json_name = "noCount"];</code>
     */
    protected $no_count = '';
    /**
     * no_with_veto_count is the weighted sum of veto.
     *
     * Generated from protobuf field <code>string no_with_veto_count = 4 [json_name = "noWithVetoCount"];</code>
     */
    protected $no_with_veto_count = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $yes_count
     *           yes_count is the weighted sum of yes votes.
     *     @type string $abstain_count
     *           abstain_count is the weighted sum of abstainers.
     *     @type string $no_count
     *           no_count is the weighted sum of no votes.
     *     @type string $no_with_veto_count
     *           no_with_veto_count is the weighted sum of veto.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Group\V1\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * yes_count is the weighted sum of yes votes.
     *
     * Generated from protobuf field <code>string yes_count = 1 [json_name = "yesCount"];</code>
     * @return string
     */
    public function getYesCount()
    {
        return $this->yes_count;
    }

    /**
     * yes_count is the weighted sum of yes votes.
     *
     * Generated from protobuf field <code>string yes_count = 1 [json_name = "yesCount"];</code>
     * @param string $var
     * @return $this
     */
    public function setYesCount($var)
    {
        GPBUtil::checkString($var, True);
        $this->yes_count = $var;

        return $this;
    }

    /**
     * abstain_count is the weighted sum of abstainers.
     *
     * Generated from protobuf field <code>string abstain_count = 2 [json_name = "abstainCount"];</code>
     * @return string
     */
    public function getAbstainCount()
    {
        return $this->abstain_count;
    }

    /**
     * abstain_count is the weighted sum of abstainers.
     *
     * Generated from protobuf field <code>string abstain_count = 2 [json_name = "abstainCount"];</code>
     * @param string $var
     * @return $this
     */
    public function setAbstainCount($var)
    {
        GPBUtil::checkString($var, True);
        $this->abstain_count = $var;

        return $this;
    }

    /**
     * no_count is the weighted sum of no votes.
     *
     * Generated from protobuf field <code>string no_count = 3 [json_name = "noCount"];</code>
     * @return string
     */
    public function getNoCount()
    {
        return $this->no_count;
    }

    /**
     * no_count is the weighted sum of no votes.
     *
     * Generated from protobuf field <code>string no_count = 3 [json_name = "noCount"];</code>
     * @param string $var
     * @return $this
     */
    public function setNoCount($var)
    {
        GPBUtil::checkString($var, True);
        $this->no_count = $var;

        return $this;
    }

    /**
     * no_with_veto_count is the weighted sum of veto.
     *
     * Generated from protobuf field <code>string no_with_veto_count = 4 [json_name = "noWithVetoCount"];</code>
     * @return string
     */
    public function getNoWithVetoCount()
    {
        return $this->no_with_veto_count;
    }

    /**
     * no_with_veto_count is the weighted sum of veto.
     *
     * Generated from protobuf field <code>string no_with_veto_count = 4 [json_name = "noWithVetoCount"];</code>
     * @param string $var
     * @return $this
     */
    public function setNoWithVetoCount($var)
    {
        GPBUtil::checkString($var, True);
        $this->no_with_veto_count = $var;

        return $this;
    }

}


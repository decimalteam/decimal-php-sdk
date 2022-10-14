<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/evidence/v1beta1/tx.proto

namespace Cosmos\Evidence\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MsgSubmitEvidence represents a message that supports submitting arbitrary
 * Evidence of misbehavior such as equivocation or counterfactual signing.
 *
 * Generated from protobuf message <code>cosmos.evidence.v1beta1.MsgSubmitEvidence</code>
 */
class MsgSubmitEvidence extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string submitter = 1 [json_name = "submitter"];</code>
     */
    protected $submitter = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Any evidence = 2 [json_name = "evidence", (.cosmos_proto.accepts_interface) = "Evidence"];</code>
     */
    protected $evidence = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $submitter
     *     @type \Google\Protobuf\Any $evidence
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Evidence\V1beta1\GPBMetadata\Tx::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string submitter = 1 [json_name = "submitter"];</code>
     * @return string
     */
    public function getSubmitter()
    {
        return $this->submitter;
    }

    /**
     * Generated from protobuf field <code>string submitter = 1 [json_name = "submitter"];</code>
     * @param string $var
     * @return $this
     */
    public function setSubmitter($var)
    {
        GPBUtil::checkString($var, True);
        $this->submitter = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any evidence = 2 [json_name = "evidence", (.cosmos_proto.accepts_interface) = "Evidence"];</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getEvidence()
    {
        return $this->evidence;
    }

    public function hasEvidence()
    {
        return isset($this->evidence);
    }

    public function clearEvidence()
    {
        unset($this->evidence);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any evidence = 2 [json_name = "evidence", (.cosmos_proto.accepts_interface) = "Evidence"];</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setEvidence($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->evidence = $var;

        return $this;
    }

}


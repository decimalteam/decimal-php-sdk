<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/evidence/v1beta1/tx.proto

namespace Cosmos\Evidence\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MsgSubmitEvidenceResponse defines the Msg/SubmitEvidence response type.
 *
 * Generated from protobuf message <code>cosmos.evidence.v1beta1.MsgSubmitEvidenceResponse</code>
 */
class MsgSubmitEvidenceResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * hash defines the hash of the evidence.
     *
     * Generated from protobuf field <code>bytes hash = 4 [json_name = "hash"];</code>
     */
    protected $hash = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $hash
     *           hash defines the hash of the evidence.
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Evidence\V1beta1\GPBMetadata\Tx::initOnce();
        parent::__construct($data);
    }

    /**
     * hash defines the hash of the evidence.
     *
     * Generated from protobuf field <code>bytes hash = 4 [json_name = "hash"];</code>
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * hash defines the hash of the evidence.
     *
     * Generated from protobuf field <code>bytes hash = 4 [json_name = "hash"];</code>
     * @param string $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->hash = $var;

        return $this;
    }

}

<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/feegrant/v1beta1/tx.proto

namespace Cosmos\Feegrant\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MsgRevokeAllowance removes any existing Allowance from Granter to Grantee.
 *
 * Generated from protobuf message <code>cosmos.feegrant.v1beta1.MsgRevokeAllowance</code>
 */
class MsgRevokeAllowance extends \Google\Protobuf\Internal\Message
{
    /**
     * granter is the address of the user granting an allowance of their funds.
     *
     * Generated from protobuf field <code>string granter = 1 [json_name = "granter", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $granter = '';
    /**
     * grantee is the address of the user being granted an allowance of another user's funds.
     *
     * Generated from protobuf field <code>string grantee = 2 [json_name = "grantee", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $grantee = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $granter
     *           granter is the address of the user granting an allowance of their funds.
     *     @type string $grantee
     *           grantee is the address of the user being granted an allowance of another user's funds.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Feegrant\V1Beta1\Tx::initOnce();
        parent::__construct($data);
    }

    /**
     * granter is the address of the user granting an allowance of their funds.
     *
     * Generated from protobuf field <code>string granter = 1 [json_name = "granter", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getGranter()
    {
        return $this->granter;
    }

    /**
     * granter is the address of the user granting an allowance of their funds.
     *
     * Generated from protobuf field <code>string granter = 1 [json_name = "granter", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setGranter($var)
    {
        GPBUtil::checkString($var, True);
        $this->granter = $var;

        return $this;
    }

    /**
     * grantee is the address of the user being granted an allowance of another user's funds.
     *
     * Generated from protobuf field <code>string grantee = 2 [json_name = "grantee", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getGrantee()
    {
        return $this->grantee;
    }

    /**
     * grantee is the address of the user being granted an allowance of another user's funds.
     *
     * Generated from protobuf field <code>string grantee = 2 [json_name = "grantee", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setGrantee($var)
    {
        GPBUtil::checkString($var, True);
        $this->grantee = $var;

        return $this;
    }

}


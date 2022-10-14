<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/validator/v1/tx.proto

namespace Decimal\Validator\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MsgRedelegateNFT defines a SDK message for performing a redelegation
 * of NFTs from a delegator and source validator to a destination validator.
 *
 * Generated from protobuf message <code>decimal.validator.v1.MsgRedelegateNFT</code>
 */
class MsgRedelegateNFT extends \Google\Protobuf\Internal\Message
{
    /**
     * delegator is the bech32-encoded address of the delegator.
     *
     * Generated from protobuf field <code>string delegator = 1 [json_name = "delegator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $delegator = '';
    /**
     * validator_src is the bech32-encoded address of the source validator.
     *
     * Generated from protobuf field <code>string validator_src = 2 [json_name = "validatorSrc", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $validator_src = '';
    /**
     * validator_dst is the bech32-encoded address of the destination validator.
     *
     * Generated from protobuf field <code>string validator_dst = 3 [json_name = "validatorDst", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $validator_dst = '';
    /**
     * token_id defines the NFT token ID.
     *
     * Generated from protobuf field <code>string token_id = 4 [json_name = "tokenId", (.gogoproto.customname) = "TokenID"];</code>
     */
    protected $token_id = '';
    /**
     * sub_token_ids defines list of NFT sub-token IDs.
     *
     * Generated from protobuf field <code>repeated int64 sub_token_ids = 5 [json_name = "subTokenIds", (.gogoproto.customname) = "SubTokenIDs"];</code>
     */
    private $sub_token_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $delegator
     *           delegator is the bech32-encoded address of the delegator.
     *     @type string $validator_src
     *           validator_src is the bech32-encoded address of the source validator.
     *     @type string $validator_dst
     *           validator_dst is the bech32-encoded address of the destination validator.
     *     @type string $token_id
     *           token_id defines the NFT token ID.
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $sub_token_ids
     *           sub_token_ids defines list of NFT sub-token IDs.
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Validator\V1\GPBMetadata\Tx::initOnce();
        parent::__construct($data);
    }

    /**
     * delegator is the bech32-encoded address of the delegator.
     *
     * Generated from protobuf field <code>string delegator = 1 [json_name = "delegator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getDelegator()
    {
        return $this->delegator;
    }

    /**
     * delegator is the bech32-encoded address of the delegator.
     *
     * Generated from protobuf field <code>string delegator = 1 [json_name = "delegator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setDelegator($var)
    {
        GPBUtil::checkString($var, True);
        $this->delegator = $var;

        return $this;
    }

    /**
     * validator_src is the bech32-encoded address of the source validator.
     *
     * Generated from protobuf field <code>string validator_src = 2 [json_name = "validatorSrc", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getValidatorSrc()
    {
        return $this->validator_src;
    }

    /**
     * validator_src is the bech32-encoded address of the source validator.
     *
     * Generated from protobuf field <code>string validator_src = 2 [json_name = "validatorSrc", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setValidatorSrc($var)
    {
        GPBUtil::checkString($var, True);
        $this->validator_src = $var;

        return $this;
    }

    /**
     * validator_dst is the bech32-encoded address of the destination validator.
     *
     * Generated from protobuf field <code>string validator_dst = 3 [json_name = "validatorDst", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getValidatorDst()
    {
        return $this->validator_dst;
    }

    /**
     * validator_dst is the bech32-encoded address of the destination validator.
     *
     * Generated from protobuf field <code>string validator_dst = 3 [json_name = "validatorDst", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setValidatorDst($var)
    {
        GPBUtil::checkString($var, True);
        $this->validator_dst = $var;

        return $this;
    }

    /**
     * token_id defines the NFT token ID.
     *
     * Generated from protobuf field <code>string token_id = 4 [json_name = "tokenId", (.gogoproto.customname) = "TokenID"];</code>
     * @return string
     */
    public function getTokenId()
    {
        return $this->token_id;
    }

    /**
     * token_id defines the NFT token ID.
     *
     * Generated from protobuf field <code>string token_id = 4 [json_name = "tokenId", (.gogoproto.customname) = "TokenID"];</code>
     * @param string $var
     * @return $this
     */
    public function setTokenId($var)
    {
        GPBUtil::checkString($var, True);
        $this->token_id = $var;

        return $this;
    }

    /**
     * sub_token_ids defines list of NFT sub-token IDs.
     *
     * Generated from protobuf field <code>repeated int64 sub_token_ids = 5 [json_name = "subTokenIds", (.gogoproto.customname) = "SubTokenIDs"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubTokenIds()
    {
        return $this->sub_token_ids;
    }

    /**
     * sub_token_ids defines list of NFT sub-token IDs.
     *
     * Generated from protobuf field <code>repeated int64 sub_token_ids = 5 [json_name = "subTokenIds", (.gogoproto.customname) = "SubTokenIDs"];</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubTokenIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->sub_token_ids = $arr;

        return $this;
    }

}


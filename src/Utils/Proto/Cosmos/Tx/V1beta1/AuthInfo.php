<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/tx/v1beta1/tx.proto

namespace Cosmos\Tx\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AuthInfo describes the fee and signer modes that are used to sign a
 * transaction.
 *
 * Generated from protobuf message <code>cosmos.tx.v1beta1.AuthInfo</code>
 */
class AuthInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * signer_infos defines the signing modes for the required signers. The number
     * and order of elements must match the required signers from TxBody's
     * messages. The first element is the primary signer and the one which pays
     * the fee.
     *
     * Generated from protobuf field <code>repeated .cosmos.tx.v1beta1.SignerInfo signer_infos = 1 [json_name = "signerInfos"];</code>
     */
    private $signer_infos;
    /**
     * Fee is the fee and gas limit for the transaction. The first signer is the
     * primary signer and the one which pays the fee. The fee can be calculated
     * based on the cost of evaluating the body and doing signature verification
     * of the signers. This can be estimated via simulation.
     *
     * Generated from protobuf field <code>.cosmos.tx.v1beta1.Fee fee = 2 [json_name = "fee"];</code>
     */
    protected $fee = null;
    /**
     * Tip is the optional tip used for transactions fees paid in another denom.
     * This field is ignored if the chain didn't enable tips, i.e. didn't add the
     * `TipDecorator` in its posthandler.
     * Since: cosmos-sdk 0.46
     *
     * Generated from protobuf field <code>.cosmos.tx.v1beta1.Tip tip = 3 [json_name = "tip"];</code>
     */
    protected $tip = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cosmos\Tx\V1beta1\SignerInfo[]|\Google\Protobuf\Internal\RepeatedField $signer_infos
     *           signer_infos defines the signing modes for the required signers. The number
     *           and order of elements must match the required signers from TxBody's
     *           messages. The first element is the primary signer and the one which pays
     *           the fee.
     *     @type \Cosmos\Tx\V1beta1\Fee $fee
     *           Fee is the fee and gas limit for the transaction. The first signer is the
     *           primary signer and the one which pays the fee. The fee can be calculated
     *           based on the cost of evaluating the body and doing signature verification
     *           of the signers. This can be estimated via simulation.
     *     @type \Cosmos\Tx\V1beta1\Tip $tip
     *           Tip is the optional tip used for transactions fees paid in another denom.
     *           This field is ignored if the chain didn't enable tips, i.e. didn't add the
     *           `TipDecorator` in its posthandler.
     *           Since: cosmos-sdk 0.46
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Tx\V1Beta1\Tx::initOnce();
        parent::__construct($data);
    }

    /**
     * signer_infos defines the signing modes for the required signers. The number
     * and order of elements must match the required signers from TxBody's
     * messages. The first element is the primary signer and the one which pays
     * the fee.
     *
     * Generated from protobuf field <code>repeated .cosmos.tx.v1beta1.SignerInfo signer_infos = 1 [json_name = "signerInfos"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSignerInfos()
    {
        return $this->signer_infos;
    }

    /**
     * signer_infos defines the signing modes for the required signers. The number
     * and order of elements must match the required signers from TxBody's
     * messages. The first element is the primary signer and the one which pays
     * the fee.
     *
     * Generated from protobuf field <code>repeated .cosmos.tx.v1beta1.SignerInfo signer_infos = 1 [json_name = "signerInfos"];</code>
     * @param \Cosmos\Tx\V1beta1\SignerInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSignerInfos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Tx\V1beta1\SignerInfo::class);
        $this->signer_infos = $arr;

        return $this;
    }

    /**
     * Fee is the fee and gas limit for the transaction. The first signer is the
     * primary signer and the one which pays the fee. The fee can be calculated
     * based on the cost of evaluating the body and doing signature verification
     * of the signers. This can be estimated via simulation.
     *
     * Generated from protobuf field <code>.cosmos.tx.v1beta1.Fee fee = 2 [json_name = "fee"];</code>
     * @return \Cosmos\Tx\V1beta1\Fee|null
     */
    public function getFee()
    {
        return $this->fee;
    }

    public function hasFee()
    {
        return isset($this->fee);
    }

    public function clearFee()
    {
        unset($this->fee);
    }

    /**
     * Fee is the fee and gas limit for the transaction. The first signer is the
     * primary signer and the one which pays the fee. The fee can be calculated
     * based on the cost of evaluating the body and doing signature verification
     * of the signers. This can be estimated via simulation.
     *
     * Generated from protobuf field <code>.cosmos.tx.v1beta1.Fee fee = 2 [json_name = "fee"];</code>
     * @param \Cosmos\Tx\V1beta1\Fee $var
     * @return $this
     */
    public function setFee($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Tx\V1beta1\Fee::class);
        $this->fee = $var;

        return $this;
    }

    /**
     * Tip is the optional tip used for transactions fees paid in another denom.
     * This field is ignored if the chain didn't enable tips, i.e. didn't add the
     * `TipDecorator` in its posthandler.
     * Since: cosmos-sdk 0.46
     *
     * Generated from protobuf field <code>.cosmos.tx.v1beta1.Tip tip = 3 [json_name = "tip"];</code>
     * @return \Cosmos\Tx\V1beta1\Tip|null
     */
    public function getTip()
    {
        return $this->tip;
    }

    public function hasTip()
    {
        return isset($this->tip);
    }

    public function clearTip()
    {
        unset($this->tip);
    }

    /**
     * Tip is the optional tip used for transactions fees paid in another denom.
     * This field is ignored if the chain didn't enable tips, i.e. didn't add the
     * `TipDecorator` in its posthandler.
     * Since: cosmos-sdk 0.46
     *
     * Generated from protobuf field <code>.cosmos.tx.v1beta1.Tip tip = 3 [json_name = "tip"];</code>
     * @param \Cosmos\Tx\V1beta1\Tip $var
     * @return $this
     */
    public function setTip($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Tx\V1beta1\Tip::class);
        $this->tip = $var;

        return $this;
    }

}


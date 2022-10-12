<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/tx/signing/v1beta1/signing.proto

namespace Cosmos\Tx\Signing\V1beta1\SignatureDescriptor;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Data represents signature data
 *
 * Generated from protobuf message <code>cosmos.tx.signing.v1beta1.SignatureDescriptor.Data</code>
 */
class Data extends \Google\Protobuf\Internal\Message
{
    protected $sum;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cosmos\Tx\Signing\V1beta1\SignatureDescriptor\Data\Single $single
     *           single represents a single signer
     *     @type \Cosmos\Tx\Signing\V1beta1\SignatureDescriptor\Data\Multi $multi
     *           multi represents a multisig signer
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Tx\Signing\V1Beta1\Signing::initOnce();
        parent::__construct($data);
    }

    /**
     * single represents a single signer
     *
     * Generated from protobuf field <code>.cosmos.tx.signing.v1beta1.SignatureDescriptor.Data.Single single = 1 [json_name = "single"];</code>
     * @return \Cosmos\Tx\Signing\V1beta1\SignatureDescriptor\Data\Single|null
     */
    public function getSingle()
    {
        return $this->readOneof(1);
    }

    public function hasSingle()
    {
        return $this->hasOneof(1);
    }

    /**
     * single represents a single signer
     *
     * Generated from protobuf field <code>.cosmos.tx.signing.v1beta1.SignatureDescriptor.Data.Single single = 1 [json_name = "single"];</code>
     * @param \Cosmos\Tx\Signing\V1beta1\SignatureDescriptor\Data\Single $var
     * @return $this
     */
    public function setSingle($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Tx\Signing\V1beta1\SignatureDescriptor\Data\Single::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * multi represents a multisig signer
     *
     * Generated from protobuf field <code>.cosmos.tx.signing.v1beta1.SignatureDescriptor.Data.Multi multi = 2 [json_name = "multi"];</code>
     * @return \Cosmos\Tx\Signing\V1beta1\SignatureDescriptor\Data\Multi|null
     */
    public function getMulti()
    {
        return $this->readOneof(2);
    }

    public function hasMulti()
    {
        return $this->hasOneof(2);
    }

    /**
     * multi represents a multisig signer
     *
     * Generated from protobuf field <code>.cosmos.tx.signing.v1beta1.SignatureDescriptor.Data.Multi multi = 2 [json_name = "multi"];</code>
     * @param \Cosmos\Tx\Signing\V1beta1\SignatureDescriptor\Data\Multi $var
     * @return $this
     */
    public function setMulti($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Tx\Signing\V1beta1\SignatureDescriptor\Data\Multi::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSum()
    {
        return $this->whichOneof("sum");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Data::class, \Cosmos\Tx\Signing\V1beta1\SignatureDescriptor_Data::class);


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/base/reflection/v2alpha1/reflection.proto

namespace Cosmos\Base\Reflection\V2alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ConfigurationDescriptor contains metadata information on the sdk.Config
 *
 * Generated from protobuf message <code>cosmos.base.reflection.v2alpha1.ConfigurationDescriptor</code>
 */
class ConfigurationDescriptor extends \Google\Protobuf\Internal\Message
{
    /**
     * bech32_account_address_prefix is the account address prefix
     *
     * Generated from protobuf field <code>string bech32_account_address_prefix = 1 [json_name = "bech32AccountAddressPrefix"];</code>
     */
    protected $bech32_account_address_prefix = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $bech32_account_address_prefix
     *           bech32_account_address_prefix is the account address prefix
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Base\Reflection\V2alpha1\GPBMetadata\Reflection::initOnce();
        parent::__construct($data);
    }

    /**
     * bech32_account_address_prefix is the account address prefix
     *
     * Generated from protobuf field <code>string bech32_account_address_prefix = 1 [json_name = "bech32AccountAddressPrefix"];</code>
     * @return string
     */
    public function getBech32AccountAddressPrefix()
    {
        return $this->bech32_account_address_prefix;
    }

    /**
     * bech32_account_address_prefix is the account address prefix
     *
     * Generated from protobuf field <code>string bech32_account_address_prefix = 1 [json_name = "bech32AccountAddressPrefix"];</code>
     * @param string $var
     * @return $this
     */
    public function setBech32AccountAddressPrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->bech32_account_address_prefix = $var;

        return $this;
    }

}


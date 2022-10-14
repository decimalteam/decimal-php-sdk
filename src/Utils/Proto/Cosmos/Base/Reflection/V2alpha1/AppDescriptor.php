<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/base/reflection/v2alpha1/reflection.proto

namespace Cosmos\Base\Reflection\V2alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AppDescriptor describes a cosmos-sdk based application
 *
 * Generated from protobuf message <code>cosmos.base.reflection.v2alpha1.AppDescriptor</code>
 */
class AppDescriptor extends \Google\Protobuf\Internal\Message
{
    /**
     * AuthnDescriptor provides information on how to authenticate transactions on the application
     * NOTE: experimental and subject to change in future releases.
     *
     * Generated from protobuf field <code>.cosmos.base.reflection.v2alpha1.AuthnDescriptor authn = 1 [json_name = "authn"];</code>
     */
    protected $authn = null;
    /**
     * chain provides the chain descriptor
     *
     * Generated from protobuf field <code>.cosmos.base.reflection.v2alpha1.ChainDescriptor chain = 2 [json_name = "chain"];</code>
     */
    protected $chain = null;
    /**
     * codec provides metadata information regarding codec related types
     *
     * Generated from protobuf field <code>.cosmos.base.reflection.v2alpha1.CodecDescriptor codec = 3 [json_name = "codec"];</code>
     */
    protected $codec = null;
    /**
     * configuration provides metadata information regarding the sdk.Config type
     *
     * Generated from protobuf field <code>.cosmos.base.reflection.v2alpha1.ConfigurationDescriptor configuration = 4 [json_name = "configuration"];</code>
     */
    protected $configuration = null;
    /**
     * query_services provides metadata information regarding the available queriable endpoints
     *
     * Generated from protobuf field <code>.cosmos.base.reflection.v2alpha1.QueryServicesDescriptor query_services = 5 [json_name = "queryServices"];</code>
     */
    protected $query_services = null;
    /**
     * tx provides metadata information regarding how to send transactions to the given application
     *
     * Generated from protobuf field <code>.cosmos.base.reflection.v2alpha1.TxDescriptor tx = 6 [json_name = "tx"];</code>
     */
    protected $tx = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cosmos\Base\Reflection\V2alpha1\AuthnDescriptor $authn
     *           AuthnDescriptor provides information on how to authenticate transactions on the application
     *           NOTE: experimental and subject to change in future releases.
     *     @type \Cosmos\Base\Reflection\V2alpha1\ChainDescriptor $chain
     *           chain provides the chain descriptor
     *     @type \Cosmos\Base\Reflection\V2alpha1\CodecDescriptor $codec
     *           codec provides metadata information regarding codec related types
     *     @type \Cosmos\Base\Reflection\V2alpha1\ConfigurationDescriptor $configuration
     *           configuration provides metadata information regarding the sdk.Config type
     *     @type \Cosmos\Base\Reflection\V2alpha1\QueryServicesDescriptor $query_services
     *           query_services provides metadata information regarding the available queriable endpoints
     *     @type \Cosmos\Base\Reflection\V2alpha1\TxDescriptor $tx
     *           tx provides metadata information regarding how to send transactions to the given application
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Base\Reflection\V2alpha1\GPBMetadata\Reflection::initOnce();
        parent::__construct($data);
    }

    /**
     * AuthnDescriptor provides information on how to authenticate transactions on the application
     * NOTE: experimental and subject to change in future releases.
     *
     * Generated from protobuf field <code>.cosmos.base.reflection.v2alpha1.AuthnDescriptor authn = 1 [json_name = "authn"];</code>
     * @return \Cosmos\Base\Reflection\V2alpha1\AuthnDescriptor|null
     */
    public function getAuthn()
    {
        return $this->authn;
    }

    public function hasAuthn()
    {
        return isset($this->authn);
    }

    public function clearAuthn()
    {
        unset($this->authn);
    }

    /**
     * AuthnDescriptor provides information on how to authenticate transactions on the application
     * NOTE: experimental and subject to change in future releases.
     *
     * Generated from protobuf field <code>.cosmos.base.reflection.v2alpha1.AuthnDescriptor authn = 1 [json_name = "authn"];</code>
     * @param \Cosmos\Base\Reflection\V2alpha1\AuthnDescriptor $var
     * @return $this
     */
    public function setAuthn($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Base\Reflection\V2alpha1\AuthnDescriptor::class);
        $this->authn = $var;

        return $this;
    }

    /**
     * chain provides the chain descriptor
     *
     * Generated from protobuf field <code>.cosmos.base.reflection.v2alpha1.ChainDescriptor chain = 2 [json_name = "chain"];</code>
     * @return \Cosmos\Base\Reflection\V2alpha1\ChainDescriptor|null
     */
    public function getChain()
    {
        return $this->chain;
    }

    public function hasChain()
    {
        return isset($this->chain);
    }

    public function clearChain()
    {
        unset($this->chain);
    }

    /**
     * chain provides the chain descriptor
     *
     * Generated from protobuf field <code>.cosmos.base.reflection.v2alpha1.ChainDescriptor chain = 2 [json_name = "chain"];</code>
     * @param \Cosmos\Base\Reflection\V2alpha1\ChainDescriptor $var
     * @return $this
     */
    public function setChain($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Base\Reflection\V2alpha1\ChainDescriptor::class);
        $this->chain = $var;

        return $this;
    }

    /**
     * codec provides metadata information regarding codec related types
     *
     * Generated from protobuf field <code>.cosmos.base.reflection.v2alpha1.CodecDescriptor codec = 3 [json_name = "codec"];</code>
     * @return \Cosmos\Base\Reflection\V2alpha1\CodecDescriptor|null
     */
    public function getCodec()
    {
        return $this->codec;
    }

    public function hasCodec()
    {
        return isset($this->codec);
    }

    public function clearCodec()
    {
        unset($this->codec);
    }

    /**
     * codec provides metadata information regarding codec related types
     *
     * Generated from protobuf field <code>.cosmos.base.reflection.v2alpha1.CodecDescriptor codec = 3 [json_name = "codec"];</code>
     * @param \Cosmos\Base\Reflection\V2alpha1\CodecDescriptor $var
     * @return $this
     */
    public function setCodec($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Base\Reflection\V2alpha1\CodecDescriptor::class);
        $this->codec = $var;

        return $this;
    }

    /**
     * configuration provides metadata information regarding the sdk.Config type
     *
     * Generated from protobuf field <code>.cosmos.base.reflection.v2alpha1.ConfigurationDescriptor configuration = 4 [json_name = "configuration"];</code>
     * @return \Cosmos\Base\Reflection\V2alpha1\ConfigurationDescriptor|null
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    public function hasConfiguration()
    {
        return isset($this->configuration);
    }

    public function clearConfiguration()
    {
        unset($this->configuration);
    }

    /**
     * configuration provides metadata information regarding the sdk.Config type
     *
     * Generated from protobuf field <code>.cosmos.base.reflection.v2alpha1.ConfigurationDescriptor configuration = 4 [json_name = "configuration"];</code>
     * @param \Cosmos\Base\Reflection\V2alpha1\ConfigurationDescriptor $var
     * @return $this
     */
    public function setConfiguration($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Base\Reflection\V2alpha1\ConfigurationDescriptor::class);
        $this->configuration = $var;

        return $this;
    }

    /**
     * query_services provides metadata information regarding the available queriable endpoints
     *
     * Generated from protobuf field <code>.cosmos.base.reflection.v2alpha1.QueryServicesDescriptor query_services = 5 [json_name = "queryServices"];</code>
     * @return \Cosmos\Base\Reflection\V2alpha1\QueryServicesDescriptor|null
     */
    public function getQueryServices()
    {
        return $this->query_services;
    }

    public function hasQueryServices()
    {
        return isset($this->query_services);
    }

    public function clearQueryServices()
    {
        unset($this->query_services);
    }

    /**
     * query_services provides metadata information regarding the available queriable endpoints
     *
     * Generated from protobuf field <code>.cosmos.base.reflection.v2alpha1.QueryServicesDescriptor query_services = 5 [json_name = "queryServices"];</code>
     * @param \Cosmos\Base\Reflection\V2alpha1\QueryServicesDescriptor $var
     * @return $this
     */
    public function setQueryServices($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Base\Reflection\V2alpha1\QueryServicesDescriptor::class);
        $this->query_services = $var;

        return $this;
    }

    /**
     * tx provides metadata information regarding how to send transactions to the given application
     *
     * Generated from protobuf field <code>.cosmos.base.reflection.v2alpha1.TxDescriptor tx = 6 [json_name = "tx"];</code>
     * @return \Cosmos\Base\Reflection\V2alpha1\TxDescriptor|null
     */
    public function getTx()
    {
        return $this->tx;
    }

    public function hasTx()
    {
        return isset($this->tx);
    }

    public function clearTx()
    {
        unset($this->tx);
    }

    /**
     * tx provides metadata information regarding how to send transactions to the given application
     *
     * Generated from protobuf field <code>.cosmos.base.reflection.v2alpha1.TxDescriptor tx = 6 [json_name = "tx"];</code>
     * @param \Cosmos\Base\Reflection\V2alpha1\TxDescriptor $var
     * @return $this
     */
    public function setTx($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Base\Reflection\V2alpha1\TxDescriptor::class);
        $this->tx = $var;

        return $this;
    }

}

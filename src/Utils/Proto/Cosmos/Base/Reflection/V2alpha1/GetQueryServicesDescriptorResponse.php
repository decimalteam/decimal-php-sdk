<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/base/reflection/v2alpha1/reflection.proto

namespace Cosmos\Base\Reflection\V2alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GetQueryServicesDescriptorResponse is the response returned by the GetQueryServicesDescriptor RPC
 *
 * Generated from protobuf message <code>cosmos.base.reflection.v2alpha1.GetQueryServicesDescriptorResponse</code>
 */
class GetQueryServicesDescriptorResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * queries provides information on the available queryable services
     *
     * Generated from protobuf field <code>.cosmos.base.reflection.v2alpha1.QueryServicesDescriptor queries = 1 [json_name = "queries"];</code>
     */
    protected $queries = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cosmos\Base\Reflection\V2alpha1\QueryServicesDescriptor $queries
     *           queries provides information on the available queryable services
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Base\Reflection\V2alpha1\GPBMetadata\Reflection::initOnce();
        parent::__construct($data);
    }

    /**
     * queries provides information on the available queryable services
     *
     * Generated from protobuf field <code>.cosmos.base.reflection.v2alpha1.QueryServicesDescriptor queries = 1 [json_name = "queries"];</code>
     * @return \Cosmos\Base\Reflection\V2alpha1\QueryServicesDescriptor|null
     */
    public function getQueries()
    {
        return $this->queries;
    }

    public function hasQueries()
    {
        return isset($this->queries);
    }

    public function clearQueries()
    {
        unset($this->queries);
    }

    /**
     * queries provides information on the available queryable services
     *
     * Generated from protobuf field <code>.cosmos.base.reflection.v2alpha1.QueryServicesDescriptor queries = 1 [json_name = "queries"];</code>
     * @param \Cosmos\Base\Reflection\V2alpha1\QueryServicesDescriptor $var
     * @return $this
     */
    public function setQueries($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Base\Reflection\V2alpha1\QueryServicesDescriptor::class);
        $this->queries = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/nft/v1beta1/query.proto

namespace Cosmos\Nft\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryClassesResponse is the response type for the Query/Classes RPC method
 *
 * Generated from protobuf message <code>cosmos.nft.v1beta1.QueryClassesResponse</code>
 */
class QueryClassesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .cosmos.nft.v1beta1.Class classes = 1 [json_name = "classes"];</code>
     */
    private $classes;
    /**
     * Generated from protobuf field <code>.cosmos.base.query.v1beta1.PageResponse pagination = 2 [json_name = "pagination"];</code>
     */
    protected $pagination = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cosmos\Nft\V1beta1\PBClass[]|\Google\Protobuf\Internal\RepeatedField $classes
     *     @type \Cosmos\Base\Query\V1beta1\PageResponse $pagination
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Nft\V1Beta1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.nft.v1beta1.Class classes = 1 [json_name = "classes"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * Generated from protobuf field <code>repeated .cosmos.nft.v1beta1.Class classes = 1 [json_name = "classes"];</code>
     * @param \Cosmos\Nft\V1beta1\PBClass[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClasses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Nft\V1beta1\PBClass::class);
        $this->classes = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cosmos.base.query.v1beta1.PageResponse pagination = 2 [json_name = "pagination"];</code>
     * @return \Cosmos\Base\Query\V1beta1\PageResponse|null
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    public function hasPagination()
    {
        return isset($this->pagination);
    }

    public function clearPagination()
    {
        unset($this->pagination);
    }

    /**
     * Generated from protobuf field <code>.cosmos.base.query.v1beta1.PageResponse pagination = 2 [json_name = "pagination"];</code>
     * @param \Cosmos\Base\Query\V1beta1\PageResponse $var
     * @return $this
     */
    public function setPagination($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Base\Query\V1beta1\PageResponse::class);
        $this->pagination = $var;

        return $this;
    }

}


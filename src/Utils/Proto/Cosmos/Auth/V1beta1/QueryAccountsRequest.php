<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/auth/v1beta1/query.proto

namespace Cosmos\Auth\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryAccountsRequest is the request type for the Query/Accounts RPC method.
 *
 * Generated from protobuf message <code>cosmos.auth.v1beta1.QueryAccountsRequest</code>
 */
class QueryAccountsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * pagination defines an optional pagination for the request.
     *
     * Generated from protobuf field <code>.cosmos.base.query.v1beta1.PageRequest pagination = 1 [json_name = "pagination"];</code>
     */
    protected $pagination = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cosmos\Base\Query\V1beta1\PageRequest $pagination
     *           pagination defines an optional pagination for the request.
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Auth\V1beta1\GPBMetadata\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * pagination defines an optional pagination for the request.
     *
     * Generated from protobuf field <code>.cosmos.base.query.v1beta1.PageRequest pagination = 1 [json_name = "pagination"];</code>
     * @return \Cosmos\Base\Query\V1beta1\PageRequest|null
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
     * pagination defines an optional pagination for the request.
     *
     * Generated from protobuf field <code>.cosmos.base.query.v1beta1.PageRequest pagination = 1 [json_name = "pagination"];</code>
     * @param \Cosmos\Base\Query\V1beta1\PageRequest $var
     * @return $this
     */
    public function setPagination($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Base\Query\V1beta1\PageRequest::class);
        $this->pagination = $var;

        return $this;
    }

}

<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/multisig/v1/query.proto

namespace Decimal\Multisig\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryWalletsRequest is request type for the Query/Wallets RPC method.
 *
 * Generated from protobuf message <code>decimal.multisig.v1.QueryWalletsRequest</code>
 */
class QueryWalletsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string owner = 1 [json_name = "owner", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $owner = '';
    /**
     * Generated from protobuf field <code>.cosmos.base.query.v1beta1.PageRequest pagination = 2 [json_name = "pagination"];</code>
     */
    protected $pagination = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $owner
     *     @type \Cosmos\Base\Query\V1beta1\PageRequest $pagination
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Decimal\Multisig\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string owner = 1 [json_name = "owner", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Generated from protobuf field <code>string owner = 1 [json_name = "owner", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setOwner($var)
    {
        GPBUtil::checkString($var, True);
        $this->owner = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cosmos.base.query.v1beta1.PageRequest pagination = 2 [json_name = "pagination"];</code>
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
     * Generated from protobuf field <code>.cosmos.base.query.v1beta1.PageRequest pagination = 2 [json_name = "pagination"];</code>
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


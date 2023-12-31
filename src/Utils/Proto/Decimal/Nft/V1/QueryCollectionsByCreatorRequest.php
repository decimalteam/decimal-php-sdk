<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/nft/v1/query.proto

namespace Decimal\Nft\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryCollectionsByCreatorRequest is request type for the Query/CollectionsByCreator RPC method.
 *
 * Generated from protobuf message <code>decimal.nft.v1.QueryCollectionsByCreatorRequest</code>
 */
class QueryCollectionsByCreatorRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * creator defines the NFT collection creator address.
     *
     * Generated from protobuf field <code>string creator = 1 [json_name = "creator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $creator = '';
    /**
     * pagination defines an optional pagination for the request.
     *
     * Generated from protobuf field <code>.cosmos.base.query.v1beta1.PageRequest pagination = 2 [json_name = "pagination"];</code>
     */
    protected $pagination = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $creator
     *           creator defines the NFT collection creator address.
     *     @type \Cosmos\Base\Query\V1beta1\PageRequest $pagination
     *           pagination defines an optional pagination for the request.
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Nft\V1\GPBMetadata\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * creator defines the NFT collection creator address.
     *
     * Generated from protobuf field <code>string creator = 1 [json_name = "creator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * creator defines the NFT collection creator address.
     *
     * Generated from protobuf field <code>string creator = 1 [json_name = "creator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setCreator($var)
    {
        GPBUtil::checkString($var, True);
        $this->creator = $var;

        return $this;
    }

    /**
     * pagination defines an optional pagination for the request.
     *
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
     * pagination defines an optional pagination for the request.
     *
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


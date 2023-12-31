<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/bank/v1beta1/query.proto

namespace Cosmos\Bank\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryTotalSupplyResponse is the response type for the Query/TotalSupply RPC
 * method
 *
 * Generated from protobuf message <code>cosmos.bank.v1beta1.QueryTotalSupplyResponse</code>
 */
class QueryTotalSupplyResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * supply is the supply of the coins
     *
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin supply = 1 [json_name = "supply", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     */
    private $supply;
    /**
     * pagination defines the pagination in the response.
     *
     * Generated from protobuf field <code>.cosmos.base.query.v1beta1.PageResponse pagination = 2 [json_name = "pagination"];</code>
     */
    protected $pagination = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Cosmos\Base\V1beta1\Coin>|\Google\Protobuf\Internal\RepeatedField $supply
     *           supply is the supply of the coins
     *     @type \Cosmos\Base\Query\V1beta1\PageResponse $pagination
     *           pagination defines the pagination in the response.
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Bank\V1beta1\GPBMetadata\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * supply is the supply of the coins
     *
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin supply = 1 [json_name = "supply", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSupply()
    {
        return $this->supply;
    }

    /**
     * supply is the supply of the coins
     *
     * Generated from protobuf field <code>repeated .cosmos.base.v1beta1.Coin supply = 1 [json_name = "supply", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "github.com/cosmos/cosmos-sdk/types.Coins"];</code>
     * @param array<\Cosmos\Base\V1beta1\Coin>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSupply($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Base\V1beta1\Coin::class);
        $this->supply = $arr;

        return $this;
    }

    /**
     * pagination defines the pagination in the response.
     *
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
     * pagination defines the pagination in the response.
     *
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


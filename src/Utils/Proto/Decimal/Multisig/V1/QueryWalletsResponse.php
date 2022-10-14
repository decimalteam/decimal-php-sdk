<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/multisig/v1/query.proto

namespace Decimal\Multisig\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryWalletsResponse is response type for the Query/Wallets RPC method.
 *
 * Generated from protobuf message <code>decimal.multisig.v1.QueryWalletsResponse</code>
 */
class QueryWalletsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .decimal.multisig.v1.Wallet wallets = 1 [json_name = "wallets", (.gogoproto.nullable) = false];</code>
     */
    private $wallets;
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
     *     @type array<\Decimal\Multisig\V1\Wallet>|\Google\Protobuf\Internal\RepeatedField $wallets
     *     @type \Cosmos\Base\Query\V1beta1\PageResponse $pagination
     * }
     */
    public function __construct($data = NULL) {
        \Decimal\Multisig\V1\GPBMetadata\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .decimal.multisig.v1.Wallet wallets = 1 [json_name = "wallets", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWallets()
    {
        return $this->wallets;
    }

    /**
     * Generated from protobuf field <code>repeated .decimal.multisig.v1.Wallet wallets = 1 [json_name = "wallets", (.gogoproto.nullable) = false];</code>
     * @param array<\Decimal\Multisig\V1\Wallet>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWallets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Decimal\Multisig\V1\Wallet::class);
        $this->wallets = $arr;

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

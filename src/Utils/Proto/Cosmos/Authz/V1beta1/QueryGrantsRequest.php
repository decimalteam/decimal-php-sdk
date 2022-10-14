<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/authz/v1beta1/query.proto

namespace Cosmos\Authz\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryGrantsRequest is the request type for the Query/Grants RPC method.
 *
 * Generated from protobuf message <code>cosmos.authz.v1beta1.QueryGrantsRequest</code>
 */
class QueryGrantsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string granter = 1 [json_name = "granter"];</code>
     */
    protected $granter = '';
    /**
     * Generated from protobuf field <code>string grantee = 2 [json_name = "grantee"];</code>
     */
    protected $grantee = '';
    /**
     * Optional, msg_type_url, when set, will query only grants matching given msg type.
     *
     * Generated from protobuf field <code>string msg_type_url = 3 [json_name = "msgTypeUrl"];</code>
     */
    protected $msg_type_url = '';
    /**
     * pagination defines an pagination for the request.
     *
     * Generated from protobuf field <code>.cosmos.base.query.v1beta1.PageRequest pagination = 4 [json_name = "pagination"];</code>
     */
    protected $pagination = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $granter
     *     @type string $grantee
     *     @type string $msg_type_url
     *           Optional, msg_type_url, when set, will query only grants matching given msg type.
     *     @type \Cosmos\Base\Query\V1beta1\PageRequest $pagination
     *           pagination defines an pagination for the request.
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Authz\V1beta1\GPBMetadata\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string granter = 1 [json_name = "granter"];</code>
     * @return string
     */
    public function getGranter()
    {
        return $this->granter;
    }

    /**
     * Generated from protobuf field <code>string granter = 1 [json_name = "granter"];</code>
     * @param string $var
     * @return $this
     */
    public function setGranter($var)
    {
        GPBUtil::checkString($var, True);
        $this->granter = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string grantee = 2 [json_name = "grantee"];</code>
     * @return string
     */
    public function getGrantee()
    {
        return $this->grantee;
    }

    /**
     * Generated from protobuf field <code>string grantee = 2 [json_name = "grantee"];</code>
     * @param string $var
     * @return $this
     */
    public function setGrantee($var)
    {
        GPBUtil::checkString($var, True);
        $this->grantee = $var;

        return $this;
    }

    /**
     * Optional, msg_type_url, when set, will query only grants matching given msg type.
     *
     * Generated from protobuf field <code>string msg_type_url = 3 [json_name = "msgTypeUrl"];</code>
     * @return string
     */
    public function getMsgTypeUrl()
    {
        return $this->msg_type_url;
    }

    /**
     * Optional, msg_type_url, when set, will query only grants matching given msg type.
     *
     * Generated from protobuf field <code>string msg_type_url = 3 [json_name = "msgTypeUrl"];</code>
     * @param string $var
     * @return $this
     */
    public function setMsgTypeUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->msg_type_url = $var;

        return $this;
    }

    /**
     * pagination defines an pagination for the request.
     *
     * Generated from protobuf field <code>.cosmos.base.query.v1beta1.PageRequest pagination = 4 [json_name = "pagination"];</code>
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
     * pagination defines an pagination for the request.
     *
     * Generated from protobuf field <code>.cosmos.base.query.v1beta1.PageRequest pagination = 4 [json_name = "pagination"];</code>
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


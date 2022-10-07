<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/group/v1/query.proto

namespace Cosmos\Group\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryGroupPoliciesByGroupRequest is the Query/GroupPoliciesByGroup request type.
 *
 * Generated from protobuf message <code>cosmos.group.v1.QueryGroupPoliciesByGroupRequest</code>
 */
class QueryGroupPoliciesByGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * group_id is the unique ID of the group policy's group.
     *
     * Generated from protobuf field <code>uint64 group_id = 1 [json_name = "groupId"];</code>
     */
    protected $group_id = 0;
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
     *     @type int|string $group_id
     *           group_id is the unique ID of the group policy's group.
     *     @type \Cosmos\Base\Query\V1beta1\PageRequest $pagination
     *           pagination defines an optional pagination for the request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Group\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * group_id is the unique ID of the group policy's group.
     *
     * Generated from protobuf field <code>uint64 group_id = 1 [json_name = "groupId"];</code>
     * @return int|string
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * group_id is the unique ID of the group policy's group.
     *
     * Generated from protobuf field <code>uint64 group_id = 1 [json_name = "groupId"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setGroupId($var)
    {
        GPBUtil::checkUint64($var);
        $this->group_id = $var;

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


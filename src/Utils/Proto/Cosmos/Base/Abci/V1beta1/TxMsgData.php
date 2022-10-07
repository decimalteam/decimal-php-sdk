<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/base/abci/v1beta1/abci.proto

namespace Cosmos\Base\Abci\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * TxMsgData defines a list of MsgData. A transaction will have a MsgData object
 * for each message.
 *
 * Generated from protobuf message <code>cosmos.base.abci.v1beta1.TxMsgData</code>
 */
class TxMsgData extends \Google\Protobuf\Internal\Message
{
    /**
     * data field is deprecated and not populated.
     *
     * Generated from protobuf field <code>repeated .cosmos.base.abci.v1beta1.MsgData data = 1 [json_name = "data", deprecated = true];</code>
     * @deprecated
     */
    private $data;
    /**
     * msg_responses contains the Msg handler responses packed into Anys.
     * Since: cosmos-sdk 0.46
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any msg_responses = 2 [json_name = "msgResponses"];</code>
     */
    private $msg_responses;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cosmos\Base\Abci\V1beta1\MsgData[]|\Google\Protobuf\Internal\RepeatedField $data
     *           data field is deprecated and not populated.
     *     @type \Google\Protobuf\Any[]|\Google\Protobuf\Internal\RepeatedField $msg_responses
     *           msg_responses contains the Msg handler responses packed into Anys.
     *           Since: cosmos-sdk 0.46
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Base\Abci\V1Beta1\Abci::initOnce();
        parent::__construct($data);
    }

    /**
     * data field is deprecated and not populated.
     *
     * Generated from protobuf field <code>repeated .cosmos.base.abci.v1beta1.MsgData data = 1 [json_name = "data", deprecated = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     * @deprecated
     */
    public function getData()
    {
        @trigger_error('data is deprecated.', E_USER_DEPRECATED);
        return $this->data;
    }

    /**
     * data field is deprecated and not populated.
     *
     * Generated from protobuf field <code>repeated .cosmos.base.abci.v1beta1.MsgData data = 1 [json_name = "data", deprecated = true];</code>
     * @param \Cosmos\Base\Abci\V1beta1\MsgData[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @deprecated
     */
    public function setData($var)
    {
        @trigger_error('data is deprecated.', E_USER_DEPRECATED);
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Base\Abci\V1beta1\MsgData::class);
        $this->data = $arr;

        return $this;
    }

    /**
     * msg_responses contains the Msg handler responses packed into Anys.
     * Since: cosmos-sdk 0.46
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any msg_responses = 2 [json_name = "msgResponses"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMsgResponses()
    {
        return $this->msg_responses;
    }

    /**
     * msg_responses contains the Msg handler responses packed into Anys.
     * Since: cosmos-sdk 0.46
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any msg_responses = 2 [json_name = "msgResponses"];</code>
     * @param \Google\Protobuf\Any[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMsgResponses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Any::class);
        $this->msg_responses = $arr;

        return $this;
    }

}


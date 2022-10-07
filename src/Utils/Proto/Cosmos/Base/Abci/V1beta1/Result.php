<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/base/abci/v1beta1/abci.proto

namespace Cosmos\Base\Abci\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Result is the union of ResponseFormat and ResponseCheckTx.
 *
 * Generated from protobuf message <code>cosmos.base.abci.v1beta1.Result</code>
 */
class Result extends \Google\Protobuf\Internal\Message
{
    /**
     * Data is any data returned from message or handler execution. It MUST be
     * length prefixed in order to separate data from multiple message executions.
     * Deprecated. This field is still populated, but prefer msg_response instead
     * because it also contains the Msg response typeURL.
     *
     * Generated from protobuf field <code>bytes data = 1 [json_name = "data", deprecated = true];</code>
     * @deprecated
     */
    protected $data = '';
    /**
     * Log contains the log information from message or handler execution.
     *
     * Generated from protobuf field <code>string log = 2 [json_name = "log"];</code>
     */
    protected $log = '';
    /**
     * Events contains a slice of Event objects that were emitted during message
     * or handler execution.
     *
     * Generated from protobuf field <code>repeated .tendermint.abci.Event events = 3 [json_name = "events", (.gogoproto.nullable) = false];</code>
     */
    private $events;
    /**
     * msg_responses contains the Msg handler responses type packed in Anys.
     * Since: cosmos-sdk 0.46
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any msg_responses = 4 [json_name = "msgResponses"];</code>
     */
    private $msg_responses;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $data
     *           Data is any data returned from message or handler execution. It MUST be
     *           length prefixed in order to separate data from multiple message executions.
     *           Deprecated. This field is still populated, but prefer msg_response instead
     *           because it also contains the Msg response typeURL.
     *     @type string $log
     *           Log contains the log information from message or handler execution.
     *     @type \Tendermint\Abci\Event[]|\Google\Protobuf\Internal\RepeatedField $events
     *           Events contains a slice of Event objects that were emitted during message
     *           or handler execution.
     *     @type \Google\Protobuf\Any[]|\Google\Protobuf\Internal\RepeatedField $msg_responses
     *           msg_responses contains the Msg handler responses type packed in Anys.
     *           Since: cosmos-sdk 0.46
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Base\Abci\V1Beta1\Abci::initOnce();
        parent::__construct($data);
    }

    /**
     * Data is any data returned from message or handler execution. It MUST be
     * length prefixed in order to separate data from multiple message executions.
     * Deprecated. This field is still populated, but prefer msg_response instead
     * because it also contains the Msg response typeURL.
     *
     * Generated from protobuf field <code>bytes data = 1 [json_name = "data", deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getData()
    {
        @trigger_error('data is deprecated.', E_USER_DEPRECATED);
        return $this->data;
    }

    /**
     * Data is any data returned from message or handler execution. It MUST be
     * length prefixed in order to separate data from multiple message executions.
     * Deprecated. This field is still populated, but prefer msg_response instead
     * because it also contains the Msg response typeURL.
     *
     * Generated from protobuf field <code>bytes data = 1 [json_name = "data", deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setData($var)
    {
        @trigger_error('data is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

    /**
     * Log contains the log information from message or handler execution.
     *
     * Generated from protobuf field <code>string log = 2 [json_name = "log"];</code>
     * @return string
     */
    public function getLog()
    {
        return $this->log;
    }

    /**
     * Log contains the log information from message or handler execution.
     *
     * Generated from protobuf field <code>string log = 2 [json_name = "log"];</code>
     * @param string $var
     * @return $this
     */
    public function setLog($var)
    {
        GPBUtil::checkString($var, True);
        $this->log = $var;

        return $this;
    }

    /**
     * Events contains a slice of Event objects that were emitted during message
     * or handler execution.
     *
     * Generated from protobuf field <code>repeated .tendermint.abci.Event events = 3 [json_name = "events", (.gogoproto.nullable) = false];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Events contains a slice of Event objects that were emitted during message
     * or handler execution.
     *
     * Generated from protobuf field <code>repeated .tendermint.abci.Event events = 3 [json_name = "events", (.gogoproto.nullable) = false];</code>
     * @param \Tendermint\Abci\Event[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tendermint\Abci\Event::class);
        $this->events = $arr;

        return $this;
    }

    /**
     * msg_responses contains the Msg handler responses type packed in Anys.
     * Since: cosmos-sdk 0.46
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any msg_responses = 4 [json_name = "msgResponses"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMsgResponses()
    {
        return $this->msg_responses;
    }

    /**
     * msg_responses contains the Msg handler responses type packed in Anys.
     * Since: cosmos-sdk 0.46
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any msg_responses = 4 [json_name = "msgResponses"];</code>
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


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/lightclients/tendermint/v1/tendermint.proto

namespace Ibc\Lightclients\Tendermint\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Misbehaviour is a wrapper over two conflicting Headers
 * that implements Misbehaviour interface expected by ICS-02
 *
 * Generated from protobuf message <code>ibc.lightclients.tendermint.v1.Misbehaviour</code>
 */
class Misbehaviour extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string client_id = 1 [json_name = "clientId", (.gogoproto.moretags) = "yaml:\"client_id\""];</code>
     */
    protected $client_id = '';
    /**
     * Generated from protobuf field <code>.ibc.lightclients.tendermint.v1.Header header_1 = 2 [json_name = "header1", (.gogoproto.customname) = "Header1", (.gogoproto.moretags) = "yaml:\"header_1\""];</code>
     */
    protected $header_1 = null;
    /**
     * Generated from protobuf field <code>.ibc.lightclients.tendermint.v1.Header header_2 = 3 [json_name = "header2", (.gogoproto.customname) = "Header2", (.gogoproto.moretags) = "yaml:\"header_2\""];</code>
     */
    protected $header_2 = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $client_id
     *     @type \Ibc\Lightclients\Tendermint\V1\Header $header_1
     *     @type \Ibc\Lightclients\Tendermint\V1\Header $header_2
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Lightclients\Tendermint\V1\Tendermint::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string client_id = 1 [json_name = "clientId", (.gogoproto.moretags) = "yaml:\"client_id\""];</code>
     * @return string
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Generated from protobuf field <code>string client_id = 1 [json_name = "clientId", (.gogoproto.moretags) = "yaml:\"client_id\""];</code>
     * @param string $var
     * @return $this
     */
    public function setClientId($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ibc.lightclients.tendermint.v1.Header header_1 = 2 [json_name = "header1", (.gogoproto.customname) = "Header1", (.gogoproto.moretags) = "yaml:\"header_1\""];</code>
     * @return \Ibc\Lightclients\Tendermint\V1\Header|null
     */
    public function getHeader1()
    {
        return $this->header_1;
    }

    public function hasHeader1()
    {
        return isset($this->header_1);
    }

    public function clearHeader1()
    {
        unset($this->header_1);
    }

    /**
     * Generated from protobuf field <code>.ibc.lightclients.tendermint.v1.Header header_1 = 2 [json_name = "header1", (.gogoproto.customname) = "Header1", (.gogoproto.moretags) = "yaml:\"header_1\""];</code>
     * @param \Ibc\Lightclients\Tendermint\V1\Header $var
     * @return $this
     */
    public function setHeader1($var)
    {
        GPBUtil::checkMessage($var, \Ibc\Lightclients\Tendermint\V1\Header::class);
        $this->header_1 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ibc.lightclients.tendermint.v1.Header header_2 = 3 [json_name = "header2", (.gogoproto.customname) = "Header2", (.gogoproto.moretags) = "yaml:\"header_2\""];</code>
     * @return \Ibc\Lightclients\Tendermint\V1\Header|null
     */
    public function getHeader2()
    {
        return $this->header_2;
    }

    public function hasHeader2()
    {
        return isset($this->header_2);
    }

    public function clearHeader2()
    {
        unset($this->header_2);
    }

    /**
     * Generated from protobuf field <code>.ibc.lightclients.tendermint.v1.Header header_2 = 3 [json_name = "header2", (.gogoproto.customname) = "Header2", (.gogoproto.moretags) = "yaml:\"header_2\""];</code>
     * @param \Ibc\Lightclients\Tendermint\V1\Header $var
     * @return $this
     */
    public function setHeader2($var)
    {
        GPBUtil::checkMessage($var, \Ibc\Lightclients\Tendermint\V1\Header::class);
        $this->header_2 = $var;

        return $this;
    }

}

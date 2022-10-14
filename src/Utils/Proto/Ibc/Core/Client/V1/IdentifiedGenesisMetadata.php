<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/core/client/v1/genesis.proto

namespace Ibc\Core\Client\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * IdentifiedGenesisMetadata has the client metadata with the corresponding
 * client id.
 *
 * Generated from protobuf message <code>ibc.core.client.v1.IdentifiedGenesisMetadata</code>
 */
class IdentifiedGenesisMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string client_id = 1 [json_name = "clientId", (.gogoproto.moretags) = "yaml:\"client_id\""];</code>
     */
    protected $client_id = '';
    /**
     * Generated from protobuf field <code>repeated .ibc.core.client.v1.GenesisMetadata client_metadata = 2 [json_name = "clientMetadata", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"client_metadata\""];</code>
     */
    private $client_metadata;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $client_id
     *     @type \Ibc\Core\Client\V1\GenesisMetadata[]|\Google\Protobuf\Internal\RepeatedField $client_metadata
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Core\Client\V1\Genesis::initOnce();
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
     * Generated from protobuf field <code>repeated .ibc.core.client.v1.GenesisMetadata client_metadata = 2 [json_name = "clientMetadata", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"client_metadata\""];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClientMetadata()
    {
        return $this->client_metadata;
    }

    /**
     * Generated from protobuf field <code>repeated .ibc.core.client.v1.GenesisMetadata client_metadata = 2 [json_name = "clientMetadata", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"client_metadata\""];</code>
     * @param \Ibc\Core\Client\V1\GenesisMetadata[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClientMetadata($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ibc\Core\Client\V1\GenesisMetadata::class);
        $this->client_metadata = $arr;

        return $this;
    }

}

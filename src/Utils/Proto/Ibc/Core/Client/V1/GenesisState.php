<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/core/client/v1/genesis.proto

namespace Ibc\Core\Client\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GenesisState defines the ibc client submodule's genesis state.
 *
 * Generated from protobuf message <code>ibc.core.client.v1.GenesisState</code>
 */
class GenesisState extends \Google\Protobuf\Internal\Message
{
    /**
     * client states with their corresponding identifiers
     *
     * Generated from protobuf field <code>repeated .ibc.core.client.v1.IdentifiedClientState clients = 1 [json_name = "clients", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "IdentifiedClientStates"];</code>
     */
    private $clients;
    /**
     * consensus states from each client
     *
     * Generated from protobuf field <code>repeated .ibc.core.client.v1.ClientConsensusStates clients_consensus = 2 [json_name = "clientsConsensus", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"clients_consensus\"", (.gogoproto.castrepeated) = "ClientsConsensusStates"];</code>
     */
    private $clients_consensus;
    /**
     * metadata from each client
     *
     * Generated from protobuf field <code>repeated .ibc.core.client.v1.IdentifiedGenesisMetadata clients_metadata = 3 [json_name = "clientsMetadata", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"clients_metadata\""];</code>
     */
    private $clients_metadata;
    /**
     * Generated from protobuf field <code>.ibc.core.client.v1.Params params = 4 [json_name = "params", (.gogoproto.nullable) = false];</code>
     */
    protected $params = null;
    /**
     * create localhost on initialization
     *
     * Generated from protobuf field <code>bool create_localhost = 5 [json_name = "createLocalhost", (.gogoproto.moretags) = "yaml:\"create_localhost\""];</code>
     */
    protected $create_localhost = false;
    /**
     * the sequence for the next generated client identifier
     *
     * Generated from protobuf field <code>uint64 next_client_sequence = 6 [json_name = "nextClientSequence", (.gogoproto.moretags) = "yaml:\"next_client_sequence\""];</code>
     */
    protected $next_client_sequence = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ibc\Core\Client\V1\IdentifiedClientState[]|\Google\Protobuf\Internal\RepeatedField $clients
     *           client states with their corresponding identifiers
     *     @type \Ibc\Core\Client\V1\ClientConsensusStates[]|\Google\Protobuf\Internal\RepeatedField $clients_consensus
     *           consensus states from each client
     *     @type \Ibc\Core\Client\V1\IdentifiedGenesisMetadata[]|\Google\Protobuf\Internal\RepeatedField $clients_metadata
     *           metadata from each client
     *     @type \Ibc\Core\Client\V1\Params $params
     *     @type bool $create_localhost
     *           create localhost on initialization
     *     @type int|string $next_client_sequence
     *           the sequence for the next generated client identifier
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Core\Client\V1\Genesis::initOnce();
        parent::__construct($data);
    }

    /**
     * client states with their corresponding identifiers
     *
     * Generated from protobuf field <code>repeated .ibc.core.client.v1.IdentifiedClientState clients = 1 [json_name = "clients", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "IdentifiedClientStates"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClients()
    {
        return $this->clients;
    }

    /**
     * client states with their corresponding identifiers
     *
     * Generated from protobuf field <code>repeated .ibc.core.client.v1.IdentifiedClientState clients = 1 [json_name = "clients", (.gogoproto.nullable) = false, (.gogoproto.castrepeated) = "IdentifiedClientStates"];</code>
     * @param \Ibc\Core\Client\V1\IdentifiedClientState[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClients($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ibc\Core\Client\V1\IdentifiedClientState::class);
        $this->clients = $arr;

        return $this;
    }

    /**
     * consensus states from each client
     *
     * Generated from protobuf field <code>repeated .ibc.core.client.v1.ClientConsensusStates clients_consensus = 2 [json_name = "clientsConsensus", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"clients_consensus\"", (.gogoproto.castrepeated) = "ClientsConsensusStates"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClientsConsensus()
    {
        return $this->clients_consensus;
    }

    /**
     * consensus states from each client
     *
     * Generated from protobuf field <code>repeated .ibc.core.client.v1.ClientConsensusStates clients_consensus = 2 [json_name = "clientsConsensus", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"clients_consensus\"", (.gogoproto.castrepeated) = "ClientsConsensusStates"];</code>
     * @param \Ibc\Core\Client\V1\ClientConsensusStates[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClientsConsensus($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ibc\Core\Client\V1\ClientConsensusStates::class);
        $this->clients_consensus = $arr;

        return $this;
    }

    /**
     * metadata from each client
     *
     * Generated from protobuf field <code>repeated .ibc.core.client.v1.IdentifiedGenesisMetadata clients_metadata = 3 [json_name = "clientsMetadata", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"clients_metadata\""];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClientsMetadata()
    {
        return $this->clients_metadata;
    }

    /**
     * metadata from each client
     *
     * Generated from protobuf field <code>repeated .ibc.core.client.v1.IdentifiedGenesisMetadata clients_metadata = 3 [json_name = "clientsMetadata", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"clients_metadata\""];</code>
     * @param \Ibc\Core\Client\V1\IdentifiedGenesisMetadata[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClientsMetadata($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ibc\Core\Client\V1\IdentifiedGenesisMetadata::class);
        $this->clients_metadata = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ibc.core.client.v1.Params params = 4 [json_name = "params", (.gogoproto.nullable) = false];</code>
     * @return \Ibc\Core\Client\V1\Params|null
     */
    public function getParams()
    {
        return $this->params;
    }

    public function hasParams()
    {
        return isset($this->params);
    }

    public function clearParams()
    {
        unset($this->params);
    }

    /**
     * Generated from protobuf field <code>.ibc.core.client.v1.Params params = 4 [json_name = "params", (.gogoproto.nullable) = false];</code>
     * @param \Ibc\Core\Client\V1\Params $var
     * @return $this
     */
    public function setParams($var)
    {
        GPBUtil::checkMessage($var, \Ibc\Core\Client\V1\Params::class);
        $this->params = $var;

        return $this;
    }

    /**
     * create localhost on initialization
     *
     * Generated from protobuf field <code>bool create_localhost = 5 [json_name = "createLocalhost", (.gogoproto.moretags) = "yaml:\"create_localhost\""];</code>
     * @return bool
     */
    public function getCreateLocalhost()
    {
        return $this->create_localhost;
    }

    /**
     * create localhost on initialization
     *
     * Generated from protobuf field <code>bool create_localhost = 5 [json_name = "createLocalhost", (.gogoproto.moretags) = "yaml:\"create_localhost\""];</code>
     * @param bool $var
     * @return $this
     */
    public function setCreateLocalhost($var)
    {
        GPBUtil::checkBool($var);
        $this->create_localhost = $var;

        return $this;
    }

    /**
     * the sequence for the next generated client identifier
     *
     * Generated from protobuf field <code>uint64 next_client_sequence = 6 [json_name = "nextClientSequence", (.gogoproto.moretags) = "yaml:\"next_client_sequence\""];</code>
     * @return int|string
     */
    public function getNextClientSequence()
    {
        return $this->next_client_sequence;
    }

    /**
     * the sequence for the next generated client identifier
     *
     * Generated from protobuf field <code>uint64 next_client_sequence = 6 [json_name = "nextClientSequence", (.gogoproto.moretags) = "yaml:\"next_client_sequence\""];</code>
     * @param int|string $var
     * @return $this
     */
    public function setNextClientSequence($var)
    {
        GPBUtil::checkUint64($var);
        $this->next_client_sequence = $var;

        return $this;
    }

}


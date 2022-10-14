<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ibc/core/connection/v1/tx.proto

namespace Ibc\Core\Connection\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MsgConnectionOpenTry defines a msg sent by a Relayer to try to open a
 * connection on Chain B.
 *
 * Generated from protobuf message <code>ibc.core.connection.v1.MsgConnectionOpenTry</code>
 */
class MsgConnectionOpenTry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string client_id = 1 [json_name = "clientId", (.gogoproto.moretags) = "yaml:\"client_id\""];</code>
     */
    protected $client_id = '';
    /**
     * Deprecated: this field is unused. Crossing hellos are no longer supported in core IBC.
     *
     * Generated from protobuf field <code>string previous_connection_id = 2 [json_name = "previousConnectionId", deprecated = true, (.gogoproto.moretags) = "yaml:\"previous_connection_id\""];</code>
     * @deprecated
     */
    protected $previous_connection_id = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Any client_state = 3 [json_name = "clientState", (.gogoproto.moretags) = "yaml:\"client_state\""];</code>
     */
    protected $client_state = null;
    /**
     * Generated from protobuf field <code>.ibc.core.connection.v1.Counterparty counterparty = 4 [json_name = "counterparty", (.gogoproto.nullable) = false];</code>
     */
    protected $counterparty = null;
    /**
     * Generated from protobuf field <code>uint64 delay_period = 5 [json_name = "delayPeriod", (.gogoproto.moretags) = "yaml:\"delay_period\""];</code>
     */
    protected $delay_period = 0;
    /**
     * Generated from protobuf field <code>repeated .ibc.core.connection.v1.Version counterparty_versions = 6 [json_name = "counterpartyVersions", (.gogoproto.moretags) = "yaml:\"counterparty_versions\""];</code>
     */
    private $counterparty_versions;
    /**
     * Generated from protobuf field <code>.ibc.core.client.v1.Height proof_height = 7 [json_name = "proofHeight", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"proof_height\""];</code>
     */
    protected $proof_height = null;
    /**
     * proof of the initialization the connection on Chain A: `UNITIALIZED ->
     * INIT`
     *
     * Generated from protobuf field <code>bytes proof_init = 8 [json_name = "proofInit", (.gogoproto.moretags) = "yaml:\"proof_init\""];</code>
     */
    protected $proof_init = '';
    /**
     * proof of client state included in message
     *
     * Generated from protobuf field <code>bytes proof_client = 9 [json_name = "proofClient", (.gogoproto.moretags) = "yaml:\"proof_client\""];</code>
     */
    protected $proof_client = '';
    /**
     * proof of client consensus state
     *
     * Generated from protobuf field <code>bytes proof_consensus = 10 [json_name = "proofConsensus", (.gogoproto.moretags) = "yaml:\"proof_consensus\""];</code>
     */
    protected $proof_consensus = '';
    /**
     * Generated from protobuf field <code>.ibc.core.client.v1.Height consensus_height = 11 [json_name = "consensusHeight", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"consensus_height\""];</code>
     */
    protected $consensus_height = null;
    /**
     * Generated from protobuf field <code>string signer = 12 [json_name = "signer"];</code>
     */
    protected $signer = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $client_id
     *     @type string $previous_connection_id
     *           Deprecated: this field is unused. Crossing hellos are no longer supported in core IBC.
     *     @type \Google\Protobuf\Any $client_state
     *     @type \Ibc\Core\Connection\V1\Counterparty $counterparty
     *     @type int|string $delay_period
     *     @type \Ibc\Core\Connection\V1\Version[]|\Google\Protobuf\Internal\RepeatedField $counterparty_versions
     *     @type \Ibc\Core\Client\V1\Height $proof_height
     *     @type string $proof_init
     *           proof of the initialization the connection on Chain A: `UNITIALIZED ->
     *           INIT`
     *     @type string $proof_client
     *           proof of client state included in message
     *     @type string $proof_consensus
     *           proof of client consensus state
     *     @type \Ibc\Core\Client\V1\Height $consensus_height
     *     @type string $signer
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ibc\Core\Connection\V1\Tx::initOnce();
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
     * Deprecated: this field is unused. Crossing hellos are no longer supported in core IBC.
     *
     * Generated from protobuf field <code>string previous_connection_id = 2 [json_name = "previousConnectionId", deprecated = true, (.gogoproto.moretags) = "yaml:\"previous_connection_id\""];</code>
     * @return string
     * @deprecated
     */
    public function getPreviousConnectionId()
    {
        @trigger_error('previous_connection_id is deprecated.', E_USER_DEPRECATED);
        return $this->previous_connection_id;
    }

    /**
     * Deprecated: this field is unused. Crossing hellos are no longer supported in core IBC.
     *
     * Generated from protobuf field <code>string previous_connection_id = 2 [json_name = "previousConnectionId", deprecated = true, (.gogoproto.moretags) = "yaml:\"previous_connection_id\""];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setPreviousConnectionId($var)
    {
        @trigger_error('previous_connection_id is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->previous_connection_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any client_state = 3 [json_name = "clientState", (.gogoproto.moretags) = "yaml:\"client_state\""];</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getClientState()
    {
        return $this->client_state;
    }

    public function hasClientState()
    {
        return isset($this->client_state);
    }

    public function clearClientState()
    {
        unset($this->client_state);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any client_state = 3 [json_name = "clientState", (.gogoproto.moretags) = "yaml:\"client_state\""];</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setClientState($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->client_state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ibc.core.connection.v1.Counterparty counterparty = 4 [json_name = "counterparty", (.gogoproto.nullable) = false];</code>
     * @return \Ibc\Core\Connection\V1\Counterparty|null
     */
    public function getCounterparty()
    {
        return $this->counterparty;
    }

    public function hasCounterparty()
    {
        return isset($this->counterparty);
    }

    public function clearCounterparty()
    {
        unset($this->counterparty);
    }

    /**
     * Generated from protobuf field <code>.ibc.core.connection.v1.Counterparty counterparty = 4 [json_name = "counterparty", (.gogoproto.nullable) = false];</code>
     * @param \Ibc\Core\Connection\V1\Counterparty $var
     * @return $this
     */
    public function setCounterparty($var)
    {
        GPBUtil::checkMessage($var, \Ibc\Core\Connection\V1\Counterparty::class);
        $this->counterparty = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 delay_period = 5 [json_name = "delayPeriod", (.gogoproto.moretags) = "yaml:\"delay_period\""];</code>
     * @return int|string
     */
    public function getDelayPeriod()
    {
        return $this->delay_period;
    }

    /**
     * Generated from protobuf field <code>uint64 delay_period = 5 [json_name = "delayPeriod", (.gogoproto.moretags) = "yaml:\"delay_period\""];</code>
     * @param int|string $var
     * @return $this
     */
    public function setDelayPeriod($var)
    {
        GPBUtil::checkUint64($var);
        $this->delay_period = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .ibc.core.connection.v1.Version counterparty_versions = 6 [json_name = "counterpartyVersions", (.gogoproto.moretags) = "yaml:\"counterparty_versions\""];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCounterpartyVersions()
    {
        return $this->counterparty_versions;
    }

    /**
     * Generated from protobuf field <code>repeated .ibc.core.connection.v1.Version counterparty_versions = 6 [json_name = "counterpartyVersions", (.gogoproto.moretags) = "yaml:\"counterparty_versions\""];</code>
     * @param \Ibc\Core\Connection\V1\Version[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCounterpartyVersions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ibc\Core\Connection\V1\Version::class);
        $this->counterparty_versions = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ibc.core.client.v1.Height proof_height = 7 [json_name = "proofHeight", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"proof_height\""];</code>
     * @return \Ibc\Core\Client\V1\Height|null
     */
    public function getProofHeight()
    {
        return $this->proof_height;
    }

    public function hasProofHeight()
    {
        return isset($this->proof_height);
    }

    public function clearProofHeight()
    {
        unset($this->proof_height);
    }

    /**
     * Generated from protobuf field <code>.ibc.core.client.v1.Height proof_height = 7 [json_name = "proofHeight", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"proof_height\""];</code>
     * @param \Ibc\Core\Client\V1\Height $var
     * @return $this
     */
    public function setProofHeight($var)
    {
        GPBUtil::checkMessage($var, \Ibc\Core\Client\V1\Height::class);
        $this->proof_height = $var;

        return $this;
    }

    /**
     * proof of the initialization the connection on Chain A: `UNITIALIZED ->
     * INIT`
     *
     * Generated from protobuf field <code>bytes proof_init = 8 [json_name = "proofInit", (.gogoproto.moretags) = "yaml:\"proof_init\""];</code>
     * @return string
     */
    public function getProofInit()
    {
        return $this->proof_init;
    }

    /**
     * proof of the initialization the connection on Chain A: `UNITIALIZED ->
     * INIT`
     *
     * Generated from protobuf field <code>bytes proof_init = 8 [json_name = "proofInit", (.gogoproto.moretags) = "yaml:\"proof_init\""];</code>
     * @param string $var
     * @return $this
     */
    public function setProofInit($var)
    {
        GPBUtil::checkString($var, False);
        $this->proof_init = $var;

        return $this;
    }

    /**
     * proof of client state included in message
     *
     * Generated from protobuf field <code>bytes proof_client = 9 [json_name = "proofClient", (.gogoproto.moretags) = "yaml:\"proof_client\""];</code>
     * @return string
     */
    public function getProofClient()
    {
        return $this->proof_client;
    }

    /**
     * proof of client state included in message
     *
     * Generated from protobuf field <code>bytes proof_client = 9 [json_name = "proofClient", (.gogoproto.moretags) = "yaml:\"proof_client\""];</code>
     * @param string $var
     * @return $this
     */
    public function setProofClient($var)
    {
        GPBUtil::checkString($var, False);
        $this->proof_client = $var;

        return $this;
    }

    /**
     * proof of client consensus state
     *
     * Generated from protobuf field <code>bytes proof_consensus = 10 [json_name = "proofConsensus", (.gogoproto.moretags) = "yaml:\"proof_consensus\""];</code>
     * @return string
     */
    public function getProofConsensus()
    {
        return $this->proof_consensus;
    }

    /**
     * proof of client consensus state
     *
     * Generated from protobuf field <code>bytes proof_consensus = 10 [json_name = "proofConsensus", (.gogoproto.moretags) = "yaml:\"proof_consensus\""];</code>
     * @param string $var
     * @return $this
     */
    public function setProofConsensus($var)
    {
        GPBUtil::checkString($var, False);
        $this->proof_consensus = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ibc.core.client.v1.Height consensus_height = 11 [json_name = "consensusHeight", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"consensus_height\""];</code>
     * @return \Ibc\Core\Client\V1\Height|null
     */
    public function getConsensusHeight()
    {
        return $this->consensus_height;
    }

    public function hasConsensusHeight()
    {
        return isset($this->consensus_height);
    }

    public function clearConsensusHeight()
    {
        unset($this->consensus_height);
    }

    /**
     * Generated from protobuf field <code>.ibc.core.client.v1.Height consensus_height = 11 [json_name = "consensusHeight", (.gogoproto.nullable) = false, (.gogoproto.moretags) = "yaml:\"consensus_height\""];</code>
     * @param \Ibc\Core\Client\V1\Height $var
     * @return $this
     */
    public function setConsensusHeight($var)
    {
        GPBUtil::checkMessage($var, \Ibc\Core\Client\V1\Height::class);
        $this->consensus_height = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string signer = 12 [json_name = "signer"];</code>
     * @return string
     */
    public function getSigner()
    {
        return $this->signer;
    }

    /**
     * Generated from protobuf field <code>string signer = 12 [json_name = "signer"];</code>
     * @param string $var
     * @return $this
     */
    public function setSigner($var)
    {
        GPBUtil::checkString($var, True);
        $this->signer = $var;

        return $this;
    }

}

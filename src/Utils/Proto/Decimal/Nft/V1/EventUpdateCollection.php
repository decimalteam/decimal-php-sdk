<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: decimal/nft/v1/events.proto

namespace Decimal\Nft\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EventUpdateCollection defines event emitted when new NFT token is added to existing NFT collection.
 *
 * Generated from protobuf message <code>decimal.nft.v1.EventUpdateCollection</code>
 */
class EventUpdateCollection extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string creator = 1 [json_name = "creator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     */
    protected $creator = '';
    /**
     * Generated from protobuf field <code>string denom = 2 [json_name = "denom"];</code>
     */
    protected $denom = '';
    /**
     * Generated from protobuf field <code>uint32 supply = 3 [json_name = "supply"];</code>
     */
    protected $supply = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $creator
     *     @type string $denom
     *     @type int $supply
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Decimal\Nft\V1\Events::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string creator = 1 [json_name = "creator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @return string
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * Generated from protobuf field <code>string creator = 1 [json_name = "creator", (.cosmos_proto.scalar) = "cosmos.AddressString"];</code>
     * @param string $var
     * @return $this
     */
    public function setCreator($var)
    {
        GPBUtil::checkString($var, True);
        $this->creator = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string denom = 2 [json_name = "denom"];</code>
     * @return string
     */
    public function getDenom()
    {
        return $this->denom;
    }

    /**
     * Generated from protobuf field <code>string denom = 2 [json_name = "denom"];</code>
     * @param string $var
     * @return $this
     */
    public function setDenom($var)
    {
        GPBUtil::checkString($var, True);
        $this->denom = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 supply = 3 [json_name = "supply"];</code>
     * @return int
     */
    public function getSupply()
    {
        return $this->supply;
    }

    /**
     * Generated from protobuf field <code>uint32 supply = 3 [json_name = "supply"];</code>
     * @param int $var
     * @return $this
     */
    public function setSupply($var)
    {
        GPBUtil::checkUint32($var);
        $this->supply = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/nft/v1beta1/nft.proto

namespace Cosmos\Nft\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Class defines the class of the nft type.
 *
 * Generated from protobuf message <code>cosmos.nft.v1beta1.Class</code>
 */
class PBClass extends \Google\Protobuf\Internal\Message
{
    /**
     * id defines the unique identifier of the NFT classification, similar to the contract address of ERC721
     *
     * Generated from protobuf field <code>string id = 1 [json_name = "id"];</code>
     */
    protected $id = '';
    /**
     * name defines the human-readable name of the NFT classification. Optional
     *
     * Generated from protobuf field <code>string name = 2 [json_name = "name"];</code>
     */
    protected $name = '';
    /**
     * symbol is an abbreviated name for nft classification. Optional
     *
     * Generated from protobuf field <code>string symbol = 3 [json_name = "symbol"];</code>
     */
    protected $symbol = '';
    /**
     * description is a brief description of nft classification. Optional
     *
     * Generated from protobuf field <code>string description = 4 [json_name = "description"];</code>
     */
    protected $description = '';
    /**
     * uri for the class metadata stored off chain. It can define schema for Class and NFT `Data` attributes. Optional
     *
     * Generated from protobuf field <code>string uri = 5 [json_name = "uri"];</code>
     */
    protected $uri = '';
    /**
     * uri_hash is a hash of the document pointed by uri. Optional
     *
     * Generated from protobuf field <code>string uri_hash = 6 [json_name = "uriHash"];</code>
     */
    protected $uri_hash = '';
    /**
     * data is the app specific metadata of the NFT class. Optional
     *
     * Generated from protobuf field <code>.google.protobuf.Any data = 7 [json_name = "data"];</code>
     */
    protected $data = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           id defines the unique identifier of the NFT classification, similar to the contract address of ERC721
     *     @type string $name
     *           name defines the human-readable name of the NFT classification. Optional
     *     @type string $symbol
     *           symbol is an abbreviated name for nft classification. Optional
     *     @type string $description
     *           description is a brief description of nft classification. Optional
     *     @type string $uri
     *           uri for the class metadata stored off chain. It can define schema for Class and NFT `Data` attributes. Optional
     *     @type string $uri_hash
     *           uri_hash is a hash of the document pointed by uri. Optional
     *     @type \Google\Protobuf\Any $data
     *           data is the app specific metadata of the NFT class. Optional
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Nft\V1Beta1\Nft::initOnce();
        parent::__construct($data);
    }

    /**
     * id defines the unique identifier of the NFT classification, similar to the contract address of ERC721
     *
     * Generated from protobuf field <code>string id = 1 [json_name = "id"];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * id defines the unique identifier of the NFT classification, similar to the contract address of ERC721
     *
     * Generated from protobuf field <code>string id = 1 [json_name = "id"];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * name defines the human-readable name of the NFT classification. Optional
     *
     * Generated from protobuf field <code>string name = 2 [json_name = "name"];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * name defines the human-readable name of the NFT classification. Optional
     *
     * Generated from protobuf field <code>string name = 2 [json_name = "name"];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * symbol is an abbreviated name for nft classification. Optional
     *
     * Generated from protobuf field <code>string symbol = 3 [json_name = "symbol"];</code>
     * @return string
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * symbol is an abbreviated name for nft classification. Optional
     *
     * Generated from protobuf field <code>string symbol = 3 [json_name = "symbol"];</code>
     * @param string $var
     * @return $this
     */
    public function setSymbol($var)
    {
        GPBUtil::checkString($var, True);
        $this->symbol = $var;

        return $this;
    }

    /**
     * description is a brief description of nft classification. Optional
     *
     * Generated from protobuf field <code>string description = 4 [json_name = "description"];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * description is a brief description of nft classification. Optional
     *
     * Generated from protobuf field <code>string description = 4 [json_name = "description"];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * uri for the class metadata stored off chain. It can define schema for Class and NFT `Data` attributes. Optional
     *
     * Generated from protobuf field <code>string uri = 5 [json_name = "uri"];</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * uri for the class metadata stored off chain. It can define schema for Class and NFT `Data` attributes. Optional
     *
     * Generated from protobuf field <code>string uri = 5 [json_name = "uri"];</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * uri_hash is a hash of the document pointed by uri. Optional
     *
     * Generated from protobuf field <code>string uri_hash = 6 [json_name = "uriHash"];</code>
     * @return string
     */
    public function getUriHash()
    {
        return $this->uri_hash;
    }

    /**
     * uri_hash is a hash of the document pointed by uri. Optional
     *
     * Generated from protobuf field <code>string uri_hash = 6 [json_name = "uriHash"];</code>
     * @param string $var
     * @return $this
     */
    public function setUriHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri_hash = $var;

        return $this;
    }

    /**
     * data is the app specific metadata of the NFT class. Optional
     *
     * Generated from protobuf field <code>.google.protobuf.Any data = 7 [json_name = "data"];</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getData()
    {
        return $this->data;
    }

    public function hasData()
    {
        return isset($this->data);
    }

    public function clearData()
    {
        unset($this->data);
    }

    /**
     * data is the app specific metadata of the NFT class. Optional
     *
     * Generated from protobuf field <code>.google.protobuf.Any data = 7 [json_name = "data"];</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->data = $var;

        return $this;
    }

}


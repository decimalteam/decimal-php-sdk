<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/nft/v1beta1/nft.proto

namespace Cosmos\Nft\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * NFT defines the NFT.
 *
 * Generated from protobuf message <code>cosmos.nft.v1beta1.NFT</code>
 */
class NFT extends \Google\Protobuf\Internal\Message
{
    /**
     * class_id associated with the NFT, similar to the contract address of ERC721
     *
     * Generated from protobuf field <code>string class_id = 1 [json_name = "classId"];</code>
     */
    protected $class_id = '';
    /**
     * id is a unique identifier of the NFT
     *
     * Generated from protobuf field <code>string id = 2 [json_name = "id"];</code>
     */
    protected $id = '';
    /**
     * uri for the NFT metadata stored off chain
     *
     * Generated from protobuf field <code>string uri = 3 [json_name = "uri"];</code>
     */
    protected $uri = '';
    /**
     * uri_hash is a hash of the document pointed by uri
     *
     * Generated from protobuf field <code>string uri_hash = 4 [json_name = "uriHash"];</code>
     */
    protected $uri_hash = '';
    /**
     * data is an app specific data of the NFT. Optional
     *
     * Generated from protobuf field <code>.google.protobuf.Any data = 10 [json_name = "data"];</code>
     */
    protected $data = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $class_id
     *           class_id associated with the NFT, similar to the contract address of ERC721
     *     @type string $id
     *           id is a unique identifier of the NFT
     *     @type string $uri
     *           uri for the NFT metadata stored off chain
     *     @type string $uri_hash
     *           uri_hash is a hash of the document pointed by uri
     *     @type \Google\Protobuf\Any $data
     *           data is an app specific data of the NFT. Optional
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cosmos\Nft\V1Beta1\Nft::initOnce();
        parent::__construct($data);
    }

    /**
     * class_id associated with the NFT, similar to the contract address of ERC721
     *
     * Generated from protobuf field <code>string class_id = 1 [json_name = "classId"];</code>
     * @return string
     */
    public function getClassId()
    {
        return $this->class_id;
    }

    /**
     * class_id associated with the NFT, similar to the contract address of ERC721
     *
     * Generated from protobuf field <code>string class_id = 1 [json_name = "classId"];</code>
     * @param string $var
     * @return $this
     */
    public function setClassId($var)
    {
        GPBUtil::checkString($var, True);
        $this->class_id = $var;

        return $this;
    }

    /**
     * id is a unique identifier of the NFT
     *
     * Generated from protobuf field <code>string id = 2 [json_name = "id"];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * id is a unique identifier of the NFT
     *
     * Generated from protobuf field <code>string id = 2 [json_name = "id"];</code>
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
     * uri for the NFT metadata stored off chain
     *
     * Generated from protobuf field <code>string uri = 3 [json_name = "uri"];</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * uri for the NFT metadata stored off chain
     *
     * Generated from protobuf field <code>string uri = 3 [json_name = "uri"];</code>
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
     * uri_hash is a hash of the document pointed by uri
     *
     * Generated from protobuf field <code>string uri_hash = 4 [json_name = "uriHash"];</code>
     * @return string
     */
    public function getUriHash()
    {
        return $this->uri_hash;
    }

    /**
     * uri_hash is a hash of the document pointed by uri
     *
     * Generated from protobuf field <code>string uri_hash = 4 [json_name = "uriHash"];</code>
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
     * data is an app specific data of the NFT. Optional
     *
     * Generated from protobuf field <code>.google.protobuf.Any data = 10 [json_name = "data"];</code>
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
     * data is an app specific data of the NFT. Optional
     *
     * Generated from protobuf field <code>.google.protobuf.Any data = 10 [json_name = "data"];</code>
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


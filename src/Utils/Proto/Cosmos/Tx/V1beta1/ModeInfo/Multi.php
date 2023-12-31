<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cosmos/tx/v1beta1/tx.proto

namespace Cosmos\Tx\V1beta1\ModeInfo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Multi is the mode info for a multisig public key
 *
 * Generated from protobuf message <code>cosmos.tx.v1beta1.ModeInfo.Multi</code>
 */
class Multi extends \Google\Protobuf\Internal\Message
{
    /**
     * bitarray specifies which keys within the multisig are signing
     *
     * Generated from protobuf field <code>.cosmos.crypto.multisig.v1beta1.CompactBitArray bitarray = 1 [json_name = "bitarray"];</code>
     */
    protected $bitarray = null;
    /**
     * mode_infos is the corresponding modes of the signers of the multisig
     * which could include nested multisig public keys
     *
     * Generated from protobuf field <code>repeated .cosmos.tx.v1beta1.ModeInfo mode_infos = 2 [json_name = "modeInfos"];</code>
     */
    private $mode_infos;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cosmos\Crypto\Multisig\V1beta1\CompactBitArray $bitarray
     *           bitarray specifies which keys within the multisig are signing
     *     @type array<\Cosmos\Tx\V1beta1\ModeInfo>|\Google\Protobuf\Internal\RepeatedField $mode_infos
     *           mode_infos is the corresponding modes of the signers of the multisig
     *           which could include nested multisig public keys
     * }
     */
    public function __construct($data = NULL) {
        \Cosmos\Tx\V1beta1\GPBMetadata\Tx::initOnce();
        parent::__construct($data);
    }

    /**
     * bitarray specifies which keys within the multisig are signing
     *
     * Generated from protobuf field <code>.cosmos.crypto.multisig.v1beta1.CompactBitArray bitarray = 1 [json_name = "bitarray"];</code>
     * @return \Cosmos\Crypto\Multisig\V1beta1\CompactBitArray|null
     */
    public function getBitarray()
    {
        return $this->bitarray;
    }

    public function hasBitarray()
    {
        return isset($this->bitarray);
    }

    public function clearBitarray()
    {
        unset($this->bitarray);
    }

    /**
     * bitarray specifies which keys within the multisig are signing
     *
     * Generated from protobuf field <code>.cosmos.crypto.multisig.v1beta1.CompactBitArray bitarray = 1 [json_name = "bitarray"];</code>
     * @param \Cosmos\Crypto\Multisig\V1beta1\CompactBitArray $var
     * @return $this
     */
    public function setBitarray($var)
    {
        GPBUtil::checkMessage($var, \Cosmos\Crypto\Multisig\V1beta1\CompactBitArray::class);
        $this->bitarray = $var;

        return $this;
    }

    /**
     * mode_infos is the corresponding modes of the signers of the multisig
     * which could include nested multisig public keys
     *
     * Generated from protobuf field <code>repeated .cosmos.tx.v1beta1.ModeInfo mode_infos = 2 [json_name = "modeInfos"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getModeInfos()
    {
        return $this->mode_infos;
    }

    /**
     * mode_infos is the corresponding modes of the signers of the multisig
     * which could include nested multisig public keys
     *
     * Generated from protobuf field <code>repeated .cosmos.tx.v1beta1.ModeInfo mode_infos = 2 [json_name = "modeInfos"];</code>
     * @param array<\Cosmos\Tx\V1beta1\ModeInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setModeInfos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cosmos\Tx\V1beta1\ModeInfo::class);
        $this->mode_infos = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Multi::class, \Cosmos\Tx\V1beta1\ModeInfo_Multi::class);


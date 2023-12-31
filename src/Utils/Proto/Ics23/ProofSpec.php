<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proofs.proto

namespace Ics23;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *ProofSpec defines what the expected parameters are for a given proof type.
 *This can be stored in the client and used to validate any incoming proofs.
 * verify(ProofSpec, Proof) -> Proof | Error
 *As demonstrated in tests, if we don't fix the algorithm used to calculate the
 *LeafHash for a given tree, there are many possible key-value pairs that can
 *generate a given hash (by interpretting the preimage differently).
 *We need this for proper security, requires client knows a priori what
 *tree format server uses. But not in code, rather a configuration object.
 *
 * Generated from protobuf message <code>ics23.ProofSpec</code>
 */
class ProofSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * any field in the ExistenceProof must be the same as in this spec.
     * except Prefix, which is just the first bytes of prefix (spec can be longer) 
     *
     * Generated from protobuf field <code>.ics23.LeafOp leaf_spec = 1 [json_name = "leafSpec"];</code>
     */
    protected $leaf_spec = null;
    /**
     * Generated from protobuf field <code>.ics23.InnerSpec inner_spec = 2 [json_name = "innerSpec"];</code>
     */
    protected $inner_spec = null;
    /**
     * max_depth (if > 0) is the maximum number of InnerOps allowed (mainly for fixed-depth tries)
     *
     * Generated from protobuf field <code>int32 max_depth = 3 [json_name = "maxDepth"];</code>
     */
    protected $max_depth = 0;
    /**
     * min_depth (if > 0) is the minimum number of InnerOps allowed (mainly for fixed-depth tries)
     *
     * Generated from protobuf field <code>int32 min_depth = 4 [json_name = "minDepth"];</code>
     */
    protected $min_depth = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ics23\LeafOp $leaf_spec
     *           any field in the ExistenceProof must be the same as in this spec.
     *           except Prefix, which is just the first bytes of prefix (spec can be longer) 
     *     @type \Ics23\InnerSpec $inner_spec
     *     @type int $max_depth
     *           max_depth (if > 0) is the maximum number of InnerOps allowed (mainly for fixed-depth tries)
     *     @type int $min_depth
     *           min_depth (if > 0) is the minimum number of InnerOps allowed (mainly for fixed-depth tries)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proofs::initOnce();
        parent::__construct($data);
    }

    /**
     * any field in the ExistenceProof must be the same as in this spec.
     * except Prefix, which is just the first bytes of prefix (spec can be longer) 
     *
     * Generated from protobuf field <code>.ics23.LeafOp leaf_spec = 1 [json_name = "leafSpec"];</code>
     * @return \Ics23\LeafOp|null
     */
    public function getLeafSpec()
    {
        return $this->leaf_spec;
    }

    public function hasLeafSpec()
    {
        return isset($this->leaf_spec);
    }

    public function clearLeafSpec()
    {
        unset($this->leaf_spec);
    }

    /**
     * any field in the ExistenceProof must be the same as in this spec.
     * except Prefix, which is just the first bytes of prefix (spec can be longer) 
     *
     * Generated from protobuf field <code>.ics23.LeafOp leaf_spec = 1 [json_name = "leafSpec"];</code>
     * @param \Ics23\LeafOp $var
     * @return $this
     */
    public function setLeafSpec($var)
    {
        GPBUtil::checkMessage($var, \Ics23\LeafOp::class);
        $this->leaf_spec = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ics23.InnerSpec inner_spec = 2 [json_name = "innerSpec"];</code>
     * @return \Ics23\InnerSpec|null
     */
    public function getInnerSpec()
    {
        return $this->inner_spec;
    }

    public function hasInnerSpec()
    {
        return isset($this->inner_spec);
    }

    public function clearInnerSpec()
    {
        unset($this->inner_spec);
    }

    /**
     * Generated from protobuf field <code>.ics23.InnerSpec inner_spec = 2 [json_name = "innerSpec"];</code>
     * @param \Ics23\InnerSpec $var
     * @return $this
     */
    public function setInnerSpec($var)
    {
        GPBUtil::checkMessage($var, \Ics23\InnerSpec::class);
        $this->inner_spec = $var;

        return $this;
    }

    /**
     * max_depth (if > 0) is the maximum number of InnerOps allowed (mainly for fixed-depth tries)
     *
     * Generated from protobuf field <code>int32 max_depth = 3 [json_name = "maxDepth"];</code>
     * @return int
     */
    public function getMaxDepth()
    {
        return $this->max_depth;
    }

    /**
     * max_depth (if > 0) is the maximum number of InnerOps allowed (mainly for fixed-depth tries)
     *
     * Generated from protobuf field <code>int32 max_depth = 3 [json_name = "maxDepth"];</code>
     * @param int $var
     * @return $this
     */
    public function setMaxDepth($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_depth = $var;

        return $this;
    }

    /**
     * min_depth (if > 0) is the minimum number of InnerOps allowed (mainly for fixed-depth tries)
     *
     * Generated from protobuf field <code>int32 min_depth = 4 [json_name = "minDepth"];</code>
     * @return int
     */
    public function getMinDepth()
    {
        return $this->min_depth;
    }

    /**
     * min_depth (if > 0) is the minimum number of InnerOps allowed (mainly for fixed-depth tries)
     *
     * Generated from protobuf field <code>int32 min_depth = 4 [json_name = "minDepth"];</code>
     * @param int $var
     * @return $this
     */
    public function setMinDepth($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_depth = $var;

        return $this;
    }

}


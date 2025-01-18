<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cpg/models/cpg_request.proto

namespace Barsam\Cpg\Models;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>barsam.cpg.models.CPG</code>
 */
class CPG extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>string amount = 2;</code>
     */
    protected $amount = '';
    /**
     * Generated from protobuf field <code>uint64 mobile = 3;</code>
     */
    protected $mobile = 0;
    /**
     * Generated from protobuf field <code>uint32 national_code = 4;</code>
     */
    protected $national_code = 0;
    /**
     * Generated from protobuf field <code>string description = 5;</code>
     */
    protected $description = '';
    /**
     * Generated from protobuf field <code>string callback_url = 6;</code>
     */
    protected $callback_url = '';
    /**
     * Generated from protobuf field <code>string code = 7;</code>
     */
    protected $code = '';
    /**
     * Generated from protobuf field <code>uint32 shop_id = 8;</code>
     */
    protected $shop_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *     @type string $amount
     *     @type int|string $mobile
     *     @type int $national_code
     *     @type string $description
     *     @type string $callback_url
     *     @type string $code
     *     @type int $shop_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cpg\Models\CpgRequest::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string amount = 2;</code>
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>string amount = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkString($var, True);
        $this->amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 mobile = 3;</code>
     * @return int|string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Generated from protobuf field <code>uint64 mobile = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMobile($var)
    {
        GPBUtil::checkUint64($var);
        $this->mobile = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 national_code = 4;</code>
     * @return int
     */
    public function getNationalCode()
    {
        return $this->national_code;
    }

    /**
     * Generated from protobuf field <code>uint32 national_code = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setNationalCode($var)
    {
        GPBUtil::checkUint32($var);
        $this->national_code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 5;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 5;</code>
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
     * Generated from protobuf field <code>string callback_url = 6;</code>
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->callback_url;
    }

    /**
     * Generated from protobuf field <code>string callback_url = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setCallbackUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->callback_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string code = 7;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>string code = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 shop_id = 8;</code>
     * @return int
     */
    public function getShopId()
    {
        return $this->shop_id;
    }

    /**
     * Generated from protobuf field <code>uint32 shop_id = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setShopId($var)
    {
        GPBUtil::checkUint32($var);
        $this->shop_id = $var;

        return $this;
    }

}


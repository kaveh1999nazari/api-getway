<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: inquiry/messages/inquire_card.proto

namespace Barsam\Inquiry\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Define the response message
 *
 * Generated from protobuf message <code>barsam.inquiry.messages.InquireCardResponse</code>
 */
class InquireCardResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Available if the type is MATCH
     *
     * Generated from protobuf field <code>bool is_matched = 1;</code>
     */
    protected $is_matched = false;
    /**
     * Available if the type is DETAIL
     *
     * Generated from protobuf field <code>string bank_name = 2;</code>
     */
    protected $bank_name = '';
    /**
     * Generated from protobuf field <code>repeated string owners = 3;</code>
     */
    private $owners;
    /**
     * Generated from protobuf field <code>string iban = 4;</code>
     */
    protected $iban = '';
    /**
     * Generated from protobuf field <code>string account_number = 5;</code>
     */
    protected $account_number = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $is_matched
     *           Available if the type is MATCH
     *     @type string $bank_name
     *           Available if the type is DETAIL
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $owners
     *     @type string $iban
     *     @type string $account_number
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Inquiry\Messages\InquireCard::initOnce();
        parent::__construct($data);
    }

    /**
     * Available if the type is MATCH
     *
     * Generated from protobuf field <code>bool is_matched = 1;</code>
     * @return bool
     */
    public function getIsMatched()
    {
        return $this->is_matched;
    }

    /**
     * Available if the type is MATCH
     *
     * Generated from protobuf field <code>bool is_matched = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsMatched($var)
    {
        GPBUtil::checkBool($var);
        $this->is_matched = $var;

        return $this;
    }

    /**
     * Available if the type is DETAIL
     *
     * Generated from protobuf field <code>string bank_name = 2;</code>
     * @return string
     */
    public function getBankName()
    {
        return $this->bank_name;
    }

    /**
     * Available if the type is DETAIL
     *
     * Generated from protobuf field <code>string bank_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBankName($var)
    {
        GPBUtil::checkString($var, True);
        $this->bank_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string owners = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOwners()
    {
        return $this->owners;
    }

    /**
     * Generated from protobuf field <code>repeated string owners = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOwners($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->owners = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string iban = 4;</code>
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Generated from protobuf field <code>string iban = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setIban($var)
    {
        GPBUtil::checkString($var, True);
        $this->iban = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string account_number = 5;</code>
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->account_number;
    }

    /**
     * Generated from protobuf field <code>string account_number = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setAccountNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_number = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: user/messages/field_create.proto

namespace Barsam\User\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Define the request message
 *
 * Generated from protobuf message <code>barsam.user.messages.FieldCreateRequest</code>
 */
class FieldCreateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string label = 2;</code>
     */
    protected $label = '';
    /**
     * Generated from protobuf field <code>repeated string validation_rules = 3;</code>
     */
    private $validation_rules;
    /**
     * Generated from protobuf field <code>.barsam.user.enums.FieldType type = 4;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>map<string, string> options = 5;</code>
     */
    private $options;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $label
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $validation_rules
     *     @type int $type
     *     @type array|\Google\Protobuf\Internal\MapField $options
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\User\Messages\FieldCreate::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string label = 2;</code>
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Generated from protobuf field <code>string label = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->label = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string validation_rules = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidationRules()
    {
        return $this->validation_rules;
    }

    /**
     * Generated from protobuf field <code>repeated string validation_rules = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValidationRules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->validation_rules = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.barsam.user.enums.FieldType type = 4;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.barsam.user.enums.FieldType type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Barsam\User\Enums\FieldType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> options = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Generated from protobuf field <code>map<string, string> options = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setOptions($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->options = $arr;

        return $this;
    }

}


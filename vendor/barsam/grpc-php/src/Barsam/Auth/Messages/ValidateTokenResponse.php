<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: auth/messages/validate_token.proto

namespace Barsam\Auth\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Define the response message
 *
 * Generated from protobuf message <code>barsam.auth.messages.ValidateTokenResponse</code>
 */
class ValidateTokenResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.barsam.auth.enums.LoginType valid = 1;</code>
     */
    protected $valid = 0;
    /**
     * Generated from protobuf field <code>map<string, string> claims = 2;</code>
     */
    private $claims;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $valid
     *     @type array|\Google\Protobuf\Internal\MapField $claims
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Auth\Messages\ValidateToken::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.barsam.auth.enums.LoginType valid = 1;</code>
     * @return int
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * Generated from protobuf field <code>.barsam.auth.enums.LoginType valid = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setValid($var)
    {
        GPBUtil::checkEnum($var, \Barsam\Auth\Enums\LoginType::class);
        $this->valid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> claims = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getClaims()
    {
        return $this->claims;
    }

    /**
     * Generated from protobuf field <code>map<string, string> claims = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setClaims($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->claims = $arr;

        return $this;
    }

}


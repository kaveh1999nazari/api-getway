<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: config/messages/get_all.proto

namespace Barsam\Config\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Define the response message
 *
 * Generated from protobuf message <code>barsam.config.messages.GetAllResponse</code>
 */
class GetAllResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .barsam.config.models.Config configs = 1;</code>
     */
    private $configs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Barsam\Config\Models\Config>|\Google\Protobuf\Internal\RepeatedField $configs
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Config\Messages\GetAll::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .barsam.config.models.Config configs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConfigs()
    {
        return $this->configs;
    }

    /**
     * Generated from protobuf field <code>repeated .barsam.config.models.Config configs = 1;</code>
     * @param array<\Barsam\Config\Models\Config>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Barsam\Config\Models\Config::class);
        $this->configs = $arr;

        return $this;
    }

}


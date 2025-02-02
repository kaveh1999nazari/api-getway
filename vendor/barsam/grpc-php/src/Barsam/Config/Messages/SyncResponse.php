<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: config/messages/sync.proto

namespace Barsam\Config\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Define the response message
 *
 * Generated from protobuf message <code>barsam.config.messages.SyncResponse</code>
 */
class SyncResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The status of the synchronization
     *
     * Generated from protobuf field <code>.barsam.config.enums.SyncStatus status = 1;</code>
     */
    protected $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $status
     *           The status of the synchronization
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Config\Messages\Sync::initOnce();
        parent::__construct($data);
    }

    /**
     * The status of the synchronization
     *
     * Generated from protobuf field <code>.barsam.config.enums.SyncStatus status = 1;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the synchronization
     *
     * Generated from protobuf field <code>.barsam.config.enums.SyncStatus status = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Barsam\Config\Enums\SyncStatus::class);
        $this->status = $var;

        return $this;
    }

}


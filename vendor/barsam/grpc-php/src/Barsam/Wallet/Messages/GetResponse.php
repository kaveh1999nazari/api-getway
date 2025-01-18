<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: wallet/messages/get.proto

namespace Barsam\Wallet\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Define the response message
 *
 * Generated from protobuf message <code>barsam.wallet.messages.GetResponse</code>
 */
class GetResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.barsam.wallet.models.Wallet wallet = 1;</code>
     */
    protected $wallet = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Barsam\Wallet\Models\Wallet $wallet
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Wallet\Messages\Get::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.barsam.wallet.models.Wallet wallet = 1;</code>
     * @return \Barsam\Wallet\Models\Wallet|null
     */
    public function getWallet()
    {
        return $this->wallet;
    }

    public function hasWallet()
    {
        return isset($this->wallet);
    }

    public function clearWallet()
    {
        unset($this->wallet);
    }

    /**
     * Generated from protobuf field <code>.barsam.wallet.models.Wallet wallet = 1;</code>
     * @param \Barsam\Wallet\Models\Wallet $var
     * @return $this
     */
    public function setWallet($var)
    {
        GPBUtil::checkMessage($var, \Barsam\Wallet\Models\Wallet::class);
        $this->wallet = $var;

        return $this;
    }

}


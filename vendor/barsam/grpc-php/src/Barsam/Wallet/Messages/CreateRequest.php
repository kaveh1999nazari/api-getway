<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: wallet/messages/create.proto

namespace Barsam\Wallet\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Define the request message
 *
 * Generated from protobuf message <code>barsam.wallet.messages.CreateRequest</code>
 */
class CreateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 owner_id = 1;</code>
     */
    protected $owner_id = 0;
    /**
     * Generated from protobuf field <code>uint64 currency_id = 2;</code>
     */
    protected $currency_id = 0;
    /**
     * Generated from protobuf field <code>.barsam.wallet.enums.WalletType type = 3;</code>
     */
    protected $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $owner_id
     *     @type int|string $currency_id
     *     @type int $type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Wallet\Messages\Create::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 owner_id = 1;</code>
     * @return int|string
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * Generated from protobuf field <code>uint64 owner_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOwnerId($var)
    {
        GPBUtil::checkUint64($var);
        $this->owner_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 currency_id = 2;</code>
     * @return int|string
     */
    public function getCurrencyId()
    {
        return $this->currency_id;
    }

    /**
     * Generated from protobuf field <code>uint64 currency_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCurrencyId($var)
    {
        GPBUtil::checkUint64($var);
        $this->currency_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.barsam.wallet.enums.WalletType type = 3;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.barsam.wallet.enums.WalletType type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Barsam\Wallet\Enums\WalletType::class);
        $this->type = $var;

        return $this;
    }

}


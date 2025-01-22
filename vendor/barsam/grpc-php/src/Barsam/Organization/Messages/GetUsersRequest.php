<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: organization/messages/get_users.proto

namespace Barsam\Organization\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Define the request message
 *
 * Generated from protobuf message <code>barsam.organization.messages.GetUsersRequest</code>
 */
class GetUsersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>uint64 organization_id = 2;</code>
     */
    protected $organization_id = 0;
    /**
     * The page number
     *
     * Generated from protobuf field <code>uint32 page = 3;</code>
     */
    protected $page = 0;
    /**
     * The number of items per page
     *
     * Generated from protobuf field <code>uint32 per_page = 4;</code>
     */
    protected $per_page = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *     @type int|string $organization_id
     *     @type int $page
     *           The page number
     *     @type int $per_page
     *           The number of items per page
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Organization\Messages\GetUsers::initOnce();
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
     * Generated from protobuf field <code>uint64 organization_id = 2;</code>
     * @return int|string
     */
    public function getOrganizationId()
    {
        return $this->organization_id;
    }

    /**
     * Generated from protobuf field <code>uint64 organization_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOrganizationId($var)
    {
        GPBUtil::checkUint64($var);
        $this->organization_id = $var;

        return $this;
    }

    /**
     * The page number
     *
     * Generated from protobuf field <code>uint32 page = 3;</code>
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * The page number
     *
     * Generated from protobuf field <code>uint32 page = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPage($var)
    {
        GPBUtil::checkUint32($var);
        $this->page = $var;

        return $this;
    }

    /**
     * The number of items per page
     *
     * Generated from protobuf field <code>uint32 per_page = 4;</code>
     * @return int
     */
    public function getPerPage()
    {
        return $this->per_page;
    }

    /**
     * The number of items per page
     *
     * Generated from protobuf field <code>uint32 per_page = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPerPage($var)
    {
        GPBUtil::checkUint32($var);
        $this->per_page = $var;

        return $this;
    }

}


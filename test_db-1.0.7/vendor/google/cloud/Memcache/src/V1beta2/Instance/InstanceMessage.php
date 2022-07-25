<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/memcache/v1beta2/cloud_memcache.proto

namespace Google\Cloud\Memcache\V1beta2\Instance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.memcache.v1beta2.Instance.InstanceMessage</code>
 */
class InstanceMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * A code that correspond to one type of user-facing message.
     *
     * Generated from protobuf field <code>.google.cloud.memcache.v1beta2.Instance.InstanceMessage.Code code = 1;</code>
     */
    private $code = 0;
    /**
     * Message on memcached instance which will be exposed to users.
     *
     * Generated from protobuf field <code>string message = 2;</code>
     */
    private $message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $code
     *           A code that correspond to one type of user-facing message.
     *     @type string $message
     *           Message on memcached instance which will be exposed to users.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Memcache\V1Beta2\CloudMemcache::initOnce();
        parent::__construct($data);
    }

    /**
     * A code that correspond to one type of user-facing message.
     *
     * Generated from protobuf field <code>.google.cloud.memcache.v1beta2.Instance.InstanceMessage.Code code = 1;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A code that correspond to one type of user-facing message.
     *
     * Generated from protobuf field <code>.google.cloud.memcache.v1beta2.Instance.InstanceMessage.Code code = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Memcache\V1beta2\Instance\InstanceMessage\Code::class);
        $this->code = $var;

        return $this;
    }

    /**
     * Message on memcached instance which will be exposed to users.
     *
     * Generated from protobuf field <code>string message = 2;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Message on memcached instance which will be exposed to users.
     *
     * Generated from protobuf field <code>string message = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InstanceMessage::class, \Google\Cloud\Memcache\V1beta2\Instance_InstanceMessage::class);


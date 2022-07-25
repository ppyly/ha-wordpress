<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ManagedInstanceVersion</code>
 */
class ManagedInstanceVersion extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] The intended template of the instance. This field is empty when current_action is one of { DELETING, ABANDONING }.
     *
     * Generated from protobuf field <code>optional string instance_template = 309248228;</code>
     */
    private $instance_template = null;
    /**
     * [Output Only] Name of the version.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    private $name = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance_template
     *           [Output Only] The intended template of the instance. This field is empty when current_action is one of { DELETING, ABANDONING }.
     *     @type string $name
     *           [Output Only] Name of the version.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] The intended template of the instance. This field is empty when current_action is one of { DELETING, ABANDONING }.
     *
     * Generated from protobuf field <code>optional string instance_template = 309248228;</code>
     * @return string
     */
    public function getInstanceTemplate()
    {
        return isset($this->instance_template) ? $this->instance_template : '';
    }

    public function hasInstanceTemplate()
    {
        return isset($this->instance_template);
    }

    public function clearInstanceTemplate()
    {
        unset($this->instance_template);
    }

    /**
     * [Output Only] The intended template of the instance. This field is empty when current_action is one of { DELETING, ABANDONING }.
     *
     * Generated from protobuf field <code>optional string instance_template = 309248228;</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_template = $var;

        return $this;
    }

    /**
     * [Output Only] Name of the version.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * [Output Only] Name of the version.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}


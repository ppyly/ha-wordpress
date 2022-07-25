<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/audit_data.proto

namespace Google\Cloud\AppEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Detailed information about CreateVersion call.
 *
 * Generated from protobuf message <code>google.appengine.v1.CreateVersionMethod</code>
 */
class CreateVersionMethod extends \Google\Protobuf\Internal\Message
{
    /**
     * Create version request.
     *
     * Generated from protobuf field <code>.google.appengine.v1.CreateVersionRequest request = 1;</code>
     */
    private $request = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AppEngine\V1\CreateVersionRequest $request
     *           Create version request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\AuditData::initOnce();
        parent::__construct($data);
    }

    /**
     * Create version request.
     *
     * Generated from protobuf field <code>.google.appengine.v1.CreateVersionRequest request = 1;</code>
     * @return \Google\Cloud\AppEngine\V1\CreateVersionRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    public function hasRequest()
    {
        return isset($this->request);
    }

    public function clearRequest()
    {
        unset($this->request);
    }

    /**
     * Create version request.
     *
     * Generated from protobuf field <code>.google.appengine.v1.CreateVersionRequest request = 1;</code>
     * @param \Google\Cloud\AppEngine\V1\CreateVersionRequest $var
     * @return $this
     */
    public function setRequest($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AppEngine\V1\CreateVersionRequest::class);
        $this->request = $var;

        return $this;
    }

}


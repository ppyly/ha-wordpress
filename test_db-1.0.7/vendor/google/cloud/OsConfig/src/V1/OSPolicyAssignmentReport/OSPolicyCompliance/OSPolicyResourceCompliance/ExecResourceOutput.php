<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/os_policy_assignment_reports.proto

namespace Google\Cloud\OsConfig\V1\OSPolicyAssignmentReport\OSPolicyCompliance\OSPolicyResourceCompliance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ExecResource specific output.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.OSPolicyAssignmentReport.OSPolicyCompliance.OSPolicyResourceCompliance.ExecResourceOutput</code>
 */
class ExecResourceOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Output from enforcement phase output file (if run).
     * Output size is limited to 100K bytes.
     *
     * Generated from protobuf field <code>bytes enforcement_output = 2;</code>
     */
    private $enforcement_output = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $enforcement_output
     *           Output from enforcement phase output file (if run).
     *           Output size is limited to 100K bytes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\OsPolicyAssignmentReports::initOnce();
        parent::__construct($data);
    }

    /**
     * Output from enforcement phase output file (if run).
     * Output size is limited to 100K bytes.
     *
     * Generated from protobuf field <code>bytes enforcement_output = 2;</code>
     * @return string
     */
    public function getEnforcementOutput()
    {
        return $this->enforcement_output;
    }

    /**
     * Output from enforcement phase output file (if run).
     * Output size is limited to 100K bytes.
     *
     * Generated from protobuf field <code>bytes enforcement_output = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEnforcementOutput($var)
    {
        GPBUtil::checkString($var, False);
        $this->enforcement_output = $var;

        return $this;
    }

}


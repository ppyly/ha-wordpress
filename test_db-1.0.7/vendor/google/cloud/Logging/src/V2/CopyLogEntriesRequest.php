<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_config.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The parameters to CopyLogEntries.
 *
 * Generated from protobuf message <code>google.logging.v2.CopyLogEntriesRequest</code>
 */
class CopyLogEntriesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Log bucket from which to copy log entries.
     * For example:
     *   `"projects/my-project/locations/global/buckets/my-source-bucket"`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * Optional. A filter specifying which log entries to copy. The filter must be no more
     * than 20k characters. An empty filter matches all log entries.
     *
     * Generated from protobuf field <code>string filter = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $filter = '';
    /**
     * Required. Destination to which to copy log entries.
     *
     * Generated from protobuf field <code>string destination = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $destination = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Log bucket from which to copy log entries.
     *           For example:
     *             `"projects/my-project/locations/global/buckets/my-source-bucket"`
     *     @type string $filter
     *           Optional. A filter specifying which log entries to copy. The filter must be no more
     *           than 20k characters. An empty filter matches all log entries.
     *     @type string $destination
     *           Required. Destination to which to copy log entries.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Logging\V2\LoggingConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Log bucket from which to copy log entries.
     * For example:
     *   `"projects/my-project/locations/global/buckets/my-source-bucket"`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Log bucket from which to copy log entries.
     * For example:
     *   `"projects/my-project/locations/global/buckets/my-source-bucket"`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. A filter specifying which log entries to copy. The filter must be no more
     * than 20k characters. An empty filter matches all log entries.
     *
     * Generated from protobuf field <code>string filter = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. A filter specifying which log entries to copy. The filter must be no more
     * than 20k characters. An empty filter matches all log entries.
     *
     * Generated from protobuf field <code>string filter = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Required. Destination to which to copy log entries.
     *
     * Generated from protobuf field <code>string destination = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Required. Destination to which to copy log entries.
     *
     * Generated from protobuf field <code>string destination = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDestination($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination = $var;

        return $this;
    }

}


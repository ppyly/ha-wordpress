<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/dataexchange/v1beta1/dataexchange.proto

namespace Google\Cloud\BigQuery\DataExchange\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for subscribing a Listing.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.dataexchange.v1beta1.SubscribeListingRequest</code>
 */
class SubscribeListingRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the listing to subscribe to.
     * e.g. `projects/myproject/locations/US/dataExchanges/123/listings/456`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    protected $destination;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Resource name of the listing to subscribe to.
     *           e.g. `projects/myproject/locations/US/dataExchanges/123/listings/456`.
     *     @type \Google\Cloud\BigQuery\DataExchange\V1beta1\DestinationDataset $destination_dataset
     *           BigQuery destination dataset to create for the subscriber.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Dataexchange\V1Beta1\Dataexchange::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the listing to subscribe to.
     * e.g. `projects/myproject/locations/US/dataExchanges/123/listings/456`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Resource name of the listing to subscribe to.
     * e.g. `projects/myproject/locations/US/dataExchanges/123/listings/456`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * BigQuery destination dataset to create for the subscriber.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.dataexchange.v1beta1.DestinationDataset destination_dataset = 3;</code>
     * @return \Google\Cloud\BigQuery\DataExchange\V1beta1\DestinationDataset|null
     */
    public function getDestinationDataset()
    {
        return $this->readOneof(3);
    }

    public function hasDestinationDataset()
    {
        return $this->hasOneof(3);
    }

    /**
     * BigQuery destination dataset to create for the subscriber.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.dataexchange.v1beta1.DestinationDataset destination_dataset = 3;</code>
     * @param \Google\Cloud\BigQuery\DataExchange\V1beta1\DestinationDataset $var
     * @return $this
     */
    public function setDestinationDataset($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\DataExchange\V1beta1\DestinationDataset::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->whichOneof("destination");
    }

}


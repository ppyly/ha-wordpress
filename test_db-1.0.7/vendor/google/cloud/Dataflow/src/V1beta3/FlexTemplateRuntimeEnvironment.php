<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/templates.proto

namespace Google\Cloud\Dataflow\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The environment values to be set at runtime for flex template.
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.FlexTemplateRuntimeEnvironment</code>
 */
class FlexTemplateRuntimeEnvironment extends \Google\Protobuf\Internal\Message
{
    /**
     * The initial number of Google Compute Engine instances for the job.
     *
     * Generated from protobuf field <code>int32 num_workers = 1;</code>
     */
    private $num_workers = 0;
    /**
     * The maximum number of Google Compute Engine instances to be made
     * available to your pipeline during execution, from 1 to 1000.
     *
     * Generated from protobuf field <code>int32 max_workers = 2;</code>
     */
    private $max_workers = 0;
    /**
     * The Compute Engine [availability
     * zone](https://cloud.google.com/compute/docs/regions-zones/regions-zones)
     * for launching worker instances to run your pipeline.
     * In the future, worker_zone will take precedence.
     *
     * Generated from protobuf field <code>string zone = 3;</code>
     */
    private $zone = '';
    /**
     * The email address of the service account to run the job as.
     *
     * Generated from protobuf field <code>string service_account_email = 4;</code>
     */
    private $service_account_email = '';
    /**
     * The Cloud Storage path to use for temporary files.
     * Must be a valid Cloud Storage URL, beginning with `gs://`.
     *
     * Generated from protobuf field <code>string temp_location = 5;</code>
     */
    private $temp_location = '';
    /**
     * The machine type to use for the job. Defaults to the value from the
     * template if not specified.
     *
     * Generated from protobuf field <code>string machine_type = 6;</code>
     */
    private $machine_type = '';
    /**
     * Additional experiment flags for the job.
     *
     * Generated from protobuf field <code>repeated string additional_experiments = 7;</code>
     */
    private $additional_experiments;
    /**
     * Network to which VMs will be assigned.  If empty or unspecified,
     * the service will use the network "default".
     *
     * Generated from protobuf field <code>string network = 8;</code>
     */
    private $network = '';
    /**
     * Subnetwork to which VMs will be assigned, if desired. You can specify a
     * subnetwork using either a complete URL or an abbreviated path. Expected to
     * be of the form
     * "https://www.googleapis.com/compute/v1/projects/HOST_PROJECT_ID/regions/REGION/subnetworks/SUBNETWORK"
     * or "regions/REGION/subnetworks/SUBNETWORK". If the subnetwork is located in
     * a Shared VPC network, you must use the complete URL.
     *
     * Generated from protobuf field <code>string subnetwork = 9;</code>
     */
    private $subnetwork = '';
    /**
     * Additional user labels to be specified for the job.
     * Keys and values must follow the restrictions specified in the [labeling
     * restrictions](https://cloud.google.com/compute/docs/labeling-resources#restrictions)
     * page.
     * An object containing a list of "key": value pairs.
     * Example: { "name": "wrench", "mass": "1kg", "count": "3" }.
     *
     * Generated from protobuf field <code>map<string, string> additional_user_labels = 10;</code>
     */
    private $additional_user_labels;
    /**
     * Name for the Cloud KMS key for the job.
     * Key format is:
     * projects/<project>/locations/<location>/keyRings/<keyring>/cryptoKeys/<key>
     *
     * Generated from protobuf field <code>string kms_key_name = 11;</code>
     */
    private $kms_key_name = '';
    /**
     * Configuration for VM IPs.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.WorkerIPAddressConfiguration ip_configuration = 12;</code>
     */
    private $ip_configuration = 0;
    /**
     * The Compute Engine region
     * (https://cloud.google.com/compute/docs/regions-zones/regions-zones) in
     * which worker processing should occur, e.g. "us-west1". Mutually exclusive
     * with worker_zone. If neither worker_region nor worker_zone is specified,
     * default to the control plane's region.
     *
     * Generated from protobuf field <code>string worker_region = 13;</code>
     */
    private $worker_region = '';
    /**
     * The Compute Engine zone
     * (https://cloud.google.com/compute/docs/regions-zones/regions-zones) in
     * which worker processing should occur, e.g. "us-west1-a". Mutually exclusive
     * with worker_region. If neither worker_region nor worker_zone is specified,
     * a zone in the control plane's region is chosen based on available capacity.
     * If both `worker_zone` and `zone` are set, `worker_zone` takes precedence.
     *
     * Generated from protobuf field <code>string worker_zone = 14;</code>
     */
    private $worker_zone = '';
    /**
     * Whether to enable Streaming Engine for the job.
     *
     * Generated from protobuf field <code>bool enable_streaming_engine = 15;</code>
     */
    private $enable_streaming_engine = false;
    /**
     * Set FlexRS goal for the job.
     * https://cloud.google.com/dataflow/docs/guides/flexrs
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.FlexResourceSchedulingGoal flexrs_goal = 16;</code>
     */
    private $flexrs_goal = 0;
    /**
     * The Cloud Storage path for staging local files.
     * Must be a valid Cloud Storage URL, beginning with `gs://`.
     *
     * Generated from protobuf field <code>string staging_location = 17;</code>
     */
    private $staging_location = '';
    /**
     * Docker registry location of container image to use for the 'worker harness.
     * Default is the container for the version of the SDK. Note this field is
     * only valid for portable pipelines.
     *
     * Generated from protobuf field <code>string sdk_container_image = 18;</code>
     */
    private $sdk_container_image = '';
    /**
     * Worker disk size, in gigabytes.
     *
     * Generated from protobuf field <code>int32 disk_size_gb = 20;</code>
     */
    private $disk_size_gb = 0;
    /**
     * The algorithm to use for autoscaling
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.AutoscalingAlgorithm autoscaling_algorithm = 21;</code>
     */
    private $autoscaling_algorithm = 0;
    /**
     * If true, save a heap dump before killing a thread or process which is GC
     * thrashing or out of memory. The location of the heap file will either be
     * echoed back to the user, or the user will be given the opportunity to
     * download the heap file.
     *
     * Generated from protobuf field <code>bool dump_heap_on_oom = 22;</code>
     */
    private $dump_heap_on_oom = false;
    /**
     * Cloud Storage bucket (directory) to upload heap dumps to the given
     * location. Enabling this implies that heap dumps should be generated on OOM
     * (dump_heap_on_oom is set to true).
     *
     * Generated from protobuf field <code>string save_heap_dumps_to_gcs_path = 23;</code>
     */
    private $save_heap_dumps_to_gcs_path = '';
    /**
     * The machine type to use for launching the job. The default is
     * n1-standard-1.
     *
     * Generated from protobuf field <code>string launcher_machine_type = 24;</code>
     */
    private $launcher_machine_type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $num_workers
     *           The initial number of Google Compute Engine instances for the job.
     *     @type int $max_workers
     *           The maximum number of Google Compute Engine instances to be made
     *           available to your pipeline during execution, from 1 to 1000.
     *     @type string $zone
     *           The Compute Engine [availability
     *           zone](https://cloud.google.com/compute/docs/regions-zones/regions-zones)
     *           for launching worker instances to run your pipeline.
     *           In the future, worker_zone will take precedence.
     *     @type string $service_account_email
     *           The email address of the service account to run the job as.
     *     @type string $temp_location
     *           The Cloud Storage path to use for temporary files.
     *           Must be a valid Cloud Storage URL, beginning with `gs://`.
     *     @type string $machine_type
     *           The machine type to use for the job. Defaults to the value from the
     *           template if not specified.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $additional_experiments
     *           Additional experiment flags for the job.
     *     @type string $network
     *           Network to which VMs will be assigned.  If empty or unspecified,
     *           the service will use the network "default".
     *     @type string $subnetwork
     *           Subnetwork to which VMs will be assigned, if desired. You can specify a
     *           subnetwork using either a complete URL or an abbreviated path. Expected to
     *           be of the form
     *           "https://www.googleapis.com/compute/v1/projects/HOST_PROJECT_ID/regions/REGION/subnetworks/SUBNETWORK"
     *           or "regions/REGION/subnetworks/SUBNETWORK". If the subnetwork is located in
     *           a Shared VPC network, you must use the complete URL.
     *     @type array|\Google\Protobuf\Internal\MapField $additional_user_labels
     *           Additional user labels to be specified for the job.
     *           Keys and values must follow the restrictions specified in the [labeling
     *           restrictions](https://cloud.google.com/compute/docs/labeling-resources#restrictions)
     *           page.
     *           An object containing a list of "key": value pairs.
     *           Example: { "name": "wrench", "mass": "1kg", "count": "3" }.
     *     @type string $kms_key_name
     *           Name for the Cloud KMS key for the job.
     *           Key format is:
     *           projects/<project>/locations/<location>/keyRings/<keyring>/cryptoKeys/<key>
     *     @type int $ip_configuration
     *           Configuration for VM IPs.
     *     @type string $worker_region
     *           The Compute Engine region
     *           (https://cloud.google.com/compute/docs/regions-zones/regions-zones) in
     *           which worker processing should occur, e.g. "us-west1". Mutually exclusive
     *           with worker_zone. If neither worker_region nor worker_zone is specified,
     *           default to the control plane's region.
     *     @type string $worker_zone
     *           The Compute Engine zone
     *           (https://cloud.google.com/compute/docs/regions-zones/regions-zones) in
     *           which worker processing should occur, e.g. "us-west1-a". Mutually exclusive
     *           with worker_region. If neither worker_region nor worker_zone is specified,
     *           a zone in the control plane's region is chosen based on available capacity.
     *           If both `worker_zone` and `zone` are set, `worker_zone` takes precedence.
     *     @type bool $enable_streaming_engine
     *           Whether to enable Streaming Engine for the job.
     *     @type int $flexrs_goal
     *           Set FlexRS goal for the job.
     *           https://cloud.google.com/dataflow/docs/guides/flexrs
     *     @type string $staging_location
     *           The Cloud Storage path for staging local files.
     *           Must be a valid Cloud Storage URL, beginning with `gs://`.
     *     @type string $sdk_container_image
     *           Docker registry location of container image to use for the 'worker harness.
     *           Default is the container for the version of the SDK. Note this field is
     *           only valid for portable pipelines.
     *     @type int $disk_size_gb
     *           Worker disk size, in gigabytes.
     *     @type int $autoscaling_algorithm
     *           The algorithm to use for autoscaling
     *     @type bool $dump_heap_on_oom
     *           If true, save a heap dump before killing a thread or process which is GC
     *           thrashing or out of memory. The location of the heap file will either be
     *           echoed back to the user, or the user will be given the opportunity to
     *           download the heap file.
     *     @type string $save_heap_dumps_to_gcs_path
     *           Cloud Storage bucket (directory) to upload heap dumps to the given
     *           location. Enabling this implies that heap dumps should be generated on OOM
     *           (dump_heap_on_oom is set to true).
     *     @type string $launcher_machine_type
     *           The machine type to use for launching the job. The default is
     *           n1-standard-1.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Templates::initOnce();
        parent::__construct($data);
    }

    /**
     * The initial number of Google Compute Engine instances for the job.
     *
     * Generated from protobuf field <code>int32 num_workers = 1;</code>
     * @return int
     */
    public function getNumWorkers()
    {
        return $this->num_workers;
    }

    /**
     * The initial number of Google Compute Engine instances for the job.
     *
     * Generated from protobuf field <code>int32 num_workers = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setNumWorkers($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_workers = $var;

        return $this;
    }

    /**
     * The maximum number of Google Compute Engine instances to be made
     * available to your pipeline during execution, from 1 to 1000.
     *
     * Generated from protobuf field <code>int32 max_workers = 2;</code>
     * @return int
     */
    public function getMaxWorkers()
    {
        return $this->max_workers;
    }

    /**
     * The maximum number of Google Compute Engine instances to be made
     * available to your pipeline during execution, from 1 to 1000.
     *
     * Generated from protobuf field <code>int32 max_workers = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxWorkers($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_workers = $var;

        return $this;
    }

    /**
     * The Compute Engine [availability
     * zone](https://cloud.google.com/compute/docs/regions-zones/regions-zones)
     * for launching worker instances to run your pipeline.
     * In the future, worker_zone will take precedence.
     *
     * Generated from protobuf field <code>string zone = 3;</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * The Compute Engine [availability
     * zone](https://cloud.google.com/compute/docs/regions-zones/regions-zones)
     * for launching worker instances to run your pipeline.
     * In the future, worker_zone will take precedence.
     *
     * Generated from protobuf field <code>string zone = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

    /**
     * The email address of the service account to run the job as.
     *
     * Generated from protobuf field <code>string service_account_email = 4;</code>
     * @return string
     */
    public function getServiceAccountEmail()
    {
        return $this->service_account_email;
    }

    /**
     * The email address of the service account to run the job as.
     *
     * Generated from protobuf field <code>string service_account_email = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccountEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account_email = $var;

        return $this;
    }

    /**
     * The Cloud Storage path to use for temporary files.
     * Must be a valid Cloud Storage URL, beginning with `gs://`.
     *
     * Generated from protobuf field <code>string temp_location = 5;</code>
     * @return string
     */
    public function getTempLocation()
    {
        return $this->temp_location;
    }

    /**
     * The Cloud Storage path to use for temporary files.
     * Must be a valid Cloud Storage URL, beginning with `gs://`.
     *
     * Generated from protobuf field <code>string temp_location = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setTempLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->temp_location = $var;

        return $this;
    }

    /**
     * The machine type to use for the job. Defaults to the value from the
     * template if not specified.
     *
     * Generated from protobuf field <code>string machine_type = 6;</code>
     * @return string
     */
    public function getMachineType()
    {
        return $this->machine_type;
    }

    /**
     * The machine type to use for the job. Defaults to the value from the
     * template if not specified.
     *
     * Generated from protobuf field <code>string machine_type = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setMachineType($var)
    {
        GPBUtil::checkString($var, True);
        $this->machine_type = $var;

        return $this;
    }

    /**
     * Additional experiment flags for the job.
     *
     * Generated from protobuf field <code>repeated string additional_experiments = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdditionalExperiments()
    {
        return $this->additional_experiments;
    }

    /**
     * Additional experiment flags for the job.
     *
     * Generated from protobuf field <code>repeated string additional_experiments = 7;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdditionalExperiments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->additional_experiments = $arr;

        return $this;
    }

    /**
     * Network to which VMs will be assigned.  If empty or unspecified,
     * the service will use the network "default".
     *
     * Generated from protobuf field <code>string network = 8;</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Network to which VMs will be assigned.  If empty or unspecified,
     * the service will use the network "default".
     *
     * Generated from protobuf field <code>string network = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * Subnetwork to which VMs will be assigned, if desired. You can specify a
     * subnetwork using either a complete URL or an abbreviated path. Expected to
     * be of the form
     * "https://www.googleapis.com/compute/v1/projects/HOST_PROJECT_ID/regions/REGION/subnetworks/SUBNETWORK"
     * or "regions/REGION/subnetworks/SUBNETWORK". If the subnetwork is located in
     * a Shared VPC network, you must use the complete URL.
     *
     * Generated from protobuf field <code>string subnetwork = 9;</code>
     * @return string
     */
    public function getSubnetwork()
    {
        return $this->subnetwork;
    }

    /**
     * Subnetwork to which VMs will be assigned, if desired. You can specify a
     * subnetwork using either a complete URL or an abbreviated path. Expected to
     * be of the form
     * "https://www.googleapis.com/compute/v1/projects/HOST_PROJECT_ID/regions/REGION/subnetworks/SUBNETWORK"
     * or "regions/REGION/subnetworks/SUBNETWORK". If the subnetwork is located in
     * a Shared VPC network, you must use the complete URL.
     *
     * Generated from protobuf field <code>string subnetwork = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnetwork = $var;

        return $this;
    }

    /**
     * Additional user labels to be specified for the job.
     * Keys and values must follow the restrictions specified in the [labeling
     * restrictions](https://cloud.google.com/compute/docs/labeling-resources#restrictions)
     * page.
     * An object containing a list of "key": value pairs.
     * Example: { "name": "wrench", "mass": "1kg", "count": "3" }.
     *
     * Generated from protobuf field <code>map<string, string> additional_user_labels = 10;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAdditionalUserLabels()
    {
        return $this->additional_user_labels;
    }

    /**
     * Additional user labels to be specified for the job.
     * Keys and values must follow the restrictions specified in the [labeling
     * restrictions](https://cloud.google.com/compute/docs/labeling-resources#restrictions)
     * page.
     * An object containing a list of "key": value pairs.
     * Example: { "name": "wrench", "mass": "1kg", "count": "3" }.
     *
     * Generated from protobuf field <code>map<string, string> additional_user_labels = 10;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAdditionalUserLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->additional_user_labels = $arr;

        return $this;
    }

    /**
     * Name for the Cloud KMS key for the job.
     * Key format is:
     * projects/<project>/locations/<location>/keyRings/<keyring>/cryptoKeys/<key>
     *
     * Generated from protobuf field <code>string kms_key_name = 11;</code>
     * @return string
     */
    public function getKmsKeyName()
    {
        return $this->kms_key_name;
    }

    /**
     * Name for the Cloud KMS key for the job.
     * Key format is:
     * projects/<project>/locations/<location>/keyRings/<keyring>/cryptoKeys/<key>
     *
     * Generated from protobuf field <code>string kms_key_name = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_name = $var;

        return $this;
    }

    /**
     * Configuration for VM IPs.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.WorkerIPAddressConfiguration ip_configuration = 12;</code>
     * @return int
     */
    public function getIpConfiguration()
    {
        return $this->ip_configuration;
    }

    /**
     * Configuration for VM IPs.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.WorkerIPAddressConfiguration ip_configuration = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setIpConfiguration($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataflow\V1beta3\WorkerIPAddressConfiguration::class);
        $this->ip_configuration = $var;

        return $this;
    }

    /**
     * The Compute Engine region
     * (https://cloud.google.com/compute/docs/regions-zones/regions-zones) in
     * which worker processing should occur, e.g. "us-west1". Mutually exclusive
     * with worker_zone. If neither worker_region nor worker_zone is specified,
     * default to the control plane's region.
     *
     * Generated from protobuf field <code>string worker_region = 13;</code>
     * @return string
     */
    public function getWorkerRegion()
    {
        return $this->worker_region;
    }

    /**
     * The Compute Engine region
     * (https://cloud.google.com/compute/docs/regions-zones/regions-zones) in
     * which worker processing should occur, e.g. "us-west1". Mutually exclusive
     * with worker_zone. If neither worker_region nor worker_zone is specified,
     * default to the control plane's region.
     *
     * Generated from protobuf field <code>string worker_region = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setWorkerRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->worker_region = $var;

        return $this;
    }

    /**
     * The Compute Engine zone
     * (https://cloud.google.com/compute/docs/regions-zones/regions-zones) in
     * which worker processing should occur, e.g. "us-west1-a". Mutually exclusive
     * with worker_region. If neither worker_region nor worker_zone is specified,
     * a zone in the control plane's region is chosen based on available capacity.
     * If both `worker_zone` and `zone` are set, `worker_zone` takes precedence.
     *
     * Generated from protobuf field <code>string worker_zone = 14;</code>
     * @return string
     */
    public function getWorkerZone()
    {
        return $this->worker_zone;
    }

    /**
     * The Compute Engine zone
     * (https://cloud.google.com/compute/docs/regions-zones/regions-zones) in
     * which worker processing should occur, e.g. "us-west1-a". Mutually exclusive
     * with worker_region. If neither worker_region nor worker_zone is specified,
     * a zone in the control plane's region is chosen based on available capacity.
     * If both `worker_zone` and `zone` are set, `worker_zone` takes precedence.
     *
     * Generated from protobuf field <code>string worker_zone = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setWorkerZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->worker_zone = $var;

        return $this;
    }

    /**
     * Whether to enable Streaming Engine for the job.
     *
     * Generated from protobuf field <code>bool enable_streaming_engine = 15;</code>
     * @return bool
     */
    public function getEnableStreamingEngine()
    {
        return $this->enable_streaming_engine;
    }

    /**
     * Whether to enable Streaming Engine for the job.
     *
     * Generated from protobuf field <code>bool enable_streaming_engine = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableStreamingEngine($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_streaming_engine = $var;

        return $this;
    }

    /**
     * Set FlexRS goal for the job.
     * https://cloud.google.com/dataflow/docs/guides/flexrs
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.FlexResourceSchedulingGoal flexrs_goal = 16;</code>
     * @return int
     */
    public function getFlexrsGoal()
    {
        return $this->flexrs_goal;
    }

    /**
     * Set FlexRS goal for the job.
     * https://cloud.google.com/dataflow/docs/guides/flexrs
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.FlexResourceSchedulingGoal flexrs_goal = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setFlexrsGoal($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataflow\V1beta3\FlexResourceSchedulingGoal::class);
        $this->flexrs_goal = $var;

        return $this;
    }

    /**
     * The Cloud Storage path for staging local files.
     * Must be a valid Cloud Storage URL, beginning with `gs://`.
     *
     * Generated from protobuf field <code>string staging_location = 17;</code>
     * @return string
     */
    public function getStagingLocation()
    {
        return $this->staging_location;
    }

    /**
     * The Cloud Storage path for staging local files.
     * Must be a valid Cloud Storage URL, beginning with `gs://`.
     *
     * Generated from protobuf field <code>string staging_location = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setStagingLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->staging_location = $var;

        return $this;
    }

    /**
     * Docker registry location of container image to use for the 'worker harness.
     * Default is the container for the version of the SDK. Note this field is
     * only valid for portable pipelines.
     *
     * Generated from protobuf field <code>string sdk_container_image = 18;</code>
     * @return string
     */
    public function getSdkContainerImage()
    {
        return $this->sdk_container_image;
    }

    /**
     * Docker registry location of container image to use for the 'worker harness.
     * Default is the container for the version of the SDK. Note this field is
     * only valid for portable pipelines.
     *
     * Generated from protobuf field <code>string sdk_container_image = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setSdkContainerImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->sdk_container_image = $var;

        return $this;
    }

    /**
     * Worker disk size, in gigabytes.
     *
     * Generated from protobuf field <code>int32 disk_size_gb = 20;</code>
     * @return int
     */
    public function getDiskSizeGb()
    {
        return $this->disk_size_gb;
    }

    /**
     * Worker disk size, in gigabytes.
     *
     * Generated from protobuf field <code>int32 disk_size_gb = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setDiskSizeGb($var)
    {
        GPBUtil::checkInt32($var);
        $this->disk_size_gb = $var;

        return $this;
    }

    /**
     * The algorithm to use for autoscaling
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.AutoscalingAlgorithm autoscaling_algorithm = 21;</code>
     * @return int
     */
    public function getAutoscalingAlgorithm()
    {
        return $this->autoscaling_algorithm;
    }

    /**
     * The algorithm to use for autoscaling
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.AutoscalingAlgorithm autoscaling_algorithm = 21;</code>
     * @param int $var
     * @return $this
     */
    public function setAutoscalingAlgorithm($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataflow\V1beta3\AutoscalingAlgorithm::class);
        $this->autoscaling_algorithm = $var;

        return $this;
    }

    /**
     * If true, save a heap dump before killing a thread or process which is GC
     * thrashing or out of memory. The location of the heap file will either be
     * echoed back to the user, or the user will be given the opportunity to
     * download the heap file.
     *
     * Generated from protobuf field <code>bool dump_heap_on_oom = 22;</code>
     * @return bool
     */
    public function getDumpHeapOnOom()
    {
        return $this->dump_heap_on_oom;
    }

    /**
     * If true, save a heap dump before killing a thread or process which is GC
     * thrashing or out of memory. The location of the heap file will either be
     * echoed back to the user, or the user will be given the opportunity to
     * download the heap file.
     *
     * Generated from protobuf field <code>bool dump_heap_on_oom = 22;</code>
     * @param bool $var
     * @return $this
     */
    public function setDumpHeapOnOom($var)
    {
        GPBUtil::checkBool($var);
        $this->dump_heap_on_oom = $var;

        return $this;
    }

    /**
     * Cloud Storage bucket (directory) to upload heap dumps to the given
     * location. Enabling this implies that heap dumps should be generated on OOM
     * (dump_heap_on_oom is set to true).
     *
     * Generated from protobuf field <code>string save_heap_dumps_to_gcs_path = 23;</code>
     * @return string
     */
    public function getSaveHeapDumpsToGcsPath()
    {
        return $this->save_heap_dumps_to_gcs_path;
    }

    /**
     * Cloud Storage bucket (directory) to upload heap dumps to the given
     * location. Enabling this implies that heap dumps should be generated on OOM
     * (dump_heap_on_oom is set to true).
     *
     * Generated from protobuf field <code>string save_heap_dumps_to_gcs_path = 23;</code>
     * @param string $var
     * @return $this
     */
    public function setSaveHeapDumpsToGcsPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->save_heap_dumps_to_gcs_path = $var;

        return $this;
    }

    /**
     * The machine type to use for launching the job. The default is
     * n1-standard-1.
     *
     * Generated from protobuf field <code>string launcher_machine_type = 24;</code>
     * @return string
     */
    public function getLauncherMachineType()
    {
        return $this->launcher_machine_type;
    }

    /**
     * The machine type to use for launching the job. The default is
     * n1-standard-1.
     *
     * Generated from protobuf field <code>string launcher_machine_type = 24;</code>
     * @param string $var
     * @return $this
     */
    public function setLauncherMachineType($var)
    {
        GPBUtil::checkString($var, True);
        $this->launcher_machine_type = $var;

        return $this;
    }

}


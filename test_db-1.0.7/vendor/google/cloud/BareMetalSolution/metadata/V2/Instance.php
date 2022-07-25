<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/instance.proto

namespace GPBMetadata\Google\Cloud\Baremetalsolution\V2;

class Instance
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Baremetalsolution\V2\Lun::initOnce();
        \GPBMetadata\Google\Cloud\Baremetalsolution\V2\Network::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
0google/cloud/baremetalsolution/v2/instance.proto!google.cloud.baremetalsolution.v2google/api/resource.proto+google/cloud/baremetalsolution/v2/lun.proto/google/cloud/baremetalsolution/v2/network.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
Instance
name (	B�A

id (	4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
machine_type (	@
state (21.google.cloud.baremetalsolution.v2.Instance.State
hyperthreading_enabled (G
labels (27.google.cloud.baremetalsolution.v2.Instance.LabelsEntry4
luns (2&.google.cloud.baremetalsolution.v2.Lun<
networks	 (2*.google.cloud.baremetalsolution.v2.Network*
"interactive_serial_console_enabled
 (
os_image (	
pod (	B�AU
network_template (	B;�A8
6baremetalsolution.googleapis.com/ServerNetworkTemplateO
logical_interfaces (23.google.cloud.baremetalsolution.v2.LogicalInterface-
LabelsEntry
key (	
value (	:8"J
State
STATE_UNSPECIFIED 
PROVISIONING
RUNNING
DELETED:l�Ai
)baremetalsolution.googleapis.com/Instance<projects/{project}/locations/{location}/instances/{instance}"U
GetInstanceRequest?
name (	B1�A�A+
)baremetalsolution.googleapis.com/Instance"�
ListInstancesRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	
filter (	"�
ListInstancesResponse>
	instances (2+.google.cloud.baremetalsolution.v2.Instance
next_page_token (	
unreachable (	"�
UpdateInstanceRequestB
instance (2+.google.cloud.baremetalsolution.v2.InstanceB�A/
update_mask (2.google.protobuf.FieldMask"W
ResetInstanceRequest?
name (	B1�A�A+
)baremetalsolution.googleapis.com/Instance"W
StartInstanceRequest?
name (	B1�A�A+
)baremetalsolution.googleapis.com/Instance"V
StopInstanceRequest?
name (	B1�A�A+
)baremetalsolution.googleapis.com/Instance"�
DetachLunRequestC
instance (	B1�A�A+
)baremetalsolution.googleapis.com/Instance9
lun (	B,�A�A&
$baremetalsolution.googleapis.com/Lun"�
ServerNetworkTemplate
name (	B�A!
applicable_instance_types (	e
logical_interfaces (2I.google.cloud.baremetalsolution.v2.ServerNetworkTemplate.LogicalInterface�
LogicalInterface
name (	e
type (2W.google.cloud.baremetalsolution.v2.ServerNetworkTemplate.LogicalInterface.InterfaceType
required ("B
InterfaceType
INTERFACE_TYPE_UNSPECIFIED 
BOND
NIC:��A�
6baremetalsolution.googleapis.com/ServerNetworkTemplateWprojects/{project}/locations/{location}/serverNetworkTemplate/{server_network_template}"
StartInstanceResponse"
StopInstanceResponseB�
%com.google.cloud.baremetalsolution.v2BInstanceProtoPZRgoogle.golang.org/genproto/googleapis/cloud/baremetalsolution/v2;baremetalsolution�!Google.Cloud.BareMetalSolution.V2�!Google\\Cloud\\BareMetalSolution\\V2�$Google::Cloud::BareMetalSolution::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}


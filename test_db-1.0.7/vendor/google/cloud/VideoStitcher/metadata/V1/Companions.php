<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/companions.proto

namespace GPBMetadata\Google\Cloud\Video\Stitcher\V1;

class Companions
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\Events::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
/google/cloud/video/stitcher/v1/companions.protogoogle.cloud.video.stitcher.v1"�
CompanionAds\\
display_requirement (2?.google.cloud.video.stitcher.v1.CompanionAds.DisplayRequirement=

companions (2).google.cloud.video.stitcher.v1.Companion"U
DisplayRequirement#
DISPLAY_REQUIREMENT_UNSPECIFIED 
ALL
ANY
NONE"�
	CompanionN
iframe_ad_resource
 (20.google.cloud.video.stitcher.v1.IframeAdResourceH N
static_ad_resource (20.google.cloud.video.stitcher.v1.StaticAdResourceH J
html_ad_resource (2..google.cloud.video.stitcher.v1.HtmlAdResourceH 
api_framework (	
	height_px (
width_px (
asset_height_px (
expanded_height_px (
asset_width_px (
expanded_width_px (

ad_slot_id (	5
events	 (2%.google.cloud.video.stitcher.v1.EventB
ad_resource"%
HtmlAdResource
html_source (	"
IframeAdResource
uri (	"6
StaticAdResource
uri (	
creative_type (	B
"com.google.cloud.video.stitcher.v1BCompanionsProtoPZFgoogle.golang.org/genproto/googleapis/cloud/video/stitcher/v1;stitcherbproto3'
        , true);

        static::$is_initialized = true;
    }
}


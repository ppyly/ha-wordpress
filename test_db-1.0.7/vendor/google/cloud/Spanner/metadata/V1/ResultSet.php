<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/result_set.proto

namespace GPBMetadata\Google\Spanner\V1;

class ResultSet
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Spanner\V1\QueryPlan::initOnce();
        \GPBMetadata\Google\Spanner\V1\Transaction::initOnce();
        \GPBMetadata\Google\Spanner\V1\Type::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
"google/spanner/v1/result_set.protogoogle.spanner.v1"google/spanner/v1/query_plan.proto#google/spanner/v1/transaction.protogoogle/spanner/v1/type.proto"�
	ResultSet6
metadata (2$.google.spanner.v1.ResultSetMetadata(
rows (2.google.protobuf.ListValue0
stats (2!.google.spanner.v1.ResultSetStats"�
PartialResultSet6
metadata (2$.google.spanner.v1.ResultSetMetadata&
values (2.google.protobuf.Value
chunked_value (
resume_token (0
stats (2!.google.spanner.v1.ResultSetStats"y
ResultSetMetadata/
row_type (2.google.spanner.v1.StructType3
transaction (2.google.spanner.v1.Transaction"�
ResultSetStats0

query_plan (2.google.spanner.v1.QueryPlan,
query_stats (2.google.protobuf.Struct
row_count_exact (H 
row_count_lower_bound (H B
	row_countB�
com.google.spanner.v1BResultSetProtoPZ8google.golang.org/genproto/googleapis/spanner/v1;spanner��Google.Cloud.Spanner.V1�Google\\Cloud\\Spanner\\V1�Google::Cloud::Spanner::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}


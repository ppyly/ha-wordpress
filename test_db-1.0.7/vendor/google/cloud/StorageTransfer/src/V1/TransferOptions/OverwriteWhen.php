<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Cloud\StorageTransfer\V1\TransferOptions;

use UnexpectedValueException;

/**
 * Specifies when to overwrite an object in the sink when an object with
 * matching name is found in the source.
 *
 * Protobuf type <code>google.storagetransfer.v1.TransferOptions.OverwriteWhen</code>
 */
class OverwriteWhen
{
    /**
     * Indicate the option is not set.
     *
     * Generated from protobuf enum <code>OVERWRITE_WHEN_UNSPECIFIED = 0;</code>
     */
    const OVERWRITE_WHEN_UNSPECIFIED = 0;
    /**
     * Overwrite destination object with source if the two objects are
     * different.
     *
     * Generated from protobuf enum <code>DIFFERENT = 1;</code>
     */
    const DIFFERENT = 1;
    /**
     * Never overwrite destination object.
     *
     * Generated from protobuf enum <code>NEVER = 2;</code>
     */
    const NEVER = 2;
    /**
     * Always overwrite destination object.
     *
     * Generated from protobuf enum <code>ALWAYS = 3;</code>
     */
    const ALWAYS = 3;

    private static $valueToName = [
        self::OVERWRITE_WHEN_UNSPECIFIED => 'OVERWRITE_WHEN_UNSPECIFIED',
        self::DIFFERENT => 'DIFFERENT',
        self::NEVER => 'NEVER',
        self::ALWAYS => 'ALWAYS',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}



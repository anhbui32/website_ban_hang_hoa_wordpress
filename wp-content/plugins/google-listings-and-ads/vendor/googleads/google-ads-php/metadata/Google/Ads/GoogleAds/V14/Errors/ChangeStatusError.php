<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/errors/change_status_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V14\Errors;

class ChangeStatusError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
9google/ads/googleads/v14/errors/change_status_error.protogoogle.ads.googleads.v14.errors"�
ChangeStatusErrorEnum"�
ChangeStatusError
UNSPECIFIED 
UNKNOWN
START_DATE_TOO_OLD
CHANGE_DATE_RANGE_INFINITE
CHANGE_DATE_RANGE_NEGATIVE
LIMIT_NOT_SPECIFIED
INVALID_LIMIT_CLAUSEB�
#com.google.ads.googleads.v14.errorsBChangeStatusErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v14/errors;errors�GAA�Google.Ads.GoogleAds.V14.Errors�Google\\Ads\\GoogleAds\\V14\\Errors�#Google::Ads::GoogleAds::V14::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}


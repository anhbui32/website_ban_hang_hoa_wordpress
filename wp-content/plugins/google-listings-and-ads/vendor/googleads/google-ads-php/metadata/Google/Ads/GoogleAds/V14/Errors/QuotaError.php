<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/errors/quota_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V14\Errors;

class QuotaError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
1google/ads/googleads/v14/errors/quota_error.protogoogle.ads.googleads.v14.errors"�
QuotaErrorEnum"}

QuotaError
UNSPECIFIED 
UNKNOWN
RESOURCE_EXHAUSTED
ACCESS_PROHIBITED"
RESOURCE_TEMPORARILY_EXHAUSTEDB�
#com.google.ads.googleads.v14.errorsBQuotaErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v14/errors;errors�GAA�Google.Ads.GoogleAds.V14.Errors�Google\\Ads\\GoogleAds\\V14\\Errors�#Google::Ads::GoogleAds::V14::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}


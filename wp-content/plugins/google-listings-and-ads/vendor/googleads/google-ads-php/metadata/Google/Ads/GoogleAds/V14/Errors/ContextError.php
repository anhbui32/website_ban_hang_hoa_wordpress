<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/errors/context_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V14\Errors;

class ContextError
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
3google/ads/googleads/v14/errors/context_error.protogoogle.ads.googleads.v14.errors"�
ContextErrorEnum"�
ContextError
UNSPECIFIED 
UNKNOWN\'
#OPERATION_NOT_PERMITTED_FOR_CONTEXT0
,OPERATION_NOT_PERMITTED_FOR_REMOVED_RESOURCEB�
#com.google.ads.googleads.v14.errorsBContextErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v14/errors;errors�GAA�Google.Ads.GoogleAds.V14.Errors�Google\\Ads\\GoogleAds\\V14\\Errors�#Google::Ads::GoogleAds::V14::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}


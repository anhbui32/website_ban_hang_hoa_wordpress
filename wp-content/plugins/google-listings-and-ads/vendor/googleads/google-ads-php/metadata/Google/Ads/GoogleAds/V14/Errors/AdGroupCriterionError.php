<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/errors/ad_group_criterion_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V14\Errors;

class AdGroupCriterionError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
>google/ads/googleads/v14/errors/ad_group_criterion_error.protogoogle.ads.googleads.v14.errors"�	
AdGroupCriterionErrorEnum"�	
AdGroupCriterionError
UNSPECIFIED 
UNKNOWN+
\'AD_GROUP_CRITERION_LABEL_DOES_NOT_EXIST+
\'AD_GROUP_CRITERION_LABEL_ALREADY_EXISTS*
&CANNOT_ADD_LABEL_TO_NEGATIVE_CRITERION
TOO_MANY_OPERATIONS
CANT_UPDATE_NEGATIVE
CONCRETE_TYPE_REQUIRED!
BID_INCOMPATIBLE_WITH_ADGROUP
CANNOT_TARGET_AND_EXCLUDE	
ILLEGAL_URL

INVALID_KEYWORD_TEXT
INVALID_DESTINATION_URL
MISSING_DESTINATION_URL_TAG1
-KEYWORD_LEVEL_BID_NOT_SUPPORTED_FOR_MANUALCPM
INVALID_USER_STATUS
CANNOT_ADD_CRITERIA_TYPE 
CANNOT_EXCLUDE_CRITERIA_TYPE5
1CAMPAIGN_TYPE_NOT_COMPATIBLE_WITH_PARTIAL_FAILURE-
)OPERATIONS_FOR_TOO_MANY_SHOPPING_ADGROUPS4
0CANNOT_MODIFY_URL_FIELDS_WITH_DUPLICATE_ELEMENTS!
CANNOT_SET_WITHOUT_FINAL_URLS6
2CANNOT_CLEAR_FINAL_URLS_IF_FINAL_MOBILE_URLS_EXIST3
/CANNOT_CLEAR_FINAL_URLS_IF_FINAL_APP_URLS_EXIST ;
7CANNOT_CLEAR_FINAL_URLS_IF_TRACKING_URL_TEMPLATE_EXISTS!:
6CANNOT_CLEAR_FINAL_URLS_IF_URL_CUSTOM_PARAMETERS_EXIST"2
.CANNOT_SET_BOTH_DESTINATION_URL_AND_FINAL_URLS#=
9CANNOT_SET_BOTH_DESTINATION_URL_AND_TRACKING_URL_TEMPLATE$/
+FINAL_URLS_NOT_SUPPORTED_FOR_CRITERION_TYPE%6
2FINAL_MOBILE_URLS_NOT_SUPPORTED_FOR_CRITERION_TYPE&B�
#com.google.ads.googleads.v14.errorsBAdGroupCriterionErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v14/errors;errors�GAA�Google.Ads.GoogleAds.V14.Errors�Google\\Ads\\GoogleAds\\V14\\Errors�#Google::Ads::GoogleAds::V14::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}


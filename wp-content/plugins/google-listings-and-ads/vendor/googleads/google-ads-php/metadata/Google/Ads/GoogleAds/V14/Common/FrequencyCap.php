<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/common/frequency_cap.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V14\Common;

class FrequencyCap
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
=google/ads/googleads/v14/enums/frequency_cap_event_type.protogoogle.ads.googleads.v14.enums"r
FrequencyCapEventTypeEnum"U
FrequencyCapEventType
UNSPECIFIED 
UNKNOWN

IMPRESSION

VIDEO_VIEWB�
"com.google.ads.googleads.v14.enumsBFrequencyCapEventTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
8google/ads/googleads/v14/enums/frequency_cap_level.protogoogle.ads.googleads.v14.enums"w
FrequencyCapLevelEnum"^
FrequencyCapLevel
UNSPECIFIED 
UNKNOWN
AD_GROUP_AD
AD_GROUP
CAMPAIGNB�
"com.google.ads.googleads.v14.enumsBFrequencyCapLevelProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
<google/ads/googleads/v14/enums/frequency_cap_time_unit.protogoogle.ads.googleads.v14.enums"n
FrequencyCapTimeUnitEnum"R
FrequencyCapTimeUnit
UNSPECIFIED 
UNKNOWN
DAY
WEEK	
MONTHB�
"com.google.ads.googleads.v14.enumsBFrequencyCapTimeUnitProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
3google/ads/googleads/v14/common/frequency_cap.protogoogle.ads.googleads.v14.common8google/ads/googleads/v14/enums/frequency_cap_level.proto<google/ads/googleads/v14/enums/frequency_cap_time_unit.proto"l
FrequencyCapEntry=
key (20.google.ads.googleads.v14.common.FrequencyCapKey
cap (H �B
_cap"�
FrequencyCapKeyV
level (2G.google.ads.googleads.v14.enums.FrequencyCapLevelEnum.FrequencyCapLevelc

event_type (2O.google.ads.googleads.v14.enums.FrequencyCapEventTypeEnum.FrequencyCapEventType`
	time_unit (2M.google.ads.googleads.v14.enums.FrequencyCapTimeUnitEnum.FrequencyCapTimeUnit
time_length (H �B
_time_lengthB�
#com.google.ads.googleads.v14.commonBFrequencyCapProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v14/common;common�GAA�Google.Ads.GoogleAds.V14.Common�Google\\Ads\\GoogleAds\\V14\\Common�#Google::Ads::GoogleAds::V14::Commonbproto3'
        , true);
        static::$is_initialized = true;
    }
}


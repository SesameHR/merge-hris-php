<?php
/**
 * EthnicityEnum
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Merge HRIS API
 *
 * The unified API for building rich integrations with multiple HR Information System platforms.
 *
 * The version of the OpenAPI document: 1.0
 * Contact: hello@merge.dev
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MergeHRISClient\Model;
use \MergeHRISClient\ObjectSerializer;

/**
 * EthnicityEnum Class Doc Comment
 *
 * @category Class
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EthnicityEnum
{
    /**
     * Possible values of this enum
     */
    const AMERICAN_INDIAN_OR_ALASKA_NATIVE = 'AMERICAN_INDIAN_OR_ALASKA_NATIVE';
    const ASIAN_OR_INDIAN_SUBCONTINENT = 'ASIAN_OR_INDIAN_SUBCONTINENT';
    const BLACK_OR_AFRICAN_AMERICAN = 'BLACK_OR_AFRICAN_AMERICAN';
    const HISPANIC_OR_LATINO = 'HISPANIC_OR_LATINO';
    const NATIVE_HAWAIIAN_OR_OTHER_PACIFIC_ISLANDER = 'NATIVE_HAWAIIAN_OR_OTHER_PACIFIC_ISLANDER';
    const TWO_OR_MORE_RACES = 'TWO_OR_MORE_RACES';
    const WHITE = 'WHITE';
    const PREFER_NOT_TO_DISCLOSE = 'PREFER_NOT_TO_DISCLOSE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AMERICAN_INDIAN_OR_ALASKA_NATIVE,
            self::ASIAN_OR_INDIAN_SUBCONTINENT,
            self::BLACK_OR_AFRICAN_AMERICAN,
            self::HISPANIC_OR_LATINO,
            self::NATIVE_HAWAIIAN_OR_OTHER_PACIFIC_ISLANDER,
            self::TWO_OR_MORE_RACES,
            self::WHITE,
            self::PREFER_NOT_TO_DISCLOSE,
        ];
    }
}


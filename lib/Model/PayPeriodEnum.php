<?php
/**
 * PayPeriodEnum
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
 * PayPeriodEnum Class Doc Comment
 *
 * @category Class
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayPeriodEnum
{
    /**
     * Possible values of this enum
     */
    const HOUR = 'HOUR';
    const DAY = 'DAY';
    const WEEK = 'WEEK';
    const EVERY_TWO_WEEKS = 'EVERY_TWO_WEEKS';
    const MONTH = 'MONTH';
    const QUARTER = 'QUARTER';
    const EVERY_SIX_MONTHS = 'EVERY_SIX_MONTHS';
    const YEAR = 'YEAR';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HOUR,
            self::DAY,
            self::WEEK,
            self::EVERY_TWO_WEEKS,
            self::MONTH,
            self::QUARTER,
            self::EVERY_SIX_MONTHS,
            self::YEAR,
        ];
    }
}



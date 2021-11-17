<?php
/**
 * EmploymentTypeEnum
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
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

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * EmploymentTypeEnum Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EmploymentTypeEnum
{
    /**
     * Possible values of this enum
     */
    const FULL_TIME = 'FULL_TIME';
    const PART_TIME = 'PART_TIME';
    const INTERN = 'INTERN';
    const CONTRACTOR = 'CONTRACTOR';
    const FREELANCE = 'FREELANCE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FULL_TIME,
            self::PART_TIME,
            self::INTERN,
            self::CONTRACTOR,
            self::FREELANCE,
        ];
    }
}


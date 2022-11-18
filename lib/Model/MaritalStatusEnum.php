<?php
/**
 * MaritalStatusEnum
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
 * MaritalStatusEnum Class Doc Comment
 *
 * @category Class
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MaritalStatusEnum
{
    /**
     * Possible values of this enum
     */
    const SINGLE = 'SINGLE';
    const MARRIED_FILING_JOINTLY = 'MARRIED_FILING_JOINTLY';
    const MARRIED_FILING_SEPARATELY = 'MARRIED_FILING_SEPARATELY';
    const HEAD_OF_HOUSEHOLD = 'HEAD_OF_HOUSEHOLD';
    const QUALIFYING_WIDOW_OR_WIDOWER_WITH_DEPENDENT_CHILD = 'QUALIFYING_WIDOW_OR_WIDOWER_WITH_DEPENDENT_CHILD';
    

    /**
     * Merge attempts to unify all enum values, but in some cases the original value will be retained. Since we cannot
     * list them all here, this value is present to call attention to this behavior. That being said, PHP 7 does not
     * have real enums so this MERGE_NONSTANDARD_VALUE is unused for now, just a placeholder.
     */
    const MERGE_NONSTANDARD_VALUE = "MERGE_NONSTANDARD_VALUE";

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SINGLE,
            self::MARRIED_FILING_JOINTLY,
            self::MARRIED_FILING_SEPARATELY,
            self::HEAD_OF_HOUSEHOLD,
            self::QUALIFYING_WIDOW_OR_WIDOWER_WITH_DEPENDENT_CHILD,
        ];
    }
}



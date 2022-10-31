<?php
/**
 * LinkedAccountCondition
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

use \ArrayAccess;
use \MergeHRISClient\ObjectSerializer;

/**
 * LinkedAccountCondition Class Doc Comment
 *
 * @category Class
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LinkedAccountCondition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LinkedAccountCondition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'condition_schema_id' => 'string',
        'common_model' => 'string',
        'native_name' => 'string',
        'operator' => 'string',
        'value' => 'mixed',
        'field_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'condition_schema_id' => 'uuid',
        'common_model' => null,
        'native_name' => null,
        'operator' => null,
        'value' => null,
        'field_name' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'condition_schema_id' => 'condition_schema_id',
        'common_model' => 'common_model',
        'native_name' => 'native_name',
        'operator' => 'operator',
        'value' => 'value',
        'field_name' => 'field_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'condition_schema_id' => 'setConditionSchemaId',
        'common_model' => 'setCommonModel',
        'native_name' => 'setNativeName',
        'operator' => 'setOperator',
        'value' => 'setValue',
        'field_name' => 'setFieldName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'condition_schema_id' => 'getConditionSchemaId',
        'common_model' => 'getCommonModel',
        'native_name' => 'getNativeName',
        'operator' => 'getOperator',
        'value' => 'getValue',
        'field_name' => 'getFieldName'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['condition_schema_id'] = $data['condition_schema_id'] ?? null;
        $this->container['common_model'] = $data['common_model'] ?? null;
        $this->container['native_name'] = $data['native_name'] ?? null;
        $this->container['operator'] = $data['operator'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
        $this->container['field_name'] = $data['field_name'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['condition_schema_id'] === null) {
            $invalidProperties[] = "'condition_schema_id' can't be null";
        }
        if ($this->container['native_name'] === null) {
            $invalidProperties[] = "'native_name' can't be null";
        }
        if ($this->container['operator'] === null) {
            $invalidProperties[] = "'operator' can't be null";
        }
        if ($this->container['field_name'] === null) {
            $invalidProperties[] = "'field_name' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets condition_schema_id
     *
     * @return string
     */
    public function getConditionSchemaId()
    {
        return $this->container['condition_schema_id'];
    }

    /**
     * Sets condition_schema_id
     *
     * @param string $condition_schema_id The ID indicating which condition schema to use for a specific condition.
     *
     * @return self
     */
    public function setConditionSchemaId($condition_schema_id)
    {
        $this->container['condition_schema_id'] = $condition_schema_id;

        return $this;
    }

    /**
     * Gets common_model
     *
     * @return string|null
     */
    public function getCommonModel()
    {
        return $this->container['common_model'];
    }

    /**
     * Sets common_model
     *
     * @param string|null $common_model The common model for a specific condition.
     *
     * @return self
     */
    public function setCommonModel($common_model)
    {
        $this->container['common_model'] = $common_model;

        return $this;
    }

    /**
     * Gets native_name
     *
     * @return string
     */
    public function getNativeName()
    {
        return $this->container['native_name'];
    }

    /**
     * Sets native_name
     *
     * @param string $native_name User-facing *native condition* name. e.g. \"Skip Manager\".
     *
     * @return self
     */
    public function setNativeName($native_name)
    {
        $this->container['native_name'] = $native_name;

        return $this;
    }

    /**
     * Gets operator
     *
     * @return string
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param string $operator The operator for a specific condition.
     *
     * @return self
     */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;

        return $this;
    }

    /**
     * Gets value
     *
     * @return mixed|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param mixed|null $value The value for a condition.
     *
     * @return self
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets field_name
     *
     * @return string
     */
    public function getFieldName()
    {
        return $this->container['field_name'];
    }

    /**
     * Sets field_name
     *
     * @param string $field_name The name of the field on the common model that this condition corresponds to, if they conceptually match. e.g. \"location_type\".
     *
     * @return self
     */
    public function setFieldName($field_name)
    {
        $this->container['field_name'] = $field_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



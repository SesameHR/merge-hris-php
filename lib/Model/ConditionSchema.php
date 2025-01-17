<?php
/**
 * ConditionSchema
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
 * ConditionSchema Class Doc Comment
 *
 * @category Class
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ConditionSchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConditionSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'common_model' => 'string',
        'native_name' => 'string',
        'field_name' => 'string',
        'is_unique' => 'bool',
        'condition_type' => '\MergeHRISClient\Model\ConditionTypeEnum',
        'operators' => '\MergeHRISClient\Model\OperatorSchema[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'common_model' => null,
        'native_name' => null,
        'field_name' => null,
        'is_unique' => null,
        'condition_type' => null,
        'operators' => null
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
        'id' => 'id',
        'common_model' => 'common_model',
        'native_name' => 'native_name',
        'field_name' => 'field_name',
        'is_unique' => 'is_unique',
        'condition_type' => 'condition_type',
        'operators' => 'operators'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'common_model' => 'setCommonModel',
        'native_name' => 'setNativeName',
        'field_name' => 'setFieldName',
        'is_unique' => 'setIsUnique',
        'condition_type' => 'setConditionType',
        'operators' => 'setOperators'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'common_model' => 'getCommonModel',
        'native_name' => 'getNativeName',
        'field_name' => 'getFieldName',
        'is_unique' => 'getIsUnique',
        'condition_type' => 'getConditionType',
        'operators' => 'getOperators'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['common_model'] = $data['common_model'] ?? null;
        $this->container['native_name'] = $data['native_name'] ?? null;
        $this->container['field_name'] = $data['field_name'] ?? null;
        $this->container['is_unique'] = $data['is_unique'] ?? null;
        $this->container['condition_type'] = $data['condition_type'] ?? null;
        $this->container['operators'] = $data['operators'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['native_name'] === null) {
            $invalidProperties[] = "'native_name' can't be null";
        }
        if ($this->container['field_name'] === null) {
            $invalidProperties[] = "'field_name' can't be null";
        }
        if ($this->container['condition_type'] === null) {
            $invalidProperties[] = "'condition_type' can't be null";
        }
        if ($this->container['operators'] === null) {
            $invalidProperties[] = "'operators' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The ID of the condition schema. This ID is used when updating selective syncs for a linked account.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string|null $common_model The common model for which a condition schema is defined.
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
     * Gets is_unique
     *
     * @return bool|null
     */
    public function getIsUnique()
    {
        return $this->container['is_unique'];
    }

    /**
     * Sets is_unique
     *
     * @param bool|null $is_unique Whether this condition can only be applied once. If false, the condition can be AND'd together multiple times.
     *
     * @return self
     */
    public function setIsUnique($is_unique)
    {
        $this->container['is_unique'] = $is_unique;

        return $this;
    }

    /**
     * Gets condition_type
     *
     * @return \MergeHRISClient\Model\ConditionTypeEnum
     */
    public function getConditionType()
    {
        return $this->container['condition_type'];
    }

    /**
     * Sets condition_type
     *
     * @param \MergeHRISClient\Model\ConditionTypeEnum $condition_type condition_type
     *
     * @return self
     */
    public function setConditionType($condition_type)
    {
        $this->container['condition_type'] = $condition_type;

        return $this;
    }

    /**
     * Gets operators
     *
     * @return \MergeHRISClient\Model\OperatorSchema[]
     */
    public function getOperators()
    {
        return $this->container['operators'];
    }

    /**
     * Sets operators
     *
     * @param \MergeHRISClient\Model\OperatorSchema[] $operators The schemas for the operators that can be used on a condition.
     *
     * @return self
     */
    public function setOperators($operators)
    {
        $this->container['operators'] = $operators;

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



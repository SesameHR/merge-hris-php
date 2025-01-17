<?php
/**
 * EmployeePayrollRun
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
 * EmployeePayrollRun Class Doc Comment
 *
 * @category Class
 * @description # The EmployeePayrollRun Object ### Description The &#x60;EmployeePayrollRun&#x60; object is used to represent a payroll run for a specific employee.  ### Usage Example Fetch from the &#x60;LIST EmployeePayrollRun&#x60; endpoint and filter by &#x60;ID&#x60; to show all employee payroll runs.
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EmployeePayrollRun implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmployeePayrollRun';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'remote_id' => 'string',
        'employee' => 'string',
        'payroll_run' => 'string',
        'gross_pay' => 'float',
        'net_pay' => 'float',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'check_date' => '\DateTime',
        'earnings' => '\MergeHRISClient\Model\Earning[]',
        'deductions' => '\MergeHRISClient\Model\Deduction[]',
        'taxes' => '\MergeHRISClient\Model\Tax[]',
        'remote_data' => '\MergeHRISClient\Model\RemoteData[]',
        'remote_was_deleted' => 'bool'
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
        'remote_id' => null,
        'employee' => 'uuid',
        'payroll_run' => 'uuid',
        'gross_pay' => 'float',
        'net_pay' => 'float',
        'start_date' => 'date-time',
        'end_date' => 'date-time',
        'check_date' => 'date-time',
        'earnings' => null,
        'deductions' => null,
        'taxes' => null,
        'remote_data' => null,
        'remote_was_deleted' => null
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
        'remote_id' => 'remote_id',
        'employee' => 'employee',
        'payroll_run' => 'payroll_run',
        'gross_pay' => 'gross_pay',
        'net_pay' => 'net_pay',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'check_date' => 'check_date',
        'earnings' => 'earnings',
        'deductions' => 'deductions',
        'taxes' => 'taxes',
        'remote_data' => 'remote_data',
        'remote_was_deleted' => 'remote_was_deleted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'remote_id' => 'setRemoteId',
        'employee' => 'setEmployee',
        'payroll_run' => 'setPayrollRun',
        'gross_pay' => 'setGrossPay',
        'net_pay' => 'setNetPay',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'check_date' => 'setCheckDate',
        'earnings' => 'setEarnings',
        'deductions' => 'setDeductions',
        'taxes' => 'setTaxes',
        'remote_data' => 'setRemoteData',
        'remote_was_deleted' => 'setRemoteWasDeleted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'remote_id' => 'getRemoteId',
        'employee' => 'getEmployee',
        'payroll_run' => 'getPayrollRun',
        'gross_pay' => 'getGrossPay',
        'net_pay' => 'getNetPay',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'check_date' => 'getCheckDate',
        'earnings' => 'getEarnings',
        'deductions' => 'getDeductions',
        'taxes' => 'getTaxes',
        'remote_data' => 'getRemoteData',
        'remote_was_deleted' => 'getRemoteWasDeleted'
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
        $this->container['remote_id'] = $data['remote_id'] ?? null;
        $this->container['employee'] = $data['employee'] ?? null;
        $this->container['payroll_run'] = $data['payroll_run'] ?? null;
        $this->container['gross_pay'] = $data['gross_pay'] ?? null;
        $this->container['net_pay'] = $data['net_pay'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['check_date'] = $data['check_date'] ?? null;
        $this->container['earnings'] = $data['earnings'] ?? null;
        $this->container['deductions'] = $data['deductions'] ?? null;
        $this->container['taxes'] = $data['taxes'] ?? null;
        $this->container['remote_data'] = $data['remote_data'] ?? null;
        $this->container['remote_was_deleted'] = $data['remote_was_deleted'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets remote_id
     *
     * @return string|null
     */
    public function getRemoteId()
    {
        return $this->container['remote_id'];
    }

    /**
     * Sets remote_id
     *
     * @param string|null $remote_id The third-party API ID of the matching object.
     *
     * @return self
     */
    public function setRemoteId($remote_id)
    {
        $this->container['remote_id'] = $remote_id;

        return $this;
    }

    /**
     * Gets employee
     *
     * @return string|null
     */
    public function getEmployee()
    {
        return $this->container['employee'];
    }

    /**
     * Sets employee
     *
     * @param string|null $employee employee
     *
     * @return self
     */
    public function setEmployee($employee)
    {
        $this->container['employee'] = $employee;

        return $this;
    }

    /**
     * Gets payroll_run
     *
     * @return string|null
     */
    public function getPayrollRun()
    {
        return $this->container['payroll_run'];
    }

    /**
     * Sets payroll_run
     *
     * @param string|null $payroll_run payroll_run
     *
     * @return self
     */
    public function setPayrollRun($payroll_run)
    {
        $this->container['payroll_run'] = $payroll_run;

        return $this;
    }

    /**
     * Gets gross_pay
     *
     * @return float|null
     */
    public function getGrossPay()
    {
        return $this->container['gross_pay'];
    }

    /**
     * Sets gross_pay
     *
     * @param float|null $gross_pay The gross pay from the run.
     *
     * @return self
     */
    public function setGrossPay($gross_pay)
    {
        $this->container['gross_pay'] = $gross_pay;

        return $this;
    }

    /**
     * Gets net_pay
     *
     * @return float|null
     */
    public function getNetPay()
    {
        return $this->container['net_pay'];
    }

    /**
     * Sets net_pay
     *
     * @param float|null $net_pay The net pay from the run.
     *
     * @return self
     */
    public function setNetPay($net_pay)
    {
        $this->container['net_pay'] = $net_pay;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime|null $start_date The day and time the payroll run started.
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime|null $end_date The day and time the payroll run ended.
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets check_date
     *
     * @return \DateTime|null
     */
    public function getCheckDate()
    {
        return $this->container['check_date'];
    }

    /**
     * Sets check_date
     *
     * @param \DateTime|null $check_date The day and time the payroll run was checked.
     *
     * @return self
     */
    public function setCheckDate($check_date)
    {
        $this->container['check_date'] = $check_date;

        return $this;
    }

    /**
     * Gets earnings
     *
     * @return \MergeHRISClient\Model\Earning[]|null
     */
    public function getEarnings()
    {
        return $this->container['earnings'];
    }

    /**
     * Sets earnings
     *
     * @param \MergeHRISClient\Model\Earning[]|null $earnings earnings
     *
     * @return self
     */
    public function setEarnings($earnings)
    {
        $this->container['earnings'] = $earnings;

        return $this;
    }

    /**
     * Gets deductions
     *
     * @return \MergeHRISClient\Model\Deduction[]|null
     */
    public function getDeductions()
    {
        return $this->container['deductions'];
    }

    /**
     * Sets deductions
     *
     * @param \MergeHRISClient\Model\Deduction[]|null $deductions deductions
     *
     * @return self
     */
    public function setDeductions($deductions)
    {
        $this->container['deductions'] = $deductions;

        return $this;
    }

    /**
     * Gets taxes
     *
     * @return \MergeHRISClient\Model\Tax[]|null
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     *
     * @param \MergeHRISClient\Model\Tax[]|null $taxes taxes
     *
     * @return self
     */
    public function setTaxes($taxes)
    {
        $this->container['taxes'] = $taxes;

        return $this;
    }

    /**
     * Gets remote_data
     *
     * @return \MergeHRISClient\Model\RemoteData[]|null
     */
    public function getRemoteData()
    {
        return $this->container['remote_data'];
    }

    /**
     * Sets remote_data
     *
     * @param \MergeHRISClient\Model\RemoteData[]|null $remote_data remote_data
     *
     * @return self
     */
    public function setRemoteData($remote_data)
    {
        $this->container['remote_data'] = $remote_data;

        return $this;
    }

    /**
     * Gets remote_was_deleted
     *
     * @return bool|null
     */
    public function getRemoteWasDeleted()
    {
        return $this->container['remote_was_deleted'];
    }

    /**
     * Sets remote_was_deleted
     *
     * @param bool|null $remote_was_deleted Indicates whether or not this object has been deleted by third party webhooks.
     *
     * @return self
     */
    public function setRemoteWasDeleted($remote_was_deleted)
    {
        $this->container['remote_was_deleted'] = $remote_was_deleted;

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



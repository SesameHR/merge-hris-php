<?php
/**
 * Employee
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
 * Employee Class Doc Comment
 *
 * @category Class
 * @description # The Employee Object ### Description The &#x60;Employee&#x60; object is used to represent an Employee for a company.  ### Usage Example Fetch from the &#x60;LIST Employee&#x60; endpoint and filter by &#x60;ID&#x60; to show all employees.
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Employee implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Employee';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'remote_id' => 'string',
        'employee_number' => 'string',
        'company' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'display_full_name' => 'string',
        'username' => 'string',
        'groups' => 'string[]',
        'work_email' => 'string',
        'personal_email' => 'string',
        'mobile_phone_number' => 'string',
        'employments' => 'string[]',
        'home_location' => 'string',
        'work_location' => 'string',
        'manager' => 'string',
        'team' => 'string',
        'pay_group' => 'string',
        'ssn' => 'string',
        'gender' => '\MergeHRISClient\Model\GenderEnum',
        'ethnicity' => '\MergeHRISClient\Model\EthnicityEnum',
        'marital_status' => '\MergeHRISClient\Model\MaritalStatusEnum',
        'date_of_birth' => '\DateTime',
        'hire_date' => '\DateTime',
        'start_date' => '\DateTime',
        'remote_created_at' => '\DateTime',
        'employment_status' => '\MergeHRISClient\Model\EmploymentStatusEnum',
        'termination_date' => '\DateTime',
        'avatar' => 'string',
        'remote_data' => '\MergeHRISClient\Model\RemoteData[]',
        'custom_fields' => 'array<string,mixed>',
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
        'employee_number' => null,
        'company' => 'uuid',
        'first_name' => null,
        'last_name' => null,
        'display_full_name' => null,
        'username' => null,
        'groups' => 'uuid',
        'work_email' => 'email',
        'personal_email' => 'email',
        'mobile_phone_number' => null,
        'employments' => 'uuid',
        'home_location' => 'uuid',
        'work_location' => 'uuid',
        'manager' => 'uuid',
        'team' => 'uuid',
        'pay_group' => 'uuid',
        'ssn' => null,
        'gender' => null,
        'ethnicity' => null,
        'marital_status' => null,
        'date_of_birth' => 'date-time',
        'hire_date' => 'date-time',
        'start_date' => 'date-time',
        'remote_created_at' => 'date-time',
        'employment_status' => null,
        'termination_date' => 'date-time',
        'avatar' => 'uri',
        'remote_data' => null,
        'custom_fields' => null,
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
        'employee_number' => 'employee_number',
        'company' => 'company',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'display_full_name' => 'display_full_name',
        'username' => 'username',
        'groups' => 'groups',
        'work_email' => 'work_email',
        'personal_email' => 'personal_email',
        'mobile_phone_number' => 'mobile_phone_number',
        'employments' => 'employments',
        'home_location' => 'home_location',
        'work_location' => 'work_location',
        'manager' => 'manager',
        'team' => 'team',
        'pay_group' => 'pay_group',
        'ssn' => 'ssn',
        'gender' => 'gender',
        'ethnicity' => 'ethnicity',
        'marital_status' => 'marital_status',
        'date_of_birth' => 'date_of_birth',
        'hire_date' => 'hire_date',
        'start_date' => 'start_date',
        'remote_created_at' => 'remote_created_at',
        'employment_status' => 'employment_status',
        'termination_date' => 'termination_date',
        'avatar' => 'avatar',
        'remote_data' => 'remote_data',
        'custom_fields' => 'custom_fields',
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
        'employee_number' => 'setEmployeeNumber',
        'company' => 'setCompany',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'display_full_name' => 'setDisplayFullName',
        'username' => 'setUsername',
        'groups' => 'setGroups',
        'work_email' => 'setWorkEmail',
        'personal_email' => 'setPersonalEmail',
        'mobile_phone_number' => 'setMobilePhoneNumber',
        'employments' => 'setEmployments',
        'home_location' => 'setHomeLocation',
        'work_location' => 'setWorkLocation',
        'manager' => 'setManager',
        'team' => 'setTeam',
        'pay_group' => 'setPayGroup',
        'ssn' => 'setSsn',
        'gender' => 'setGender',
        'ethnicity' => 'setEthnicity',
        'marital_status' => 'setMaritalStatus',
        'date_of_birth' => 'setDateOfBirth',
        'hire_date' => 'setHireDate',
        'start_date' => 'setStartDate',
        'remote_created_at' => 'setRemoteCreatedAt',
        'employment_status' => 'setEmploymentStatus',
        'termination_date' => 'setTerminationDate',
        'avatar' => 'setAvatar',
        'remote_data' => 'setRemoteData',
        'custom_fields' => 'setCustomFields',
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
        'employee_number' => 'getEmployeeNumber',
        'company' => 'getCompany',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'display_full_name' => 'getDisplayFullName',
        'username' => 'getUsername',
        'groups' => 'getGroups',
        'work_email' => 'getWorkEmail',
        'personal_email' => 'getPersonalEmail',
        'mobile_phone_number' => 'getMobilePhoneNumber',
        'employments' => 'getEmployments',
        'home_location' => 'getHomeLocation',
        'work_location' => 'getWorkLocation',
        'manager' => 'getManager',
        'team' => 'getTeam',
        'pay_group' => 'getPayGroup',
        'ssn' => 'getSsn',
        'gender' => 'getGender',
        'ethnicity' => 'getEthnicity',
        'marital_status' => 'getMaritalStatus',
        'date_of_birth' => 'getDateOfBirth',
        'hire_date' => 'getHireDate',
        'start_date' => 'getStartDate',
        'remote_created_at' => 'getRemoteCreatedAt',
        'employment_status' => 'getEmploymentStatus',
        'termination_date' => 'getTerminationDate',
        'avatar' => 'getAvatar',
        'remote_data' => 'getRemoteData',
        'custom_fields' => 'getCustomFields',
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
        $this->container['employee_number'] = $data['employee_number'] ?? null;
        $this->container['company'] = $data['company'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['display_full_name'] = $data['display_full_name'] ?? null;
        $this->container['username'] = $data['username'] ?? null;
        $this->container['groups'] = $data['groups'] ?? null;
        $this->container['work_email'] = $data['work_email'] ?? null;
        $this->container['personal_email'] = $data['personal_email'] ?? null;
        $this->container['mobile_phone_number'] = $data['mobile_phone_number'] ?? null;
        $this->container['employments'] = $data['employments'] ?? null;
        $this->container['home_location'] = $data['home_location'] ?? null;
        $this->container['work_location'] = $data['work_location'] ?? null;
        $this->container['manager'] = $data['manager'] ?? null;
        $this->container['team'] = $data['team'] ?? null;
        $this->container['pay_group'] = $data['pay_group'] ?? null;
        $this->container['ssn'] = $data['ssn'] ?? null;
        $this->container['gender'] = $data['gender'] ?? null;
        $this->container['ethnicity'] = $data['ethnicity'] ?? null;
        $this->container['marital_status'] = $data['marital_status'] ?? null;
        $this->container['date_of_birth'] = $data['date_of_birth'] ?? null;
        $this->container['hire_date'] = $data['hire_date'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['remote_created_at'] = $data['remote_created_at'] ?? null;
        $this->container['employment_status'] = $data['employment_status'] ?? null;
        $this->container['termination_date'] = $data['termination_date'] ?? null;
        $this->container['avatar'] = $data['avatar'] ?? null;
        $this->container['remote_data'] = $data['remote_data'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
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

        if (!is_null($this->container['work_email']) && (mb_strlen($this->container['work_email']) > 254)) {
            $invalidProperties[] = "invalid value for 'work_email', the character length must be smaller than or equal to 254.";
        }

        if (!is_null($this->container['personal_email']) && (mb_strlen($this->container['personal_email']) > 254)) {
            $invalidProperties[] = "invalid value for 'personal_email', the character length must be smaller than or equal to 254.";
        }

        if (!is_null($this->container['ssn']) && (mb_strlen($this->container['ssn']) > 100)) {
            $invalidProperties[] = "invalid value for 'ssn', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['avatar']) && (mb_strlen($this->container['avatar']) > 2000)) {
            $invalidProperties[] = "invalid value for 'avatar', the character length must be smaller than or equal to 2000.";
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
     * Gets employee_number
     *
     * @return string|null
     */
    public function getEmployeeNumber()
    {
        return $this->container['employee_number'];
    }

    /**
     * Sets employee_number
     *
     * @param string|null $employee_number The employee's number that appears in the remote UI. Note: This is distinct from the remote_id field, which is a unique identifier for the employee set by the remote API, and is not exposed to the user. This value can also change in many API providers.
     *
     * @return self
     */
    public function setEmployeeNumber($employee_number)
    {
        $this->container['employee_number'] = $employee_number;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string|null $company company
     *
     * @return self
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name The employee's first name.
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name The employee's last name.
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets display_full_name
     *
     * @return string|null
     */
    public function getDisplayFullName()
    {
        return $this->container['display_full_name'];
    }

    /**
     * Sets display_full_name
     *
     * @param string|null $display_full_name The employee's full name, to use for display purposes. If a preferred first name is available, the full name will include the preferred first name.
     *
     * @return self
     */
    public function setDisplayFullName($display_full_name)
    {
        $this->container['display_full_name'] = $display_full_name;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username The employee's username that appears in the remote UI.
     *
     * @return self
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return string[]|null
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param string[]|null $groups groups
     *
     * @return self
     */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets work_email
     *
     * @return string|null
     */
    public function getWorkEmail()
    {
        return $this->container['work_email'];
    }

    /**
     * Sets work_email
     *
     * @param string|null $work_email The employee's work email.
     *
     * @return self
     */
    public function setWorkEmail($work_email)
    {
        if (!is_null($work_email) && (mb_strlen($work_email) > 254)) {
            throw new \InvalidArgumentException('invalid length for $work_email when calling Employee., must be smaller than or equal to 254.');
        }

        $this->container['work_email'] = $work_email;

        return $this;
    }

    /**
     * Gets personal_email
     *
     * @return string|null
     */
    public function getPersonalEmail()
    {
        return $this->container['personal_email'];
    }

    /**
     * Sets personal_email
     *
     * @param string|null $personal_email The employee's personal email.
     *
     * @return self
     */
    public function setPersonalEmail($personal_email)
    {
        if (!is_null($personal_email) && (mb_strlen($personal_email) > 254)) {
            throw new \InvalidArgumentException('invalid length for $personal_email when calling Employee., must be smaller than or equal to 254.');
        }

        $this->container['personal_email'] = $personal_email;

        return $this;
    }

    /**
     * Gets mobile_phone_number
     *
     * @return string|null
     */
    public function getMobilePhoneNumber()
    {
        return $this->container['mobile_phone_number'];
    }

    /**
     * Sets mobile_phone_number
     *
     * @param string|null $mobile_phone_number The employee's mobile phone number.
     *
     * @return self
     */
    public function setMobilePhoneNumber($mobile_phone_number)
    {
        $this->container['mobile_phone_number'] = $mobile_phone_number;

        return $this;
    }

    /**
     * Gets employments
     *
     * @return string[]|null
     */
    public function getEmployments()
    {
        return $this->container['employments'];
    }

    /**
     * Sets employments
     *
     * @param string[]|null $employments Array of `Employment` IDs for this Employee.
     *
     * @return self
     */
    public function setEmployments($employments)
    {
        $this->container['employments'] = $employments;

        return $this;
    }

    /**
     * Gets home_location
     *
     * @return string|null
     */
    public function getHomeLocation()
    {
        return $this->container['home_location'];
    }

    /**
     * Sets home_location
     *
     * @param string|null $home_location home_location
     *
     * @return self
     */
    public function setHomeLocation($home_location)
    {
        $this->container['home_location'] = $home_location;

        return $this;
    }

    /**
     * Gets work_location
     *
     * @return string|null
     */
    public function getWorkLocation()
    {
        return $this->container['work_location'];
    }

    /**
     * Sets work_location
     *
     * @param string|null $work_location work_location
     *
     * @return self
     */
    public function setWorkLocation($work_location)
    {
        $this->container['work_location'] = $work_location;

        return $this;
    }

    /**
     * Gets manager
     *
     * @return string|null
     */
    public function getManager()
    {
        return $this->container['manager'];
    }

    /**
     * Sets manager
     *
     * @param string|null $manager manager
     *
     * @return self
     */
    public function setManager($manager)
    {
        $this->container['manager'] = $manager;

        return $this;
    }

    /**
     * Gets team
     *
     * @return string|null
     */
    public function getTeam()
    {
        return $this->container['team'];
    }

    /**
     * Sets team
     *
     * @param string|null $team team
     *
     * @return self
     */
    public function setTeam($team)
    {
        $this->container['team'] = $team;

        return $this;
    }

    /**
     * Gets pay_group
     *
     * @return string|null
     */
    public function getPayGroup()
    {
        return $this->container['pay_group'];
    }

    /**
     * Sets pay_group
     *
     * @param string|null $pay_group pay_group
     *
     * @return self
     */
    public function setPayGroup($pay_group)
    {
        $this->container['pay_group'] = $pay_group;

        return $this;
    }

    /**
     * Gets ssn
     *
     * @return string|null
     */
    public function getSsn()
    {
        return $this->container['ssn'];
    }

    /**
     * Sets ssn
     *
     * @param string|null $ssn The employee's social security number.
     *
     * @return self
     */
    public function setSsn($ssn)
    {
        if (!is_null($ssn) && (mb_strlen($ssn) > 100)) {
            throw new \InvalidArgumentException('invalid length for $ssn when calling Employee., must be smaller than or equal to 100.');
        }

        $this->container['ssn'] = $ssn;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return GenderEnum|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param GenderEnum|null $gender The employee's gender.
     *
     * @return self
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets ethnicity
     *
     * @return EthnicityEnum|null
     */
    public function getEthnicity()
    {
        return $this->container['ethnicity'];
    }

    /**
     * Sets ethnicity
     *
     * @param EthnicityEnum|null $ethnicity The employee's ethnicity.
     *
     * @return self
     */
    public function setEthnicity($ethnicity)
    {
        $this->container['ethnicity'] = $ethnicity;

        return $this;
    }

    /**
     * Gets marital_status
     *
     * @return MaritalStatusEnum|null
     */
    public function getMaritalStatus()
    {
        return $this->container['marital_status'];
    }

    /**
     * Sets marital_status
     *
     * @param MaritalStatusEnum|null $marital_status The employee's marital status.
     *
     * @return self
     */
    public function setMaritalStatus($marital_status)
    {
        $this->container['marital_status'] = $marital_status;

        return $this;
    }

    /**
     * Gets date_of_birth
     *
     * @return \DateTime|null
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param \DateTime|null $date_of_birth The employee's date of birth.
     *
     * @return self
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->container['date_of_birth'] = $date_of_birth;

        return $this;
    }

    /**
     * Gets hire_date
     *
     * @return \DateTime|null
     */
    public function getHireDate()
    {
        return $this->container['hire_date'];
    }

    /**
     * Sets hire_date
     *
     * @param \DateTime|null $hire_date The date that the employee was hired, usually the day that an offer letter is signed. If an employee has multiple hire dates from previous employments, this represents the most recent hire date. Note: If you're looking for the employee's start date, refer to the start_date field.
     *
     * @return self
     */
    public function setHireDate($hire_date)
    {
        $this->container['hire_date'] = $hire_date;

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
     * @param \DateTime|null $start_date The date that the employee started working. If an employee has multiple start dates from previous employments, this represents the most recent start date.
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets remote_created_at
     *
     * @return \DateTime|null
     */
    public function getRemoteCreatedAt()
    {
        return $this->container['remote_created_at'];
    }

    /**
     * Sets remote_created_at
     *
     * @param \DateTime|null $remote_created_at When the third party's employee was created.
     *
     * @return self
     */
    public function setRemoteCreatedAt($remote_created_at)
    {
        $this->container['remote_created_at'] = $remote_created_at;

        return $this;
    }

    /**
     * Gets employment_status
     *
     * @return EmploymentStatusEnum|null
     */
    public function getEmploymentStatus()
    {
        return $this->container['employment_status'];
    }

    /**
     * Sets employment_status
     *
     * @param EmploymentStatusEnum|null $employment_status The employment status of the employee.
     *
     * @return self
     */
    public function setEmploymentStatus($employment_status)
    {
        $this->container['employment_status'] = $employment_status;

        return $this;
    }

    /**
     * Gets termination_date
     *
     * @return \DateTime|null
     */
    public function getTerminationDate()
    {
        return $this->container['termination_date'];
    }

    /**
     * Sets termination_date
     *
     * @param \DateTime|null $termination_date The employee's termination date.
     *
     * @return self
     */
    public function setTerminationDate($termination_date)
    {
        $this->container['termination_date'] = $termination_date;

        return $this;
    }

    /**
     * Gets avatar
     *
     * @return string|null
     */
    public function getAvatar()
    {
        return $this->container['avatar'];
    }

    /**
     * Sets avatar
     *
     * @param string|null $avatar The URL of the employee's avatar image.
     *
     * @return self
     */
    public function setAvatar($avatar)
    {
        if (!is_null($avatar) && (mb_strlen($avatar) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $avatar when calling Employee., must be smaller than or equal to 2000.');
        }

        $this->container['avatar'] = $avatar;

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
     * Gets custom_fields
     *
     * @return array<string,mixed>|null
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param array<string,mixed>|null $custom_fields Custom fields configured for a given model.
     *
     * @return self
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

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
     * @param bool|null $remote_was_deleted remote_was_deleted
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



<?php
/**
 * DealCreateResponseDeal
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * freee API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Freee\Accounting\Model;

use \ArrayAccess;
use \Freee\Accounting\ObjectSerializer;

/**
 * DealCreateResponseDeal Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DealCreateResponseDeal implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'dealCreateResponse_deal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'int',
        'company_id' => 'int',
        'details' => '\Freee\Accounting\Model\DealDetails[]',
        'due_amount' => 'int',
        'due_date' => 'string',
        'id' => 'int',
        'issue_date' => 'string',
        'partner_code' => 'string',
        'partner_id' => 'int',
        'payments' => '\Freee\Accounting\Model\DealPayments[]',
        'ref_number' => 'string',
        'status' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => 'int64',
        'company_id' => null,
        'details' => null,
        'due_amount' => null,
        'due_date' => null,
        'id' => null,
        'issue_date' => null,
        'partner_code' => null,
        'partner_id' => null,
        'payments' => null,
        'ref_number' => null,
        'status' => null,
        'type' => null
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
        'amount' => 'amount',
        'company_id' => 'company_id',
        'details' => 'details',
        'due_amount' => 'due_amount',
        'due_date' => 'due_date',
        'id' => 'id',
        'issue_date' => 'issue_date',
        'partner_code' => 'partner_code',
        'partner_id' => 'partner_id',
        'payments' => 'payments',
        'ref_number' => 'ref_number',
        'status' => 'status',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'company_id' => 'setCompanyId',
        'details' => 'setDetails',
        'due_amount' => 'setDueAmount',
        'due_date' => 'setDueDate',
        'id' => 'setId',
        'issue_date' => 'setIssueDate',
        'partner_code' => 'setPartnerCode',
        'partner_id' => 'setPartnerId',
        'payments' => 'setPayments',
        'ref_number' => 'setRefNumber',
        'status' => 'setStatus',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'company_id' => 'getCompanyId',
        'details' => 'getDetails',
        'due_amount' => 'getDueAmount',
        'due_date' => 'getDueDate',
        'id' => 'getId',
        'issue_date' => 'getIssueDate',
        'partner_code' => 'getPartnerCode',
        'partner_id' => 'getPartnerId',
        'payments' => 'getPayments',
        'ref_number' => 'getRefNumber',
        'status' => 'getStatus',
        'type' => 'getType'
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

    const STATUS_UNSETTLED = 'unsettled';
    const STATUS_SETTLED = 'settled';
    const TYPE_INCOME = 'income';
    const TYPE_EXPENSE = 'expense';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_UNSETTLED,
            self::STATUS_SETTLED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_INCOME,
            self::TYPE_EXPENSE,
        ];
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['company_id'] = $data['company_id'] ?? null;
        $this->container['details'] = $data['details'] ?? null;
        $this->container['due_amount'] = $data['due_amount'] ?? null;
        $this->container['due_date'] = $data['due_date'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['issue_date'] = $data['issue_date'] ?? null;
        $this->container['partner_code'] = $data['partner_code'] ?? null;
        $this->container['partner_id'] = $data['partner_id'] ?? null;
        $this->container['payments'] = $data['payments'] ?? null;
        $this->container['ref_number'] = $data['ref_number'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (($this->container['amount'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'amount', must be smaller than or equal to 9223372036854775807.";
        }

        if (($this->container['amount'] < -9223372036854775808)) {
            $invalidProperties[] = "invalid value for 'amount', must be bigger than or equal to -9223372036854775808.";
        }

        if ($this->container['company_id'] === null) {
            $invalidProperties[] = "'company_id' can't be null";
        }
        if (($this->container['company_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'company_id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['company_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'company_id', must be bigger than or equal to 1.";
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if (($this->container['id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['id'] < 1)) {
            $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
        }

        if ($this->container['issue_date'] === null) {
            $invalidProperties[] = "'issue_date' can't be null";
        }
        if ($this->container['partner_id'] === null) {
            $invalidProperties[] = "'partner_id' can't be null";
        }
        if (($this->container['partner_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'partner_id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['partner_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'partner_id', must be bigger than or equal to 1.";
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
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
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount 金額
     *
     * @return self
     */
    public function setAmount($amount)
    {

        if (($amount > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling DealCreateResponseDeal., must be smaller than or equal to 9223372036854775807.');
        }
        if (($amount < -9223372036854775808)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling DealCreateResponseDeal., must be bigger than or equal to -9223372036854775808.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets company_id
     *
     * @return int
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param int $company_id 事業所ID
     *
     * @return self
     */
    public function setCompanyId($company_id)
    {

        if (($company_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $company_id when calling DealCreateResponseDeal., must be smaller than or equal to 2147483647.');
        }
        if (($company_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $company_id when calling DealCreateResponseDeal., must be bigger than or equal to 1.');
        }

        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets details
     *
     * @return \Freee\Accounting\Model\DealDetails[]|null
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \Freee\Accounting\Model\DealDetails[]|null $details 取引の明細行
     *
     * @return self
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets due_amount
     *
     * @return int|null
     */
    public function getDueAmount()
    {
        return $this->container['due_amount'];
    }

    /**
     * Sets due_amount
     *
     * @param int|null $due_amount 支払金額
     *
     * @return self
     */
    public function setDueAmount($due_amount)
    {
        $this->container['due_amount'] = $due_amount;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return string|null
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param string|null $due_date 支払期日 (yyyy-mm-dd)
     *
     * @return self
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id 取引ID
     *
     * @return self
     */
    public function setId($id)
    {

        if (($id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $id when calling DealCreateResponseDeal., must be smaller than or equal to 2147483647.');
        }
        if (($id < 1)) {
            throw new \InvalidArgumentException('invalid value for $id when calling DealCreateResponseDeal., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets issue_date
     *
     * @return string
     */
    public function getIssueDate()
    {
        return $this->container['issue_date'];
    }

    /**
     * Sets issue_date
     *
     * @param string $issue_date 発生日 (yyyy-mm-dd)
     *
     * @return self
     */
    public function setIssueDate($issue_date)
    {
        $this->container['issue_date'] = $issue_date;

        return $this;
    }

    /**
     * Gets partner_code
     *
     * @return string|null
     */
    public function getPartnerCode()
    {
        return $this->container['partner_code'];
    }

    /**
     * Sets partner_code
     *
     * @param string|null $partner_code 取引先コード
     *
     * @return self
     */
    public function setPartnerCode($partner_code)
    {
        $this->container['partner_code'] = $partner_code;

        return $this;
    }

    /**
     * Gets partner_id
     *
     * @return int
     */
    public function getPartnerId()
    {
        return $this->container['partner_id'];
    }

    /**
     * Sets partner_id
     *
     * @param int $partner_id 取引先ID
     *
     * @return self
     */
    public function setPartnerId($partner_id)
    {

        if (($partner_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $partner_id when calling DealCreateResponseDeal., must be smaller than or equal to 2147483647.');
        }
        if (($partner_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $partner_id when calling DealCreateResponseDeal., must be bigger than or equal to 1.');
        }

        $this->container['partner_id'] = $partner_id;

        return $this;
    }

    /**
     * Gets payments
     *
     * @return \Freee\Accounting\Model\DealPayments[]|null
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     *
     * @param \Freee\Accounting\Model\DealPayments[]|null $payments 取引の支払行
     *
     * @return self
     */
    public function setPayments($payments)
    {
        $this->container['payments'] = $payments;

        return $this;
    }

    /**
     * Gets ref_number
     *
     * @return string|null
     */
    public function getRefNumber()
    {
        return $this->container['ref_number'];
    }

    /**
     * Sets ref_number
     *
     * @param string|null $ref_number 管理番号
     *
     * @return self
     */
    public function setRefNumber($ref_number)
    {
        $this->container['ref_number'] = $ref_number;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status 決済状況 (未決済: unsettled, 完了: settled)
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type 収支区分 (収入: income, 支出: expense)
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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



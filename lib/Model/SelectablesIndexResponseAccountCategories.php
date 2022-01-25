<?php
/**
 * SelectablesIndexResponseAccountCategories
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
 * OpenAPI Generator version: 5.3.1
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
 * SelectablesIndexResponseAccountCategories Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SelectablesIndexResponseAccountCategories implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'selectablesIndexResponse_account_categories';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_items' => '\Freee\Accounting\Model\SelectablesIndexResponseAccountItems[]',
        'balance' => 'string',
        'desc' => 'string',
        'org_code' => 'string',
        'role' => 'string',
        'title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_items' => null,
        'balance' => null,
        'desc' => null,
        'org_code' => null,
        'role' => null,
        'title' => null
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
        'account_items' => 'account_items',
        'balance' => 'balance',
        'desc' => 'desc',
        'org_code' => 'org_code',
        'role' => 'role',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_items' => 'setAccountItems',
        'balance' => 'setBalance',
        'desc' => 'setDesc',
        'org_code' => 'setOrgCode',
        'role' => 'setRole',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_items' => 'getAccountItems',
        'balance' => 'getBalance',
        'desc' => 'getDesc',
        'org_code' => 'getOrgCode',
        'role' => 'getRole',
        'title' => 'getTitle'
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

    const BALANCE_EXPENSE = 'expense';
    const BALANCE_INCOME = 'income';
    const ORG_CODE_PERSONAL = 'personal';
    const ORG_CODE_CORPORATE = 'corporate';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBalanceAllowableValues()
    {
        return [
            self::BALANCE_EXPENSE,
            self::BALANCE_INCOME,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrgCodeAllowableValues()
    {
        return [
            self::ORG_CODE_PERSONAL,
            self::ORG_CODE_CORPORATE,
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
        $this->container['account_items'] = $data['account_items'] ?? null;
        $this->container['balance'] = $data['balance'] ?? null;
        $this->container['desc'] = $data['desc'] ?? null;
        $this->container['org_code'] = $data['org_code'] ?? null;
        $this->container['role'] = $data['role'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['account_items'] === null) {
            $invalidProperties[] = "'account_items' can't be null";
        }
        if ($this->container['balance'] === null) {
            $invalidProperties[] = "'balance' can't be null";
        }
        $allowedValues = $this->getBalanceAllowableValues();
        if (!is_null($this->container['balance']) && !in_array($this->container['balance'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'balance', must be one of '%s'",
                $this->container['balance'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['org_code'] === null) {
            $invalidProperties[] = "'org_code' can't be null";
        }
        $allowedValues = $this->getOrgCodeAllowableValues();
        if (!is_null($this->container['org_code']) && !in_array($this->container['org_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'org_code', must be one of '%s'",
                $this->container['org_code'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['role'] === null) {
            $invalidProperties[] = "'role' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
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
     * Gets account_items
     *
     * @return \Freee\Accounting\Model\SelectablesIndexResponseAccountItems[]
     */
    public function getAccountItems()
    {
        return $this->container['account_items'];
    }

    /**
     * Sets account_items
     *
     * @param \Freee\Accounting\Model\SelectablesIndexResponseAccountItems[] $account_items 勘定科目の一覧
     *
     * @return self
     */
    public function setAccountItems($account_items)
    {
        $this->container['account_items'] = $account_items;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return string
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param string $balance 収支
     *
     * @return self
     */
    public function setBalance($balance)
    {
        $allowedValues = $this->getBalanceAllowableValues();
        if (!in_array($balance, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'balance', must be one of '%s'",
                    $balance,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets desc
     *
     * @return string|null
     */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
     * Sets desc
     *
     * @param string|null $desc カテゴリーの説明
     *
     * @return self
     */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;

        return $this;
    }

    /**
     * Gets org_code
     *
     * @return string
     */
    public function getOrgCode()
    {
        return $this->container['org_code'];
    }

    /**
     * Sets org_code
     *
     * @param string $org_code 事業形態（個人事業主: personal、法人: corporate）
     *
     * @return self
     */
    public function setOrgCode($org_code)
    {
        $allowedValues = $this->getOrgCodeAllowableValues();
        if (!in_array($org_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'org_code', must be one of '%s'",
                    $org_code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['org_code'] = $org_code;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string $role カテゴリーコード
     *
     * @return self
     */
    public function setRole($role)
    {
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title カテゴリー名
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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



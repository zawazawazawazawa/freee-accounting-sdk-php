<?php
/**
 * InlineResponse20010Taxes
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
 * InlineResponse20010Taxes Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse20010Taxes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_10_taxes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'available' => 'bool',
        'code' => 'int',
        'display_category' => 'string',
        'name' => 'string',
        'name_ja' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'available' => null,
        'code' => null,
        'display_category' => null,
        'name' => null,
        'name_ja' => null
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
        'available' => 'available',
        'code' => 'code',
        'display_category' => 'display_category',
        'name' => 'name',
        'name_ja' => 'name_ja'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'available' => 'setAvailable',
        'code' => 'setCode',
        'display_category' => 'setDisplayCategory',
        'name' => 'setName',
        'name_ja' => 'setNameJa'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'available' => 'getAvailable',
        'code' => 'getCode',
        'display_category' => 'getDisplayCategory',
        'name' => 'getName',
        'name_ja' => 'getNameJa'
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

    const DISPLAY_CATEGORY__5 = 'tax_5';
    const DISPLAY_CATEGORY__8 = 'tax_8';
    const DISPLAY_CATEGORY_R8 = 'tax_r8';
    const DISPLAY_CATEGORY__10 = 'tax_10';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDisplayCategoryAllowableValues()
    {
        return [
            self::DISPLAY_CATEGORY__5,
            self::DISPLAY_CATEGORY__8,
            self::DISPLAY_CATEGORY_R8,
            self::DISPLAY_CATEGORY__10,
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
        $this->container['available'] = $data['available'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['display_category'] = $data['display_category'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['name_ja'] = $data['name_ja'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['available'] === null) {
            $invalidProperties[] = "'available' can't be null";
        }
        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if (($this->container['code'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'code', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['code'] < 0)) {
            $invalidProperties[] = "invalid value for 'code', must be bigger than or equal to 0.";
        }

        if ($this->container['display_category'] === null) {
            $invalidProperties[] = "'display_category' can't be null";
        }
        $allowedValues = $this->getDisplayCategoryAllowableValues();
        if (!is_null($this->container['display_category']) && !in_array($this->container['display_category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'display_category', must be one of '%s'",
                $this->container['display_category'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['name_ja'] === null) {
            $invalidProperties[] = "'name_ja' can't be null";
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
     * Gets available
     *
     * @return bool
     */
    public function getAvailable()
    {
        return $this->container['available'];
    }

    /**
     * Sets available
     *
     * @param bool $available true: 使用する、false: 使用しない
     *
     * @return self
     */
    public function setAvailable($available)
    {
        $this->container['available'] = $available;

        return $this;
    }

    /**
     * Gets code
     *
     * @return int
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param int $code 税区分コード
     *
     * @return self
     */
    public function setCode($code)
    {

        if (($code > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $code when calling InlineResponse20010Taxes., must be smaller than or equal to 2147483647.');
        }
        if (($code < 0)) {
            throw new \InvalidArgumentException('invalid value for $code when calling InlineResponse20010Taxes., must be bigger than or equal to 0.');
        }

        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets display_category
     *
     * @return string
     */
    public function getDisplayCategory()
    {
        return $this->container['display_category'];
    }

    /**
     * Sets display_category
     *
     * @param string $display_category 税区分の表示カテゴリ（tax_5: 5%表示の税区分、tax_8: 8%表示の税区分、tax_r8: 軽減税率8%表示の税区分、tax_10: 10%表示の税区分、null: 税率未設定税区分）
     *
     * @return self
     */
    public function setDisplayCategory($display_category)
    {
        $allowedValues = $this->getDisplayCategoryAllowableValues();
        if (!in_array($display_category, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'display_category', must be one of '%s'",
                    $display_category,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['display_category'] = $display_category;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name 税区分名
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets name_ja
     *
     * @return string
     */
    public function getNameJa()
    {
        return $this->container['name_ja'];
    }

    /**
     * Sets name_ja
     *
     * @param string $name_ja 税区分名（日本語表示用）
     *
     * @return self
     */
    public function setNameJa($name_ja)
    {
        $this->container['name_ja'] = $name_ja;

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



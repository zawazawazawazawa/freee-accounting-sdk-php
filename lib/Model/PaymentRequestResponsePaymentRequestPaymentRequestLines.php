<?php
/**
 * PaymentRequestResponsePaymentRequestPaymentRequestLines
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
 * PaymentRequestResponsePaymentRequestPaymentRequestLines Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentRequestResponsePaymentRequestPaymentRequestLines implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'paymentRequestResponse_payment_request_payment_request_lines';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_item_id' => 'int',
        'amount' => 'int',
        'description' => 'string',
        'id' => 'int',
        'item_id' => 'int',
        'line_type' => 'string',
        'section_id' => 'int',
        'segment_1_tag_id' => 'int',
        'segment_2_tag_id' => 'int',
        'segment_3_tag_id' => 'int',
        'tag_ids' => 'int[]',
        'tax_code' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_item_id' => null,
        'amount' => null,
        'description' => null,
        'id' => 'int64',
        'item_id' => null,
        'line_type' => null,
        'section_id' => null,
        'segment_1_tag_id' => 'int64',
        'segment_2_tag_id' => 'int64',
        'segment_3_tag_id' => 'int64',
        'tag_ids' => null,
        'tax_code' => null
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
        'account_item_id' => 'account_item_id',
        'amount' => 'amount',
        'description' => 'description',
        'id' => 'id',
        'item_id' => 'item_id',
        'line_type' => 'line_type',
        'section_id' => 'section_id',
        'segment_1_tag_id' => 'segment_1_tag_id',
        'segment_2_tag_id' => 'segment_2_tag_id',
        'segment_3_tag_id' => 'segment_3_tag_id',
        'tag_ids' => 'tag_ids',
        'tax_code' => 'tax_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_item_id' => 'setAccountItemId',
        'amount' => 'setAmount',
        'description' => 'setDescription',
        'id' => 'setId',
        'item_id' => 'setItemId',
        'line_type' => 'setLineType',
        'section_id' => 'setSectionId',
        'segment_1_tag_id' => 'setSegment1TagId',
        'segment_2_tag_id' => 'setSegment2TagId',
        'segment_3_tag_id' => 'setSegment3TagId',
        'tag_ids' => 'setTagIds',
        'tax_code' => 'setTaxCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_item_id' => 'getAccountItemId',
        'amount' => 'getAmount',
        'description' => 'getDescription',
        'id' => 'getId',
        'item_id' => 'getItemId',
        'line_type' => 'getLineType',
        'section_id' => 'getSectionId',
        'segment_1_tag_id' => 'getSegment1TagId',
        'segment_2_tag_id' => 'getSegment2TagId',
        'segment_3_tag_id' => 'getSegment3TagId',
        'tag_ids' => 'getTagIds',
        'tax_code' => 'getTaxCode'
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

    const LINE_TYPE_DEAL_LINE = 'deal_line';
    const LINE_TYPE_WITHHOLDING_TAX = 'withholding_tax';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLineTypeAllowableValues()
    {
        return [
            self::LINE_TYPE_DEAL_LINE,
            self::LINE_TYPE_WITHHOLDING_TAX,
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
        $this->container['account_item_id'] = $data['account_item_id'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['item_id'] = $data['item_id'] ?? null;
        $this->container['line_type'] = $data['line_type'] ?? null;
        $this->container['section_id'] = $data['section_id'] ?? null;
        $this->container['segment_1_tag_id'] = $data['segment_1_tag_id'] ?? null;
        $this->container['segment_2_tag_id'] = $data['segment_2_tag_id'] ?? null;
        $this->container['segment_3_tag_id'] = $data['segment_3_tag_id'] ?? null;
        $this->container['tag_ids'] = $data['tag_ids'] ?? null;
        $this->container['tax_code'] = $data['tax_code'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['account_item_id'] === null) {
            $invalidProperties[] = "'account_item_id' can't be null";
        }
        if (($this->container['account_item_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'account_item_id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['account_item_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'account_item_id', must be bigger than or equal to 1.";
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (($this->container['amount'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'amount', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'amount', must be bigger than or equal to 0.";
        }

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if (($this->container['id'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 9223372036854775807.";
        }

        if (($this->container['id'] < 1)) {
            $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
        }

        if ($this->container['item_id'] === null) {
            $invalidProperties[] = "'item_id' can't be null";
        }
        if (($this->container['item_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'item_id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['item_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'item_id', must be bigger than or equal to 1.";
        }

        if ($this->container['line_type'] === null) {
            $invalidProperties[] = "'line_type' can't be null";
        }
        $allowedValues = $this->getLineTypeAllowableValues();
        if (!is_null($this->container['line_type']) && !in_array($this->container['line_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'line_type', must be one of '%s'",
                $this->container['line_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['section_id'] === null) {
            $invalidProperties[] = "'section_id' can't be null";
        }
        if (($this->container['section_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'section_id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['section_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'section_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['segment_1_tag_id']) && ($this->container['segment_1_tag_id'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'segment_1_tag_id', must be smaller than or equal to 9223372036854775807.";
        }

        if (!is_null($this->container['segment_1_tag_id']) && ($this->container['segment_1_tag_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'segment_1_tag_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['segment_2_tag_id']) && ($this->container['segment_2_tag_id'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'segment_2_tag_id', must be smaller than or equal to 9223372036854775807.";
        }

        if (!is_null($this->container['segment_2_tag_id']) && ($this->container['segment_2_tag_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'segment_2_tag_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['segment_3_tag_id']) && ($this->container['segment_3_tag_id'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'segment_3_tag_id', must be smaller than or equal to 9223372036854775807.";
        }

        if (!is_null($this->container['segment_3_tag_id']) && ($this->container['segment_3_tag_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'segment_3_tag_id', must be bigger than or equal to 1.";
        }

        if ($this->container['tag_ids'] === null) {
            $invalidProperties[] = "'tag_ids' can't be null";
        }
        if ($this->container['tax_code'] === null) {
            $invalidProperties[] = "'tax_code' can't be null";
        }
        if (($this->container['tax_code'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'tax_code', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['tax_code'] < 0)) {
            $invalidProperties[] = "invalid value for 'tax_code', must be bigger than or equal to 0.";
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
     * Gets account_item_id
     *
     * @return int
     */
    public function getAccountItemId()
    {
        return $this->container['account_item_id'];
    }

    /**
     * Sets account_item_id
     *
     * @param int $account_item_id 勘定科目ID
     *
     * @return self
     */
    public function setAccountItemId($account_item_id)
    {

        if (($account_item_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $account_item_id when calling PaymentRequestResponsePaymentRequestPaymentRequestLines., must be smaller than or equal to 2147483647.');
        }
        if (($account_item_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $account_item_id when calling PaymentRequestResponsePaymentRequestPaymentRequestLines., must be bigger than or equal to 1.');
        }

        $this->container['account_item_id'] = $account_item_id;

        return $this;
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

        if (($amount > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling PaymentRequestResponsePaymentRequestPaymentRequestLines., must be smaller than or equal to 2147483647.');
        }
        if (($amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling PaymentRequestResponsePaymentRequestPaymentRequestLines., must be bigger than or equal to 0.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description 内容
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param int $id 支払依頼の項目行ID
     *
     * @return self
     */
    public function setId($id)
    {

        if (($id > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $id when calling PaymentRequestResponsePaymentRequestPaymentRequestLines., must be smaller than or equal to 9223372036854775807.');
        }
        if (($id < 1)) {
            throw new \InvalidArgumentException('invalid value for $id when calling PaymentRequestResponsePaymentRequestPaymentRequestLines., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return int
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param int $item_id 品目ID
     *
     * @return self
     */
    public function setItemId($item_id)
    {

        if (($item_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $item_id when calling PaymentRequestResponsePaymentRequestPaymentRequestLines., must be smaller than or equal to 2147483647.');
        }
        if (($item_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $item_id when calling PaymentRequestResponsePaymentRequestPaymentRequestLines., must be bigger than or equal to 1.');
        }

        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets line_type
     *
     * @return string
     */
    public function getLineType()
    {
        return $this->container['line_type'];
    }

    /**
     * Sets line_type
     *
     * @param string $line_type 行の種類 (deal_line: 支払依頼, withholding_tax: 源泉徴収税)
     *
     * @return self
     */
    public function setLineType($line_type)
    {
        $allowedValues = $this->getLineTypeAllowableValues();
        if (!in_array($line_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'line_type', must be one of '%s'",
                    $line_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['line_type'] = $line_type;

        return $this;
    }

    /**
     * Gets section_id
     *
     * @return int
     */
    public function getSectionId()
    {
        return $this->container['section_id'];
    }

    /**
     * Sets section_id
     *
     * @param int $section_id 部門ID
     *
     * @return self
     */
    public function setSectionId($section_id)
    {

        if (($section_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $section_id when calling PaymentRequestResponsePaymentRequestPaymentRequestLines., must be smaller than or equal to 2147483647.');
        }
        if (($section_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $section_id when calling PaymentRequestResponsePaymentRequestPaymentRequestLines., must be bigger than or equal to 1.');
        }

        $this->container['section_id'] = $section_id;

        return $this;
    }

    /**
     * Gets segment_1_tag_id
     *
     * @return int|null
     */
    public function getSegment1TagId()
    {
        return $this->container['segment_1_tag_id'];
    }

    /**
     * Sets segment_1_tag_id
     *
     * @param int|null $segment_1_tag_id セグメント１ID。セグメント１が使用可能なプランの時のみレスポンスに含まれます。
     *
     * @return self
     */
    public function setSegment1TagId($segment_1_tag_id)
    {

        if (!is_null($segment_1_tag_id) && ($segment_1_tag_id > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $segment_1_tag_id when calling PaymentRequestResponsePaymentRequestPaymentRequestLines., must be smaller than or equal to 9223372036854775807.');
        }
        if (!is_null($segment_1_tag_id) && ($segment_1_tag_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $segment_1_tag_id when calling PaymentRequestResponsePaymentRequestPaymentRequestLines., must be bigger than or equal to 1.');
        }

        $this->container['segment_1_tag_id'] = $segment_1_tag_id;

        return $this;
    }

    /**
     * Gets segment_2_tag_id
     *
     * @return int|null
     */
    public function getSegment2TagId()
    {
        return $this->container['segment_2_tag_id'];
    }

    /**
     * Sets segment_2_tag_id
     *
     * @param int|null $segment_2_tag_id セグメント２ID。セグメント２が使用可能なプランの時のみレスポンスに含まれます。
     *
     * @return self
     */
    public function setSegment2TagId($segment_2_tag_id)
    {

        if (!is_null($segment_2_tag_id) && ($segment_2_tag_id > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $segment_2_tag_id when calling PaymentRequestResponsePaymentRequestPaymentRequestLines., must be smaller than or equal to 9223372036854775807.');
        }
        if (!is_null($segment_2_tag_id) && ($segment_2_tag_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $segment_2_tag_id when calling PaymentRequestResponsePaymentRequestPaymentRequestLines., must be bigger than or equal to 1.');
        }

        $this->container['segment_2_tag_id'] = $segment_2_tag_id;

        return $this;
    }

    /**
     * Gets segment_3_tag_id
     *
     * @return int|null
     */
    public function getSegment3TagId()
    {
        return $this->container['segment_3_tag_id'];
    }

    /**
     * Sets segment_3_tag_id
     *
     * @param int|null $segment_3_tag_id セグメント３ID。セグメント３が使用可能なプランの時のみレスポンスに含まれます。
     *
     * @return self
     */
    public function setSegment3TagId($segment_3_tag_id)
    {

        if (!is_null($segment_3_tag_id) && ($segment_3_tag_id > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $segment_3_tag_id when calling PaymentRequestResponsePaymentRequestPaymentRequestLines., must be smaller than or equal to 9223372036854775807.');
        }
        if (!is_null($segment_3_tag_id) && ($segment_3_tag_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $segment_3_tag_id when calling PaymentRequestResponsePaymentRequestPaymentRequestLines., must be bigger than or equal to 1.');
        }

        $this->container['segment_3_tag_id'] = $segment_3_tag_id;

        return $this;
    }

    /**
     * Gets tag_ids
     *
     * @return int[]
     */
    public function getTagIds()
    {
        return $this->container['tag_ids'];
    }

    /**
     * Sets tag_ids
     *
     * @param int[] $tag_ids メモタグID
     *
     * @return self
     */
    public function setTagIds($tag_ids)
    {
        $this->container['tag_ids'] = $tag_ids;

        return $this;
    }

    /**
     * Gets tax_code
     *
     * @return int
     */
    public function getTaxCode()
    {
        return $this->container['tax_code'];
    }

    /**
     * Sets tax_code
     *
     * @param int $tax_code 税区分コード
     *
     * @return self
     */
    public function setTaxCode($tax_code)
    {

        if (($tax_code > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $tax_code when calling PaymentRequestResponsePaymentRequestPaymentRequestLines., must be smaller than or equal to 2147483647.');
        }
        if (($tax_code < 0)) {
            throw new \InvalidArgumentException('invalid value for $tax_code when calling PaymentRequestResponsePaymentRequestPaymentRequestLines., must be bigger than or equal to 0.');
        }

        $this->container['tax_code'] = $tax_code;

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


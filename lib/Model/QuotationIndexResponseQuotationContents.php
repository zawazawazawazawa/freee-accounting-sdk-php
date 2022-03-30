<?php
/**
 * QuotationIndexResponseQuotationContents
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
 * QuotationIndexResponseQuotationContents Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class QuotationIndexResponseQuotationContents implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'quotationIndexResponse_quotation_contents';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_item_id' => 'int',
        'account_item_name' => 'string',
        'amount' => 'int',
        'description' => 'string',
        'id' => 'int',
        'item_id' => 'int',
        'item_name' => 'string',
        'order' => 'int',
        'qty' => 'float',
        'reduced_vat' => 'bool',
        'section_id' => 'int',
        'section_name' => 'string',
        'segment_1_tag_id' => 'int',
        'segment_1_tag_name' => 'string',
        'segment_2_tag_id' => 'int',
        'segment_2_tag_name' => 'string',
        'segment_3_tag_id' => 'int',
        'segment_3_tag_name' => 'string',
        'tag_ids' => 'int[]',
        'tag_names' => 'string[]',
        'tax_code' => 'int',
        'type' => 'string',
        'unit' => 'string',
        'unit_price' => 'float',
        'vat' => 'int'
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
        'account_item_name' => null,
        'amount' => null,
        'description' => null,
        'id' => null,
        'item_id' => null,
        'item_name' => null,
        'order' => null,
        'qty' => null,
        'reduced_vat' => null,
        'section_id' => null,
        'section_name' => null,
        'segment_1_tag_id' => 'int64',
        'segment_1_tag_name' => null,
        'segment_2_tag_id' => 'int64',
        'segment_2_tag_name' => null,
        'segment_3_tag_id' => 'int64',
        'segment_3_tag_name' => null,
        'tag_ids' => null,
        'tag_names' => null,
        'tax_code' => null,
        'type' => null,
        'unit' => null,
        'unit_price' => null,
        'vat' => null
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
        'account_item_name' => 'account_item_name',
        'amount' => 'amount',
        'description' => 'description',
        'id' => 'id',
        'item_id' => 'item_id',
        'item_name' => 'item_name',
        'order' => 'order',
        'qty' => 'qty',
        'reduced_vat' => 'reduced_vat',
        'section_id' => 'section_id',
        'section_name' => 'section_name',
        'segment_1_tag_id' => 'segment_1_tag_id',
        'segment_1_tag_name' => 'segment_1_tag_name',
        'segment_2_tag_id' => 'segment_2_tag_id',
        'segment_2_tag_name' => 'segment_2_tag_name',
        'segment_3_tag_id' => 'segment_3_tag_id',
        'segment_3_tag_name' => 'segment_3_tag_name',
        'tag_ids' => 'tag_ids',
        'tag_names' => 'tag_names',
        'tax_code' => 'tax_code',
        'type' => 'type',
        'unit' => 'unit',
        'unit_price' => 'unit_price',
        'vat' => 'vat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_item_id' => 'setAccountItemId',
        'account_item_name' => 'setAccountItemName',
        'amount' => 'setAmount',
        'description' => 'setDescription',
        'id' => 'setId',
        'item_id' => 'setItemId',
        'item_name' => 'setItemName',
        'order' => 'setOrder',
        'qty' => 'setQty',
        'reduced_vat' => 'setReducedVat',
        'section_id' => 'setSectionId',
        'section_name' => 'setSectionName',
        'segment_1_tag_id' => 'setSegment1TagId',
        'segment_1_tag_name' => 'setSegment1TagName',
        'segment_2_tag_id' => 'setSegment2TagId',
        'segment_2_tag_name' => 'setSegment2TagName',
        'segment_3_tag_id' => 'setSegment3TagId',
        'segment_3_tag_name' => 'setSegment3TagName',
        'tag_ids' => 'setTagIds',
        'tag_names' => 'setTagNames',
        'tax_code' => 'setTaxCode',
        'type' => 'setType',
        'unit' => 'setUnit',
        'unit_price' => 'setUnitPrice',
        'vat' => 'setVat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_item_id' => 'getAccountItemId',
        'account_item_name' => 'getAccountItemName',
        'amount' => 'getAmount',
        'description' => 'getDescription',
        'id' => 'getId',
        'item_id' => 'getItemId',
        'item_name' => 'getItemName',
        'order' => 'getOrder',
        'qty' => 'getQty',
        'reduced_vat' => 'getReducedVat',
        'section_id' => 'getSectionId',
        'section_name' => 'getSectionName',
        'segment_1_tag_id' => 'getSegment1TagId',
        'segment_1_tag_name' => 'getSegment1TagName',
        'segment_2_tag_id' => 'getSegment2TagId',
        'segment_2_tag_name' => 'getSegment2TagName',
        'segment_3_tag_id' => 'getSegment3TagId',
        'segment_3_tag_name' => 'getSegment3TagName',
        'tag_ids' => 'getTagIds',
        'tag_names' => 'getTagNames',
        'tax_code' => 'getTaxCode',
        'type' => 'getType',
        'unit' => 'getUnit',
        'unit_price' => 'getUnitPrice',
        'vat' => 'getVat'
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

    const TYPE_NORMAL = 'normal';
    const TYPE_DISCOUNT = 'discount';
    const TYPE_TEXT = 'text';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_NORMAL,
            self::TYPE_DISCOUNT,
            self::TYPE_TEXT,
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
        $this->container['account_item_name'] = $data['account_item_name'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['item_id'] = $data['item_id'] ?? null;
        $this->container['item_name'] = $data['item_name'] ?? null;
        $this->container['order'] = $data['order'] ?? null;
        $this->container['qty'] = $data['qty'] ?? null;
        $this->container['reduced_vat'] = $data['reduced_vat'] ?? null;
        $this->container['section_id'] = $data['section_id'] ?? null;
        $this->container['section_name'] = $data['section_name'] ?? null;
        $this->container['segment_1_tag_id'] = $data['segment_1_tag_id'] ?? null;
        $this->container['segment_1_tag_name'] = $data['segment_1_tag_name'] ?? null;
        $this->container['segment_2_tag_id'] = $data['segment_2_tag_id'] ?? null;
        $this->container['segment_2_tag_name'] = $data['segment_2_tag_name'] ?? null;
        $this->container['segment_3_tag_id'] = $data['segment_3_tag_id'] ?? null;
        $this->container['segment_3_tag_name'] = $data['segment_3_tag_name'] ?? null;
        $this->container['tag_ids'] = $data['tag_ids'] ?? null;
        $this->container['tag_names'] = $data['tag_names'] ?? null;
        $this->container['tax_code'] = $data['tax_code'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['unit'] = $data['unit'] ?? null;
        $this->container['unit_price'] = $data['unit_price'] ?? null;
        $this->container['vat'] = $data['vat'] ?? null;
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
        if ($this->container['account_item_name'] === null) {
            $invalidProperties[] = "'account_item_name' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['item_id'] === null) {
            $invalidProperties[] = "'item_id' can't be null";
        }
        if ($this->container['item_name'] === null) {
            $invalidProperties[] = "'item_name' can't be null";
        }
        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
        }
        if ($this->container['qty'] === null) {
            $invalidProperties[] = "'qty' can't be null";
        }
        if ($this->container['reduced_vat'] === null) {
            $invalidProperties[] = "'reduced_vat' can't be null";
        }
        if ($this->container['section_id'] === null) {
            $invalidProperties[] = "'section_id' can't be null";
        }
        if ($this->container['section_name'] === null) {
            $invalidProperties[] = "'section_name' can't be null";
        }
        if ($this->container['tag_ids'] === null) {
            $invalidProperties[] = "'tag_ids' can't be null";
        }
        if ($this->container['tag_names'] === null) {
            $invalidProperties[] = "'tag_names' can't be null";
        }
        if ($this->container['tax_code'] === null) {
            $invalidProperties[] = "'tax_code' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['unit'] === null) {
            $invalidProperties[] = "'unit' can't be null";
        }
        if ($this->container['unit_price'] === null) {
            $invalidProperties[] = "'unit_price' can't be null";
        }
        if ($this->container['vat'] === null) {
            $invalidProperties[] = "'vat' can't be null";
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
        $this->container['account_item_id'] = $account_item_id;

        return $this;
    }

    /**
     * Gets account_item_name
     *
     * @return string
     */
    public function getAccountItemName()
    {
        return $this->container['account_item_name'];
    }

    /**
     * Sets account_item_name
     *
     * @param string $account_item_name 勘定科目名
     *
     * @return self
     */
    public function setAccountItemName($account_item_name)
    {
        $this->container['account_item_name'] = $account_item_name;

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
     * @param int $amount 内税/外税の判別とamountの税込み、税抜きについて <ul> <li>tax_entry_methodがexclusive (外税)の場合</li> <ul> <li>amount: 消費税抜きの金額</li> <li>vat: 消費税の金額</li> </ul> <li>tax_entry_methodがinclusive (内税)の場合</li> <ul> <li>amount: 消費税込みの金額</li> <li>vat: 消費税の金額</li> </ul> </ul>
     *
     * @return self
     */
    public function setAmount($amount)
    {
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
     * @param string $description 備考
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
     * @param int $id 見積内容ID
     *
     * @return self
     */
    public function setId($id)
    {
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
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets item_name
     *
     * @return string
     */
    public function getItemName()
    {
        return $this->container['item_name'];
    }

    /**
     * Sets item_name
     *
     * @param string $item_name 品目
     *
     * @return self
     */
    public function setItemName($item_name)
    {
        $this->container['item_name'] = $item_name;

        return $this;
    }

    /**
     * Gets order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param int $order 順序
     *
     * @return self
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets qty
     *
     * @return float
     */
    public function getQty()
    {
        return $this->container['qty'];
    }

    /**
     * Sets qty
     *
     * @param float $qty 数量
     *
     * @return self
     */
    public function setQty($qty)
    {
        $this->container['qty'] = $qty;

        return $this;
    }

    /**
     * Gets reduced_vat
     *
     * @return bool
     */
    public function getReducedVat()
    {
        return $this->container['reduced_vat'];
    }

    /**
     * Sets reduced_vat
     *
     * @param bool $reduced_vat 軽減税率税区分（true: 対象、false: 対象外）
     *
     * @return self
     */
    public function setReducedVat($reduced_vat)
    {
        $this->container['reduced_vat'] = $reduced_vat;

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
        $this->container['section_id'] = $section_id;

        return $this;
    }

    /**
     * Gets section_name
     *
     * @return string
     */
    public function getSectionName()
    {
        return $this->container['section_name'];
    }

    /**
     * Sets section_name
     *
     * @param string $section_name 部門
     *
     * @return self
     */
    public function setSectionName($section_name)
    {
        $this->container['section_name'] = $section_name;

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
     * @param int|null $segment_1_tag_id セグメント１ID
     *
     * @return self
     */
    public function setSegment1TagId($segment_1_tag_id)
    {
        $this->container['segment_1_tag_id'] = $segment_1_tag_id;

        return $this;
    }

    /**
     * Gets segment_1_tag_name
     *
     * @return string|null
     */
    public function getSegment1TagName()
    {
        return $this->container['segment_1_tag_name'];
    }

    /**
     * Sets segment_1_tag_name
     *
     * @param string|null $segment_1_tag_name セグメント１ID
     *
     * @return self
     */
    public function setSegment1TagName($segment_1_tag_name)
    {
        $this->container['segment_1_tag_name'] = $segment_1_tag_name;

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
     * @param int|null $segment_2_tag_id セグメント２ID
     *
     * @return self
     */
    public function setSegment2TagId($segment_2_tag_id)
    {
        $this->container['segment_2_tag_id'] = $segment_2_tag_id;

        return $this;
    }

    /**
     * Gets segment_2_tag_name
     *
     * @return string|null
     */
    public function getSegment2TagName()
    {
        return $this->container['segment_2_tag_name'];
    }

    /**
     * Sets segment_2_tag_name
     *
     * @param string|null $segment_2_tag_name セグメント２
     *
     * @return self
     */
    public function setSegment2TagName($segment_2_tag_name)
    {
        $this->container['segment_2_tag_name'] = $segment_2_tag_name;

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
     * @param int|null $segment_3_tag_id セグメント３ID
     *
     * @return self
     */
    public function setSegment3TagId($segment_3_tag_id)
    {
        $this->container['segment_3_tag_id'] = $segment_3_tag_id;

        return $this;
    }

    /**
     * Gets segment_3_tag_name
     *
     * @return string|null
     */
    public function getSegment3TagName()
    {
        return $this->container['segment_3_tag_name'];
    }

    /**
     * Sets segment_3_tag_name
     *
     * @param string|null $segment_3_tag_name セグメント３
     *
     * @return self
     */
    public function setSegment3TagName($segment_3_tag_name)
    {
        $this->container['segment_3_tag_name'] = $segment_3_tag_name;

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
     * @param int[] $tag_ids tag_ids
     *
     * @return self
     */
    public function setTagIds($tag_ids)
    {
        $this->container['tag_ids'] = $tag_ids;

        return $this;
    }

    /**
     * Gets tag_names
     *
     * @return string[]
     */
    public function getTagNames()
    {
        return $this->container['tag_names'];
    }

    /**
     * Sets tag_names
     *
     * @param string[] $tag_names tag_names
     *
     * @return self
     */
    public function setTagNames($tag_names)
    {
        $this->container['tag_names'] = $tag_names;

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
        $this->container['tax_code'] = $tax_code;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type 行の種類
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
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
     * Gets unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string $unit 単位
     *
     * @return self
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param float $unit_price 単価
     *
     * @return self
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return int
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param int $vat 消費税額
     *
     * @return self
     */
    public function setVat($vat)
    {
        $this->container['vat'] = $vat;

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



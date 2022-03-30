<?php
/**
 * AccountItemParamsAccountItem
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
 * AccountItemParamsAccountItem Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AccountItemParamsAccountItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'accountItemParams_account_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_category_id' => 'int',
        'accumulated_dep_account_item_id' => 'int',
        'corresponding_expense_id' => 'int',
        'corresponding_income_id' => 'int',
        'group_name' => 'string',
        'items' => '\Freee\Accounting\Model\AccountItemParamsAccountItemItems[]',
        'name' => 'string',
        'partners' => '\Freee\Accounting\Model\AccountItemParamsAccountItemItems[]',
        'searchable' => 'int',
        'shortcut' => 'string',
        'shortcut_num' => 'string',
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
        'account_category_id' => null,
        'accumulated_dep_account_item_id' => null,
        'corresponding_expense_id' => null,
        'corresponding_income_id' => null,
        'group_name' => null,
        'items' => null,
        'name' => null,
        'partners' => null,
        'searchable' => null,
        'shortcut' => null,
        'shortcut_num' => null,
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
        'account_category_id' => 'account_category_id',
        'accumulated_dep_account_item_id' => 'accumulated_dep_account_item_id',
        'corresponding_expense_id' => 'corresponding_expense_id',
        'corresponding_income_id' => 'corresponding_income_id',
        'group_name' => 'group_name',
        'items' => 'items',
        'name' => 'name',
        'partners' => 'partners',
        'searchable' => 'searchable',
        'shortcut' => 'shortcut',
        'shortcut_num' => 'shortcut_num',
        'tax_code' => 'tax_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_category_id' => 'setAccountCategoryId',
        'accumulated_dep_account_item_id' => 'setAccumulatedDepAccountItemId',
        'corresponding_expense_id' => 'setCorrespondingExpenseId',
        'corresponding_income_id' => 'setCorrespondingIncomeId',
        'group_name' => 'setGroupName',
        'items' => 'setItems',
        'name' => 'setName',
        'partners' => 'setPartners',
        'searchable' => 'setSearchable',
        'shortcut' => 'setShortcut',
        'shortcut_num' => 'setShortcutNum',
        'tax_code' => 'setTaxCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_category_id' => 'getAccountCategoryId',
        'accumulated_dep_account_item_id' => 'getAccumulatedDepAccountItemId',
        'corresponding_expense_id' => 'getCorrespondingExpenseId',
        'corresponding_income_id' => 'getCorrespondingIncomeId',
        'group_name' => 'getGroupName',
        'items' => 'getItems',
        'name' => 'getName',
        'partners' => 'getPartners',
        'searchable' => 'getSearchable',
        'shortcut' => 'getShortcut',
        'shortcut_num' => 'getShortcutNum',
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
        $this->container['account_category_id'] = $data['account_category_id'] ?? null;
        $this->container['accumulated_dep_account_item_id'] = $data['accumulated_dep_account_item_id'] ?? null;
        $this->container['corresponding_expense_id'] = $data['corresponding_expense_id'] ?? null;
        $this->container['corresponding_income_id'] = $data['corresponding_income_id'] ?? null;
        $this->container['group_name'] = $data['group_name'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['partners'] = $data['partners'] ?? null;
        $this->container['searchable'] = $data['searchable'] ?? null;
        $this->container['shortcut'] = $data['shortcut'] ?? null;
        $this->container['shortcut_num'] = $data['shortcut_num'] ?? null;
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

        if ($this->container['account_category_id'] === null) {
            $invalidProperties[] = "'account_category_id' can't be null";
        }
        if (($this->container['account_category_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'account_category_id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['account_category_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'account_category_id', must be bigger than or equal to 1.";
        }

        if ($this->container['corresponding_expense_id'] === null) {
            $invalidProperties[] = "'corresponding_expense_id' can't be null";
        }
        if ($this->container['corresponding_income_id'] === null) {
            $invalidProperties[] = "'corresponding_income_id' can't be null";
        }
        if ($this->container['group_name'] === null) {
            $invalidProperties[] = "'group_name' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 30)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['searchable']) && ($this->container['searchable'] > 3)) {
            $invalidProperties[] = "invalid value for 'searchable', must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['searchable']) && ($this->container['searchable'] < 2)) {
            $invalidProperties[] = "invalid value for 'searchable', must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['shortcut']) && (mb_strlen($this->container['shortcut']) > 20)) {
            $invalidProperties[] = "invalid value for 'shortcut', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['shortcut_num']) && (mb_strlen($this->container['shortcut_num']) > 20)) {
            $invalidProperties[] = "invalid value for 'shortcut_num', the character length must be smaller than or equal to 20.";
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
     * Gets account_category_id
     *
     * @return int
     */
    public function getAccountCategoryId()
    {
        return $this->container['account_category_id'];
    }

    /**
     * Sets account_category_id
     *
     * @param int $account_category_id 勘定科目カテゴリーID Selectablesフォーム用選択項目情報エンドポイント(account_groups.account_category_id)で取得可能です
     *
     * @return self
     */
    public function setAccountCategoryId($account_category_id)
    {

        if (($account_category_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $account_category_id when calling AccountItemParamsAccountItem., must be smaller than or equal to 2147483647.');
        }
        if (($account_category_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $account_category_id when calling AccountItemParamsAccountItem., must be bigger than or equal to 1.');
        }

        $this->container['account_category_id'] = $account_category_id;

        return $this;
    }

    /**
     * Gets accumulated_dep_account_item_id
     *
     * @return int|null
     */
    public function getAccumulatedDepAccountItemId()
    {
        return $this->container['accumulated_dep_account_item_id'];
    }

    /**
     * Sets accumulated_dep_account_item_id
     *
     * @param int|null $accumulated_dep_account_item_id 減価償却累計額勘定科目ID（法人のみ利用可能）
     *
     * @return self
     */
    public function setAccumulatedDepAccountItemId($accumulated_dep_account_item_id)
    {
        $this->container['accumulated_dep_account_item_id'] = $accumulated_dep_account_item_id;

        return $this;
    }

    /**
     * Gets corresponding_expense_id
     *
     * @return int
     */
    public function getCorrespondingExpenseId()
    {
        return $this->container['corresponding_expense_id'];
    }

    /**
     * Sets corresponding_expense_id
     *
     * @param int $corresponding_expense_id 支出取引相手勘定科目ID
     *
     * @return self
     */
    public function setCorrespondingExpenseId($corresponding_expense_id)
    {
        $this->container['corresponding_expense_id'] = $corresponding_expense_id;

        return $this;
    }

    /**
     * Gets corresponding_income_id
     *
     * @return int
     */
    public function getCorrespondingIncomeId()
    {
        return $this->container['corresponding_income_id'];
    }

    /**
     * Sets corresponding_income_id
     *
     * @param int $corresponding_income_id 収入取引相手勘定科目ID
     *
     * @return self
     */
    public function setCorrespondingIncomeId($corresponding_income_id)
    {
        $this->container['corresponding_income_id'] = $corresponding_income_id;

        return $this;
    }

    /**
     * Gets group_name
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->container['group_name'];
    }

    /**
     * Sets group_name
     *
     * @param string $group_name 決算書表示名（小カテゴリー） Selectablesフォーム用選択項目情報エンドポイント(account_groups.name)で取得可能です
     *
     * @return self
     */
    public function setGroupName($group_name)
    {
        $this->container['group_name'] = $group_name;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Freee\Accounting\Model\AccountItemParamsAccountItemItems[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Freee\Accounting\Model\AccountItemParamsAccountItemItems[]|null $items 品目
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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
     * @param string $name 勘定科目名 (30文字以内)
     *
     * @return self
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 30)) {
            throw new \InvalidArgumentException('invalid length for $name when calling AccountItemParamsAccountItem., must be smaller than or equal to 30.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets partners
     *
     * @return \Freee\Accounting\Model\AccountItemParamsAccountItemItems[]|null
     */
    public function getPartners()
    {
        return $this->container['partners'];
    }

    /**
     * Sets partners
     *
     * @param \Freee\Accounting\Model\AccountItemParamsAccountItemItems[]|null $partners 取引先
     *
     * @return self
     */
    public function setPartners($partners)
    {
        $this->container['partners'] = $partners;

        return $this;
    }

    /**
     * Gets searchable
     *
     * @return int|null
     */
    public function getSearchable()
    {
        return $this->container['searchable'];
    }

    /**
     * Sets searchable
     *
     * @param int|null $searchable 検索可能:2, 検索不可：3(登録時未指定の場合は2で登録されます。更新時未指定の場合はsearchableは変更されません。)
     *
     * @return self
     */
    public function setSearchable($searchable)
    {

        if (!is_null($searchable) && ($searchable > 3)) {
            throw new \InvalidArgumentException('invalid value for $searchable when calling AccountItemParamsAccountItem., must be smaller than or equal to 3.');
        }
        if (!is_null($searchable) && ($searchable < 2)) {
            throw new \InvalidArgumentException('invalid value for $searchable when calling AccountItemParamsAccountItem., must be bigger than or equal to 2.');
        }

        $this->container['searchable'] = $searchable;

        return $this;
    }

    /**
     * Gets shortcut
     *
     * @return string|null
     */
    public function getShortcut()
    {
        return $this->container['shortcut'];
    }

    /**
     * Sets shortcut
     *
     * @param string|null $shortcut ショートカット1 (20文字以内)
     *
     * @return self
     */
    public function setShortcut($shortcut)
    {
        if (!is_null($shortcut) && (mb_strlen($shortcut) > 20)) {
            throw new \InvalidArgumentException('invalid length for $shortcut when calling AccountItemParamsAccountItem., must be smaller than or equal to 20.');
        }

        $this->container['shortcut'] = $shortcut;

        return $this;
    }

    /**
     * Gets shortcut_num
     *
     * @return string|null
     */
    public function getShortcutNum()
    {
        return $this->container['shortcut_num'];
    }

    /**
     * Sets shortcut_num
     *
     * @param string|null $shortcut_num ショートカット2(勘定科目コード)(20文字以内)
     *
     * @return self
     */
    public function setShortcutNum($shortcut_num)
    {
        if (!is_null($shortcut_num) && (mb_strlen($shortcut_num) > 20)) {
            throw new \InvalidArgumentException('invalid length for $shortcut_num when calling AccountItemParamsAccountItem., must be smaller than or equal to 20.');
        }

        $this->container['shortcut_num'] = $shortcut_num;

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
            throw new \InvalidArgumentException('invalid value for $tax_code when calling AccountItemParamsAccountItem., must be smaller than or equal to 2147483647.');
        }
        if (($tax_code < 0)) {
            throw new \InvalidArgumentException('invalid value for $tax_code when calling AccountItemParamsAccountItem., must be bigger than or equal to 0.');
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



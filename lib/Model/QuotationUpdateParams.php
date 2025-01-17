<?php
/**
 * QuotationUpdateParams
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
 * QuotationUpdateParams Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class QuotationUpdateParams implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'quotationUpdateParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'company_address1' => 'string',
        'company_address2' => 'string',
        'company_contact_info' => 'string',
        'company_id' => 'int',
        'company_name' => 'string',
        'company_prefecture_code' => 'int',
        'company_zipcode' => 'string',
        'description' => 'string',
        'issue_date' => 'string',
        'message' => 'string',
        'notes' => 'string',
        'partner_address1' => 'string',
        'partner_address2' => 'string',
        'partner_code' => 'string',
        'partner_contact_info' => 'string',
        'partner_display_name' => 'string',
        'partner_id' => 'int',
        'partner_prefecture_code' => 'int',
        'partner_title' => 'string',
        'partner_zipcode' => 'string',
        'quotation_contents' => '\Freee\Accounting\Model\QuotationUpdateParamsQuotationContents[]',
        'quotation_layout' => 'string',
        'quotation_number' => 'string',
        'quotation_status' => 'string',
        'tax_entry_method' => 'string',
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
        'company_address1' => null,
        'company_address2' => null,
        'company_contact_info' => null,
        'company_id' => null,
        'company_name' => null,
        'company_prefecture_code' => null,
        'company_zipcode' => null,
        'description' => null,
        'issue_date' => null,
        'message' => null,
        'notes' => null,
        'partner_address1' => null,
        'partner_address2' => null,
        'partner_code' => null,
        'partner_contact_info' => null,
        'partner_display_name' => null,
        'partner_id' => null,
        'partner_prefecture_code' => null,
        'partner_title' => null,
        'partner_zipcode' => null,
        'quotation_contents' => null,
        'quotation_layout' => null,
        'quotation_number' => null,
        'quotation_status' => null,
        'tax_entry_method' => null,
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
        'company_address1' => 'company_address1',
        'company_address2' => 'company_address2',
        'company_contact_info' => 'company_contact_info',
        'company_id' => 'company_id',
        'company_name' => 'company_name',
        'company_prefecture_code' => 'company_prefecture_code',
        'company_zipcode' => 'company_zipcode',
        'description' => 'description',
        'issue_date' => 'issue_date',
        'message' => 'message',
        'notes' => 'notes',
        'partner_address1' => 'partner_address1',
        'partner_address2' => 'partner_address2',
        'partner_code' => 'partner_code',
        'partner_contact_info' => 'partner_contact_info',
        'partner_display_name' => 'partner_display_name',
        'partner_id' => 'partner_id',
        'partner_prefecture_code' => 'partner_prefecture_code',
        'partner_title' => 'partner_title',
        'partner_zipcode' => 'partner_zipcode',
        'quotation_contents' => 'quotation_contents',
        'quotation_layout' => 'quotation_layout',
        'quotation_number' => 'quotation_number',
        'quotation_status' => 'quotation_status',
        'tax_entry_method' => 'tax_entry_method',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_address1' => 'setCompanyAddress1',
        'company_address2' => 'setCompanyAddress2',
        'company_contact_info' => 'setCompanyContactInfo',
        'company_id' => 'setCompanyId',
        'company_name' => 'setCompanyName',
        'company_prefecture_code' => 'setCompanyPrefectureCode',
        'company_zipcode' => 'setCompanyZipcode',
        'description' => 'setDescription',
        'issue_date' => 'setIssueDate',
        'message' => 'setMessage',
        'notes' => 'setNotes',
        'partner_address1' => 'setPartnerAddress1',
        'partner_address2' => 'setPartnerAddress2',
        'partner_code' => 'setPartnerCode',
        'partner_contact_info' => 'setPartnerContactInfo',
        'partner_display_name' => 'setPartnerDisplayName',
        'partner_id' => 'setPartnerId',
        'partner_prefecture_code' => 'setPartnerPrefectureCode',
        'partner_title' => 'setPartnerTitle',
        'partner_zipcode' => 'setPartnerZipcode',
        'quotation_contents' => 'setQuotationContents',
        'quotation_layout' => 'setQuotationLayout',
        'quotation_number' => 'setQuotationNumber',
        'quotation_status' => 'setQuotationStatus',
        'tax_entry_method' => 'setTaxEntryMethod',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_address1' => 'getCompanyAddress1',
        'company_address2' => 'getCompanyAddress2',
        'company_contact_info' => 'getCompanyContactInfo',
        'company_id' => 'getCompanyId',
        'company_name' => 'getCompanyName',
        'company_prefecture_code' => 'getCompanyPrefectureCode',
        'company_zipcode' => 'getCompanyZipcode',
        'description' => 'getDescription',
        'issue_date' => 'getIssueDate',
        'message' => 'getMessage',
        'notes' => 'getNotes',
        'partner_address1' => 'getPartnerAddress1',
        'partner_address2' => 'getPartnerAddress2',
        'partner_code' => 'getPartnerCode',
        'partner_contact_info' => 'getPartnerContactInfo',
        'partner_display_name' => 'getPartnerDisplayName',
        'partner_id' => 'getPartnerId',
        'partner_prefecture_code' => 'getPartnerPrefectureCode',
        'partner_title' => 'getPartnerTitle',
        'partner_zipcode' => 'getPartnerZipcode',
        'quotation_contents' => 'getQuotationContents',
        'quotation_layout' => 'getQuotationLayout',
        'quotation_number' => 'getQuotationNumber',
        'quotation_status' => 'getQuotationStatus',
        'tax_entry_method' => 'getTaxEntryMethod',
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

    const QUOTATION_LAYOUT_DEFAULT_CLASSIC = 'default_classic';
    const QUOTATION_LAYOUT_STANDARD_CLASSIC = 'standard_classic';
    const QUOTATION_LAYOUT_ENVELOPE_CLASSIC = 'envelope_classic';
    const QUOTATION_LAYOUT_DEFAULT_MODERN = 'default_modern';
    const QUOTATION_LAYOUT_STANDARD_MODERN = 'standard_modern';
    const QUOTATION_LAYOUT_ENVELOPE_MODERN = 'envelope_modern';
    const QUOTATION_STATUS_UNSUBMITTED = 'unsubmitted';
    const QUOTATION_STATUS_SUBMITTED = 'submitted';
    const TAX_ENTRY_METHOD_INCLUSIVE = 'inclusive';
    const TAX_ENTRY_METHOD_EXCLUSIVE = 'exclusive';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getQuotationLayoutAllowableValues()
    {
        return [
            self::QUOTATION_LAYOUT_DEFAULT_CLASSIC,
            self::QUOTATION_LAYOUT_STANDARD_CLASSIC,
            self::QUOTATION_LAYOUT_ENVELOPE_CLASSIC,
            self::QUOTATION_LAYOUT_DEFAULT_MODERN,
            self::QUOTATION_LAYOUT_STANDARD_MODERN,
            self::QUOTATION_LAYOUT_ENVELOPE_MODERN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getQuotationStatusAllowableValues()
    {
        return [
            self::QUOTATION_STATUS_UNSUBMITTED,
            self::QUOTATION_STATUS_SUBMITTED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTaxEntryMethodAllowableValues()
    {
        return [
            self::TAX_ENTRY_METHOD_INCLUSIVE,
            self::TAX_ENTRY_METHOD_EXCLUSIVE,
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
        $this->container['company_address1'] = $data['company_address1'] ?? null;
        $this->container['company_address2'] = $data['company_address2'] ?? null;
        $this->container['company_contact_info'] = $data['company_contact_info'] ?? null;
        $this->container['company_id'] = $data['company_id'] ?? null;
        $this->container['company_name'] = $data['company_name'] ?? null;
        $this->container['company_prefecture_code'] = $data['company_prefecture_code'] ?? null;
        $this->container['company_zipcode'] = $data['company_zipcode'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['issue_date'] = $data['issue_date'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
        $this->container['notes'] = $data['notes'] ?? null;
        $this->container['partner_address1'] = $data['partner_address1'] ?? null;
        $this->container['partner_address2'] = $data['partner_address2'] ?? null;
        $this->container['partner_code'] = $data['partner_code'] ?? null;
        $this->container['partner_contact_info'] = $data['partner_contact_info'] ?? null;
        $this->container['partner_display_name'] = $data['partner_display_name'] ?? null;
        $this->container['partner_id'] = $data['partner_id'] ?? null;
        $this->container['partner_prefecture_code'] = $data['partner_prefecture_code'] ?? null;
        $this->container['partner_title'] = $data['partner_title'] ?? null;
        $this->container['partner_zipcode'] = $data['partner_zipcode'] ?? null;
        $this->container['quotation_contents'] = $data['quotation_contents'] ?? null;
        $this->container['quotation_layout'] = $data['quotation_layout'] ?? null;
        $this->container['quotation_number'] = $data['quotation_number'] ?? null;
        $this->container['quotation_status'] = $data['quotation_status'] ?? null;
        $this->container['tax_entry_method'] = $data['tax_entry_method'] ?? null;
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

        if ($this->container['company_id'] === null) {
            $invalidProperties[] = "'company_id' can't be null";
        }
        if (($this->container['company_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'company_id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['company_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'company_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['company_prefecture_code']) && ($this->container['company_prefecture_code'] > 46)) {
            $invalidProperties[] = "invalid value for 'company_prefecture_code', must be smaller than or equal to 46.";
        }

        if (!is_null($this->container['company_prefecture_code']) && ($this->container['company_prefecture_code'] < 0)) {
            $invalidProperties[] = "invalid value for 'company_prefecture_code', must be bigger than or equal to 0.";
        }

        if ($this->container['partner_display_name'] === null) {
            $invalidProperties[] = "'partner_display_name' can't be null";
        }
        if (!is_null($this->container['partner_id']) && ($this->container['partner_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'partner_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['partner_id']) && ($this->container['partner_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'partner_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['partner_prefecture_code']) && ($this->container['partner_prefecture_code'] > 46)) {
            $invalidProperties[] = "invalid value for 'partner_prefecture_code', must be smaller than or equal to 46.";
        }

        if (!is_null($this->container['partner_prefecture_code']) && ($this->container['partner_prefecture_code'] < 0)) {
            $invalidProperties[] = "invalid value for 'partner_prefecture_code', must be bigger than or equal to 0.";
        }

        if ($this->container['partner_title'] === null) {
            $invalidProperties[] = "'partner_title' can't be null";
        }
        $allowedValues = $this->getQuotationLayoutAllowableValues();
        if (!is_null($this->container['quotation_layout']) && !in_array($this->container['quotation_layout'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'quotation_layout', must be one of '%s'",
                $this->container['quotation_layout'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getQuotationStatusAllowableValues();
        if (!is_null($this->container['quotation_status']) && !in_array($this->container['quotation_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'quotation_status', must be one of '%s'",
                $this->container['quotation_status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTaxEntryMethodAllowableValues();
        if (!is_null($this->container['tax_entry_method']) && !in_array($this->container['tax_entry_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'tax_entry_method', must be one of '%s'",
                $this->container['tax_entry_method'],
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
     * Gets company_address1
     *
     * @return string|null
     */
    public function getCompanyAddress1()
    {
        return $this->container['company_address1'];
    }

    /**
     * Sets company_address1
     *
     * @param string|null $company_address1 市区町村・番地 (デフォルトは事業所設定情報が補完されます)
     *
     * @return self
     */
    public function setCompanyAddress1($company_address1)
    {
        $this->container['company_address1'] = $company_address1;

        return $this;
    }

    /**
     * Gets company_address2
     *
     * @return string|null
     */
    public function getCompanyAddress2()
    {
        return $this->container['company_address2'];
    }

    /**
     * Sets company_address2
     *
     * @param string|null $company_address2 建物名・部屋番号など (デフォルトは事業所設定情報が補完されます)
     *
     * @return self
     */
    public function setCompanyAddress2($company_address2)
    {
        $this->container['company_address2'] = $company_address2;

        return $this;
    }

    /**
     * Gets company_contact_info
     *
     * @return string|null
     */
    public function getCompanyContactInfo()
    {
        return $this->container['company_contact_info'];
    }

    /**
     * Sets company_contact_info
     *
     * @param string|null $company_contact_info 事業所担当者名 (デフォルトは見積書テンプレート情報が補完されます)
     *
     * @return self
     */
    public function setCompanyContactInfo($company_contact_info)
    {
        $this->container['company_contact_info'] = $company_contact_info;

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
            throw new \InvalidArgumentException('invalid value for $company_id when calling QuotationUpdateParams., must be smaller than or equal to 2147483647.');
        }
        if (($company_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $company_id when calling QuotationUpdateParams., must be bigger than or equal to 1.');
        }

        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string|null $company_name 事業所名 (デフォルトは事業所設定情報が補完されます)
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets company_prefecture_code
     *
     * @return int|null
     */
    public function getCompanyPrefectureCode()
    {
        return $this->container['company_prefecture_code'];
    }

    /**
     * Sets company_prefecture_code
     *
     * @param int|null $company_prefecture_code 都道府県コード（0:北海道、1:青森、2:岩手、3:宮城、4:秋田、5:山形、6:福島、7:茨城、8:栃木、9:群馬、10:埼玉、11:千葉、12:東京、13:神奈川、14:新潟、15:富山、16:石川、17:福井、18:山梨、19:長野、20:岐阜、21:静岡、22:愛知、23:三重、24:滋賀、25:京都、26:大阪、27:兵庫、28:奈良、29:和歌山、30:鳥取、31:島根、32:岡山、33:広島、34:山口、35:徳島、36:香川、37:愛媛、38:高知、39:福岡、40:佐賀、41:長崎、42:熊本、43:大分、44:宮崎、45:鹿児島、46:沖縄) (デフォルトは事業所設定情報が補完されます)
     *
     * @return self
     */
    public function setCompanyPrefectureCode($company_prefecture_code)
    {

        if (!is_null($company_prefecture_code) && ($company_prefecture_code > 46)) {
            throw new \InvalidArgumentException('invalid value for $company_prefecture_code when calling QuotationUpdateParams., must be smaller than or equal to 46.');
        }
        if (!is_null($company_prefecture_code) && ($company_prefecture_code < 0)) {
            throw new \InvalidArgumentException('invalid value for $company_prefecture_code when calling QuotationUpdateParams., must be bigger than or equal to 0.');
        }

        $this->container['company_prefecture_code'] = $company_prefecture_code;

        return $this;
    }

    /**
     * Gets company_zipcode
     *
     * @return string|null
     */
    public function getCompanyZipcode()
    {
        return $this->container['company_zipcode'];
    }

    /**
     * Sets company_zipcode
     *
     * @param string|null $company_zipcode 郵便番号 (デフォルトは事業所設定情報が補完されます)
     *
     * @return self
     */
    public function setCompanyZipcode($company_zipcode)
    {
        $this->container['company_zipcode'] = $company_zipcode;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description 概要
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets issue_date
     *
     * @return string|null
     */
    public function getIssueDate()
    {
        return $this->container['issue_date'];
    }

    /**
     * Sets issue_date
     *
     * @param string|null $issue_date 見積日 (yyyy-mm-dd)
     *
     * @return self
     */
    public function setIssueDate($issue_date)
    {
        $this->container['issue_date'] = $issue_date;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message メッセージ (デフォルト: 下記の通り御見積申し上げます。)
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes 備考
     *
     * @return self
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets partner_address1
     *
     * @return string|null
     */
    public function getPartnerAddress1()
    {
        return $this->container['partner_address1'];
    }

    /**
     * Sets partner_address1
     *
     * @param string|null $partner_address1 取引先市区町村・番地 (デフォルトはpartner_idもしくはpartner_codeで指定された取引先設定情報が補完されます)
     *
     * @return self
     */
    public function setPartnerAddress1($partner_address1)
    {
        $this->container['partner_address1'] = $partner_address1;

        return $this;
    }

    /**
     * Gets partner_address2
     *
     * @return string|null
     */
    public function getPartnerAddress2()
    {
        return $this->container['partner_address2'];
    }

    /**
     * Sets partner_address2
     *
     * @param string|null $partner_address2 取引先建物名・部屋番号など (デフォルトはpartner_idもしくはpartner_codeで指定された取引先設定情報が補完されます)
     *
     * @return self
     */
    public function setPartnerAddress2($partner_address2)
    {
        $this->container['partner_address2'] = $partner_address2;

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
     * Gets partner_contact_info
     *
     * @return string|null
     */
    public function getPartnerContactInfo()
    {
        return $this->container['partner_contact_info'];
    }

    /**
     * Sets partner_contact_info
     *
     * @param string|null $partner_contact_info 取引先担当者名
     *
     * @return self
     */
    public function setPartnerContactInfo($partner_contact_info)
    {
        $this->container['partner_contact_info'] = $partner_contact_info;

        return $this;
    }

    /**
     * Gets partner_display_name
     *
     * @return string
     */
    public function getPartnerDisplayName()
    {
        return $this->container['partner_display_name'];
    }

    /**
     * Sets partner_display_name
     *
     * @param string $partner_display_name 見積書に表示する取引先名
     *
     * @return self
     */
    public function setPartnerDisplayName($partner_display_name)
    {
        $this->container['partner_display_name'] = $partner_display_name;

        return $this;
    }

    /**
     * Gets partner_id
     *
     * @return int|null
     */
    public function getPartnerId()
    {
        return $this->container['partner_id'];
    }

    /**
     * Sets partner_id
     *
     * @param int|null $partner_id 取引先ID
     *
     * @return self
     */
    public function setPartnerId($partner_id)
    {

        if (!is_null($partner_id) && ($partner_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $partner_id when calling QuotationUpdateParams., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($partner_id) && ($partner_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $partner_id when calling QuotationUpdateParams., must be bigger than or equal to 1.');
        }

        $this->container['partner_id'] = $partner_id;

        return $this;
    }

    /**
     * Gets partner_prefecture_code
     *
     * @return int|null
     */
    public function getPartnerPrefectureCode()
    {
        return $this->container['partner_prefecture_code'];
    }

    /**
     * Sets partner_prefecture_code
     *
     * @param int|null $partner_prefecture_code 取引先都道府県コード（0:北海道、1:青森、2:岩手、3:宮城、4:秋田、5:山形、6:福島、7:茨城、8:栃木、9:群馬、10:埼玉、11:千葉、12:東京、13:神奈川、14:新潟、15:富山、16:石川、17:福井、18:山梨、19:長野、20:岐阜、21:静岡、22:愛知、23:三重、24:滋賀、25:京都、26:大阪、27:兵庫、28:奈良、29:和歌山、30:鳥取、31:島根、32:岡山、33:広島、34:山口、35:徳島、36:香川、37:愛媛、38:高知、39:福岡、40:佐賀、41:長崎、42:熊本、43:大分、44:宮崎、45:鹿児島、46:沖縄) (デフォルトはpartner_idもしくはpartner_codeで指定された取引先設定情報が補完されます)
     *
     * @return self
     */
    public function setPartnerPrefectureCode($partner_prefecture_code)
    {

        if (!is_null($partner_prefecture_code) && ($partner_prefecture_code > 46)) {
            throw new \InvalidArgumentException('invalid value for $partner_prefecture_code when calling QuotationUpdateParams., must be smaller than or equal to 46.');
        }
        if (!is_null($partner_prefecture_code) && ($partner_prefecture_code < 0)) {
            throw new \InvalidArgumentException('invalid value for $partner_prefecture_code when calling QuotationUpdateParams., must be bigger than or equal to 0.');
        }

        $this->container['partner_prefecture_code'] = $partner_prefecture_code;

        return $this;
    }

    /**
     * Gets partner_title
     *
     * @return string
     */
    public function getPartnerTitle()
    {
        return $this->container['partner_title'];
    }

    /**
     * Sets partner_title
     *
     * @param string $partner_title 敬称（御中、様、(空白)の3つから選択）
     *
     * @return self
     */
    public function setPartnerTitle($partner_title)
    {
        $this->container['partner_title'] = $partner_title;

        return $this;
    }

    /**
     * Gets partner_zipcode
     *
     * @return string|null
     */
    public function getPartnerZipcode()
    {
        return $this->container['partner_zipcode'];
    }

    /**
     * Sets partner_zipcode
     *
     * @param string|null $partner_zipcode 取引先郵便番号 (デフォルトはpartner_idもしくはpartner_codeで指定された取引先設定情報が補完されます)
     *
     * @return self
     */
    public function setPartnerZipcode($partner_zipcode)
    {
        $this->container['partner_zipcode'] = $partner_zipcode;

        return $this;
    }

    /**
     * Gets quotation_contents
     *
     * @return \Freee\Accounting\Model\QuotationUpdateParamsQuotationContents[]|null
     */
    public function getQuotationContents()
    {
        return $this->container['quotation_contents'];
    }

    /**
     * Sets quotation_contents
     *
     * @param \Freee\Accounting\Model\QuotationUpdateParamsQuotationContents[]|null $quotation_contents 見積内容
     *
     * @return self
     */
    public function setQuotationContents($quotation_contents)
    {
        $this->container['quotation_contents'] = $quotation_contents;

        return $this;
    }

    /**
     * Gets quotation_layout
     *
     * @return string|null
     */
    public function getQuotationLayout()
    {
        return $this->container['quotation_layout'];
    }

    /**
     * Sets quotation_layout
     *
     * @param string|null $quotation_layout 見積書レイアウト * `default_classic` - レイアウト１/クラシック (デフォルト)  * `standard_classic` - レイアウト２/クラシック  * `envelope_classic` - 封筒１/クラシック  * `default_modern` - レイアウト１/モダン  * `standard_modern` - レイアウト２/モダン  * `envelope_modern` - 封筒/モダン
     *
     * @return self
     */
    public function setQuotationLayout($quotation_layout)
    {
        $allowedValues = $this->getQuotationLayoutAllowableValues();
        if (!is_null($quotation_layout) && !in_array($quotation_layout, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'quotation_layout', must be one of '%s'",
                    $quotation_layout,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['quotation_layout'] = $quotation_layout;

        return $this;
    }

    /**
     * Gets quotation_number
     *
     * @return string|null
     */
    public function getQuotationNumber()
    {
        return $this->container['quotation_number'];
    }

    /**
     * Sets quotation_number
     *
     * @param string|null $quotation_number 見積書番号 (デフォルト: 自動採番されます)
     *
     * @return self
     */
    public function setQuotationNumber($quotation_number)
    {
        $this->container['quotation_number'] = $quotation_number;

        return $this;
    }

    /**
     * Gets quotation_status
     *
     * @return string|null
     */
    public function getQuotationStatus()
    {
        return $this->container['quotation_status'];
    }

    /**
     * Sets quotation_status
     *
     * @param string|null $quotation_status 見積書ステータス  (unsubmitted: 送付待ち, submitted: 送付済み)
     *
     * @return self
     */
    public function setQuotationStatus($quotation_status)
    {
        $allowedValues = $this->getQuotationStatusAllowableValues();
        if (!is_null($quotation_status) && !in_array($quotation_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'quotation_status', must be one of '%s'",
                    $quotation_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['quotation_status'] = $quotation_status;

        return $this;
    }

    /**
     * Gets tax_entry_method
     *
     * @return string|null
     */
    public function getTaxEntryMethod()
    {
        return $this->container['tax_entry_method'];
    }

    /**
     * Sets tax_entry_method
     *
     * @param string|null $tax_entry_method 見積書の消費税計算方法(inclusive: 内税表示, exclusive: 外税表示 (デフォルト))
     *
     * @return self
     */
    public function setTaxEntryMethod($tax_entry_method)
    {
        $allowedValues = $this->getTaxEntryMethodAllowableValues();
        if (!is_null($tax_entry_method) && !in_array($tax_entry_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'tax_entry_method', must be one of '%s'",
                    $tax_entry_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tax_entry_method'] = $tax_entry_method;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title タイトル (デフォルト: 見積書)
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



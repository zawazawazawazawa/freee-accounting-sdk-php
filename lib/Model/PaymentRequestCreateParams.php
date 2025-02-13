<?php
/**
 * PaymentRequestCreateParams
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
 * PaymentRequestCreateParams Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentRequestCreateParams implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'paymentRequestCreateParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_name' => 'string',
        'account_number' => 'string',
        'account_type' => 'string',
        'application_date' => 'string',
        'approval_flow_route_id' => 'int',
        'approver_id' => 'int',
        'bank_code' => 'string',
        'bank_name' => 'string',
        'bank_name_kana' => 'string',
        'branch_code' => 'string',
        'branch_kana' => 'string',
        'branch_name' => 'string',
        'company_id' => 'int',
        'description' => 'string',
        'document_code' => 'string',
        'draft' => 'bool',
        'issue_date' => 'string',
        'parent_id' => 'int',
        'partner_code' => 'string',
        'partner_id' => 'int',
        'payment_date' => 'string',
        'payment_method' => 'string',
        'payment_request_lines' => '\Freee\Accounting\Model\PaymentRequestCreateParamsPaymentRequestLines[]',
        'receipt_ids' => 'int[]',
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
        'account_name' => null,
        'account_number' => null,
        'account_type' => null,
        'application_date' => null,
        'approval_flow_route_id' => null,
        'approver_id' => null,
        'bank_code' => null,
        'bank_name' => null,
        'bank_name_kana' => null,
        'branch_code' => null,
        'branch_kana' => null,
        'branch_name' => null,
        'company_id' => null,
        'description' => null,
        'document_code' => null,
        'draft' => null,
        'issue_date' => null,
        'parent_id' => null,
        'partner_code' => null,
        'partner_id' => null,
        'payment_date' => null,
        'payment_method' => null,
        'payment_request_lines' => null,
        'receipt_ids' => null,
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
        'account_name' => 'account_name',
        'account_number' => 'account_number',
        'account_type' => 'account_type',
        'application_date' => 'application_date',
        'approval_flow_route_id' => 'approval_flow_route_id',
        'approver_id' => 'approver_id',
        'bank_code' => 'bank_code',
        'bank_name' => 'bank_name',
        'bank_name_kana' => 'bank_name_kana',
        'branch_code' => 'branch_code',
        'branch_kana' => 'branch_kana',
        'branch_name' => 'branch_name',
        'company_id' => 'company_id',
        'description' => 'description',
        'document_code' => 'document_code',
        'draft' => 'draft',
        'issue_date' => 'issue_date',
        'parent_id' => 'parent_id',
        'partner_code' => 'partner_code',
        'partner_id' => 'partner_id',
        'payment_date' => 'payment_date',
        'payment_method' => 'payment_method',
        'payment_request_lines' => 'payment_request_lines',
        'receipt_ids' => 'receipt_ids',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_name' => 'setAccountName',
        'account_number' => 'setAccountNumber',
        'account_type' => 'setAccountType',
        'application_date' => 'setApplicationDate',
        'approval_flow_route_id' => 'setApprovalFlowRouteId',
        'approver_id' => 'setApproverId',
        'bank_code' => 'setBankCode',
        'bank_name' => 'setBankName',
        'bank_name_kana' => 'setBankNameKana',
        'branch_code' => 'setBranchCode',
        'branch_kana' => 'setBranchKana',
        'branch_name' => 'setBranchName',
        'company_id' => 'setCompanyId',
        'description' => 'setDescription',
        'document_code' => 'setDocumentCode',
        'draft' => 'setDraft',
        'issue_date' => 'setIssueDate',
        'parent_id' => 'setParentId',
        'partner_code' => 'setPartnerCode',
        'partner_id' => 'setPartnerId',
        'payment_date' => 'setPaymentDate',
        'payment_method' => 'setPaymentMethod',
        'payment_request_lines' => 'setPaymentRequestLines',
        'receipt_ids' => 'setReceiptIds',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_name' => 'getAccountName',
        'account_number' => 'getAccountNumber',
        'account_type' => 'getAccountType',
        'application_date' => 'getApplicationDate',
        'approval_flow_route_id' => 'getApprovalFlowRouteId',
        'approver_id' => 'getApproverId',
        'bank_code' => 'getBankCode',
        'bank_name' => 'getBankName',
        'bank_name_kana' => 'getBankNameKana',
        'branch_code' => 'getBranchCode',
        'branch_kana' => 'getBranchKana',
        'branch_name' => 'getBranchName',
        'company_id' => 'getCompanyId',
        'description' => 'getDescription',
        'document_code' => 'getDocumentCode',
        'draft' => 'getDraft',
        'issue_date' => 'getIssueDate',
        'parent_id' => 'getParentId',
        'partner_code' => 'getPartnerCode',
        'partner_id' => 'getPartnerId',
        'payment_date' => 'getPaymentDate',
        'payment_method' => 'getPaymentMethod',
        'payment_request_lines' => 'getPaymentRequestLines',
        'receipt_ids' => 'getReceiptIds',
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

    const ACCOUNT_TYPE_ORDINARY = 'ordinary';
    const ACCOUNT_TYPE_CHECKING = 'checking';
    const ACCOUNT_TYPE_EARMARKED = 'earmarked';
    const ACCOUNT_TYPE_SAVINGS = 'savings';
    const ACCOUNT_TYPE_OTHER = 'other';
    const PAYMENT_METHOD_NONE = 'none';
    const PAYMENT_METHOD_DOMESTIC_BANK_TRANSFER = 'domestic_bank_transfer';
    const PAYMENT_METHOD_ABROAD_BANK_TRANSFER = 'abroad_bank_transfer';
    const PAYMENT_METHOD_ACCOUNT_TRANSFER = 'account_transfer';
    const PAYMENT_METHOD_CREDIT_CARD = 'credit_card';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccountTypeAllowableValues()
    {
        return [
            self::ACCOUNT_TYPE_ORDINARY,
            self::ACCOUNT_TYPE_CHECKING,
            self::ACCOUNT_TYPE_EARMARKED,
            self::ACCOUNT_TYPE_SAVINGS,
            self::ACCOUNT_TYPE_OTHER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentMethodAllowableValues()
    {
        return [
            self::PAYMENT_METHOD_NONE,
            self::PAYMENT_METHOD_DOMESTIC_BANK_TRANSFER,
            self::PAYMENT_METHOD_ABROAD_BANK_TRANSFER,
            self::PAYMENT_METHOD_ACCOUNT_TRANSFER,
            self::PAYMENT_METHOD_CREDIT_CARD,
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
        $this->container['account_name'] = $data['account_name'] ?? null;
        $this->container['account_number'] = $data['account_number'] ?? null;
        $this->container['account_type'] = $data['account_type'] ?? null;
        $this->container['application_date'] = $data['application_date'] ?? null;
        $this->container['approval_flow_route_id'] = $data['approval_flow_route_id'] ?? null;
        $this->container['approver_id'] = $data['approver_id'] ?? null;
        $this->container['bank_code'] = $data['bank_code'] ?? null;
        $this->container['bank_name'] = $data['bank_name'] ?? null;
        $this->container['bank_name_kana'] = $data['bank_name_kana'] ?? null;
        $this->container['branch_code'] = $data['branch_code'] ?? null;
        $this->container['branch_kana'] = $data['branch_kana'] ?? null;
        $this->container['branch_name'] = $data['branch_name'] ?? null;
        $this->container['company_id'] = $data['company_id'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['document_code'] = $data['document_code'] ?? null;
        $this->container['draft'] = $data['draft'] ?? null;
        $this->container['issue_date'] = $data['issue_date'] ?? null;
        $this->container['parent_id'] = $data['parent_id'] ?? null;
        $this->container['partner_code'] = $data['partner_code'] ?? null;
        $this->container['partner_id'] = $data['partner_id'] ?? null;
        $this->container['payment_date'] = $data['payment_date'] ?? null;
        $this->container['payment_method'] = $data['payment_method'] ?? null;
        $this->container['payment_request_lines'] = $data['payment_request_lines'] ?? null;
        $this->container['receipt_ids'] = $data['receipt_ids'] ?? null;
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

        if (!is_null($this->container['account_name']) && (mb_strlen($this->container['account_name']) > 48)) {
            $invalidProperties[] = "invalid value for 'account_name', the character length must be smaller than or equal to 48.";
        }

        if (!is_null($this->container['account_number']) && (mb_strlen($this->container['account_number']) > 7)) {
            $invalidProperties[] = "invalid value for 'account_number', the character length must be smaller than or equal to 7.";
        }

        $allowedValues = $this->getAccountTypeAllowableValues();
        if (!is_null($this->container['account_type']) && !in_array($this->container['account_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'account_type', must be one of '%s'",
                $this->container['account_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['approval_flow_route_id'] === null) {
            $invalidProperties[] = "'approval_flow_route_id' can't be null";
        }
        if (($this->container['approval_flow_route_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'approval_flow_route_id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['approval_flow_route_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'approval_flow_route_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['approver_id']) && ($this->container['approver_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'approver_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['approver_id']) && ($this->container['approver_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'approver_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['bank_code']) && (mb_strlen($this->container['bank_code']) > 4)) {
            $invalidProperties[] = "invalid value for 'bank_code', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['bank_name']) && (mb_strlen($this->container['bank_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'bank_name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['bank_name_kana']) && (mb_strlen($this->container['bank_name_kana']) > 15)) {
            $invalidProperties[] = "invalid value for 'bank_name_kana', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['branch_code']) && (mb_strlen($this->container['branch_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'branch_code', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['branch_kana']) && (mb_strlen($this->container['branch_kana']) > 15)) {
            $invalidProperties[] = "invalid value for 'branch_kana', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['branch_name']) && (mb_strlen($this->container['branch_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'branch_name', the character length must be smaller than or equal to 255.";
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

        if (!is_null($this->container['document_code']) && (mb_strlen($this->container['document_code']) > 255)) {
            $invalidProperties[] = "invalid value for 'document_code', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['draft'] === null) {
            $invalidProperties[] = "'draft' can't be null";
        }
        if ($this->container['issue_date'] === null) {
            $invalidProperties[] = "'issue_date' can't be null";
        }
        if (!is_null($this->container['parent_id']) && ($this->container['parent_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'parent_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['parent_id']) && ($this->container['parent_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'parent_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['partner_id']) && ($this->container['partner_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'partner_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['partner_id']) && ($this->container['partner_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'partner_id', must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getPaymentMethodAllowableValues();
        if (!is_null($this->container['payment_method']) && !in_array($this->container['payment_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payment_method', must be one of '%s'",
                $this->container['payment_method'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['payment_request_lines'] === null) {
            $invalidProperties[] = "'payment_request_lines' can't be null";
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
     * Gets account_name
     *
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     *
     * @param string|null $account_name 受取人名（カナ）（48文字以内）<br> 支払先指定時には無効
     *
     * @return self
     */
    public function setAccountName($account_name)
    {
        if (!is_null($account_name) && (mb_strlen($account_name) > 48)) {
            throw new \InvalidArgumentException('invalid length for $account_name when calling PaymentRequestCreateParams., must be smaller than or equal to 48.');
        }

        $this->container['account_name'] = $account_name;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string|null $account_number 口座番号（半角数字1桁〜7桁）<br> 支払先指定時には無効
     *
     * @return self
     */
    public function setAccountNumber($account_number)
    {
        if (!is_null($account_number) && (mb_strlen($account_number) > 7)) {
            throw new \InvalidArgumentException('invalid length for $account_number when calling PaymentRequestCreateParams., must be smaller than or equal to 7.');
        }

        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets account_type
     *
     * @return string|null
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param string|null $account_type '口座種別(ordinary: 普通、checking: 当座、earmarked: 納税準備預金、savings: 貯蓄、other: その他)'<br> '支払先指定時には無効'<br> 'デフォルトは ordinary: 普通 です'
     *
     * @return self
     */
    public function setAccountType($account_type)
    {
        $allowedValues = $this->getAccountTypeAllowableValues();
        if (!is_null($account_type) && !in_array($account_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'account_type', must be one of '%s'",
                    $account_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['account_type'] = $account_type;

        return $this;
    }

    /**
     * Gets application_date
     *
     * @return string|null
     */
    public function getApplicationDate()
    {
        return $this->container['application_date'];
    }

    /**
     * Sets application_date
     *
     * @param string|null $application_date 申請日 (yyyy-mm-dd)<br> 指定しない場合は当日の日付が登録されます。
     *
     * @return self
     */
    public function setApplicationDate($application_date)
    {
        $this->container['application_date'] = $application_date;

        return $this;
    }

    /**
     * Gets approval_flow_route_id
     *
     * @return int
     */
    public function getApprovalFlowRouteId()
    {
        return $this->container['approval_flow_route_id'];
    }

    /**
     * Sets approval_flow_route_id
     *
     * @param int $approval_flow_route_id 申請経路ID<br> 指定する申請経路IDは、申請経路APIを利用して取得してください。
     *
     * @return self
     */
    public function setApprovalFlowRouteId($approval_flow_route_id)
    {

        if (($approval_flow_route_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $approval_flow_route_id when calling PaymentRequestCreateParams., must be smaller than or equal to 2147483647.');
        }
        if (($approval_flow_route_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $approval_flow_route_id when calling PaymentRequestCreateParams., must be bigger than or equal to 1.');
        }

        $this->container['approval_flow_route_id'] = $approval_flow_route_id;

        return $this;
    }

    /**
     * Gets approver_id
     *
     * @return int|null
     */
    public function getApproverId()
    {
        return $this->container['approver_id'];
    }

    /**
     * Sets approver_id
     *
     * @param int|null $approver_id 承認者のユーザーID<br> 「承認者を指定」の経路を申請経路として使用する場合に指定してください。<br> 指定する承認者のユーザーIDは、申請経路APIを利用して取得してください。
     *
     * @return self
     */
    public function setApproverId($approver_id)
    {

        if (!is_null($approver_id) && ($approver_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $approver_id when calling PaymentRequestCreateParams., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($approver_id) && ($approver_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $approver_id when calling PaymentRequestCreateParams., must be bigger than or equal to 1.');
        }

        $this->container['approver_id'] = $approver_id;

        return $this;
    }

    /**
     * Gets bank_code
     *
     * @return string|null
     */
    public function getBankCode()
    {
        return $this->container['bank_code'];
    }

    /**
     * Sets bank_code
     *
     * @param string|null $bank_code 銀行コード（半角数字1桁〜4桁）<br> 支払先指定時には無効
     *
     * @return self
     */
    public function setBankCode($bank_code)
    {
        if (!is_null($bank_code) && (mb_strlen($bank_code) > 4)) {
            throw new \InvalidArgumentException('invalid length for $bank_code when calling PaymentRequestCreateParams., must be smaller than or equal to 4.');
        }

        $this->container['bank_code'] = $bank_code;

        return $this;
    }

    /**
     * Gets bank_name
     *
     * @return string|null
     */
    public function getBankName()
    {
        return $this->container['bank_name'];
    }

    /**
     * Sets bank_name
     *
     * @param string|null $bank_name 銀行名（255文字以内）<br> 支払先指定時には無効
     *
     * @return self
     */
    public function setBankName($bank_name)
    {
        if (!is_null($bank_name) && (mb_strlen($bank_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $bank_name when calling PaymentRequestCreateParams., must be smaller than or equal to 255.');
        }

        $this->container['bank_name'] = $bank_name;

        return $this;
    }

    /**
     * Gets bank_name_kana
     *
     * @return string|null
     */
    public function getBankNameKana()
    {
        return $this->container['bank_name_kana'];
    }

    /**
     * Sets bank_name_kana
     *
     * @param string|null $bank_name_kana 銀行名（カナ）（15文字以内）<br> 支払先指定時には無効
     *
     * @return self
     */
    public function setBankNameKana($bank_name_kana)
    {
        if (!is_null($bank_name_kana) && (mb_strlen($bank_name_kana) > 15)) {
            throw new \InvalidArgumentException('invalid length for $bank_name_kana when calling PaymentRequestCreateParams., must be smaller than or equal to 15.');
        }

        $this->container['bank_name_kana'] = $bank_name_kana;

        return $this;
    }

    /**
     * Gets branch_code
     *
     * @return string|null
     */
    public function getBranchCode()
    {
        return $this->container['branch_code'];
    }

    /**
     * Sets branch_code
     *
     * @param string|null $branch_code 支店番号（半角数字1桁〜3桁）<br> 支払先指定時には無効
     *
     * @return self
     */
    public function setBranchCode($branch_code)
    {
        if (!is_null($branch_code) && (mb_strlen($branch_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $branch_code when calling PaymentRequestCreateParams., must be smaller than or equal to 3.');
        }

        $this->container['branch_code'] = $branch_code;

        return $this;
    }

    /**
     * Gets branch_kana
     *
     * @return string|null
     */
    public function getBranchKana()
    {
        return $this->container['branch_kana'];
    }

    /**
     * Sets branch_kana
     *
     * @param string|null $branch_kana 支店名（カナ）（15文字以内）<br> 指定可能な文字は、英数・カナ・丸括弧・ハイフン・スペースのみです。<br> 支払先指定時には無効
     *
     * @return self
     */
    public function setBranchKana($branch_kana)
    {
        if (!is_null($branch_kana) && (mb_strlen($branch_kana) > 15)) {
            throw new \InvalidArgumentException('invalid length for $branch_kana when calling PaymentRequestCreateParams., must be smaller than or equal to 15.');
        }

        $this->container['branch_kana'] = $branch_kana;

        return $this;
    }

    /**
     * Gets branch_name
     *
     * @return string|null
     */
    public function getBranchName()
    {
        return $this->container['branch_name'];
    }

    /**
     * Sets branch_name
     *
     * @param string|null $branch_name 支店名（255文字以内）<br> 支払先指定時には無効
     *
     * @return self
     */
    public function setBranchName($branch_name)
    {
        if (!is_null($branch_name) && (mb_strlen($branch_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $branch_name when calling PaymentRequestCreateParams., must be smaller than or equal to 255.');
        }

        $this->container['branch_name'] = $branch_name;

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
            throw new \InvalidArgumentException('invalid value for $company_id when calling PaymentRequestCreateParams., must be smaller than or equal to 2147483647.');
        }
        if (($company_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $company_id when calling PaymentRequestCreateParams., must be bigger than or equal to 1.');
        }

        $this->container['company_id'] = $company_id;

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
     * @param string|null $description 備考
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets document_code
     *
     * @return string|null
     */
    public function getDocumentCode()
    {
        return $this->container['document_code'];
    }

    /**
     * Sets document_code
     *
     * @param string|null $document_code 請求書番号（255文字以内）
     *
     * @return self
     */
    public function setDocumentCode($document_code)
    {
        if (!is_null($document_code) && (mb_strlen($document_code) > 255)) {
            throw new \InvalidArgumentException('invalid length for $document_code when calling PaymentRequestCreateParams., must be smaller than or equal to 255.');
        }

        $this->container['document_code'] = $document_code;

        return $this;
    }

    /**
     * Gets draft
     *
     * @return bool
     */
    public function getDraft()
    {
        return $this->container['draft'];
    }

    /**
     * Sets draft
     *
     * @param bool $draft 支払依頼のステータス<br> falseを指定した時は申請中（in_progress）で支払依頼を作成します。<br> trueを指定した時は下書き（draft）で支払依頼を作成します。<br> 未指定の時は下書きとみなして支払依頼を作成します。
     *
     * @return self
     */
    public function setDraft($draft)
    {
        $this->container['draft'] = $draft;

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
     * Gets parent_id
     *
     * @return int|null
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param int|null $parent_id 親申請ID(法人向け エンタープライズプラン、プロフェッショナルプラン)<br> <ul>   <li>承認済みの既存各種申請IDのみ指定可能です。</li>   <li>各種申請一覧APIを利用して取得してください。</li> </ul>
     *
     * @return self
     */
    public function setParentId($parent_id)
    {

        if (!is_null($parent_id) && ($parent_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $parent_id when calling PaymentRequestCreateParams., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($parent_id) && ($parent_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $parent_id when calling PaymentRequestCreateParams., must be bigger than or equal to 1.');
        }

        $this->container['parent_id'] = $parent_id;

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
     * @param string|null $partner_code 支払先の取引先コード<br> 支払先の取引先ID指定時には無効
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
     * @return int|null
     */
    public function getPartnerId()
    {
        return $this->container['partner_id'];
    }

    /**
     * Sets partner_id
     *
     * @param int|null $partner_id 支払先の取引先ID
     *
     * @return self
     */
    public function setPartnerId($partner_id)
    {

        if (!is_null($partner_id) && ($partner_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $partner_id when calling PaymentRequestCreateParams., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($partner_id) && ($partner_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $partner_id when calling PaymentRequestCreateParams., must be bigger than or equal to 1.');
        }

        $this->container['partner_id'] = $partner_id;

        return $this;
    }

    /**
     * Gets payment_date
     *
     * @return string|null
     */
    public function getPaymentDate()
    {
        return $this->container['payment_date'];
    }

    /**
     * Sets payment_date
     *
     * @param string|null $payment_date 支払期限 (yyyy-mm-dd)
     *
     * @return self
     */
    public function setPaymentDate($payment_date)
    {
        $this->container['payment_date'] = $payment_date;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string|null $payment_method '支払方法(none: 指定なし, domestic_bank_transfer: 国内振込, abroad_bank_transfer: 国外振込, account_transfer: 口座振替, credit_card: クレジットカード)'<br> 'デフォルトは none: 指定なし です。'
     *
     * @return self
     */
    public function setPaymentMethod($payment_method)
    {
        $allowedValues = $this->getPaymentMethodAllowableValues();
        if (!is_null($payment_method) && !in_array($payment_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'payment_method', must be one of '%s'",
                    $payment_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets payment_request_lines
     *
     * @return \Freee\Accounting\Model\PaymentRequestCreateParamsPaymentRequestLines[]
     */
    public function getPaymentRequestLines()
    {
        return $this->container['payment_request_lines'];
    }

    /**
     * Sets payment_request_lines
     *
     * @param \Freee\Accounting\Model\PaymentRequestCreateParamsPaymentRequestLines[] $payment_request_lines 支払依頼の項目行一覧（配列）
     *
     * @return self
     */
    public function setPaymentRequestLines($payment_request_lines)
    {
        $this->container['payment_request_lines'] = $payment_request_lines;

        return $this;
    }

    /**
     * Gets receipt_ids
     *
     * @return int[]|null
     */
    public function getReceiptIds()
    {
        return $this->container['receipt_ids'];
    }

    /**
     * Sets receipt_ids
     *
     * @param int[]|null $receipt_ids 証憑ファイルID（ファイルボックスのファイルID）（配列）
     *
     * @return self
     */
    public function setReceiptIds($receipt_ids)
    {
        $this->container['receipt_ids'] = $receipt_ids;

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
     * @param string $title 申請タイトル
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



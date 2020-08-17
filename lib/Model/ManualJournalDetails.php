<?php
/**
 * ManualJournalDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * freee API
 *
 * <h1 id=\"freee_api\">freee API</h1> <hr /> <h2 id=\"start_guide\">スタートガイド</h2>  <p>freee API開発がはじめての方は<a href=\"https://developer.freee.co.jp/getting-started\">freee API スタートガイド</a>を参照してください。</p>  <hr /> <h2 id=\"specification\">仕様</h2>  <pre><code>【重要】会計freee APIの新バージョンについて 2020年12月まで、2つのバージョンが利用できる状態です。古いものは2020年12月に利用不可となります。<br> 新しいAPIを利用するにはリクエストヘッダーに以下を指定します。 X-Api-Version: 2020-06-15<br> 指定がない場合は2020年12月に廃止予定のAPIを利用することとなります。<br> 【重要】APIのバージョン指定をせずに利用し続ける場合 2020年12月に新しいバージョンのAPIに自動的に切り替わります。 詳細は、<a href=\"https://developer.freee.co.jp/release-note/2948\" target=\"_blank\">リリースノート</a>をご覧ください。<br> 旧バージョンのAPIリファレンスを確認したい場合は、<a href=\"https://freee.github.io/freee-api-schema/\" target=\"_blank\">旧バージョンのAPIリファレンスページ</a>をご覧ください。 </code></pre>  <h3 id=\"api_endpoint\">APIエンドポイント</h3>  <p>https://api.freee.co.jp/ (httpsのみ)</p>  <h3 id=\"about_authorize\">認証について</h3> <p>OAuth2.0を利用します。詳細は<a href=\"https://developer.freee.co.jp/docs\" target=\"_blank\">ドキュメントの認証</a>パートを参照してください。</p>  <h3 id=\"data_format\">データフォーマット</h3>  <p>リクエスト、レスポンスともにJSON形式をサポートしていますが、詳細は、API毎の説明欄（application/jsonなど）を確認してください。</p>  <h3 id=\"compatibility\">後方互換性ありの変更</h3>  <p>freeeでは、APIを改善していくために以下のような変更は後方互換性ありとして通知なく変更を入れることがあります。アプリケーション実装者は以下を踏まえて開発を行ってください。</p>  <ul> <li>新しいAPIリソース・エンドポイントの追加</li> <li>既存のAPIに対して必須ではない新しいリクエストパラメータの追加</li> <li>既存のAPIレスポンスに対する新しいプロパティの追加</li> <li>既存のAPIレスポンスに対するプロパティの順番の入れ変え</li> <li>keyとなっているidやcodeの長さの変更（長くする）</li> </ul>  <h3 id=\"common_response_header\">共通レスポンスヘッダー</h3>  <p>すべてのAPIのレスポンスには以下のHTTPヘッダーが含まれます。</p>  <ul> <li> <p>X-Freee-Request-ID</p> <ul> <li>各リクエスト毎に発行されるID</li> </ul> </li> </ul>  <h3 id=\"common_error_response\">共通エラーレスポンス</h3>  <ul> <li> <p>ステータスコードはレスポンス内のJSONに含まれる他、HTTPヘッダにも含まれる</p> </li> <li> <p>一部のエラーレスポンスにはエラーコードが含まれます。<br>詳細は、<a href=\"https://developer.freee.co.jp/tips/faq/40x-checkpoint\">HTTPステータスコード400台エラー時のチェックポイント</a>を参照してください</p> </li> <p>type</p>  <ul> <li>status : HTTPステータスコードの説明</li>  <li>validation : エラーの詳細の説明（開発者向け）</li> </ul> </li> </ul>  <p>レスポンスの例</p>  <pre><code>  {     &quot;status_code&quot; : 400,     &quot;errors&quot; : [       {         &quot;type&quot; : &quot;status&quot;,         &quot;messages&quot; : [&quot;不正なリクエストです。&quot;]       },       {         &quot;type&quot; : &quot;validation&quot;,         &quot;messages&quot; : [&quot;Date は不正な日付フォーマットです。入力例：2013-01-01&quot;]       }     ]   }</code></pre>  </br>  <h3 id=\"api_rate_limit\">API使用制限</h3>    <p>freeeは一定期間に過度のアクセスを検知した場合、APIアクセスをコントロールする場合があります。</p>   <p>その際のhttp status codeは403となります。制限がかかってから10分程度が過ぎると再度使用することができるようになります。</p>  <h4 id=\"reports_api_endpoint\">/reportsエンドポイント</h4>  <p>freeeは/reportsエンドポイントに対して1秒間に10以上のアクセスを検知した場合、APIアクセスをコントロールする場合があります。その際のhttp status codeは429（too many requests）となります。</p>  <p>レスポンスボディのmetaプロパティに以下を含めます。</p>  <ul>   <li>設定されている上限値</li>   <li>上限に達するまでの使用可能回数</li>   <li>（上限値に達した場合）使用回数がリセットされる時刻</li> </ul>  <h3 id=\"plan_api_rate_limit\">プラン別のAPI Rate Limit</h3>   <table border=\"1\">     <tbody>       <tr>         <th style=\"padding: 10px\"><strong>会計freeeプラン名</strong></th>         <th style=\"padding: 10px\"><strong>事業所とアプリケーション毎に1日でのAPIコール数</strong></th>       </tr>       <tr>         <td style=\"padding: 10px\">エンタープライズ</td>         <td style=\"padding: 10px\">10,000</td>       </tr>       <tr>         <td style=\"padding: 10px\">プロフェッショナル</td>         <td style=\"padding: 10px\">5,000</td>       </tr>       <tr>         <td style=\"padding: 10px\">ベーシック</td>         <td style=\"padding: 10px\">3,000</td>       </tr>       <tr>         <td style=\"padding: 10px\">ミニマム</td>         <td style=\"padding: 10px\">3,000</td>       </tr>       <tr>         <td style=\"padding: 10px\">上記以外</td>         <td style=\"padding: 10px\">3,000</td>       </tr>     </tbody>   </table>  <h3 id=\"webhook\">Webhookについて</h3>  <p>詳細は<a href=\"https://developer.freee.co.jp/docs/accounting/webhook\" target=\"_blank\">会計Webhook概要</a>を参照してください。</p>  <hr /> <h2 id=\"contact\">連絡先</h2>  <p>ご不明点、ご要望等は <a href=\"https://support.freee.co.jp/hc/ja/requests/new\">freee サポートデスクへのお問い合わせフォーム</a> からご連絡ください。</p> <hr />&copy; Since 2013 freee K.K.
 *
 * The version of the OpenAPI document: v1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
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
 * ManualJournalDetails Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ManualJournalDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'manual_journal_details';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_item_id' => 'int',
        'amount' => 'int',
        'description' => 'string',
        'entry_side' => 'string',
        'id' => 'int',
        'item_id' => 'int',
        'item_name' => 'string',
        'partner_code' => 'string',
        'partner_id' => 'int',
        'partner_long_name' => 'string',
        'partner_name' => 'string',
        'section_id' => 'int',
        'section_name' => 'string',
        'segment_1_tag_id' => 'int',
        'segment_1_tag_name' => 'int',
        'segment_2_tag_id' => 'int',
        'segment_2_tag_name' => 'int',
        'segment_3_tag_id' => 'int',
        'segment_3_tag_name' => 'int',
        'tag_ids' => 'int[]',
        'tag_names' => 'string[]',
        'tax_code' => 'int',
        'vat' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'account_item_id' => null,
        'amount' => null,
        'description' => null,
        'entry_side' => null,
        'id' => null,
        'item_id' => null,
        'item_name' => null,
        'partner_code' => null,
        'partner_id' => null,
        'partner_long_name' => null,
        'partner_name' => null,
        'section_id' => null,
        'section_name' => null,
        'segment_1_tag_id' => null,
        'segment_1_tag_name' => null,
        'segment_2_tag_id' => null,
        'segment_2_tag_name' => null,
        'segment_3_tag_id' => null,
        'segment_3_tag_name' => null,
        'tag_ids' => null,
        'tag_names' => null,
        'tax_code' => null,
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
        'amount' => 'amount',
        'description' => 'description',
        'entry_side' => 'entry_side',
        'id' => 'id',
        'item_id' => 'item_id',
        'item_name' => 'item_name',
        'partner_code' => 'partner_code',
        'partner_id' => 'partner_id',
        'partner_long_name' => 'partner_long_name',
        'partner_name' => 'partner_name',
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
        'vat' => 'vat'
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
        'entry_side' => 'setEntrySide',
        'id' => 'setId',
        'item_id' => 'setItemId',
        'item_name' => 'setItemName',
        'partner_code' => 'setPartnerCode',
        'partner_id' => 'setPartnerId',
        'partner_long_name' => 'setPartnerLongName',
        'partner_name' => 'setPartnerName',
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
        'vat' => 'setVat'
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
        'entry_side' => 'getEntrySide',
        'id' => 'getId',
        'item_id' => 'getItemId',
        'item_name' => 'getItemName',
        'partner_code' => 'getPartnerCode',
        'partner_id' => 'getPartnerId',
        'partner_long_name' => 'getPartnerLongName',
        'partner_name' => 'getPartnerName',
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

    const ENTRY_SIDE_CREDIT = 'credit';
    const ENTRY_SIDE_DEBIT = 'debit';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEntrySideAllowableValues()
    {
        return [
            self::ENTRY_SIDE_CREDIT,
            self::ENTRY_SIDE_DEBIT,
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
        $this->container['account_item_id'] = isset($data['account_item_id']) ? $data['account_item_id'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['entry_side'] = isset($data['entry_side']) ? $data['entry_side'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['item_name'] = isset($data['item_name']) ? $data['item_name'] : null;
        $this->container['partner_code'] = isset($data['partner_code']) ? $data['partner_code'] : null;
        $this->container['partner_id'] = isset($data['partner_id']) ? $data['partner_id'] : null;
        $this->container['partner_long_name'] = isset($data['partner_long_name']) ? $data['partner_long_name'] : null;
        $this->container['partner_name'] = isset($data['partner_name']) ? $data['partner_name'] : null;
        $this->container['section_id'] = isset($data['section_id']) ? $data['section_id'] : null;
        $this->container['section_name'] = isset($data['section_name']) ? $data['section_name'] : null;
        $this->container['segment_1_tag_id'] = isset($data['segment_1_tag_id']) ? $data['segment_1_tag_id'] : null;
        $this->container['segment_1_tag_name'] = isset($data['segment_1_tag_name']) ? $data['segment_1_tag_name'] : null;
        $this->container['segment_2_tag_id'] = isset($data['segment_2_tag_id']) ? $data['segment_2_tag_id'] : null;
        $this->container['segment_2_tag_name'] = isset($data['segment_2_tag_name']) ? $data['segment_2_tag_name'] : null;
        $this->container['segment_3_tag_id'] = isset($data['segment_3_tag_id']) ? $data['segment_3_tag_id'] : null;
        $this->container['segment_3_tag_name'] = isset($data['segment_3_tag_name']) ? $data['segment_3_tag_name'] : null;
        $this->container['tag_ids'] = isset($data['tag_ids']) ? $data['tag_ids'] : null;
        $this->container['tag_names'] = isset($data['tag_names']) ? $data['tag_names'] : null;
        $this->container['tax_code'] = isset($data['tax_code']) ? $data['tax_code'] : null;
        $this->container['vat'] = isset($data['vat']) ? $data['vat'] : null;
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

        if (($this->container['amount'] < 1)) {
            $invalidProperties[] = "invalid value for 'amount', must be bigger than or equal to 1.";
        }

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['entry_side'] === null) {
            $invalidProperties[] = "'entry_side' can't be null";
        }
        $allowedValues = $this->getEntrySideAllowableValues();
        if (!is_null($this->container['entry_side']) && !in_array($this->container['entry_side'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'entry_side', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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

        if ($this->container['item_id'] === null) {
            $invalidProperties[] = "'item_id' can't be null";
        }
        if (($this->container['item_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'item_id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['item_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'item_id', must be bigger than or equal to 1.";
        }

        if ($this->container['item_name'] === null) {
            $invalidProperties[] = "'item_name' can't be null";
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

        if ($this->container['partner_long_name'] === null) {
            $invalidProperties[] = "'partner_long_name' can't be null";
        }
        if ((mb_strlen($this->container['partner_long_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'partner_long_name', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['partner_name'] === null) {
            $invalidProperties[] = "'partner_name' can't be null";
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

        if ($this->container['section_name'] === null) {
            $invalidProperties[] = "'section_name' can't be null";
        }
        if (!is_null($this->container['segment_1_tag_id']) && ($this->container['segment_1_tag_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'segment_1_tag_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['segment_1_tag_id']) && ($this->container['segment_1_tag_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'segment_1_tag_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['segment_2_tag_id']) && ($this->container['segment_2_tag_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'segment_2_tag_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['segment_2_tag_id']) && ($this->container['segment_2_tag_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'segment_2_tag_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['segment_3_tag_id']) && ($this->container['segment_3_tag_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'segment_3_tag_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['segment_3_tag_id']) && ($this->container['segment_3_tag_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'segment_3_tag_id', must be bigger than or equal to 1.";
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
        if (($this->container['tax_code'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'tax_code', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['tax_code'] < 0)) {
            $invalidProperties[] = "invalid value for 'tax_code', must be bigger than or equal to 0.";
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
     * @return $this
     */
    public function setAccountItemId($account_item_id)
    {

        if (($account_item_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $account_item_id when calling ManualJournalDetails., must be smaller than or equal to 2147483647.');
        }
        if (($account_item_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $account_item_id when calling ManualJournalDetails., must be bigger than or equal to 1.');
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
     * @param int $amount 金額（税込で指定してください）
     *
     * @return $this
     */
    public function setAmount($amount)
    {

        if (($amount > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling ManualJournalDetails., must be smaller than or equal to 2147483647.');
        }
        if (($amount < 1)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling ManualJournalDetails., must be bigger than or equal to 1.');
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
     * @param string $description 備考
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets entry_side
     *
     * @return string
     */
    public function getEntrySide()
    {
        return $this->container['entry_side'];
    }

    /**
     * Sets entry_side
     *
     * @param string $entry_side 貸借(貸方: credit, 借方: debit)
     *
     * @return $this
     */
    public function setEntrySide($entry_side)
    {
        $allowedValues = $this->getEntrySideAllowableValues();
        if (!in_array($entry_side, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'entry_side', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['entry_side'] = $entry_side;

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
     * @param int $id 貸借行ID
     *
     * @return $this
     */
    public function setId($id)
    {

        if (($id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $id when calling ManualJournalDetails., must be smaller than or equal to 2147483647.');
        }
        if (($id < 1)) {
            throw new \InvalidArgumentException('invalid value for $id when calling ManualJournalDetails., must be bigger than or equal to 1.');
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
     * @return $this
     */
    public function setItemId($item_id)
    {

        if (($item_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $item_id when calling ManualJournalDetails., must be smaller than or equal to 2147483647.');
        }
        if (($item_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $item_id when calling ManualJournalDetails., must be bigger than or equal to 1.');
        }

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
     * @return $this
     */
    public function setItemName($item_name)
    {
        $this->container['item_name'] = $item_name;

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
     * @return $this
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
     * @return $this
     */
    public function setPartnerId($partner_id)
    {

        if (($partner_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $partner_id when calling ManualJournalDetails., must be smaller than or equal to 2147483647.');
        }
        if (($partner_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $partner_id when calling ManualJournalDetails., must be bigger than or equal to 1.');
        }

        $this->container['partner_id'] = $partner_id;

        return $this;
    }

    /**
     * Gets partner_long_name
     *
     * @return string
     */
    public function getPartnerLongName()
    {
        return $this->container['partner_long_name'];
    }

    /**
     * Sets partner_long_name
     *
     * @param string $partner_long_name 正式名称（255文字以内）
     *
     * @return $this
     */
    public function setPartnerLongName($partner_long_name)
    {
        if ((mb_strlen($partner_long_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $partner_long_name when calling ManualJournalDetails., must be smaller than or equal to 255.');
        }

        $this->container['partner_long_name'] = $partner_long_name;

        return $this;
    }

    /**
     * Gets partner_name
     *
     * @return string
     */
    public function getPartnerName()
    {
        return $this->container['partner_name'];
    }

    /**
     * Sets partner_name
     *
     * @param string $partner_name 取引先名
     *
     * @return $this
     */
    public function setPartnerName($partner_name)
    {
        $this->container['partner_name'] = $partner_name;

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
     * @return $this
     */
    public function setSectionId($section_id)
    {

        if (($section_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $section_id when calling ManualJournalDetails., must be smaller than or equal to 2147483647.');
        }
        if (($section_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $section_id when calling ManualJournalDetails., must be bigger than or equal to 1.');
        }

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
     * @return $this
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
     * @return $this
     */
    public function setSegment1TagId($segment_1_tag_id)
    {

        if (!is_null($segment_1_tag_id) && ($segment_1_tag_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $segment_1_tag_id when calling ManualJournalDetails., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($segment_1_tag_id) && ($segment_1_tag_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $segment_1_tag_id when calling ManualJournalDetails., must be bigger than or equal to 1.');
        }

        $this->container['segment_1_tag_id'] = $segment_1_tag_id;

        return $this;
    }

    /**
     * Gets segment_1_tag_name
     *
     * @return int|null
     */
    public function getSegment1TagName()
    {
        return $this->container['segment_1_tag_name'];
    }

    /**
     * Sets segment_1_tag_name
     *
     * @param int|null $segment_1_tag_name セグメント１ID
     *
     * @return $this
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
     * @return $this
     */
    public function setSegment2TagId($segment_2_tag_id)
    {

        if (!is_null($segment_2_tag_id) && ($segment_2_tag_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $segment_2_tag_id when calling ManualJournalDetails., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($segment_2_tag_id) && ($segment_2_tag_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $segment_2_tag_id when calling ManualJournalDetails., must be bigger than or equal to 1.');
        }

        $this->container['segment_2_tag_id'] = $segment_2_tag_id;

        return $this;
    }

    /**
     * Gets segment_2_tag_name
     *
     * @return int|null
     */
    public function getSegment2TagName()
    {
        return $this->container['segment_2_tag_name'];
    }

    /**
     * Sets segment_2_tag_name
     *
     * @param int|null $segment_2_tag_name セグメント２
     *
     * @return $this
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
     * @return $this
     */
    public function setSegment3TagId($segment_3_tag_id)
    {

        if (!is_null($segment_3_tag_id) && ($segment_3_tag_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $segment_3_tag_id when calling ManualJournalDetails., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($segment_3_tag_id) && ($segment_3_tag_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $segment_3_tag_id when calling ManualJournalDetails., must be bigger than or equal to 1.');
        }

        $this->container['segment_3_tag_id'] = $segment_3_tag_id;

        return $this;
    }

    /**
     * Gets segment_3_tag_name
     *
     * @return int|null
     */
    public function getSegment3TagName()
    {
        return $this->container['segment_3_tag_name'];
    }

    /**
     * Sets segment_3_tag_name
     *
     * @param int|null $segment_3_tag_name セグメント３
     *
     * @return $this
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
     * @return $this
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
     * @return $this
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
     * @param int $tax_code 税区分ID
     *
     * @return $this
     */
    public function setTaxCode($tax_code)
    {

        if (($tax_code > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $tax_code when calling ManualJournalDetails., must be smaller than or equal to 2147483647.');
        }
        if (($tax_code < 0)) {
            throw new \InvalidArgumentException('invalid value for $tax_code when calling ManualJournalDetails., must be bigger than or equal to 0.');
        }

        $this->container['tax_code'] = $tax_code;

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
     * @param int $vat 消費税額（指定しない場合は自動で計算されます）
     *
     * @return $this
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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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



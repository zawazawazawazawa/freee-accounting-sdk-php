<?php
/**
 * ApprovalFlowRoutesIndexResponseApprovalFlowRoutes
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
 * ApprovalFlowRoutesIndexResponseApprovalFlowRoutes Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ApprovalFlowRoutesIndexResponseApprovalFlowRoutes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'approvalFlowRoutesIndexResponse_approval_flow_routes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'definition_system' => 'bool',
        'description' => 'string',
        'first_step_id' => 'int',
        'id' => 'int',
        'name' => 'string',
        'request_form_ids' => 'int[]',
        'usages' => 'string[]',
        'user_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'definition_system' => null,
        'description' => null,
        'first_step_id' => null,
        'id' => null,
        'name' => null,
        'request_form_ids' => null,
        'usages' => null,
        'user_id' => null
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
        'definition_system' => 'definition_system',
        'description' => 'description',
        'first_step_id' => 'first_step_id',
        'id' => 'id',
        'name' => 'name',
        'request_form_ids' => 'request_form_ids',
        'usages' => 'usages',
        'user_id' => 'user_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'definition_system' => 'setDefinitionSystem',
        'description' => 'setDescription',
        'first_step_id' => 'setFirstStepId',
        'id' => 'setId',
        'name' => 'setName',
        'request_form_ids' => 'setRequestFormIds',
        'usages' => 'setUsages',
        'user_id' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'definition_system' => 'getDefinitionSystem',
        'description' => 'getDescription',
        'first_step_id' => 'getFirstStepId',
        'id' => 'getId',
        'name' => 'getName',
        'request_form_ids' => 'getRequestFormIds',
        'usages' => 'getUsages',
        'user_id' => 'getUserId'
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

    const USAGES_TXN_APPROVAL = 'TxnApproval';
    const USAGES_EXPENSE_APPLICATION = 'ExpenseApplication';
    const USAGES_PAYMENT_REQUEST = 'PaymentRequest';
    const USAGES_APPROVAL_REQUEST = 'ApprovalRequest';
    const USAGES_DOC_APPROVAL = 'DocApproval';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUsagesAllowableValues()
    {
        return [
            self::USAGES_TXN_APPROVAL,
            self::USAGES_EXPENSE_APPLICATION,
            self::USAGES_PAYMENT_REQUEST,
            self::USAGES_APPROVAL_REQUEST,
            self::USAGES_DOC_APPROVAL,
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
        $this->container['definition_system'] = isset($data['definition_system']) ? $data['definition_system'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['first_step_id'] = isset($data['first_step_id']) ? $data['first_step_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['request_form_ids'] = isset($data['request_form_ids']) ? $data['request_form_ids'] : null;
        $this->container['usages'] = isset($data['usages']) ? $data['usages'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['first_step_id']) && ($this->container['first_step_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'first_step_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['first_step_id']) && ($this->container['first_step_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'first_step_id', must be bigger than or equal to 1.";
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

        if (!is_null($this->container['user_id']) && ($this->container['user_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'user_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['user_id']) && ($this->container['user_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'user_id', must be bigger than or equal to 1.";
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
     * Gets definition_system
     *
     * @return bool|null
     */
    public function getDefinitionSystem()
    {
        return $this->container['definition_system'];
    }

    /**
     * Sets definition_system
     *
     * @param bool|null $definition_system システム作成の申請経路かどうか
     *
     * @return $this
     */
    public function setDefinitionSystem($definition_system)
    {
        $this->container['definition_system'] = $definition_system;

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
     * @param string|null $description 申請経路の説明
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets first_step_id
     *
     * @return int|null
     */
    public function getFirstStepId()
    {
        return $this->container['first_step_id'];
    }

    /**
     * Sets first_step_id
     *
     * @param int|null $first_step_id 最初の承認ステップのID
     *
     * @return $this
     */
    public function setFirstStepId($first_step_id)
    {

        if (!is_null($first_step_id) && ($first_step_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $first_step_id when calling ApprovalFlowRoutesIndexResponseApprovalFlowRoutes., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($first_step_id) && ($first_step_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $first_step_id when calling ApprovalFlowRoutesIndexResponseApprovalFlowRoutes., must be bigger than or equal to 1.');
        }

        $this->container['first_step_id'] = $first_step_id;

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
     * @param int $id 申請経路ID
     *
     * @return $this
     */
    public function setId($id)
    {

        if (($id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $id when calling ApprovalFlowRoutesIndexResponseApprovalFlowRoutes., must be smaller than or equal to 2147483647.');
        }
        if (($id < 1)) {
            throw new \InvalidArgumentException('invalid value for $id when calling ApprovalFlowRoutesIndexResponseApprovalFlowRoutes., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name 申請経路名
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets request_form_ids
     *
     * @return int[]|null
     */
    public function getRequestFormIds()
    {
        return $this->container['request_form_ids'];
    }

    /**
     * Sets request_form_ids
     *
     * @param int[]|null $request_form_ids 申請経路で利用できる申請フォームID配列
     *
     * @return $this
     */
    public function setRequestFormIds($request_form_ids)
    {
        $this->container['request_form_ids'] = $request_form_ids;

        return $this;
    }

    /**
     * Gets usages
     *
     * @return string[]|null
     */
    public function getUsages()
    {
        return $this->container['usages'];
    }

    /**
     * Sets usages
     *
     * @param string[]|null $usages 申請種別（申請経路を使用できる申請種別を示します。例えば、ApprovalRequest の場合は、各種申請で使用できる申請経路です。） * `TxnApproval` - 仕訳承認 * `ExpenseApplication` - 経費精算 * `PaymentRequest` - 支払依頼 * `ApprovalRequest` - 各種申請 * `DocApproval` - 請求書等 (見積書・納品書・請求書・発注書)
     *
     * @return $this
     */
    public function setUsages($usages)
    {
        $allowedValues = $this->getUsagesAllowableValues();
        if (!is_null($usages) && array_diff($usages, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'usages', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['usages'] = $usages;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int|null $user_id 更新したユーザーのユーザーID
     *
     * @return $this
     */
    public function setUserId($user_id)
    {

        if (!is_null($user_id) && ($user_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $user_id when calling ApprovalFlowRoutesIndexResponseApprovalFlowRoutes., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($user_id) && ($user_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $user_id when calling ApprovalFlowRoutesIndexResponseApprovalFlowRoutes., must be bigger than or equal to 1.');
        }

        $this->container['user_id'] = $user_id;

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



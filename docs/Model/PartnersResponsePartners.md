# # PartnersResponsePartners

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_attributes** | [**\Freee\Accounting\Model\PartnersResponseAddressAttributes**](PartnersResponseAddressAttributes.md) |  | [optional]
**available** | **bool** | 取引先の使用設定（true: 使用する、false: 使用しない） &lt;br&gt; &lt;ul&gt;   &lt;li&gt;     本APIでpartnerを作成した場合はtrueになります。   &lt;/li&gt;   &lt;li&gt;     falseにする場合はWeb画面から変更できます。   &lt;/li&gt;   &lt;li&gt;     trueの場合、Web画面での取引登録時などに入力候補として表示されます。   &lt;/li&gt;   &lt;li&gt;     falseの場合、取引先自体は削除せず、Web画面での取引登録時などに入力候補として表示されません。ただし取引（収入／支出）の作成APIなどでfalseの取引先をパラメータに指定すれば、取引などにfalseの取引先を設定できます。   &lt;/li&gt; &lt;/ul&gt; |
**code** | **string** | 取引先コード |
**company_id** | **int** | 事業所ID |
**contact_name** | **string** | 担当者 氏名 | [optional]
**country_code** | **string** | 地域（JP: 国内、ZZ:国外） | [optional]
**default_title** | **string** | 敬称（御中、様、(空白)の3つから選択） | [optional]
**email** | **string** | 担当者 メールアドレス | [optional]
**id** | **int** | 取引先ID |
**long_name** | **string** | 正式名称（255文字以内） | [optional]
**name** | **string** | 取引先名 |
**name_kana** | **string** | カナ名称（255文字以内） | [optional]
**org_code** | **int** | 事業所種別（null: 未設定、1: 法人、2: 個人） | [optional]
**partner_bank_account_attributes** | [**\Freee\Accounting\Model\PartnerResponsePartnerPartnerBankAccountAttributes**](PartnerResponsePartnerPartnerBankAccountAttributes.md) |  | [optional]
**partner_doc_setting_attributes** | [**\Freee\Accounting\Model\PartnerResponsePartnerPartnerDocSettingAttributes**](PartnerResponsePartnerPartnerDocSettingAttributes.md) |  | [optional]
**payer_walletable_id** | **int** | 振込元口座ID（一括振込ファイル用）:（未設定の場合は、nullです。） | [optional]
**phone** | **string** | 電話番号 | [optional]
**shortcut1** | **string** | ショートカット1 (255文字以内) | [optional]
**shortcut2** | **string** | ショートカット2 (255文字以内) | [optional]
**transfer_fee_handling_side** | **string** | 振込手数料負担（一括振込ファイル用）: (振込元(当方): payer, 振込先(先方): payee) | [optional]
**update_date** | **string** | 更新日 (yyyy-mm-dd) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

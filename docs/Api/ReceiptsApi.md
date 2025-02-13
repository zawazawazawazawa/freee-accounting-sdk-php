# Freee\Accounting\ReceiptsApi

All URIs are relative to https://api.freee.co.jp.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createReceipt()**](ReceiptsApi.md#createReceipt) | **POST** /api/1/receipts | ファイルボックス 証憑ファイルアップロード
[**destroyReceipt()**](ReceiptsApi.md#destroyReceipt) | **DELETE** /api/1/receipts/{id} | ファイルボックス 証憑ファイルを削除する
[**downloadReceipt()**](ReceiptsApi.md#downloadReceipt) | **GET** /api/1/receipts/{id}/download | ファイルボックス 証憑ファイルのダウンロード
[**getReceipt()**](ReceiptsApi.md#getReceipt) | **GET** /api/1/receipts/{id} | ファイルボックス 証憑ファイルの取得
[**getReceipts()**](ReceiptsApi.md#getReceipts) | **GET** /api/1/receipts | ファイルボックス 証憑ファイル一覧の取得
[**updateReceipt()**](ReceiptsApi.md#updateReceipt) | **PUT** /api/1/receipts/{id} | ファイルボックス 証憑ファイル情報更新


## `createReceipt()`

```php
createReceipt($company_id, $receipt, $description, $issue_date): \Freee\Accounting\Model\ReceiptResponse
```

ファイルボックス 証憑ファイルアップロード

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$receipt = "/path/to/file.txt"; // \SplFileObject | 証憑ファイル
$description = 'description_example'; // string | メモ (255文字以内)
$issue_date = 'issue_date_example'; // string | 取引日 (yyyy-mm-dd)

try {
    $result = $apiInstance->createReceipt($company_id, $receipt, $description, $issue_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->createReceipt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **receipt** | **\SplFileObject****\SplFileObject**| 証憑ファイル |
 **description** | **string**| メモ (255文字以内) | [optional]
 **issue_date** | **string**| 取引日 (yyyy-mm-dd) | [optional]

### Return type

[**\Freee\Accounting\Model\ReceiptResponse**](../Model/ReceiptResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destroyReceipt()`

```php
destroyReceipt($id, $company_id)
```

ファイルボックス 証憑ファイルを削除する

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 証憑ファイルID
$company_id = 56; // int | 事業所ID

try {
    $apiInstance->destroyReceipt($id, $company_id);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->destroyReceipt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 証憑ファイルID |
 **company_id** | **int**| 事業所ID |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadReceipt()`

```php
downloadReceipt($id, $company_id): \SplFileObject
```

ファイルボックス 証憑ファイルのダウンロード

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 証憑ファイルID
$company_id = 56; // int | 事業所ID

try {
    $result = $apiInstance->downloadReceipt($id, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->downloadReceipt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 証憑ファイルID |
 **company_id** | **int**| 事業所ID |

### Return type

**\SplFileObject**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `image/_*`, `text/csv`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReceipt()`

```php
getReceipt($id, $company_id): \Freee\Accounting\Model\ReceiptResponse
```

ファイルボックス 証憑ファイルの取得

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 証憑ファイルID
$company_id = 56; // int | 事業所ID

try {
    $result = $apiInstance->getReceipt($id, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->getReceipt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 証憑ファイルID |
 **company_id** | **int**| 事業所ID |

### Return type

[**\Freee\Accounting\Model\ReceiptResponse**](../Model/ReceiptResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReceipts()`

```php
getReceipts($company_id, $start_date, $end_date, $user_name, $number, $comment_type, $comment_important, $category, $offset, $limit): \Freee\Accounting\Model\InlineResponse2005
```

ファイルボックス 証憑ファイル一覧の取得

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$start_date = 'start_date_example'; // string | アップロード日 (yyyy-mm-dd)
$end_date = 'end_date_example'; // string | アップロード日 (yyyy-mm-dd)
$user_name = 'user_name_example'; // string | アップロードしたユーザー名、メールアドレス
$number = 56; // int | アップロードファイルNo
$comment_type = 'comment_type_example'; // string | posted:コメントあり, raised:未解決, resolved:解決済
$comment_important = True; // bool | trueの時、重要コメント付きが対象
$category = 'category_example'; // string | all:すべて、without_deal:未登録、with_expense_application_line:経費申請中, with_deal:登録済み、ignored:無視
$offset = 56; // int | 取得レコードのオフセット (デフォルト: 0)
$limit = 56; // int | 取得レコードの件数 (デフォルト: 50, 最小: 1, 最大: 3000)

try {
    $result = $apiInstance->getReceipts($company_id, $start_date, $end_date, $user_name, $number, $comment_type, $comment_important, $category, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->getReceipts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **start_date** | **string**| アップロード日 (yyyy-mm-dd) |
 **end_date** | **string**| アップロード日 (yyyy-mm-dd) |
 **user_name** | **string**| アップロードしたユーザー名、メールアドレス | [optional]
 **number** | **int**| アップロードファイルNo | [optional]
 **comment_type** | **string**| posted:コメントあり, raised:未解決, resolved:解決済 | [optional]
 **comment_important** | **bool**| trueの時、重要コメント付きが対象 | [optional]
 **category** | **string**| all:すべて、without_deal:未登録、with_expense_application_line:経費申請中, with_deal:登録済み、ignored:無視 | [optional]
 **offset** | **int**| 取得レコードのオフセット (デフォルト: 0) | [optional]
 **limit** | **int**| 取得レコードの件数 (デフォルト: 50, 最小: 1, 最大: 3000) | [optional]

### Return type

[**\Freee\Accounting\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateReceipt()`

```php
updateReceipt($id, $receipt_update_params): \Freee\Accounting\Model\ReceiptResponse
```

ファイルボックス 証憑ファイル情報更新

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 証憑ファイルID
$receipt_update_params = new \Freee\Accounting\Model\ReceiptUpdateParams(); // \Freee\Accounting\Model\ReceiptUpdateParams | 経費申請の更新

try {
    $result = $apiInstance->updateReceipt($id, $receipt_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->updateReceipt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 証憑ファイルID |
 **receipt_update_params** | [**\Freee\Accounting\Model\ReceiptUpdateParams**](../Model/ReceiptUpdateParams.md)| 経費申請の更新 |

### Return type

[**\Freee\Accounting\Model\ReceiptResponse**](../Model/ReceiptResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

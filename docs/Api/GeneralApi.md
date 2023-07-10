# OpenAPI\Client\GeneralApi

All URIs are relative to https://app.stage.everifin.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getClientAccessToken()**](GeneralApi.md#getClientAccessToken) | **POST** /auth/realms/everifin_paygate/protocol/openid-connect/token | Get Client Access Token
[**getClientBanks()**](GeneralApi.md#getClientBanks) | **GET** /api/v1/banks | Get Client Banks
[**getPaymentDetail()**](GeneralApi.md#getPaymentDetail) | **GET** /api/v1/payments/{id} | Get payment detail
[**getPayments()**](GeneralApi.md#getPayments) | **GET** /api/v1/payments | Get payments
[**withdrawPayment()**](GeneralApi.md#withdrawPayment) | **DELETE** /api/v1/payments/{id} | Withdraw payment


## `getClientAccessToken()`

```php
getClientAccessToken($client_id, $client_secret, $grant_type): \OpenAPI\Client\Model\InlineResponse200
```

Get Client Access Token

Get Client Access Token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$client_secret = 'client_secret_example'; // string
$grant_type = 'grant_type_example'; // string

try {
    $result = $apiInstance->getClientAccessToken($client_id, $client_secret, $grant_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->getClientAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**|  | [optional]
 **client_secret** | **string**|  | [optional]
 **grant_type** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClientBanks()`

```php
getClientBanks($country_code): \OpenAPI\Client\Model\InlineResponse2001
```

Get Client Banks

This endpoint provides list of available banks for payments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$country_code = CZE; // string | Alpha 3 country code

try {
    $result = $apiInstance->getClientBanks($country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->getClientBanks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| Alpha 3 country code | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentDetail()`

```php
getPaymentDetail($id): \OpenAPI\Client\Model\InlineResponse2004
```

Get payment detail

Endpoint to get detailed info about a single payment from Everifin PayGate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = {{payment_id}}; // string

try {
    $result = $apiInstance->getPaymentDetail($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->getPaymentDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayments()`

```php
getPayments($page, $count_per_page, $sort, $id, $instruction_id, $recipient_iban, $sender_bank_id, $amount, $currency, $variable_symbol, $specific_symbol, $constant_symbol, $reference, $payment_message, $status, $step, $redirect_url): \OpenAPI\Client\Model\InlineResponse2002
```

Get payments

Endpoint to get payments from Everifin PayGate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // string
$count_per_page = 5; // string
$sort = amount:desc; // string
$id = 09182dc1-a8ea-4b71-9d24-a6142cf5b946; // string
$instruction_id = 1; // string
$recipient_iban = 1; // string
$sender_bank_id = 1; // string
$amount = 1; // string
$currency = CZK; // string
$variable_symbol = 1; // string
$specific_symbol = 1; // string
$constant_symbol = 1; // string
$reference = 1; // string
$payment_message = 1; // string
$status = CREATED; // string
$step = FINISHED; // string
$redirect_url = 1; // string

try {
    $result = $apiInstance->getPayments($page, $count_per_page, $sort, $id, $instruction_id, $recipient_iban, $sender_bank_id, $amount, $currency, $variable_symbol, $specific_symbol, $constant_symbol, $reference, $payment_message, $status, $step, $redirect_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->getPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **string**|  | [optional]
 **count_per_page** | **string**|  | [optional]
 **sort** | **string**|  | [optional]
 **id** | **string**|  | [optional]
 **instruction_id** | **string**|  | [optional]
 **recipient_iban** | **string**|  | [optional]
 **sender_bank_id** | **string**|  | [optional]
 **amount** | **string**|  | [optional]
 **currency** | **string**|  | [optional]
 **variable_symbol** | **string**|  | [optional]
 **specific_symbol** | **string**|  | [optional]
 **constant_symbol** | **string**|  | [optional]
 **reference** | **string**|  | [optional]
 **payment_message** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **step** | **string**|  | [optional]
 **redirect_url** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `withdrawPayment()`

```php
withdrawPayment($id): \OpenAPI\Client\Model\InlineResponse2005
```

Withdraw payment

Endpoint to withdraw a payment from Everifin payment gate, before it has been authorized.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = {{payment_id}}; // string

try {
    $result = $apiInstance->withdrawPayment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->withdrawPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

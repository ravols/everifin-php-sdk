# belenka\Everifin\Client\EmbeddedFlowApi

All URIs are relative to https://pay.stage.everifin.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**initPayment()**](EmbeddedFlowApi.md#initPayment) | **POST** /api/v1/payments | Init Payment
[**processPayment()**](EmbeddedFlowApi.md#processPayment) | **PATCH** /api/v1/payments/{id} | Process Payment


## `initPayment()`

```php
initPayment($x_ef_sender_ip, $x_ef_sender_user_agent, $PaymentEmbedData): \belenka\Everifin\Client\Model\InlineResponse2003
```

Init Payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$token = $response->getAccessToken(); // Response from getClientAccessToken

$configuration = new \belenka\Everifin\Client\Configuration();
$configuration->setHost('https://pay.stage.everifin.com');
$configuration->setAccessToken($token);

$client = new \GuzzleHttp\Client();

$apiInstance = new \belenka\Everifin\Client\Api\EmbeddedFlowApi($client, $configuration);

$x_ef_sender_ip = '10.1.1.1';
$x_ef_sender_user_agent = 'Mozilla/5.0 (Windows; U; Windows NT 5.0) AppleWebKit/536.1.2 (KHTML, like Gecko) Chrome/39.0.812.0 Safari/536.1.2'; 
$PaymentEmbedData = new \belenka\Everifin\Client\Model\PaymentEmbedData();

try {
    $result = $apiInstance->initPayment($x_ef_sender_ip, $x_ef_sender_user_agent, $PaymentEmbedData);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmbeddedFlowApi->initPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_ef_sender_ip** | **string**|  | [optional]
 **x_ef_sender_user_agent** | **string**|  | [optional]
 **PaymentEmbedData** | [**\belenka\Everifin\Client\Model\PaymentEmbedData**](../Model/PaymentEmbedData.md)|  | [optional]

### Return type

[**\belenka\Everifin\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `processPayment()`

```php
processPayment($id, $PaymentFlowData): \belenka\Everifin\Client\Model\InlineResponse2006
```

Process Payment


### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$token = $response->getAccessToken(); // Response from getClientAccessToken

$configuration = new \belenka\Everifin\Client\Configuration();
$configuration->setHost('https://pay.stage.everifin.com');
$configuration->setAccessToken($token);

$client = new \GuzzleHttp\Client();

$apiInstance = new \belenka\Everifin\Client\Api\EmbeddedFlowApi($client, $configuration);

$id = '{{payment_id}}'; 
$PaymentFlowData = new \belenka\Everifin\Client\Model\PaymentFlowData();

try {
    $result = $apiInstance->processPayment($id, $PaymentFlowData);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmbeddedFlowApi->processPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **PaymentFlowData** | [**\belenka\Everifin\Client\Model\PaymentFlowData**](../Model/PaymentFlowData.md)|  | [optional]

### Return type

[**\belenka\Everifin\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

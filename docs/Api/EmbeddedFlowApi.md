# belenka\Everifin\Client\EmbeddedFlowApi

All URIs are relative to https://app.stage.everifin.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**initPayment()**](EmbeddedFlowApi.md#initPayment) | **POST** /api/v1/payments | Init Payment
[**processPayment()**](EmbeddedFlowApi.md#processPayment) | **PATCH** /api/v1/payments/{id} | Process Payment


## `initPayment()`

```php
initPayment($x_ef_sender_ip, $x_ef_sender_user_agent, $inline_object1): \belenka\Everifin\Client\Model\InlineResponse2003
```

Init Payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new belenka\Everifin\Client\Api\EmbeddedFlowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_ef_sender_ip = '10.1.1.1'; // string
$x_ef_sender_user_agent = 'Mozilla/5.0 (Windows; U; Windows NT 5.0) AppleWebKit/536.1.2 (KHTML, like Gecko) Chrome/39.0.812.0 Safari/536.1.2'; // string
$inline_object1 = new \belenka\Everifin\Client\Model\InlineObject1(); // \belenka\Everifin\Client\Model\InlineObject1

try {
    $result = $apiInstance->initPayment($x_ef_sender_ip, $x_ef_sender_user_agent, $inline_object1);
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
 **inline_object1** | [**\belenka\Everifin\Client\Model\InlineObject1**](../Model/InlineObject1.md)|  | [optional]

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
processPayment($id, $inline_object2): \belenka\Everifin\Client\Model\InlineResponse2006
```

Process Payment


### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new belenka\Everifin\Client\Api\EmbeddedFlowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = '{{payment_id}}'; // string
$inline_object2 = new \belenka\Everifin\Client\Model\InlineObject2(); // \belenka\Everifin\Client\Model\InlineObject2

try {
    $result = $apiInstance->processPayment($id, $inline_object2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmbeddedFlowApi->processPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **inline_object2** | [**\belenka\Everifin\Client\Model\InlineObject2**](../Model/InlineObject2.md)|  | [optional]

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

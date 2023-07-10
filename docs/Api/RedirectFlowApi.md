# OpenAPI\Client\RedirectFlowApi

All URIs are relative to https://app.stage.everifin.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**generatePaymentLink()**](RedirectFlowApi.md#generatePaymentLink) | **POST** /api/v1/link | Generate Payment Link


## `generatePaymentLink()`

```php
generatePaymentLink($inline_object3): \OpenAPI\Client\Model\InlineResponse2007
```

Generate Payment Link

Generate Payment Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RedirectFlowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inline_object3 = new \OpenAPI\Client\Model\InlineObject3(); // \OpenAPI\Client\Model\InlineObject3

try {
    $result = $apiInstance->generatePaymentLink($inline_object3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RedirectFlowApi->generatePaymentLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object3** | [**\OpenAPI\Client\Model\InlineObject3**](../Model/InlineObject3.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
# Everifin PHP SDK

## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/be-lenka/everifin-php-sdk.git"
    }
  ],
  "require": {
    "be-lenka/everifin-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new belenka\Everifin\Client\Api\EmbeddedFlowApi();
$x_ef_sender_ip = '10.1.1.1'; // string
$x_ef_sender_user_agent = 'Mozilla/5.0 (Windows; U; Windows NT 5.0) AppleWebKit/536.1.2 (KHTML, like Gecko) Chrome/39.0.812.0 Safari/536.1.2'; // string
$inline_object1 = new \belenka\Everifin\Client\Model\InlineObject1();

try {
    $result = $apiInstance->initPayment($x_ef_sender_ip, $x_ef_sender_user_agent, $inline_object1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmbeddedFlowApi->initPayment: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://app.stage.everifin.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*EmbeddedFlowApi* | [**initPayment**](docs/Api/EmbeddedFlowApi.md#initpayment) | **POST** /api/v1/payments | Init Payment
*EmbeddedFlowApi* | [**processPayment**](docs/Api/EmbeddedFlowApi.md#processpayment) | **PATCH** /api/v1/payments/{id} | Process Payment
*GeneralApi* | [**getClientAccessToken**](docs/Api/GeneralApi.md#getclientaccesstoken) | **POST** /auth/realms/everifin_paygate/protocol/openid-connect/token | Get Client Access Token
*GeneralApi* | [**getClientBanks**](docs/Api/GeneralApi.md#getclientbanks) | **GET** /api/v1/banks | Get Client Banks
*GeneralApi* | [**getPaymentDetail**](docs/Api/GeneralApi.md#getpaymentdetail) | **GET** /api/v1/payments/{id} | Get payment detail
*GeneralApi* | [**getPayments**](docs/Api/GeneralApi.md#getpayments) | **GET** /api/v1/payments | Get payments
*GeneralApi* | [**withdrawPayment**](docs/Api/GeneralApi.md#withdrawpayment) | **DELETE** /api/v1/payments/{id} | Withdraw payment
*RedirectFlowApi* | [**generatePaymentLink**](docs/Api/RedirectFlowApi.md#generatepaymentlink) | **POST** /api/v1/link | Generate Payment Link

## Models

- [InlineObject1](docs/Model/InlineObject1.md)
- [InlineObject2](docs/Model/InlineObject2.md)
- [InlineObject3](docs/Model/InlineObject3.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [InlineResponse2001Data](docs/Model/InlineResponse2001Data.md)
- [InlineResponse2001Meta](docs/Model/InlineResponse2001Meta.md)
- [InlineResponse2002](docs/Model/InlineResponse2002.md)
- [InlineResponse2002Data](docs/Model/InlineResponse2002Data.md)
- [InlineResponse2002Meta](docs/Model/InlineResponse2002Meta.md)
- [InlineResponse2002MetaPagination](docs/Model/InlineResponse2002MetaPagination.md)
- [InlineResponse2003](docs/Model/InlineResponse2003.md)
- [InlineResponse2003Data](docs/Model/InlineResponse2003Data.md)
- [InlineResponse2003DataInputSet](docs/Model/InlineResponse2003DataInputSet.md)
- [InlineResponse2003DataInputSet0](docs/Model/InlineResponse2003DataInputSet0.md)
- [InlineResponse2003DataInputSet1](docs/Model/InlineResponse2003DataInputSet1.md)
- [InlineResponse2004](docs/Model/InlineResponse2004.md)
- [InlineResponse2004Data](docs/Model/InlineResponse2004Data.md)
- [InlineResponse2005](docs/Model/InlineResponse2005.md)
- [InlineResponse2005Data](docs/Model/InlineResponse2005Data.md)
- [InlineResponse2006](docs/Model/InlineResponse2006.md)
- [InlineResponse2006Data](docs/Model/InlineResponse2006Data.md)
- [InlineResponse2007](docs/Model/InlineResponse2007.md)
- [InlineResponse2007Data](docs/Model/InlineResponse2007Data.md)
- [InlineResponse400](docs/Model/InlineResponse400.md)
- [InlineResponse4001](docs/Model/InlineResponse4001.md)
- [InlineResponse4001Errors](docs/Model/InlineResponse4001Errors.md)
- [InlineResponse4002](docs/Model/InlineResponse4002.md)
- [InlineResponse4002Errors](docs/Model/InlineResponse4002Errors.md)
- [InlineResponse4003](docs/Model/InlineResponse4003.md)
- [InlineResponse4003Errors](docs/Model/InlineResponse4003Errors.md)
- [InlineResponse401](docs/Model/InlineResponse401.md)
- [InlineResponse401Errors](docs/Model/InlineResponse401Errors.md)
- [InlineResponse401Meta](docs/Model/InlineResponse401Meta.md)
- [InlineResponse422](docs/Model/InlineResponse422.md)
- [InlineResponse4221](docs/Model/InlineResponse4221.md)
- [InlineResponse4221Errors](docs/Model/InlineResponse4221Errors.md)
- [InlineResponse422Errors](docs/Model/InlineResponse422Errors.md)

## Authorization

All endpoints do not require authorization.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```


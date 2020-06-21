# PurplShip\Rate

All URIs are relative to *http://instance.purplship.api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetch**](Rate.md#fetch) | **POST** /proxy/rates | Fetch Shipment Rates


# **fetch**
> \PurplShip\Model\RateResponse fetch($data)

Fetch Shipment Rates

The Shipping process begins by fetching rates for your shipment. The request returns rates required to create your shipment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \PurplShip\PurplShip('YOUR_API_KEY', 'https://instance.purplship.api/v1');
$data = new \PurplShip\Model\RateRequest();

try {
    $result = $purplship->rate->fetch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Rate->fetch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\PurplShip\Model\RateRequest**](../Model/RateRequest.md)|  |

### Return type

[**\PurplShip\Model\RateResponse**](../Model/RateResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [OAuth2 password](../../README.md#oauth2-password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


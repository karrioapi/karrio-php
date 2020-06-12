# PurplShip\Rates

All URIs are relative to *https://instance.purplship.api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetch**](Rates.md#fetch) | **POST** /proxy/rates | 


# **fetch**
> \PurplShip\Model\RateResponse fetch($data)



The Shipping process begins by fetching rates for your shipment. The request returns rates required to create your shipment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \PurplShip\PurplShip('YOUR_API_KEY', 'https://instance.purplship.api/v1');

# Prepare request data
$data = new \PurplShip\Model\RateRequest();

try {
    $result = $purplship->rates->fetch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Rates->fetch: ', $e->getMessage(), PHP_EOL;
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

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


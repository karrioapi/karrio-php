# Purplship\Rates

All URIs are relative to *http://instance.purplship.api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetch**](Rates.md#fetch) | **POST** /proxy/rates | Fetch Shipment Rates


# **fetch**
> \Purplship\Model\RateResponse fetch($data)

Fetch Shipment Rates

**[proxy]**  The Shipping process begins by fetching rates for your shipment. Use this service to fetch a shipping rates available.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \PurplShip\PurplShip('YOUR_API_KEY', 'https://instance.purplship.api/v1');
$data = new \Purplship\Model\RateRequest(); // \Purplship\Model\RateRequest | 

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
 **data** | [**\Purplship\Model\RateRequest**](../Model/RateRequest.md)|  |

### Return type

[**\Purplship\Model\RateResponse**](../Model/RateResponse.md)

### Authorization

[OAuth2 password](../../README.md#OAuth2 password), [Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


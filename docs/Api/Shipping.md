# Purplship\Shipping

All URIs are relative to *http://instance.purplship.api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**buyLabel**](Shipping.md#buylabel) | **POST** /proxy/shipping | Submit a Shipment


# **buyLabel**
> \Purplship\Model\ShipmentResponse buyLabel($data)

Submit a Shipment

**[proxy]**  Once the shipping rates are retrieved, provide the required info to submit the shipment by specifying your preferred rate.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \PurplShip\PurplShip('YOUR_API_KEY', 'https://instance.purplship.api/v1');
$data = new \Purplship\Model\ShippingRequest(); // \Purplship\Model\ShippingRequest | 

try {
    $result = $purplship->shipping->buyLabel($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Shipping->buyLabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Purplship\Model\ShippingRequest**](../Model/ShippingRequest.md)|  |

### Return type

[**\Purplship\Model\ShipmentResponse**](../Model/ShipmentResponse.md)

### Authorization

[OAuth2 password](../../README.md#OAuth2 password), [Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


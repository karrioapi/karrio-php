# PurplShip\Shipments

All URIs are relative to *https://instance.purplship.api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create**](Shipments.md#create) | **POST** /proxy/shipments | 


# **create**
> \PurplShip\Model\ShipmentResponse create($data)



Once a Shipment is initialized by fetching the rates, the remaining requirements might be specified  to submit the shipment to the carrier of the selected rate of your choice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \PurplShip\PurplShip('YOUR_API_KEY', 'https://instance.purplship.api/v1');

# Prepare request data
$data = new \PurplShip\Model\ShipmentRequest();

try {
    $result = $purplship->shipments->create($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Shipments->create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\PurplShip\Model\ShipmentRequest**](../Model/ShipmentRequest.md)|  |

### Return type

[**\PurplShip\Model\ShipmentResponse**](../Model/ShipmentResponse.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


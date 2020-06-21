# PurplShip\Tracking

All URIs are relative to *http://instance.purplship.api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetch**](Tracking.md#fetch) | **GET** /proxy/tracking/{carrier_name}/{tracking_number} | Track a Shipment


# **fetch**
> \PurplShip\Model\TrackingResponse fetch($carrier_name, $tracking_number, $test)

Track a Shipment

You can track a shipment by specifying the carrier and the shipment tracking number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \PurplShip\PurplShip('YOUR_API_KEY', 'https://instance.purplship.api/v1');
$carrier_name = "carrier_name_example";
$tracking_number = "tracking_number_example";
$test = false; 

try {
    $result = $purplship->tracking->fetch($carrier_name, $tracking_number, $test);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Tracking->fetch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_name** | **string**|  |
 **tracking_number** | **string**|  |
 **test** | **bool**| The test flag indicates whether to use a carrier configured for test. | [optional] [default to false]

### Return type

[**\PurplShip\Model\TrackingResponse**](../Model/TrackingResponse.md)

### Authorization

[Token](../../README.md#Token), [OAuth2 password](../../README.md#oauth2-password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


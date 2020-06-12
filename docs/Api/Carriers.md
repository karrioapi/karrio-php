# PurplShip\Carriers

All URIs are relative to *https://instance.purplship.api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieve**](Carriers.md#retrieve) | **GET** /carriers | 


# **retrieve**
> \PurplShip\Model\CarrierSettings[] retrieve($carrier_name, $carrier_id, $test)



Returns the list of configured carriers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \PurplShip\PurplShip('YOUR_API_KEY', 'https://instance.purplship.api/v1');

try {
    $result = $purplship->carriers->retrieve([
        'carrier_name' => 'carrier_name_example',
        'carrier_id' => 'carrier_id_example',
        'test' => true,
    ]);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling carriers->retrieve: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_name** | **string**| Indicates a carrier (type) | [optional]
 **carrier_id** | **string**| Indicates a specific carrier configuration name. | [optional]
 **test** | **bool**| The test flag indicates whether to use a carrier configured for test. | [optional]

### Return type

[**\PurplShip\Model\CarrierSettings[]**](../Model/CarrierSettings.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


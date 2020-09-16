# Purplship\Carriers

All URIs are relative to *http://instance.purplship.api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**list**](Carriers.md#list) | **GET** /carriers | List all Carriers
[**retrieve**](Carriers.md#retrieve) | **GET** /carriers/{carrier_id_or_pk} | Retrieve a Carrier


# **list**
> \Purplship\Model\CarrierSettings[] list($carrier_name, $test)

List all Carriers

Returns the list of configured carriers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \PurplShip\PurplShip('YOUR_API_KEY', 'https://instance.purplship.api/v1');
$carrier_name = "carrier_name_example"; // string | Indicates a carrier (type)
$test = true; // bool | The test flag filter carrier configured in test mode

try {
    $result = $purplship->carriers->list($carrier_name, $test);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Carriers->list: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_name** | **string**| Indicates a carrier (type) | [optional]
 **test** | **bool**| The test flag filter carrier configured in test mode | [optional]

### Return type

[**\Purplship\Model\CarrierSettings[]**](../Model/CarrierSettings.md)

### Authorization

[OAuth2 password](../../README.md#OAuth2 password), [Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieve**
> \Purplship\Model\CarrierSettings retrieve($carrier_id_or_pk)

Retrieve a Carrier

Retrieve a configured carrier instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \PurplShip\PurplShip('YOUR_API_KEY', 'https://instance.purplship.api/v1');
$carrier_id_or_pk = "carrier_id_or_pk_example"; // string | 

try {
    $result = $purplship->carriers->retrieve($carrier_id_or_pk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Carriers->retrieve: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_id_or_pk** | **string**|  |

### Return type

[**\Purplship\Model\CarrierSettings**](../Model/CarrierSettings.md)

### Authorization

[OAuth2 password](../../README.md#OAuth2 password), [Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


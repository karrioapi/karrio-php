# Purplship\Addresses

All URIs are relative to *http://instance.purplship.api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create**](Addresses.md#create) | **POST** /addresses | Create an Address
[**list**](Addresses.md#list) | **GET** /addresses | List all Addresses
[**retrieve**](Addresses.md#retrieve) | **GET** /addresses/{id} | Retrieve an Address
[**update**](Addresses.md#update) | **PATCH** /addresses/{id} | Update an Address


# **create**
> \Purplship\Model\Address create($data)

Create an Address

Create a new address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \PurplShip\PurplShip('YOUR_API_KEY', 'https://instance.purplship.api/v1');
$data = new \Purplship\Model\AddressData(); // \Purplship\Model\AddressData | 

try {
    $result = $purplship->tracking->create($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Addresses->create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Purplship\Model\AddressData**](../Model/AddressData.md)|  |

### Return type

[**\Purplship\Model\Address**](../Model/Address.md)

### Authorization

[OAuth2 password](../../README.md#OAuth2 password), [Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **list**
> \Purplship\Model\Address[] list()

List all Addresses

Retrieve all addresses.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \PurplShip\PurplShip('YOUR_API_KEY', 'https://instance.purplship.api/v1');

try {
    $result = $purplship->tracking->list();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Addresses->list: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Purplship\Model\Address[]**](../Model/Address.md)

### Authorization

[OAuth2 password](../../README.md#OAuth2 password), [Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieve**
> \Purplship\Model\Address retrieve($id)

Retrieve an Address

Retrieve an address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \PurplShip\PurplShip('YOUR_API_KEY', 'https://instance.purplship.api/v1');
$id = "id_example"; // string | 

try {
    $result = $purplship->tracking->retrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Addresses->retrieve: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Purplship\Model\Address**](../Model/Address.md)

### Authorization

[OAuth2 password](../../README.md#OAuth2 password), [Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update**
> \Purplship\Model\Address update($id, $data)

Update an Address

update an address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \PurplShip\PurplShip('YOUR_API_KEY', 'https://instance.purplship.api/v1');
$id = "id_example"; // string | 
$data = new \Purplship\Model\AddressData(); // \Purplship\Model\AddressData | 

try {
    $result = $purplship->tracking->update($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Addresses->update: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **data** | [**\Purplship\Model\AddressData**](../Model/AddressData.md)|  |

### Return type

[**\Purplship\Model\Address**](../Model/Address.md)

### Authorization

[OAuth2 password](../../README.md#OAuth2 password), [Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


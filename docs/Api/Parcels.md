# Purplship\Parcels

All URIs are relative to *http://instance.purplship.api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create**](Parcels.md#create) | **POST** /parcels | Create a Parcel
[**list**](Parcels.md#list) | **GET** /parcels | List all Parcels
[**retrieve**](Parcels.md#retrieve) | **GET** /parcels/{id} | Retrieve a Parcel
[**update**](Parcels.md#update) | **PATCH** /parcels/{id} | Update a Parcel


# **create**
> \Purplship\Model\Parcel create($data)

Create a Parcel

Create a new parcel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \PurplShip\PurplShip('YOUR_API_KEY', 'https://instance.purplship.api/v1');
$data = new \Purplship\Model\ParcelData(); // \Purplship\Model\ParcelData | 

try {
    $result = $purplship->parcels->create($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Parcels->create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Purplship\Model\ParcelData**](../Model/ParcelData.md)|  |

### Return type

[**\Purplship\Model\Parcel**](../Model/Parcel.md)

### Authorization

[OAuth2 password](../../README.md#OAuth2 password), [Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **list**
> \Purplship\Model\Parcel[] list()

List all Parcels

Retrieve all stored parcels.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \PurplShip\PurplShip('YOUR_API_KEY', 'https://instance.purplship.api/v1');

try {
    $result = $purplship->parcels->list();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Parcels->list: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Purplship\Model\Parcel[]**](../Model/Parcel.md)

### Authorization

[OAuth2 password](../../README.md#OAuth2 password), [Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieve**
> \Purplship\Model\Parcel retrieve($id)

Retrieve a Parcel

Retrieve a parcel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \PurplShip\PurplShip('YOUR_API_KEY', 'https://instance.purplship.api/v1');
$id = "id_example"; // string | 

try {
    $result = $purplship->parcels->retrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Parcels->retrieve: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Purplship\Model\Parcel**](../Model/Parcel.md)

### Authorization

[OAuth2 password](../../README.md#OAuth2 password), [Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update**
> \Purplship\Model\Parcel update($id, $data)

Update a Parcel

modify an existing parcel's details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \PurplShip\PurplShip('YOUR_API_KEY', 'https://instance.purplship.api/v1');
$id = "id_example"; // string | 
$data = new \Purplship\Model\ParcelData(); // \Purplship\Model\ParcelData | 

try {
    $result = $purplship->parcels->update($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Parcels->update: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **data** | [**\Purplship\Model\ParcelData**](../Model/ParcelData.md)|  |

### Return type

[**\Purplship\Model\Parcel**](../Model/Parcel.md)

### Authorization

[OAuth2 password](../../README.md#OAuth2 password), [Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


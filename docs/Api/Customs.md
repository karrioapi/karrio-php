# Purplship\Customs

All URIs are relative to *http://instance.purplship.api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create**](Customs.md#create) | **POST** /customs_info | Create a Customs Info
[**list**](Customs.md#list) | **GET** /customs_info | List all Customs Info
[**retrieve**](Customs.md#retrieve) | **GET** /customs_info/{id} | Retrieve a Customs Info
[**update**](Customs.md#update) | **PATCH** /customs_info/{id} | Update a Customs Info


# **create**
> \Purplship\Model\Customs create($data)

Create a Customs Info

Create a new customs info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \PurplShip\PurplShip('YOUR_API_KEY', 'https://instance.purplship.api/v1');
$data = new \Purplship\Model\CustomsData(); // \Purplship\Model\CustomsData | 

try {
    $result = $purplship->customs->create($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Customs->create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Purplship\Model\CustomsData**](../Model/CustomsData.md)|  |

### Return type

[**\Purplship\Model\Customs**](../Model/Customs.md)

### Authorization

[OAuth2 password](../../README.md#OAuth2 password), [Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **list**
> \Purplship\Model\Customs[] list()

List all Customs Info

Retrieve all stored customs info.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \PurplShip\PurplShip('YOUR_API_KEY', 'https://instance.purplship.api/v1');

try {
    $result = $purplship->customs->list();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Customs->list: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Purplship\Model\Customs[]**](../Model/Customs.md)

### Authorization

[OAuth2 password](../../README.md#OAuth2 password), [Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieve**
> \Purplship\Model\Customs retrieve($id)

Retrieve a Customs Info

Retrieve a customs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \PurplShip\PurplShip('YOUR_API_KEY', 'https://instance.purplship.api/v1');
$id = "id_example"; // string | 

try {
    $result = $purplship->customs->retrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Customs->retrieve: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Purplship\Model\Customs**](../Model/Customs.md)

### Authorization

[OAuth2 password](../../README.md#OAuth2 password), [Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update**
> \Purplship\Model\Customs update($id, $data)

Update a Customs Info

modify an existing customs's details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \PurplShip\PurplShip('YOUR_API_KEY', 'https://instance.purplship.api/v1');
$id = "id_example"; // string | 
$data = new \Purplship\Model\CustomsData(); // \Purplship\Model\CustomsData | 

try {
    $result = $purplship->customs->update($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Customs->update: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **data** | [**\Purplship\Model\CustomsData**](../Model/CustomsData.md)|  |

### Return type

[**\Purplship\Model\Customs**](../Model/Customs.md)

### Authorization

[OAuth2 password](../../README.md#OAuth2 password), [Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


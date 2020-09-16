# Purplship\Shipments

All URIs are relative to *http://instance.purplship.api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**options**](Shipments.md#options) | **POST** /shipments/{id}/options | Add Shipment Options
[**create**](Shipments.md#create) | **POST** /shipments | Create a Shipment
[**rates**](Shipments.md#rates) | **GET** /shipments/{id}/rates | Fetch new Shipment Rates
[**list**](Shipments.md#list) | **GET** /shipments | List all Shipments
[**purchase**](Shipments.md#purchase) | **POST** /shipments/{id}/purchase | Buy a Shipment
[**retrieve**](Shipments.md#retrieve) | **GET** /shipments/{id} | Retrieve a Shipment
[**track**](Shipments.md#track) | **GET** /tracking/{carrier_id}/{tracking_number} | Track a shipment


# **options**
> \Purplship\Model\Shipment options($id)

Add Shipment Options

Add one or many options to your shipment.

**eg:**

- add shipment **insurance**
- specify the preferred transaction **currency**
- setup a **cash collected on delivery** option

```json
{
    "insurane": {
        "amount": 120,
    },
    "currency": "USD"
}
```

And many more, check additional options available in the [reference](../Api/Utils/references).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \PurplShip\PurplShip('YOUR_API_KEY', 'https://instance.purplship.api/v1');
$id = "id_example"; // string | 

try {
    $result = $purplship->shipments->options($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Shipments->options: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Purplship\Model\Shipment**](../Model/Shipment.md)

### Authorization

[OAuth2 password](../../README.md#OAuth2 password), [Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **create**
> \Purplship\Model\Shipment create($data)

Create a Shipment

Create a new shipment instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \PurplShip\PurplShip('YOUR_API_KEY', 'https://instance.purplship.api/v1');
$data = new \Purplship\Model\ShipmentData(); // \Purplship\Model\ShipmentData | 

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
 **data** | [**\Purplship\Model\ShipmentData**](../Model/ShipmentData.md)|  |

### Return type

[**\Purplship\Model\Shipment**](../Model/Shipment.md)

### Authorization

[OAuth2 password](../../README.md#OAuth2 password), [Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rates**
> \Purplship\Model\ShipmentResponse rates($id)

Fetch new Shipment Rates

Refresh the list of the shipment rates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \PurplShip\PurplShip('YOUR_API_KEY', 'https://instance.purplship.api/v1');
$id = "id_example"; // string | 

try {
    $result = $purplship->shipments->rates($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Shipments->rates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Purplship\Model\ShipmentResponse**](../Model/ShipmentResponse.md)

### Authorization

[OAuth2 password](../../README.md#OAuth2 password), [Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **list**
> \Purplship\Model\Shipment[] list()

List all Shipments

Retrieve all shipments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \PurplShip\PurplShip('YOUR_API_KEY', 'https://instance.purplship.api/v1');

try {
    $result = $purplship->shipments->list();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Shipments->list: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Purplship\Model\Shipment[]**](../Model/Shipment.md)

### Authorization

[OAuth2 password](../../README.md#OAuth2 password), [Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchase**
> \Purplship\Model\ShipmentResponse purchase($id, $data)

Buy a Shipment

Select your preferred rates to buy a shipment label.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \PurplShip\PurplShip('YOUR_API_KEY', 'https://instance.purplship.api/v1');
$id = "id_example"; // string | 
$data = new \Purplship\Model\ShipmentPurchaseData(); // \Purplship\Model\ShipmentPurchaseData | 

try {
    $result = $purplship->shipments->purchase($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Shipments->purchase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **data** | [**\Purplship\Model\ShipmentPurchaseData**](../Model/ShipmentPurchaseData.md)|  |

### Return type

[**\Purplship\Model\ShipmentResponse**](../Model/ShipmentResponse.md)

### Authorization

[OAuth2 password](../../README.md#OAuth2 password), [Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieve**
> \Purplship\Model\Shipment retrieve($id)

Retrieve a Shipment

Retrieve a shipment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \PurplShip\PurplShip('YOUR_API_KEY', 'https://instance.purplship.api/v1');
$id = "id_example"; // string | 

try {
    $result = $purplship->shipments->retrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Shipments->retrieve: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Purplship\Model\Shipment**](../Model/Shipment.md)

### Authorization

[OAuth2 password](../../README.md#OAuth2 password), [Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **track**
> \Purplship\Model\Tracking track($carrier_id, $tracking_number)

Track a shipment

Track a shipment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \PurplShip\PurplShip('YOUR_API_KEY', 'https://instance.purplship.api/v1');
$carrier_id = "carrier_id_example"; // string | 
$tracking_number = "tracking_number_example"; // string | 

try {
    $result = $purplship->shipments->track($carrier_id, $tracking_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Shipments->track: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_id** | **string**|  |
 **tracking_number** | **string**|  |

### Return type

[**\Purplship\Model\Tracking**](../Model/Tracking.md)

### Authorization

[OAuth2 password](../../README.md#OAuth2 password), [Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


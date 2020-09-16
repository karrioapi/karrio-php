# Purplship PHP Client

Purplship is a Multi-carrier Shipping API that simplifies the integration of logistic carrier services.
Visit [purplship.com](https://purplship.com) to deploy your private cloud multi-carrier shipping API.

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
composer require purplship/purplship-php
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \Purplship\Purplship('YOUR_API_KEY', 'https://instance.purplship.api/v1');

try {
    $result = $purplship->carriers->list();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling carriers->list: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://instance.purplship.api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*Addresses* | [**create**](docs/Api/Addresses.md#create) | **POST** /addresses | Create an Address
*Addresses* | [**list**](docs/Api/Addresses.md#list) | **GET** /addresses | List all Addresses
*Addresses* | [**retrieve**](docs/Api/Addresses.md#retrieve) | **GET** /addresses/{id} | Retrieve an Address
*Addresses* | [**update**](docs/Api/Addresses.md#update) | **PATCH** /addresses/{id} | Update an Address
*Carriers* | [**list**](docs/Api/Carriers.md#list) | **GET** /carriers | List all Carriers
*Carriers* | [**retrieve**](docs/Api/Carriers.md#retrieve) | **GET** /carriers/{carrier_id_or_pk} | Retrieve a Carrier
*Customs* | [**create**](docs/Api/Customs.md#create) | **POST** /customs_info | Create a Customs Info
*Customs* | [**list**](docs/Api/Customs.md#list) | **GET** /customs_info | List all Customs Info
*Customs* | [**retrieve**](docs/Api/Customs.md#retrieve) | **GET** /customs_info/{id} | Retrieve a Customs Info
*Customs* | [**update**](docs/Api/Customs.md#update) | **PATCH** /customs_info/{id} | Update a Customs Info
*Parcels* | [**create**](docs/Api/Parcels.md#create) | **POST** /parcels | Create a Parcel
*Parcels* | [**list**](docs/Api/Parcels.md#list) | **GET** /parcels | List all Parcels
*Parcels* | [**retrieve**](docs/Api/Parcels.md#retrieve) | **GET** /parcels/{id} | Retrieve a Parcel
*Parcels* | [**update**](docs/Api/Parcels.md#update) | **PATCH** /parcels/{id} | Update a Parcel
*Rates* | [**fetch**](docs/Api/Rates.md#fetch) | **POST** /proxy/rates | Fetch Shipment Rates
*Shipments* | [**options**](docs/Api/Shipments.md#options) | **POST** /shipments/{id}/options | Add Shipment Options
*Shipments* | [**create**](docs/Api/Shipments.md#create) | **POST** /shipments | Create a Shipment
*Shipments* | [**rates**](docs/Api/Shipments.md#rates) | **GET** /shipments/{id}/rates | Fetch new Shipment Rates
*Shipments* | [**list**](docs/Api/Shipments.md#list) | **GET** /shipments | List all Shipments
*Shipments* | [**purchase**](docs/Api/Shipments.md#purchase) | **POST** /shipments/{id}/purchase | Buy a Shipment
*Shipments* | [**retrieve**](docs/Api/Shipments.md#retrieve) | **GET** /shipments/{id} | Retrieve a Shipment
*Shipments* | [**track**](docs/Api/Shipments.md#track) | **GET** /tracking/{carrier_id}/{tracking_number} | Track a shipment
*Shipping* | [**buyLabel**](docs/Api/Shipping.md#buylabel) | **POST** /proxy/shipping | Submit a Shipment
*Tracking* | [**fetch**](docs/Api/Tracking.md#fetch) | **GET** /proxy/tracking/{carrier_name}/{tracking_number} | Track a Shipment
*Utils* | [**references**](docs/Api/Utils.md#references) | **GET** /references | Get all References
*Utils* | [**printLabel**](docs/Api/Utils.md#printlabel) | **POST** /labels | Print a Label


## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [AddressData](docs/Model/AddressData.md)
 - [Card](docs/Model/Card.md)
 - [CarrierSettings](docs/Model/CarrierSettings.md)
 - [Charge](docs/Model/Charge.md)
 - [Commodity](docs/Model/Commodity.md)
 - [Customs](docs/Model/Customs.md)
 - [CustomsData](docs/Model/CustomsData.md)
 - [Doc](docs/Model/Doc.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [Invoice](docs/Model/Invoice.md)
 - [LabelPrintingRequest](docs/Model/LabelPrintingRequest.md)
 - [Message](docs/Model/Message.md)
 - [Parcel](docs/Model/Parcel.md)
 - [ParcelData](docs/Model/ParcelData.md)
 - [Payment](docs/Model/Payment.md)
 - [PaymentData](docs/Model/PaymentData.md)
 - [Rate](docs/Model/Rate.md)
 - [RateRequest](docs/Model/RateRequest.md)
 - [RateResponse](docs/Model/RateResponse.md)
 - [Shipment](docs/Model/Shipment.md)
 - [ShipmentData](docs/Model/ShipmentData.md)
 - [ShipmentPurchaseData](docs/Model/ShipmentPurchaseData.md)
 - [ShipmentResponse](docs/Model/ShipmentResponse.md)
 - [ShippingRequest](docs/Model/ShippingRequest.md)
 - [Tracking](docs/Model/Tracking.md)
 - [TrackingDetails](docs/Model/TrackingDetails.md)
 - [TrackingEvent](docs/Model/TrackingEvent.md)
 - [TrackingResponse](docs/Model/TrackingResponse.md)


## Documentation For Authorization


## OAuth2 password

- **Type**: OAuth
- **Flow**: password
- **Authorization URL**: 
- **Scopes**: 
 - **read**: Read everything.
 - **write**: Write everything,

## Token

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author

Purplship Team | hello@purplship.com | [purplship.com](https://purplship.com)

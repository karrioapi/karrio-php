# PurplShip PHP Client

PurplShip is a Multi-carrier Shipping API that simplifies the integration of logistic carrier services

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
$purplship = new \PurplShip\PurplShip('YOUR_API_KEY', 'https://instance.purplship.api/v1');

try {
    $result = $purplship->carriers->list();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling carriers->retrieve: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://instance.purplship.api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*Carriers* | [**list**](docs/Api/Carriers.md#list) | **GET** /carriers | List all Carriers
*Carriers* | [**retrieve**](docs/Api/Carriers.md#retrieve) | **GET** /carriers/{carrier_id_or_pk} | Retrieve a Carrier
*Rate* | [**fetch**](docs/Api/Rate.md#fetch) | **POST** /proxy/rates | Fetch Shipment Rates
*Shipment* | [**create**](docs/Api/Shipment.md#create) | **POST** /proxy/shipments | Create a Shipment
*Tracking* | [**fetch**](docs/Api/Tracking.md#fetch) | **GET** /proxy/tracking/{carrier_name}/{tracking_number} | Track a Shipment
*Utils* | [**references**](docs/Api/Utils.md#references) | **GET** /references | Get all References
*Utils* | [**printLabel**](docs/Api/Utils.md#printlabel) | **POST** /labels | Print a Label


## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [Card](docs/Model/Card.md)
 - [CarrierSettings](docs/Model/CarrierSettings.md)
 - [Charge](docs/Model/Charge.md)
 - [Commodity](docs/Model/Commodity.md)
 - [Customs](docs/Model/Customs.md)
 - [Doc](docs/Model/Doc.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [Invoice](docs/Model/Invoice.md)
 - [LabelPrintingRequest](docs/Model/LabelPrintingRequest.md)
 - [Message](docs/Model/Message.md)
 - [Options](docs/Model/Options.md)
 - [Parcel](docs/Model/Parcel.md)
 - [Payment](docs/Model/Payment.md)
 - [Rate](docs/Model/Rate.md)
 - [RateRequest](docs/Model/RateRequest.md)
 - [RateResponse](docs/Model/RateResponse.md)
 - [References](docs/Model/References.md)
 - [Shipment](docs/Model/Shipment.md)
 - [ShipmentRequest](docs/Model/ShipmentRequest.md)
 - [ShipmentResponse](docs/Model/ShipmentResponse.md)
 - [TrackingDetails](docs/Model/TrackingDetails.md)
 - [TrackingEvent](docs/Model/TrackingEvent.md)
 - [TrackingResponse](docs/Model/TrackingResponse.md)


## Documentation For Authorization


## Bearer

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header

## OAuth2 password

- **Type**: OAuth
- **Flow**: password
- **Authorization URL**: 
- **Scopes**: 
 - **read**: Read everything.
 - **write**: Write everything,


## Author

PurplShip Team | hello@purplship.com | [purplship.com](https://purplship.com)

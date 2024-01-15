__This repository is not maintained anymore. Chat with us if you want to help maintain a PHP client for Karrio at https://github.com/karrioapi/karrio__ 

# Karrio PHP Client

karrio is a universal Shipping API that simplifies the integration of logistic carrier services.

Visit [karrio.io](https://karrio.io) to deploy your private cloud multi-carrier shipping API.

## Documentation

See the full [PHP API docs](https://docs.karrio.io/reference/).

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```bash
composer require karrio/karrio-php
```

### Development

```bash
composer install
```

### Usage

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$karrio = new \Karrio\Karrio('YOUR_API_KEY', 'https://api.karrio.io');

try {
    $result = $karrio->carriers->list();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling carriers->list: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation For Models

## Models

- [Address](docs/Model/Address.md)
- [AddressData](docs/Model/AddressData.md)
- [AddressList](docs/Model/AddressList.md)
- [AddressValidation](docs/Model/AddressValidation.md)
- [CarrierList](docs/Model/CarrierList.md)
- [CarrierSettings](docs/Model/CarrierSettings.md)
- [Charge](docs/Model/Charge.md)
- [Commodity](docs/Model/Commodity.md)
- [CommodityData](docs/Model/CommodityData.md)
- [Customs](docs/Model/Customs.md)
- [CustomsData](docs/Model/CustomsData.md)
- [CustomsList](docs/Model/CustomsList.md)
- [Documents](docs/Model/Documents.md)
- [Duty](docs/Model/Duty.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [Message](docs/Model/Message.md)
- [Metadata](docs/Model/Metadata.md)
- [Operation](docs/Model/Operation.md)
- [OperationConfirmation](docs/Model/OperationConfirmation.md)
- [OperationResponse](docs/Model/OperationResponse.md)
- [Order](docs/Model/Order.md)
- [OrderData](docs/Model/OrderData.md)
- [OrderList](docs/Model/OrderList.md)
- [OrderUpdateData](docs/Model/OrderUpdateData.md)
- [Parcel](docs/Model/Parcel.md)
- [ParcelData](docs/Model/ParcelData.md)
- [ParcelList](docs/Model/ParcelList.md)
- [Payment](docs/Model/Payment.md)
- [Pickup](docs/Model/Pickup.md)
- [PickupCancelData](docs/Model/PickupCancelData.md)
- [PickupCancelRequest](docs/Model/PickupCancelRequest.md)
- [PickupData](docs/Model/PickupData.md)
- [PickupList](docs/Model/PickupList.md)
- [PickupRequest](docs/Model/PickupRequest.md)
- [PickupResponse](docs/Model/PickupResponse.md)
- [PickupUpdateData](docs/Model/PickupUpdateData.md)
- [PickupUpdateRequest](docs/Model/PickupUpdateRequest.md)
- [Rate](docs/Model/Rate.md)
- [RateRequest](docs/Model/RateRequest.md)
- [RateResponse](docs/Model/RateResponse.md)
- [References](docs/Model/References.md)
- [Shipment](docs/Model/Shipment.md)
- [ShipmentCancelRequest](docs/Model/ShipmentCancelRequest.md)
- [ShipmentData](docs/Model/ShipmentData.md)
- [ShipmentList](docs/Model/ShipmentList.md)
- [ShipmentPurchaseData](docs/Model/ShipmentPurchaseData.md)
- [ShipmentRateData](docs/Model/ShipmentRateData.md)
- [ShipmentUpdateData](docs/Model/ShipmentUpdateData.md)
- [ShippingRequest](docs/Model/ShippingRequest.md)
- [ShippingResponse](docs/Model/ShippingResponse.md)
- [TokenObtainPair](docs/Model/TokenObtainPair.md)
- [TokenPair](docs/Model/TokenPair.md)
- [TokenRefresh](docs/Model/TokenRefresh.md)
- [TokenVerify](docs/Model/TokenVerify.md)
- [TrackerList](docs/Model/TrackerList.md)
- [TrackingEvent](docs/Model/TrackingEvent.md)
- [TrackingResponse](docs/Model/TrackingResponse.md)
- [TrackingStatus](docs/Model/TrackingStatus.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookData](docs/Model/WebhookData.md)
- [WebhookList](docs/Model/WebhookList.md)
- [WebhookTestRequest](docs/Model/WebhookTestRequest.md)

## Author

Team Karrio | hello@karrio.io | [karrio.io](https://karrio.io)

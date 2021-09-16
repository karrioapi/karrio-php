# purplship PHP Client

purplship is a Multi-carrier Shipping API that simplifies the integration of logistic carrier services.

Visit [purplship.com](https://purplship.com) to deploy your private cloud multi-carrier shipping API.

## Documentation

See the full [PHP API docs](https://docs.purplship.com).

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```bash
composer require purplship/purplship-php
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
$purplship = new \Purplship\Purplship('YOUR_API_KEY', 'https://instance.purplship.api');

try {
    $result = $purplship->carriers->list();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling carriers->list: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation For Models

- [AccessToken](docs/Model/AccessToken.md)
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
- [Duty](docs/Model/Duty.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [Message](docs/Model/Message.md)
- [Operation](docs/Model/Operation.md)
- [OperationConfirmation](docs/Model/OperationConfirmation.md)
- [OperationResponse](docs/Model/OperationResponse.md)
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
- [ShippingRequest](docs/Model/ShippingRequest.md)
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

purplship Team | hello@purplship.com | [purplship.com](https://purplship.com)

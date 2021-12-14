# # TrackingStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique identifier | [optional]
**carrier_name** | **string** | The tracking carrier |
**carrier_id** | **string** | The tracking carrier configured identifier |
**tracking_number** | **string** | The shipment tracking number |
**events** | [**\Purplship\Model\TrackingEvent[]**](TrackingEvent.md) | The tracking details events | [optional]
**delivered** | **bool** | Specified whether the related shipment was delivered | [optional]
**test_mode** | **bool** | Specified whether the object was created with a carrier in test mode |
**status** | **string** | The current tracking status | [optional] [default to 'pending']
**estimated_delivery** | **string** | The delivery estimated date | [optional]
**messages** | [**\Purplship\Model\Message[]**](Message.md) | The list of note or warning messages | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

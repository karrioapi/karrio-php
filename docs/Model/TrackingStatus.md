# TrackingStatus

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

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


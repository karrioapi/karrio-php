# PickupData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pickup_date** | **string** | The expected pickup date  Date Format: &#x60;YYYY-MM-DD&#x60; | 
**address** | [**\Purplship\Model\AddressData**](AddressData.md) |  | [optional] 
**ready_time** | **string** | The ready time for pickup.  Time Format: &#x60;HH:MM&#x60; | 
**closing_time** | **string** | The closing or late time of the pickup  Time Format: &#x60;HH:MM&#x60; | 
**instruction** | **string** | The pickup instruction.  eg: Handle with care. | [optional] 
**package_location** | **string** | The package(s) location.  eg: Behind the entrance door. | [optional] 
**options** | **object** | Advanced carrier specific pickup options | [optional] 
**tracking_numbers** | **string[]** | The list of shipments to be picked up | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


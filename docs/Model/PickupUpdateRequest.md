# PickupUpdateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pickup_date** | **string** | The expected pickup date  Date Format: &#x60;YYYY-MM-DD&#x60; | 
**address** | [**\Purplship\Model\Address**](Address.md) |  | 
**parcels** | [**\Purplship\Model\Parcel[]**](Parcel.md) | The shipment parcels to pickup. | 
**confirmation_number** | **string** | pickup identification number | 
**ready_time** | **string** | The ready time for pickup.  Time Format: &#x60;HH:MM&#x60; | 
**closing_time** | **string** | The closing or late time of the pickup  Time Format: &#x60;HH:MM&#x60; | 
**instruction** | **string** | The pickup instruction.  eg: Handle with care. | [optional] 
**package_location** | **string** | The package(s) location.  eg: Behind the entrance door. | [optional] 
**options** | **object** | Advanced carrier specific pickup options | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


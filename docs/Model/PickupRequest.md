# # PickupRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pickup_date** | **string** | The expected pickup date  Date Format: &#x60;YYYY-MM-DD&#x60; |
**address** | [**\Karrio\Model\AddressData**](AddressData.md) |  |
**parcels** | [**\Karrio\Model\ParcelData[]**](ParcelData.md) | The shipment parcels to pickup. |
**ready_time** | **string** | The ready time for pickup.  Time Format: &#x60;HH:MM&#x60; |
**closing_time** | **string** | The closing or late time of the pickup  Time Format: &#x60;HH:MM&#x60; |
**instruction** | **string** | The pickup instruction.  eg: Handle with care. | [optional]
**package_location** | **string** | The package(s) location.  eg: Behind the entrance door. | [optional]
**options** | **object** | Advanced carrier specific pickup options | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

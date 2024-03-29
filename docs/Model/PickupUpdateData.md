# # PickupUpdateData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pickup_date** | **string** | The expected pickup date  Date Format: YYYY-MM-DD | [optional]
**address** | [**\Karrio\Model\AddressData**](AddressData.md) |  | [optional]
**ready_time** | **string** | The ready time for pickup. | [optional]
**closing_time** | **string** | The closing or late time of the pickup | [optional]
**instruction** | **string** | The pickup instruction.  eg: Handle with care. | [optional]
**package_location** | **string** | The package(s) location.  eg: Behind the entrance door. | [optional]
**options** | **object** | Advanced carrier specific pickup options | [optional]
**tracking_numbers** | **string[]** | The list of shipments to be picked up | [optional]
**metadata** | **object** | User metadata for the pickup | [optional]
**confirmation_number** | **string** | pickup identification number |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

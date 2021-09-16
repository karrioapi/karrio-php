# # Pickup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique pickup identifier | [optional]
**carrier_name** | **string** | The pickup carrier |
**carrier_id** | **string** | The pickup carrier configured name |
**confirmation_number** | **string** | The pickup confirmation identifier |
**pickup_date** | **string** | The pickup date | [optional]
**pickup_charge** | [**\Purplship\Model\Charge**](Charge.md) |  | [optional]
**ready_time** | **string** | The pickup expected ready time | [optional]
**closing_time** | **string** | The pickup expected closing or late time | [optional]
**address** | [**\Purplship\Model\Address**](Address.md) |  |
**parcels** | [**\Purplship\Model\Parcel[]**](Parcel.md) | The shipment parcels to pickup. |
**instruction** | **string** | The pickup instruction.  eg: Handle with care. | [optional]
**package_location** | **string** | The package(s) location.  eg: Behind the entrance door. | [optional]
**options** | **object** | Advanced carrier specific pickup options | [optional]
**test_mode** | **bool** | Specified whether it was created with a carrier in test mode |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# RateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipper** | [**\Purplship\Model\Address**](Address.md) |  | 
**recipient** | [**\Purplship\Model\Address**](Address.md) |  | 
**parcels** | [**\Purplship\Model\Parcel[]**](Parcel.md) | The shipment&#x27;s parcels | 
**services** | **string[]** | The requested carrier service for the shipment.Please consult the referencefor specific carriers services.  Note that this is a list because on a Multi-carrier rate request you could specify a service per carrier. | [optional] 
**options** | **object** | The options available for the shipment.  Please consult the referencefor additional specific carriers options. | [optional] 
**reference** | **string** | The shipment reference | [optional] 
**carrier_ids** | **string[]** | The list of configured carriers you wish to get rates from. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


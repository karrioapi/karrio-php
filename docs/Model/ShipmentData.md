# ShipmentData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipper** | [**\Purplship\Purplship\Model\AddressData**](AddressData.md) |  | 
**recipient** | [**\Purplship\Purplship\Model\AddressData**](AddressData.md) |  | 
**parcels** | [**\Purplship\Purplship\Model\ParcelData[]**](ParcelData.md) | The shipment&#x27;s parcels | 
**options** | **object** | The options available for the shipment.&lt;br/&gt; Please consult [the reference](#operation/references) for additional specific carriers options. | [optional] 
**payment** | [**\Purplship\Purplship\Model\PaymentData**](PaymentData.md) |  | [optional] 
**customs** | [**\Purplship\Purplship\Model\CustomsData**](CustomsData.md) |  | [optional] 
**reference** | **string** | The shipment reference | [optional] 
**label_type** | **string** | The shipment label file type. | [optional] [default to 'PDF']
**services** | **string[]** | The requested carrier service for the shipment.  Please consult [the reference](#operation/references) for specific carriers services.&lt;br/&gt; Note that this is a list because on a Multi-carrier rate request you could specify a service per carrier. | [optional] 
**carrier_ids** | **string[]** | The list of configured carriers you wish to get rates from.  *Note that the request will be sent to all carriers in nothing is specified* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

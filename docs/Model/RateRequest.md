# # RateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipper** | [**\Purplship\Model\AddressData**](AddressData.md) |  |
**recipient** | [**\Purplship\Model\AddressData**](AddressData.md) |  |
**parcels** | [**\Purplship\Model\ParcelData[]**](ParcelData.md) | The shipment&#39;s parcels |
**services** | **string[]** | The requested carrier service for the shipment.&lt;br/&gt; Please consult [the reference](#operation/references) for specific carriers services.  Note that this is a list because on a Multi-carrier rate request you could specify a service per carrier. | [optional]
**options** | **object** | The options available for the shipment.  Please consult [the reference](#operation/references) for additional specific carriers options. | [optional]
**reference** | **string** | The shipment reference | [optional]
**carrier_ids** | **string[]** | The list of configured carriers you wish to get rates from. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

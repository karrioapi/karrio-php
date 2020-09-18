# ShipmentData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipper** | [**\Purplship\Model\AddressData**](AddressData.md) |  | 
**recipient** | [**\Purplship\Model\AddressData**](AddressData.md) |  | 
**parcels** | [**\Purplship\Model\ParcelData[]**](ParcelData.md) | The shipment&#39;s parcels | 
**options** | **object** | The options available for the shipment.&lt;br/&gt; Please consult the reference for additional specific carriers options. | [optional] 
**payment** | [**\Purplship\Model\PaymentData**](PaymentData.md) |  | [optional] 
**customs** | [**\Purplship\Model\CustomsData**](CustomsData.md) |  | [optional] 
**doc_images** | [**\Purplship\Model\Doc[]**](Doc.md) | The list of documents to attach for a paperless interantional trade.  eg: Invoices... | [optional] 
**reference** | **string** | The shipment reference | [optional] 
**services** | **string[]** | The requested carrier service for the shipment.  Please consult the reference for specific carriers services.&lt;br/&gt; Note that this is a list because on a Multi-carrier rate request you could specify a service per carrier. | [optional] 
**carrier_ids** | **string[]** | The list of configured carriers you wish to get rates from.  *Note that the request will be sent to all carriers in nothing is specified* | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)



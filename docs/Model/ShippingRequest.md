# ShippingRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipper** | [**\Purplship\Model\AddressData**](AddressData.md) |  | 
**recipient** | [**\Purplship\Model\AddressData**](AddressData.md) |  | 
**parcels** | [**\Purplship\Model\ParcelData[]**](ParcelData.md) | The shipment&#39;s parcels | 
**options** | **object** | The options available for the shipment.&lt;br/&gt; Please consult [the reference](#operation/all_references) for additional specific carriers options. | [optional] 
**payment** | [**\Purplship\Model\Payment**](Payment.md) |  | 
**customs** | [**\Purplship\Model\CustomsData**](CustomsData.md) |  | [optional] 
**doc_images** | [**\Purplship\Model\Doc[]**](Doc.md) | The list of documents to attach for a paperless interantional trade.  eg: Invoices... | [optional] 
**reference** | **string** | The shipment reference | [optional] 
**selected_rate_id** | **string** | The shipment selected rate. | 
**rates** | [**\Purplship\Model\Rate[]**](Rate.md) | The list for shipment rates fetched previously | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)



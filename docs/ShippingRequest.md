# ShippingRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipper** | [**\Purplship\Client\Model\AddressData**](AddressData.md) |  | 
**recipient** | [**\Purplship\Client\Model\AddressData**](AddressData.md) |  | 
**parcels** | [**\Purplship\Client\Model\ParcelData[]**](ParcelData.md) | The shipment&#39;s parcels | 
**options** | **object** | The options available for the shipment.&lt;br/&gt; Please consult the reference for additional specific carriers options. | [optional] 
**payment** | [**\Purplship\Client\Model\Payment**](Payment.md) |  | 
**customs** | [**\Purplship\Client\Model\CustomsData**](CustomsData.md) |  | [optional] 
**doc_images** | [**\Purplship\Client\Model\Doc[]**](Doc.md) | The list of documents to attach for a paperless interantional trade.  eg: Invoices... | [optional] 
**reference** | **string** | The shipment reference | [optional] 
**selected_rate_id** | **string** | The shipment selected rate. | 
**rates** | [**\Purplship\Client\Model\Rate[]**](Rate.md) | The list for shipment rates fetched previously | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)



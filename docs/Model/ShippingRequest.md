# ShippingRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipper** | [**\Purplship\Purplship\Model\AddressData**](AddressData.md) |  | 
**recipient** | [**\Purplship\Purplship\Model\AddressData**](AddressData.md) |  | 
**parcels** | [**\Purplship\Purplship\Model\ParcelData[]**](ParcelData.md) | The shipment&#x27;s parcels | 
**options** | **object** | The options available for the shipment.&lt;br/&gt; Please consult [the reference](#operation/references) for additional specific carriers options. | [optional] 
**payment** | [**\Purplship\Purplship\Model\Payment**](Payment.md) |  | 
**customs** | [**\Purplship\Purplship\Model\CustomsData**](CustomsData.md) |  | [optional] 
**reference** | **string** | The shipment reference | [optional] 
**label_type** | **string** | The shipment label file type. | [optional] [default to 'PDF']
**selected_rate_id** | **string** | The shipment selected rate. | 
**rates** | [**\Purplship\Purplship\Model\Rate[]**](Rate.md) | The list for shipment rates fetched previously | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


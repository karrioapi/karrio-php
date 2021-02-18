# ShippingRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipper** | [**\Purplship\Model\AddressData**](AddressData.md) |  | 
**recipient** | [**\Purplship\Model\AddressData**](AddressData.md) |  | 
**parcels** | [**\Purplship\Model\ParcelData[]**](ParcelData.md) | The shipment&#x27;s parcels | 
**options** | **object** | The options available for the shipment.Please consult the referencefor additional specific carriers options. | [optional] 
**payment** | [**\Purplship\Model\Payment**](Payment.md) |  | 
**customs** | [**\Purplship\Model\CustomsData**](CustomsData.md) |  | [optional] 
**reference** | **string** | The shipment reference | [optional] 
**label_type** | **string** | The shipment label file type. | [optional] [default to 'PDF']
**selected_rate_id** | **string** | The shipment selected rate. | 
**rates** | [**\Purplship\Model\Rate[]**](Rate.md) | The list for shipment rates fetched previously | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


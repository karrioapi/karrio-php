# Shipment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique identifier | [optional] 
**status** | **string** | The current Shipment status | [optional] [default to 'created']
**carrier_name** | **string** | The shipment carrier | [optional] 
**carrier_id** | **string** | The shipment carrier configured identifier | [optional] 
**label** | **string** | The shipment label in base64 string | [optional] 
**tracking_number** | **string** | The shipment tracking number | [optional] 
**selected_rate** | [**\Purplship\Model\Rate**](Rate.md) |  | [optional] 
**selected_rate_id** | **string** | The shipment selected rate. | [optional] 
**rates** | [**\Purplship\Model\Rate[]**](Rate.md) | The list for shipment rates fetched previously | [optional] 
**tracking_url** | **string** | The shipment tracking url | [optional] 
**shipper** | [**\Purplship\Model\Address**](Address.md) |  | 
**recipient** | [**\Purplship\Model\Address**](Address.md) |  | 
**parcels** | [**\Purplship\Model\Parcel[]**](Parcel.md) | The shipment&#39;s parcels | 
**services** | **string[]** | The requested carrier service for the shipment.  Please consult the reference for specific carriers services.&lt;br/&gt; Note that this is a list because on a Multi-carrier rate request you could specify a service per carrier. | [optional] 
**options** | **object** | The options available for the shipment.&lt;br/&gt; Please consult the reference for additional specific carriers options. | [optional] 
**payment** | [**\Purplship\Model\Payment**](Payment.md) |  | [optional] 
**customs** | [**\Purplship\Model\Customs**](Customs.md) |  | [optional] 
**doc_images** | [**\Purplship\Model\Doc[]**](Doc.md) | The list of documents to attach for a paperless interantional trade.  eg: Invoices... | [optional] 
**reference** | **string** | The shipment reference | [optional] 
**carrier_ids** | **string[]** | The list of configured carriers you wish to get rates from.  *Note that the request will be sent to all carriers in nothing is specified* | [optional] 
**meta** | **object** | provider specific metadata | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)



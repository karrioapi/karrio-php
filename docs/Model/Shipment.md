# Shipment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**selected_rate_id** | **string** | The shipment selected rate. | 
**rates** | [**\PurplShip\Model\Rate[]**](Rate.md) | The list for shipment rates fetched previously | 
**shipper** | [**\PurplShip\Model\Address**](Address.md) |  | 
**recipient** | [**\PurplShip\Model\Address**](Address.md) |  | 
**parcel** | [**\PurplShip\Model\Parcel**](Parcel.md) |  | 
**services** | **string[]** | The requested carrier service for the shipment.  Please consult the reference for specific carriers services.&lt;br/&gt; Note that this is a list because on a Multi-carrier rate request you could specify a service per carrier. | [optional] 
**options** | **map[string,string]** | The options available for the shipment.&lt;br/&gt; Please consult the reference for additional specific carriers options. | [optional] 
**payment** | [**\PurplShip\Model\Payment**](Payment.md) |  | 
**customs** | [**\PurplShip\Model\Customs**](Customs.md) |  | [optional] 
**doc_images** | [**\PurplShip\Model\Doc[]**](Doc.md) | The list of documents to attach for a paperless interantional trade.  eg: Invoices... | [optional] 
**reference** | **string** | The shipment reference | [optional] 
**tracking_url** | **string** | The shipment tracking url | [optional] 
**id** | **string** | A unique shipment identifier | [optional] 
**carrier_name** | **string** | The shipment carrier | 
**carrier_id** | **string** | The shipment carrier configured identifier | 
**label** | **string** | The shipment label in base64 string | 
**tracking_number** | **string** | The shipment tracking number | 
**selected_rate** | [**\PurplShip\Model\Rate**](Rate.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)



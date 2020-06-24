# ShipmentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipper** | [**\PurplShip\Model\Address**](Address.md) |  | 
**recipient** | [**\PurplShip\Model\Address**](Address.md) |  | 
**parcel** | [**\PurplShip\Model\Parcel**](Parcel.md) |  | 
**services** | **string[]** | The requested carrier service for the shipment.  Please consult [the reference](../Api/Utils.md#references) for specific carriers services.&lt;br/&gt; Note that this is a list because on a Multi-carrier rate request you could specify a service per carrier. | [optional] 
**options** | [**\PurplShip\Model\Options**](Options.md) |  | [optional] 
**customs** | [**\PurplShip\Model\Customs**](Customs.md) |  | [optional] 
**doc_images** | [**\PurplShip\Model\Doc[]**](Doc.md) | The list of documents to attach for a paperless interantional trade.  eg: Invoices... | [optional] 
**reference** | **string** | The shipment reference | [optional] 
**selected_rate_id** | **string** | The shipment selected rate. | 
**rates** | [**\PurplShip\Model\Rate[]**](Rate.md) | The list for shipment rates fetched previously | 
**payment** | [**\PurplShip\Model\Payment**](Payment.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)



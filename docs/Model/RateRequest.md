# RateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipper** | [**\PurplShip\Model\Address**](Address.md) |  | 
**recipient** | [**\PurplShip\Model\Address**](Address.md) |  | 
**parcel** | [**\PurplShip\Model\Parcel**](Parcel.md) |  | 
**services** | **string[]** | The requested carrier service for the shipment.&lt;br/&gt; Please consult the reference for specific carriers services.  Note that this is a list because on a Multi-carrier rate request you could specify a service per carrier. | [optional] 
**options** | **map[string,string]** | The options available for the shipment.  Please consult the reference for additional specific carriers options. | [optional] 
**reference** | **string** | The shipment reference | [optional] 
**carrier_ids** | **string[]** | The list of configured carriers you wish to get rates from. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)



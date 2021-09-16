# # ShipmentData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipper** | [**\Purplship\Model\AddressData**](AddressData.md) |  |
**recipient** | [**\Purplship\Model\AddressData**](AddressData.md) |  |
**parcels** | [**\Purplship\Model\ParcelData[]**](ParcelData.md) | The shipment&#39;s parcels |
**options** | **object** | The options available for the shipment.&lt;br/&gt; Please consult [the reference](#operation/references) for additional specific carriers options. | [optional]
**payment** | [**\Purplship\Model\Payment**](Payment.md) |  | [optional]
**customs** | [**\Purplship\Model\CustomsData**](CustomsData.md) |  | [optional]
**reference** | **string** | The shipment reference | [optional]
**label_type** | **string** | The shipment label file type. | [optional] [default to LABEL_TYPE_PDF]
**services** | **string[]** | The requested carrier service for the shipment.  Please consult [the reference](#operation/references) for specific carriers services.&lt;br/&gt; Note that this is a list because on a Multi-carrier rate request you could specify a service per carrier. | [optional]
**carrier_ids** | **string[]** | The list of configured carriers you wish to get rates from.  *Note that the request will be sent to all carriers in nothing is specified* | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

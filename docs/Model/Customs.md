# # Customs

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique identifier | [optional]
**aes** | **string** |  | [optional]
**eel_pfc** | **string** |  | [optional]
**content_type** | **string** |  | [optional]
**content_description** | **string** |  | [optional]
**incoterm** | **string** | The customs &#39;term of trade&#39; also known as &#39;incoterm&#39; | [optional]
**commodities** | [**\Purplship\Model\Commodity[]**](Commodity.md) | The parcel content items | [optional]
**duty** | [**\Purplship\Model\Duty**](Duty.md) |  | [optional]
**invoice** | **string** | The invoice reference number | [optional]
**invoice_date** | **string** | The invoice date | [optional]
**commercial_invoice** | **bool** | Indicates if the shipment is commercial | [optional]
**certify** | **bool** | Indicate that signer certified confirmed all | [optional]
**signer** | **string** |  | [optional]
**certificate_number** | **string** |  | [optional]
**options** | **object** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

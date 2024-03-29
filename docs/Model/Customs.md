# # Customs

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique identifier | [optional]
**commodities** | [**\Karrio\Model\Commodity[]**](Commodity.md) | The parcel content items | [optional]
**duty** | [**\Karrio\Model\Duty**](Duty.md) |  | [optional]
**content_type** | **string** |  | [optional]
**content_description** | **string** |  | [optional]
**incoterm** | **string** | The customs &#39;term of trade&#39; also known as &#39;incoterm&#39; | [optional]
**invoice** | **string** | The invoice reference number | [optional]
**invoice_date** | **string** | The invoice date | [optional]
**commercial_invoice** | **bool** | Indicates if the shipment is commercial | [optional]
**certify** | **bool** | Indicate that signer certified confirmed all | [optional]
**signer** | **string** |  | [optional]
**options** | **object** | &lt;details&gt; &lt;summary&gt;Customs identification options.&lt;/summary&gt;  &#x60;&#x60;&#x60; {     \&quot;aes\&quot;: \&quot;5218487281\&quot;,     \&quot;eel_pfc\&quot;: \&quot;5218487281\&quot;,     \&quot;license_number\&quot;: \&quot;5218487281\&quot;,     \&quot;certificate_number\&quot;: \&quot;5218487281\&quot;,     \&quot;nip_number\&quot;: \&quot;5218487281\&quot;,     \&quot;eori_number\&quot;: \&quot;5218487281\&quot;,     \&quot;vat_registration_number\&quot;: \&quot;5218487281\&quot;, } &#x60;&#x60;&#x60;  Please check the docs for carrier specific options. &lt;/details&gt; | [optional]
**object_type** | **string** | Specifies the object type | [optional] [default to 'customs_info']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

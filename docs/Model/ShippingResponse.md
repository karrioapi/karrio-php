# # ShippingResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique identifier | [optional]
**object_type** | **string** | Specifies the object type | [optional] [default to 'shipment']
**tracking_url** | **string** | The shipment tracking url | [optional]
**shipper** | [**\Karrio\Model\Address**](Address.md) |  |
**recipient** | [**\Karrio\Model\Address**](Address.md) |  |
**parcels** | [**\Karrio\Model\Parcel[]**](Parcel.md) | The shipment&#39;s parcels |
**services** | **string[]** | The carriers services requested for the shipment.  Please consult the reference for specific carriers services.&lt;br/&gt; Note that this is a list because on a Multi-carrier rate request you could specify a service per carrier. | [optional]
**options** | **object** | &lt;details&gt; &lt;summary&gt;The options available for the shipment.&lt;/summary&gt;  &#x60;&#x60;&#x60; {     \&quot;currency\&quot;: \&quot;USD\&quot;,     \&quot;insurance\&quot;: 100.00,     \&quot;cash_on_delivery\&quot;: 30.00,     \&quot;shipment_date\&quot;: \&quot;2020-01-01\&quot;,     \&quot;dangerous_good\&quot;: true,     \&quot;declared_value\&quot;: 150.00,     \&quot;email_notification\&quot;: true,     \&quot;email_notification_to\&quot;: \&quot;shipper@mail.com\&quot;,     \&quot;signature_confirmation\&quot;: true, } &#x60;&#x60;&#x60;  Please check the docs for carrier specific options. &lt;/details&gt; | [optional]
**payment** | [**\Karrio\Model\Payment**](Payment.md) |  | [optional]
**customs** | [**\Karrio\Model\Customs**](Customs.md) |  | [optional]
**rates** | [**\Karrio\Model\Rate[]**](Rate.md) | The list for shipment rates fetched previously | [optional]
**reference** | **string** | The shipment reference | [optional]
**label_type** | **string** | The shipment label file type. | [optional]
**carrier_ids** | **string[]** | The list of configured carriers you wish to get rates from.  *Note that the request will be sent to all carriers in nothing is specified* | [optional]
**tracker_id** | **string** | The attached tracker id | [optional]
**created_at** | **string** | The shipment creation datetime  Date Format: &#x60;YYYY-MM-DD HH:MM:SS.mmmmmmz&#x60; |
**metadata** | **object** | User metadata for the shipment | [optional]
**messages** | [**\Karrio\Model\Message[]**](Message.md) | The list of note or warning messages | [optional]
**status** | **string** | The current Shipment status | [optional] [default to 'draft']
**carrier_name** | **string** | The shipment carrier | [optional]
**carrier_id** | **string** | The shipment carrier configured identifier | [optional]
**tracking_number** | **string** | The shipment tracking number | [optional]
**shipment_identifier** | **string** | The shipment carrier system identifier | [optional]
**selected_rate** | [**\Karrio\Model\Rate**](Rate.md) |  | [optional]
**docs** | [**\Karrio\Model\Documents**](Documents.md) |  | [optional]
**meta** | **object** | provider specific metadata | [optional]
**service** | **string** | The selected service | [optional]
**selected_rate_id** | **string** | The shipment selected rate. | [optional]
**test_mode** | **bool** | Specified whether it was created with a carrier in test mode |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

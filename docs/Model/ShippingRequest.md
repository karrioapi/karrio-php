# # ShippingRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipper** | [**\Karrio\Model\AddressData**](AddressData.md) |  |
**recipient** | [**\Karrio\Model\AddressData**](AddressData.md) |  |
**parcels** | [**\Karrio\Model\ParcelData[]**](ParcelData.md) | The shipment&#39;s parcels |
**options** | **object** | &lt;details&gt; &lt;summary&gt;The options available for the shipment.&lt;/summary&gt;  &#x60;&#x60;&#x60; {     \&quot;currency\&quot;: \&quot;USD\&quot;,     \&quot;insurance\&quot;: 100.00,     \&quot;cash_on_delivery\&quot;: 30.00,     \&quot;shipment_date\&quot;: \&quot;2020-01-01\&quot;,     \&quot;dangerous_good\&quot;: true,     \&quot;declared_value\&quot;: 150.00,     \&quot;email_notification\&quot;: true,     \&quot;email_notification_to\&quot;: \&quot;shipper@mail.com\&quot;,     \&quot;signature_confirmation\&quot;: true, } &#x60;&#x60;&#x60;  Please check the docs for carrier specific options. &lt;/details&gt; | [optional]
**payment** | [**\Karrio\Model\Payment**](Payment.md) |  | [optional]
**customs** | [**\Karrio\Model\CustomsData**](CustomsData.md) |  | [optional]
**reference** | **string** | The shipment reference | [optional]
**label_type** | **string** | The shipment label file type. | [optional] [default to 'PDF']
**selected_rate_id** | **string** | The shipment selected rate. |
**rates** | [**\Karrio\Model\Rate[]**](Rate.md) | The list for shipment rates fetched previously |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

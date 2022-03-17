# # OrderData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | The source&#39; order id. |
**source** | **string** | The order&#39;s source.  e.g. API, POS, ERP, Shopify, Woocommerce, etc. | [optional] [default to 'API']
**shipping_to** | [**\Karrio\Model\AddressData**](AddressData.md) |  |
**shipping_from** | [**\Karrio\Model\AddressData**](AddressData.md) |  | [optional]
**line_items** | [**\Karrio\Model\CommodityData[]**](CommodityData.md) | The order line items. |
**options** | **object** | &lt;details&gt; &lt;summary&gt;The options available for the order shipments.&lt;/summary&gt;  &#x60;&#x60;&#x60; {     \&quot;currency\&quot;: \&quot;USD\&quot;, } &#x60;&#x60;&#x60;  Please check the docs for shipment specific options. &lt;/details&gt; | [optional]
**metadata** | **object** | User metadata for the order. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

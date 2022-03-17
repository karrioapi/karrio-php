# # Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique identifier | [optional]
**object_type** | **string** | Specifies the object type | [optional] [default to 'order']
**order_id** | **string** | The source&#39; order id. |
**source** | **string** | The order&#39;s source. | [optional]
**status** | **string** | The order status. | [optional] [default to 'unfulfilled']
**shipping_to** | [**\Karrio\Model\Address**](Address.md) |  |
**shipping_from** | [**\Karrio\Model\Address**](Address.md) |  | [optional]
**line_items** | [**\Karrio\Model\Commodity[]**](Commodity.md) | The order line items. |
**options** | **object** | &lt;details&gt; &lt;summary&gt;The options available for the order shipments.&lt;/summary&gt;  &#x60;&#x60;&#x60; {     \&quot;currency\&quot;: \&quot;USD\&quot;, } &#x60;&#x60;&#x60;  Please check the docs for shipment specific options. &lt;/details&gt; | [optional]
**metadata** | **object** | User metadata for the order. | [optional]
**shipments** | [**\Karrio\Model\Shipment[]**](Shipment.md) | The shipments associated with the order. | [optional]
**test_mode** | **bool** | Specify whether the order is in test mode or not. |
**created_at** | **string** | The shipment creation datetime  Date Format: &#x60;YYYY-MM-DD HH:MM:SS.mmmmmmz&#x60; |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

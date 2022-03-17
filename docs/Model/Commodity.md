# # Commodity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique identifier | [optional]
**weight** | **float** | The commodity&#39;s weight |
**weight_unit** | **string** | The commodity&#39;s weight unit |
**description** | **string** | A description of the commodity | [optional]
**quantity** | **int** | The commodity&#39;s quantity (number or item) | [optional]
**sku** | **string** | The commodity&#39;s sku number | [optional]
**value_amount** | **float** | The monetary value of the commodity | [optional]
**value_currency** | **string** | The currency of the commodity value amount | [optional]
**origin_country** | **string** | The origin or manufacture country | [optional]
**parent_id** | **string** | The id of the related order line item. | [optional]
**metadata** | **object** | &lt;details&gt; &lt;summary&gt;Commodity user references metadata.&lt;/summary&gt;  &#x60;&#x60;&#x60; {     \&quot;part_number\&quot;: \&quot;5218487281\&quot;,     \&quot;reference1\&quot;: \&quot;# ref 1\&quot;,     \&quot;reference2\&quot;: \&quot;# ref 2\&quot;,     \&quot;reference3\&quot;: \&quot;# ref 3\&quot;,     \&quot;reference4\&quot;: \&quot;# ref 4\&quot;,     ... } &#x60;&#x60;&#x60; &lt;/details&gt; | [optional]
**object_type** | **string** | Specifies the object type | [optional] [default to 'commodity']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

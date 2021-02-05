# ParcelData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**weight** | **float** | The parcel&#x27;s weight | 
**width** | **float** | The parcel&#x27;s width | [optional] 
**height** | **float** | The parcel&#x27;s height | [optional] 
**length** | **float** | The parcel&#x27;s length | [optional] 
**packaging_type** | **string** | The parcel&#x27;s packaging type.  **Note that the packaging is optional when using a package preset**  values: &lt;br/&gt;- **envelope**&lt;br/&gt;- **pak**&lt;br/&gt;- **tube**&lt;br/&gt;- **pallet**&lt;br/&gt;- **small_box**&lt;br/&gt;- **medium_box**&lt;br/&gt;- **your_packaging**  For specific carriers packaging type, please consult [the reference](#operation/references). | [optional] 
**package_preset** | **string** | The parcel&#x27;s package preset.  For specific carriers package preset, please consult [the reference](#operation/references). | [optional] 
**description** | **string** | The parcel&#x27;s description | [optional] 
**content** | **string** | The parcel&#x27;s content description | [optional] 
**is_document** | **bool** | Indicates if the parcel is composed of documents only | [optional] [default to false]
**weight_unit** | **string** | The parcel&#x27;s weight unit | 
**dimension_unit** | **string** | The parcel&#x27;s dimension unit | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


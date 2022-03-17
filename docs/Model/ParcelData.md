# # ParcelData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**weight** | **float** | The parcel&#39;s weight |
**width** | **float** | The parcel&#39;s width | [optional]
**height** | **float** | The parcel&#39;s height | [optional]
**length** | **float** | The parcel&#39;s length | [optional]
**packaging_type** | **string** | The parcel&#39;s packaging type.  **Note that the packaging is optional when using a package preset**  values: &lt;br/&gt; &#x60;envelope&#x60; &#x60;pak&#x60; &#x60;tube&#x60; &#x60;pallet&#x60; &#x60;small_box&#x60; &#x60;medium_box&#x60; &#x60;your_packaging&#x60;  For carrier specific packaging types, please consult the reference. | [optional]
**package_preset** | **string** | The parcel&#39;s package preset.  For carrier specific package presets, please consult the reference. | [optional]
**description** | **string** | The parcel&#39;s description | [optional]
**content** | **string** | The parcel&#39;s content description | [optional]
**is_document** | **bool** | Indicates if the parcel is composed of documents only | [optional] [default to false]
**weight_unit** | **string** | The parcel&#39;s weight unit |
**dimension_unit** | **string** | The parcel&#39;s dimension unit | [optional]
**items** | [**\Karrio\Model\CommodityData[]**](CommodityData.md) | The parcel items. | [optional]
**reference_number** | **string** | The parcel reference number. (can be used as tracking number for custom carriers) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

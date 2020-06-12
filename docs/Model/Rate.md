# Rate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique rate identifier | [optional] 
**carrier_name** | **string** | The rate&#39;s carrier | 
**carrier_id** | **string** | The targeted carrier&#39;s name (unique identifier) | 
**currency** | **string** | The rate monetary values currency code | 
**service** | **string** | The carrier&#39;s rate (quote) service | [optional] 
**discount** | **float** | The monetary amount of the discount on the rate | [optional] 
**base_charge** | **float** | The rate&#39;s monetary amount of the base charge.&lt;br/&gt; This is the net amount of the rate before additional charges | [optional] 
**total_charge** | **float** | The rate&#39;s monetary amount of the total charge.&lt;br/&gt; This is the gross amount of the rate after adding the additional charges | [optional] 
**duties_and_taxes** | **float** | The monetary amount of the duties and taxes if applied | [optional] 
**estimated_delivery** | **string** | The estimated delivery date | [optional] 
**extra_charges** | [**\PurplShip\Model\Charge[]**](Charge.md) | list of the rate&#39;s additional charges | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)



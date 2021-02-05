# Rate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique identifier | [optional] 
**carrier_name** | **string** | The rate&#x27;s carrier | 
**carrier_id** | **string** | The targeted carrier&#x27;s name (unique identifier) | 
**currency** | **string** | The rate monetary values currency code | 
**service** | **string** | The carrier&#x27;s rate (quote) service | [optional] 
**discount** | **float** | The monetary amount of the discount on the rate | [optional] 
**base_charge** | **float** | The rate&#x27;s monetary amount of the base charge.&lt;br/&gt; This is the net amount of the rate before additional charges | [optional] 
**total_charge** | **float** | The rate&#x27;s monetary amount of the total charge.&lt;br/&gt; This is the gross amount of the rate after adding the additional charges | [optional] 
**duties_and_taxes** | **float** | The monetary amount of the duties and taxes if applied | [optional] 
**transit_days** | **int** | The estimated delivery transit days | [optional] 
**extra_charges** | [**\Purplship\Purplship\Model\Charge[]**](Charge.md) | list of the rate&#x27;s additional charges | [optional] 
**meta** | **object** | provider specific metadata | [optional] 
**carrier_ref** | **string** | The system carrier configuration id | [optional] 
**test_mode** | **bool** | Specified whether it was created with a carrier in test mode | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


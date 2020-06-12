# Address

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique address identifier | [optional] 
**postal_code** | **string** | The address postal code | [optional] 
**city** | **string** | The address city. &lt;br/&gt; **(required to create as shipment)** | [optional] 
**federal_tax_id** | **string** | The party frederal tax id | [optional] 
**state_tax_id** | **string** | The party state id | [optional] 
**person_name** | **string** | attention to &lt;br/&gt; **(required to create as shipment)** | [optional] 
**company_name** | **string** | The company name if the party is a company | [optional] 
**country_code** | **string** | The address country code | 
**email** | **string** | The party email | [optional] 
**phone_number** | **string** | The party phone number.&lt;br/&gt; Note that the expected format is: **1 514 0000000**  Country Code | Area Code | Phone --- | --- | --- 1 | 514 | 0000000 | [optional] 
**state_code** | **string** | The address state code | [optional] 
**suburb** | **string** | The address suburb if known | [optional] 
**residential** | **bool** | Indicate if the address is residential or commercial (enterprise) | [optional] 
**address_line1** | **string** | The address line with street number &lt;br/&gt; **(required to create as shipment)** | [optional] 
**address_line2** | **string** | The address line with suite number | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)



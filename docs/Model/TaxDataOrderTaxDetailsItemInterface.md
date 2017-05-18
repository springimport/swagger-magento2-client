# TaxDataOrderTaxDetailsItemInterface

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type (shipping, product, weee, gift wrapping, etc) | [optional] 
**itemId** | **int** | Item id if this item is a product | [optional] 
**associatedItemId** | **int** | Associated item id if this item is associated with another item, null otherwise | [optional] 
**appliedTaxes** | [**\SpringImport\Swagger\Magento2\Client\Model\TaxDataOrderTaxDetailsAppliedTaxInterface[]**](TaxDataOrderTaxDetailsAppliedTaxInterface.md) | Applied taxes | [optional] 
**extensionAttributes** | [**\SpringImport\Swagger\Magento2\Client\Model\TaxDataOrderTaxDetailsItemExtensionInterface**](TaxDataOrderTaxDetailsItemExtensionInterface.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



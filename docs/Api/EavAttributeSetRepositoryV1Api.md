# SpringImport\Swagger\Magento2\Client\EavAttributeSetRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eavAttributeSetRepositoryV1DeleteByIdDelete**](EavAttributeSetRepositoryV1Api.md#eavAttributeSetRepositoryV1DeleteByIdDelete) | **DELETE** /V1/eav/attribute-sets/{attributeSetId} | 
[**eavAttributeSetRepositoryV1GetGet**](EavAttributeSetRepositoryV1Api.md#eavAttributeSetRepositoryV1GetGet) | **GET** /V1/eav/attribute-sets/{attributeSetId} | 
[**eavAttributeSetRepositoryV1GetListGet**](EavAttributeSetRepositoryV1Api.md#eavAttributeSetRepositoryV1GetListGet) | **GET** /V1/eav/attribute-sets/list | 
[**eavAttributeSetRepositoryV1SavePut**](EavAttributeSetRepositoryV1Api.md#eavAttributeSetRepositoryV1SavePut) | **PUT** /V1/eav/attribute-sets/{attributeSetId} | 


# **eavAttributeSetRepositoryV1DeleteByIdDelete**
> bool eavAttributeSetRepositoryV1DeleteByIdDelete($attributeSetId)



Remove attribute set by given ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\EavAttributeSetRepositoryV1Api();
$attributeSetId = 56; // int | 

try {
    $result = $api_instance->eavAttributeSetRepositoryV1DeleteByIdDelete($attributeSetId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EavAttributeSetRepositoryV1Api->eavAttributeSetRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeSetId** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eavAttributeSetRepositoryV1GetGet**
> \SpringImport\Swagger\Magento2\Client\Model\EavDataAttributeSetInterface eavAttributeSetRepositoryV1GetGet($attributeSetId)



Retrieve attribute set information based on given ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\EavAttributeSetRepositoryV1Api();
$attributeSetId = 56; // int | 

try {
    $result = $api_instance->eavAttributeSetRepositoryV1GetGet($attributeSetId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EavAttributeSetRepositoryV1Api->eavAttributeSetRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeSetId** | **int**|  |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\EavDataAttributeSetInterface**](../Model/EavDataAttributeSetInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eavAttributeSetRepositoryV1GetListGet**
> \SpringImport\Swagger\Magento2\Client\Model\EavDataAttributeSetSearchResultsInterface eavAttributeSetRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Retrieve list of Attribute Sets This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#AttributeSetRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\EavAttributeSetRepositoryV1Api();
$searchCriteriaFilterGroups0Filters0Field = "searchCriteriaFilterGroups0Filters0Field_example"; // string | Field
$searchCriteriaFilterGroups0Filters0Value = "searchCriteriaFilterGroups0Filters0Value_example"; // string | Value
$searchCriteriaFilterGroups0Filters0ConditionType = "searchCriteriaFilterGroups0Filters0ConditionType_example"; // string | Condition type
$searchCriteriaSortOrders0Field = "searchCriteriaSortOrders0Field_example"; // string | Sorting field.
$searchCriteriaSortOrders0Direction = "searchCriteriaSortOrders0Direction_example"; // string | Sorting direction.
$searchCriteriaPageSize = 56; // int | Page size.
$searchCriteriaCurrentPage = 56; // int | Current page.

try {
    $result = $api_instance->eavAttributeSetRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EavAttributeSetRepositoryV1Api->eavAttributeSetRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **searchCriteriaFilterGroups0Filters0Field** | **string**| Field | [optional]
 **searchCriteriaFilterGroups0Filters0Value** | **string**| Value | [optional]
 **searchCriteriaFilterGroups0Filters0ConditionType** | **string**| Condition type | [optional]
 **searchCriteriaSortOrders0Field** | **string**| Sorting field. | [optional]
 **searchCriteriaSortOrders0Direction** | **string**| Sorting direction. | [optional]
 **searchCriteriaPageSize** | **int**| Page size. | [optional]
 **searchCriteriaCurrentPage** | **int**| Current page. | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\EavDataAttributeSetSearchResultsInterface**](../Model/EavDataAttributeSetSearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eavAttributeSetRepositoryV1SavePut**
> \SpringImport\Swagger\Magento2\Client\Model\EavDataAttributeSetInterface eavAttributeSetRepositoryV1SavePut($attributeSetId, $body)



Save attribute set data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\EavAttributeSetRepositoryV1Api();
$attributeSetId = "attributeSetId_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body(); // \SpringImport\Swagger\Magento2\Client\Model\Body | 

try {
    $result = $api_instance->eavAttributeSetRepositoryV1SavePut($attributeSetId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EavAttributeSetRepositoryV1Api->eavAttributeSetRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeSetId** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\EavDataAttributeSetInterface**](../Model/EavDataAttributeSetInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


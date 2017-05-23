# SpringImport\Swagger\Magento2\Client\CatalogProductAttributeGroupRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductAttributeGroupRepositoryV1DeleteByIdDelete**](CatalogProductAttributeGroupRepositoryV1Api.md#catalogProductAttributeGroupRepositoryV1DeleteByIdDelete) | **DELETE** /V1/products/attribute-sets/groups/{groupId} | 
[**catalogProductAttributeGroupRepositoryV1GetListGet**](CatalogProductAttributeGroupRepositoryV1Api.md#catalogProductAttributeGroupRepositoryV1GetListGet) | **GET** /V1/products/attribute-sets/groups/list | 
[**catalogProductAttributeGroupRepositoryV1SavePost**](CatalogProductAttributeGroupRepositoryV1Api.md#catalogProductAttributeGroupRepositoryV1SavePost) | **POST** /V1/products/attribute-sets/groups | 
[**catalogProductAttributeGroupRepositoryV1SavePut**](CatalogProductAttributeGroupRepositoryV1Api.md#catalogProductAttributeGroupRepositoryV1SavePut) | **PUT** /V1/products/attribute-sets/{attributeSetId}/groups | 


# **catalogProductAttributeGroupRepositoryV1DeleteByIdDelete**
> bool catalogProductAttributeGroupRepositoryV1DeleteByIdDelete($groupId)



Remove attribute group by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductAttributeGroupRepositoryV1Api();
$groupId = 56; // int | 

try {
    $result = $api_instance->catalogProductAttributeGroupRepositoryV1DeleteByIdDelete($groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeGroupRepositoryV1Api->catalogProductAttributeGroupRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductAttributeGroupRepositoryV1GetListGet**
> \SpringImport\Swagger\Magento2\Client\Model\EavDataAttributeGroupSearchResultsInterface catalogProductAttributeGroupRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Retrieve list of attribute groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductAttributeGroupRepositoryV1Api();
$searchCriteriaFilterGroups0Filters0Field = "searchCriteriaFilterGroups0Filters0Field_example"; // string | Field
$searchCriteriaFilterGroups0Filters0Value = "searchCriteriaFilterGroups0Filters0Value_example"; // string | Value
$searchCriteriaFilterGroups0Filters0ConditionType = "searchCriteriaFilterGroups0Filters0ConditionType_example"; // string | Condition type
$searchCriteriaSortOrders0Field = "searchCriteriaSortOrders0Field_example"; // string | Sorting field.
$searchCriteriaSortOrders0Direction = "searchCriteriaSortOrders0Direction_example"; // string | Sorting direction.
$searchCriteriaPageSize = 56; // int | Page size.
$searchCriteriaCurrentPage = 56; // int | Current page.

try {
    $result = $api_instance->catalogProductAttributeGroupRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeGroupRepositoryV1Api->catalogProductAttributeGroupRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\SpringImport\Swagger\Magento2\Client\Model\EavDataAttributeGroupSearchResultsInterface**](../Model/EavDataAttributeGroupSearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductAttributeGroupRepositoryV1SavePost**
> \SpringImport\Swagger\Magento2\Client\Model\EavDataAttributeGroupInterface catalogProductAttributeGroupRepositoryV1SavePost($body)



Save attribute group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductAttributeGroupRepositoryV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body25(); // \SpringImport\Swagger\Magento2\Client\Model\Body25 | 

try {
    $result = $api_instance->catalogProductAttributeGroupRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeGroupRepositoryV1Api->catalogProductAttributeGroupRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body25**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body25.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\EavDataAttributeGroupInterface**](../Model/EavDataAttributeGroupInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductAttributeGroupRepositoryV1SavePut**
> \SpringImport\Swagger\Magento2\Client\Model\EavDataAttributeGroupInterface catalogProductAttributeGroupRepositoryV1SavePut($attributeSetId, $body)



Save attribute group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductAttributeGroupRepositoryV1Api();
$attributeSetId = "attributeSetId_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body26(); // \SpringImport\Swagger\Magento2\Client\Model\Body26 | 

try {
    $result = $api_instance->catalogProductAttributeGroupRepositoryV1SavePut($attributeSetId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeGroupRepositoryV1Api->catalogProductAttributeGroupRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeSetId** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body26**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body26.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\EavDataAttributeGroupInterface**](../Model/EavDataAttributeGroupInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


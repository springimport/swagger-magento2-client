# SpringImport\Swagger\Magento2\Client\CmsPageRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cmsPageRepositoryV1DeleteByIdDelete**](CmsPageRepositoryV1Api.md#cmsPageRepositoryV1DeleteByIdDelete) | **DELETE** /V1/cmsPage/{pageId} | 
[**cmsPageRepositoryV1GetByIdGet**](CmsPageRepositoryV1Api.md#cmsPageRepositoryV1GetByIdGet) | **GET** /V1/cmsPage/{pageId} | 
[**cmsPageRepositoryV1GetListGet**](CmsPageRepositoryV1Api.md#cmsPageRepositoryV1GetListGet) | **GET** /V1/cmsPage/search | 
[**cmsPageRepositoryV1SavePost**](CmsPageRepositoryV1Api.md#cmsPageRepositoryV1SavePost) | **POST** /V1/cmsPage | 
[**cmsPageRepositoryV1SavePut**](CmsPageRepositoryV1Api.md#cmsPageRepositoryV1SavePut) | **PUT** /V1/cmsPage/{id} | 


# **cmsPageRepositoryV1DeleteByIdDelete**
> bool cmsPageRepositoryV1DeleteByIdDelete($pageId)



Delete page by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CmsPageRepositoryV1Api();
$pageId = 56; // int | 

try {
    $result = $api_instance->cmsPageRepositoryV1DeleteByIdDelete($pageId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CmsPageRepositoryV1Api->cmsPageRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageId** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cmsPageRepositoryV1GetByIdGet**
> \SpringImport\Swagger\Magento2\Client\Model\CmsDataPageInterface cmsPageRepositoryV1GetByIdGet($pageId)



Retrieve page.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CmsPageRepositoryV1Api();
$pageId = 56; // int | 

try {
    $result = $api_instance->cmsPageRepositoryV1GetByIdGet($pageId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CmsPageRepositoryV1Api->cmsPageRepositoryV1GetByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageId** | **int**|  |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CmsDataPageInterface**](../Model/CmsDataPageInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cmsPageRepositoryV1GetListGet**
> \SpringImport\Swagger\Magento2\Client\Model\CmsDataPageSearchResultsInterface cmsPageRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Retrieve pages matching the specified criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CmsPageRepositoryV1Api();
$searchCriteriaFilterGroups0Filters0Field = "searchCriteriaFilterGroups0Filters0Field_example"; // string | Field
$searchCriteriaFilterGroups0Filters0Value = "searchCriteriaFilterGroups0Filters0Value_example"; // string | Value
$searchCriteriaFilterGroups0Filters0ConditionType = "searchCriteriaFilterGroups0Filters0ConditionType_example"; // string | Condition type
$searchCriteriaSortOrders0Field = "searchCriteriaSortOrders0Field_example"; // string | Sorting field.
$searchCriteriaSortOrders0Direction = "searchCriteriaSortOrders0Direction_example"; // string | Sorting direction.
$searchCriteriaPageSize = 56; // int | Page size.
$searchCriteriaCurrentPage = 56; // int | Current page.

try {
    $result = $api_instance->cmsPageRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CmsPageRepositoryV1Api->cmsPageRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\SpringImport\Swagger\Magento2\Client\Model\CmsDataPageSearchResultsInterface**](../Model/CmsDataPageSearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cmsPageRepositoryV1SavePost**
> \SpringImport\Swagger\Magento2\Client\Model\CmsDataPageInterface cmsPageRepositoryV1SavePost($body)



Save page.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CmsPageRepositoryV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body14(); // \SpringImport\Swagger\Magento2\Client\Model\Body14 | 

try {
    $result = $api_instance->cmsPageRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CmsPageRepositoryV1Api->cmsPageRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body14**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body14.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CmsDataPageInterface**](../Model/CmsDataPageInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cmsPageRepositoryV1SavePut**
> \SpringImport\Swagger\Magento2\Client\Model\CmsDataPageInterface cmsPageRepositoryV1SavePut($id, $body)



Save page.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CmsPageRepositoryV1Api();
$id = "id_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body15(); // \SpringImport\Swagger\Magento2\Client\Model\Body15 | 

try {
    $result = $api_instance->cmsPageRepositoryV1SavePut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CmsPageRepositoryV1Api->cmsPageRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body15**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body15.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CmsDataPageInterface**](../Model/CmsDataPageInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


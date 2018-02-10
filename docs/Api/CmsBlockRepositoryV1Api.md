# SpringImport\Swagger\Magento2\Client\CmsBlockRepositoryV1Api

All URIs are relative to *http://example.com/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cmsBlockRepositoryV1DeleteByIdDelete**](CmsBlockRepositoryV1Api.md#cmsBlockRepositoryV1DeleteByIdDelete) | **DELETE** /V1/cmsBlock/{blockId} | 
[**cmsBlockRepositoryV1GetByIdGet**](CmsBlockRepositoryV1Api.md#cmsBlockRepositoryV1GetByIdGet) | **GET** /V1/cmsBlock/{blockId} | 
[**cmsBlockRepositoryV1GetListGet**](CmsBlockRepositoryV1Api.md#cmsBlockRepositoryV1GetListGet) | **GET** /V1/cmsBlock/search | 
[**cmsBlockRepositoryV1SavePost**](CmsBlockRepositoryV1Api.md#cmsBlockRepositoryV1SavePost) | **POST** /V1/cmsBlock | 
[**cmsBlockRepositoryV1SavePut**](CmsBlockRepositoryV1Api.md#cmsBlockRepositoryV1SavePut) | **PUT** /V1/cmsBlock/{id} | 


# **cmsBlockRepositoryV1DeleteByIdDelete**
> bool cmsBlockRepositoryV1DeleteByIdDelete($blockId)



Delete block by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CmsBlockRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$blockId = 56; // int | 

try {
    $result = $apiInstance->cmsBlockRepositoryV1DeleteByIdDelete($blockId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CmsBlockRepositoryV1Api->cmsBlockRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockId** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cmsBlockRepositoryV1GetByIdGet**
> \SpringImport\Swagger\Magento2\Client\Model\CmsDataBlockInterface cmsBlockRepositoryV1GetByIdGet($blockId)



Retrieve block.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CmsBlockRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$blockId = 56; // int | 

try {
    $result = $apiInstance->cmsBlockRepositoryV1GetByIdGet($blockId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CmsBlockRepositoryV1Api->cmsBlockRepositoryV1GetByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockId** | **int**|  |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CmsDataBlockInterface**](../Model/CmsDataBlockInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cmsBlockRepositoryV1GetListGet**
> \SpringImport\Swagger\Magento2\Client\Model\CmsDataBlockSearchResultsInterface cmsBlockRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Retrieve blocks matching the specified criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CmsBlockRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$searchCriteriaFilterGroupsFiltersField = "searchCriteriaFilterGroupsFiltersField_example"; // string | Field
$searchCriteriaFilterGroupsFiltersValue = "searchCriteriaFilterGroupsFiltersValue_example"; // string | Value
$searchCriteriaFilterGroupsFiltersConditionType = "searchCriteriaFilterGroupsFiltersConditionType_example"; // string | Condition type
$searchCriteriaSortOrdersField = "searchCriteriaSortOrdersField_example"; // string | Sorting field.
$searchCriteriaSortOrdersDirection = "searchCriteriaSortOrdersDirection_example"; // string | Sorting direction.
$searchCriteriaPageSize = 56; // int | Page size.
$searchCriteriaCurrentPage = 56; // int | Current page.

try {
    $result = $apiInstance->cmsBlockRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CmsBlockRepositoryV1Api->cmsBlockRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **searchCriteriaFilterGroupsFiltersField** | **string**| Field | [optional]
 **searchCriteriaFilterGroupsFiltersValue** | **string**| Value | [optional]
 **searchCriteriaFilterGroupsFiltersConditionType** | **string**| Condition type | [optional]
 **searchCriteriaSortOrdersField** | **string**| Sorting field. | [optional]
 **searchCriteriaSortOrdersDirection** | **string**| Sorting direction. | [optional]
 **searchCriteriaPageSize** | **int**| Page size. | [optional]
 **searchCriteriaCurrentPage** | **int**| Current page. | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CmsDataBlockSearchResultsInterface**](../Model/CmsDataBlockSearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cmsBlockRepositoryV1SavePost**
> \SpringImport\Swagger\Magento2\Client\Model\CmsDataBlockInterface cmsBlockRepositoryV1SavePost($body)



Save block.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CmsBlockRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body17(); // \SpringImport\Swagger\Magento2\Client\Model\Body17 | 

try {
    $result = $apiInstance->cmsBlockRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CmsBlockRepositoryV1Api->cmsBlockRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body17**](../Model/Body17.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CmsDataBlockInterface**](../Model/CmsDataBlockInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cmsBlockRepositoryV1SavePut**
> \SpringImport\Swagger\Magento2\Client\Model\CmsDataBlockInterface cmsBlockRepositoryV1SavePut($id, $body)



Save block.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CmsBlockRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body18(); // \SpringImport\Swagger\Magento2\Client\Model\Body18 | 

try {
    $result = $apiInstance->cmsBlockRepositoryV1SavePut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CmsBlockRepositoryV1Api->cmsBlockRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body18**](../Model/Body18.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CmsDataBlockInterface**](../Model/CmsDataBlockInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


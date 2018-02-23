# SpringImport\Swagger\Magento2\Client\GiftWrappingWrappingRepositoryV1Api

All URIs are relative to *http://example.com/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**giftWrappingWrappingRepositoryV1DeleteByIdDelete**](GiftWrappingWrappingRepositoryV1Api.md#giftWrappingWrappingRepositoryV1DeleteByIdDelete) | **DELETE** /V1/gift-wrappings/{id} | 
[**giftWrappingWrappingRepositoryV1GetGet**](GiftWrappingWrappingRepositoryV1Api.md#giftWrappingWrappingRepositoryV1GetGet) | **GET** /V1/gift-wrappings/{id} | 
[**giftWrappingWrappingRepositoryV1GetListGet**](GiftWrappingWrappingRepositoryV1Api.md#giftWrappingWrappingRepositoryV1GetListGet) | **GET** /V1/gift-wrappings | 
[**giftWrappingWrappingRepositoryV1SavePost**](GiftWrappingWrappingRepositoryV1Api.md#giftWrappingWrappingRepositoryV1SavePost) | **POST** /V1/gift-wrappings | 
[**giftWrappingWrappingRepositoryV1SavePut**](GiftWrappingWrappingRepositoryV1Api.md#giftWrappingWrappingRepositoryV1SavePut) | **PUT** /V1/gift-wrappings/{wrappingId} | 


# **giftWrappingWrappingRepositoryV1DeleteByIdDelete**
> bool giftWrappingWrappingRepositoryV1DeleteByIdDelete($id)



Delete gift wrapping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\GiftWrappingWrappingRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->giftWrappingWrappingRepositoryV1DeleteByIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftWrappingWrappingRepositoryV1Api->giftWrappingWrappingRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftWrappingWrappingRepositoryV1GetGet**
> \SpringImport\Swagger\Magento2\Client\Model\GiftWrappingDataWrappingInterface giftWrappingWrappingRepositoryV1GetGet($id, $storeId)



Return data object for specified wrapping ID and store.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\GiftWrappingWrappingRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 
$storeId = 56; // int | 

try {
    $result = $apiInstance->giftWrappingWrappingRepositoryV1GetGet($id, $storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftWrappingWrappingRepositoryV1Api->giftWrappingWrappingRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **storeId** | **int**|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\GiftWrappingDataWrappingInterface**](../Model/GiftWrappingDataWrappingInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftWrappingWrappingRepositoryV1GetListGet**
> \SpringImport\Swagger\Magento2\Client\Model\GiftWrappingDataWrappingSearchResultsInterface giftWrappingWrappingRepositoryV1GetListGet($searchCriteria)



Return list of gift wrapping data objects based on search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\GiftWrappingWrappingRepositoryV1Api(
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
    $result = $apiInstance->giftWrappingWrappingRepositoryV1GetListGet($searchCriteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftWrappingWrappingRepositoryV1Api->giftWrappingWrappingRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\SpringImport\Swagger\Magento2\Client\Model\GiftWrappingDataWrappingSearchResultsInterface**](../Model/GiftWrappingDataWrappingSearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftWrappingWrappingRepositoryV1SavePost**
> \SpringImport\Swagger\Magento2\Client\Model\GiftWrappingDataWrappingInterface giftWrappingWrappingRepositoryV1SavePost($body)



Create/Update new gift wrapping with data object values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\GiftWrappingWrappingRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body174(); // \SpringImport\Swagger\Magento2\Client\Model\Body174 | 

try {
    $result = $apiInstance->giftWrappingWrappingRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftWrappingWrappingRepositoryV1Api->giftWrappingWrappingRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body174**](../Model/Body174.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\GiftWrappingDataWrappingInterface**](../Model/GiftWrappingDataWrappingInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftWrappingWrappingRepositoryV1SavePut**
> \SpringImport\Swagger\Magento2\Client\Model\GiftWrappingDataWrappingInterface giftWrappingWrappingRepositoryV1SavePut($wrappingId, $body)



Create/Update new gift wrapping with data object values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\GiftWrappingWrappingRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wrappingId = "wrappingId_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body175(); // \SpringImport\Swagger\Magento2\Client\Model\Body175 | 

try {
    $result = $apiInstance->giftWrappingWrappingRepositoryV1SavePut($wrappingId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftWrappingWrappingRepositoryV1Api->giftWrappingWrappingRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wrappingId** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body175**](../Model/Body175.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\GiftWrappingDataWrappingInterface**](../Model/GiftWrappingDataWrappingInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


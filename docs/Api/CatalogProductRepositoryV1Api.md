# SpringImport\Swagger\Magento2\Client\CatalogProductRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductRepositoryV1DeleteByIdDelete**](CatalogProductRepositoryV1Api.md#catalogProductRepositoryV1DeleteByIdDelete) | **DELETE** /V1/products/{sku} | 
[**catalogProductRepositoryV1GetGet**](CatalogProductRepositoryV1Api.md#catalogProductRepositoryV1GetGet) | **GET** /V1/products/{sku} | 
[**catalogProductRepositoryV1GetListGet**](CatalogProductRepositoryV1Api.md#catalogProductRepositoryV1GetListGet) | **GET** /V1/products | 
[**catalogProductRepositoryV1SavePost**](CatalogProductRepositoryV1Api.md#catalogProductRepositoryV1SavePost) | **POST** /V1/products | 
[**catalogProductRepositoryV1SavePut**](CatalogProductRepositoryV1Api.md#catalogProductRepositoryV1SavePut) | **PUT** /V1/products/{sku} | 


# **catalogProductRepositoryV1DeleteByIdDelete**
> bool catalogProductRepositoryV1DeleteByIdDelete($sku)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductRepositoryV1Api();
$sku = "sku_example"; // string | 

try {
    $result = $api_instance->catalogProductRepositoryV1DeleteByIdDelete($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductRepositoryV1Api->catalogProductRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductRepositoryV1GetGet**
> \SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductInterface catalogProductRepositoryV1GetGet($sku, $editMode, $storeId, $forceReload)



Get info about product by product SKU

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductRepositoryV1Api();
$sku = "sku_example"; // string | 
$editMode = true; // bool | 
$storeId = 56; // int | 
$forceReload = true; // bool | 

try {
    $result = $api_instance->catalogProductRepositoryV1GetGet($sku, $editMode, $storeId, $forceReload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductRepositoryV1Api->catalogProductRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **editMode** | **bool**|  | [optional]
 **storeId** | **int**|  | [optional]
 **forceReload** | **bool**|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductInterface**](../Model/CatalogDataProductInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductRepositoryV1GetListGet**
> \SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductSearchResultsInterface catalogProductRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Get product list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductRepositoryV1Api();
$searchCriteriaFilterGroups0Filters0Field = "searchCriteriaFilterGroups0Filters0Field_example"; // string | Field
$searchCriteriaFilterGroups0Filters0Value = "searchCriteriaFilterGroups0Filters0Value_example"; // string | Value
$searchCriteriaFilterGroups0Filters0ConditionType = "searchCriteriaFilterGroups0Filters0ConditionType_example"; // string | Condition type
$searchCriteriaSortOrders0Field = "searchCriteriaSortOrders0Field_example"; // string | Sorting field.
$searchCriteriaSortOrders0Direction = "searchCriteriaSortOrders0Direction_example"; // string | Sorting direction.
$searchCriteriaPageSize = 56; // int | Page size.
$searchCriteriaCurrentPage = 56; // int | Current page.

try {
    $result = $api_instance->catalogProductRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductRepositoryV1Api->catalogProductRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductSearchResultsInterface**](../Model/CatalogDataProductSearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductRepositoryV1SavePost**
> \SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductInterface catalogProductRepositoryV1SavePost($body)



Create product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductRepositoryV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body18(); // \SpringImport\Swagger\Magento2\Client\Model\Body18 | 

try {
    $result = $api_instance->catalogProductRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductRepositoryV1Api->catalogProductRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body18**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body18.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductInterface**](../Model/CatalogDataProductInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductRepositoryV1SavePut**
> \SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductInterface catalogProductRepositoryV1SavePut($sku, $body)



Create product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductRepositoryV1Api();
$sku = "sku_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body19(); // \SpringImport\Swagger\Magento2\Client\Model\Body19 | 

try {
    $result = $api_instance->catalogProductRepositoryV1SavePut($sku, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductRepositoryV1Api->catalogProductRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body19**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body19.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductInterface**](../Model/CatalogDataProductInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


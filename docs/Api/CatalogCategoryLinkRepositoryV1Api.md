# SpringImport\Swagger\Magento2\Client\CatalogCategoryLinkRepositoryV1Api

All URIs are relative to *http://b2b222.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogCategoryLinkRepositoryV1DeleteByIdsDelete**](CatalogCategoryLinkRepositoryV1Api.md#catalogCategoryLinkRepositoryV1DeleteByIdsDelete) | **DELETE** /V1/categories/{categoryId}/products/{sku} | 
[**catalogCategoryLinkRepositoryV1SavePost**](CatalogCategoryLinkRepositoryV1Api.md#catalogCategoryLinkRepositoryV1SavePost) | **POST** /V1/categories/{categoryId}/products | 
[**catalogCategoryLinkRepositoryV1SavePut**](CatalogCategoryLinkRepositoryV1Api.md#catalogCategoryLinkRepositoryV1SavePut) | **PUT** /V1/categories/{categoryId}/products | 


# **catalogCategoryLinkRepositoryV1DeleteByIdsDelete**
> bool catalogCategoryLinkRepositoryV1DeleteByIdsDelete($categoryId, $sku)



Remove the product assignment from the category by category id and sku

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CatalogCategoryLinkRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$categoryId = "categoryId_example"; // string | 
$sku = "sku_example"; // string | 

try {
    $result = $apiInstance->catalogCategoryLinkRepositoryV1DeleteByIdsDelete($categoryId, $sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogCategoryLinkRepositoryV1Api->catalogCategoryLinkRepositoryV1DeleteByIdsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryId** | **string**|  |
 **sku** | **string**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogCategoryLinkRepositoryV1SavePost**
> bool catalogCategoryLinkRepositoryV1SavePost($categoryId, $body)



Assign a product to the required category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CatalogCategoryLinkRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$categoryId = "categoryId_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body51(); // \SpringImport\Swagger\Magento2\Client\Model\Body51 | 

try {
    $result = $apiInstance->catalogCategoryLinkRepositoryV1SavePost($categoryId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogCategoryLinkRepositoryV1Api->catalogCategoryLinkRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryId** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body51**](../Model/Body51.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogCategoryLinkRepositoryV1SavePut**
> bool catalogCategoryLinkRepositoryV1SavePut($categoryId, $body)



Assign a product to the required category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CatalogCategoryLinkRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$categoryId = "categoryId_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body50(); // \SpringImport\Swagger\Magento2\Client\Model\Body50 | 

try {
    $result = $apiInstance->catalogCategoryLinkRepositoryV1SavePut($categoryId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogCategoryLinkRepositoryV1Api->catalogCategoryLinkRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryId** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body50**](../Model/Body50.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


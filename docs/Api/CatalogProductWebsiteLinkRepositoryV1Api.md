# SpringImport\Swagger\Magento2\Client\CatalogProductWebsiteLinkRepositoryV1Api

All URIs are relative to *http://springimport.localhost/rest/all*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductWebsiteLinkRepositoryV1DeleteByIdDelete**](CatalogProductWebsiteLinkRepositoryV1Api.md#catalogProductWebsiteLinkRepositoryV1DeleteByIdDelete) | **DELETE** /V1/products/{sku}/websites/{websiteId} | 
[**catalogProductWebsiteLinkRepositoryV1SavePost**](CatalogProductWebsiteLinkRepositoryV1Api.md#catalogProductWebsiteLinkRepositoryV1SavePost) | **POST** /V1/products/{sku}/websites | 
[**catalogProductWebsiteLinkRepositoryV1SavePut**](CatalogProductWebsiteLinkRepositoryV1Api.md#catalogProductWebsiteLinkRepositoryV1SavePut) | **PUT** /V1/products/{sku}/websites | 


# **catalogProductWebsiteLinkRepositoryV1DeleteByIdDelete**
> bool catalogProductWebsiteLinkRepositoryV1DeleteByIdDelete($sku, $websiteId)



Remove the website assignment from the product by product sku

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductWebsiteLinkRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | 
$websiteId = 56; // int | 

try {
    $result = $apiInstance->catalogProductWebsiteLinkRepositoryV1DeleteByIdDelete($sku, $websiteId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductWebsiteLinkRepositoryV1Api->catalogProductWebsiteLinkRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **websiteId** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductWebsiteLinkRepositoryV1SavePost**
> bool catalogProductWebsiteLinkRepositoryV1SavePost($sku, $catalogProductWebsiteLinkRepositoryV1SavePostBody)



Assign a product to the website

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductWebsiteLinkRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | 
$catalogProductWebsiteLinkRepositoryV1SavePostBody = new \SpringImport\Swagger\Magento2\Client\Model\CatalogProductWebsiteLinkRepositoryV1SavePostBody(); // \SpringImport\Swagger\Magento2\Client\Model\CatalogProductWebsiteLinkRepositoryV1SavePostBody | 

try {
    $result = $apiInstance->catalogProductWebsiteLinkRepositoryV1SavePost($sku, $catalogProductWebsiteLinkRepositoryV1SavePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductWebsiteLinkRepositoryV1Api->catalogProductWebsiteLinkRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **catalogProductWebsiteLinkRepositoryV1SavePostBody** | [**\SpringImport\Swagger\Magento2\Client\Model\CatalogProductWebsiteLinkRepositoryV1SavePostBody**](../Model/CatalogProductWebsiteLinkRepositoryV1SavePostBody.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductWebsiteLinkRepositoryV1SavePut**
> bool catalogProductWebsiteLinkRepositoryV1SavePut($sku, $catalogProductWebsiteLinkRepositoryV1SavePutBody)



Assign a product to the website

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductWebsiteLinkRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | 
$catalogProductWebsiteLinkRepositoryV1SavePutBody = new \SpringImport\Swagger\Magento2\Client\Model\CatalogProductWebsiteLinkRepositoryV1SavePutBody(); // \SpringImport\Swagger\Magento2\Client\Model\CatalogProductWebsiteLinkRepositoryV1SavePutBody | 

try {
    $result = $apiInstance->catalogProductWebsiteLinkRepositoryV1SavePut($sku, $catalogProductWebsiteLinkRepositoryV1SavePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductWebsiteLinkRepositoryV1Api->catalogProductWebsiteLinkRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **catalogProductWebsiteLinkRepositoryV1SavePutBody** | [**\SpringImport\Swagger\Magento2\Client\Model\CatalogProductWebsiteLinkRepositoryV1SavePutBody**](../Model/CatalogProductWebsiteLinkRepositoryV1SavePutBody.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


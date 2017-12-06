# SpringImport\Swagger\Magento2\Client\CatalogProductWebsiteLinkRepositoryV1Api

All URIs are relative to *http://hb.vg/rest/default*

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

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductWebsiteLinkRepositoryV1Api();
$sku = "sku_example"; // string | 
$websiteId = 56; // int | 

try {
    $result = $api_instance->catalogProductWebsiteLinkRepositoryV1DeleteByIdDelete($sku, $websiteId);
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
> bool catalogProductWebsiteLinkRepositoryV1SavePost($sku, $body)



Assign a product to the website

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductWebsiteLinkRepositoryV1Api();
$sku = "sku_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body52(); // \SpringImport\Swagger\Magento2\Client\Model\Body52 | 

try {
    $result = $api_instance->catalogProductWebsiteLinkRepositoryV1SavePost($sku, $body);
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
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body52**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body52.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductWebsiteLinkRepositoryV1SavePut**
> bool catalogProductWebsiteLinkRepositoryV1SavePut($sku, $body)



Assign a product to the website

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductWebsiteLinkRepositoryV1Api();
$sku = "sku_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body51(); // \SpringImport\Swagger\Magento2\Client\Model\Body51 | 

try {
    $result = $api_instance->catalogProductWebsiteLinkRepositoryV1SavePut($sku, $body);
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
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body51**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body51.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


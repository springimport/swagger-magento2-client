# SpringImport\Swagger\Magento2\Client\SpringImportApiUpdateSkuProductSkuV1Api

All URIs are relative to *http://springimport.localhost/rest/all*

Method | HTTP request | Description
------------- | ------------- | -------------
[**springImportApiUpdateSkuProductSkuV1UpdateBySkuPut**](SpringImportApiUpdateSkuProductSkuV1Api.md#springImportApiUpdateSkuProductSkuV1UpdateBySkuPut) | **PUT** /V1/products/updateSku/{oldSku}/{newSku} | 


# **springImportApiUpdateSkuProductSkuV1UpdateBySkuPut**
> \SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductInterface springImportApiUpdateSkuProductSkuV1UpdateBySkuPut($oldSku, $newSku)



Update product sku

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\SpringImportApiUpdateSkuProductSkuV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$oldSku = "oldSku_example"; // string | 
$newSku = "newSku_example"; // string | 

try {
    $result = $apiInstance->springImportApiUpdateSkuProductSkuV1UpdateBySkuPut($oldSku, $newSku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpringImportApiUpdateSkuProductSkuV1Api->springImportApiUpdateSkuProductSkuV1UpdateBySkuPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oldSku** | **string**|  |
 **newSku** | **string**|  |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductInterface**](../Model/CatalogDataProductInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


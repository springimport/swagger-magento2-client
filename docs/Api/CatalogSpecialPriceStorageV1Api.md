# SpringImport\Swagger\Magento2\Client\CatalogSpecialPriceStorageV1Api

All URIs are relative to *http://hb.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogSpecialPriceStorageV1DeletePost**](CatalogSpecialPriceStorageV1Api.md#catalogSpecialPriceStorageV1DeletePost) | **POST** /V1/products/special-price-delete | 
[**catalogSpecialPriceStorageV1GetPost**](CatalogSpecialPriceStorageV1Api.md#catalogSpecialPriceStorageV1GetPost) | **POST** /V1/products/special-price-information | 
[**catalogSpecialPriceStorageV1UpdatePost**](CatalogSpecialPriceStorageV1Api.md#catalogSpecialPriceStorageV1UpdatePost) | **POST** /V1/products/special-price | 


# **catalogSpecialPriceStorageV1DeletePost**
> \SpringImport\Swagger\Magento2\Client\Model\CatalogDataPriceUpdateResultInterface[] catalogSpecialPriceStorageV1DeletePost($body)



Delete product's special price. If any items will have invalid price, store id, sku or dates, they will be marked as failed and excluded from delete list and \\Magento\\Catalog\\Api\\Data\\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the delete exception will be thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CatalogSpecialPriceStorageV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body41(); // \SpringImport\Swagger\Magento2\Client\Model\Body41 | 

try {
    $result = $api_instance->catalogSpecialPriceStorageV1DeletePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogSpecialPriceStorageV1Api->catalogSpecialPriceStorageV1DeletePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body41**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body41.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CatalogDataPriceUpdateResultInterface[]**](../Model/CatalogDataPriceUpdateResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogSpecialPriceStorageV1GetPost**
> \SpringImport\Swagger\Magento2\Client\Model\CatalogDataSpecialPriceInterface[] catalogSpecialPriceStorageV1GetPost($body)



Return product's special price. In case of at least one of skus is not found exception will be thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CatalogSpecialPriceStorageV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body39(); // \SpringImport\Swagger\Magento2\Client\Model\Body39 | 

try {
    $result = $api_instance->catalogSpecialPriceStorageV1GetPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogSpecialPriceStorageV1Api->catalogSpecialPriceStorageV1GetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body39**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body39.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CatalogDataSpecialPriceInterface[]**](../Model/CatalogDataSpecialPriceInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogSpecialPriceStorageV1UpdatePost**
> \SpringImport\Swagger\Magento2\Client\Model\CatalogDataPriceUpdateResultInterface[] catalogSpecialPriceStorageV1UpdatePost($body)



Add or update product's special price. If any items will have invalid price, store id, sku or dates, they will be marked as failed and excluded from update list and \\Magento\\Catalog\\Api\\Data\\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CatalogSpecialPriceStorageV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body40(); // \SpringImport\Swagger\Magento2\Client\Model\Body40 | 

try {
    $result = $api_instance->catalogSpecialPriceStorageV1UpdatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogSpecialPriceStorageV1Api->catalogSpecialPriceStorageV1UpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body40**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body40.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CatalogDataPriceUpdateResultInterface[]**](../Model/CatalogDataPriceUpdateResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


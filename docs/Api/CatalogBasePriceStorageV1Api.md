# SpringImport\Swagger\Magento2\Client\CatalogBasePriceStorageV1Api

All URIs are relative to *http://b2b222.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogBasePriceStorageV1GetPost**](CatalogBasePriceStorageV1Api.md#catalogBasePriceStorageV1GetPost) | **POST** /V1/products/base-prices-information | 
[**catalogBasePriceStorageV1UpdatePost**](CatalogBasePriceStorageV1Api.md#catalogBasePriceStorageV1UpdatePost) | **POST** /V1/products/base-prices | 


# **catalogBasePriceStorageV1GetPost**
> \SpringImport\Swagger\Magento2\Client\Model\CatalogDataBasePriceInterface[] catalogBasePriceStorageV1GetPost($body)



Return product prices. In case of at least one of skus is not found exception will be thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CatalogBasePriceStorageV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body35(); // \SpringImport\Swagger\Magento2\Client\Model\Body35 | 

try {
    $result = $apiInstance->catalogBasePriceStorageV1GetPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogBasePriceStorageV1Api->catalogBasePriceStorageV1GetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body35**](../Model/Body35.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CatalogDataBasePriceInterface[]**](../Model/CatalogDataBasePriceInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogBasePriceStorageV1UpdatePost**
> \SpringImport\Swagger\Magento2\Client\Model\CatalogDataPriceUpdateResultInterface[] catalogBasePriceStorageV1UpdatePost($body)



Add or update product prices. Input item should correspond \\Magento\\Catalog\\Api\\Data\\CostInterface. If any items will have invalid price, store id or sku, they will be marked as failed and excluded from update list and \\Magento\\Catalog\\Api\\Data\\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CatalogBasePriceStorageV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body36(); // \SpringImport\Swagger\Magento2\Client\Model\Body36 | 

try {
    $result = $apiInstance->catalogBasePriceStorageV1UpdatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogBasePriceStorageV1Api->catalogBasePriceStorageV1UpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body36**](../Model/Body36.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CatalogDataPriceUpdateResultInterface[]**](../Model/CatalogDataPriceUpdateResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


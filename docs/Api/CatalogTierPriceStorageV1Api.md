# SpringImport\Swagger\Magento2\Client\CatalogTierPriceStorageV1Api

All URIs are relative to *http://hb.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogTierPriceStorageV1DeletePost**](CatalogTierPriceStorageV1Api.md#catalogTierPriceStorageV1DeletePost) | **POST** /V1/products/tier-prices-delete | 
[**catalogTierPriceStorageV1GetPost**](CatalogTierPriceStorageV1Api.md#catalogTierPriceStorageV1GetPost) | **POST** /V1/products/tier-prices-information | 
[**catalogTierPriceStorageV1ReplacePut**](CatalogTierPriceStorageV1Api.md#catalogTierPriceStorageV1ReplacePut) | **PUT** /V1/products/tier-prices | 
[**catalogTierPriceStorageV1UpdatePost**](CatalogTierPriceStorageV1Api.md#catalogTierPriceStorageV1UpdatePost) | **POST** /V1/products/tier-prices | 


# **catalogTierPriceStorageV1DeletePost**
> \SpringImport\Swagger\Magento2\Client\Model\CatalogDataPriceUpdateResultInterface[] catalogTierPriceStorageV1DeletePost($body)



Delete product tier prices. If any items will have invalid price, price type, website id, sku, customer group or quantity, they will be marked as failed and excluded from delete list and \\Magento\\Catalog\\Api\\Data\\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CatalogTierPriceStorageV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body33(); // \SpringImport\Swagger\Magento2\Client\Model\Body33 | 

try {
    $result = $api_instance->catalogTierPriceStorageV1DeletePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogTierPriceStorageV1Api->catalogTierPriceStorageV1DeletePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body33**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body33.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CatalogDataPriceUpdateResultInterface[]**](../Model/CatalogDataPriceUpdateResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogTierPriceStorageV1GetPost**
> \SpringImport\Swagger\Magento2\Client\Model\CatalogDataTierPriceInterface[] catalogTierPriceStorageV1GetPost($body)



Return product prices. In case of at least one of skus is not found exception will be thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CatalogTierPriceStorageV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body30(); // \SpringImport\Swagger\Magento2\Client\Model\Body30 | 

try {
    $result = $api_instance->catalogTierPriceStorageV1GetPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogTierPriceStorageV1Api->catalogTierPriceStorageV1GetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body30**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body30.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CatalogDataTierPriceInterface[]**](../Model/CatalogDataTierPriceInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogTierPriceStorageV1ReplacePut**
> \SpringImport\Swagger\Magento2\Client\Model\CatalogDataPriceUpdateResultInterface[] catalogTierPriceStorageV1ReplacePut($body)



Remove existing tier prices and replace them with the new ones. If any items will have invalid price, price type, website id, sku, customer group or quantity, they will be marked as failed and excluded from replace list and \\Magento\\Catalog\\Api\\Data\\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CatalogTierPriceStorageV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body31(); // \SpringImport\Swagger\Magento2\Client\Model\Body31 | 

try {
    $result = $api_instance->catalogTierPriceStorageV1ReplacePut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogTierPriceStorageV1Api->catalogTierPriceStorageV1ReplacePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body31**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body31.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CatalogDataPriceUpdateResultInterface[]**](../Model/CatalogDataPriceUpdateResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogTierPriceStorageV1UpdatePost**
> \SpringImport\Swagger\Magento2\Client\Model\CatalogDataPriceUpdateResultInterface[] catalogTierPriceStorageV1UpdatePost($body)



Add or update product prices. If any items will have invalid price, price type, website id, sku, customer group or quantity, they will be marked as failed and excluded from update list and \\Magento\\Catalog\\Api\\Data\\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CatalogTierPriceStorageV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body32(); // \SpringImport\Swagger\Magento2\Client\Model\Body32 | 

try {
    $result = $api_instance->catalogTierPriceStorageV1UpdatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogTierPriceStorageV1Api->catalogTierPriceStorageV1UpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body32**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body32.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CatalogDataPriceUpdateResultInterface[]**](../Model/CatalogDataPriceUpdateResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# SpringImport\Swagger\Magento2\Client\CatalogTierPriceStorageV1Api

All URIs are relative to *http://springimport.localhost/rest/all*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogTierPriceStorageV1DeletePost**](CatalogTierPriceStorageV1Api.md#catalogTierPriceStorageV1DeletePost) | **POST** /V1/products/tier-prices-delete | 
[**catalogTierPriceStorageV1GetPost**](CatalogTierPriceStorageV1Api.md#catalogTierPriceStorageV1GetPost) | **POST** /V1/products/tier-prices-information | 
[**catalogTierPriceStorageV1ReplacePut**](CatalogTierPriceStorageV1Api.md#catalogTierPriceStorageV1ReplacePut) | **PUT** /V1/products/tier-prices | 
[**catalogTierPriceStorageV1UpdatePost**](CatalogTierPriceStorageV1Api.md#catalogTierPriceStorageV1UpdatePost) | **POST** /V1/products/tier-prices | 


# **catalogTierPriceStorageV1DeletePost**
> \SpringImport\Swagger\Magento2\Client\Model\CatalogDataPriceUpdateResultInterface[] catalogTierPriceStorageV1DeletePost($catalogTierPriceStorageV1DeletePostBody)



Delete product tier prices. If any items will have invalid price, price type, website id, sku, customer group or quantity, they will be marked as failed and excluded from delete list and \\Magento\\Catalog\\Api\\Data\\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CatalogTierPriceStorageV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$catalogTierPriceStorageV1DeletePostBody = new \SpringImport\Swagger\Magento2\Client\Model\CatalogTierPriceStorageV1DeletePostBody(); // \SpringImport\Swagger\Magento2\Client\Model\CatalogTierPriceStorageV1DeletePostBody | 

try {
    $result = $apiInstance->catalogTierPriceStorageV1DeletePost($catalogTierPriceStorageV1DeletePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogTierPriceStorageV1Api->catalogTierPriceStorageV1DeletePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalogTierPriceStorageV1DeletePostBody** | [**\SpringImport\Swagger\Magento2\Client\Model\CatalogTierPriceStorageV1DeletePostBody**](../Model/CatalogTierPriceStorageV1DeletePostBody.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CatalogDataPriceUpdateResultInterface[]**](../Model/CatalogDataPriceUpdateResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogTierPriceStorageV1GetPost**
> \SpringImport\Swagger\Magento2\Client\Model\CatalogDataTierPriceInterface[] catalogTierPriceStorageV1GetPost($catalogTierPriceStorageV1GetPostBody)



Return product prices. In case of at least one of skus is not found exception will be thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CatalogTierPriceStorageV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$catalogTierPriceStorageV1GetPostBody = new \SpringImport\Swagger\Magento2\Client\Model\CatalogTierPriceStorageV1GetPostBody(); // \SpringImport\Swagger\Magento2\Client\Model\CatalogTierPriceStorageV1GetPostBody | 

try {
    $result = $apiInstance->catalogTierPriceStorageV1GetPost($catalogTierPriceStorageV1GetPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogTierPriceStorageV1Api->catalogTierPriceStorageV1GetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalogTierPriceStorageV1GetPostBody** | [**\SpringImport\Swagger\Magento2\Client\Model\CatalogTierPriceStorageV1GetPostBody**](../Model/CatalogTierPriceStorageV1GetPostBody.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CatalogDataTierPriceInterface[]**](../Model/CatalogDataTierPriceInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogTierPriceStorageV1ReplacePut**
> \SpringImport\Swagger\Magento2\Client\Model\CatalogDataPriceUpdateResultInterface[] catalogTierPriceStorageV1ReplacePut($catalogTierPriceStorageV1ReplacePutBody)



Remove existing tier prices and replace them with the new ones. If any items will have invalid price, price type, website id, sku, customer group or quantity, they will be marked as failed and excluded from replace list and \\Magento\\Catalog\\Api\\Data\\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CatalogTierPriceStorageV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$catalogTierPriceStorageV1ReplacePutBody = new \SpringImport\Swagger\Magento2\Client\Model\CatalogTierPriceStorageV1ReplacePutBody(); // \SpringImport\Swagger\Magento2\Client\Model\CatalogTierPriceStorageV1ReplacePutBody | 

try {
    $result = $apiInstance->catalogTierPriceStorageV1ReplacePut($catalogTierPriceStorageV1ReplacePutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogTierPriceStorageV1Api->catalogTierPriceStorageV1ReplacePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalogTierPriceStorageV1ReplacePutBody** | [**\SpringImport\Swagger\Magento2\Client\Model\CatalogTierPriceStorageV1ReplacePutBody**](../Model/CatalogTierPriceStorageV1ReplacePutBody.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CatalogDataPriceUpdateResultInterface[]**](../Model/CatalogDataPriceUpdateResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogTierPriceStorageV1UpdatePost**
> \SpringImport\Swagger\Magento2\Client\Model\CatalogDataPriceUpdateResultInterface[] catalogTierPriceStorageV1UpdatePost($catalogTierPriceStorageV1UpdatePostBody)



Add or update product prices. If any items will have invalid price, price type, website id, sku, customer group or quantity, they will be marked as failed and excluded from update list and \\Magento\\Catalog\\Api\\Data\\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CatalogTierPriceStorageV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$catalogTierPriceStorageV1UpdatePostBody = new \SpringImport\Swagger\Magento2\Client\Model\CatalogTierPriceStorageV1UpdatePostBody(); // \SpringImport\Swagger\Magento2\Client\Model\CatalogTierPriceStorageV1UpdatePostBody | 

try {
    $result = $apiInstance->catalogTierPriceStorageV1UpdatePost($catalogTierPriceStorageV1UpdatePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogTierPriceStorageV1Api->catalogTierPriceStorageV1UpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalogTierPriceStorageV1UpdatePostBody** | [**\SpringImport\Swagger\Magento2\Client\Model\CatalogTierPriceStorageV1UpdatePostBody**](../Model/CatalogTierPriceStorageV1UpdatePostBody.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CatalogDataPriceUpdateResultInterface[]**](../Model/CatalogDataPriceUpdateResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


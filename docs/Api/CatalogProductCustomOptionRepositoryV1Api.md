# SpringImport\Swagger\Magento2\Client\CatalogProductCustomOptionRepositoryV1Api

All URIs are relative to *http://example.com/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductCustomOptionRepositoryV1DeleteByIdentifierDelete**](CatalogProductCustomOptionRepositoryV1Api.md#catalogProductCustomOptionRepositoryV1DeleteByIdentifierDelete) | **DELETE** /V1/products/{sku}/options/{optionId} | 
[**catalogProductCustomOptionRepositoryV1GetGet**](CatalogProductCustomOptionRepositoryV1Api.md#catalogProductCustomOptionRepositoryV1GetGet) | **GET** /V1/products/{sku}/options/{optionId} | 
[**catalogProductCustomOptionRepositoryV1GetListGet**](CatalogProductCustomOptionRepositoryV1Api.md#catalogProductCustomOptionRepositoryV1GetListGet) | **GET** /V1/products/{sku}/options | 
[**catalogProductCustomOptionRepositoryV1SavePost**](CatalogProductCustomOptionRepositoryV1Api.md#catalogProductCustomOptionRepositoryV1SavePost) | **POST** /V1/products/options | 
[**catalogProductCustomOptionRepositoryV1SavePut**](CatalogProductCustomOptionRepositoryV1Api.md#catalogProductCustomOptionRepositoryV1SavePut) | **PUT** /V1/products/options/{optionId} | 


# **catalogProductCustomOptionRepositoryV1DeleteByIdentifierDelete**
> bool catalogProductCustomOptionRepositoryV1DeleteByIdentifierDelete($sku, $optionId)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductCustomOptionRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | 
$optionId = 56; // int | 

try {
    $result = $apiInstance->catalogProductCustomOptionRepositoryV1DeleteByIdentifierDelete($sku, $optionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductCustomOptionRepositoryV1Api->catalogProductCustomOptionRepositoryV1DeleteByIdentifierDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **optionId** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductCustomOptionRepositoryV1GetGet**
> \SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductCustomOptionInterface catalogProductCustomOptionRepositoryV1GetGet($sku, $optionId)



Get custom option for a specific product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductCustomOptionRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | 
$optionId = 56; // int | 

try {
    $result = $apiInstance->catalogProductCustomOptionRepositoryV1GetGet($sku, $optionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductCustomOptionRepositoryV1Api->catalogProductCustomOptionRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **optionId** | **int**|  |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductCustomOptionInterface**](../Model/CatalogDataProductCustomOptionInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductCustomOptionRepositoryV1GetListGet**
> \SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductCustomOptionInterface[] catalogProductCustomOptionRepositoryV1GetListGet($sku)



Get the list of custom options for a specific product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductCustomOptionRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | 

try {
    $result = $apiInstance->catalogProductCustomOptionRepositoryV1GetListGet($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductCustomOptionRepositoryV1Api->catalogProductCustomOptionRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductCustomOptionInterface[]**](../Model/CatalogDataProductCustomOptionInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductCustomOptionRepositoryV1SavePost**
> \SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductCustomOptionInterface catalogProductCustomOptionRepositoryV1SavePost($body)



Save Custom Option

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductCustomOptionRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body46(); // \SpringImport\Swagger\Magento2\Client\Model\Body46 | 

try {
    $result = $apiInstance->catalogProductCustomOptionRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductCustomOptionRepositoryV1Api->catalogProductCustomOptionRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body46**](../Model/Body46.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductCustomOptionInterface**](../Model/CatalogDataProductCustomOptionInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductCustomOptionRepositoryV1SavePut**
> \SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductCustomOptionInterface catalogProductCustomOptionRepositoryV1SavePut($optionId, $body)



Save Custom Option

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductCustomOptionRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$optionId = "optionId_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body47(); // \SpringImport\Swagger\Magento2\Client\Model\Body47 | 

try {
    $result = $apiInstance->catalogProductCustomOptionRepositoryV1SavePut($optionId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductCustomOptionRepositoryV1Api->catalogProductCustomOptionRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **optionId** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body47**](../Model/Body47.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductCustomOptionInterface**](../Model/CatalogDataProductCustomOptionInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# SpringImport\Swagger\Magento2\Client\ConfigurableProductOptionRepositoryV1Api

All URIs are relative to *http://example.com/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configurableProductOptionRepositoryV1DeleteByIdDelete**](ConfigurableProductOptionRepositoryV1Api.md#configurableProductOptionRepositoryV1DeleteByIdDelete) | **DELETE** /V1/configurable-products/{sku}/options/{id} | 
[**configurableProductOptionRepositoryV1GetGet**](ConfigurableProductOptionRepositoryV1Api.md#configurableProductOptionRepositoryV1GetGet) | **GET** /V1/configurable-products/{sku}/options/{id} | 
[**configurableProductOptionRepositoryV1GetListGet**](ConfigurableProductOptionRepositoryV1Api.md#configurableProductOptionRepositoryV1GetListGet) | **GET** /V1/configurable-products/{sku}/options/all | 
[**configurableProductOptionRepositoryV1SavePost**](ConfigurableProductOptionRepositoryV1Api.md#configurableProductOptionRepositoryV1SavePost) | **POST** /V1/configurable-products/{sku}/options | 
[**configurableProductOptionRepositoryV1SavePut**](ConfigurableProductOptionRepositoryV1Api.md#configurableProductOptionRepositoryV1SavePut) | **PUT** /V1/configurable-products/{sku}/options/{id} | 


# **configurableProductOptionRepositoryV1DeleteByIdDelete**
> bool configurableProductOptionRepositoryV1DeleteByIdDelete($sku, $id)



Remove option from configurable product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\ConfigurableProductOptionRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | 
$id = 56; // int | 

try {
    $result = $apiInstance->configurableProductOptionRepositoryV1DeleteByIdDelete($sku, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurableProductOptionRepositoryV1Api->configurableProductOptionRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **id** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurableProductOptionRepositoryV1GetGet**
> \SpringImport\Swagger\Magento2\Client\Model\ConfigurableProductDataOptionInterface configurableProductOptionRepositoryV1GetGet($sku, $id)



Get option for configurable product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\ConfigurableProductOptionRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | 
$id = 56; // int | 

try {
    $result = $apiInstance->configurableProductOptionRepositoryV1GetGet($sku, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurableProductOptionRepositoryV1Api->configurableProductOptionRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **id** | **int**|  |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\ConfigurableProductDataOptionInterface**](../Model/ConfigurableProductDataOptionInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurableProductOptionRepositoryV1GetListGet**
> \SpringImport\Swagger\Magento2\Client\Model\ConfigurableProductDataOptionInterface[] configurableProductOptionRepositoryV1GetListGet($sku)



Get all options for configurable product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\ConfigurableProductOptionRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | 

try {
    $result = $apiInstance->configurableProductOptionRepositoryV1GetListGet($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurableProductOptionRepositoryV1Api->configurableProductOptionRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\ConfigurableProductDataOptionInterface[]**](../Model/ConfigurableProductDataOptionInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurableProductOptionRepositoryV1SavePost**
> int configurableProductOptionRepositoryV1SavePost($sku, $body)



Save option

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\ConfigurableProductOptionRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body121(); // \SpringImport\Swagger\Magento2\Client\Model\Body121 | 

try {
    $result = $apiInstance->configurableProductOptionRepositoryV1SavePost($sku, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurableProductOptionRepositoryV1Api->configurableProductOptionRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body121**](../Model/Body121.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurableProductOptionRepositoryV1SavePut**
> int configurableProductOptionRepositoryV1SavePut($sku, $id, $body)



Save option

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\ConfigurableProductOptionRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | 
$id = "id_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body120(); // \SpringImport\Swagger\Magento2\Client\Model\Body120 | 

try {
    $result = $apiInstance->configurableProductOptionRepositoryV1SavePut($sku, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurableProductOptionRepositoryV1Api->configurableProductOptionRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **id** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body120**](../Model/Body120.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


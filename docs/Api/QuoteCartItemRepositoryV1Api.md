# SpringImport\Swagger\Magento2\Client\QuoteCartItemRepositoryV1Api

All URIs are relative to *http://b2b222.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteCartItemRepositoryV1DeleteByIdDelete**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1DeleteByIdDelete) | **DELETE** /V1/carts/{cartId}/items/{itemId} | 
[**quoteCartItemRepositoryV1DeleteByIdDelete_0**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1DeleteByIdDelete_0) | **DELETE** /V1/carts/mine/items/{itemId} | 
[**quoteCartItemRepositoryV1GetListGet**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1GetListGet) | **GET** /V1/carts/{cartId}/items | 
[**quoteCartItemRepositoryV1GetListGet_0**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1GetListGet_0) | **GET** /V1/carts/mine/items | 
[**quoteCartItemRepositoryV1SavePost**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1SavePost) | **POST** /V1/carts/{quoteId}/items | 
[**quoteCartItemRepositoryV1SavePost_0**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1SavePost_0) | **POST** /V1/carts/mine/items | 
[**quoteCartItemRepositoryV1SavePut**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1SavePut) | **PUT** /V1/carts/{cartId}/items/{itemId} | 
[**quoteCartItemRepositoryV1SavePut_0**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1SavePut_0) | **PUT** /V1/carts/mine/items/{itemId} | 


# **quoteCartItemRepositoryV1DeleteByIdDelete**
> bool quoteCartItemRepositoryV1DeleteByIdDelete($cartId, $itemId)



Removes the specified item from the specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\QuoteCartItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = 56; // int | The cart ID.
$itemId = 56; // int | The item ID of the item to be removed.

try {
    $result = $apiInstance->quoteCartItemRepositoryV1DeleteByIdDelete($cartId, $itemId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The cart ID. |
 **itemId** | **int**| The item ID of the item to be removed. |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartItemRepositoryV1DeleteByIdDelete_0**
> bool quoteCartItemRepositoryV1DeleteByIdDelete_0($itemId)



Removes the specified item from the specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\QuoteCartItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemId = 56; // int | The item ID of the item to be removed.

try {
    $result = $apiInstance->quoteCartItemRepositoryV1DeleteByIdDelete_0($itemId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1DeleteByIdDelete_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **itemId** | **int**| The item ID of the item to be removed. |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartItemRepositoryV1GetListGet**
> \SpringImport\Swagger\Magento2\Client\Model\QuoteDataCartItemInterface[] quoteCartItemRepositoryV1GetListGet($cartId)



Lists items that are assigned to a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\QuoteCartItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = 56; // int | The cart ID.

try {
    $result = $apiInstance->quoteCartItemRepositoryV1GetListGet($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The cart ID. |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\QuoteDataCartItemInterface[]**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartItemRepositoryV1GetListGet_0**
> \SpringImport\Swagger\Magento2\Client\Model\QuoteDataCartItemInterface[] quoteCartItemRepositoryV1GetListGet_0()



Lists items that are assigned to a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\QuoteCartItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->quoteCartItemRepositoryV1GetListGet_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1GetListGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\QuoteDataCartItemInterface[]**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartItemRepositoryV1SavePost**
> \SpringImport\Swagger\Magento2\Client\Model\QuoteDataCartItemInterface quoteCartItemRepositoryV1SavePost($quoteId, $body)



Add/update the specified cart item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\QuoteCartItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$quoteId = "quoteId_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body70(); // \SpringImport\Swagger\Magento2\Client\Model\Body70 | 

try {
    $result = $apiInstance->quoteCartItemRepositoryV1SavePost($quoteId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quoteId** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body70**](../Model/Body70.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\QuoteDataCartItemInterface**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartItemRepositoryV1SavePost_0**
> \SpringImport\Swagger\Magento2\Client\Model\QuoteDataCartItemInterface quoteCartItemRepositoryV1SavePost_0($body)



Add/update the specified cart item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\QuoteCartItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body72(); // \SpringImport\Swagger\Magento2\Client\Model\Body72 | 

try {
    $result = $apiInstance->quoteCartItemRepositoryV1SavePost_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1SavePost_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body72**](../Model/Body72.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\QuoteDataCartItemInterface**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartItemRepositoryV1SavePut**
> \SpringImport\Swagger\Magento2\Client\Model\QuoteDataCartItemInterface quoteCartItemRepositoryV1SavePut($cartId, $itemId, $body)



Add/update the specified cart item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\QuoteCartItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = "cartId_example"; // string | 
$itemId = "itemId_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body71(); // \SpringImport\Swagger\Magento2\Client\Model\Body71 | 

try {
    $result = $apiInstance->quoteCartItemRepositoryV1SavePut($cartId, $itemId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**|  |
 **itemId** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body71**](../Model/Body71.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\QuoteDataCartItemInterface**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartItemRepositoryV1SavePut_0**
> \SpringImport\Swagger\Magento2\Client\Model\QuoteDataCartItemInterface quoteCartItemRepositoryV1SavePut_0($itemId, $body)



Add/update the specified cart item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\QuoteCartItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemId = "itemId_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body73(); // \SpringImport\Swagger\Magento2\Client\Model\Body73 | 

try {
    $result = $apiInstance->quoteCartItemRepositoryV1SavePut_0($itemId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1SavePut_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **itemId** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body73**](../Model/Body73.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\QuoteDataCartItemInterface**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


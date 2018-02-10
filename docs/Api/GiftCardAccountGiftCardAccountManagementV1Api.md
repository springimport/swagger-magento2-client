# SpringImport\Swagger\Magento2\Client\GiftCardAccountGiftCardAccountManagementV1Api

All URIs are relative to *http://example.com/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**giftCardAccountGiftCardAccountManagementV1CheckGiftCardGet**](GiftCardAccountGiftCardAccountManagementV1Api.md#giftCardAccountGiftCardAccountManagementV1CheckGiftCardGet) | **GET** /V1/carts/mine/checkGiftCard/{giftCardCode} | 
[**giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete**](GiftCardAccountGiftCardAccountManagementV1Api.md#giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete) | **DELETE** /V1/carts/{cartId}/giftCards/{giftCardCode} | 
[**giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete_0**](GiftCardAccountGiftCardAccountManagementV1Api.md#giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete_0) | **DELETE** /V1/carts/mine/giftCards/{giftCardCode} | 
[**giftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGet**](GiftCardAccountGiftCardAccountManagementV1Api.md#giftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGet) | **GET** /V1/carts/{quoteId}/giftCards | 
[**giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPost**](GiftCardAccountGiftCardAccountManagementV1Api.md#giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPost) | **POST** /V1/carts/mine/giftCards | 
[**giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPut**](GiftCardAccountGiftCardAccountManagementV1Api.md#giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPut) | **PUT** /V1/carts/{cartId}/giftCards | 


# **giftCardAccountGiftCardAccountManagementV1CheckGiftCardGet**
> float giftCardAccountGiftCardAccountManagementV1CheckGiftCardGet($giftCardCode)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\GiftCardAccountGiftCardAccountManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$giftCardCode = "giftCardCode_example"; // string | 

try {
    $result = $apiInstance->giftCardAccountGiftCardAccountManagementV1CheckGiftCardGet($giftCardCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardAccountGiftCardAccountManagementV1Api->giftCardAccountGiftCardAccountManagementV1CheckGiftCardGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **giftCardCode** | **string**|  |

### Return type

**float**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete**
> bool giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete($cartId, $giftCardCode)



Remove GiftCard Account entity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\GiftCardAccountGiftCardAccountManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = 56; // int | 
$giftCardCode = "giftCardCode_example"; // string | 

try {
    $result = $apiInstance->giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete($cartId, $giftCardCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardAccountGiftCardAccountManagementV1Api->giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**|  |
 **giftCardCode** | **string**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete_0**
> bool giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete_0($giftCardCode)



Remove GiftCard Account entity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\GiftCardAccountGiftCardAccountManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$giftCardCode = "giftCardCode_example"; // string | 

try {
    $result = $apiInstance->giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete_0($giftCardCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardAccountGiftCardAccountManagementV1Api->giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **giftCardCode** | **string**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGet**
> \SpringImport\Swagger\Magento2\Client\Model\GiftCardAccountDataGiftCardAccountInterface giftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGet($quoteId)



Return GiftCard Account cards

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\GiftCardAccountGiftCardAccountManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$quoteId = 56; // int | 

try {
    $result = $apiInstance->giftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGet($quoteId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardAccountGiftCardAccountManagementV1Api->giftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quoteId** | **int**|  |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\GiftCardAccountDataGiftCardAccountInterface**](../Model/GiftCardAccountDataGiftCardAccountInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPost**
> bool giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPost($body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\GiftCardAccountGiftCardAccountManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body164(); // \SpringImport\Swagger\Magento2\Client\Model\Body164 | 

try {
    $result = $apiInstance->giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardAccountGiftCardAccountManagementV1Api->giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body164**](../Model/Body164.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPut**
> bool giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPut($cartId, $body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\GiftCardAccountGiftCardAccountManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = 56; // int | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body163(); // \SpringImport\Swagger\Magento2\Client\Model\Body163 | 

try {
    $result = $apiInstance->giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPut($cartId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardAccountGiftCardAccountManagementV1Api->giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body163**](../Model/Body163.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


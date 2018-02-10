# SpringImport\Swagger\Magento2\Client\GiftMessageGuestCartRepositoryV1Api

All URIs are relative to *http://example.com/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**giftMessageGuestCartRepositoryV1GetGet**](GiftMessageGuestCartRepositoryV1Api.md#giftMessageGuestCartRepositoryV1GetGet) | **GET** /V1/guest-carts/{cartId}/gift-message | 
[**giftMessageGuestCartRepositoryV1SavePost**](GiftMessageGuestCartRepositoryV1Api.md#giftMessageGuestCartRepositoryV1SavePost) | **POST** /V1/guest-carts/{cartId}/gift-message | 


# **giftMessageGuestCartRepositoryV1GetGet**
> \SpringImport\Swagger\Magento2\Client\Model\GiftMessageDataMessageInterface giftMessageGuestCartRepositoryV1GetGet($cartId)



Return the gift message for a specified order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\GiftMessageGuestCartRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = "cartId_example"; // string | The shopping cart ID.

try {
    $result = $apiInstance->giftMessageGuestCartRepositoryV1GetGet($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftMessageGuestCartRepositoryV1Api->giftMessageGuestCartRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**| The shopping cart ID. |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\GiftMessageDataMessageInterface**](../Model/GiftMessageDataMessageInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftMessageGuestCartRepositoryV1SavePost**
> bool giftMessageGuestCartRepositoryV1SavePost($cartId, $body)



Set the gift message for an entire order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\GiftMessageGuestCartRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = "cartId_example"; // string | The cart ID.
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body172(); // \SpringImport\Swagger\Magento2\Client\Model\Body172 | 

try {
    $result = $apiInstance->giftMessageGuestCartRepositoryV1SavePost($cartId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftMessageGuestCartRepositoryV1Api->giftMessageGuestCartRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**| The cart ID. |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body172**](../Model/Body172.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


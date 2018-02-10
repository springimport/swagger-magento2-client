# SpringImport\Swagger\Magento2\Client\GiftMessageGuestItemRepositoryV1Api

All URIs are relative to *http://example.com/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**giftMessageGuestItemRepositoryV1GetGet**](GiftMessageGuestItemRepositoryV1Api.md#giftMessageGuestItemRepositoryV1GetGet) | **GET** /V1/guest-carts/{cartId}/gift-message/{itemId} | 
[**giftMessageGuestItemRepositoryV1SavePost**](GiftMessageGuestItemRepositoryV1Api.md#giftMessageGuestItemRepositoryV1SavePost) | **POST** /V1/guest-carts/{cartId}/gift-message/{itemId} | 


# **giftMessageGuestItemRepositoryV1GetGet**
> \SpringImport\Swagger\Magento2\Client\Model\GiftMessageDataMessageInterface giftMessageGuestItemRepositoryV1GetGet($cartId, $itemId)



Return the gift message for a specified item in a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\GiftMessageGuestItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = "cartId_example"; // string | The shopping cart ID.
$itemId = 56; // int | The item ID.

try {
    $result = $apiInstance->giftMessageGuestItemRepositoryV1GetGet($cartId, $itemId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftMessageGuestItemRepositoryV1Api->giftMessageGuestItemRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**| The shopping cart ID. |
 **itemId** | **int**| The item ID. |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\GiftMessageDataMessageInterface**](../Model/GiftMessageDataMessageInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftMessageGuestItemRepositoryV1SavePost**
> bool giftMessageGuestItemRepositoryV1SavePost($cartId, $itemId, $body)



Set the gift message for a specified item in a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\GiftMessageGuestItemRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = "cartId_example"; // string | The cart ID.
$itemId = 56; // int | The item ID.
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body173(); // \SpringImport\Swagger\Magento2\Client\Model\Body173 | 

try {
    $result = $apiInstance->giftMessageGuestItemRepositoryV1SavePost($cartId, $itemId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftMessageGuestItemRepositoryV1Api->giftMessageGuestItemRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**| The cart ID. |
 **itemId** | **int**| The item ID. |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body173**](../Model/Body173.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


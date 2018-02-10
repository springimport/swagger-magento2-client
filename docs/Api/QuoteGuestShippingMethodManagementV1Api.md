# SpringImport\Swagger\Magento2\Client\QuoteGuestShippingMethodManagementV1Api

All URIs are relative to *http://example.com/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteGuestShippingMethodManagementV1GetListGet**](QuoteGuestShippingMethodManagementV1Api.md#quoteGuestShippingMethodManagementV1GetListGet) | **GET** /V1/guest-carts/{cartId}/shipping-methods | 


# **quoteGuestShippingMethodManagementV1GetListGet**
> \SpringImport\Swagger\Magento2\Client\Model\QuoteDataShippingMethodInterface[] quoteGuestShippingMethodManagementV1GetListGet($cartId)



List applicable shipping methods for a specified quote.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\QuoteGuestShippingMethodManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = "cartId_example"; // string | The shopping cart ID.

try {
    $result = $apiInstance->quoteGuestShippingMethodManagementV1GetListGet($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestShippingMethodManagementV1Api->quoteGuestShippingMethodManagementV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**| The shopping cart ID. |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


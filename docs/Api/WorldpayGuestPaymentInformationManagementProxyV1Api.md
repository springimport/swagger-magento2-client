# SpringImport\Swagger\Magento2\Client\WorldpayGuestPaymentInformationManagementProxyV1Api

All URIs are relative to *http://example.com/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPost**](WorldpayGuestPaymentInformationManagementProxyV1Api.md#worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPost) | **POST** /V1/worldpay-guest-carts/{cartId}/payment-information | 


# **worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPost**
> int worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPost($cartId, $body)



Proxy handler for guest place order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\WorldpayGuestPaymentInformationManagementProxyV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = "cartId_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body184(); // \SpringImport\Swagger\Magento2\Client\Model\Body184 | 

try {
    $result = $apiInstance->worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPost($cartId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldpayGuestPaymentInformationManagementProxyV1Api->worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body184**](../Model/Body184.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


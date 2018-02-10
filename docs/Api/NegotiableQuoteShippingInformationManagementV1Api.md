# SpringImport\Swagger\Magento2\Client\NegotiableQuoteShippingInformationManagementV1Api

All URIs are relative to *http://example.com/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**negotiableQuoteShippingInformationManagementV1SaveAddressInformationPost**](NegotiableQuoteShippingInformationManagementV1Api.md#negotiableQuoteShippingInformationManagementV1SaveAddressInformationPost) | **POST** /V1/negotiable-carts/{cartId}/shipping-information | 


# **negotiableQuoteShippingInformationManagementV1SaveAddressInformationPost**
> \SpringImport\Swagger\Magento2\Client\Model\CheckoutDataPaymentDetailsInterface negotiableQuoteShippingInformationManagementV1SaveAddressInformationPost($cartId, $body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\NegotiableQuoteShippingInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = 56; // int | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body149(); // \SpringImport\Swagger\Magento2\Client\Model\Body149 | 

try {
    $result = $apiInstance->negotiableQuoteShippingInformationManagementV1SaveAddressInformationPost($cartId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteShippingInformationManagementV1Api->negotiableQuoteShippingInformationManagementV1SaveAddressInformationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body149**](../Model/Body149.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CheckoutDataPaymentDetailsInterface**](../Model/CheckoutDataPaymentDetailsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


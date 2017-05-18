# SpringImport\Magento2SwaggerApi\CheckoutGuestShippingInformationManagementV1Api

All URIs are relative to *http://springimport.dev/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkoutGuestShippingInformationManagementV1SaveAddressInformationPost**](CheckoutGuestShippingInformationManagementV1Api.md#checkoutGuestShippingInformationManagementV1SaveAddressInformationPost) | **POST** /V1/guest-carts/{cartId}/shipping-information | 


# **checkoutGuestShippingInformationManagementV1SaveAddressInformationPost**
> \SpringImport\Magento2SwaggerApi\Model\CheckoutDataPaymentDetailsInterface checkoutGuestShippingInformationManagementV1SaveAddressInformationPost($cartId, $body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Magento2SwaggerApi\Api\CheckoutGuestShippingInformationManagementV1Api();
$cartId = "cartId_example"; // string | 
$body = new \SpringImport\Magento2SwaggerApi\Model\Body10(); // \SpringImport\Magento2SwaggerApi\Model\Body10 | 

try {
    $result = $api_instance->checkoutGuestShippingInformationManagementV1SaveAddressInformationPost($cartId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutGuestShippingInformationManagementV1Api->checkoutGuestShippingInformationManagementV1SaveAddressInformationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**|  |
 **body** | [**\SpringImport\Magento2SwaggerApi\Model\Body10**](../Model/\SpringImport\Magento2SwaggerApi\Model\Body10.md)|  | [optional]

### Return type

[**\SpringImport\Magento2SwaggerApi\Model\CheckoutDataPaymentDetailsInterface**](../Model/CheckoutDataPaymentDetailsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


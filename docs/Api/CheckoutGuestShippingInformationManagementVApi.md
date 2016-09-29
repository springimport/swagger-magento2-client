# Swagger\Client\CheckoutGuestShippingInformationManagementVApi

All URIs are relative to *http://example.com/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkoutGuestShippingInformationManagementV1SaveAddressInformationPost**](CheckoutGuestShippingInformationManagementVApi.md#checkoutGuestShippingInformationManagementV1SaveAddressInformationPost) | **POST** /V1/guest-carts/{cartId}/shipping-information | 


# **checkoutGuestShippingInformationManagementV1SaveAddressInformationPost**
> \Swagger\Client\Model\CheckoutDataPaymentDetailsInterface checkoutGuestShippingInformationManagementV1SaveAddressInformationPost($cart_id, $body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CheckoutGuestShippingInformationManagementVApi();
$cart_id = "cart_id_example"; // string | 
$body = new \Swagger\Client\Model\Body14(); // \Swagger\Client\Model\Body14 | 

try {
    $result = $api_instance->checkoutGuestShippingInformationManagementV1SaveAddressInformationPost($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutGuestShippingInformationManagementVApi->checkoutGuestShippingInformationManagementV1SaveAddressInformationPost: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**|  | 
 **body** | [**\Swagger\Client\Model\Body14**](../Model/\Swagger\Client\Model\Body14.md)|  | [optional] 

### Return type

[**\Swagger\Client\Model\CheckoutDataPaymentDetailsInterface**](../Model/CheckoutDataPaymentDetailsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


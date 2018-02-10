# SpringImport\Swagger\Magento2\Client\CheckoutGuestPaymentInformationManagementV1Api

All URIs are relative to *http://example.com/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet**](CheckoutGuestPaymentInformationManagementV1Api.md#checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet) | **GET** /V1/guest-carts/{cartId}/payment-information | 
[**checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost**](CheckoutGuestPaymentInformationManagementV1Api.md#checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost) | **POST** /V1/guest-carts/{cartId}/payment-information | 
[**checkoutGuestPaymentInformationManagementV1SavePaymentInformationPost**](CheckoutGuestPaymentInformationManagementV1Api.md#checkoutGuestPaymentInformationManagementV1SavePaymentInformationPost) | **POST** /V1/guest-carts/{cartId}/set-payment-information | 


# **checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet**
> \SpringImport\Swagger\Magento2\Client\Model\CheckoutDataPaymentDetailsInterface checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet($cartId)



Get payment information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CheckoutGuestPaymentInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = "cartId_example"; // string | 

try {
    $result = $apiInstance->checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutGuestPaymentInformationManagementV1Api->checkoutGuestPaymentInformationManagementV1GetPaymentInformationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**|  |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CheckoutDataPaymentDetailsInterface**](../Model/CheckoutDataPaymentDetailsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost**
> int checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($cartId, $body)



Set payment information and place order for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CheckoutGuestPaymentInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = "cartId_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body107(); // \SpringImport\Swagger\Magento2\Client\Model\Body107 | 

try {
    $result = $apiInstance->checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($cartId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutGuestPaymentInformationManagementV1Api->checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body107**](../Model/Body107.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkoutGuestPaymentInformationManagementV1SavePaymentInformationPost**
> int checkoutGuestPaymentInformationManagementV1SavePaymentInformationPost($cartId, $body)



Set payment information for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CheckoutGuestPaymentInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = "cartId_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body108(); // \SpringImport\Swagger\Magento2\Client\Model\Body108 | 

try {
    $result = $apiInstance->checkoutGuestPaymentInformationManagementV1SavePaymentInformationPost($cartId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutGuestPaymentInformationManagementV1Api->checkoutGuestPaymentInformationManagementV1SavePaymentInformationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body108**](../Model/Body108.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


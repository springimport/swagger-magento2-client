# SpringImport\Swagger\Magento2\Client\CheckoutPaymentInformationManagementV1Api

All URIs are relative to *http://example.com/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkoutPaymentInformationManagementV1GetPaymentInformationGet**](CheckoutPaymentInformationManagementV1Api.md#checkoutPaymentInformationManagementV1GetPaymentInformationGet) | **GET** /V1/carts/mine/payment-information | 
[**checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost**](CheckoutPaymentInformationManagementV1Api.md#checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost) | **POST** /V1/carts/mine/payment-information | 
[**checkoutPaymentInformationManagementV1SavePaymentInformationPost**](CheckoutPaymentInformationManagementV1Api.md#checkoutPaymentInformationManagementV1SavePaymentInformationPost) | **POST** /V1/carts/mine/set-payment-information | 


# **checkoutPaymentInformationManagementV1GetPaymentInformationGet**
> \SpringImport\Swagger\Magento2\Client\Model\CheckoutDataPaymentDetailsInterface checkoutPaymentInformationManagementV1GetPaymentInformationGet()



Get payment information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CheckoutPaymentInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->checkoutPaymentInformationManagementV1GetPaymentInformationGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutPaymentInformationManagementV1Api->checkoutPaymentInformationManagementV1GetPaymentInformationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CheckoutDataPaymentDetailsInterface**](../Model/CheckoutDataPaymentDetailsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost**
> int checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($body)



Set payment information and place order for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CheckoutPaymentInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body109(); // \SpringImport\Swagger\Magento2\Client\Model\Body109 | 

try {
    $result = $apiInstance->checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutPaymentInformationManagementV1Api->checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body109**](../Model/Body109.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkoutPaymentInformationManagementV1SavePaymentInformationPost**
> int checkoutPaymentInformationManagementV1SavePaymentInformationPost($body)



Set payment information for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CheckoutPaymentInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body110(); // \SpringImport\Swagger\Magento2\Client\Model\Body110 | 

try {
    $result = $apiInstance->checkoutPaymentInformationManagementV1SavePaymentInformationPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutPaymentInformationManagementV1Api->checkoutPaymentInformationManagementV1SavePaymentInformationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body110**](../Model/Body110.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


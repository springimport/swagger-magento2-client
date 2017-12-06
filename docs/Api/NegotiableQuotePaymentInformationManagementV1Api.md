# SpringImport\Swagger\Magento2\Client\NegotiableQuotePaymentInformationManagementV1Api

All URIs are relative to *http://hb.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**negotiableQuotePaymentInformationManagementV1GetPaymentInformationGet**](NegotiableQuotePaymentInformationManagementV1Api.md#negotiableQuotePaymentInformationManagementV1GetPaymentInformationGet) | **GET** /V1/negotiable-carts/{cartId}/payment-information | 
[**negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost**](NegotiableQuotePaymentInformationManagementV1Api.md#negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost) | **POST** /V1/negotiable-carts/{cartId}/payment-information | 
[**negotiableQuotePaymentInformationManagementV1SavePaymentInformationPost**](NegotiableQuotePaymentInformationManagementV1Api.md#negotiableQuotePaymentInformationManagementV1SavePaymentInformationPost) | **POST** /V1/negotiable-carts/{cartId}/set-payment-information | 


# **negotiableQuotePaymentInformationManagementV1GetPaymentInformationGet**
> \SpringImport\Swagger\Magento2\Client\Model\CheckoutDataPaymentDetailsInterface negotiableQuotePaymentInformationManagementV1GetPaymentInformationGet($cartId)



Get payment information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\NegotiableQuotePaymentInformationManagementV1Api();
$cartId = 56; // int | 

try {
    $result = $api_instance->negotiableQuotePaymentInformationManagementV1GetPaymentInformationGet($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuotePaymentInformationManagementV1Api->negotiableQuotePaymentInformationManagementV1GetPaymentInformationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**|  |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CheckoutDataPaymentDetailsInterface**](../Model/CheckoutDataPaymentDetailsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost**
> int negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($cartId, $body)



Set payment information and place order for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\NegotiableQuotePaymentInformationManagementV1Api();
$cartId = 56; // int | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body157(); // \SpringImport\Swagger\Magento2\Client\Model\Body157 | 

try {
    $result = $api_instance->negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($cartId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuotePaymentInformationManagementV1Api->negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body157**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body157.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **negotiableQuotePaymentInformationManagementV1SavePaymentInformationPost**
> int negotiableQuotePaymentInformationManagementV1SavePaymentInformationPost($cartId, $body)



Set payment information for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\NegotiableQuotePaymentInformationManagementV1Api();
$cartId = 56; // int | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body158(); // \SpringImport\Swagger\Magento2\Client\Model\Body158 | 

try {
    $result = $api_instance->negotiableQuotePaymentInformationManagementV1SavePaymentInformationPost($cartId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuotePaymentInformationManagementV1Api->negotiableQuotePaymentInformationManagementV1SavePaymentInformationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body158**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body158.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


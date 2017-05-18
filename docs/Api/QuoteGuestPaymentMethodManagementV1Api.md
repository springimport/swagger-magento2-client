# SpringImport\Magento2SwaggerApi\QuoteGuestPaymentMethodManagementV1Api

All URIs are relative to *http://springimport.dev/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteGuestPaymentMethodManagementV1GetGet**](QuoteGuestPaymentMethodManagementV1Api.md#quoteGuestPaymentMethodManagementV1GetGet) | **GET** /V1/guest-carts/{cartId}/selected-payment-method | 
[**quoteGuestPaymentMethodManagementV1GetListGet**](QuoteGuestPaymentMethodManagementV1Api.md#quoteGuestPaymentMethodManagementV1GetListGet) | **GET** /V1/guest-carts/{cartId}/payment-methods | 
[**quoteGuestPaymentMethodManagementV1SetPut**](QuoteGuestPaymentMethodManagementV1Api.md#quoteGuestPaymentMethodManagementV1SetPut) | **PUT** /V1/guest-carts/{cartId}/selected-payment-method | 


# **quoteGuestPaymentMethodManagementV1GetGet**
> \SpringImport\Magento2SwaggerApi\Model\QuoteDataPaymentInterface quoteGuestPaymentMethodManagementV1GetGet($cartId)



Return the payment method for a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Magento2SwaggerApi\Api\QuoteGuestPaymentMethodManagementV1Api();
$cartId = "cartId_example"; // string | The cart ID.

try {
    $result = $api_instance->quoteGuestPaymentMethodManagementV1GetGet($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestPaymentMethodManagementV1Api->quoteGuestPaymentMethodManagementV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**| The cart ID. |

### Return type

[**\SpringImport\Magento2SwaggerApi\Model\QuoteDataPaymentInterface**](../Model/QuoteDataPaymentInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteGuestPaymentMethodManagementV1GetListGet**
> \SpringImport\Magento2SwaggerApi\Model\QuoteDataPaymentMethodInterface[] quoteGuestPaymentMethodManagementV1GetListGet($cartId)



List available payment methods for a specified shopping cart. This call returns an array of objects, but detailed information about each object’s attributes might not be included.  See http://devdocs.magento.com/codelinks/attributes.html#GuestPaymentMethodManagementInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Magento2SwaggerApi\Api\QuoteGuestPaymentMethodManagementV1Api();
$cartId = "cartId_example"; // string | The cart ID.

try {
    $result = $api_instance->quoteGuestPaymentMethodManagementV1GetListGet($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestPaymentMethodManagementV1Api->quoteGuestPaymentMethodManagementV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**| The cart ID. |

### Return type

[**\SpringImport\Magento2SwaggerApi\Model\QuoteDataPaymentMethodInterface[]**](../Model/QuoteDataPaymentMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteGuestPaymentMethodManagementV1SetPut**
> int quoteGuestPaymentMethodManagementV1SetPut($cartId, $body)



Add a specified payment method to a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Magento2SwaggerApi\Api\QuoteGuestPaymentMethodManagementV1Api();
$cartId = "cartId_example"; // string | The cart ID.
$body = new \SpringImport\Magento2SwaggerApi\Model\Body7(); // \SpringImport\Magento2SwaggerApi\Model\Body7 | 

try {
    $result = $api_instance->quoteGuestPaymentMethodManagementV1SetPut($cartId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestPaymentMethodManagementV1Api->quoteGuestPaymentMethodManagementV1SetPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**| The cart ID. |
 **body** | [**\SpringImport\Magento2SwaggerApi\Model\Body7**](../Model/\SpringImport\Magento2SwaggerApi\Model\Body7.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


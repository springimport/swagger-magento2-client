# Swagger\Client\QuoteGuestPaymentMethodManagementVApi

All URIs are relative to *http://example.com/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteGuestPaymentMethodManagementV1GetGet**](QuoteGuestPaymentMethodManagementVApi.md#quoteGuestPaymentMethodManagementV1GetGet) | **GET** /V1/guest-carts/{cartId}/selected-payment-method | 
[**quoteGuestPaymentMethodManagementV1GetListGet**](QuoteGuestPaymentMethodManagementVApi.md#quoteGuestPaymentMethodManagementV1GetListGet) | **GET** /V1/guest-carts/{cartId}/payment-methods | 
[**quoteGuestPaymentMethodManagementV1SetPut**](QuoteGuestPaymentMethodManagementVApi.md#quoteGuestPaymentMethodManagementV1SetPut) | **PUT** /V1/guest-carts/{cartId}/selected-payment-method | 


# **quoteGuestPaymentMethodManagementV1GetGet**
> \Swagger\Client\Model\QuoteDataPaymentInterface quoteGuestPaymentMethodManagementV1GetGet($cart_id)



Return the payment method for a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\QuoteGuestPaymentMethodManagementVApi();
$cart_id = "cart_id_example"; // string | The cart ID.

try {
    $result = $api_instance->quoteGuestPaymentMethodManagementV1GetGet($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestPaymentMethodManagementVApi->quoteGuestPaymentMethodManagementV1GetGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The cart ID. | 

### Return type

[**\Swagger\Client\Model\QuoteDataPaymentInterface**](../Model/QuoteDataPaymentInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteGuestPaymentMethodManagementV1GetListGet**
> \Swagger\Client\Model\QuoteDataPaymentMethodInterface[] quoteGuestPaymentMethodManagementV1GetListGet($cart_id)



List available payment methods for a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\QuoteGuestPaymentMethodManagementVApi();
$cart_id = "cart_id_example"; // string | The cart ID.

try {
    $result = $api_instance->quoteGuestPaymentMethodManagementV1GetListGet($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestPaymentMethodManagementVApi->quoteGuestPaymentMethodManagementV1GetListGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The cart ID. | 

### Return type

[**\Swagger\Client\Model\QuoteDataPaymentMethodInterface[]**](../Model/QuoteDataPaymentMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteGuestPaymentMethodManagementV1SetPut**
> int quoteGuestPaymentMethodManagementV1SetPut($cart_id, $body)



Add a specified payment method to a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\QuoteGuestPaymentMethodManagementVApi();
$cart_id = "cart_id_example"; // string | The cart ID.
$body = new \Swagger\Client\Model\Body12(); // \Swagger\Client\Model\Body12 | 

try {
    $result = $api_instance->quoteGuestPaymentMethodManagementV1SetPut($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestPaymentMethodManagementVApi->quoteGuestPaymentMethodManagementV1SetPut: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The cart ID. | 
 **body** | [**\Swagger\Client\Model\Body12**](../Model/\Swagger\Client\Model\Body12.md)|  | [optional] 

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


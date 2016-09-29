# Swagger\Client\QuoteGuestShippingMethodManagementVApi

All URIs are relative to *http://example.com/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteGuestShippingMethodManagementV1EstimateByAddressPost**](QuoteGuestShippingMethodManagementVApi.md#quoteGuestShippingMethodManagementV1EstimateByAddressPost) | **POST** /V1/guest-carts/{cartId}/estimate-shipping-methods | 
[**quoteGuestShippingMethodManagementV1GetListGet**](QuoteGuestShippingMethodManagementVApi.md#quoteGuestShippingMethodManagementV1GetListGet) | **GET** /V1/guest-carts/{cartId}/shipping-methods | 


# **quoteGuestShippingMethodManagementV1EstimateByAddressPost**
> \Swagger\Client\Model\QuoteDataShippingMethodInterface[] quoteGuestShippingMethodManagementV1EstimateByAddressPost($cart_id, $body)



Estimate shipping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\QuoteGuestShippingMethodManagementVApi();
$cart_id = "cart_id_example"; // string | The shopping cart ID.
$body = new \Swagger\Client\Model\Body5(); // \Swagger\Client\Model\Body5 | 

try {
    $result = $api_instance->quoteGuestShippingMethodManagementV1EstimateByAddressPost($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestShippingMethodManagementVApi->quoteGuestShippingMethodManagementV1EstimateByAddressPost: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The shopping cart ID. | 
 **body** | [**\Swagger\Client\Model\Body5**](../Model/\Swagger\Client\Model\Body5.md)|  | [optional] 

### Return type

[**\Swagger\Client\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteGuestShippingMethodManagementV1GetListGet**
> \Swagger\Client\Model\QuoteDataShippingMethodInterface[] quoteGuestShippingMethodManagementV1GetListGet($cart_id)



List applicable shipping methods for a specified quote.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\QuoteGuestShippingMethodManagementVApi();
$cart_id = "cart_id_example"; // string | The shopping cart ID.

try {
    $result = $api_instance->quoteGuestShippingMethodManagementV1GetListGet($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestShippingMethodManagementVApi->quoteGuestShippingMethodManagementV1GetListGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The shopping cart ID. | 

### Return type

[**\Swagger\Client\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


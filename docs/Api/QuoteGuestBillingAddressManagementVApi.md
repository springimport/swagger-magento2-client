# Swagger\Client\QuoteGuestBillingAddressManagementVApi

All URIs are relative to *http://example.com/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteGuestBillingAddressManagementV1AssignPost**](QuoteGuestBillingAddressManagementVApi.md#quoteGuestBillingAddressManagementV1AssignPost) | **POST** /V1/guest-carts/{cartId}/billing-address | 
[**quoteGuestBillingAddressManagementV1GetGet**](QuoteGuestBillingAddressManagementVApi.md#quoteGuestBillingAddressManagementV1GetGet) | **GET** /V1/guest-carts/{cartId}/billing-address | 


# **quoteGuestBillingAddressManagementV1AssignPost**
> int quoteGuestBillingAddressManagementV1AssignPost($cart_id, $body)



Assign a specified billing address to a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\QuoteGuestBillingAddressManagementVApi();
$cart_id = "cart_id_example"; // string | The cart ID.
$body = new \Swagger\Client\Model\Body3(); // \Swagger\Client\Model\Body3 | 

try {
    $result = $api_instance->quoteGuestBillingAddressManagementV1AssignPost($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestBillingAddressManagementVApi->quoteGuestBillingAddressManagementV1AssignPost: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The cart ID. | 
 **body** | [**\Swagger\Client\Model\Body3**](../Model/\Swagger\Client\Model\Body3.md)|  | [optional] 

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteGuestBillingAddressManagementV1GetGet**
> \Swagger\Client\Model\QuoteDataAddressInterface quoteGuestBillingAddressManagementV1GetGet($cart_id)



Return the billing address for a specified quote.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\QuoteGuestBillingAddressManagementVApi();
$cart_id = "cart_id_example"; // string | The cart ID.

try {
    $result = $api_instance->quoteGuestBillingAddressManagementV1GetGet($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestBillingAddressManagementVApi->quoteGuestBillingAddressManagementV1GetGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The cart ID. | 

### Return type

[**\Swagger\Client\Model\QuoteDataAddressInterface**](../Model/QuoteDataAddressInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


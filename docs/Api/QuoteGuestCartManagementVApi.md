# Swagger\Client\QuoteGuestCartManagementVApi

All URIs are relative to *http://example.com/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteGuestCartManagementV1CreateEmptyCartPost**](QuoteGuestCartManagementVApi.md#quoteGuestCartManagementV1CreateEmptyCartPost) | **POST** /V1/guest-carts | 
[**quoteGuestCartManagementV1PlaceOrderPut**](QuoteGuestCartManagementVApi.md#quoteGuestCartManagementV1PlaceOrderPut) | **PUT** /V1/guest-carts/{cartId}/order | 


# **quoteGuestCartManagementV1CreateEmptyCartPost**
> string quoteGuestCartManagementV1CreateEmptyCartPost()



Enable an customer or guest user to create an empty cart and quote for an anonymous customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\QuoteGuestCartManagementVApi();

try {
    $result = $api_instance->quoteGuestCartManagementV1CreateEmptyCartPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestCartManagementVApi->quoteGuestCartManagementV1CreateEmptyCartPost: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteGuestCartManagementV1PlaceOrderPut**
> int quoteGuestCartManagementV1PlaceOrderPut($cart_id, $body)



Place an order for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\QuoteGuestCartManagementVApi();
$cart_id = "cart_id_example"; // string | The cart ID.
$body = new \Swagger\Client\Model\Body10(); // \Swagger\Client\Model\Body10 | 

try {
    $result = $api_instance->quoteGuestCartManagementV1PlaceOrderPut($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestCartManagementVApi->quoteGuestCartManagementV1PlaceOrderPut: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The cart ID. | 
 **body** | [**\Swagger\Client\Model\Body10**](../Model/\Swagger\Client\Model\Body10.md)|  | [optional] 

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


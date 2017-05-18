# SpringImport\Magento2SwaggerApi\QuoteGuestCartManagementV1Api

All URIs are relative to *http://springimport.dev/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteGuestCartManagementV1CreateEmptyCartPost**](QuoteGuestCartManagementV1Api.md#quoteGuestCartManagementV1CreateEmptyCartPost) | **POST** /V1/guest-carts | 
[**quoteGuestCartManagementV1PlaceOrderPut**](QuoteGuestCartManagementV1Api.md#quoteGuestCartManagementV1PlaceOrderPut) | **PUT** /V1/guest-carts/{cartId}/order | 


# **quoteGuestCartManagementV1CreateEmptyCartPost**
> string quoteGuestCartManagementV1CreateEmptyCartPost()



Enable an customer or guest user to create an empty cart and quote for an anonymous customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Magento2SwaggerApi\Api\QuoteGuestCartManagementV1Api();

try {
    $result = $api_instance->quoteGuestCartManagementV1CreateEmptyCartPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestCartManagementV1Api->quoteGuestCartManagementV1CreateEmptyCartPost: ', $e->getMessage(), PHP_EOL;
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
> int quoteGuestCartManagementV1PlaceOrderPut($cartId, $body)



Place an order for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Magento2SwaggerApi\Api\QuoteGuestCartManagementV1Api();
$cartId = "cartId_example"; // string | The cart ID.
$body = new \SpringImport\Magento2SwaggerApi\Model\Body3(); // \SpringImport\Magento2SwaggerApi\Model\Body3 | 

try {
    $result = $api_instance->quoteGuestCartManagementV1PlaceOrderPut($cartId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestCartManagementV1Api->quoteGuestCartManagementV1PlaceOrderPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**| The cart ID. |
 **body** | [**\SpringImport\Magento2SwaggerApi\Model\Body3**](../Model/\SpringImport\Magento2SwaggerApi\Model\Body3.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


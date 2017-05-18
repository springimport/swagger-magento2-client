# SpringImport\Magento2SwaggerApi\QuoteGuestBillingAddressManagementV1Api

All URIs are relative to *http://springimport.dev/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteGuestBillingAddressManagementV1AssignPost**](QuoteGuestBillingAddressManagementV1Api.md#quoteGuestBillingAddressManagementV1AssignPost) | **POST** /V1/guest-carts/{cartId}/billing-address | 
[**quoteGuestBillingAddressManagementV1GetGet**](QuoteGuestBillingAddressManagementV1Api.md#quoteGuestBillingAddressManagementV1GetGet) | **GET** /V1/guest-carts/{cartId}/billing-address | 


# **quoteGuestBillingAddressManagementV1AssignPost**
> int quoteGuestBillingAddressManagementV1AssignPost($cartId, $body)



Assign a specified billing address to a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Magento2SwaggerApi\Api\QuoteGuestBillingAddressManagementV1Api();
$cartId = "cartId_example"; // string | The cart ID.
$body = new \SpringImport\Magento2SwaggerApi\Model\Body8(); // \SpringImport\Magento2SwaggerApi\Model\Body8 | 

try {
    $result = $api_instance->quoteGuestBillingAddressManagementV1AssignPost($cartId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestBillingAddressManagementV1Api->quoteGuestBillingAddressManagementV1AssignPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**| The cart ID. |
 **body** | [**\SpringImport\Magento2SwaggerApi\Model\Body8**](../Model/\SpringImport\Magento2SwaggerApi\Model\Body8.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteGuestBillingAddressManagementV1GetGet**
> \SpringImport\Magento2SwaggerApi\Model\QuoteDataAddressInterface quoteGuestBillingAddressManagementV1GetGet($cartId)



Return the billing address for a specified quote.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Magento2SwaggerApi\Api\QuoteGuestBillingAddressManagementV1Api();
$cartId = "cartId_example"; // string | The cart ID.

try {
    $result = $api_instance->quoteGuestBillingAddressManagementV1GetGet($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestBillingAddressManagementV1Api->quoteGuestBillingAddressManagementV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**| The cart ID. |

### Return type

[**\SpringImport\Magento2SwaggerApi\Model\QuoteDataAddressInterface**](../Model/QuoteDataAddressInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


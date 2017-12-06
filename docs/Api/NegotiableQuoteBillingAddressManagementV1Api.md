# SpringImport\Swagger\Magento2\Client\NegotiableQuoteBillingAddressManagementV1Api

All URIs are relative to *http://hb.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**negotiableQuoteBillingAddressManagementV1AssignPost**](NegotiableQuoteBillingAddressManagementV1Api.md#negotiableQuoteBillingAddressManagementV1AssignPost) | **POST** /V1/negotiable-carts/{cartId}/billing-address | 
[**negotiableQuoteBillingAddressManagementV1GetGet**](NegotiableQuoteBillingAddressManagementV1Api.md#negotiableQuoteBillingAddressManagementV1GetGet) | **GET** /V1/negotiable-carts/{cartId}/billing-address | 


# **negotiableQuoteBillingAddressManagementV1AssignPost**
> int negotiableQuoteBillingAddressManagementV1AssignPost($cartId, $body)



Assigns a specified billing address to a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\NegotiableQuoteBillingAddressManagementV1Api();
$cartId = 56; // int | The cart ID.
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body163(); // \SpringImport\Swagger\Magento2\Client\Model\Body163 | 

try {
    $result = $api_instance->negotiableQuoteBillingAddressManagementV1AssignPost($cartId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteBillingAddressManagementV1Api->negotiableQuoteBillingAddressManagementV1AssignPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The cart ID. |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body163**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body163.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **negotiableQuoteBillingAddressManagementV1GetGet**
> \SpringImport\Swagger\Magento2\Client\Model\QuoteDataAddressInterface negotiableQuoteBillingAddressManagementV1GetGet($cartId)



Returns the billing address for a specified quote.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\NegotiableQuoteBillingAddressManagementV1Api();
$cartId = 56; // int | The cart ID.

try {
    $result = $api_instance->negotiableQuoteBillingAddressManagementV1GetGet($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteBillingAddressManagementV1Api->negotiableQuoteBillingAddressManagementV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The cart ID. |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\QuoteDataAddressInterface**](../Model/QuoteDataAddressInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

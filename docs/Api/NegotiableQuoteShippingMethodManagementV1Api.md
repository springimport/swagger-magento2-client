# SpringImport\Swagger\Magento2\Client\NegotiableQuoteShippingMethodManagementV1Api

All URIs are relative to *http://hb.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**negotiableQuoteShippingMethodManagementV1EstimateByAddressIdPost**](NegotiableQuoteShippingMethodManagementV1Api.md#negotiableQuoteShippingMethodManagementV1EstimateByAddressIdPost) | **POST** /V1/negotiable-carts/{cartId}/estimate-shipping-methods-by-address-id | 


# **negotiableQuoteShippingMethodManagementV1EstimateByAddressIdPost**
> \SpringImport\Swagger\Magento2\Client\Model\QuoteDataShippingMethodInterface[] negotiableQuoteShippingMethodManagementV1EstimateByAddressIdPost($cartId, $body)



Estimate shipping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\NegotiableQuoteShippingMethodManagementV1Api();
$cartId = 56; // int | The shopping cart ID.
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body161(); // \SpringImport\Swagger\Magento2\Client\Model\Body161 | 

try {
    $result = $api_instance->negotiableQuoteShippingMethodManagementV1EstimateByAddressIdPost($cartId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteShippingMethodManagementV1Api->negotiableQuoteShippingMethodManagementV1EstimateByAddressIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The shopping cart ID. |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body161**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body161.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


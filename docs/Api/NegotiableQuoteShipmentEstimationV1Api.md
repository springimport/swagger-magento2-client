# SpringImport\Swagger\Magento2\Client\NegotiableQuoteShipmentEstimationV1Api

All URIs are relative to *http://hb.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**negotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPost**](NegotiableQuoteShipmentEstimationV1Api.md#negotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPost) | **POST** /V1/negotiable-carts/{cartId}/estimate-shipping-methods | 


# **negotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPost**
> \SpringImport\Swagger\Magento2\Client\Model\QuoteDataShippingMethodInterface[] negotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPost($cartId, $body)



Estimate shipping by address and return list of available shipping methods

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\NegotiableQuoteShipmentEstimationV1Api();
$cartId = "cartId_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body160(); // \SpringImport\Swagger\Magento2\Client\Model\Body160 | 

try {
    $result = $api_instance->negotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPost($cartId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteShipmentEstimationV1Api->negotiableQuoteShipmentEstimationV1EstimateByExtendedAddressPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body160**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body160.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# SpringImport\Magento2SwaggerApi\QuoteGuestShipmentEstimationV1Api

All URIs are relative to *http://springimport.dev/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost**](QuoteGuestShipmentEstimationV1Api.md#quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost) | **POST** /V1/guest-carts/{cartId}/estimate-shipping-methods | 


# **quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost**
> \SpringImport\Magento2SwaggerApi\Model\QuoteDataShippingMethodInterface[] quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost($cartId, $body)



Estimate shipping by address and return list of available shipping methods

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Magento2SwaggerApi\Api\QuoteGuestShipmentEstimationV1Api();
$cartId = "cartId_example"; // string | 
$body = new \SpringImport\Magento2SwaggerApi\Model\Body4(); // \SpringImport\Magento2SwaggerApi\Model\Body4 | 

try {
    $result = $api_instance->quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost($cartId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestShipmentEstimationV1Api->quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**|  |
 **body** | [**\SpringImport\Magento2SwaggerApi\Model\Body4**](../Model/\SpringImport\Magento2SwaggerApi\Model\Body4.md)|  | [optional]

### Return type

[**\SpringImport\Magento2SwaggerApi\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


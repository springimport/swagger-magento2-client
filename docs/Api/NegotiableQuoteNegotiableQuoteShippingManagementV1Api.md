# SpringImport\Swagger\Magento2\Client\NegotiableQuoteNegotiableQuoteShippingManagementV1Api

All URIs are relative to *http://b2b222.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**negotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPut**](NegotiableQuoteNegotiableQuoteShippingManagementV1Api.md#negotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPut) | **PUT** /V1/negotiableQuote/{quoteId}/shippingMethod | 


# **negotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPut**
> bool negotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPut($quoteId, $body)



Updates the shipping method on a negotiable quote.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\NegotiableQuoteNegotiableQuoteShippingManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$quoteId = 56; // int | Negotiable Quote id
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body146(); // \SpringImport\Swagger\Magento2\Client\Model\Body146 | 

try {
    $result = $apiInstance->negotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPut($quoteId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteNegotiableQuoteShippingManagementV1Api->negotiableQuoteNegotiableQuoteShippingManagementV1SetShippingMethodPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quoteId** | **int**| Negotiable Quote id |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body146**](../Model/Body146.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


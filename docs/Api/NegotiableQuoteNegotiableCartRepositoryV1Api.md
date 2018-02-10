# SpringImport\Swagger\Magento2\Client\NegotiableQuoteNegotiableCartRepositoryV1Api

All URIs are relative to *http://example.com/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**negotiableQuoteNegotiableCartRepositoryV1SavePut**](NegotiableQuoteNegotiableCartRepositoryV1Api.md#negotiableQuoteNegotiableCartRepositoryV1SavePut) | **PUT** /V1/negotiableQuote/{quoteId} | 


# **negotiableQuoteNegotiableCartRepositoryV1SavePut**
> \SpringImport\Swagger\Magento2\Client\Model\ErrorResponse negotiableQuoteNegotiableCartRepositoryV1SavePut($quoteId, $body)



Save quote

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\NegotiableQuoteNegotiableCartRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$quoteId = "quoteId_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body152(); // \SpringImport\Swagger\Magento2\Client\Model\Body152 | 

try {
    $result = $apiInstance->negotiableQuoteNegotiableCartRepositoryV1SavePut($quoteId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteNegotiableCartRepositoryV1Api->negotiableQuoteNegotiableCartRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quoteId** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body152**](../Model/Body152.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse**](../Model/ErrorResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


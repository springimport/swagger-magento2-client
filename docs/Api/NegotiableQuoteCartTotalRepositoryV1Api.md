# SpringImport\Swagger\Magento2\Client\NegotiableQuoteCartTotalRepositoryV1Api

All URIs are relative to *http://b2b222.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**negotiableQuoteCartTotalRepositoryV1GetGet**](NegotiableQuoteCartTotalRepositoryV1Api.md#negotiableQuoteCartTotalRepositoryV1GetGet) | **GET** /V1/negotiable-carts/{cartId}/totals | 


# **negotiableQuoteCartTotalRepositoryV1GetGet**
> \SpringImport\Swagger\Magento2\Client\Model\QuoteDataTotalsInterface negotiableQuoteCartTotalRepositoryV1GetGet($cartId)



Returns quote totals data for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\NegotiableQuoteCartTotalRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = 56; // int | The cart ID.

try {
    $result = $apiInstance->negotiableQuoteCartTotalRepositoryV1GetGet($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteCartTotalRepositoryV1Api->negotiableQuoteCartTotalRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The cart ID. |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\QuoteDataTotalsInterface**](../Model/QuoteDataTotalsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


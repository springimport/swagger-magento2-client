# SpringImport\Swagger\Magento2\Client\QuoteCartTotalManagementV1Api

All URIs are relative to *http://springimport.localhost/rest/all*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteCartTotalManagementV1CollectTotalsPut**](QuoteCartTotalManagementV1Api.md#quoteCartTotalManagementV1CollectTotalsPut) | **PUT** /V1/carts/mine/collect-totals | 


# **quoteCartTotalManagementV1CollectTotalsPut**
> \SpringImport\Swagger\Magento2\Client\Model\QuoteDataTotalsInterface quoteCartTotalManagementV1CollectTotalsPut($quoteCartTotalManagementV1CollectTotalsPutBody)



Set shipping/billing methods and additional data for cart and collect totals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\QuoteCartTotalManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$quoteCartTotalManagementV1CollectTotalsPutBody = new \SpringImport\Swagger\Magento2\Client\Model\QuoteCartTotalManagementV1CollectTotalsPutBody(); // \SpringImport\Swagger\Magento2\Client\Model\QuoteCartTotalManagementV1CollectTotalsPutBody | 

try {
    $result = $apiInstance->quoteCartTotalManagementV1CollectTotalsPut($quoteCartTotalManagementV1CollectTotalsPutBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartTotalManagementV1Api->quoteCartTotalManagementV1CollectTotalsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quoteCartTotalManagementV1CollectTotalsPutBody** | [**\SpringImport\Swagger\Magento2\Client\Model\QuoteCartTotalManagementV1CollectTotalsPutBody**](../Model/QuoteCartTotalManagementV1CollectTotalsPutBody.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\QuoteDataTotalsInterface**](../Model/QuoteDataTotalsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


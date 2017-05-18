# SpringImport\Swagger\Magento2\Client\QuoteCartTotalManagementV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteCartTotalManagementV1CollectTotalsPut**](QuoteCartTotalManagementV1Api.md#quoteCartTotalManagementV1CollectTotalsPut) | **PUT** /V1/carts/mine/collect-totals | 


# **quoteCartTotalManagementV1CollectTotalsPut**
> \SpringImport\Swagger\Magento2\Client\Model\QuoteDataTotalsInterface quoteCartTotalManagementV1CollectTotalsPut($body)



Set shipping/billing methods and additional data for cart and collect totals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\QuoteCartTotalManagementV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body70(); // \SpringImport\Swagger\Magento2\Client\Model\Body70 | 

try {
    $result = $api_instance->quoteCartTotalManagementV1CollectTotalsPut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartTotalManagementV1Api->quoteCartTotalManagementV1CollectTotalsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body70**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body70.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\QuoteDataTotalsInterface**](../Model/QuoteDataTotalsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


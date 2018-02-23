# SpringImport\Swagger\Magento2\Client\TemandoShippingQuoteShippingMethodManagementV1Api

All URIs are relative to *http://springimport.localhost/rest/all*

Method | HTTP request | Description
------------- | ------------- | -------------
[**temandoShippingQuoteShippingMethodManagementV1EstimateByAddressIdPost**](TemandoShippingQuoteShippingMethodManagementV1Api.md#temandoShippingQuoteShippingMethodManagementV1EstimateByAddressIdPost) | **POST** /V1/carts/mine/estimate-shipping-methods-by-address-id | 


# **temandoShippingQuoteShippingMethodManagementV1EstimateByAddressIdPost**
> \SpringImport\Swagger\Magento2\Client\Model\QuoteDataShippingMethodInterface[] temandoShippingQuoteShippingMethodManagementV1EstimateByAddressIdPost($temandoShippingQuoteShippingMethodManagementV1EstimateByAddressIdPostBody)



Estimate shipping with extension attributes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\TemandoShippingQuoteShippingMethodManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$temandoShippingQuoteShippingMethodManagementV1EstimateByAddressIdPostBody = new \SpringImport\Swagger\Magento2\Client\Model\TemandoShippingQuoteShippingMethodManagementV1EstimateByAddressIdPostBody(); // \SpringImport\Swagger\Magento2\Client\Model\TemandoShippingQuoteShippingMethodManagementV1EstimateByAddressIdPostBody | 

try {
    $result = $apiInstance->temandoShippingQuoteShippingMethodManagementV1EstimateByAddressIdPost($temandoShippingQuoteShippingMethodManagementV1EstimateByAddressIdPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemandoShippingQuoteShippingMethodManagementV1Api->temandoShippingQuoteShippingMethodManagementV1EstimateByAddressIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **temandoShippingQuoteShippingMethodManagementV1EstimateByAddressIdPostBody** | [**\SpringImport\Swagger\Magento2\Client\Model\TemandoShippingQuoteShippingMethodManagementV1EstimateByAddressIdPostBody**](../Model/TemandoShippingQuoteShippingMethodManagementV1EstimateByAddressIdPostBody.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


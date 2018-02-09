# SpringImport\Swagger\Magento2\Client\GiftRegistryShippingMethodManagementV1Api

All URIs are relative to *http://b2b222.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**giftRegistryShippingMethodManagementV1EstimateByRegistryIdPost**](GiftRegistryShippingMethodManagementV1Api.md#giftRegistryShippingMethodManagementV1EstimateByRegistryIdPost) | **POST** /V1/giftregistry/mine/estimate-shipping-methods | 


# **giftRegistryShippingMethodManagementV1EstimateByRegistryIdPost**
> \SpringImport\Swagger\Magento2\Client\Model\QuoteDataShippingMethodInterface[] giftRegistryShippingMethodManagementV1EstimateByRegistryIdPost($body)



Estimate shipping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\GiftRegistryShippingMethodManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body166(); // \SpringImport\Swagger\Magento2\Client\Model\Body166 | 

try {
    $result = $apiInstance->giftRegistryShippingMethodManagementV1EstimateByRegistryIdPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftRegistryShippingMethodManagementV1Api->giftRegistryShippingMethodManagementV1EstimateByRegistryIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body166**](../Model/Body166.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


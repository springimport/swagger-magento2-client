# SpringImport\Swagger\Magento2\Client\CheckoutGuestTotalsInformationManagementV1Api

All URIs are relative to *http://example.com/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkoutGuestTotalsInformationManagementV1CalculatePost**](CheckoutGuestTotalsInformationManagementV1Api.md#checkoutGuestTotalsInformationManagementV1CalculatePost) | **POST** /V1/guest-carts/{cartId}/totals-information | 


# **checkoutGuestTotalsInformationManagementV1CalculatePost**
> \SpringImport\Swagger\Magento2\Client\Model\QuoteDataTotalsInterface checkoutGuestTotalsInformationManagementV1CalculatePost($cartId, $body)



Calculate quote totals based on address and shipping method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CheckoutGuestTotalsInformationManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cartId = "cartId_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body106(); // \SpringImport\Swagger\Magento2\Client\Model\Body106 | 

try {
    $result = $apiInstance->checkoutGuestTotalsInformationManagementV1CalculatePost($cartId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutGuestTotalsInformationManagementV1Api->checkoutGuestTotalsInformationManagementV1CalculatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body106**](../Model/Body106.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\QuoteDataTotalsInterface**](../Model/QuoteDataTotalsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


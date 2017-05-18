# SpringImport\Magento2SwaggerApi\CheckoutGuestTotalsInformationManagementV1Api

All URIs are relative to *http://springimport.dev/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkoutGuestTotalsInformationManagementV1CalculatePost**](CheckoutGuestTotalsInformationManagementV1Api.md#checkoutGuestTotalsInformationManagementV1CalculatePost) | **POST** /V1/guest-carts/{cartId}/totals-information | 


# **checkoutGuestTotalsInformationManagementV1CalculatePost**
> \SpringImport\Magento2SwaggerApi\Model\QuoteDataTotalsInterface checkoutGuestTotalsInformationManagementV1CalculatePost($cartId, $body)



Calculate quote totals based on address and shipping method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Magento2SwaggerApi\Api\CheckoutGuestTotalsInformationManagementV1Api();
$cartId = "cartId_example"; // string | 
$body = new \SpringImport\Magento2SwaggerApi\Model\Body11(); // \SpringImport\Magento2SwaggerApi\Model\Body11 | 

try {
    $result = $api_instance->checkoutGuestTotalsInformationManagementV1CalculatePost($cartId, $body);
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
 **body** | [**\SpringImport\Magento2SwaggerApi\Model\Body11**](../Model/\SpringImport\Magento2SwaggerApi\Model\Body11.md)|  | [optional]

### Return type

[**\SpringImport\Magento2SwaggerApi\Model\QuoteDataTotalsInterface**](../Model/QuoteDataTotalsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


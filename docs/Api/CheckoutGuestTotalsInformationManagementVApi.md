# Swagger\Client\CheckoutGuestTotalsInformationManagementVApi

All URIs are relative to *http://springimport.net/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkoutGuestTotalsInformationManagementV1CalculatePost**](CheckoutGuestTotalsInformationManagementVApi.md#checkoutGuestTotalsInformationManagementV1CalculatePost) | **POST** /V1/guest-carts/{cartId}/totals-information | 


# **checkoutGuestTotalsInformationManagementV1CalculatePost**
> \Swagger\Client\Model\QuoteDataTotalsInterface checkoutGuestTotalsInformationManagementV1CalculatePost($cart_id, $body)



Calculate quote totals based on address and shipping method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CheckoutGuestTotalsInformationManagementVApi();
$cart_id = "cart_id_example"; // string | 
$body = new \Swagger\Client\Model\Body15(); // \Swagger\Client\Model\Body15 | 

try {
    $result = $api_instance->checkoutGuestTotalsInformationManagementV1CalculatePost($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutGuestTotalsInformationManagementVApi->checkoutGuestTotalsInformationManagementV1CalculatePost: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**|  | 
 **body** | [**\Swagger\Client\Model\Body15**](../Model/\Swagger\Client\Model\Body15.md)|  | [optional] 

### Return type

[**\Swagger\Client\Model\QuoteDataTotalsInterface**](../Model/QuoteDataTotalsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


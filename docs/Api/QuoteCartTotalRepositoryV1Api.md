# SpringImport\Swagger\Magento2\Client\QuoteCartTotalRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteCartTotalRepositoryV1GetGet**](QuoteCartTotalRepositoryV1Api.md#quoteCartTotalRepositoryV1GetGet) | **GET** /V1/carts/{cartId}/totals | 
[**quoteCartTotalRepositoryV1GetGet_0**](QuoteCartTotalRepositoryV1Api.md#quoteCartTotalRepositoryV1GetGet_0) | **GET** /V1/carts/mine/totals | 


# **quoteCartTotalRepositoryV1GetGet**
> \SpringImport\Swagger\Magento2\Client\Model\QuoteDataTotalsInterface quoteCartTotalRepositoryV1GetGet($cartId)



Returns quote totals data for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\QuoteCartTotalRepositoryV1Api();
$cartId = 56; // int | The cart ID.

try {
    $result = $api_instance->quoteCartTotalRepositoryV1GetGet($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartTotalRepositoryV1Api->quoteCartTotalRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
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

# **quoteCartTotalRepositoryV1GetGet_0**
> \SpringImport\Swagger\Magento2\Client\Model\QuoteDataTotalsInterface quoteCartTotalRepositoryV1GetGet_0()



Returns quote totals data for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\QuoteCartTotalRepositoryV1Api();

try {
    $result = $api_instance->quoteCartTotalRepositoryV1GetGet_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartTotalRepositoryV1Api->quoteCartTotalRepositoryV1GetGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\QuoteDataTotalsInterface**](../Model/QuoteDataTotalsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


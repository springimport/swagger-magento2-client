# SpringImport\Swagger\Magento2\Client\SalesInvoiceOrderV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesInvoiceOrderV1ExecutePost**](SalesInvoiceOrderV1Api.md#salesInvoiceOrderV1ExecutePost) | **POST** /V1/order/{orderId}/invoice | 


# **salesInvoiceOrderV1ExecutePost**
> int salesInvoiceOrderV1ExecutePost($orderId, $body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\SalesInvoiceOrderV1Api();
$orderId = 56; // int | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body86(); // \SpringImport\Swagger\Magento2\Client\Model\Body86 | 

try {
    $result = $api_instance->salesInvoiceOrderV1ExecutePost($orderId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceOrderV1Api->salesInvoiceOrderV1ExecutePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body86**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body86.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


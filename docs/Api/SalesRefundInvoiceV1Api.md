# SpringImport\Swagger\Magento2\Client\SalesRefundInvoiceV1Api

All URIs are relative to *http://hb.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesRefundInvoiceV1ExecutePost**](SalesRefundInvoiceV1Api.md#salesRefundInvoiceV1ExecutePost) | **POST** /V1/invoice/{invoiceId}/refund | 


# **salesRefundInvoiceV1ExecutePost**
> int salesRefundInvoiceV1ExecutePost($invoiceId, $body)



Create refund for invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\SalesRefundInvoiceV1Api();
$invoiceId = 56; // int | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body90(); // \SpringImport\Swagger\Magento2\Client\Model\Body90 | 

try {
    $result = $api_instance->salesRefundInvoiceV1ExecutePost($invoiceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRefundInvoiceV1Api->salesRefundInvoiceV1ExecutePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoiceId** | **int**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body90**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body90.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


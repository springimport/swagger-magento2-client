# SpringImport\Swagger\Magento2\Client\SalesShipOrderV1Api

All URIs are relative to *http://example.com/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesShipOrderV1ExecutePost**](SalesShipOrderV1Api.md#salesShipOrderV1ExecutePost) | **POST** /V1/order/{orderId}/ship | 


# **salesShipOrderV1ExecutePost**
> int salesShipOrderV1ExecutePost($orderId, $body)



Creates new Shipment for given Order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\SalesShipOrderV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderId = 56; // int | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body99(); // \SpringImport\Swagger\Magento2\Client\Model\Body99 | 

try {
    $result = $apiInstance->salesShipOrderV1ExecutePost($orderId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesShipOrderV1Api->salesShipOrderV1ExecutePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body99**](../Model/Body99.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# SpringImport\Swagger\Magento2\Client\SalesOrderAddressRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesOrderAddressRepositoryV1SavePut**](SalesOrderAddressRepositoryV1Api.md#salesOrderAddressRepositoryV1SavePut) | **PUT** /V1/orders/{parent_id} | 


# **salesOrderAddressRepositoryV1SavePut**
> \SpringImport\Swagger\Magento2\Client\Model\SalesDataOrderAddressInterface salesOrderAddressRepositoryV1SavePut($parentId, $body)



Performs persist operations for a specified order address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\SalesOrderAddressRepositoryV1Api();
$parentId = "parentId_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body74(); // \SpringImport\Swagger\Magento2\Client\Model\Body74 | 

try {
    $result = $api_instance->salesOrderAddressRepositoryV1SavePut($parentId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderAddressRepositoryV1Api->salesOrderAddressRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentId** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body74**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body74.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\SalesDataOrderAddressInterface**](../Model/SalesDataOrderAddressInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


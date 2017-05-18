# SpringImport\Swagger\Magento2\Client\SalesCreditmemoCommentRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesCreditmemoCommentRepositoryV1SavePost**](SalesCreditmemoCommentRepositoryV1Api.md#salesCreditmemoCommentRepositoryV1SavePost) | **POST** /V1/creditmemo/{id}/comments | 


# **salesCreditmemoCommentRepositoryV1SavePost**
> \SpringImport\Swagger\Magento2\Client\Model\SalesDataCreditmemoCommentInterface salesCreditmemoCommentRepositoryV1SavePost($id, $body)



Performs persist operations for a specified entity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\SalesCreditmemoCommentRepositoryV1Api();
$id = "id_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body78(); // \SpringImport\Swagger\Magento2\Client\Model\Body78 | 

try {
    $result = $api_instance->salesCreditmemoCommentRepositoryV1SavePost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditmemoCommentRepositoryV1Api->salesCreditmemoCommentRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body78**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body78.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\SalesDataCreditmemoCommentInterface**](../Model/SalesDataCreditmemoCommentInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


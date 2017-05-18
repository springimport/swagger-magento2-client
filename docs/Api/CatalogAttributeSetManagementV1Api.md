# SpringImport\Swagger\Magento2\Client\CatalogAttributeSetManagementV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogAttributeSetManagementV1CreatePost**](CatalogAttributeSetManagementV1Api.md#catalogAttributeSetManagementV1CreatePost) | **POST** /V1/products/attribute-sets | 


# **catalogAttributeSetManagementV1CreatePost**
> \SpringImport\Swagger\Magento2\Client\Model\EavDataAttributeSetInterface catalogAttributeSetManagementV1CreatePost($body)



Create attribute set from data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CatalogAttributeSetManagementV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body23(); // \SpringImport\Swagger\Magento2\Client\Model\Body23 | 

try {
    $result = $api_instance->catalogAttributeSetManagementV1CreatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogAttributeSetManagementV1Api->catalogAttributeSetManagementV1CreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body23**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body23.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\EavDataAttributeSetInterface**](../Model/EavDataAttributeSetInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# SpringImport\Swagger\Magento2\Client\EavAttributeSetManagementV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eavAttributeSetManagementV1CreatePost**](EavAttributeSetManagementV1Api.md#eavAttributeSetManagementV1CreatePost) | **POST** /V1/eav/attribute-sets | 


# **eavAttributeSetManagementV1CreatePost**
> \SpringImport\Swagger\Magento2\Client\Model\EavDataAttributeSetInterface eavAttributeSetManagementV1CreatePost($body)



Create attribute set from data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\EavAttributeSetManagementV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body1(); // \SpringImport\Swagger\Magento2\Client\Model\Body1 | 

try {
    $result = $api_instance->eavAttributeSetManagementV1CreatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EavAttributeSetManagementV1Api->eavAttributeSetManagementV1CreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body1**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body1.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\EavDataAttributeSetInterface**](../Model/EavDataAttributeSetInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


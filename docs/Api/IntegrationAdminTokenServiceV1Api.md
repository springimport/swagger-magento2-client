# SpringImport\Magento2SwaggerApi\IntegrationAdminTokenServiceV1Api

All URIs are relative to *http://springimport.dev/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**integrationAdminTokenServiceV1CreateAdminAccessTokenPost**](IntegrationAdminTokenServiceV1Api.md#integrationAdminTokenServiceV1CreateAdminAccessTokenPost) | **POST** /V1/integration/admin/token | 


# **integrationAdminTokenServiceV1CreateAdminAccessTokenPost**
> string integrationAdminTokenServiceV1CreateAdminAccessTokenPost($body)



Create access token for admin given the admin credentials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Magento2SwaggerApi\Api\IntegrationAdminTokenServiceV1Api();
$body = new \SpringImport\Magento2SwaggerApi\Model\Body16(); // \SpringImport\Magento2SwaggerApi\Model\Body16 | 

try {
    $result = $api_instance->integrationAdminTokenServiceV1CreateAdminAccessTokenPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationAdminTokenServiceV1Api->integrationAdminTokenServiceV1CreateAdminAccessTokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Magento2SwaggerApi\Model\Body16**](../Model/\SpringImport\Magento2SwaggerApi\Model\Body16.md)|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


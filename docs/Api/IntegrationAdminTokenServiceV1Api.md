# SpringImport\Swagger\Magento2\Client\IntegrationAdminTokenServiceV1Api

All URIs are relative to *http://springimport.localhost/rest/all*

Method | HTTP request | Description
------------- | ------------- | -------------
[**integrationAdminTokenServiceV1CreateAdminAccessTokenPost**](IntegrationAdminTokenServiceV1Api.md#integrationAdminTokenServiceV1CreateAdminAccessTokenPost) | **POST** /V1/integration/admin/token | 


# **integrationAdminTokenServiceV1CreateAdminAccessTokenPost**
> string integrationAdminTokenServiceV1CreateAdminAccessTokenPost($integrationAdminTokenServiceV1CreateAdminAccessTokenPostBody)



Create access token for admin given the admin credentials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\IntegrationAdminTokenServiceV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$integrationAdminTokenServiceV1CreateAdminAccessTokenPostBody = new \SpringImport\Swagger\Magento2\Client\Model\IntegrationAdminTokenServiceV1CreateAdminAccessTokenPostBody(); // \SpringImport\Swagger\Magento2\Client\Model\IntegrationAdminTokenServiceV1CreateAdminAccessTokenPostBody | 

try {
    $result = $apiInstance->integrationAdminTokenServiceV1CreateAdminAccessTokenPost($integrationAdminTokenServiceV1CreateAdminAccessTokenPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationAdminTokenServiceV1Api->integrationAdminTokenServiceV1CreateAdminAccessTokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationAdminTokenServiceV1CreateAdminAccessTokenPostBody** | [**\SpringImport\Swagger\Magento2\Client\Model\IntegrationAdminTokenServiceV1CreateAdminAccessTokenPostBody**](../Model/IntegrationAdminTokenServiceV1CreateAdminAccessTokenPostBody.md)|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


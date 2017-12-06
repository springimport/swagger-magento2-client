# SpringImport\Swagger\Magento2\Client\SharedCatalogProductManagementV1Api

All URIs are relative to *http://hb.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sharedCatalogProductManagementV1AssignProductsPost**](SharedCatalogProductManagementV1Api.md#sharedCatalogProductManagementV1AssignProductsPost) | **POST** /V1/sharedCatalog/{id}/assignProducts | 
[**sharedCatalogProductManagementV1GetProductsGet**](SharedCatalogProductManagementV1Api.md#sharedCatalogProductManagementV1GetProductsGet) | **GET** /V1/sharedCatalog/{id}/products | 
[**sharedCatalogProductManagementV1UnassignProductsPost**](SharedCatalogProductManagementV1Api.md#sharedCatalogProductManagementV1UnassignProductsPost) | **POST** /V1/sharedCatalog/{id}/unassignProducts | 


# **sharedCatalogProductManagementV1AssignProductsPost**
> bool sharedCatalogProductManagementV1AssignProductsPost($id, $body)



Add products into the shared catalog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\SharedCatalogProductManagementV1Api();
$id = 56; // int | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body145(); // \SpringImport\Swagger\Magento2\Client\Model\Body145 | 

try {
    $result = $api_instance->sharedCatalogProductManagementV1AssignProductsPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedCatalogProductManagementV1Api->sharedCatalogProductManagementV1AssignProductsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body145**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body145.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharedCatalogProductManagementV1GetProductsGet**
> string[] sharedCatalogProductManagementV1GetProductsGet($id)



Return the list of product SKUs in the selected shared catalog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\SharedCatalogProductManagementV1Api();
$id = 56; // int | 

try {
    $result = $api_instance->sharedCatalogProductManagementV1GetProductsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedCatalogProductManagementV1Api->sharedCatalogProductManagementV1GetProductsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharedCatalogProductManagementV1UnassignProductsPost**
> bool sharedCatalogProductManagementV1UnassignProductsPost($id, $body)



Remove the specified products from the shared catalog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\SharedCatalogProductManagementV1Api();
$id = 56; // int | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body146(); // \SpringImport\Swagger\Magento2\Client\Model\Body146 | 

try {
    $result = $api_instance->sharedCatalogProductManagementV1UnassignProductsPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedCatalogProductManagementV1Api->sharedCatalogProductManagementV1UnassignProductsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body146**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body146.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


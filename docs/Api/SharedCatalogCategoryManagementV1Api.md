# SpringImport\Swagger\Magento2\Client\SharedCatalogCategoryManagementV1Api

All URIs are relative to *http://hb.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sharedCatalogCategoryManagementV1AssignCategoriesPost**](SharedCatalogCategoryManagementV1Api.md#sharedCatalogCategoryManagementV1AssignCategoriesPost) | **POST** /V1/sharedCatalog/{id}/assignCategories | 
[**sharedCatalogCategoryManagementV1GetCategoriesGet**](SharedCatalogCategoryManagementV1Api.md#sharedCatalogCategoryManagementV1GetCategoriesGet) | **GET** /V1/sharedCatalog/{id}/categories | 
[**sharedCatalogCategoryManagementV1UnassignCategoriesPost**](SharedCatalogCategoryManagementV1Api.md#sharedCatalogCategoryManagementV1UnassignCategoriesPost) | **POST** /V1/sharedCatalog/{id}/unassignCategories | 


# **sharedCatalogCategoryManagementV1AssignCategoriesPost**
> bool sharedCatalogCategoryManagementV1AssignCategoriesPost($id, $body)



Add categories into the shared catalog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\SharedCatalogCategoryManagementV1Api();
$id = 56; // int | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body147(); // \SpringImport\Swagger\Magento2\Client\Model\Body147 | 

try {
    $result = $api_instance->sharedCatalogCategoryManagementV1AssignCategoriesPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedCatalogCategoryManagementV1Api->sharedCatalogCategoryManagementV1AssignCategoriesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body147**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body147.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharedCatalogCategoryManagementV1GetCategoriesGet**
> int[] sharedCatalogCategoryManagementV1GetCategoriesGet($id)



Return the list of categories in the selected shared catalog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\SharedCatalogCategoryManagementV1Api();
$id = 56; // int | 

try {
    $result = $api_instance->sharedCatalogCategoryManagementV1GetCategoriesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedCatalogCategoryManagementV1Api->sharedCatalogCategoryManagementV1GetCategoriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

**int[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharedCatalogCategoryManagementV1UnassignCategoriesPost**
> bool sharedCatalogCategoryManagementV1UnassignCategoriesPost($id, $body)



Remove the specified categories from the shared catalog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\SharedCatalogCategoryManagementV1Api();
$id = 56; // int | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body148(); // \SpringImport\Swagger\Magento2\Client\Model\Body148 | 

try {
    $result = $api_instance->sharedCatalogCategoryManagementV1UnassignCategoriesPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedCatalogCategoryManagementV1Api->sharedCatalogCategoryManagementV1UnassignCategoriesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body148**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body148.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


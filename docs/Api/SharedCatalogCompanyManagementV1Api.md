# SpringImport\Swagger\Magento2\Client\SharedCatalogCompanyManagementV1Api

All URIs are relative to *http://hb.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sharedCatalogCompanyManagementV1AssignCompaniesPost**](SharedCatalogCompanyManagementV1Api.md#sharedCatalogCompanyManagementV1AssignCompaniesPost) | **POST** /V1/sharedCatalog/{sharedCatalogId}/assignCompanies | 
[**sharedCatalogCompanyManagementV1GetCompaniesGet**](SharedCatalogCompanyManagementV1Api.md#sharedCatalogCompanyManagementV1GetCompaniesGet) | **GET** /V1/sharedCatalog/{sharedCatalogId}/companies | 
[**sharedCatalogCompanyManagementV1UnassignCompaniesPost**](SharedCatalogCompanyManagementV1Api.md#sharedCatalogCompanyManagementV1UnassignCompaniesPost) | **POST** /V1/sharedCatalog/{sharedCatalogId}/unassignCompanies | 


# **sharedCatalogCompanyManagementV1AssignCompaniesPost**
> bool sharedCatalogCompanyManagementV1AssignCompaniesPost($sharedCatalogId, $body)



Assign companies to a shared catalog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\SharedCatalogCompanyManagementV1Api();
$sharedCatalogId = 56; // int | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body143(); // \SpringImport\Swagger\Magento2\Client\Model\Body143 | 

try {
    $result = $api_instance->sharedCatalogCompanyManagementV1AssignCompaniesPost($sharedCatalogId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedCatalogCompanyManagementV1Api->sharedCatalogCompanyManagementV1AssignCompaniesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sharedCatalogId** | **int**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body143**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body143.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharedCatalogCompanyManagementV1GetCompaniesGet**
> string sharedCatalogCompanyManagementV1GetCompaniesGet($sharedCatalogId)



Return the list of company IDs for the companies assigned to the selected catalog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\SharedCatalogCompanyManagementV1Api();
$sharedCatalogId = 56; // int | 

try {
    $result = $api_instance->sharedCatalogCompanyManagementV1GetCompaniesGet($sharedCatalogId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedCatalogCompanyManagementV1Api->sharedCatalogCompanyManagementV1GetCompaniesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sharedCatalogId** | **int**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharedCatalogCompanyManagementV1UnassignCompaniesPost**
> bool sharedCatalogCompanyManagementV1UnassignCompaniesPost($sharedCatalogId, $body)



Unassign companies from a shared catalog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\SharedCatalogCompanyManagementV1Api();
$sharedCatalogId = 56; // int | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body144(); // \SpringImport\Swagger\Magento2\Client\Model\Body144 | 

try {
    $result = $api_instance->sharedCatalogCompanyManagementV1UnassignCompaniesPost($sharedCatalogId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedCatalogCompanyManagementV1Api->sharedCatalogCompanyManagementV1UnassignCompaniesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sharedCatalogId** | **int**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body144**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body144.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


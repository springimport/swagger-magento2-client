# SpringImport\Swagger\Magento2\Client\CompanyRoleRepositoryV1Api

All URIs are relative to *http://hb.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyRoleRepositoryV1DeleteDelete**](CompanyRoleRepositoryV1Api.md#companyRoleRepositoryV1DeleteDelete) | **DELETE** /V1/company/role/{roleId} | 
[**companyRoleRepositoryV1GetGet**](CompanyRoleRepositoryV1Api.md#companyRoleRepositoryV1GetGet) | **GET** /V1/company/role/{roleId} | 
[**companyRoleRepositoryV1GetListGet**](CompanyRoleRepositoryV1Api.md#companyRoleRepositoryV1GetListGet) | **GET** /V1/company/role/ | 
[**companyRoleRepositoryV1SavePost**](CompanyRoleRepositoryV1Api.md#companyRoleRepositoryV1SavePost) | **POST** /V1/company/role/ | 
[**companyRoleRepositoryV1SavePut**](CompanyRoleRepositoryV1Api.md#companyRoleRepositoryV1SavePut) | **PUT** /V1/company/role/{id} | 


# **companyRoleRepositoryV1DeleteDelete**
> bool companyRoleRepositoryV1DeleteDelete($roleId)



Delete a role.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CompanyRoleRepositoryV1Api();
$roleId = 56; // int | 

try {
    $result = $api_instance->companyRoleRepositoryV1DeleteDelete($roleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyRoleRepositoryV1Api->companyRoleRepositoryV1DeleteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **roleId** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyRoleRepositoryV1GetGet**
> \SpringImport\Swagger\Magento2\Client\Model\CompanyDataRoleInterface companyRoleRepositoryV1GetGet($roleId)



Returns the list of permissions for a specified role.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CompanyRoleRepositoryV1Api();
$roleId = 56; // int | 

try {
    $result = $api_instance->companyRoleRepositoryV1GetGet($roleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyRoleRepositoryV1Api->companyRoleRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **roleId** | **int**|  |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CompanyDataRoleInterface**](../Model/CompanyDataRoleInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyRoleRepositoryV1GetListGet**
> \SpringImport\Swagger\Magento2\Client\Model\CompanyDataRoleSearchResultsInterface companyRoleRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Returns the list of roles and permissions for a specified company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CompanyRoleRepositoryV1Api();
$searchCriteriaFilterGroupsFiltersField = "searchCriteriaFilterGroupsFiltersField_example"; // string | Field
$searchCriteriaFilterGroupsFiltersValue = "searchCriteriaFilterGroupsFiltersValue_example"; // string | Value
$searchCriteriaFilterGroupsFiltersConditionType = "searchCriteriaFilterGroupsFiltersConditionType_example"; // string | Condition type
$searchCriteriaSortOrdersField = "searchCriteriaSortOrdersField_example"; // string | Sorting field.
$searchCriteriaSortOrdersDirection = "searchCriteriaSortOrdersDirection_example"; // string | Sorting direction.
$searchCriteriaPageSize = 56; // int | Page size.
$searchCriteriaCurrentPage = 56; // int | Current page.

try {
    $result = $api_instance->companyRoleRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyRoleRepositoryV1Api->companyRoleRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **searchCriteriaFilterGroupsFiltersField** | **string**| Field | [optional]
 **searchCriteriaFilterGroupsFiltersValue** | **string**| Value | [optional]
 **searchCriteriaFilterGroupsFiltersConditionType** | **string**| Condition type | [optional]
 **searchCriteriaSortOrdersField** | **string**| Sorting field. | [optional]
 **searchCriteriaSortOrdersDirection** | **string**| Sorting direction. | [optional]
 **searchCriteriaPageSize** | **int**| Page size. | [optional]
 **searchCriteriaCurrentPage** | **int**| Current page. | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CompanyDataRoleSearchResultsInterface**](../Model/CompanyDataRoleSearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyRoleRepositoryV1SavePost**
> \SpringImport\Swagger\Magento2\Client\Model\CompanyDataRoleInterface companyRoleRepositoryV1SavePost($body)



Create or update a role for a selected company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CompanyRoleRepositoryV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body136(); // \SpringImport\Swagger\Magento2\Client\Model\Body136 | 

try {
    $result = $api_instance->companyRoleRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyRoleRepositoryV1Api->companyRoleRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body136**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body136.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CompanyDataRoleInterface**](../Model/CompanyDataRoleInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyRoleRepositoryV1SavePut**
> \SpringImport\Swagger\Magento2\Client\Model\CompanyDataRoleInterface companyRoleRepositoryV1SavePut($id, $body)



Create or update a role for a selected company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CompanyRoleRepositoryV1Api();
$id = "id_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body137(); // \SpringImport\Swagger\Magento2\Client\Model\Body137 | 

try {
    $result = $api_instance->companyRoleRepositoryV1SavePut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyRoleRepositoryV1Api->companyRoleRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body137**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body137.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CompanyDataRoleInterface**](../Model/CompanyDataRoleInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


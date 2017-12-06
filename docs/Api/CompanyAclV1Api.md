# SpringImport\Swagger\Magento2\Client\CompanyAclV1Api

All URIs are relative to *http://hb.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyAclV1AssignRolesPut**](CompanyAclV1Api.md#companyAclV1AssignRolesPut) | **PUT** /V1/company/assignRoles | 
[**companyAclV1GetUsersByRoleIdGet**](CompanyAclV1Api.md#companyAclV1GetUsersByRoleIdGet) | **GET** /V1/company/role/{roleId}/users | 


# **companyAclV1AssignRolesPut**
> bool companyAclV1AssignRolesPut($body)



Change a role for a company user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CompanyAclV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body138(); // \SpringImport\Swagger\Magento2\Client\Model\Body138 | 

try {
    $result = $api_instance->companyAclV1AssignRolesPut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyAclV1Api->companyAclV1AssignRolesPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body138**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body138.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyAclV1GetUsersByRoleIdGet**
> \SpringImport\Swagger\Magento2\Client\Model\CustomerDataCustomerInterface[] companyAclV1GetUsersByRoleIdGet($roleId)



View the list of company users assigned to a specified role.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CompanyAclV1Api();
$roleId = 56; // int | 

try {
    $result = $api_instance->companyAclV1GetUsersByRoleIdGet($roleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyAclV1Api->companyAclV1GetUsersByRoleIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **roleId** | **int**|  |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CustomerDataCustomerInterface[]**](../Model/CustomerDataCustomerInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


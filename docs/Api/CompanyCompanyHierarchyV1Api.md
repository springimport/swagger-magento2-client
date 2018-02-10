# SpringImport\Swagger\Magento2\Client\CompanyCompanyHierarchyV1Api

All URIs are relative to *http://example.com/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyCompanyHierarchyV1GetCompanyHierarchyGet**](CompanyCompanyHierarchyV1Api.md#companyCompanyHierarchyV1GetCompanyHierarchyGet) | **GET** /V1/hierarchy/{id} | 
[**companyCompanyHierarchyV1MoveNodePut**](CompanyCompanyHierarchyV1Api.md#companyCompanyHierarchyV1MoveNodePut) | **PUT** /V1/hierarchy/move/{id} | 


# **companyCompanyHierarchyV1GetCompanyHierarchyGet**
> \SpringImport\Swagger\Magento2\Client\Model\CompanyDataHierarchyInterface[] companyCompanyHierarchyV1GetCompanyHierarchyGet($id)



Returns the list of teams and company users in the company structure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CompanyCompanyHierarchyV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->companyCompanyHierarchyV1GetCompanyHierarchyGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyCompanyHierarchyV1Api->companyCompanyHierarchyV1GetCompanyHierarchyGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CompanyDataHierarchyInterface[]**](../Model/CompanyDataHierarchyInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCompanyHierarchyV1MoveNodePut**
> \SpringImport\Swagger\Magento2\Client\Model\ErrorResponse companyCompanyHierarchyV1MoveNodePut($id, $body)



Moves teams and users within the company structure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CompanyCompanyHierarchyV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body136(); // \SpringImport\Swagger\Magento2\Client\Model\Body136 | 

try {
    $result = $apiInstance->companyCompanyHierarchyV1MoveNodePut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyCompanyHierarchyV1Api->companyCompanyHierarchyV1MoveNodePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body136**](../Model/Body136.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse**](../Model/ErrorResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


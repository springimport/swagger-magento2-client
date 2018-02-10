# SpringImport\Swagger\Magento2\Client\CompanyCompanyRepositoryV1Api

All URIs are relative to *http://example.com/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyCompanyRepositoryV1DeleteByIdDelete**](CompanyCompanyRepositoryV1Api.md#companyCompanyRepositoryV1DeleteByIdDelete) | **DELETE** /V1/company/{companyId} | 
[**companyCompanyRepositoryV1GetGet**](CompanyCompanyRepositoryV1Api.md#companyCompanyRepositoryV1GetGet) | **GET** /V1/company/{companyId} | 
[**companyCompanyRepositoryV1GetListGet**](CompanyCompanyRepositoryV1Api.md#companyCompanyRepositoryV1GetListGet) | **GET** /V1/company/ | 
[**companyCompanyRepositoryV1SavePost**](CompanyCompanyRepositoryV1Api.md#companyCompanyRepositoryV1SavePost) | **POST** /V1/company/ | 
[**companyCompanyRepositoryV1SavePut**](CompanyCompanyRepositoryV1Api.md#companyCompanyRepositoryV1SavePut) | **PUT** /V1/company/{companyId} | 


# **companyCompanyRepositoryV1DeleteByIdDelete**
> bool companyCompanyRepositoryV1DeleteByIdDelete($companyId)



Delete a company. Customers belonging to a company are not deleted with this request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CompanyCompanyRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$companyId = 56; // int | 

try {
    $result = $apiInstance->companyCompanyRepositoryV1DeleteByIdDelete($companyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyCompanyRepositoryV1Api->companyCompanyRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **companyId** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCompanyRepositoryV1GetGet**
> \SpringImport\Swagger\Magento2\Client\Model\CompanyDataCompanyInterface companyCompanyRepositoryV1GetGet($companyId)



Returns company details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CompanyCompanyRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$companyId = 56; // int | 

try {
    $result = $apiInstance->companyCompanyRepositoryV1GetGet($companyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyCompanyRepositoryV1Api->companyCompanyRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **companyId** | **int**|  |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CompanyDataCompanyInterface**](../Model/CompanyDataCompanyInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCompanyRepositoryV1GetListGet**
> \SpringImport\Swagger\Magento2\Client\Model\CompanyDataCompanySearchResultsInterface companyCompanyRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Returns the list of companies. The list is an array of objects, and detailed information about item attributes might not be included.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CompanyCompanyRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$searchCriteriaFilterGroupsFiltersField = "searchCriteriaFilterGroupsFiltersField_example"; // string | Field
$searchCriteriaFilterGroupsFiltersValue = "searchCriteriaFilterGroupsFiltersValue_example"; // string | Value
$searchCriteriaFilterGroupsFiltersConditionType = "searchCriteriaFilterGroupsFiltersConditionType_example"; // string | Condition type
$searchCriteriaSortOrdersField = "searchCriteriaSortOrdersField_example"; // string | Sorting field.
$searchCriteriaSortOrdersDirection = "searchCriteriaSortOrdersDirection_example"; // string | Sorting direction.
$searchCriteriaPageSize = 56; // int | Page size.
$searchCriteriaCurrentPage = 56; // int | Current page.

try {
    $result = $apiInstance->companyCompanyRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyCompanyRepositoryV1Api->companyCompanyRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\SpringImport\Swagger\Magento2\Client\Model\CompanyDataCompanySearchResultsInterface**](../Model/CompanyDataCompanySearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCompanyRepositoryV1SavePost**
> \SpringImport\Swagger\Magento2\Client\Model\CompanyDataCompanyInterface companyCompanyRepositoryV1SavePost($body)



Create or update a company account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CompanyCompanyRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body132(); // \SpringImport\Swagger\Magento2\Client\Model\Body132 | 

try {
    $result = $apiInstance->companyCompanyRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyCompanyRepositoryV1Api->companyCompanyRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body132**](../Model/Body132.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CompanyDataCompanyInterface**](../Model/CompanyDataCompanyInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCompanyRepositoryV1SavePut**
> \SpringImport\Swagger\Magento2\Client\Model\CompanyDataCompanyInterface companyCompanyRepositoryV1SavePut($companyId, $body)



Create or update a company account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CompanyCompanyRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$companyId = "companyId_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body133(); // \SpringImport\Swagger\Magento2\Client\Model\Body133 | 

try {
    $result = $apiInstance->companyCompanyRepositoryV1SavePut($companyId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyCompanyRepositoryV1Api->companyCompanyRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **companyId** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body133**](../Model/Body133.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CompanyDataCompanyInterface**](../Model/CompanyDataCompanyInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


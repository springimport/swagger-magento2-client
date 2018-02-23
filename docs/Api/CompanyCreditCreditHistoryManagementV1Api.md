# SpringImport\Swagger\Magento2\Client\CompanyCreditCreditHistoryManagementV1Api

All URIs are relative to *http://example.com/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyCreditCreditHistoryManagementV1GetListGet**](CompanyCreditCreditHistoryManagementV1Api.md#companyCreditCreditHistoryManagementV1GetListGet) | **GET** /V1/companyCredits/history | 
[**companyCreditCreditHistoryManagementV1UpdatePut**](CompanyCreditCreditHistoryManagementV1Api.md#companyCreditCreditHistoryManagementV1UpdatePut) | **PUT** /V1/companyCredits/history/{historyId} | 


# **companyCreditCreditHistoryManagementV1GetListGet**
> \SpringImport\Swagger\Magento2\Client\Model\CompanyCreditDataHistorySearchResultsInterface companyCreditCreditHistoryManagementV1GetListGet($searchCriteria)



Returns the credit history for one or more companies.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CompanyCreditCreditHistoryManagementV1Api(
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
    $result = $apiInstance->companyCreditCreditHistoryManagementV1GetListGet($searchCriteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyCreditCreditHistoryManagementV1Api->companyCreditCreditHistoryManagementV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\SpringImport\Swagger\Magento2\Client\Model\CompanyCreditDataHistorySearchResultsInterface**](../Model/CompanyCreditDataHistorySearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCreditCreditHistoryManagementV1UpdatePut**
> bool companyCreditCreditHistoryManagementV1UpdatePut($historyId, $body)



Update the PO Number and/or comment for a Reimburse transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CompanyCreditCreditHistoryManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$historyId = 56; // int | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body183(); // \SpringImport\Swagger\Magento2\Client\Model\Body183 | 

try {
    $result = $apiInstance->companyCreditCreditHistoryManagementV1UpdatePut($historyId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyCreditCreditHistoryManagementV1Api->companyCreditCreditHistoryManagementV1UpdatePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **historyId** | **int**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body183**](../Model/Body183.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


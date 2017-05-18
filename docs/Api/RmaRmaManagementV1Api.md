# SpringImport\Swagger\Magento2\Client\RmaRmaManagementV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**rmaRmaManagementV1SaveRmaPost**](RmaRmaManagementV1Api.md#rmaRmaManagementV1SaveRmaPost) | **POST** /V1/returns | 
[**rmaRmaManagementV1SaveRmaPut**](RmaRmaManagementV1Api.md#rmaRmaManagementV1SaveRmaPut) | **PUT** /V1/returns/{id} | 
[**rmaRmaManagementV1SearchGet**](RmaRmaManagementV1Api.md#rmaRmaManagementV1SearchGet) | **GET** /V1/returns | 


# **rmaRmaManagementV1SaveRmaPost**
> \SpringImport\Swagger\Magento2\Client\Model\RmaDataRmaInterface rmaRmaManagementV1SaveRmaPost($body)



Save RMA

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\RmaRmaManagementV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body135(); // \SpringImport\Swagger\Magento2\Client\Model\Body135 | 

try {
    $result = $api_instance->rmaRmaManagementV1SaveRmaPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaRmaManagementV1Api->rmaRmaManagementV1SaveRmaPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body135**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body135.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\RmaDataRmaInterface**](../Model/RmaDataRmaInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rmaRmaManagementV1SaveRmaPut**
> \SpringImport\Swagger\Magento2\Client\Model\RmaDataRmaInterface rmaRmaManagementV1SaveRmaPut($id, $body)



Save RMA

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\RmaRmaManagementV1Api();
$id = "id_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body132(); // \SpringImport\Swagger\Magento2\Client\Model\Body132 | 

try {
    $result = $api_instance->rmaRmaManagementV1SaveRmaPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaRmaManagementV1Api->rmaRmaManagementV1SaveRmaPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body132**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body132.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\RmaDataRmaInterface**](../Model/RmaDataRmaInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rmaRmaManagementV1SearchGet**
> \SpringImport\Swagger\Magento2\Client\Model\RmaDataRmaSearchResultInterface rmaRmaManagementV1SearchGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Return list of rma data objects based on search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\RmaRmaManagementV1Api();
$searchCriteriaFilterGroupsFiltersField = "searchCriteriaFilterGroupsFiltersField_example"; // string | Field
$searchCriteriaFilterGroupsFiltersValue = "searchCriteriaFilterGroupsFiltersValue_example"; // string | Value
$searchCriteriaFilterGroupsFiltersConditionType = "searchCriteriaFilterGroupsFiltersConditionType_example"; // string | Condition type
$searchCriteriaSortOrdersField = "searchCriteriaSortOrdersField_example"; // string | Sorting field.
$searchCriteriaSortOrdersDirection = "searchCriteriaSortOrdersDirection_example"; // string | Sorting direction.
$searchCriteriaPageSize = 56; // int | Page size.
$searchCriteriaCurrentPage = 56; // int | Current page.

try {
    $result = $api_instance->rmaRmaManagementV1SearchGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaRmaManagementV1Api->rmaRmaManagementV1SearchGet: ', $e->getMessage(), PHP_EOL;
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

[**\SpringImport\Swagger\Magento2\Client\Model\RmaDataRmaSearchResultInterface**](../Model/RmaDataRmaSearchResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


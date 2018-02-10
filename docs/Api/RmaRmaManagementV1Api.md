# SpringImport\Swagger\Magento2\Client\RmaRmaManagementV1Api

All URIs are relative to *http://example.com/index.php/rest/default*

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

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\RmaRmaManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body179(); // \SpringImport\Swagger\Magento2\Client\Model\Body179 | 

try {
    $result = $apiInstance->rmaRmaManagementV1SaveRmaPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaRmaManagementV1Api->rmaRmaManagementV1SaveRmaPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body179**](../Model/Body179.md)|  | [optional]

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

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\RmaRmaManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body177(); // \SpringImport\Swagger\Magento2\Client\Model\Body177 | 

try {
    $result = $apiInstance->rmaRmaManagementV1SaveRmaPut($id, $body);
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
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body177**](../Model/Body177.md)|  | [optional]

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

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\RmaRmaManagementV1Api(
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
    $result = $apiInstance->rmaRmaManagementV1SearchGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
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


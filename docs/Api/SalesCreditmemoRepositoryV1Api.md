# SpringImport\Swagger\Magento2\Client\SalesCreditmemoRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesCreditmemoRepositoryV1GetGet**](SalesCreditmemoRepositoryV1Api.md#salesCreditmemoRepositoryV1GetGet) | **GET** /V1/creditmemo/{id} | 
[**salesCreditmemoRepositoryV1GetListGet**](SalesCreditmemoRepositoryV1Api.md#salesCreditmemoRepositoryV1GetListGet) | **GET** /V1/creditmemos | 
[**salesCreditmemoRepositoryV1SavePost**](SalesCreditmemoRepositoryV1Api.md#salesCreditmemoRepositoryV1SavePost) | **POST** /V1/creditmemo | 


# **salesCreditmemoRepositoryV1GetGet**
> \SpringImport\Swagger\Magento2\Client\Model\SalesDataCreditmemoInterface salesCreditmemoRepositoryV1GetGet($id)



Loads a specified credit memo.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\SalesCreditmemoRepositoryV1Api();
$id = 56; // int | The credit memo ID.

try {
    $result = $api_instance->salesCreditmemoRepositoryV1GetGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditmemoRepositoryV1Api->salesCreditmemoRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The credit memo ID. |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\SalesDataCreditmemoInterface**](../Model/SalesDataCreditmemoInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesCreditmemoRepositoryV1GetListGet**
> \SpringImport\Swagger\Magento2\Client\Model\SalesDataCreditmemoSearchResultInterface salesCreditmemoRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Lists credit memos that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#CreditmemoRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\SalesCreditmemoRepositoryV1Api();
$searchCriteriaFilterGroups0Filters0Field = "searchCriteriaFilterGroups0Filters0Field_example"; // string | Field
$searchCriteriaFilterGroups0Filters0Value = "searchCriteriaFilterGroups0Filters0Value_example"; // string | Value
$searchCriteriaFilterGroups0Filters0ConditionType = "searchCriteriaFilterGroups0Filters0ConditionType_example"; // string | Condition type
$searchCriteriaSortOrders0Field = "searchCriteriaSortOrders0Field_example"; // string | Sorting field.
$searchCriteriaSortOrders0Direction = "searchCriteriaSortOrders0Direction_example"; // string | Sorting direction.
$searchCriteriaPageSize = 56; // int | Page size.
$searchCriteriaCurrentPage = 56; // int | Current page.

try {
    $result = $api_instance->salesCreditmemoRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditmemoRepositoryV1Api->salesCreditmemoRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **searchCriteriaFilterGroups0Filters0Field** | **string**| Field | [optional]
 **searchCriteriaFilterGroups0Filters0Value** | **string**| Value | [optional]
 **searchCriteriaFilterGroups0Filters0ConditionType** | **string**| Condition type | [optional]
 **searchCriteriaSortOrders0Field** | **string**| Sorting field. | [optional]
 **searchCriteriaSortOrders0Direction** | **string**| Sorting direction. | [optional]
 **searchCriteriaPageSize** | **int**| Page size. | [optional]
 **searchCriteriaCurrentPage** | **int**| Current page. | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\SalesDataCreditmemoSearchResultInterface**](../Model/SalesDataCreditmemoSearchResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesCreditmemoRepositoryV1SavePost**
> \SpringImport\Swagger\Magento2\Client\Model\SalesDataCreditmemoInterface salesCreditmemoRepositoryV1SavePost($body)



Performs persist operations for a specified credit memo.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\SalesCreditmemoRepositoryV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body80(); // \SpringImport\Swagger\Magento2\Client\Model\Body80 | 

try {
    $result = $api_instance->salesCreditmemoRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditmemoRepositoryV1Api->salesCreditmemoRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body80**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body80.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\SalesDataCreditmemoInterface**](../Model/SalesDataCreditmemoInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


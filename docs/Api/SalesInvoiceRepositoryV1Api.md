# SpringImport\Swagger\Magento2\Client\SalesInvoiceRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesInvoiceRepositoryV1GetGet**](SalesInvoiceRepositoryV1Api.md#salesInvoiceRepositoryV1GetGet) | **GET** /V1/invoices/{id} | 
[**salesInvoiceRepositoryV1GetListGet**](SalesInvoiceRepositoryV1Api.md#salesInvoiceRepositoryV1GetListGet) | **GET** /V1/invoices | 
[**salesInvoiceRepositoryV1SavePost**](SalesInvoiceRepositoryV1Api.md#salesInvoiceRepositoryV1SavePost) | **POST** /V1/invoices/ | 


# **salesInvoiceRepositoryV1GetGet**
> \SpringImport\Swagger\Magento2\Client\Model\SalesDataInvoiceInterface salesInvoiceRepositoryV1GetGet($id)



Loads a specified invoice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\SalesInvoiceRepositoryV1Api();
$id = 56; // int | The invoice ID.

try {
    $result = $api_instance->salesInvoiceRepositoryV1GetGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceRepositoryV1Api->salesInvoiceRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The invoice ID. |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\SalesDataInvoiceInterface**](../Model/SalesDataInvoiceInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesInvoiceRepositoryV1GetListGet**
> \SpringImport\Swagger\Magento2\Client\Model\SalesDataInvoiceSearchResultInterface salesInvoiceRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Lists invoices that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#InvoiceRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\SalesInvoiceRepositoryV1Api();
$searchCriteriaFilterGroups0Filters0Field = "searchCriteriaFilterGroups0Filters0Field_example"; // string | Field
$searchCriteriaFilterGroups0Filters0Value = "searchCriteriaFilterGroups0Filters0Value_example"; // string | Value
$searchCriteriaFilterGroups0Filters0ConditionType = "searchCriteriaFilterGroups0Filters0ConditionType_example"; // string | Condition type
$searchCriteriaSortOrders0Field = "searchCriteriaSortOrders0Field_example"; // string | Sorting field.
$searchCriteriaSortOrders0Direction = "searchCriteriaSortOrders0Direction_example"; // string | Sorting direction.
$searchCriteriaPageSize = 56; // int | Page size.
$searchCriteriaCurrentPage = 56; // int | Current page.

try {
    $result = $api_instance->salesInvoiceRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceRepositoryV1Api->salesInvoiceRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\SpringImport\Swagger\Magento2\Client\Model\SalesDataInvoiceSearchResultInterface**](../Model/SalesDataInvoiceSearchResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesInvoiceRepositoryV1SavePost**
> \SpringImport\Swagger\Magento2\Client\Model\SalesDataInvoiceInterface salesInvoiceRepositoryV1SavePost($body)



Performs persist operations for a specified invoice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\SalesInvoiceRepositoryV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body75(); // \SpringImport\Swagger\Magento2\Client\Model\Body75 | 

try {
    $result = $api_instance->salesInvoiceRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceRepositoryV1Api->salesInvoiceRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body75**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body75.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\SalesDataInvoiceInterface**](../Model/SalesDataInvoiceInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


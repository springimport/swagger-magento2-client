# SpringImport\Swagger\Magento2\Client\SalesOrderRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesOrderRepositoryV1GetGet**](SalesOrderRepositoryV1Api.md#salesOrderRepositoryV1GetGet) | **GET** /V1/orders/{id} | 
[**salesOrderRepositoryV1GetListGet**](SalesOrderRepositoryV1Api.md#salesOrderRepositoryV1GetListGet) | **GET** /V1/orders | 
[**salesOrderRepositoryV1SavePost**](SalesOrderRepositoryV1Api.md#salesOrderRepositoryV1SavePost) | **POST** /V1/orders/ | 
[**salesOrderRepositoryV1SavePut**](SalesOrderRepositoryV1Api.md#salesOrderRepositoryV1SavePut) | **PUT** /V1/orders/create | 


# **salesOrderRepositoryV1GetGet**
> \SpringImport\Swagger\Magento2\Client\Model\SalesDataOrderInterface salesOrderRepositoryV1GetGet($id)



Loads a specified order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\SalesOrderRepositoryV1Api();
$id = 56; // int | The order ID.

try {
    $result = $api_instance->salesOrderRepositoryV1GetGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderRepositoryV1Api->salesOrderRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The order ID. |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\SalesDataOrderInterface**](../Model/SalesDataOrderInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderRepositoryV1GetListGet**
> \SpringImport\Swagger\Magento2\Client\Model\SalesDataOrderSearchResultInterface salesOrderRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Lists orders that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#OrderRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\SalesOrderRepositoryV1Api();
$searchCriteriaFilterGroups0Filters0Field = "searchCriteriaFilterGroups0Filters0Field_example"; // string | Field
$searchCriteriaFilterGroups0Filters0Value = "searchCriteriaFilterGroups0Filters0Value_example"; // string | Value
$searchCriteriaFilterGroups0Filters0ConditionType = "searchCriteriaFilterGroups0Filters0ConditionType_example"; // string | Condition type
$searchCriteriaSortOrders0Field = "searchCriteriaSortOrders0Field_example"; // string | Sorting field.
$searchCriteriaSortOrders0Direction = "searchCriteriaSortOrders0Direction_example"; // string | Sorting direction.
$searchCriteriaPageSize = 56; // int | Page size.
$searchCriteriaCurrentPage = 56; // int | Current page.

try {
    $result = $api_instance->salesOrderRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderRepositoryV1Api->salesOrderRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\SpringImport\Swagger\Magento2\Client\Model\SalesDataOrderSearchResultInterface**](../Model/SalesDataOrderSearchResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderRepositoryV1SavePost**
> \SpringImport\Swagger\Magento2\Client\Model\SalesDataOrderInterface salesOrderRepositoryV1SavePost($body)



Performs persist operations for a specified order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\SalesOrderRepositoryV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body72(); // \SpringImport\Swagger\Magento2\Client\Model\Body72 | 

try {
    $result = $api_instance->salesOrderRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderRepositoryV1Api->salesOrderRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body72**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body72.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\SalesDataOrderInterface**](../Model/SalesDataOrderInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderRepositoryV1SavePut**
> \SpringImport\Swagger\Magento2\Client\Model\SalesDataOrderInterface salesOrderRepositoryV1SavePut($body)



Performs persist operations for a specified order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\SalesOrderRepositoryV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body71(); // \SpringImport\Swagger\Magento2\Client\Model\Body71 | 

try {
    $result = $api_instance->salesOrderRepositoryV1SavePut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderRepositoryV1Api->salesOrderRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body71**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body71.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\SalesDataOrderInterface**](../Model/SalesDataOrderInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


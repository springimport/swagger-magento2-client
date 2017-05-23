# SpringImport\Swagger\Magento2\Client\CustomerCustomerRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerCustomerRepositoryV1DeleteByIdDelete**](CustomerCustomerRepositoryV1Api.md#customerCustomerRepositoryV1DeleteByIdDelete) | **DELETE** /V1/customers/{customerId} | 
[**customerCustomerRepositoryV1GetByIdGet**](CustomerCustomerRepositoryV1Api.md#customerCustomerRepositoryV1GetByIdGet) | **GET** /V1/customers/{customerId} | 
[**customerCustomerRepositoryV1GetByIdGet_0**](CustomerCustomerRepositoryV1Api.md#customerCustomerRepositoryV1GetByIdGet_0) | **GET** /V1/customers/me | 
[**customerCustomerRepositoryV1GetListGet**](CustomerCustomerRepositoryV1Api.md#customerCustomerRepositoryV1GetListGet) | **GET** /V1/customers/search | 
[**customerCustomerRepositoryV1SavePut**](CustomerCustomerRepositoryV1Api.md#customerCustomerRepositoryV1SavePut) | **PUT** /V1/customers/{id} | 
[**customerCustomerRepositoryV1SavePut_0**](CustomerCustomerRepositoryV1Api.md#customerCustomerRepositoryV1SavePut_0) | **PUT** /V1/customers/me | 


# **customerCustomerRepositoryV1DeleteByIdDelete**
> bool customerCustomerRepositoryV1DeleteByIdDelete($customerId)



Delete customer by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CustomerCustomerRepositoryV1Api();
$customerId = 56; // int | 

try {
    $result = $api_instance->customerCustomerRepositoryV1DeleteByIdDelete($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCustomerRepositoryV1Api->customerCustomerRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCustomerRepositoryV1GetByIdGet**
> \SpringImport\Swagger\Magento2\Client\Model\CustomerDataCustomerInterface customerCustomerRepositoryV1GetByIdGet($customerId)



Get customer by customer ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CustomerCustomerRepositoryV1Api();
$customerId = 56; // int | 

try {
    $result = $api_instance->customerCustomerRepositoryV1GetByIdGet($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCustomerRepositoryV1Api->customerCustomerRepositoryV1GetByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**|  |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CustomerDataCustomerInterface**](../Model/CustomerDataCustomerInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCustomerRepositoryV1GetByIdGet_0**
> \SpringImport\Swagger\Magento2\Client\Model\CustomerDataCustomerInterface customerCustomerRepositoryV1GetByIdGet_0()



Get customer by customer ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CustomerCustomerRepositoryV1Api();

try {
    $result = $api_instance->customerCustomerRepositoryV1GetByIdGet_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCustomerRepositoryV1Api->customerCustomerRepositoryV1GetByIdGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CustomerDataCustomerInterface**](../Model/CustomerDataCustomerInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCustomerRepositoryV1GetListGet**
> \SpringImport\Swagger\Magento2\Client\Model\CustomerDataCustomerSearchResultsInterface customerCustomerRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Retrieve customers which match a specified criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#CustomerRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CustomerCustomerRepositoryV1Api();
$searchCriteriaFilterGroups0Filters0Field = "searchCriteriaFilterGroups0Filters0Field_example"; // string | Field
$searchCriteriaFilterGroups0Filters0Value = "searchCriteriaFilterGroups0Filters0Value_example"; // string | Value
$searchCriteriaFilterGroups0Filters0ConditionType = "searchCriteriaFilterGroups0Filters0ConditionType_example"; // string | Condition type
$searchCriteriaSortOrders0Field = "searchCriteriaSortOrders0Field_example"; // string | Sorting field.
$searchCriteriaSortOrders0Direction = "searchCriteriaSortOrders0Direction_example"; // string | Sorting direction.
$searchCriteriaPageSize = 56; // int | Page size.
$searchCriteriaCurrentPage = 56; // int | Current page.

try {
    $result = $api_instance->customerCustomerRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCustomerRepositoryV1Api->customerCustomerRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\SpringImport\Swagger\Magento2\Client\Model\CustomerDataCustomerSearchResultsInterface**](../Model/CustomerDataCustomerSearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCustomerRepositoryV1SavePut**
> \SpringImport\Swagger\Magento2\Client\Model\CustomerDataCustomerInterface customerCustomerRepositoryV1SavePut($id, $body)



Create or update a customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CustomerCustomerRepositoryV1Api();
$id = "id_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body4(); // \SpringImport\Swagger\Magento2\Client\Model\Body4 | 

try {
    $result = $api_instance->customerCustomerRepositoryV1SavePut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCustomerRepositoryV1Api->customerCustomerRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body4**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body4.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CustomerDataCustomerInterface**](../Model/CustomerDataCustomerInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCustomerRepositoryV1SavePut_0**
> \SpringImport\Swagger\Magento2\Client\Model\CustomerDataCustomerInterface customerCustomerRepositoryV1SavePut_0($body)



Create or update a customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CustomerCustomerRepositoryV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body5(); // \SpringImport\Swagger\Magento2\Client\Model\Body5 | 

try {
    $result = $api_instance->customerCustomerRepositoryV1SavePut_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCustomerRepositoryV1Api->customerCustomerRepositoryV1SavePut_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body5**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body5.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CustomerDataCustomerInterface**](../Model/CustomerDataCustomerInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


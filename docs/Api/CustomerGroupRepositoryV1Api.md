# SpringImport\Swagger\Magento2\Client\CustomerGroupRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerGroupRepositoryV1DeleteByIdDelete**](CustomerGroupRepositoryV1Api.md#customerGroupRepositoryV1DeleteByIdDelete) | **DELETE** /V1/customerGroups/{id} | 
[**customerGroupRepositoryV1GetByIdGet**](CustomerGroupRepositoryV1Api.md#customerGroupRepositoryV1GetByIdGet) | **GET** /V1/customerGroups/{id} | 
[**customerGroupRepositoryV1GetListGet**](CustomerGroupRepositoryV1Api.md#customerGroupRepositoryV1GetListGet) | **GET** /V1/customerGroups/search | 
[**customerGroupRepositoryV1SavePost**](CustomerGroupRepositoryV1Api.md#customerGroupRepositoryV1SavePost) | **POST** /V1/customerGroups | 
[**customerGroupRepositoryV1SavePut**](CustomerGroupRepositoryV1Api.md#customerGroupRepositoryV1SavePut) | **PUT** /V1/customerGroups/{id} | 


# **customerGroupRepositoryV1DeleteByIdDelete**
> bool customerGroupRepositoryV1DeleteByIdDelete($id)



Delete customer group by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CustomerGroupRepositoryV1Api();
$id = 56; // int | 

try {
    $result = $api_instance->customerGroupRepositoryV1DeleteByIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupRepositoryV1Api->customerGroupRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGroupRepositoryV1GetByIdGet**
> \SpringImport\Swagger\Magento2\Client\Model\CustomerDataGroupInterface customerGroupRepositoryV1GetByIdGet($id)



Get customer group by group ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CustomerGroupRepositoryV1Api();
$id = 56; // int | 

try {
    $result = $api_instance->customerGroupRepositoryV1GetByIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupRepositoryV1Api->customerGroupRepositoryV1GetByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CustomerDataGroupInterface**](../Model/CustomerDataGroupInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGroupRepositoryV1GetListGet**
> \SpringImport\Swagger\Magento2\Client\Model\CustomerDataGroupSearchResultsInterface customerGroupRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Retrieve customer groups. The list of groups can be filtered to exclude the NOT_LOGGED_IN group using the first parameter and/or it can be filtered by tax class. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#GroupRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CustomerGroupRepositoryV1Api();
$searchCriteriaFilterGroups0Filters0Field = "searchCriteriaFilterGroups0Filters0Field_example"; // string | Field
$searchCriteriaFilterGroups0Filters0Value = "searchCriteriaFilterGroups0Filters0Value_example"; // string | Value
$searchCriteriaFilterGroups0Filters0ConditionType = "searchCriteriaFilterGroups0Filters0ConditionType_example"; // string | Condition type
$searchCriteriaSortOrders0Field = "searchCriteriaSortOrders0Field_example"; // string | Sorting field.
$searchCriteriaSortOrders0Direction = "searchCriteriaSortOrders0Direction_example"; // string | Sorting direction.
$searchCriteriaPageSize = 56; // int | Page size.
$searchCriteriaCurrentPage = 56; // int | Current page.

try {
    $result = $api_instance->customerGroupRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupRepositoryV1Api->customerGroupRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\SpringImport\Swagger\Magento2\Client\Model\CustomerDataGroupSearchResultsInterface**](../Model/CustomerDataGroupSearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGroupRepositoryV1SavePost**
> \SpringImport\Swagger\Magento2\Client\Model\CustomerDataGroupInterface customerGroupRepositoryV1SavePost($body)



Save customer group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CustomerGroupRepositoryV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body3(); // \SpringImport\Swagger\Magento2\Client\Model\Body3 | 

try {
    $result = $api_instance->customerGroupRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupRepositoryV1Api->customerGroupRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body3**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body3.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CustomerDataGroupInterface**](../Model/CustomerDataGroupInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGroupRepositoryV1SavePut**
> \SpringImport\Swagger\Magento2\Client\Model\CustomerDataGroupInterface customerGroupRepositoryV1SavePut($id, $body)



Save customer group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CustomerGroupRepositoryV1Api();
$id = "id_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body2(); // \SpringImport\Swagger\Magento2\Client\Model\Body2 | 

try {
    $result = $api_instance->customerGroupRepositoryV1SavePut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupRepositoryV1Api->customerGroupRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body2**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body2.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CustomerDataGroupInterface**](../Model/CustomerDataGroupInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


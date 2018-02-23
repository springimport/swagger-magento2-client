# SpringImport\Swagger\Magento2\Client\CustomerCustomerRepositoryV1Api

All URIs are relative to *http://example.com/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerCustomerRepositoryV1DeleteByIdDelete**](CustomerCustomerRepositoryV1Api.md#customerCustomerRepositoryV1DeleteByIdDelete) | **DELETE** /V1/customers/{customerId} | 
[**customerCustomerRepositoryV1GetByIdGet**](CustomerCustomerRepositoryV1Api.md#customerCustomerRepositoryV1GetByIdGet) | **GET** /V1/customers/{customerId} | 
[**customerCustomerRepositoryV1GetByIdGet_0**](CustomerCustomerRepositoryV1Api.md#customerCustomerRepositoryV1GetByIdGet_0) | **GET** /V1/customers/me | 
[**customerCustomerRepositoryV1GetListGet**](CustomerCustomerRepositoryV1Api.md#customerCustomerRepositoryV1GetListGet) | **GET** /V1/customers/search | 
[**customerCustomerRepositoryV1SavePut**](CustomerCustomerRepositoryV1Api.md#customerCustomerRepositoryV1SavePut) | **PUT** /V1/customers/{customerId} | 
[**customerCustomerRepositoryV1SavePut_0**](CustomerCustomerRepositoryV1Api.md#customerCustomerRepositoryV1SavePut_0) | **PUT** /V1/customers/me | 


# **customerCustomerRepositoryV1DeleteByIdDelete**
> bool customerCustomerRepositoryV1DeleteByIdDelete($customerId)



Delete customer by Customer ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CustomerCustomerRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customerId = 56; // int | 

try {
    $result = $apiInstance->customerCustomerRepositoryV1DeleteByIdDelete($customerId);
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



Get customer by Customer ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CustomerCustomerRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customerId = 56; // int | 

try {
    $result = $apiInstance->customerCustomerRepositoryV1GetByIdGet($customerId);
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



Get customer by Customer ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CustomerCustomerRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->customerCustomerRepositoryV1GetByIdGet_0();
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
> \SpringImport\Swagger\Magento2\Client\Model\CustomerDataCustomerSearchResultsInterface customerCustomerRepositoryV1GetListGet($searchCriteria)



Retrieve customers which match a specified criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#CustomerRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CustomerCustomerRepositoryV1Api(
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
    $result = $apiInstance->customerCustomerRepositoryV1GetListGet($searchCriteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCustomerRepositoryV1Api->customerCustomerRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\SpringImport\Swagger\Magento2\Client\Model\CustomerDataCustomerSearchResultsInterface**](../Model/CustomerDataCustomerSearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCustomerRepositoryV1SavePut**
> \SpringImport\Swagger\Magento2\Client\Model\CustomerDataCustomerInterface customerCustomerRepositoryV1SavePut($customerId, $body)



Create or update a customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CustomerCustomerRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customerId = "customerId_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body4(); // \SpringImport\Swagger\Magento2\Client\Model\Body4 | 

try {
    $result = $apiInstance->customerCustomerRepositoryV1SavePut($customerId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCustomerRepositoryV1Api->customerCustomerRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body4**](../Model/Body4.md)|  | [optional]

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

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CustomerCustomerRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body5(); // \SpringImport\Swagger\Magento2\Client\Model\Body5 | 

try {
    $result = $apiInstance->customerCustomerRepositoryV1SavePut_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCustomerRepositoryV1Api->customerCustomerRepositoryV1SavePut_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body5**](../Model/Body5.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CustomerDataCustomerInterface**](../Model/CustomerDataCustomerInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


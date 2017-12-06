# SpringImport\Swagger\Magento2\Client\TaxTaxClassRepositoryV1Api

All URIs are relative to *http://hb.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**taxTaxClassRepositoryV1DeleteByIdDelete**](TaxTaxClassRepositoryV1Api.md#taxTaxClassRepositoryV1DeleteByIdDelete) | **DELETE** /V1/taxClasses/{taxClassId} | 
[**taxTaxClassRepositoryV1GetGet**](TaxTaxClassRepositoryV1Api.md#taxTaxClassRepositoryV1GetGet) | **GET** /V1/taxClasses/{taxClassId} | 
[**taxTaxClassRepositoryV1GetListGet**](TaxTaxClassRepositoryV1Api.md#taxTaxClassRepositoryV1GetListGet) | **GET** /V1/taxClasses/search | 
[**taxTaxClassRepositoryV1SavePost**](TaxTaxClassRepositoryV1Api.md#taxTaxClassRepositoryV1SavePost) | **POST** /V1/taxClasses | 
[**taxTaxClassRepositoryV1SavePut**](TaxTaxClassRepositoryV1Api.md#taxTaxClassRepositoryV1SavePut) | **PUT** /V1/taxClasses/{classId} | 


# **taxTaxClassRepositoryV1DeleteByIdDelete**
> bool taxTaxClassRepositoryV1DeleteByIdDelete($taxClassId)



Delete a tax class with the given tax class id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\TaxTaxClassRepositoryV1Api();
$taxClassId = 56; // int | 

try {
    $result = $api_instance->taxTaxClassRepositoryV1DeleteByIdDelete($taxClassId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxClassRepositoryV1Api->taxTaxClassRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taxClassId** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxClassRepositoryV1GetGet**
> \SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxClassInterface taxTaxClassRepositoryV1GetGet($taxClassId)



Get a tax class with the given tax class id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\TaxTaxClassRepositoryV1Api();
$taxClassId = 56; // int | 

try {
    $result = $api_instance->taxTaxClassRepositoryV1GetGet($taxClassId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxClassRepositoryV1Api->taxTaxClassRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taxClassId** | **int**|  |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxClassInterface**](../Model/TaxDataTaxClassInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxClassRepositoryV1GetListGet**
> \SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxClassSearchResultsInterface taxTaxClassRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Retrieve tax classes which match a specific criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#TaxClassRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\TaxTaxClassRepositoryV1Api();
$searchCriteriaFilterGroupsFiltersField = "searchCriteriaFilterGroupsFiltersField_example"; // string | Field
$searchCriteriaFilterGroupsFiltersValue = "searchCriteriaFilterGroupsFiltersValue_example"; // string | Value
$searchCriteriaFilterGroupsFiltersConditionType = "searchCriteriaFilterGroupsFiltersConditionType_example"; // string | Condition type
$searchCriteriaSortOrdersField = "searchCriteriaSortOrdersField_example"; // string | Sorting field.
$searchCriteriaSortOrdersDirection = "searchCriteriaSortOrdersDirection_example"; // string | Sorting direction.
$searchCriteriaPageSize = 56; // int | Page size.
$searchCriteriaCurrentPage = 56; // int | Current page.

try {
    $result = $api_instance->taxTaxClassRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxClassRepositoryV1Api->taxTaxClassRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxClassSearchResultsInterface**](../Model/TaxDataTaxClassSearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxClassRepositoryV1SavePost**
> string taxTaxClassRepositoryV1SavePost($body)



Create a Tax Class

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\TaxTaxClassRepositoryV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body129(); // \SpringImport\Swagger\Magento2\Client\Model\Body129 | 

try {
    $result = $api_instance->taxTaxClassRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxClassRepositoryV1Api->taxTaxClassRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body129**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body129.md)|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxClassRepositoryV1SavePut**
> string taxTaxClassRepositoryV1SavePut($classId, $body)



Create a Tax Class

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\TaxTaxClassRepositoryV1Api();
$classId = "classId_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body130(); // \SpringImport\Swagger\Magento2\Client\Model\Body130 | 

try {
    $result = $api_instance->taxTaxClassRepositoryV1SavePut($classId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxClassRepositoryV1Api->taxTaxClassRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **classId** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body130**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body130.md)|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


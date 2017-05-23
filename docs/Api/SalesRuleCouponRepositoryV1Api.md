# SpringImport\Swagger\Magento2\Client\SalesRuleCouponRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesRuleCouponRepositoryV1DeleteByIdDelete**](SalesRuleCouponRepositoryV1Api.md#salesRuleCouponRepositoryV1DeleteByIdDelete) | **DELETE** /V1/coupons/{couponId} | 
[**salesRuleCouponRepositoryV1GetByIdGet**](SalesRuleCouponRepositoryV1Api.md#salesRuleCouponRepositoryV1GetByIdGet) | **GET** /V1/coupons/{couponId} | 
[**salesRuleCouponRepositoryV1GetListGet**](SalesRuleCouponRepositoryV1Api.md#salesRuleCouponRepositoryV1GetListGet) | **GET** /V1/coupons/search | 
[**salesRuleCouponRepositoryV1SavePost**](SalesRuleCouponRepositoryV1Api.md#salesRuleCouponRepositoryV1SavePost) | **POST** /V1/coupons | 
[**salesRuleCouponRepositoryV1SavePut**](SalesRuleCouponRepositoryV1Api.md#salesRuleCouponRepositoryV1SavePut) | **PUT** /V1/coupons/{couponId} | 


# **salesRuleCouponRepositoryV1DeleteByIdDelete**
> bool salesRuleCouponRepositoryV1DeleteByIdDelete($couponId)



Delete coupon by coupon id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\SalesRuleCouponRepositoryV1Api();
$couponId = 56; // int | 

try {
    $result = $api_instance->salesRuleCouponRepositoryV1DeleteByIdDelete($couponId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleCouponRepositoryV1Api->salesRuleCouponRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **couponId** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRuleCouponRepositoryV1GetByIdGet**
> \SpringImport\Swagger\Magento2\Client\Model\SalesRuleDataCouponInterface salesRuleCouponRepositoryV1GetByIdGet($couponId)



Get coupon by coupon id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\SalesRuleCouponRepositoryV1Api();
$couponId = 56; // int | 

try {
    $result = $api_instance->salesRuleCouponRepositoryV1GetByIdGet($couponId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleCouponRepositoryV1Api->salesRuleCouponRepositoryV1GetByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **couponId** | **int**|  |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\SalesRuleDataCouponInterface**](../Model/SalesRuleDataCouponInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRuleCouponRepositoryV1GetListGet**
> \SpringImport\Swagger\Magento2\Client\Model\SalesRuleDataCouponSearchResultInterface salesRuleCouponRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Retrieve a coupon using the specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#CouponRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\SalesRuleCouponRepositoryV1Api();
$searchCriteriaFilterGroups0Filters0Field = "searchCriteriaFilterGroups0Filters0Field_example"; // string | Field
$searchCriteriaFilterGroups0Filters0Value = "searchCriteriaFilterGroups0Filters0Value_example"; // string | Value
$searchCriteriaFilterGroups0Filters0ConditionType = "searchCriteriaFilterGroups0Filters0ConditionType_example"; // string | Condition type
$searchCriteriaSortOrders0Field = "searchCriteriaSortOrders0Field_example"; // string | Sorting field.
$searchCriteriaSortOrders0Direction = "searchCriteriaSortOrders0Direction_example"; // string | Sorting direction.
$searchCriteriaPageSize = 56; // int | Page size.
$searchCriteriaCurrentPage = 56; // int | Current page.

try {
    $result = $api_instance->salesRuleCouponRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleCouponRepositoryV1Api->salesRuleCouponRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\SpringImport\Swagger\Magento2\Client\Model\SalesRuleDataCouponSearchResultInterface**](../Model/SalesRuleDataCouponSearchResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRuleCouponRepositoryV1SavePost**
> \SpringImport\Swagger\Magento2\Client\Model\SalesRuleDataCouponInterface salesRuleCouponRepositoryV1SavePost($body)



Save a coupon.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\SalesRuleCouponRepositoryV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body90(); // \SpringImport\Swagger\Magento2\Client\Model\Body90 | 

try {
    $result = $api_instance->salesRuleCouponRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleCouponRepositoryV1Api->salesRuleCouponRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body90**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body90.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\SalesRuleDataCouponInterface**](../Model/SalesRuleDataCouponInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRuleCouponRepositoryV1SavePut**
> \SpringImport\Swagger\Magento2\Client\Model\SalesRuleDataCouponInterface salesRuleCouponRepositoryV1SavePut($couponId, $body)



Save a coupon.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\SalesRuleCouponRepositoryV1Api();
$couponId = "couponId_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body89(); // \SpringImport\Swagger\Magento2\Client\Model\Body89 | 

try {
    $result = $api_instance->salesRuleCouponRepositoryV1SavePut($couponId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleCouponRepositoryV1Api->salesRuleCouponRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **couponId** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body89**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body89.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\SalesRuleDataCouponInterface**](../Model/SalesRuleDataCouponInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


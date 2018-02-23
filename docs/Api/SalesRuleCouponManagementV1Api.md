# SpringImport\Swagger\Magento2\Client\SalesRuleCouponManagementV1Api

All URIs are relative to *http://springimport.localhost/rest/all*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesRuleCouponManagementV1DeleteByCodesPost**](SalesRuleCouponManagementV1Api.md#salesRuleCouponManagementV1DeleteByCodesPost) | **POST** /V1/coupons/deleteByCodes | 
[**salesRuleCouponManagementV1DeleteByIdsPost**](SalesRuleCouponManagementV1Api.md#salesRuleCouponManagementV1DeleteByIdsPost) | **POST** /V1/coupons/deleteByIds | 
[**salesRuleCouponManagementV1GeneratePost**](SalesRuleCouponManagementV1Api.md#salesRuleCouponManagementV1GeneratePost) | **POST** /V1/coupons/generate | 


# **salesRuleCouponManagementV1DeleteByCodesPost**
> \SpringImport\Swagger\Magento2\Client\Model\SalesRuleDataCouponMassDeleteResultInterface salesRuleCouponManagementV1DeleteByCodesPost($salesRuleCouponManagementV1DeleteByCodesPostBody)



Delete coupon by coupon codes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\SalesRuleCouponManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$salesRuleCouponManagementV1DeleteByCodesPostBody = new \SpringImport\Swagger\Magento2\Client\Model\SalesRuleCouponManagementV1DeleteByCodesPostBody(); // \SpringImport\Swagger\Magento2\Client\Model\SalesRuleCouponManagementV1DeleteByCodesPostBody | 

try {
    $result = $apiInstance->salesRuleCouponManagementV1DeleteByCodesPost($salesRuleCouponManagementV1DeleteByCodesPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleCouponManagementV1Api->salesRuleCouponManagementV1DeleteByCodesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **salesRuleCouponManagementV1DeleteByCodesPostBody** | [**\SpringImport\Swagger\Magento2\Client\Model\SalesRuleCouponManagementV1DeleteByCodesPostBody**](../Model/SalesRuleCouponManagementV1DeleteByCodesPostBody.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\SalesRuleDataCouponMassDeleteResultInterface**](../Model/SalesRuleDataCouponMassDeleteResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRuleCouponManagementV1DeleteByIdsPost**
> \SpringImport\Swagger\Magento2\Client\Model\SalesRuleDataCouponMassDeleteResultInterface salesRuleCouponManagementV1DeleteByIdsPost($salesRuleCouponManagementV1DeleteByIdsPostBody)



Delete coupon by coupon ids.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\SalesRuleCouponManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$salesRuleCouponManagementV1DeleteByIdsPostBody = new \SpringImport\Swagger\Magento2\Client\Model\SalesRuleCouponManagementV1DeleteByIdsPostBody(); // \SpringImport\Swagger\Magento2\Client\Model\SalesRuleCouponManagementV1DeleteByIdsPostBody | 

try {
    $result = $apiInstance->salesRuleCouponManagementV1DeleteByIdsPost($salesRuleCouponManagementV1DeleteByIdsPostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleCouponManagementV1Api->salesRuleCouponManagementV1DeleteByIdsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **salesRuleCouponManagementV1DeleteByIdsPostBody** | [**\SpringImport\Swagger\Magento2\Client\Model\SalesRuleCouponManagementV1DeleteByIdsPostBody**](../Model/SalesRuleCouponManagementV1DeleteByIdsPostBody.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\SalesRuleDataCouponMassDeleteResultInterface**](../Model/SalesRuleDataCouponMassDeleteResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRuleCouponManagementV1GeneratePost**
> string[] salesRuleCouponManagementV1GeneratePost($salesRuleCouponManagementV1GeneratePostBody)



Generate coupon for a rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\SalesRuleCouponManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$salesRuleCouponManagementV1GeneratePostBody = new \SpringImport\Swagger\Magento2\Client\Model\SalesRuleCouponManagementV1GeneratePostBody(); // \SpringImport\Swagger\Magento2\Client\Model\SalesRuleCouponManagementV1GeneratePostBody | 

try {
    $result = $apiInstance->salesRuleCouponManagementV1GeneratePost($salesRuleCouponManagementV1GeneratePostBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleCouponManagementV1Api->salesRuleCouponManagementV1GeneratePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **salesRuleCouponManagementV1GeneratePostBody** | [**\SpringImport\Swagger\Magento2\Client\Model\SalesRuleCouponManagementV1GeneratePostBody**](../Model/SalesRuleCouponManagementV1GeneratePostBody.md)|  | [optional]

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# SpringImport\Swagger\Magento2\Client\BundleProductOptionManagementV1Api

All URIs are relative to *http://hb.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bundleProductOptionManagementV1SavePost**](BundleProductOptionManagementV1Api.md#bundleProductOptionManagementV1SavePost) | **POST** /V1/bundle-products/options/add | 
[**bundleProductOptionManagementV1SavePut**](BundleProductOptionManagementV1Api.md#bundleProductOptionManagementV1SavePut) | **PUT** /V1/bundle-products/options/{optionId} | 


# **bundleProductOptionManagementV1SavePost**
> int bundleProductOptionManagementV1SavePost($body)



Add new option for bundle product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\BundleProductOptionManagementV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body56(); // \SpringImport\Swagger\Magento2\Client\Model\Body56 | 

try {
    $result = $api_instance->bundleProductOptionManagementV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleProductOptionManagementV1Api->bundleProductOptionManagementV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body56**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body56.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bundleProductOptionManagementV1SavePut**
> int bundleProductOptionManagementV1SavePut($optionId, $body)



Add new option for bundle product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\BundleProductOptionManagementV1Api();
$optionId = "optionId_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body57(); // \SpringImport\Swagger\Magento2\Client\Model\Body57 | 

try {
    $result = $api_instance->bundleProductOptionManagementV1SavePut($optionId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleProductOptionManagementV1Api->bundleProductOptionManagementV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **optionId** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body57**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body57.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


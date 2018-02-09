# SpringImport\Swagger\Magento2\Client\CatalogProductAttributeManagementV1Api

All URIs are relative to *http://b2b222.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductAttributeManagementV1AssignPost**](CatalogProductAttributeManagementV1Api.md#catalogProductAttributeManagementV1AssignPost) | **POST** /V1/products/attribute-sets/attributes | 
[**catalogProductAttributeManagementV1GetAttributesGet**](CatalogProductAttributeManagementV1Api.md#catalogProductAttributeManagementV1GetAttributesGet) | **GET** /V1/products/attribute-sets/{attributeSetId}/attributes | 
[**catalogProductAttributeManagementV1UnassignDelete**](CatalogProductAttributeManagementV1Api.md#catalogProductAttributeManagementV1UnassignDelete) | **DELETE** /V1/products/attribute-sets/{attributeSetId}/attributes/{attributeCode} | 


# **catalogProductAttributeManagementV1AssignPost**
> int catalogProductAttributeManagementV1AssignPost($body)



Assign attribute to attribute set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductAttributeManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body25(); // \SpringImport\Swagger\Magento2\Client\Model\Body25 | 

try {
    $result = $apiInstance->catalogProductAttributeManagementV1AssignPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeManagementV1Api->catalogProductAttributeManagementV1AssignPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body25**](../Model/Body25.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductAttributeManagementV1GetAttributesGet**
> \SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductAttributeInterface[] catalogProductAttributeManagementV1GetAttributesGet($attributeSetId)



Retrieve related attributes based on given attribute set ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductAttributeManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attributeSetId = "attributeSetId_example"; // string | 

try {
    $result = $apiInstance->catalogProductAttributeManagementV1GetAttributesGet($attributeSetId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeManagementV1Api->catalogProductAttributeManagementV1GetAttributesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeSetId** | **string**|  |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductAttributeInterface[]**](../Model/CatalogDataProductAttributeInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductAttributeManagementV1UnassignDelete**
> bool catalogProductAttributeManagementV1UnassignDelete($attributeSetId, $attributeCode)



Remove attribute from attribute set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductAttributeManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attributeSetId = "attributeSetId_example"; // string | 
$attributeCode = "attributeCode_example"; // string | 

try {
    $result = $apiInstance->catalogProductAttributeManagementV1UnassignDelete($attributeSetId, $attributeCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeManagementV1Api->catalogProductAttributeManagementV1UnassignDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeSetId** | **string**|  |
 **attributeCode** | **string**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


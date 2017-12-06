# SpringImport\Swagger\Magento2\Client\CatalogProductAttributeMediaGalleryManagementV1Api

All URIs are relative to *http://hb.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductAttributeMediaGalleryManagementV1CreatePost**](CatalogProductAttributeMediaGalleryManagementV1Api.md#catalogProductAttributeMediaGalleryManagementV1CreatePost) | **POST** /V1/products/{sku}/media | 
[**catalogProductAttributeMediaGalleryManagementV1GetGet**](CatalogProductAttributeMediaGalleryManagementV1Api.md#catalogProductAttributeMediaGalleryManagementV1GetGet) | **GET** /V1/products/{sku}/media/{entryId} | 
[**catalogProductAttributeMediaGalleryManagementV1GetListGet**](CatalogProductAttributeMediaGalleryManagementV1Api.md#catalogProductAttributeMediaGalleryManagementV1GetListGet) | **GET** /V1/products/{sku}/media | 
[**catalogProductAttributeMediaGalleryManagementV1RemoveDelete**](CatalogProductAttributeMediaGalleryManagementV1Api.md#catalogProductAttributeMediaGalleryManagementV1RemoveDelete) | **DELETE** /V1/products/{sku}/media/{entryId} | 
[**catalogProductAttributeMediaGalleryManagementV1UpdatePut**](CatalogProductAttributeMediaGalleryManagementV1Api.md#catalogProductAttributeMediaGalleryManagementV1UpdatePut) | **PUT** /V1/products/{sku}/media/{entryId} | 


# **catalogProductAttributeMediaGalleryManagementV1CreatePost**
> int catalogProductAttributeMediaGalleryManagementV1CreatePost($sku, $body)



Create new gallery entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductAttributeMediaGalleryManagementV1Api();
$sku = "sku_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body29(); // \SpringImport\Swagger\Magento2\Client\Model\Body29 | 

try {
    $result = $api_instance->catalogProductAttributeMediaGalleryManagementV1CreatePost($sku, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeMediaGalleryManagementV1Api->catalogProductAttributeMediaGalleryManagementV1CreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body29**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body29.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductAttributeMediaGalleryManagementV1GetGet**
> \SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductAttributeMediaGalleryEntryInterface catalogProductAttributeMediaGalleryManagementV1GetGet($sku, $entryId)



Return information about gallery entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductAttributeMediaGalleryManagementV1Api();
$sku = "sku_example"; // string | 
$entryId = 56; // int | 

try {
    $result = $api_instance->catalogProductAttributeMediaGalleryManagementV1GetGet($sku, $entryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeMediaGalleryManagementV1Api->catalogProductAttributeMediaGalleryManagementV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **entryId** | **int**|  |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductAttributeMediaGalleryEntryInterface**](../Model/CatalogDataProductAttributeMediaGalleryEntryInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductAttributeMediaGalleryManagementV1GetListGet**
> \SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductAttributeMediaGalleryEntryInterface[] catalogProductAttributeMediaGalleryManagementV1GetListGet($sku)



Retrieve the list of gallery entries associated with given product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductAttributeMediaGalleryManagementV1Api();
$sku = "sku_example"; // string | 

try {
    $result = $api_instance->catalogProductAttributeMediaGalleryManagementV1GetListGet($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeMediaGalleryManagementV1Api->catalogProductAttributeMediaGalleryManagementV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductAttributeMediaGalleryEntryInterface[]**](../Model/CatalogDataProductAttributeMediaGalleryEntryInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductAttributeMediaGalleryManagementV1RemoveDelete**
> bool catalogProductAttributeMediaGalleryManagementV1RemoveDelete($sku, $entryId)



Remove gallery entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductAttributeMediaGalleryManagementV1Api();
$sku = "sku_example"; // string | 
$entryId = 56; // int | 

try {
    $result = $api_instance->catalogProductAttributeMediaGalleryManagementV1RemoveDelete($sku, $entryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeMediaGalleryManagementV1Api->catalogProductAttributeMediaGalleryManagementV1RemoveDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **entryId** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductAttributeMediaGalleryManagementV1UpdatePut**
> bool catalogProductAttributeMediaGalleryManagementV1UpdatePut($sku, $entryId, $body)



Update gallery entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductAttributeMediaGalleryManagementV1Api();
$sku = "sku_example"; // string | 
$entryId = "entryId_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body28(); // \SpringImport\Swagger\Magento2\Client\Model\Body28 | 

try {
    $result = $api_instance->catalogProductAttributeMediaGalleryManagementV1UpdatePut($sku, $entryId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeMediaGalleryManagementV1Api->catalogProductAttributeMediaGalleryManagementV1UpdatePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **entryId** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body28**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body28.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


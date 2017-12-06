# SpringImport\Swagger\Magento2\Client\RequisitionListRequisitionListRepositoryV1Api

All URIs are relative to *http://hb.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**requisitionListRequisitionListRepositoryV1SavePost**](RequisitionListRequisitionListRepositoryV1Api.md#requisitionListRequisitionListRepositoryV1SavePost) | **POST** /V1/requisition_lists | 


# **requisitionListRequisitionListRepositoryV1SavePost**
> \SpringImport\Swagger\Magento2\Client\Model\RequisitionListDataRequisitionListInterface requisitionListRequisitionListRepositoryV1SavePost($body)



Save Requisition List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\RequisitionListRequisitionListRepositoryV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body83(); // \SpringImport\Swagger\Magento2\Client\Model\Body83 | 

try {
    $result = $api_instance->requisitionListRequisitionListRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequisitionListRequisitionListRepositoryV1Api->requisitionListRequisitionListRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body83**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body83.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\RequisitionListDataRequisitionListInterface**](../Model/RequisitionListDataRequisitionListInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


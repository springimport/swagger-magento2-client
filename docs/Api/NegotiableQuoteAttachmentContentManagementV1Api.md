# SpringImport\Swagger\Magento2\Client\NegotiableQuoteAttachmentContentManagementV1Api

All URIs are relative to *http://hb.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**negotiableQuoteAttachmentContentManagementV1GetGet**](NegotiableQuoteAttachmentContentManagementV1Api.md#negotiableQuoteAttachmentContentManagementV1GetGet) | **GET** /V1/negotiableQuote/attachmentContent | 


# **negotiableQuoteAttachmentContentManagementV1GetGet**
> \SpringImport\Swagger\Magento2\Client\Model\NegotiableQuoteDataAttachmentContentInterface[] negotiableQuoteAttachmentContentManagementV1GetGet($attachmentIds)



Returns content for one or more files attached on the quote comment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\NegotiableQuoteAttachmentContentManagementV1Api();
$attachmentIds = array(56); // int[] | 

try {
    $result = $api_instance->negotiableQuoteAttachmentContentManagementV1GetGet($attachmentIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteAttachmentContentManagementV1Api->negotiableQuoteAttachmentContentManagementV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachmentIds** | [**int[]**](../Model/int.md)|  |

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\NegotiableQuoteDataAttachmentContentInterface[]**](../Model/NegotiableQuoteDataAttachmentContentInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# SpringImport\Swagger\Magento2\Client\NegotiableQuoteNegotiableQuoteManagementV1Api

All URIs are relative to *http://hb.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**negotiableQuoteNegotiableQuoteManagementV1AdminSendPost**](NegotiableQuoteNegotiableQuoteManagementV1Api.md#negotiableQuoteNegotiableQuoteManagementV1AdminSendPost) | **POST** /V1/negotiableQuote/submitToCustomer | 
[**negotiableQuoteNegotiableQuoteManagementV1CreatePost**](NegotiableQuoteNegotiableQuoteManagementV1Api.md#negotiableQuoteNegotiableQuoteManagementV1CreatePost) | **POST** /V1/negotiableQuote/request | 
[**negotiableQuoteNegotiableQuoteManagementV1DeclinePost**](NegotiableQuoteNegotiableQuoteManagementV1Api.md#negotiableQuoteNegotiableQuoteManagementV1DeclinePost) | **POST** /V1/negotiableQuote/decline | 


# **negotiableQuoteNegotiableQuoteManagementV1AdminSendPost**
> bool negotiableQuoteNegotiableQuoteManagementV1AdminSendPost($body)



Submit the B2B quote to the customer. The quote status for the customer will be changed to 'Updated', and the customer can work with the quote.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\NegotiableQuoteNegotiableQuoteManagementV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body153(); // \SpringImport\Swagger\Magento2\Client\Model\Body153 | 

try {
    $result = $api_instance->negotiableQuoteNegotiableQuoteManagementV1AdminSendPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteNegotiableQuoteManagementV1Api->negotiableQuoteNegotiableQuoteManagementV1AdminSendPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body153**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body153.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **negotiableQuoteNegotiableQuoteManagementV1CreatePost**
> bool negotiableQuoteNegotiableQuoteManagementV1CreatePost($body)



Create a B2B quote based on a regular Magento quote. If the B2B quote requires a shipping address (for negotiation or tax calculations), add it to the regular quote before you create a B2B quote.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\NegotiableQuoteNegotiableQuoteManagementV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body152(); // \SpringImport\Swagger\Magento2\Client\Model\Body152 | 

try {
    $result = $api_instance->negotiableQuoteNegotiableQuoteManagementV1CreatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteNegotiableQuoteManagementV1Api->negotiableQuoteNegotiableQuoteManagementV1CreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body152**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body152.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **negotiableQuoteNegotiableQuoteManagementV1DeclinePost**
> bool negotiableQuoteNegotiableQuoteManagementV1DeclinePost($body)



Decline the B2B quote. All custom pricing will be removed from this quote. The buyer will be able to place an order using their standard catalog prices and discounts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\NegotiableQuoteNegotiableQuoteManagementV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body154(); // \SpringImport\Swagger\Magento2\Client\Model\Body154 | 

try {
    $result = $api_instance->negotiableQuoteNegotiableQuoteManagementV1DeclinePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteNegotiableQuoteManagementV1Api->negotiableQuoteNegotiableQuoteManagementV1DeclinePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body154**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body154.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


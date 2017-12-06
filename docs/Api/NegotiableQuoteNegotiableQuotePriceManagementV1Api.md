# SpringImport\Swagger\Magento2\Client\NegotiableQuoteNegotiableQuotePriceManagementV1Api

All URIs are relative to *http://hb.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**negotiableQuoteNegotiableQuotePriceManagementV1PricesUpdatedPost**](NegotiableQuoteNegotiableQuotePriceManagementV1Api.md#negotiableQuoteNegotiableQuotePriceManagementV1PricesUpdatedPost) | **POST** /V1/negotiableQuote/pricesUpdated | 


# **negotiableQuoteNegotiableQuotePriceManagementV1PricesUpdatedPost**
> bool negotiableQuoteNegotiableQuotePriceManagementV1PricesUpdatedPost($body)



Refreshes item prices, taxes, discounts, cart rules in the negotiable quote as per the latest changes in the catalog / shared catalog and in the price rules. Depending on the negotiable quote state and totals, all or just some of quote numbers will be recalculated. 'Update Prices' parameter forces refresh on any quote that is not locked for admin user, including the quotes with a negotiated price. The request can be applied to one or more quotes at the same time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\NegotiableQuoteNegotiableQuotePriceManagementV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body155(); // \SpringImport\Swagger\Magento2\Client\Model\Body155 | 

try {
    $result = $api_instance->negotiableQuoteNegotiableQuotePriceManagementV1PricesUpdatedPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteNegotiableQuotePriceManagementV1Api->negotiableQuoteNegotiableQuotePriceManagementV1PricesUpdatedPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body155**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body155.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


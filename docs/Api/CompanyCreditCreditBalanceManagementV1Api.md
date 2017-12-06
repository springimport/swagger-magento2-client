# SpringImport\Swagger\Magento2\Client\CompanyCreditCreditBalanceManagementV1Api

All URIs are relative to *http://hb.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyCreditCreditBalanceManagementV1DecreasePost**](CompanyCreditCreditBalanceManagementV1Api.md#companyCreditCreditBalanceManagementV1DecreasePost) | **POST** /V1/companyCredits/{creditId}/decreaseBalance | 
[**companyCreditCreditBalanceManagementV1IncreasePost**](CompanyCreditCreditBalanceManagementV1Api.md#companyCreditCreditBalanceManagementV1IncreasePost) | **POST** /V1/companyCredits/{creditId}/increaseBalance | 


# **companyCreditCreditBalanceManagementV1DecreasePost**
> bool companyCreditCreditBalanceManagementV1DecreasePost($creditId, $body)



Decreases the company credit with an Update, Reimburse, or Purchase transaction. This transaction increases company's outstanding balance and decreases company's available credit.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CompanyCreditCreditBalanceManagementV1Api();
$creditId = 56; // int | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body177(); // \SpringImport\Swagger\Magento2\Client\Model\Body177 | 

try {
    $result = $api_instance->companyCreditCreditBalanceManagementV1DecreasePost($creditId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyCreditCreditBalanceManagementV1Api->companyCreditCreditBalanceManagementV1DecreasePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **creditId** | **int**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body177**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body177.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCreditCreditBalanceManagementV1IncreasePost**
> bool companyCreditCreditBalanceManagementV1IncreasePost($creditId, $body)



Increases the company credit with an Allocate, Update, Refund, Revert, or Reimburse transaction. This transaction decreases company's outstanding balance and increases company's available credit.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\CompanyCreditCreditBalanceManagementV1Api();
$creditId = 56; // int | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body176(); // \SpringImport\Swagger\Magento2\Client\Model\Body176 | 

try {
    $result = $api_instance->companyCreditCreditBalanceManagementV1IncreasePost($creditId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyCreditCreditBalanceManagementV1Api->companyCreditCreditBalanceManagementV1IncreasePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **creditId** | **int**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body176**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body176.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


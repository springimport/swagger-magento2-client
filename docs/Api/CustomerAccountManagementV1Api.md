# SpringImport\Magento2SwaggerApi\CustomerAccountManagementV1Api

All URIs are relative to *http://springimport.dev/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerAccountManagementV1CreateAccountPost**](CustomerAccountManagementV1Api.md#customerAccountManagementV1CreateAccountPost) | **POST** /V1/customers | 
[**customerAccountManagementV1InitiatePasswordResetPut**](CustomerAccountManagementV1Api.md#customerAccountManagementV1InitiatePasswordResetPut) | **PUT** /V1/customers/password | 
[**customerAccountManagementV1IsEmailAvailablePost**](CustomerAccountManagementV1Api.md#customerAccountManagementV1IsEmailAvailablePost) | **POST** /V1/customers/isEmailAvailable | 
[**customerAccountManagementV1ValidateResetPasswordLinkTokenGet**](CustomerAccountManagementV1Api.md#customerAccountManagementV1ValidateResetPasswordLinkTokenGet) | **GET** /V1/customers/{customerId}/password/resetLinkToken/{resetPasswordLinkToken} | 


# **customerAccountManagementV1CreateAccountPost**
> \SpringImport\Magento2SwaggerApi\Model\CustomerDataCustomerInterface customerAccountManagementV1CreateAccountPost($body)



Create customer account. Perform necessary business operations like sending email.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Magento2SwaggerApi\Api\CustomerAccountManagementV1Api();
$body = new \SpringImport\Magento2SwaggerApi\Model\Body(); // \SpringImport\Magento2SwaggerApi\Model\Body | 

try {
    $result = $api_instance->customerAccountManagementV1CreateAccountPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1CreateAccountPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Magento2SwaggerApi\Model\Body**](../Model/\SpringImport\Magento2SwaggerApi\Model\Body.md)|  | [optional]

### Return type

[**\SpringImport\Magento2SwaggerApi\Model\CustomerDataCustomerInterface**](../Model/CustomerDataCustomerInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1InitiatePasswordResetPut**
> bool customerAccountManagementV1InitiatePasswordResetPut($body)



Send an email to the customer with a password reset link.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Magento2SwaggerApi\Api\CustomerAccountManagementV1Api();
$body = new \SpringImport\Magento2SwaggerApi\Model\Body1(); // \SpringImport\Magento2SwaggerApi\Model\Body1 | 

try {
    $result = $api_instance->customerAccountManagementV1InitiatePasswordResetPut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1InitiatePasswordResetPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Magento2SwaggerApi\Model\Body1**](../Model/\SpringImport\Magento2SwaggerApi\Model\Body1.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1IsEmailAvailablePost**
> bool customerAccountManagementV1IsEmailAvailablePost($body)



Check if given email is associated with a customer account in given website.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Magento2SwaggerApi\Api\CustomerAccountManagementV1Api();
$body = new \SpringImport\Magento2SwaggerApi\Model\Body2(); // \SpringImport\Magento2SwaggerApi\Model\Body2 | 

try {
    $result = $api_instance->customerAccountManagementV1IsEmailAvailablePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1IsEmailAvailablePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Magento2SwaggerApi\Model\Body2**](../Model/\SpringImport\Magento2SwaggerApi\Model\Body2.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1ValidateResetPasswordLinkTokenGet**
> bool customerAccountManagementV1ValidateResetPasswordLinkTokenGet($customerId, $resetPasswordLinkToken)



Check if password reset token is valid.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Magento2SwaggerApi\Api\CustomerAccountManagementV1Api();
$customerId = 56; // int | 
$resetPasswordLinkToken = "resetPasswordLinkToken_example"; // string | 

try {
    $result = $api_instance->customerAccountManagementV1ValidateResetPasswordLinkTokenGet($customerId, $resetPasswordLinkToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1ValidateResetPasswordLinkTokenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**|  |
 **resetPasswordLinkToken** | **string**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Swagger\Client\CustomerAccountManagementVApi

All URIs are relative to *http://example.com/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerAccountManagementV1CreateAccountPost**](CustomerAccountManagementVApi.md#customerAccountManagementV1CreateAccountPost) | **POST** /V1/customers | 
[**customerAccountManagementV1InitiatePasswordResetPut**](CustomerAccountManagementVApi.md#customerAccountManagementV1InitiatePasswordResetPut) | **PUT** /V1/customers/password | 
[**customerAccountManagementV1IsEmailAvailablePost**](CustomerAccountManagementVApi.md#customerAccountManagementV1IsEmailAvailablePost) | **POST** /V1/customers/isEmailAvailable | 
[**customerAccountManagementV1ValidateResetPasswordLinkTokenGet**](CustomerAccountManagementVApi.md#customerAccountManagementV1ValidateResetPasswordLinkTokenGet) | **GET** /V1/customers/{customerId}/password/resetLinkToken/{resetPasswordLinkToken} | 


# **customerAccountManagementV1CreateAccountPost**
> \Swagger\Client\Model\CustomerDataCustomerInterface customerAccountManagementV1CreateAccountPost($body)



Create customer account. Perform necessary business operations like sending email.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerAccountManagementVApi();
$body = new \Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | 

try {
    $result = $api_instance->customerAccountManagementV1CreateAccountPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementVApi->customerAccountManagementV1CreateAccountPost: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body**](../Model/\Swagger\Client\Model\Body.md)|  | [optional] 

### Return type

[**\Swagger\Client\Model\CustomerDataCustomerInterface**](../Model/CustomerDataCustomerInterface.md)

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

$api_instance = new Swagger\Client\Api\CustomerAccountManagementVApi();
$body = new \Swagger\Client\Model\Body2(); // \Swagger\Client\Model\Body2 | 

try {
    $result = $api_instance->customerAccountManagementV1InitiatePasswordResetPut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementVApi->customerAccountManagementV1InitiatePasswordResetPut: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body2**](../Model/\Swagger\Client\Model\Body2.md)|  | [optional] 

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

$api_instance = new Swagger\Client\Api\CustomerAccountManagementVApi();
$body = new \Swagger\Client\Model\Body1(); // \Swagger\Client\Model\Body1 | 

try {
    $result = $api_instance->customerAccountManagementV1IsEmailAvailablePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementVApi->customerAccountManagementV1IsEmailAvailablePost: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body1**](../Model/\Swagger\Client\Model\Body1.md)|  | [optional] 

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1ValidateResetPasswordLinkTokenGet**
> bool customerAccountManagementV1ValidateResetPasswordLinkTokenGet($customer_id, $reset_password_link_token)



Check if password reset token is valid.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerAccountManagementVApi();
$customer_id = 56; // int | 
$reset_password_link_token = "reset_password_link_token_example"; // string | 

try {
    $result = $api_instance->customerAccountManagementV1ValidateResetPasswordLinkTokenGet($customer_id, $reset_password_link_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementVApi->customerAccountManagementV1ValidateResetPasswordLinkTokenGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**|  | 
 **reset_password_link_token** | **string**|  | 

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


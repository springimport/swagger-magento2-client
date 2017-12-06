# SpringImport\Swagger\Magento2\Client\NegotiableQuoteCouponManagementV1Api

All URIs are relative to *http://hb.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**negotiableQuoteCouponManagementV1RemoveDelete**](NegotiableQuoteCouponManagementV1Api.md#negotiableQuoteCouponManagementV1RemoveDelete) | **DELETE** /V1/negotiable-carts/{cartId}/coupons | 
[**negotiableQuoteCouponManagementV1SetPut**](NegotiableQuoteCouponManagementV1Api.md#negotiableQuoteCouponManagementV1SetPut) | **PUT** /V1/negotiable-carts/{cartId}/coupons/{couponCode} | 


# **negotiableQuoteCouponManagementV1RemoveDelete**
> bool negotiableQuoteCouponManagementV1RemoveDelete($cartId)



Deletes a coupon from a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\NegotiableQuoteCouponManagementV1Api();
$cartId = 56; // int | The cart ID.

try {
    $result = $api_instance->negotiableQuoteCouponManagementV1RemoveDelete($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteCouponManagementV1Api->negotiableQuoteCouponManagementV1RemoveDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The cart ID. |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **negotiableQuoteCouponManagementV1SetPut**
> bool negotiableQuoteCouponManagementV1SetPut($cartId, $couponCode)



Adds a coupon by code to a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\NegotiableQuoteCouponManagementV1Api();
$cartId = 56; // int | The cart ID.
$couponCode = "couponCode_example"; // string | The coupon code data.

try {
    $result = $api_instance->negotiableQuoteCouponManagementV1SetPut($cartId, $couponCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiableQuoteCouponManagementV1Api->negotiableQuoteCouponManagementV1SetPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The cart ID. |
 **couponCode** | **string**| The coupon code data. |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


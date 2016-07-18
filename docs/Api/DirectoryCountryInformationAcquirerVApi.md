# Swagger\Client\DirectoryCountryInformationAcquirerVApi

All URIs are relative to *http://springimport.net/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**directoryCountryInformationAcquirerV1GetCountriesInfoGet**](DirectoryCountryInformationAcquirerVApi.md#directoryCountryInformationAcquirerV1GetCountriesInfoGet) | **GET** /V1/directory/countries | 
[**directoryCountryInformationAcquirerV1GetCountryInfoGet**](DirectoryCountryInformationAcquirerVApi.md#directoryCountryInformationAcquirerV1GetCountryInfoGet) | **GET** /V1/directory/countries/{countryId} | 


# **directoryCountryInformationAcquirerV1GetCountriesInfoGet**
> \Swagger\Client\Model\DirectoryDataCountryInformationInterface[] directoryCountryInformationAcquirerV1GetCountriesInfoGet()



Get all countries and regions information for the store.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DirectoryCountryInformationAcquirerVApi();

try {
    $result = $api_instance->directoryCountryInformationAcquirerV1GetCountriesInfoGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryCountryInformationAcquirerVApi->directoryCountryInformationAcquirerV1GetCountriesInfoGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DirectoryDataCountryInformationInterface[]**](../Model/DirectoryDataCountryInformationInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **directoryCountryInformationAcquirerV1GetCountryInfoGet**
> \Swagger\Client\Model\DirectoryDataCountryInformationInterface directoryCountryInformationAcquirerV1GetCountryInfoGet($country_id)



Get country and region information for the store.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DirectoryCountryInformationAcquirerVApi();
$country_id = "country_id_example"; // string | 

try {
    $result = $api_instance->directoryCountryInformationAcquirerV1GetCountryInfoGet($country_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryCountryInformationAcquirerVApi->directoryCountryInformationAcquirerV1GetCountryInfoGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_id** | **string**|  | 

### Return type

[**\Swagger\Client\Model\DirectoryDataCountryInformationInterface**](../Model/DirectoryDataCountryInformationInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


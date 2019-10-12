# daxslab\enzona\payment\PermiteCrearUnRecieveCodeApi

All URIs are relative to *https://apisandbox.enzona.net/payment/v1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentsVendorCodePost**](PermiteCrearUnRecieveCodeApi.md#paymentsVendorCodePost) | **POST** /payments/vendor/code | 


# **paymentsVendorCodePost**
> object paymentsVendorCodePost($payload)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new daxslab\enzona\payment\Api\PermiteCrearUnRecieveCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payload = new \daxslab\enzona\payment\model\Payload3(); // \daxslab\enzona\payment\model\Payload3 | Parametros de entrada

try {
    $result = $apiInstance->paymentsVendorCodePost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermiteCrearUnRecieveCodeApi->paymentsVendorCodePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\daxslab\enzona\payment\model\Payload3**](../Model/Payload3.md)| Parametros de entrada | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


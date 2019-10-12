# daxslab\enzona\payment\PermiteCrearUnPagoApi

All URIs are relative to *https://apisandbox.enzona.net/payment/v1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentsPost**](PermiteCrearUnPagoApi.md#paymentsPost) | **POST** /payments | 


# **paymentsPost**
> object paymentsPost($payload)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: default
$config = daxslab\enzona\payment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new daxslab\enzona\payment\Api\PermiteCrearUnPagoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \daxslab\enzona\payment\model\Payload(); // \daxslab\enzona\payment\model\Payload | Parámetros de entrada

try {
    $result = $apiInstance->paymentsPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermiteCrearUnPagoApi->paymentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\daxslab\enzona\payment\model\Payload**](../Model/Payload.md)| Parámetros de entrada | [optional]

### Return type

**object**

### Authorization

[default](../../README.md#default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


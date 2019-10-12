# daxslab\enzona\payment\PermiteCancelarUnPagoApi

All URIs are relative to *https://apisandbox.enzona.net/payment/v1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentsTransactionUuidCancelPost**](PermiteCancelarUnPagoApi.md#paymentsTransactionUuidCancelPost) | **POST** /payments/{transaction_uuid}/cancel | 


# **paymentsTransactionUuidCancelPost**
> object paymentsTransactionUuidCancelPost($transaction_uuid, $payload)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: default
$config = daxslab\enzona\payment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new daxslab\enzona\payment\Api\PermiteCancelarUnPagoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_uuid = "transaction_uuid_example"; // string | 
$payload = new \daxslab\enzona\payment\model\InBody(); // \daxslab\enzona\payment\model\InBody | Request Body

try {
    $result = $apiInstance->paymentsTransactionUuidCancelPost($transaction_uuid, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermiteCancelarUnPagoApi->paymentsTransactionUuidCancelPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_uuid** | **string**|  |
 **payload** | [**\daxslab\enzona\payment\model\InBody**](../Model/InBody.md)| Request Body | [optional]

### Return type

**object**

### Authorization

[default](../../README.md#default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


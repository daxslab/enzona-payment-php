# daxslab\enzona\payment\PermiteRealizarLaDevolucinDeUnPagoApi

All URIs are relative to *https://apisandbox.enzona.net/payment/v1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentsTransactionUuidRefundPost**](PermiteRealizarLaDevolucinDeUnPagoApi.md#paymentsTransactionUuidRefundPost) | **POST** /payments/{transaction_uuid}/refund | 


# **paymentsTransactionUuidRefundPost**
> object paymentsTransactionUuidRefundPost($transaction_uuid, $payload)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: default
$config = daxslab\enzona\payment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new daxslab\enzona\payment\Api\PermiteRealizarLaDevolucinDeUnPagoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_uuid = "transaction_uuid_example"; // string | 
$payload = new \daxslab\enzona\payment\model\Payload2(); // \daxslab\enzona\payment\model\Payload2 | Request Body

try {
    $result = $apiInstance->paymentsTransactionUuidRefundPost($transaction_uuid, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermiteRealizarLaDevolucinDeUnPagoApi->paymentsTransactionUuidRefundPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_uuid** | **string**|  |
 **payload** | [**\daxslab\enzona\payment\model\Payload2**](../Model/Payload2.md)| Request Body | [optional]

### Return type

**object**

### Authorization

[default](../../README.md#default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


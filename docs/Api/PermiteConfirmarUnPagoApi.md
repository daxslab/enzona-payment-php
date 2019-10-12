# daxslab\enzona\payment\PermiteConfirmarUnPagoApi

All URIs are relative to *https://apisandbox.enzona.net/payment/v1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentsTransactionUuidConfirmPost**](PermiteConfirmarUnPagoApi.md#paymentsTransactionUuidConfirmPost) | **POST** /payments/{transaction_uuid}/confirm | 


# **paymentsTransactionUuidConfirmPost**
> object paymentsTransactionUuidConfirmPost($transaction_uuid, $payload)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new daxslab\enzona\payment\Api\PermiteConfirmarUnPagoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transaction_uuid = "transaction_uuid_example"; // string | Identificador de la transacción.
$payload = new \daxslab\enzona\payment\model\Payload1(); // \daxslab\enzona\payment\model\Payload1 | Parametros de entrada

try {
    $result = $apiInstance->paymentsTransactionUuidConfirmPost($transaction_uuid, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermiteConfirmarUnPagoApi->paymentsTransactionUuidConfirmPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_uuid** | **string**| Identificador de la transacción. |
 **payload** | [**\daxslab\enzona\payment\model\Payload1**](../Model/Payload1.md)| Parametros de entrada | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


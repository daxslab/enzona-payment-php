# daxslab\enzona\payment\ObtieneLosDetallesDeUnPagoRealizadoApi

All URIs are relative to *https://apisandbox.enzona.net/payment/v1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentsTransactionUuidGet**](ObtieneLosDetallesDeUnPagoRealizadoApi.md#paymentsTransactionUuidGet) | **GET** /payments/{transaction_uuid} | 


# **paymentsTransactionUuidGet**
> object paymentsTransactionUuidGet($transaction_uuid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: default
$config = daxslab\enzona\payment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new daxslab\enzona\payment\Api\ObtieneLosDetallesDeUnPagoRealizadoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_uuid = "transaction_uuid_example"; // string | 

try {
    $result = $apiInstance->paymentsTransactionUuidGet($transaction_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObtieneLosDetallesDeUnPagoRealizadoApi->paymentsTransactionUuidGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_uuid** | **string**|  |

### Return type

**object**

### Authorization

[default](../../README.md#default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


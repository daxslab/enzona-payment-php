# daxslab\enzona\payment\PermiteRealizarElCheckoutDeUnPagoApi

All URIs are relative to *https://apisandbox.enzona.net/payment/v1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentsCheckoutUuidGet**](PermiteRealizarElCheckoutDeUnPagoApi.md#paymentsCheckoutUuidGet) | **GET** /payments/checkout/{uuid} | 


# **paymentsCheckoutUuidGet**
> paymentsCheckoutUuidGet($uuid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new daxslab\enzona\payment\Api\PermiteRealizarElCheckoutDeUnPagoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = "uuid_example"; // string | Identificador del checkout.

try {
    $apiInstance->paymentsCheckoutUuidGet($uuid);
} catch (Exception $e) {
    echo 'Exception when calling PermiteRealizarElCheckoutDeUnPagoApi->paymentsCheckoutUuidGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| Identificador del checkout. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


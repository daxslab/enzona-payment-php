# daxslab\enzona\payment\ObtieneUnaListaDeDevolucionesRealizadasApi

All URIs are relative to *https://apisandbox.enzona.net/payment/v1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentsRefundsGet**](ObtieneUnaListaDeDevolucionesRealizadasApi.md#paymentsRefundsGet) | **GET** /payments/refunds | 


# **paymentsRefundsGet**
> object paymentsRefundsGet($merchant_uuid, $limit, $offset, $status_filter, $start_date_filter, $end_date_filter, $order_filter)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: default
$config = daxslab\enzona\payment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new daxslab\enzona\payment\Api\ObtieneUnaListaDeDevolucionesRealizadasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_uuid = "merchant_uuid_example"; // string | 
$limit = "limit_example"; // string | 
$offset = "offset_example"; // string | 
$status_filter = "status_filter_example"; // string | 
$start_date_filter = "start_date_filter_example"; // string | 
$end_date_filter = "end_date_filter_example"; // string | 
$order_filter = "order_filter_example"; // string | 

try {
    $result = $apiInstance->paymentsRefundsGet($merchant_uuid, $limit, $offset, $status_filter, $start_date_filter, $end_date_filter, $order_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObtieneUnaListaDeDevolucionesRealizadasApi->paymentsRefundsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_uuid** | **string**|  | [optional]
 **limit** | **string**|  | [optional]
 **offset** | **string**|  | [optional]
 **status_filter** | **string**|  | [optional]
 **start_date_filter** | **string**|  | [optional]
 **end_date_filter** | **string**|  | [optional]
 **order_filter** | **string**|  | [optional]

### Return type

**object**

### Authorization

[default](../../README.md#default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


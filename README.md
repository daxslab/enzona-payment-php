# enzona-payment-php

***This is a work in progress, there are rough corners and the 
API can change witouth previuos warnings. 
Not recommended for production usage.***

PHP client library for interacting with [EnZona's Payment API](https://api.enzona.net). 

This client was generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project.

- API version: v1.0.0
- Package version: 1.0.0

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/daxslab/enzona-payment-php.git"
    }
  ],
  "require": {
    "daxslab/enzona-payment": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/enzona-payment-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: default
$config = daxslab\enzona\payment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new daxslab\enzona\payment\Api\ListaDeDevolucionesDeUnPagoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_uuid = "transaction_uuid_example"; // string | 
$limit = "limit_example"; // string | 
$offset = "offset_example"; // string | 
$status_filter = "status_filter_example"; // string | 
$start_date_filter = "start_date_filter_example"; // string | 
$end_date_filter = "end_date_filter_example"; // string | 
$order_filter = "order_filter_example"; // string | 

try {
    $result = $apiInstance->paymentsTransactionUuidRefundsGet($transaction_uuid, $limit, $offset, $status_filter, $start_date_filter, $end_date_filter, $order_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListaDeDevolucionesDeUnPagoApi->paymentsTransactionUuidRefundsGet: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://apisandbox.enzona.net/payment/v1.0.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ListaDeDevolucionesDeUnPagoApi* | [**paymentsTransactionUuidRefundsGet**](docs/Api/ListaDeDevolucionesDeUnPagoApi.md#paymentstransactionuuidrefundsget) | **GET** /payments/{transaction_uuid}/refunds | 
*ObtieneListadoDePagosRealizadosApi* | [**paymentsGet**](docs/Api/ObtieneListadoDePagosRealizadosApi.md#paymentsget) | **GET** /payments | 
*ObtieneLosDetallesDeUnPagoRealizadoApi* | [**paymentsTransactionUuidGet**](docs/Api/ObtieneLosDetallesDeUnPagoRealizadoApi.md#paymentstransactionuuidget) | **GET** /payments/{transaction_uuid} | 
*ObtieneLosDetallesDeUnaDevolucinRealizadaApi* | [**paymentsRefundTransactionUuidGet**](docs/Api/ObtieneLosDetallesDeUnaDevolucinRealizadaApi.md#paymentsrefundtransactionuuidget) | **GET** /payments/refund/{transaction_uuid} | 
*ObtieneUnaListaDeDevolucionesRealizadasApi* | [**paymentsRefundsGet**](docs/Api/ObtieneUnaListaDeDevolucionesRealizadasApi.md#paymentsrefundsget) | **GET** /payments/refunds | 
*PermiteCancelarUnPagoApi* | [**paymentsTransactionUuidCancelPost**](docs/Api/PermiteCancelarUnPagoApi.md#paymentstransactionuuidcancelpost) | **POST** /payments/{transaction_uuid}/cancel | 
*PermiteCompletarUnPagoApi* | [**paymentsTransactionUuidCompletePost**](docs/Api/PermiteCompletarUnPagoApi.md#paymentstransactionuuidcompletepost) | **POST** /payments/{transaction_uuid}/complete | 
*PermiteConfirmarUnPagoApi* | [**paymentsTransactionUuidConfirmPost**](docs/Api/PermiteConfirmarUnPagoApi.md#paymentstransactionuuidconfirmpost) | **POST** /payments/{transaction_uuid}/confirm | 
*PermiteCrearUnPagoApi* | [**paymentsPost**](docs/Api/PermiteCrearUnPagoApi.md#paymentspost) | **POST** /payments | 
*PermiteCrearUnRecieveCodeApi* | [**paymentsVendorCodePost**](docs/Api/PermiteCrearUnRecieveCodeApi.md#paymentsvendorcodepost) | **POST** /payments/vendor/code | 
*PermiteRealizarElCheckoutDeUnPagoApi* | [**paymentsCheckoutUuidGet**](docs/Api/PermiteRealizarElCheckoutDeUnPagoApi.md#paymentscheckoutuuidget) | **GET** /payments/checkout/{uuid} | 
*PermiteRealizarLaDevolucinDeUnPagoApi* | [**paymentsTransactionUuidRefundPost**](docs/Api/PermiteRealizarLaDevolucinDeUnPagoApi.md#paymentstransactionuuidrefundpost) | **POST** /payments/{transaction_uuid}/refund | 


## Documentation For Models

 - [AmountOperations](docs/Model/AmountOperations.md)
 - [DetailsOperations](docs/Model/DetailsOperations.md)
 - [FullOperations](docs/Model/FullOperations.md)
 - [FullOperationsOperation](docs/Model/FullOperationsOperation.md)
 - [FullOperationsOperationAmount](docs/Model/FullOperationsOperationAmount.md)
 - [FullOperationsOperationAmountDetails](docs/Model/FullOperationsOperationAmountDetails.md)
 - [FullOperationsOperationItems](docs/Model/FullOperationsOperationItems.md)
 - [InBody](docs/Model/InBody.md)
 - [ItemsOperations](docs/Model/ItemsOperations.md)
 - [LinksSchema](docs/Model/LinksSchema.md)
 - [OperationsPostComplete](docs/Model/OperationsPostComplete.md)
 - [OperationsPostCompleteItems](docs/Model/OperationsPostCompleteItems.md)
 - [Pagination](docs/Model/Pagination.md)
 - [PaginationLinks](docs/Model/PaginationLinks.md)
 - [PaginationLinksFirstPage](docs/Model/PaginationLinksFirstPage.md)
 - [Payload](docs/Model/Payload.md)
 - [Payload1](docs/Model/Payload1.md)
 - [Payload2](docs/Model/Payload2.md)
 - [Payload3](docs/Model/Payload3.md)
 - [PaymentFullInfo](docs/Model/PaymentFullInfo.md)
 - [PaymentFullInfoPayer](docs/Model/PaymentFullInfoPayer.md)
 - [PaymentFullInfoPayerPayerInfo](docs/Model/PaymentFullInfoPayerPayerInfo.md)
 - [PaymentFullOperations](docs/Model/PaymentFullOperations.md)
 - [PaymentRefundOperations](docs/Model/PaymentRefundOperations.md)
 - [PaymentRefundOperationsAmount](docs/Model/PaymentRefundOperationsAmount.md)
 - [PaymentRefundOperationsAmountDetails](docs/Model/PaymentRefundOperationsAmountDetails.md)
 - [PaymentSummaryInfo](docs/Model/PaymentSummaryInfo.md)
 - [PaymentSummaryInfoOperations](docs/Model/PaymentSummaryInfoOperations.md)
 - [PaymentSummaryInfoOperationsOperation](docs/Model/PaymentSummaryInfoOperationsOperation.md)
 - [PaymentSummaryInfoOperationsOperationAmount](docs/Model/PaymentSummaryInfoOperationsOperationAmount.md)
 - [PaymentSummaryInfoOperationsOperationAmountDetails](docs/Model/PaymentSummaryInfoOperationsOperationAmountDetails.md)
 - [PaymentSummaryInfoOperationsOperationBankDebitDetails](docs/Model/PaymentSummaryInfoOperationsOperationBankDebitDetails.md)
 - [PaymentsAmount](docs/Model/PaymentsAmount.md)
 - [PaymentsAmountDetails](docs/Model/PaymentsAmountDetails.md)
 - [PaymentsInfo](docs/Model/PaymentsInfo.md)
 - [PaymentsItems](docs/Model/PaymentsItems.md)
 - [PaymentstransactionUuidrefundAmount](docs/Model/PaymentstransactionUuidrefundAmount.md)


## Documentation For Authorization


## default

- **Type**: OAuth
- **Flow**: implicit
- **Authorization URL**: https://apisandbox.enzona.net/authorize
- **Scopes**: 
 - **enzona_business_payment**: enzona_business_payment







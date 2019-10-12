<?php
/**
 * ObtieneUnaListaDeDevolucionesRealizadasApi
 * PHP version 5
 *
 * @category Class
 * @package  daxslab\enzona\payment
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PaymentAPI
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace daxslab\enzona\payment\api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use daxslab\enzona\payment\ApiException;
use daxslab\enzona\payment\Configuration;
use daxslab\enzona\payment\HeaderSelector;
use daxslab\enzona\payment\ObjectSerializer;

/**
 * ObtieneUnaListaDeDevolucionesRealizadasApi Class Doc Comment
 *
 * @category Class
 * @package  daxslab\enzona\payment
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ObtieneUnaListaDeDevolucionesRealizadasApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation paymentsRefundsGet
     *
     * @param  string $merchant_uuid  (optional)
     * @param  string $limit  (optional)
     * @param  string $offset  (optional)
     * @param  string $status_filter status_filter (optional)
     * @param  string $start_date_filter start_date_filter (optional)
     * @param  string $end_date_filter end_date_filter (optional)
     * @param  string $order_filter order_filter (optional)
     *
     * @throws \daxslab\enzona\payment\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function paymentsRefundsGet($merchant_uuid = null, $limit = null, $offset = null, $status_filter = null, $start_date_filter = null, $end_date_filter = null, $order_filter = null)
    {
        list($response) = $this->paymentsRefundsGetWithHttpInfo($merchant_uuid, $limit, $offset, $status_filter, $start_date_filter, $end_date_filter, $order_filter);
        return $response;
    }

    /**
     * Operation paymentsRefundsGetWithHttpInfo
     *
     * @param  string $merchant_uuid  (optional)
     * @param  string $limit  (optional)
     * @param  string $offset  (optional)
     * @param  string $status_filter (optional)
     * @param  string $start_date_filter (optional)
     * @param  string $end_date_filter (optional)
     * @param  string $order_filter (optional)
     *
     * @throws \daxslab\enzona\payment\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentsRefundsGetWithHttpInfo($merchant_uuid = null, $limit = null, $offset = null, $status_filter = null, $start_date_filter = null, $end_date_filter = null, $order_filter = null)
    {
        $returnType = 'object';
        $request = $this->paymentsRefundsGetRequest($merchant_uuid, $limit, $offset, $status_filter, $start_date_filter, $end_date_filter, $order_filter);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation paymentsRefundsGetAsync
     *
     * 
     *
     * @param  string $merchant_uuid  (optional)
     * @param  string $limit  (optional)
     * @param  string $offset  (optional)
     * @param  string $status_filter (optional)
     * @param  string $start_date_filter (optional)
     * @param  string $end_date_filter (optional)
     * @param  string $order_filter (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function paymentsRefundsGetAsync($merchant_uuid = null, $limit = null, $offset = null, $status_filter = null, $start_date_filter = null, $end_date_filter = null, $order_filter = null)
    {
        return $this->paymentsRefundsGetAsyncWithHttpInfo($merchant_uuid, $limit, $offset, $status_filter, $start_date_filter, $end_date_filter, $order_filter)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation paymentsRefundsGetAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $merchant_uuid  (optional)
     * @param  string $limit  (optional)
     * @param  string $offset  (optional)
     * @param  string $status_filter (optional)
     * @param  string $start_date_filter (optional)
     * @param  string $end_date_filter (optional)
     * @param  string $order_filter (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function paymentsRefundsGetAsyncWithHttpInfo($merchant_uuid = null, $limit = null, $offset = null, $status_filter = null, $start_date_filter = null, $end_date_filter = null, $order_filter = null)
    {
        $returnType = 'object';
        $request = $this->paymentsRefundsGetRequest($merchant_uuid, $limit, $offset, $status_filter, $start_date_filter, $end_date_filter, $order_filter);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'paymentsRefundsGet'
     *
     * @param  string $merchant_uuid  (optional)
     * @param  string $limit  (optional)
     * @param  string $offset  (optional)
     * @param  string $status_filter (optional)
     * @param  string $start_date_filter (optional)
     * @param  string $end_date_filter (optional)
     * @param  string $order_filter (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function paymentsRefundsGetRequest($merchant_uuid = null, $limit = null, $offset = null, $status_filter = null, $start_date_filter = null, $end_date_filter = null, $order_filter = null)
    {

        $resourcePath = '/payments/refunds';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($merchant_uuid !== null) {
            $queryParams['merchant_uuid'] = ObjectSerializer::toQueryValue($merchant_uuid);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset);
        }
        // query params
        if ($status_filter !== null) {
            $queryParams['status_filter'] = ObjectSerializer::toQueryValue($status_filter);
        }
        // query params
        if ($start_date_filter !== null) {
            $queryParams['start_date_filter'] = ObjectSerializer::toQueryValue($start_date_filter);
        }
        // query params
        if ($end_date_filter !== null) {
            $queryParams['end_date_filter'] = ObjectSerializer::toQueryValue($end_date_filter);
        }
        // query params
        if ($order_filter !== null) {
            $queryParams['order_filter'] = ObjectSerializer::toQueryValue($order_filter);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
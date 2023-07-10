<?php
/**
 * EmbeddedFlowApi
 * PHP version 7.3
 *
 * @category Class
 * @package  belenka\Everifin\Client
 */
namespace belenka\Everifin\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use belenka\Everifin\Client\ApiException;
use belenka\Everifin\Client\Configuration;
use belenka\Everifin\Client\HeaderSelector;
use belenka\Everifin\Client\ObjectSerializer;

/**
 * EmbeddedFlowApi Class Doc Comment
 *
 * @category Class
 * @package  belenka\Everifin\Client
 */
class EmbeddedFlowApi
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
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation initPayment
     *
     * Init Payment
     *
     * @param  string $x_ef_sender_ip x_ef_sender_ip (optional)
     * @param  string $x_ef_sender_user_agent x_ef_sender_user_agent (optional)
     * @param  \belenka\Everifin\Client\Model\PaymentEmbedData $PaymentEmbedData PaymentEmbedData (optional)
     *
     * @throws \belenka\Everifin\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \belenka\Everifin\Client\Model\InlineResponse2003|\belenka\Everifin\Client\Model\InlineResponse4001|\belenka\Everifin\Client\Model\InlineResponse401
     */
    public function initPayment($x_ef_sender_ip = null, $x_ef_sender_user_agent = null, $PaymentEmbedData = null)
    {
        list($response) = $this->initPaymentWithHttpInfo($x_ef_sender_ip, $x_ef_sender_user_agent, $PaymentEmbedData);
        return $response;
    }

    /**
     * Operation initPaymentWithHttpInfo
     *
     * Init Payment
     *
     * @param  string $x_ef_sender_ip (optional)
     * @param  string $x_ef_sender_user_agent (optional)
     * @param  \belenka\Everifin\Client\Model\PaymentEmbedData $PaymentEmbedData (optional)
     *
     * @throws \belenka\Everifin\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \belenka\Everifin\Client\Model\InlineResponse2003|\belenka\Everifin\Client\Model\InlineResponse4001|\belenka\Everifin\Client\Model\InlineResponse401, HTTP status code, HTTP response headers (array of strings)
     */
    public function initPaymentWithHttpInfo($x_ef_sender_ip = null, $x_ef_sender_user_agent = null, $PaymentEmbedData = null)
    {
        $request = $this->initPaymentRequest($x_ef_sender_ip, $x_ef_sender_user_agent, $PaymentEmbedData);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\belenka\Everifin\Client\Model\InlineResponse2003' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\belenka\Everifin\Client\Model\InlineResponse2003', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\belenka\Everifin\Client\Model\InlineResponse4001' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\belenka\Everifin\Client\Model\InlineResponse4001', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\belenka\Everifin\Client\Model\InlineResponse401' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\belenka\Everifin\Client\Model\InlineResponse401', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\belenka\Everifin\Client\Model\InlineResponse2003';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\belenka\Everifin\Client\Model\InlineResponse2003',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\belenka\Everifin\Client\Model\InlineResponse4001',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\belenka\Everifin\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation initPaymentAsync
     *
     * Init Payment
     *
     * @param  string $x_ef_sender_ip (optional)
     * @param  string $x_ef_sender_user_agent (optional)
     * @param  \belenka\Everifin\Client\Model\PaymentEmbedData $PaymentEmbedData (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function initPaymentAsync($x_ef_sender_ip = null, $x_ef_sender_user_agent = null, $PaymentEmbedData = null)
    {
        return $this->initPaymentAsyncWithHttpInfo($x_ef_sender_ip, $x_ef_sender_user_agent, $PaymentEmbedData)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation initPaymentAsyncWithHttpInfo
     *
     * Init Payment
     *
     * @param  string $x_ef_sender_ip (optional)
     * @param  string $x_ef_sender_user_agent (optional)
     * @param  \belenka\Everifin\Client\Model\PaymentEmbedData $PaymentEmbedData (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function initPaymentAsyncWithHttpInfo($x_ef_sender_ip = null, $x_ef_sender_user_agent = null, $PaymentEmbedData = null)
    {
        $returnType = '\belenka\Everifin\Client\Model\InlineResponse2003';
        $request = $this->initPaymentRequest($x_ef_sender_ip, $x_ef_sender_user_agent, $PaymentEmbedData);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'initPayment'
     *
     * @param  string $x_ef_sender_ip (optional)
     * @param  string $x_ef_sender_user_agent (optional)
     * @param  \belenka\Everifin\Client\Model\PaymentEmbedData $PaymentEmbedData (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function initPaymentRequest($x_ef_sender_ip = null, $x_ef_sender_user_agent = null, $PaymentEmbedData = null)
    {

        $resourcePath = '/api/v1/payments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_ef_sender_ip !== null) {
            $headerParams['x-ef-sender-ip'] = ObjectSerializer::toHeaderValue($x_ef_sender_ip);
        }
        // header params
        if ($x_ef_sender_user_agent !== null) {
            $headerParams['x-ef-sender-user-agent'] = ObjectSerializer::toHeaderValue($x_ef_sender_user_agent);
        }



        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($PaymentEmbedData)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($PaymentEmbedData));
            } else {
                $httpBody = $PaymentEmbedData;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        if ($this->config->getAccessToken()) {
            $defaultHeaders['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation processPayment
     *
     * Process Payment
     *
     * @param  string $id id (required)
     * @param  \belenka\Everifin\Client\Model\PaymentFlowData $PaymentFlowData PaymentFlowData (optional)
     *
     * @throws \belenka\Everifin\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \belenka\Everifin\Client\Model\InlineResponse2006|\belenka\Everifin\Client\Model\InlineResponse4003|\belenka\Everifin\Client\Model\InlineResponse401|\belenka\Everifin\Client\Model\InlineResponse422
     */
    public function processPayment($id, $PaymentFlowData = null)
    {
        list($response) = $this->processPaymentWithHttpInfo($id, $PaymentFlowData);
        return $response;
    }

    /**
     * Operation processPaymentWithHttpInfo
     *
     * Process Payment
     *
     * @param  string $id (required)
     * @param  \belenka\Everifin\Client\Model\PaymentFlowData $PaymentFlowData (optional)
     *
     * @throws \belenka\Everifin\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \belenka\Everifin\Client\Model\InlineResponse2006|\belenka\Everifin\Client\Model\InlineResponse4003|\belenka\Everifin\Client\Model\InlineResponse401|\belenka\Everifin\Client\Model\InlineResponse422, HTTP status code, HTTP response headers (array of strings)
     */
    public function processPaymentWithHttpInfo($id, $PaymentFlowData = null)
    {
        $request = $this->processPaymentRequest($id, $PaymentFlowData);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\belenka\Everifin\Client\Model\InlineResponse2006' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\belenka\Everifin\Client\Model\InlineResponse2006', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\belenka\Everifin\Client\Model\InlineResponse4003' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\belenka\Everifin\Client\Model\InlineResponse4003', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\belenka\Everifin\Client\Model\InlineResponse401' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\belenka\Everifin\Client\Model\InlineResponse401', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\belenka\Everifin\Client\Model\InlineResponse422' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\belenka\Everifin\Client\Model\InlineResponse422', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\belenka\Everifin\Client\Model\InlineResponse2006';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\belenka\Everifin\Client\Model\InlineResponse2006',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\belenka\Everifin\Client\Model\InlineResponse4003',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\belenka\Everifin\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\belenka\Everifin\Client\Model\InlineResponse422',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation processPaymentAsync
     *
     * Process Payment
     *
     * @param  string $id (required)
     * @param  \belenka\Everifin\Client\Model\PaymentFlowData $PaymentFlowData (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function processPaymentAsync($id, $PaymentFlowData = null)
    {
        return $this->processPaymentAsyncWithHttpInfo($id, $PaymentFlowData)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation processPaymentAsyncWithHttpInfo
     *
     * Process Payment
     *
     * @param  string $id (required)
     * @param  \belenka\Everifin\Client\Model\PaymentFlowData $PaymentFlowData (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function processPaymentAsyncWithHttpInfo($id, $PaymentFlowData = null)
    {
        $returnType = '\belenka\Everifin\Client\Model\InlineResponse2006';
        $request = $this->processPaymentRequest($id, $PaymentFlowData);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'processPayment'
     *
     * @param  string $id (required)
     * @param  \belenka\Everifin\Client\Model\PaymentFlowData $PaymentFlowData (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function processPaymentRequest($id, $PaymentFlowData = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling processPayment'
            );
        }

        $resourcePath = '/api/v1/payments/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($PaymentFlowData)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($PaymentFlowData));
            } else {
                $httpBody = $PaymentFlowData;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        if ($this->config->getAccessToken()) {
            $defaultHeaders['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'PATCH',
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

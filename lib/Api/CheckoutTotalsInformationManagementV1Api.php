<?php
/**
 * CheckoutTotalsInformationManagementV1Api
 * PHP version 5
 *
 * @category Class
 * @package  SpringImport\Swagger\Magento2\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Commerce for B2B 2.2
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SpringImport\Swagger\Magento2\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use SpringImport\Swagger\Magento2\Client\ApiException;
use SpringImport\Swagger\Magento2\Client\Configuration;
use SpringImport\Swagger\Magento2\Client\HeaderSelector;
use SpringImport\Swagger\Magento2\Client\ObjectSerializer;

/**
 * CheckoutTotalsInformationManagementV1Api Class Doc Comment
 *
 * @category Class
 * @package  SpringImport\Swagger\Magento2\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CheckoutTotalsInformationManagementV1Api
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
     * Operation checkoutTotalsInformationManagementV1CalculatePost
     *
     * @param  int $cartId cartId (required)
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body104 $body body (optional)
     *
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SpringImport\Swagger\Magento2\Client\Model\QuoteDataTotalsInterface
     */
    public function checkoutTotalsInformationManagementV1CalculatePost($cartId, $body = null)
    {
        list($response) = $this->checkoutTotalsInformationManagementV1CalculatePostWithHttpInfo($cartId, $body);
        return $response;
    }

    /**
     * Operation checkoutTotalsInformationManagementV1CalculatePostWithHttpInfo
     *
     * @param  int $cartId (required)
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body104 $body (optional)
     *
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SpringImport\Swagger\Magento2\Client\Model\QuoteDataTotalsInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkoutTotalsInformationManagementV1CalculatePostWithHttpInfo($cartId, $body = null)
    {
        $returnType = '\SpringImport\Swagger\Magento2\Client\Model\QuoteDataTotalsInterface';
        $request = $this->checkoutTotalsInformationManagementV1CalculatePostRequest($cartId, $body);

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
                        '\SpringImport\Swagger\Magento2\Client\Model\QuoteDataTotalsInterface',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation checkoutTotalsInformationManagementV1CalculatePostAsync
     *
     * 
     *
     * @param  int $cartId (required)
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body104 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function checkoutTotalsInformationManagementV1CalculatePostAsync($cartId, $body = null)
    {
        return $this->checkoutTotalsInformationManagementV1CalculatePostAsyncWithHttpInfo($cartId, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation checkoutTotalsInformationManagementV1CalculatePostAsyncWithHttpInfo
     *
     * 
     *
     * @param  int $cartId (required)
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body104 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function checkoutTotalsInformationManagementV1CalculatePostAsyncWithHttpInfo($cartId, $body = null)
    {
        $returnType = '\SpringImport\Swagger\Magento2\Client\Model\QuoteDataTotalsInterface';
        $request = $this->checkoutTotalsInformationManagementV1CalculatePostRequest($cartId, $body);

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
     * Create request for operation 'checkoutTotalsInformationManagementV1CalculatePost'
     *
     * @param  int $cartId (required)
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body104 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function checkoutTotalsInformationManagementV1CalculatePostRequest($cartId, $body = null)
    {
        // verify the required parameter 'cartId' is set
        if ($cartId === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $cartId when calling checkoutTotalsInformationManagementV1CalculatePost'
            );
        }

        $resourcePath = '/V1/carts/{cartId}/totals-information';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($cartId !== null) {
            $resourcePath = str_replace(
                '{' . 'cartId' . '}',
                ObjectSerializer::toPathValue($cartId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        //$query = \GuzzleHttp\Psr7\build_query($queryParams);
        $query = \http_build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation checkoutTotalsInformationManagementV1CalculatePost_0
     *
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body105 $body body (optional)
     *
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SpringImport\Swagger\Magento2\Client\Model\QuoteDataTotalsInterface
     */
    public function checkoutTotalsInformationManagementV1CalculatePost_0($body = null)
    {
        list($response) = $this->checkoutTotalsInformationManagementV1CalculatePost_0WithHttpInfo($body);
        return $response;
    }

    /**
     * Operation checkoutTotalsInformationManagementV1CalculatePost_0WithHttpInfo
     *
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body105 $body (optional)
     *
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SpringImport\Swagger\Magento2\Client\Model\QuoteDataTotalsInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkoutTotalsInformationManagementV1CalculatePost_0WithHttpInfo($body = null)
    {
        $returnType = '\SpringImport\Swagger\Magento2\Client\Model\QuoteDataTotalsInterface';
        $request = $this->checkoutTotalsInformationManagementV1CalculatePost_0Request($body);

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
                        '\SpringImport\Swagger\Magento2\Client\Model\QuoteDataTotalsInterface',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation checkoutTotalsInformationManagementV1CalculatePost_0Async
     *
     * 
     *
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body105 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function checkoutTotalsInformationManagementV1CalculatePost_0Async($body = null)
    {
        return $this->checkoutTotalsInformationManagementV1CalculatePost_0AsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation checkoutTotalsInformationManagementV1CalculatePost_0AsyncWithHttpInfo
     *
     * 
     *
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body105 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function checkoutTotalsInformationManagementV1CalculatePost_0AsyncWithHttpInfo($body = null)
    {
        $returnType = '\SpringImport\Swagger\Magento2\Client\Model\QuoteDataTotalsInterface';
        $request = $this->checkoutTotalsInformationManagementV1CalculatePost_0Request($body);

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
     * Create request for operation 'checkoutTotalsInformationManagementV1CalculatePost_0'
     *
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body105 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function checkoutTotalsInformationManagementV1CalculatePost_0Request($body = null)
    {

        $resourcePath = '/V1/carts/mine/totals-information';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        //$query = \GuzzleHttp\Psr7\build_query($queryParams);
        $query = \http_build_query($queryParams);
        return new Request(
            'POST',
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

<?php
/**
 * CatalogProductWebsiteLinkRepositoryV1Api
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
 * CatalogProductWebsiteLinkRepositoryV1Api Class Doc Comment
 *
 * @category Class
 * @package  SpringImport\Swagger\Magento2\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CatalogProductWebsiteLinkRepositoryV1Api
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
     * Operation catalogProductWebsiteLinkRepositoryV1DeleteByIdDelete
     *
     * @param  string $sku sku (required)
     * @param  int $websiteId websiteId (required)
     *
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return bool
     */
    public function catalogProductWebsiteLinkRepositoryV1DeleteByIdDelete($sku, $websiteId)
    {
        list($response) = $this->catalogProductWebsiteLinkRepositoryV1DeleteByIdDeleteWithHttpInfo($sku, $websiteId);
        return $response;
    }

    /**
     * Operation catalogProductWebsiteLinkRepositoryV1DeleteByIdDeleteWithHttpInfo
     *
     * @param  string $sku (required)
     * @param  int $websiteId (required)
     *
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function catalogProductWebsiteLinkRepositoryV1DeleteByIdDeleteWithHttpInfo($sku, $websiteId)
    {
        $returnType = 'bool';
        $request = $this->catalogProductWebsiteLinkRepositoryV1DeleteByIdDeleteRequest($sku, $websiteId);

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
                        'bool',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse',
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
     * Operation catalogProductWebsiteLinkRepositoryV1DeleteByIdDeleteAsync
     *
     * 
     *
     * @param  string $sku (required)
     * @param  int $websiteId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function catalogProductWebsiteLinkRepositoryV1DeleteByIdDeleteAsync($sku, $websiteId)
    {
        return $this->catalogProductWebsiteLinkRepositoryV1DeleteByIdDeleteAsyncWithHttpInfo($sku, $websiteId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation catalogProductWebsiteLinkRepositoryV1DeleteByIdDeleteAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $sku (required)
     * @param  int $websiteId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function catalogProductWebsiteLinkRepositoryV1DeleteByIdDeleteAsyncWithHttpInfo($sku, $websiteId)
    {
        $returnType = 'bool';
        $request = $this->catalogProductWebsiteLinkRepositoryV1DeleteByIdDeleteRequest($sku, $websiteId);

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
     * Create request for operation 'catalogProductWebsiteLinkRepositoryV1DeleteByIdDelete'
     *
     * @param  string $sku (required)
     * @param  int $websiteId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function catalogProductWebsiteLinkRepositoryV1DeleteByIdDeleteRequest($sku, $websiteId)
    {
        // verify the required parameter 'sku' is set
        if ($sku === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sku when calling catalogProductWebsiteLinkRepositoryV1DeleteByIdDelete'
            );
        }
        // verify the required parameter 'websiteId' is set
        if ($websiteId === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $websiteId when calling catalogProductWebsiteLinkRepositoryV1DeleteByIdDelete'
            );
        }

        $resourcePath = '/V1/products/{sku}/websites/{websiteId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($sku !== null) {
            $resourcePath = str_replace(
                '{' . 'sku' . '}',
                ObjectSerializer::toPathValue($sku),
                $resourcePath
            );
        }
        // path params
        if ($websiteId !== null) {
            $resourcePath = str_replace(
                '{' . 'websiteId' . '}',
                ObjectSerializer::toPathValue($websiteId),
                $resourcePath
            );
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
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation catalogProductWebsiteLinkRepositoryV1SavePost
     *
     * @param  string $sku sku (required)
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body53 $body body (optional)
     *
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return bool
     */
    public function catalogProductWebsiteLinkRepositoryV1SavePost($sku, $body = null)
    {
        list($response) = $this->catalogProductWebsiteLinkRepositoryV1SavePostWithHttpInfo($sku, $body);
        return $response;
    }

    /**
     * Operation catalogProductWebsiteLinkRepositoryV1SavePostWithHttpInfo
     *
     * @param  string $sku (required)
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body53 $body (optional)
     *
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function catalogProductWebsiteLinkRepositoryV1SavePostWithHttpInfo($sku, $body = null)
    {
        $returnType = 'bool';
        $request = $this->catalogProductWebsiteLinkRepositoryV1SavePostRequest($sku, $body);

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
                        'bool',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse',
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
     * Operation catalogProductWebsiteLinkRepositoryV1SavePostAsync
     *
     * 
     *
     * @param  string $sku (required)
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body53 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function catalogProductWebsiteLinkRepositoryV1SavePostAsync($sku, $body = null)
    {
        return $this->catalogProductWebsiteLinkRepositoryV1SavePostAsyncWithHttpInfo($sku, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation catalogProductWebsiteLinkRepositoryV1SavePostAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $sku (required)
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body53 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function catalogProductWebsiteLinkRepositoryV1SavePostAsyncWithHttpInfo($sku, $body = null)
    {
        $returnType = 'bool';
        $request = $this->catalogProductWebsiteLinkRepositoryV1SavePostRequest($sku, $body);

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
     * Create request for operation 'catalogProductWebsiteLinkRepositoryV1SavePost'
     *
     * @param  string $sku (required)
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body53 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function catalogProductWebsiteLinkRepositoryV1SavePostRequest($sku, $body = null)
    {
        // verify the required parameter 'sku' is set
        if ($sku === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sku when calling catalogProductWebsiteLinkRepositoryV1SavePost'
            );
        }

        $resourcePath = '/V1/products/{sku}/websites';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($sku !== null) {
            $resourcePath = str_replace(
                '{' . 'sku' . '}',
                ObjectSerializer::toPathValue($sku),
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
     * Operation catalogProductWebsiteLinkRepositoryV1SavePut
     *
     * @param  string $sku sku (required)
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body52 $body body (optional)
     *
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return bool
     */
    public function catalogProductWebsiteLinkRepositoryV1SavePut($sku, $body = null)
    {
        list($response) = $this->catalogProductWebsiteLinkRepositoryV1SavePutWithHttpInfo($sku, $body);
        return $response;
    }

    /**
     * Operation catalogProductWebsiteLinkRepositoryV1SavePutWithHttpInfo
     *
     * @param  string $sku (required)
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body52 $body (optional)
     *
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function catalogProductWebsiteLinkRepositoryV1SavePutWithHttpInfo($sku, $body = null)
    {
        $returnType = 'bool';
        $request = $this->catalogProductWebsiteLinkRepositoryV1SavePutRequest($sku, $body);

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
                        'bool',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse',
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
     * Operation catalogProductWebsiteLinkRepositoryV1SavePutAsync
     *
     * 
     *
     * @param  string $sku (required)
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body52 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function catalogProductWebsiteLinkRepositoryV1SavePutAsync($sku, $body = null)
    {
        return $this->catalogProductWebsiteLinkRepositoryV1SavePutAsyncWithHttpInfo($sku, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation catalogProductWebsiteLinkRepositoryV1SavePutAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $sku (required)
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body52 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function catalogProductWebsiteLinkRepositoryV1SavePutAsyncWithHttpInfo($sku, $body = null)
    {
        $returnType = 'bool';
        $request = $this->catalogProductWebsiteLinkRepositoryV1SavePutRequest($sku, $body);

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
     * Create request for operation 'catalogProductWebsiteLinkRepositoryV1SavePut'
     *
     * @param  string $sku (required)
     * @param  \SpringImport\Swagger\Magento2\Client\Model\Body52 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function catalogProductWebsiteLinkRepositoryV1SavePutRequest($sku, $body = null)
    {
        // verify the required parameter 'sku' is set
        if ($sku === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sku when calling catalogProductWebsiteLinkRepositoryV1SavePut'
            );
        }

        $resourcePath = '/V1/products/{sku}/websites';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($sku !== null) {
            $resourcePath = str_replace(
                '{' . 'sku' . '}',
                ObjectSerializer::toPathValue($sku),
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
            'PUT',
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

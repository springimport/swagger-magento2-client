<?php
/**
 * QuoteGuestCartTotalManagementV1Api
 * PHP version 5
 *
 * @category Class
 * @package  SpringImport\Magento2SwaggerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Community
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SpringImport\Magento2SwaggerApi\Api;

use \SpringImport\Magento2SwaggerApi\ApiClient;
use \SpringImport\Magento2SwaggerApi\ApiException;
use \SpringImport\Magento2SwaggerApi\Configuration;
use \SpringImport\Magento2SwaggerApi\ObjectSerializer;

/**
 * QuoteGuestCartTotalManagementV1Api Class Doc Comment
 *
 * @category Class
 * @package  SpringImport\Magento2SwaggerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QuoteGuestCartTotalManagementV1Api
{
    /**
     * API Client
     *
     * @var \SpringImport\Magento2SwaggerApi\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \SpringImport\Magento2SwaggerApi\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\SpringImport\Magento2SwaggerApi\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \SpringImport\Magento2SwaggerApi\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \SpringImport\Magento2SwaggerApi\ApiClient $apiClient set the API client
     *
     * @return QuoteGuestCartTotalManagementV1Api
     */
    public function setApiClient(\SpringImport\Magento2SwaggerApi\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation quoteGuestCartTotalManagementV1CollectTotalsPut
     *
     * 
     *
     * @param string $cartId The cart ID. (required)
     * @param \SpringImport\Magento2SwaggerApi\Model\Body9 $body  (optional)
     * @throws \SpringImport\Magento2SwaggerApi\ApiException on non-2xx response
     * @return \SpringImport\Magento2SwaggerApi\Model\QuoteDataTotalsInterface
     */
    public function quoteGuestCartTotalManagementV1CollectTotalsPut($cartId, $body = null)
    {
        list($response) = $this->quoteGuestCartTotalManagementV1CollectTotalsPutWithHttpInfo($cartId, $body);
        return $response;
    }

    /**
     * Operation quoteGuestCartTotalManagementV1CollectTotalsPutWithHttpInfo
     *
     * 
     *
     * @param string $cartId The cart ID. (required)
     * @param \SpringImport\Magento2SwaggerApi\Model\Body9 $body  (optional)
     * @throws \SpringImport\Magento2SwaggerApi\ApiException on non-2xx response
     * @return array of \SpringImport\Magento2SwaggerApi\Model\QuoteDataTotalsInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function quoteGuestCartTotalManagementV1CollectTotalsPutWithHttpInfo($cartId, $body = null)
    {
        // verify the required parameter 'cartId' is set
        if ($cartId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cartId when calling quoteGuestCartTotalManagementV1CollectTotalsPut');
        }
        // parse inputs
        $resourcePath = "/V1/guest-carts/{cartId}/collect-totals";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($cartId !== null) {
            $resourcePath = str_replace(
                "{" . "cartId" . "}",
                $this->apiClient->getSerializer()->toPathValue($cartId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SpringImport\Magento2SwaggerApi\Model\QuoteDataTotalsInterface',
                '/V1/guest-carts/{cartId}/collect-totals'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SpringImport\Magento2SwaggerApi\Model\QuoteDataTotalsInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Magento2SwaggerApi\Model\QuoteDataTotalsInterface', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Magento2SwaggerApi\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}

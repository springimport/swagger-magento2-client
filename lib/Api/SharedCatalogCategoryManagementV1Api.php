<?php
/**
 * SharedCatalogCategoryManagementV1Api
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
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SpringImport\Swagger\Magento2\Client\Api;

use \SpringImport\Swagger\Magento2\Client\ApiClient;
use \SpringImport\Swagger\Magento2\Client\ApiException;
use \SpringImport\Swagger\Magento2\Client\Configuration;
use \SpringImport\Swagger\Magento2\Client\ObjectSerializer;

/**
 * SharedCatalogCategoryManagementV1Api Class Doc Comment
 *
 * @category Class
 * @package  SpringImport\Swagger\Magento2\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SharedCatalogCategoryManagementV1Api
{
    /**
     * API Client
     *
     * @var \SpringImport\Swagger\Magento2\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \SpringImport\Swagger\Magento2\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\SpringImport\Swagger\Magento2\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \SpringImport\Swagger\Magento2\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \SpringImport\Swagger\Magento2\Client\ApiClient $apiClient set the API client
     *
     * @return SharedCatalogCategoryManagementV1Api
     */
    public function setApiClient(\SpringImport\Swagger\Magento2\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation sharedCatalogCategoryManagementV1AssignCategoriesPost
     *
     * 
     *
     * @param int $id  (required)
     * @param \SpringImport\Swagger\Magento2\Client\Model\Body147 $body  (optional)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return bool
     */
    public function sharedCatalogCategoryManagementV1AssignCategoriesPost($id, $body = null)
    {
        list($response) = $this->sharedCatalogCategoryManagementV1AssignCategoriesPostWithHttpInfo($id, $body);
        return $response;
    }

    /**
     * Operation sharedCatalogCategoryManagementV1AssignCategoriesPostWithHttpInfo
     *
     * 
     *
     * @param int $id  (required)
     * @param \SpringImport\Swagger\Magento2\Client\Model\Body147 $body  (optional)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function sharedCatalogCategoryManagementV1AssignCategoriesPostWithHttpInfo($id, $body = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling sharedCatalogCategoryManagementV1AssignCategoriesPost');
        }
        // parse inputs
        $resourcePath = "/V1/sharedCatalog/{id}/assignCategories";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'bool',
                '/V1/sharedCatalog/{id}/assignCategories'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'bool', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'bool', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation sharedCatalogCategoryManagementV1GetCategoriesGet
     *
     * 
     *
     * @param int $id  (required)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return int[]
     */
    public function sharedCatalogCategoryManagementV1GetCategoriesGet($id)
    {
        list($response) = $this->sharedCatalogCategoryManagementV1GetCategoriesGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation sharedCatalogCategoryManagementV1GetCategoriesGetWithHttpInfo
     *
     * 
     *
     * @param int $id  (required)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return array of int[], HTTP status code, HTTP response headers (array of strings)
     */
    public function sharedCatalogCategoryManagementV1GetCategoriesGetWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling sharedCatalogCategoryManagementV1GetCategoriesGet');
        }
        // parse inputs
        $resourcePath = "/V1/sharedCatalog/{id}/categories";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'int[]',
                '/V1/sharedCatalog/{id}/categories'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'int[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'int[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation sharedCatalogCategoryManagementV1UnassignCategoriesPost
     *
     * 
     *
     * @param int $id  (required)
     * @param \SpringImport\Swagger\Magento2\Client\Model\Body148 $body  (optional)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return bool
     */
    public function sharedCatalogCategoryManagementV1UnassignCategoriesPost($id, $body = null)
    {
        list($response) = $this->sharedCatalogCategoryManagementV1UnassignCategoriesPostWithHttpInfo($id, $body);
        return $response;
    }

    /**
     * Operation sharedCatalogCategoryManagementV1UnassignCategoriesPostWithHttpInfo
     *
     * 
     *
     * @param int $id  (required)
     * @param \SpringImport\Swagger\Magento2\Client\Model\Body148 $body  (optional)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function sharedCatalogCategoryManagementV1UnassignCategoriesPostWithHttpInfo($id, $body = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling sharedCatalogCategoryManagementV1UnassignCategoriesPost');
        }
        // parse inputs
        $resourcePath = "/V1/sharedCatalog/{id}/unassignCategories";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'bool',
                '/V1/sharedCatalog/{id}/unassignCategories'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'bool', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'bool', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
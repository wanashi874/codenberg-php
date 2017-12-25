<?php
/**
 * TemplatesApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * コーデンベルク APIリファレンス
 *
 * 印刷APIプラットフォーム「[コーデンベルク](https://codenberg.io/)」はさまざまなシステムと連携することができるように、WebAPIを公開しています。コーデンベルク APIを使って、印刷物の注文はもちろん、テンプレートの登録や可変領域の設定ができます。コーデンベルク APIは、RESTfulな設計なのでかんたんにシステム連携できます。
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * TemplatesApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TemplatesApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return TemplatesApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getTemplateById
     *
     * Find template by ID
     *
     * @param int $template_id テンプレートのIDを指定します。 (required)
     * @param bool $including_custom_fields 可変領域の情報を含めるかを設定します。 (optional, default to true)
     * @param bool $including_formats フォーマットの情報を含めるかを設定します。 (optional, default to false)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\Template
     */
    public function getTemplateById($template_id, $including_custom_fields = 'true', $including_formats = 'false')
    {
        list($response) = $this->getTemplateByIdWithHttpInfo($template_id, $including_custom_fields, $including_formats);
        return $response;
    }

    /**
     * Operation getTemplateByIdWithHttpInfo
     *
     * Find template by ID
     *
     * @param int $template_id テンプレートのIDを指定します。 (required)
     * @param bool $including_custom_fields 可変領域の情報を含めるかを設定します。 (optional, default to true)
     * @param bool $including_formats フォーマットの情報を含めるかを設定します。 (optional, default to false)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\Template, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTemplateByIdWithHttpInfo($template_id, $including_custom_fields = 'true', $including_formats = 'false')
    {
        // verify the required parameter 'template_id' is set
        if ($template_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $template_id when calling getTemplateById');
        }
        // parse inputs
        $resourcePath = "/templates/{template_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($including_custom_fields !== null) {
            $queryParams['including_custom_fields'] = $this->apiClient->getSerializer()->toQueryValue($including_custom_fields);
        }
        // query params
        if ($including_formats !== null) {
            $queryParams['including_formats'] = $this->apiClient->getSerializer()->toQueryValue($including_formats);
        }
        // path params
        if ($template_id !== null) {
            $resourcePath = str_replace(
                "{" . "template_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($template_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Template',
                '/templates/{template_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Template', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Template', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getTemplates
     *
     * Get template list by query.
     *
     * @param string $q 検索文字列を指定します。template名、キーワードが対象となります。 (optional)
     * @param string $sort id/format_id/name/keywords/created_atを指定できます。 (optional, default to id)
     * @param string $direction 項目の並び順を指定します。asc(昇順)/desc(降順) (optional, default to desc)
     * @param int $per_page 1ページあたりの取得項目数。最大:50件 (optional, default to 10)
     * @param int $page ページ番号を指定。 (optional, default to 1)
     * @param bool $including_private 非公開のテンプレートを含めるかどうかを指定します。 (optional, default to false)
     * @param bool $including_custom_fields 可変領域の情報を含めるかを設定します。 (optional, default to false)
     * @param bool $including_formats フォーマットの情報を含めるかを設定します。 (optional, default to false)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\TemplateList
     */
    public function getTemplates($q = null, $sort = 'id', $direction = 'desc', $per_page = '10', $page = '1', $including_private = 'false', $including_custom_fields = 'false', $including_formats = 'false')
    {
        list($response) = $this->getTemplatesWithHttpInfo($q, $sort, $direction, $per_page, $page, $including_private, $including_custom_fields, $including_formats);
        return $response;
    }

    /**
     * Operation getTemplatesWithHttpInfo
     *
     * Get template list by query.
     *
     * @param string $q 検索文字列を指定します。template名、キーワードが対象となります。 (optional)
     * @param string $sort id/format_id/name/keywords/created_atを指定できます。 (optional, default to id)
     * @param string $direction 項目の並び順を指定します。asc(昇順)/desc(降順) (optional, default to desc)
     * @param int $per_page 1ページあたりの取得項目数。最大:50件 (optional, default to 10)
     * @param int $page ページ番号を指定。 (optional, default to 1)
     * @param bool $including_private 非公開のテンプレートを含めるかどうかを指定します。 (optional, default to false)
     * @param bool $including_custom_fields 可変領域の情報を含めるかを設定します。 (optional, default to false)
     * @param bool $including_formats フォーマットの情報を含めるかを設定します。 (optional, default to false)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\TemplateList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTemplatesWithHttpInfo($q = null, $sort = 'id', $direction = 'desc', $per_page = '10', $page = '1', $including_private = 'false', $including_custom_fields = 'false', $including_formats = 'false')
    {
        // parse inputs
        $resourcePath = "/templates";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($q !== null) {
            $queryParams['q'] = $this->apiClient->getSerializer()->toQueryValue($q);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }
        // query params
        if ($direction !== null) {
            $queryParams['direction'] = $this->apiClient->getSerializer()->toQueryValue($direction);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = $this->apiClient->getSerializer()->toQueryValue($per_page);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($including_private !== null) {
            $queryParams['including_private'] = $this->apiClient->getSerializer()->toQueryValue($including_private);
        }
        // query params
        if ($including_custom_fields !== null) {
            $queryParams['including_custom_fields'] = $this->apiClient->getSerializer()->toQueryValue($including_custom_fields);
        }
        // query params
        if ($including_formats !== null) {
            $queryParams['including_formats'] = $this->apiClient->getSerializer()->toQueryValue($including_formats);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\TemplateList',
                '/templates'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\TemplateList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\TemplateList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
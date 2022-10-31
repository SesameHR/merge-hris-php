<?php
/**
 * LinkedAccountsApi
 * PHP version 7.2
 *
 * @category Class
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Merge HRIS API
 *
 * The unified API for building rich integrations with multiple HR Information System platforms.
 *
 * The version of the OpenAPI document: 1.0
 * Contact: hello@merge.dev
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MergeHRISClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use MergeHRISClient\ApiException;
use MergeHRISClient\Configuration;
use MergeHRISClient\HeaderSelector;
use MergeHRISClient\ObjectSerializer;

/**
 * LinkedAccountsApi Class Doc Comment
 *
 * @category Class
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LinkedAccountsApi
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
     * Operation linkedAccountsList
     *
     * @param  string $category category (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  string $end_user_email_address If provided, will only return linked accounts associated with the given email address. (optional)
     * @param  string $end_user_organization_name If provided, will only return linked accounts associated with the given organization name. (optional)
     * @param  string $end_user_origin_id If provided, will only return linked accounts associated with the given origin ID. (optional)
     * @param  string $end_user_origin_ids Comma-separated list of EndUser origin IDs, making it possible to specify multiple EndUsers at once. (optional)
     * @param  string $id id (optional)
     * @param  string $ids Comma-separated list of LinkedAccount IDs, making it possible to specify multiple LinkedAccounts at once. (optional)
     * @param  bool $include_duplicates If &#x60;true&#x60;, will include complete production duplicates of the account specified by the &#x60;id&#x60; query parameter in the response. &#x60;id&#x60; must be for a complete production linked account. (optional)
     * @param  string $integration_name If provided, will only return linked accounts associated with the given integration name. (optional)
     * @param  string $is_test_account If included, will only include test linked accounts. If not included, will only include non-test linked accounts. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     * @param  string $status Filter by status. Options: &#x60;COMPLETE&#x60;, &#x60;INCOMPLETE&#x60;, &#x60;RELINK_NEEDED&#x60; (optional)
     *
     * @throws \MergeHRISClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MergeHRISClient\Model\PaginatedAccountDetailsAndActionsList
     */
    public function linkedAccountsList($category = null, $cursor = null, $end_user_email_address = null, $end_user_organization_name = null, $end_user_origin_id = null, $end_user_origin_ids = null, $id = null, $ids = null, $include_duplicates = null, $integration_name = null, $is_test_account = null, $page_size = null, $status = null)
    {
        list($response) = $this->linkedAccountsListWithHttpInfo($category, $cursor, $end_user_email_address, $end_user_organization_name, $end_user_origin_id, $end_user_origin_ids, $id, $ids, $include_duplicates, $integration_name, $is_test_account, $page_size, $status);
        return $response;
    }

    /**
     * Operation linkedAccountsListWithHttpInfo
     *
     * @param  string $category (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  string $end_user_email_address If provided, will only return linked accounts associated with the given email address. (optional)
     * @param  string $end_user_organization_name If provided, will only return linked accounts associated with the given organization name. (optional)
     * @param  string $end_user_origin_id If provided, will only return linked accounts associated with the given origin ID. (optional)
     * @param  string $end_user_origin_ids Comma-separated list of EndUser origin IDs, making it possible to specify multiple EndUsers at once. (optional)
     * @param  string $id (optional)
     * @param  string $ids Comma-separated list of LinkedAccount IDs, making it possible to specify multiple LinkedAccounts at once. (optional)
     * @param  bool $include_duplicates If &#x60;true&#x60;, will include complete production duplicates of the account specified by the &#x60;id&#x60; query parameter in the response. &#x60;id&#x60; must be for a complete production linked account. (optional)
     * @param  string $integration_name If provided, will only return linked accounts associated with the given integration name. (optional)
     * @param  string $is_test_account If included, will only include test linked accounts. If not included, will only include non-test linked accounts. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     * @param  string $status Filter by status. Options: &#x60;COMPLETE&#x60;, &#x60;INCOMPLETE&#x60;, &#x60;RELINK_NEEDED&#x60; (optional)
     *
     * @throws \MergeHRISClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MergeHRISClient\Model\PaginatedAccountDetailsAndActionsList, HTTP status code, HTTP response headers (array of strings)
     */
    public function linkedAccountsListWithHttpInfo($category = null, $cursor = null, $end_user_email_address = null, $end_user_organization_name = null, $end_user_origin_id = null, $end_user_origin_ids = null, $id = null, $ids = null, $include_duplicates = null, $integration_name = null, $is_test_account = null, $page_size = null, $status = null)
    {
        $request = $this->linkedAccountsListRequest($category, $cursor, $end_user_email_address, $end_user_organization_name, $end_user_origin_id, $end_user_origin_ids, $id, $ids, $include_duplicates, $integration_name, $is_test_account, $page_size, $status);

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
                    if ('\MergeHRISClient\Model\PaginatedAccountDetailsAndActionsList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MergeHRISClient\Model\PaginatedAccountDetailsAndActionsList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MergeHRISClient\Model\PaginatedAccountDetailsAndActionsList';
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
                        '\MergeHRISClient\Model\PaginatedAccountDetailsAndActionsList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation linkedAccountsListAsync
     *
     * @param  string $category (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  string $end_user_email_address If provided, will only return linked accounts associated with the given email address. (optional)
     * @param  string $end_user_organization_name If provided, will only return linked accounts associated with the given organization name. (optional)
     * @param  string $end_user_origin_id If provided, will only return linked accounts associated with the given origin ID. (optional)
     * @param  string $end_user_origin_ids Comma-separated list of EndUser origin IDs, making it possible to specify multiple EndUsers at once. (optional)
     * @param  string $id (optional)
     * @param  string $ids Comma-separated list of LinkedAccount IDs, making it possible to specify multiple LinkedAccounts at once. (optional)
     * @param  bool $include_duplicates If &#x60;true&#x60;, will include complete production duplicates of the account specified by the &#x60;id&#x60; query parameter in the response. &#x60;id&#x60; must be for a complete production linked account. (optional)
     * @param  string $integration_name If provided, will only return linked accounts associated with the given integration name. (optional)
     * @param  string $is_test_account If included, will only include test linked accounts. If not included, will only include non-test linked accounts. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     * @param  string $status Filter by status. Options: &#x60;COMPLETE&#x60;, &#x60;INCOMPLETE&#x60;, &#x60;RELINK_NEEDED&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function linkedAccountsListAsync($category = null, $cursor = null, $end_user_email_address = null, $end_user_organization_name = null, $end_user_origin_id = null, $end_user_origin_ids = null, $id = null, $ids = null, $include_duplicates = null, $integration_name = null, $is_test_account = null, $page_size = null, $status = null)
    {
        return $this->linkedAccountsListAsyncWithHttpInfo($category, $cursor, $end_user_email_address, $end_user_organization_name, $end_user_origin_id, $end_user_origin_ids, $id, $ids, $include_duplicates, $integration_name, $is_test_account, $page_size, $status)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation linkedAccountsListAsyncWithHttpInfo
     *
     * @param  string $category (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  string $end_user_email_address If provided, will only return linked accounts associated with the given email address. (optional)
     * @param  string $end_user_organization_name If provided, will only return linked accounts associated with the given organization name. (optional)
     * @param  string $end_user_origin_id If provided, will only return linked accounts associated with the given origin ID. (optional)
     * @param  string $end_user_origin_ids Comma-separated list of EndUser origin IDs, making it possible to specify multiple EndUsers at once. (optional)
     * @param  string $id (optional)
     * @param  string $ids Comma-separated list of LinkedAccount IDs, making it possible to specify multiple LinkedAccounts at once. (optional)
     * @param  bool $include_duplicates If &#x60;true&#x60;, will include complete production duplicates of the account specified by the &#x60;id&#x60; query parameter in the response. &#x60;id&#x60; must be for a complete production linked account. (optional)
     * @param  string $integration_name If provided, will only return linked accounts associated with the given integration name. (optional)
     * @param  string $is_test_account If included, will only include test linked accounts. If not included, will only include non-test linked accounts. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     * @param  string $status Filter by status. Options: &#x60;COMPLETE&#x60;, &#x60;INCOMPLETE&#x60;, &#x60;RELINK_NEEDED&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function linkedAccountsListAsyncWithHttpInfo($category = null, $cursor = null, $end_user_email_address = null, $end_user_organization_name = null, $end_user_origin_id = null, $end_user_origin_ids = null, $id = null, $ids = null, $include_duplicates = null, $integration_name = null, $is_test_account = null, $page_size = null, $status = null)
    {
        $returnType = '\MergeHRISClient\Model\PaginatedAccountDetailsAndActionsList';
        $request = $this->linkedAccountsListRequest($category, $cursor, $end_user_email_address, $end_user_organization_name, $end_user_origin_id, $end_user_origin_ids, $id, $ids, $include_duplicates, $integration_name, $is_test_account, $page_size, $status);

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
     * Create request for operation 'linkedAccountsList'
     *
     * @param  string $category (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  string $end_user_email_address If provided, will only return linked accounts associated with the given email address. (optional)
     * @param  string $end_user_organization_name If provided, will only return linked accounts associated with the given organization name. (optional)
     * @param  string $end_user_origin_id If provided, will only return linked accounts associated with the given origin ID. (optional)
     * @param  string $end_user_origin_ids Comma-separated list of EndUser origin IDs, making it possible to specify multiple EndUsers at once. (optional)
     * @param  string $id (optional)
     * @param  string $ids Comma-separated list of LinkedAccount IDs, making it possible to specify multiple LinkedAccounts at once. (optional)
     * @param  bool $include_duplicates If &#x60;true&#x60;, will include complete production duplicates of the account specified by the &#x60;id&#x60; query parameter in the response. &#x60;id&#x60; must be for a complete production linked account. (optional)
     * @param  string $integration_name If provided, will only return linked accounts associated with the given integration name. (optional)
     * @param  string $is_test_account If included, will only include test linked accounts. If not included, will only include non-test linked accounts. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     * @param  string $status Filter by status. Options: &#x60;COMPLETE&#x60;, &#x60;INCOMPLETE&#x60;, &#x60;RELINK_NEEDED&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function linkedAccountsListRequest($category = null, $cursor = null, $end_user_email_address = null, $end_user_organization_name = null, $end_user_origin_id = null, $end_user_origin_ids = null, $id = null, $ids = null, $include_duplicates = null, $integration_name = null, $is_test_account = null, $page_size = null, $status = null)
    {

        $resourcePath = '/linked-accounts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($category !== null) {
            if('form' === 'form' && is_array($category)) {
                foreach($category as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['category'] = $category;
            }
        }
        // query params
        if ($cursor !== null) {
            if('form' === 'form' && is_array($cursor)) {
                foreach($cursor as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['cursor'] = $cursor;
            }
        }
        // query params
        if ($end_user_email_address !== null) {
            if('form' === 'form' && is_array($end_user_email_address)) {
                foreach($end_user_email_address as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['end_user_email_address'] = $end_user_email_address;
            }
        }
        // query params
        if ($end_user_organization_name !== null) {
            if('form' === 'form' && is_array($end_user_organization_name)) {
                foreach($end_user_organization_name as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['end_user_organization_name'] = $end_user_organization_name;
            }
        }
        // query params
        if ($end_user_origin_id !== null) {
            if('form' === 'form' && is_array($end_user_origin_id)) {
                foreach($end_user_origin_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['end_user_origin_id'] = $end_user_origin_id;
            }
        }
        // query params
        if ($end_user_origin_ids !== null) {
            if('form' === 'form' && is_array($end_user_origin_ids)) {
                foreach($end_user_origin_ids as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['end_user_origin_ids'] = $end_user_origin_ids;
            }
        }
        // query params
        if ($id !== null) {
            if('form' === 'form' && is_array($id)) {
                foreach($id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['id'] = $id;
            }
        }
        // query params
        if ($ids !== null) {
            if('form' === 'form' && is_array($ids)) {
                foreach($ids as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['ids'] = $ids;
            }
        }
        // query params
        if ($include_duplicates !== null) {
            if('form' === 'form' && is_array($include_duplicates)) {
                foreach($include_duplicates as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['include_duplicates'] = $include_duplicates;
            }
        }
        // query params
        if ($integration_name !== null) {
            if('form' === 'form' && is_array($integration_name)) {
                foreach($integration_name as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['integration_name'] = $integration_name;
            }
        }
        // query params
        if ($is_test_account !== null) {
            if('form' === 'form' && is_array($is_test_account)) {
                foreach($is_test_account as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['is_test_account'] = $is_test_account;
            }
        }
        // query params
        if ($page_size !== null) {
            if('form' === 'form' && is_array($page_size)) {
                foreach($page_size as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page_size'] = $page_size;
            }
        }
        // query params
        if ($status !== null) {
            if('form' === 'form' && is_array($status)) {
                foreach($status as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['status'] = $status;
            }
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

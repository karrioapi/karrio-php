<?php
/**
 * CarriersApi
 * PHP version 7.3
 *
 * @category Class
 * @package  Karrio
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Karrio API
 *
 * ## API Reference  Karrio is an open source multi-carrier shipping API that simplifies the integration of logistic carrier services.  The Karrio API is organized around REST. Our API has predictable resource-oriented URLs, accepts JSON-encoded request bodies, returns JSON-encoded responses, and uses standard HTTP response codes, authentication, and verbs.  The Karrio API differs for every account as we release new versions. These docs are customized to your version of the API.   ## Versioning  When backwards-incompatible changes are made to the API, a new, dated version is released. The current version is `2022.4`.  Read our API changelog and to learn more about backwards compatibility.  As a precaution, use API versioning to check a new API version before committing to an upgrade.   ## Pagination  All top-level API resources have support for bulk fetches via \"list\" API methods. For instance, you can list addresses, list shipments, and list trackers. These list API methods share a common structure, taking at least these two parameters: limit, and offset.  Karrio utilizes offset-based pagination via the offset and limit parameters. Both parameters take a number as value (see below) and return objects in reverse chronological order. The offset parameter returns objects listed after an index. The limit parameter take a limit on the number of objects to be returned from 1 to 100.   ```json {     \"next\": \"/v1/shipments?limit=25&offset=25\",     \"previous\": \"/v1/shipments?limit=25&offset=25\",     \"results\": [     ] } ```  ## Environments  The Karrio API offer the possibility to create and retrieve certain objects in `test_mode`. In development, it is therefore possible to add carrier connections, get live rates, buy labels, create trackers and schedule pickups in `test_mode`.
 *
 * The version of the OpenAPI document: 2022.4
 * Contact: 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Karrio\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Karrio\ApiException;
use Karrio\Configuration;
use Karrio\HeaderSelector;
use Karrio\ObjectSerializer;

/**
 * CarriersApi Class Doc Comment
 *
 * @category Class
 * @package  Karrio
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CarriersApi
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
     * Operation getServices
     *
     * Get carrier services
     *
     * @param  string $carrier_name carrier_name (required)
     *
     * @throws \Karrio\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array<string,object>
     */
    public function getServices($carrier_name)
    {
        list($response) = $this->getServicesWithHttpInfo($carrier_name);
        return $response;
    }

    /**
     * Operation getServicesWithHttpInfo
     *
     * Get carrier services
     *
     * @param  string $carrier_name (required)
     *
     * @throws \Karrio\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of array<string,object>, HTTP status code, HTTP response headers (array of strings)
     */
    public function getServicesWithHttpInfo($carrier_name)
    {
        $request = $this->getServicesRequest($carrier_name);

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
                    if ('array<string,object>' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'array<string,object>', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'array<string,object>';
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
                        'array<string,object>',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getServicesAsync
     *
     * Get carrier services
     *
     * @param  string $carrier_name (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getServicesAsync($carrier_name)
    {
        return $this->getServicesAsyncWithHttpInfo($carrier_name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getServicesAsyncWithHttpInfo
     *
     * Get carrier services
     *
     * @param  string $carrier_name (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getServicesAsyncWithHttpInfo($carrier_name)
    {
        $returnType = 'array<string,object>';
        $request = $this->getServicesRequest($carrier_name);

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
     * Create request for operation 'getServices'
     *
     * @param  string $carrier_name (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getServicesRequest($carrier_name)
    {
        // verify the required parameter 'carrier_name' is set
        if ($carrier_name === null || (is_array($carrier_name) && count($carrier_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $carrier_name when calling getServices'
            );
        }

        $resourcePath = '/v1/carriers/{carrier_name}/services';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($carrier_name !== null) {
            $resourcePath = str_replace(
                '{' . 'carrier_name' . '}',
                ObjectSerializer::toPathValue($carrier_name),
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation list
     *
     * List all carriers
     *
     * @param  int $limit Number of results to return per page. (optional)
     * @param  int $offset The initial index from which to return the results. (optional)
     * @param  string $carrier_name Indicates a carrier (type) (optional)
     * @param  bool $test This flag filter out carriers in test or live mode (optional)
     * @param  bool $active This flag indicates whether to return active carriers only (optional)
     * @param  bool $system_only This flag indicates that only system carriers should be returned (optional, default to false)
     *
     * @throws \Karrio\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Karrio\Model\CarrierList|\Karrio\Model\ErrorResponse
     */
    public function list($limit = null, $offset = null, $carrier_name = null, $test = null, $active = null, $system_only = false)
    {
        list($response) = $this->listWithHttpInfo($limit, $offset, $carrier_name, $test, $active, $system_only);
        return $response;
    }

    /**
     * Operation listWithHttpInfo
     *
     * List all carriers
     *
     * @param  int $limit Number of results to return per page. (optional)
     * @param  int $offset The initial index from which to return the results. (optional)
     * @param  string $carrier_name Indicates a carrier (type) (optional)
     * @param  bool $test This flag filter out carriers in test or live mode (optional)
     * @param  bool $active This flag indicates whether to return active carriers only (optional)
     * @param  bool $system_only This flag indicates that only system carriers should be returned (optional, default to false)
     *
     * @throws \Karrio\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Karrio\Model\CarrierList|\Karrio\Model\ErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listWithHttpInfo($limit = null, $offset = null, $carrier_name = null, $test = null, $active = null, $system_only = false)
    {
        $request = $this->listRequest($limit, $offset, $carrier_name, $test, $active, $system_only);

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
                    if ('\Karrio\Model\CarrierList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Karrio\Model\CarrierList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Karrio\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Karrio\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Karrio\Model\CarrierList';
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
                        '\Karrio\Model\CarrierList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Karrio\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listAsync
     *
     * List all carriers
     *
     * @param  int $limit Number of results to return per page. (optional)
     * @param  int $offset The initial index from which to return the results. (optional)
     * @param  string $carrier_name Indicates a carrier (type) (optional)
     * @param  bool $test This flag filter out carriers in test or live mode (optional)
     * @param  bool $active This flag indicates whether to return active carriers only (optional)
     * @param  bool $system_only This flag indicates that only system carriers should be returned (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listAsync($limit = null, $offset = null, $carrier_name = null, $test = null, $active = null, $system_only = false)
    {
        return $this->listAsyncWithHttpInfo($limit, $offset, $carrier_name, $test, $active, $system_only)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listAsyncWithHttpInfo
     *
     * List all carriers
     *
     * @param  int $limit Number of results to return per page. (optional)
     * @param  int $offset The initial index from which to return the results. (optional)
     * @param  string $carrier_name Indicates a carrier (type) (optional)
     * @param  bool $test This flag filter out carriers in test or live mode (optional)
     * @param  bool $active This flag indicates whether to return active carriers only (optional)
     * @param  bool $system_only This flag indicates that only system carriers should be returned (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listAsyncWithHttpInfo($limit = null, $offset = null, $carrier_name = null, $test = null, $active = null, $system_only = false)
    {
        $returnType = '\Karrio\Model\CarrierList';
        $request = $this->listRequest($limit, $offset, $carrier_name, $test, $active, $system_only);

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
     * Create request for operation 'list'
     *
     * @param  int $limit Number of results to return per page. (optional)
     * @param  int $offset The initial index from which to return the results. (optional)
     * @param  string $carrier_name Indicates a carrier (type) (optional)
     * @param  bool $test This flag filter out carriers in test or live mode (optional)
     * @param  bool $active This flag indicates whether to return active carriers only (optional)
     * @param  bool $system_only This flag indicates that only system carriers should be returned (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listRequest($limit = null, $offset = null, $carrier_name = null, $test = null, $active = null, $system_only = false)
    {

        $resourcePath = '/v1/carriers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($limit !== null) {
            if('form' === 'form' && is_array($limit)) {
                foreach($limit as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['limit'] = $limit;
            }
        }
        // query params
        if ($offset !== null) {
            if('form' === 'form' && is_array($offset)) {
                foreach($offset as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['offset'] = $offset;
            }
        }
        // query params
        if ($carrier_name !== null) {
            if('form' === 'form' && is_array($carrier_name)) {
                foreach($carrier_name as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['carrier_name'] = $carrier_name;
            }
        }
        // query params
        if ($test !== null) {
            if('form' === 'form' && is_array($test)) {
                foreach($test as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['test'] = $test;
            }
        }
        // query params
        if ($active !== null) {
            if('form' === 'form' && is_array($active)) {
                foreach($active as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['active'] = $active;
            }
        }
        // query params
        if ($system_only !== null) {
            if('form' === 'form' && is_array($system_only)) {
                foreach($system_only as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['system_only'] = $system_only;
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
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

<?php
/**
 * CarriersApi
 * PHP version 5
 *
 * @category Class
 * @package  Purplship
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Purplship Open Source Multi-carrier Shipping API
 *
 * Purplship is an open source multi-carrier shipping API that simplifies the integration of logistic carrier services  The **proxy** endpoints are stateless and forwards calls to carriers web services.
 *
 * OpenAPI spec version: v1-2020.9.0
 * Contact: hello@purplship.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.22
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Purplship\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Purplship\ApiException;
use Purplship\Configuration;
use Purplship\HeaderSelector;
use Purplship\ObjectSerializer;

/**
 * CarriersApi Class Doc Comment
 *
 * @category Class
 * @package  Purplship
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
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
     * Operation list
     *
     * List all carriers
     *
     * @param  int $limit Number of results to return per page. (optional)
     * @param  int $offset The initial index from which to return the results. (optional)
     * @param  string $carrier_name Indicates a carrier (type) (optional)
     * @param  bool $test The test flag filter carrier configured in test mode (optional)
     *
     * @throws \Purplship\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Purplship\Model\CarrierSettings[]
     */
    public function list($limit = null, $offset = null, $carrier_name = null, $test = null)
    {
        list($response) = $this->listWithHttpInfo($limit, $offset, $carrier_name, $test);
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
     * @param  bool $test The test flag filter carrier configured in test mode (optional)
     *
     * @throws \Purplship\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Purplship\Model\CarrierSettings[], HTTP status code, HTTP response headers (array of strings)
     */
    public function listWithHttpInfo($limit = null, $offset = null, $carrier_name = null, $test = null)
    {
        $returnType = '\Purplship\Model\CarrierSettings[]';
        $request = $this->listRequest($limit, $offset, $carrier_name, $test);

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
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                        '\Purplship\Model\CarrierSettings[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Purplship\Model\ErrorResponse',
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
     * @param  bool $test The test flag filter carrier configured in test mode (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listAsync($limit = null, $offset = null, $carrier_name = null, $test = null)
    {
        return $this->listAsyncWithHttpInfo($limit, $offset, $carrier_name, $test)
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
     * @param  bool $test The test flag filter carrier configured in test mode (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listAsyncWithHttpInfo($limit = null, $offset = null, $carrier_name = null, $test = null)
    {
        $returnType = '\Purplship\Model\CarrierSettings[]';
        $request = $this->listRequest($limit, $offset, $carrier_name, $test);

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
     * Create request for operation 'list'
     *
     * @param  int $limit Number of results to return per page. (optional)
     * @param  int $offset The initial index from which to return the results. (optional)
     * @param  string $carrier_name Indicates a carrier (type) (optional)
     * @param  bool $test The test flag filter carrier configured in test mode (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listRequest($limit = null, $offset = null, $carrier_name = null, $test = null)
    {

        $resourcePath = '/carriers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, null);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset, null);
        }
        // query params
        if ($carrier_name !== null) {
            $queryParams['carrier_name'] = ObjectSerializer::toQueryValue($carrier_name, null);
        }
        // query params
        if ($test !== null) {
            $queryParams['test'] = ObjectSerializer::toQueryValue($test, null);
        }


        // body params
        $_tempBody = null;

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

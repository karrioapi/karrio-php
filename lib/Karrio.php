<?php
/**
 * Configuration
 * PHP version 5
 *
 * @category Class
 * @package  Karrio
 * @author   Karrio Codegen team
 * @link     https://github.com/karrioapi/karrio-php
 */

/**
 * Karrio Multi-carrier API
 *
 * Karrio is a Multi-carrier Shipping API that simplifies the integration of logistic carrier services
 *
 * OpenAPI spec version: v1
 * Contact: hello@karrio.io
 * Generated by: https://github.com/karrioapi/karrio-php.git
 * Karrio Codegen version: 2.4.14
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/karrioapi/karrio-php
 * Do not edit the class manually.
 */

namespace Karrio;

use GuzzleHttp\Client;
use Karrio\Api\APIApi;
use Karrio\Api\AddressesApi;
use Karrio\Api\CarriersApi;
use Karrio\Api\CustomsApi;
use Karrio\Api\ParcelsApi;
use Karrio\Api\PickupsApi;
use Karrio\Api\ProxyApi;
use Karrio\Api\OrdersApi;
use Karrio\Api\ShipmentsApi;
use Karrio\Api\TrackersApi;
use Karrio\Api\WebhooksApi;

/**
 * Configuration Class Doc Comment
 * PHP version 5
 *
 * @category Class
 * @package  Karrio
 * @author   Karrio Codegen team
 * @link     https://github.com/karrioapi/karrio-php
 */
class Karrio
{

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var Client
     */
    protected $apiClient;

    /**
     * @var APIApi
     */
    public $api;

    /**
     * @var AddressesApi
     */
    public $addresses;

    /**
     * @var CarriersApi
     */
    public $carriers;

    /**
     * @var CustomsApi
     */
    public $customs;

    /**
     * @var ParcelsApi
     */
    public $parcels;

    /**
     * @var PickupsApi
     */
    public $pickups;

    /**
     * @var ProxyApi
     */
    public $proxy;

    /**
     * @var OrdersApi
     */
    public $orders;

    /**
     * @var ShipmentsApi
     */
    public $shipments;

    /**
     * @var TrackersApi
     */
    public $trackers;

    /**
     * @var WebhooksApi
     */
    public $webhooks;

    /**
     * @param string $apiKey
     * @param string $host
     * @param string $apiKeyPrefix
     */
    public function __construct(
        string $apiKey = null,
        string $host = "https://api.karrio.io",
        string $apiKeyPrefix = "Token"
    ) {
        $this->config = Configuration::getDefaultConfiguration();
        $this->config->setApiKey('Authorization', $apiKeyPrefix . ' ' . $apiKey);
        $this->config->setHost($host);
        
        $this->apiClient = new Client();

        $this->api = new APIApi($this->apiClient, $this->config);
        $this->addresses = new AddressesApi($this->apiClient, $this->config);
        $this->carriers = new CarriersApi($this->apiClient, $this->config);
        $this->customs = new CustomsApi($this->apiClient, $this->config);
        $this->parcels = new ParcelsApi($this->apiClient, $this->config);
        $this->pickups = new PickupsApi($this->apiClient, $this->config);
        $this->proxy = new ProxyApi($this->apiClient, $this->config);
        $this->orders = new OrdersApi($this->apiClient, $this->config);
        $this->shipments = new ShipmentsApi($this->apiClient, $this->config);
        $this->trackers = new TrackersApi($this->apiClient, $this->config);
        $this->webhooks = new WebhooksApi($this->apiClient, $this->config);
    }
}

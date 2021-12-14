<?php
/**
 * References
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Purplship
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Purplship API
 *
 * ## API Reference  Purplship is an open source multi-carrier shipping API that simplifies the integration of logistic carrier services.  The Purplship API is organized around REST. Our API has predictable resource-oriented URLs, accepts JSON-encoded  request bodies, returns JSON-encoded responses, and uses standard HTTP response codes, authentication, and verbs.  The Purplship API differs for every account as we release new versions. These docs are customized to your version of the API.   ## Versioning  When backwards-incompatible changes are made to the API, a new, dated version is released.  The current version is `2021.11`.   Read our API changelog and to learn more about backwards compatibility.  As a precaution, use API versioning to check a new API version before committing to an upgrade.   ## Pagination  All top-level API resources have support for bulk fetches via \"list\" API methods. For instance, you can list addresses,  list shipments, and list trackers. These list API methods share a common structure, taking at least these  two parameters: limit, and offset.  Purplship utilizes offset-based pagination via the offset and limit parameters. Both parameters take a number as value (see below) and return objects in reverse chronological order.  The offset parameter returns objects listed after an index.  The limit parameter take a limit on the number of objects to be returned from 1 to 100.   ```json {     \"next\": \"/v1/shipments?limit=25&offset=25\",     \"previous\": \"/v1/shipments?limit=25&offset=25\",     \"results\": [     ] } ```  ## Environments  The Purplship API offer the possibility to create and retrieve certain objects in `test_mode`. In development, it is therefore possible to add carrier connections, get live rates,  buy labels, create trackers and schedule pickups in `test_mode`.
 *
 * The version of the OpenAPI document: 2021.11
 * Contact: hello@purplship.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Purplship\Model;

use \ArrayAccess;
use \Purplship\ObjectSerializer;

/**
 * References Class Doc Comment
 *
 * @category Class
 * @package  Purplship
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class References implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'References';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'app_name' => 'string',
        'app_version' => 'string',
        'app_website' => 'string',
        'multi_organizations' => 'bool',
        'admin' => 'string',
        'openapi' => 'string',
        'graphql' => 'string',
        'address_auto_complete' => 'object',
        'countries' => 'object',
        'currencies' => 'object',
        'carriers' => 'object',
        'customs_content_type' => 'object',
        'incoterms' => 'object',
        'states' => 'object',
        'services' => 'object',
        'service_names' => 'object',
        'options' => 'object',
        'option_names' => 'object',
        'package_presets' => 'object',
        'packaging_types' => 'object',
        'payment_types' => 'object',
        'carrier_capabilities' => 'object',
        'service_levels' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'app_name' => null,
        'app_version' => null,
        'app_website' => null,
        'multi_organizations' => null,
        'admin' => null,
        'openapi' => null,
        'graphql' => null,
        'address_auto_complete' => null,
        'countries' => null,
        'currencies' => null,
        'carriers' => null,
        'customs_content_type' => null,
        'incoterms' => null,
        'states' => null,
        'services' => null,
        'service_names' => null,
        'options' => null,
        'option_names' => null,
        'package_presets' => null,
        'packaging_types' => null,
        'payment_types' => null,
        'carrier_capabilities' => null,
        'service_levels' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'app_name' => 'APP_NAME',
        'app_version' => 'APP_VERSION',
        'app_website' => 'APP_WEBSITE',
        'multi_organizations' => 'MULTI_ORGANIZATIONS',
        'admin' => 'ADMIN',
        'openapi' => 'OPENAPI',
        'graphql' => 'GRAPHQL',
        'address_auto_complete' => 'ADDRESS_AUTO_COMPLETE',
        'countries' => 'countries',
        'currencies' => 'currencies',
        'carriers' => 'carriers',
        'customs_content_type' => 'customs_content_type',
        'incoterms' => 'incoterms',
        'states' => 'states',
        'services' => 'services',
        'service_names' => 'service_names',
        'options' => 'options',
        'option_names' => 'option_names',
        'package_presets' => 'package_presets',
        'packaging_types' => 'packaging_types',
        'payment_types' => 'payment_types',
        'carrier_capabilities' => 'carrier_capabilities',
        'service_levels' => 'service_levels'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'app_name' => 'setAppName',
        'app_version' => 'setAppVersion',
        'app_website' => 'setAppWebsite',
        'multi_organizations' => 'setMultiOrganizations',
        'admin' => 'setAdmin',
        'openapi' => 'setOpenapi',
        'graphql' => 'setGraphql',
        'address_auto_complete' => 'setAddressAutoComplete',
        'countries' => 'setCountries',
        'currencies' => 'setCurrencies',
        'carriers' => 'setCarriers',
        'customs_content_type' => 'setCustomsContentType',
        'incoterms' => 'setIncoterms',
        'states' => 'setStates',
        'services' => 'setServices',
        'service_names' => 'setServiceNames',
        'options' => 'setOptions',
        'option_names' => 'setOptionNames',
        'package_presets' => 'setPackagePresets',
        'packaging_types' => 'setPackagingTypes',
        'payment_types' => 'setPaymentTypes',
        'carrier_capabilities' => 'setCarrierCapabilities',
        'service_levels' => 'setServiceLevels'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'app_name' => 'getAppName',
        'app_version' => 'getAppVersion',
        'app_website' => 'getAppWebsite',
        'multi_organizations' => 'getMultiOrganizations',
        'admin' => 'getAdmin',
        'openapi' => 'getOpenapi',
        'graphql' => 'getGraphql',
        'address_auto_complete' => 'getAddressAutoComplete',
        'countries' => 'getCountries',
        'currencies' => 'getCurrencies',
        'carriers' => 'getCarriers',
        'customs_content_type' => 'getCustomsContentType',
        'incoterms' => 'getIncoterms',
        'states' => 'getStates',
        'services' => 'getServices',
        'service_names' => 'getServiceNames',
        'options' => 'getOptions',
        'option_names' => 'getOptionNames',
        'package_presets' => 'getPackagePresets',
        'packaging_types' => 'getPackagingTypes',
        'payment_types' => 'getPaymentTypes',
        'carrier_capabilities' => 'getCarrierCapabilities',
        'service_levels' => 'getServiceLevels'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['app_name'] = $data['app_name'] ?? null;
        $this->container['app_version'] = $data['app_version'] ?? null;
        $this->container['app_website'] = $data['app_website'] ?? null;
        $this->container['multi_organizations'] = $data['multi_organizations'] ?? null;
        $this->container['admin'] = $data['admin'] ?? null;
        $this->container['openapi'] = $data['openapi'] ?? null;
        $this->container['graphql'] = $data['graphql'] ?? null;
        $this->container['address_auto_complete'] = $data['address_auto_complete'] ?? null;
        $this->container['countries'] = $data['countries'] ?? null;
        $this->container['currencies'] = $data['currencies'] ?? null;
        $this->container['carriers'] = $data['carriers'] ?? null;
        $this->container['customs_content_type'] = $data['customs_content_type'] ?? null;
        $this->container['incoterms'] = $data['incoterms'] ?? null;
        $this->container['states'] = $data['states'] ?? null;
        $this->container['services'] = $data['services'] ?? null;
        $this->container['service_names'] = $data['service_names'] ?? null;
        $this->container['options'] = $data['options'] ?? null;
        $this->container['option_names'] = $data['option_names'] ?? null;
        $this->container['package_presets'] = $data['package_presets'] ?? null;
        $this->container['packaging_types'] = $data['packaging_types'] ?? null;
        $this->container['payment_types'] = $data['payment_types'] ?? null;
        $this->container['carrier_capabilities'] = $data['carrier_capabilities'] ?? null;
        $this->container['service_levels'] = $data['service_levels'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['app_name'] === null) {
            $invalidProperties[] = "'app_name' can't be null";
        }
        if ((mb_strlen($this->container['app_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'app_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['app_version'] === null) {
            $invalidProperties[] = "'app_version' can't be null";
        }
        if ((mb_strlen($this->container['app_version']) < 1)) {
            $invalidProperties[] = "invalid value for 'app_version', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['app_website'] === null) {
            $invalidProperties[] = "'app_website' can't be null";
        }
        if ((mb_strlen($this->container['app_website']) < 1)) {
            $invalidProperties[] = "invalid value for 'app_website', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['multi_organizations'] === null) {
            $invalidProperties[] = "'multi_organizations' can't be null";
        }
        if ($this->container['admin'] === null) {
            $invalidProperties[] = "'admin' can't be null";
        }
        if ((mb_strlen($this->container['admin']) < 1)) {
            $invalidProperties[] = "invalid value for 'admin', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['openapi'] === null) {
            $invalidProperties[] = "'openapi' can't be null";
        }
        if ((mb_strlen($this->container['openapi']) < 1)) {
            $invalidProperties[] = "invalid value for 'openapi', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['graphql'] === null) {
            $invalidProperties[] = "'graphql' can't be null";
        }
        if ((mb_strlen($this->container['graphql']) < 1)) {
            $invalidProperties[] = "invalid value for 'graphql', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['address_auto_complete'] === null) {
            $invalidProperties[] = "'address_auto_complete' can't be null";
        }
        if ($this->container['countries'] === null) {
            $invalidProperties[] = "'countries' can't be null";
        }
        if ($this->container['currencies'] === null) {
            $invalidProperties[] = "'currencies' can't be null";
        }
        if ($this->container['carriers'] === null) {
            $invalidProperties[] = "'carriers' can't be null";
        }
        if ($this->container['customs_content_type'] === null) {
            $invalidProperties[] = "'customs_content_type' can't be null";
        }
        if ($this->container['incoterms'] === null) {
            $invalidProperties[] = "'incoterms' can't be null";
        }
        if ($this->container['states'] === null) {
            $invalidProperties[] = "'states' can't be null";
        }
        if ($this->container['services'] === null) {
            $invalidProperties[] = "'services' can't be null";
        }
        if ($this->container['service_names'] === null) {
            $invalidProperties[] = "'service_names' can't be null";
        }
        if ($this->container['options'] === null) {
            $invalidProperties[] = "'options' can't be null";
        }
        if ($this->container['option_names'] === null) {
            $invalidProperties[] = "'option_names' can't be null";
        }
        if ($this->container['package_presets'] === null) {
            $invalidProperties[] = "'package_presets' can't be null";
        }
        if ($this->container['packaging_types'] === null) {
            $invalidProperties[] = "'packaging_types' can't be null";
        }
        if ($this->container['payment_types'] === null) {
            $invalidProperties[] = "'payment_types' can't be null";
        }
        if ($this->container['carrier_capabilities'] === null) {
            $invalidProperties[] = "'carrier_capabilities' can't be null";
        }
        if ($this->container['service_levels'] === null) {
            $invalidProperties[] = "'service_levels' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets app_name
     *
     * @return string
     */
    public function getAppName()
    {
        return $this->container['app_name'];
    }

    /**
     * Sets app_name
     *
     * @param string $app_name app_name
     *
     * @return self
     */
    public function setAppName($app_name)
    {

        if ((mb_strlen($app_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $app_name when calling References., must be bigger than or equal to 1.');
        }

        $this->container['app_name'] = $app_name;

        return $this;
    }

    /**
     * Gets app_version
     *
     * @return string
     */
    public function getAppVersion()
    {
        return $this->container['app_version'];
    }

    /**
     * Sets app_version
     *
     * @param string $app_version app_version
     *
     * @return self
     */
    public function setAppVersion($app_version)
    {

        if ((mb_strlen($app_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for $app_version when calling References., must be bigger than or equal to 1.');
        }

        $this->container['app_version'] = $app_version;

        return $this;
    }

    /**
     * Gets app_website
     *
     * @return string
     */
    public function getAppWebsite()
    {
        return $this->container['app_website'];
    }

    /**
     * Sets app_website
     *
     * @param string $app_website app_website
     *
     * @return self
     */
    public function setAppWebsite($app_website)
    {

        if ((mb_strlen($app_website) < 1)) {
            throw new \InvalidArgumentException('invalid length for $app_website when calling References., must be bigger than or equal to 1.');
        }

        $this->container['app_website'] = $app_website;

        return $this;
    }

    /**
     * Gets multi_organizations
     *
     * @return bool
     */
    public function getMultiOrganizations()
    {
        return $this->container['multi_organizations'];
    }

    /**
     * Sets multi_organizations
     *
     * @param bool $multi_organizations multi_organizations
     *
     * @return self
     */
    public function setMultiOrganizations($multi_organizations)
    {
        $this->container['multi_organizations'] = $multi_organizations;

        return $this;
    }

    /**
     * Gets admin
     *
     * @return string
     */
    public function getAdmin()
    {
        return $this->container['admin'];
    }

    /**
     * Sets admin
     *
     * @param string $admin admin
     *
     * @return self
     */
    public function setAdmin($admin)
    {

        if ((mb_strlen($admin) < 1)) {
            throw new \InvalidArgumentException('invalid length for $admin when calling References., must be bigger than or equal to 1.');
        }

        $this->container['admin'] = $admin;

        return $this;
    }

    /**
     * Gets openapi
     *
     * @return string
     */
    public function getOpenapi()
    {
        return $this->container['openapi'];
    }

    /**
     * Sets openapi
     *
     * @param string $openapi openapi
     *
     * @return self
     */
    public function setOpenapi($openapi)
    {

        if ((mb_strlen($openapi) < 1)) {
            throw new \InvalidArgumentException('invalid length for $openapi when calling References., must be bigger than or equal to 1.');
        }

        $this->container['openapi'] = $openapi;

        return $this;
    }

    /**
     * Gets graphql
     *
     * @return string
     */
    public function getGraphql()
    {
        return $this->container['graphql'];
    }

    /**
     * Sets graphql
     *
     * @param string $graphql graphql
     *
     * @return self
     */
    public function setGraphql($graphql)
    {

        if ((mb_strlen($graphql) < 1)) {
            throw new \InvalidArgumentException('invalid length for $graphql when calling References., must be bigger than or equal to 1.');
        }

        $this->container['graphql'] = $graphql;

        return $this;
    }

    /**
     * Gets address_auto_complete
     *
     * @return object
     */
    public function getAddressAutoComplete()
    {
        return $this->container['address_auto_complete'];
    }

    /**
     * Sets address_auto_complete
     *
     * @param object $address_auto_complete address_auto_complete
     *
     * @return self
     */
    public function setAddressAutoComplete($address_auto_complete)
    {
        $this->container['address_auto_complete'] = $address_auto_complete;

        return $this;
    }

    /**
     * Gets countries
     *
     * @return object
     */
    public function getCountries()
    {
        return $this->container['countries'];
    }

    /**
     * Sets countries
     *
     * @param object $countries countries
     *
     * @return self
     */
    public function setCountries($countries)
    {
        $this->container['countries'] = $countries;

        return $this;
    }

    /**
     * Gets currencies
     *
     * @return object
     */
    public function getCurrencies()
    {
        return $this->container['currencies'];
    }

    /**
     * Sets currencies
     *
     * @param object $currencies currencies
     *
     * @return self
     */
    public function setCurrencies($currencies)
    {
        $this->container['currencies'] = $currencies;

        return $this;
    }

    /**
     * Gets carriers
     *
     * @return object
     */
    public function getCarriers()
    {
        return $this->container['carriers'];
    }

    /**
     * Sets carriers
     *
     * @param object $carriers carriers
     *
     * @return self
     */
    public function setCarriers($carriers)
    {
        $this->container['carriers'] = $carriers;

        return $this;
    }

    /**
     * Gets customs_content_type
     *
     * @return object
     */
    public function getCustomsContentType()
    {
        return $this->container['customs_content_type'];
    }

    /**
     * Sets customs_content_type
     *
     * @param object $customs_content_type customs_content_type
     *
     * @return self
     */
    public function setCustomsContentType($customs_content_type)
    {
        $this->container['customs_content_type'] = $customs_content_type;

        return $this;
    }

    /**
     * Gets incoterms
     *
     * @return object
     */
    public function getIncoterms()
    {
        return $this->container['incoterms'];
    }

    /**
     * Sets incoterms
     *
     * @param object $incoterms incoterms
     *
     * @return self
     */
    public function setIncoterms($incoterms)
    {
        $this->container['incoterms'] = $incoterms;

        return $this;
    }

    /**
     * Gets states
     *
     * @return object
     */
    public function getStates()
    {
        return $this->container['states'];
    }

    /**
     * Sets states
     *
     * @param object $states states
     *
     * @return self
     */
    public function setStates($states)
    {
        $this->container['states'] = $states;

        return $this;
    }

    /**
     * Gets services
     *
     * @return object
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param object $services services
     *
     * @return self
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets service_names
     *
     * @return object
     */
    public function getServiceNames()
    {
        return $this->container['service_names'];
    }

    /**
     * Sets service_names
     *
     * @param object $service_names service_names
     *
     * @return self
     */
    public function setServiceNames($service_names)
    {
        $this->container['service_names'] = $service_names;

        return $this;
    }

    /**
     * Gets options
     *
     * @return object
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param object $options options
     *
     * @return self
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets option_names
     *
     * @return object
     */
    public function getOptionNames()
    {
        return $this->container['option_names'];
    }

    /**
     * Sets option_names
     *
     * @param object $option_names option_names
     *
     * @return self
     */
    public function setOptionNames($option_names)
    {
        $this->container['option_names'] = $option_names;

        return $this;
    }

    /**
     * Gets package_presets
     *
     * @return object
     */
    public function getPackagePresets()
    {
        return $this->container['package_presets'];
    }

    /**
     * Sets package_presets
     *
     * @param object $package_presets package_presets
     *
     * @return self
     */
    public function setPackagePresets($package_presets)
    {
        $this->container['package_presets'] = $package_presets;

        return $this;
    }

    /**
     * Gets packaging_types
     *
     * @return object
     */
    public function getPackagingTypes()
    {
        return $this->container['packaging_types'];
    }

    /**
     * Sets packaging_types
     *
     * @param object $packaging_types packaging_types
     *
     * @return self
     */
    public function setPackagingTypes($packaging_types)
    {
        $this->container['packaging_types'] = $packaging_types;

        return $this;
    }

    /**
     * Gets payment_types
     *
     * @return object
     */
    public function getPaymentTypes()
    {
        return $this->container['payment_types'];
    }

    /**
     * Sets payment_types
     *
     * @param object $payment_types payment_types
     *
     * @return self
     */
    public function setPaymentTypes($payment_types)
    {
        $this->container['payment_types'] = $payment_types;

        return $this;
    }

    /**
     * Gets carrier_capabilities
     *
     * @return object
     */
    public function getCarrierCapabilities()
    {
        return $this->container['carrier_capabilities'];
    }

    /**
     * Sets carrier_capabilities
     *
     * @param object $carrier_capabilities carrier_capabilities
     *
     * @return self
     */
    public function setCarrierCapabilities($carrier_capabilities)
    {
        $this->container['carrier_capabilities'] = $carrier_capabilities;

        return $this;
    }

    /**
     * Gets service_levels
     *
     * @return object
     */
    public function getServiceLevels()
    {
        return $this->container['service_levels'];
    }

    /**
     * Sets service_levels
     *
     * @param object $service_levels service_levels
     *
     * @return self
     */
    public function setServiceLevels($service_levels)
    {
        $this->container['service_levels'] = $service_levels;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



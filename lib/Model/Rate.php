<?php
/**
 * Rate
 *
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

namespace Karrio\Model;

use \ArrayAccess;
use \Karrio\ObjectSerializer;

/**
 * Rate Class Doc Comment
 *
 * @category Class
 * @description The list for shipment rates fetched previously
 * @package  Karrio
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Rate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Rate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'object_type' => 'string',
        'carrier_name' => 'string',
        'carrier_id' => 'string',
        'currency' => 'string',
        'service' => 'string',
        'discount' => 'float',
        'base_charge' => 'float',
        'total_charge' => 'float',
        'duties_and_taxes' => 'float',
        'transit_days' => 'int',
        'extra_charges' => '\Karrio\Model\Charge[]',
        'meta' => 'object',
        'test_mode' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'object_type' => null,
        'carrier_name' => null,
        'carrier_id' => null,
        'currency' => null,
        'service' => null,
        'discount' => null,
        'base_charge' => null,
        'total_charge' => null,
        'duties_and_taxes' => null,
        'transit_days' => null,
        'extra_charges' => null,
        'meta' => null,
        'test_mode' => null
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
        'id' => 'id',
        'object_type' => 'object_type',
        'carrier_name' => 'carrier_name',
        'carrier_id' => 'carrier_id',
        'currency' => 'currency',
        'service' => 'service',
        'discount' => 'discount',
        'base_charge' => 'base_charge',
        'total_charge' => 'total_charge',
        'duties_and_taxes' => 'duties_and_taxes',
        'transit_days' => 'transit_days',
        'extra_charges' => 'extra_charges',
        'meta' => 'meta',
        'test_mode' => 'test_mode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'object_type' => 'setObjectType',
        'carrier_name' => 'setCarrierName',
        'carrier_id' => 'setCarrierId',
        'currency' => 'setCurrency',
        'service' => 'setService',
        'discount' => 'setDiscount',
        'base_charge' => 'setBaseCharge',
        'total_charge' => 'setTotalCharge',
        'duties_and_taxes' => 'setDutiesAndTaxes',
        'transit_days' => 'setTransitDays',
        'extra_charges' => 'setExtraCharges',
        'meta' => 'setMeta',
        'test_mode' => 'setTestMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'object_type' => 'getObjectType',
        'carrier_name' => 'getCarrierName',
        'carrier_id' => 'getCarrierId',
        'currency' => 'getCurrency',
        'service' => 'getService',
        'discount' => 'getDiscount',
        'base_charge' => 'getBaseCharge',
        'total_charge' => 'getTotalCharge',
        'duties_and_taxes' => 'getDutiesAndTaxes',
        'transit_days' => 'getTransitDays',
        'extra_charges' => 'getExtraCharges',
        'meta' => 'getMeta',
        'test_mode' => 'getTestMode'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['object_type'] = $data['object_type'] ?? 'rate';
        $this->container['carrier_name'] = $data['carrier_name'] ?? null;
        $this->container['carrier_id'] = $data['carrier_id'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['service'] = $data['service'] ?? null;
        $this->container['discount'] = $data['discount'] ?? null;
        $this->container['base_charge'] = $data['base_charge'] ?? null;
        $this->container['total_charge'] = $data['total_charge'] ?? null;
        $this->container['duties_and_taxes'] = $data['duties_and_taxes'] ?? null;
        $this->container['transit_days'] = $data['transit_days'] ?? null;
        $this->container['extra_charges'] = $data['extra_charges'] ?? null;
        $this->container['meta'] = $data['meta'] ?? null;
        $this->container['test_mode'] = $data['test_mode'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['object_type']) && (mb_strlen($this->container['object_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'object_type', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['carrier_name'] === null) {
            $invalidProperties[] = "'carrier_name' can't be null";
        }
        if ((mb_strlen($this->container['carrier_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'carrier_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['carrier_id'] === null) {
            $invalidProperties[] = "'carrier_id' can't be null";
        }
        if ((mb_strlen($this->container['carrier_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'carrier_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ((mb_strlen($this->container['currency']) < 1)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['test_mode'] === null) {
            $invalidProperties[] = "'test_mode' can't be null";
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id A unique identifier
     *
     * @return self
     */
    public function setId($id)
    {

        if (!is_null($id) && (mb_strlen($id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id when calling Rate., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets object_type
     *
     * @return string|null
     */
    public function getObjectType()
    {
        return $this->container['object_type'];
    }

    /**
     * Sets object_type
     *
     * @param string|null $object_type Specifies the object type
     *
     * @return self
     */
    public function setObjectType($object_type)
    {

        if (!is_null($object_type) && (mb_strlen($object_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $object_type when calling Rate., must be bigger than or equal to 1.');
        }

        $this->container['object_type'] = $object_type;

        return $this;
    }

    /**
     * Gets carrier_name
     *
     * @return string
     */
    public function getCarrierName()
    {
        return $this->container['carrier_name'];
    }

    /**
     * Sets carrier_name
     *
     * @param string $carrier_name The rate's carrier
     *
     * @return self
     */
    public function setCarrierName($carrier_name)
    {

        if ((mb_strlen($carrier_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $carrier_name when calling Rate., must be bigger than or equal to 1.');
        }

        $this->container['carrier_name'] = $carrier_name;

        return $this;
    }

    /**
     * Gets carrier_id
     *
     * @return string
     */
    public function getCarrierId()
    {
        return $this->container['carrier_id'];
    }

    /**
     * Sets carrier_id
     *
     * @param string $carrier_id The targeted carrier's name (unique identifier)
     *
     * @return self
     */
    public function setCarrierId($carrier_id)
    {

        if ((mb_strlen($carrier_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $carrier_id when calling Rate., must be bigger than or equal to 1.');
        }

        $this->container['carrier_id'] = $carrier_id;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency The rate monetary values currency code
     *
     * @return self
     */
    public function setCurrency($currency)
    {

        if ((mb_strlen($currency) < 1)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling Rate., must be bigger than or equal to 1.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets service
     *
     * @return string|null
     */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
     * Sets service
     *
     * @param string|null $service The carrier's rate (quote) service
     *
     * @return self
     */
    public function setService($service)
    {
        $this->container['service'] = $service;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return float|null
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param float|null $discount The monetary amount of the discount on the rate
     *
     * @return self
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets base_charge
     *
     * @return float|null
     */
    public function getBaseCharge()
    {
        return $this->container['base_charge'];
    }

    /**
     * Sets base_charge
     *
     * @param float|null $base_charge The rate's monetary amount of the base charge.<br/> This is the net amount of the rate before additional charges
     *
     * @return self
     */
    public function setBaseCharge($base_charge)
    {
        $this->container['base_charge'] = $base_charge;

        return $this;
    }

    /**
     * Gets total_charge
     *
     * @return float|null
     */
    public function getTotalCharge()
    {
        return $this->container['total_charge'];
    }

    /**
     * Sets total_charge
     *
     * @param float|null $total_charge The rate's monetary amount of the total charge.<br/> This is the gross amount of the rate after adding the additional charges
     *
     * @return self
     */
    public function setTotalCharge($total_charge)
    {
        $this->container['total_charge'] = $total_charge;

        return $this;
    }

    /**
     * Gets duties_and_taxes
     *
     * @return float|null
     */
    public function getDutiesAndTaxes()
    {
        return $this->container['duties_and_taxes'];
    }

    /**
     * Sets duties_and_taxes
     *
     * @param float|null $duties_and_taxes The monetary amount of the duties and taxes if applied
     *
     * @return self
     */
    public function setDutiesAndTaxes($duties_and_taxes)
    {
        $this->container['duties_and_taxes'] = $duties_and_taxes;

        return $this;
    }

    /**
     * Gets transit_days
     *
     * @return int|null
     */
    public function getTransitDays()
    {
        return $this->container['transit_days'];
    }

    /**
     * Sets transit_days
     *
     * @param int|null $transit_days The estimated delivery transit days
     *
     * @return self
     */
    public function setTransitDays($transit_days)
    {
        $this->container['transit_days'] = $transit_days;

        return $this;
    }

    /**
     * Gets extra_charges
     *
     * @return \Karrio\Model\Charge[]|null
     */
    public function getExtraCharges()
    {
        return $this->container['extra_charges'];
    }

    /**
     * Sets extra_charges
     *
     * @param \Karrio\Model\Charge[]|null $extra_charges list of the rate's additional charges
     *
     * @return self
     */
    public function setExtraCharges($extra_charges)
    {
        $this->container['extra_charges'] = $extra_charges;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return object|null
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param object|null $meta provider specific metadata
     *
     * @return self
     */
    public function setMeta($meta)
    {
        $this->container['meta'] = $meta;

        return $this;
    }

    /**
     * Gets test_mode
     *
     * @return bool
     */
    public function getTestMode()
    {
        return $this->container['test_mode'];
    }

    /**
     * Sets test_mode
     *
     * @param bool $test_mode Specified whether it was created with a carrier in test mode
     *
     * @return self
     */
    public function setTestMode($test_mode)
    {
        $this->container['test_mode'] = $test_mode;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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



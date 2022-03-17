<?php
/**
 * PickupData
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
 * PickupData Class Doc Comment
 *
 * @category Class
 * @package  Karrio
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PickupData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PickupData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pickup_date' => 'string',
        'address' => '\Karrio\Model\AddressData',
        'ready_time' => 'string',
        'closing_time' => 'string',
        'instruction' => 'string',
        'package_location' => 'string',
        'options' => 'object',
        'tracking_numbers' => 'string[]',
        'metadata' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pickup_date' => null,
        'address' => null,
        'ready_time' => null,
        'closing_time' => null,
        'instruction' => null,
        'package_location' => null,
        'options' => null,
        'tracking_numbers' => null,
        'metadata' => null
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
        'pickup_date' => 'pickup_date',
        'address' => 'address',
        'ready_time' => 'ready_time',
        'closing_time' => 'closing_time',
        'instruction' => 'instruction',
        'package_location' => 'package_location',
        'options' => 'options',
        'tracking_numbers' => 'tracking_numbers',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pickup_date' => 'setPickupDate',
        'address' => 'setAddress',
        'ready_time' => 'setReadyTime',
        'closing_time' => 'setClosingTime',
        'instruction' => 'setInstruction',
        'package_location' => 'setPackageLocation',
        'options' => 'setOptions',
        'tracking_numbers' => 'setTrackingNumbers',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pickup_date' => 'getPickupDate',
        'address' => 'getAddress',
        'ready_time' => 'getReadyTime',
        'closing_time' => 'getClosingTime',
        'instruction' => 'getInstruction',
        'package_location' => 'getPackageLocation',
        'options' => 'getOptions',
        'tracking_numbers' => 'getTrackingNumbers',
        'metadata' => 'getMetadata'
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
        $this->container['pickup_date'] = $data['pickup_date'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['ready_time'] = $data['ready_time'] ?? null;
        $this->container['closing_time'] = $data['closing_time'] ?? null;
        $this->container['instruction'] = $data['instruction'] ?? null;
        $this->container['package_location'] = $data['package_location'] ?? null;
        $this->container['options'] = $data['options'] ?? null;
        $this->container['tracking_numbers'] = $data['tracking_numbers'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pickup_date'] === null) {
            $invalidProperties[] = "'pickup_date' can't be null";
        }
        if ((mb_strlen($this->container['pickup_date']) < 1)) {
            $invalidProperties[] = "invalid value for 'pickup_date', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['ready_time'] === null) {
            $invalidProperties[] = "'ready_time' can't be null";
        }
        if ((mb_strlen($this->container['ready_time']) < 1)) {
            $invalidProperties[] = "invalid value for 'ready_time', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['closing_time'] === null) {
            $invalidProperties[] = "'closing_time' can't be null";
        }
        if ((mb_strlen($this->container['closing_time']) < 1)) {
            $invalidProperties[] = "invalid value for 'closing_time', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['tracking_numbers'] === null) {
            $invalidProperties[] = "'tracking_numbers' can't be null";
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
     * Gets pickup_date
     *
     * @return string
     */
    public function getPickupDate()
    {
        return $this->container['pickup_date'];
    }

    /**
     * Sets pickup_date
     *
     * @param string $pickup_date The expected pickup date  Date Format: `YYYY-MM-DD`
     *
     * @return self
     */
    public function setPickupDate($pickup_date)
    {

        if ((mb_strlen($pickup_date) < 1)) {
            throw new \InvalidArgumentException('invalid length for $pickup_date when calling PickupData., must be bigger than or equal to 1.');
        }

        $this->container['pickup_date'] = $pickup_date;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Karrio\Model\AddressData|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Karrio\Model\AddressData|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets ready_time
     *
     * @return string
     */
    public function getReadyTime()
    {
        return $this->container['ready_time'];
    }

    /**
     * Sets ready_time
     *
     * @param string $ready_time The ready time for pickup.  Time Format: `HH:MM`
     *
     * @return self
     */
    public function setReadyTime($ready_time)
    {

        if ((mb_strlen($ready_time) < 1)) {
            throw new \InvalidArgumentException('invalid length for $ready_time when calling PickupData., must be bigger than or equal to 1.');
        }

        $this->container['ready_time'] = $ready_time;

        return $this;
    }

    /**
     * Gets closing_time
     *
     * @return string
     */
    public function getClosingTime()
    {
        return $this->container['closing_time'];
    }

    /**
     * Sets closing_time
     *
     * @param string $closing_time The closing or late time of the pickup  Time Format: `HH:MM`
     *
     * @return self
     */
    public function setClosingTime($closing_time)
    {

        if ((mb_strlen($closing_time) < 1)) {
            throw new \InvalidArgumentException('invalid length for $closing_time when calling PickupData., must be bigger than or equal to 1.');
        }

        $this->container['closing_time'] = $closing_time;

        return $this;
    }

    /**
     * Gets instruction
     *
     * @return string|null
     */
    public function getInstruction()
    {
        return $this->container['instruction'];
    }

    /**
     * Sets instruction
     *
     * @param string|null $instruction The pickup instruction.  eg: Handle with care.
     *
     * @return self
     */
    public function setInstruction($instruction)
    {
        $this->container['instruction'] = $instruction;

        return $this;
    }

    /**
     * Gets package_location
     *
     * @return string|null
     */
    public function getPackageLocation()
    {
        return $this->container['package_location'];
    }

    /**
     * Sets package_location
     *
     * @param string|null $package_location The package(s) location.  eg: Behind the entrance door.
     *
     * @return self
     */
    public function setPackageLocation($package_location)
    {
        $this->container['package_location'] = $package_location;

        return $this;
    }

    /**
     * Gets options
     *
     * @return object|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param object|null $options Advanced carrier specific pickup options
     *
     * @return self
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets tracking_numbers
     *
     * @return string[]
     */
    public function getTrackingNumbers()
    {
        return $this->container['tracking_numbers'];
    }

    /**
     * Sets tracking_numbers
     *
     * @param string[] $tracking_numbers The list of shipments to be picked up
     *
     * @return self
     */
    public function setTrackingNumbers($tracking_numbers)
    {
        $this->container['tracking_numbers'] = $tracking_numbers;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object|null $metadata User metadata for the pickup
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

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



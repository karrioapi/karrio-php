<?php
/**
 * TrackingStatus
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
 * ## API Reference  Purplship is an open source multi-carrier shipping API that simplifies the integration of logistic carrier services.  The Purplship API is organized around REST. Our API has predictable resource-oriented URLs, accepts JSON-encoded  request bodies, returns JSON-encoded responses, and uses standard HTTP response codes, authentication, and verbs.  The Purplship API differs for every account as we release new versions. These docs are customized to your version of the API.   ## Versioning  When backwards-incompatible changes are made to the API, a new, dated version is released.  The current version is `2021.10`.   Read our API changelog and to learn more about backwards compatibility.  As a precaution, use API versioning to check a new API version before committing to an upgrade.   ## Pagination  All top-level API resources have support for bulk fetches via \"list\" API methods. For instance, you can list addresses,  list shipments, and list trackers. These list API methods share a common structure, taking at least these  two parameters: limit, and offset.  Purplship utilizes offset-based pagination via the offset and limit parameters. Both parameters take a number as value (see below) and return objects in reverse chronological order.  The offset parameter returns objects listed after an index.  The limit parameter take a limit on the number of objects to be returned from 1 to 100.   ```json {     \"next\": \"/v1/shipments?limit=25&offset=25\",     \"previous\": \"/v1/shipments?limit=25&offset=25\",     \"results\": [     ] } ```  ## Environments  The Purplship API offer the possibility to create and retrieve certain objects in `test_mode`. In development, it is therefore possible to add carrier connections, get live rates,  buy labels, create trackers and schedule pickups in `test_mode`.
 *
 * The version of the OpenAPI document: 2021.10
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
 * TrackingStatus Class Doc Comment
 *
 * @category Class
 * @description The tracking details retrieved
 * @package  Purplship
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TrackingStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TrackingStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'carrier_name' => 'string',
        'carrier_id' => 'string',
        'tracking_number' => 'string',
        'events' => '\Purplship\Model\TrackingEvent[]',
        'delivered' => 'bool',
        'test_mode' => 'bool',
        'status' => 'string'
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
        'carrier_name' => null,
        'carrier_id' => null,
        'tracking_number' => null,
        'events' => null,
        'delivered' => null,
        'test_mode' => null,
        'status' => null
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
        'carrier_name' => 'carrier_name',
        'carrier_id' => 'carrier_id',
        'tracking_number' => 'tracking_number',
        'events' => 'events',
        'delivered' => 'delivered',
        'test_mode' => 'test_mode',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'carrier_name' => 'setCarrierName',
        'carrier_id' => 'setCarrierId',
        'tracking_number' => 'setTrackingNumber',
        'events' => 'setEvents',
        'delivered' => 'setDelivered',
        'test_mode' => 'setTestMode',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'carrier_name' => 'getCarrierName',
        'carrier_id' => 'getCarrierId',
        'tracking_number' => 'getTrackingNumber',
        'events' => 'getEvents',
        'delivered' => 'getDelivered',
        'test_mode' => 'getTestMode',
        'status' => 'getStatus'
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

    const STATUS_CREATED = 'created';
    const STATUS_PURCHASED = 'purchased';
    const STATUS_CANCELLED = 'cancelled';
    const STATUS_SHIPPED = 'shipped';
    const STATUS_IN_TRANSIT = 'in-transit';
    const STATUS_DELIVERED = 'delivered';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATED,
            self::STATUS_PURCHASED,
            self::STATUS_CANCELLED,
            self::STATUS_SHIPPED,
            self::STATUS_IN_TRANSIT,
            self::STATUS_DELIVERED,
        ];
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
        $this->container['carrier_name'] = $data['carrier_name'] ?? null;
        $this->container['carrier_id'] = $data['carrier_id'] ?? null;
        $this->container['tracking_number'] = $data['tracking_number'] ?? null;
        $this->container['events'] = $data['events'] ?? null;
        $this->container['delivered'] = $data['delivered'] ?? null;
        $this->container['test_mode'] = $data['test_mode'] ?? null;
        $this->container['status'] = $data['status'] ?? 'created';
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

        if ($this->container['tracking_number'] === null) {
            $invalidProperties[] = "'tracking_number' can't be null";
        }
        if ((mb_strlen($this->container['tracking_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'tracking_number', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['test_mode'] === null) {
            $invalidProperties[] = "'test_mode' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
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
            throw new \InvalidArgumentException('invalid length for $id when calling TrackingStatus., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

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
     * @param string $carrier_name The tracking carrier
     *
     * @return self
     */
    public function setCarrierName($carrier_name)
    {

        if ((mb_strlen($carrier_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $carrier_name when calling TrackingStatus., must be bigger than or equal to 1.');
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
     * @param string $carrier_id The tracking carrier configured identifier
     *
     * @return self
     */
    public function setCarrierId($carrier_id)
    {

        if ((mb_strlen($carrier_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $carrier_id when calling TrackingStatus., must be bigger than or equal to 1.');
        }

        $this->container['carrier_id'] = $carrier_id;

        return $this;
    }

    /**
     * Gets tracking_number
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string $tracking_number The shipment tracking number
     *
     * @return self
     */
    public function setTrackingNumber($tracking_number)
    {

        if ((mb_strlen($tracking_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $tracking_number when calling TrackingStatus., must be bigger than or equal to 1.');
        }

        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets events
     *
     * @return \Purplship\Model\TrackingEvent[]|null
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     *
     * @param \Purplship\Model\TrackingEvent[]|null $events The tracking details events
     *
     * @return self
     */
    public function setEvents($events)
    {
        $this->container['events'] = $events;

        return $this;
    }

    /**
     * Gets delivered
     *
     * @return bool|null
     */
    public function getDelivered()
    {
        return $this->container['delivered'];
    }

    /**
     * Sets delivered
     *
     * @param bool|null $delivered Specified whether the related shipment was delivered
     *
     * @return self
     */
    public function setDelivered($delivered)
    {
        $this->container['delivered'] = $delivered;

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
     * @param bool $test_mode Specified whether the object was created with a carrier in test mode
     *
     * @return self
     */
    public function setTestMode($test_mode)
    {
        $this->container['test_mode'] = $test_mode;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The current tracking status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

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



<?php
/**
 * Pickup
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
 * Pickup Class Doc Comment
 *
 * @category Class
 * @package  Purplship
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Pickup implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Pickup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'carrier_name' => 'string',
        'carrier_id' => 'string',
        'confirmation_number' => 'string',
        'pickup_date' => 'string',
        'pickup_charge' => '\Purplship\Model\Charge',
        'ready_time' => 'string',
        'closing_time' => 'string',
        'address' => '\Purplship\Model\Address',
        'parcels' => '\Purplship\Model\Parcel[]',
        'instruction' => 'string',
        'package_location' => 'string',
        'options' => 'object',
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
        'carrier_name' => null,
        'carrier_id' => null,
        'confirmation_number' => null,
        'pickup_date' => null,
        'pickup_charge' => null,
        'ready_time' => null,
        'closing_time' => null,
        'address' => null,
        'parcels' => null,
        'instruction' => null,
        'package_location' => null,
        'options' => null,
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
        'carrier_name' => 'carrier_name',
        'carrier_id' => 'carrier_id',
        'confirmation_number' => 'confirmation_number',
        'pickup_date' => 'pickup_date',
        'pickup_charge' => 'pickup_charge',
        'ready_time' => 'ready_time',
        'closing_time' => 'closing_time',
        'address' => 'address',
        'parcels' => 'parcels',
        'instruction' => 'instruction',
        'package_location' => 'package_location',
        'options' => 'options',
        'test_mode' => 'test_mode'
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
        'confirmation_number' => 'setConfirmationNumber',
        'pickup_date' => 'setPickupDate',
        'pickup_charge' => 'setPickupCharge',
        'ready_time' => 'setReadyTime',
        'closing_time' => 'setClosingTime',
        'address' => 'setAddress',
        'parcels' => 'setParcels',
        'instruction' => 'setInstruction',
        'package_location' => 'setPackageLocation',
        'options' => 'setOptions',
        'test_mode' => 'setTestMode'
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
        'confirmation_number' => 'getConfirmationNumber',
        'pickup_date' => 'getPickupDate',
        'pickup_charge' => 'getPickupCharge',
        'ready_time' => 'getReadyTime',
        'closing_time' => 'getClosingTime',
        'address' => 'getAddress',
        'parcels' => 'getParcels',
        'instruction' => 'getInstruction',
        'package_location' => 'getPackageLocation',
        'options' => 'getOptions',
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
        $this->container['carrier_name'] = $data['carrier_name'] ?? null;
        $this->container['carrier_id'] = $data['carrier_id'] ?? null;
        $this->container['confirmation_number'] = $data['confirmation_number'] ?? null;
        $this->container['pickup_date'] = $data['pickup_date'] ?? null;
        $this->container['pickup_charge'] = $data['pickup_charge'] ?? null;
        $this->container['ready_time'] = $data['ready_time'] ?? null;
        $this->container['closing_time'] = $data['closing_time'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['parcels'] = $data['parcels'] ?? null;
        $this->container['instruction'] = $data['instruction'] ?? null;
        $this->container['package_location'] = $data['package_location'] ?? null;
        $this->container['options'] = $data['options'] ?? null;
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

        if ($this->container['confirmation_number'] === null) {
            $invalidProperties[] = "'confirmation_number' can't be null";
        }
        if ((mb_strlen($this->container['confirmation_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'confirmation_number', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['pickup_date']) && (mb_strlen($this->container['pickup_date']) < 1)) {
            $invalidProperties[] = "invalid value for 'pickup_date', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['ready_time']) && (mb_strlen($this->container['ready_time']) < 1)) {
            $invalidProperties[] = "invalid value for 'ready_time', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['closing_time']) && (mb_strlen($this->container['closing_time']) < 1)) {
            $invalidProperties[] = "invalid value for 'closing_time', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['parcels'] === null) {
            $invalidProperties[] = "'parcels' can't be null";
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
     * @param string|null $id A unique pickup identifier
     *
     * @return self
     */
    public function setId($id)
    {

        if (!is_null($id) && (mb_strlen($id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id when calling Pickup., must be bigger than or equal to 1.');
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
     * @param string $carrier_name The pickup carrier
     *
     * @return self
     */
    public function setCarrierName($carrier_name)
    {

        if ((mb_strlen($carrier_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $carrier_name when calling Pickup., must be bigger than or equal to 1.');
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
     * @param string $carrier_id The pickup carrier configured name
     *
     * @return self
     */
    public function setCarrierId($carrier_id)
    {

        if ((mb_strlen($carrier_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $carrier_id when calling Pickup., must be bigger than or equal to 1.');
        }

        $this->container['carrier_id'] = $carrier_id;

        return $this;
    }

    /**
     * Gets confirmation_number
     *
     * @return string
     */
    public function getConfirmationNumber()
    {
        return $this->container['confirmation_number'];
    }

    /**
     * Sets confirmation_number
     *
     * @param string $confirmation_number The pickup confirmation identifier
     *
     * @return self
     */
    public function setConfirmationNumber($confirmation_number)
    {

        if ((mb_strlen($confirmation_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $confirmation_number when calling Pickup., must be bigger than or equal to 1.');
        }

        $this->container['confirmation_number'] = $confirmation_number;

        return $this;
    }

    /**
     * Gets pickup_date
     *
     * @return string|null
     */
    public function getPickupDate()
    {
        return $this->container['pickup_date'];
    }

    /**
     * Sets pickup_date
     *
     * @param string|null $pickup_date The pickup date
     *
     * @return self
     */
    public function setPickupDate($pickup_date)
    {

        if (!is_null($pickup_date) && (mb_strlen($pickup_date) < 1)) {
            throw new \InvalidArgumentException('invalid length for $pickup_date when calling Pickup., must be bigger than or equal to 1.');
        }

        $this->container['pickup_date'] = $pickup_date;

        return $this;
    }

    /**
     * Gets pickup_charge
     *
     * @return \Purplship\Model\Charge|null
     */
    public function getPickupCharge()
    {
        return $this->container['pickup_charge'];
    }

    /**
     * Sets pickup_charge
     *
     * @param \Purplship\Model\Charge|null $pickup_charge pickup_charge
     *
     * @return self
     */
    public function setPickupCharge($pickup_charge)
    {
        $this->container['pickup_charge'] = $pickup_charge;

        return $this;
    }

    /**
     * Gets ready_time
     *
     * @return string|null
     */
    public function getReadyTime()
    {
        return $this->container['ready_time'];
    }

    /**
     * Sets ready_time
     *
     * @param string|null $ready_time The pickup expected ready time
     *
     * @return self
     */
    public function setReadyTime($ready_time)
    {

        if (!is_null($ready_time) && (mb_strlen($ready_time) < 1)) {
            throw new \InvalidArgumentException('invalid length for $ready_time when calling Pickup., must be bigger than or equal to 1.');
        }

        $this->container['ready_time'] = $ready_time;

        return $this;
    }

    /**
     * Gets closing_time
     *
     * @return string|null
     */
    public function getClosingTime()
    {
        return $this->container['closing_time'];
    }

    /**
     * Sets closing_time
     *
     * @param string|null $closing_time The pickup expected closing or late time
     *
     * @return self
     */
    public function setClosingTime($closing_time)
    {

        if (!is_null($closing_time) && (mb_strlen($closing_time) < 1)) {
            throw new \InvalidArgumentException('invalid length for $closing_time when calling Pickup., must be bigger than or equal to 1.');
        }

        $this->container['closing_time'] = $closing_time;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Purplship\Model\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Purplship\Model\Address $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets parcels
     *
     * @return \Purplship\Model\Parcel[]
     */
    public function getParcels()
    {
        return $this->container['parcels'];
    }

    /**
     * Sets parcels
     *
     * @param \Purplship\Model\Parcel[] $parcels The shipment parcels to pickup.
     *
     * @return self
     */
    public function setParcels($parcels)
    {
        $this->container['parcels'] = $parcels;

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



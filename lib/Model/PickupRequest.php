<?php
/**
 * PickupRequest
 *
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
 * OpenAPI spec version: v1-2021.2
 * Contact: hello@purplship.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.24
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Purplship\Model;

use \ArrayAccess;
use \Purplship\ObjectSerializer;

/**
 * PickupRequest Class Doc Comment
 *
 * @category Class
 * @package  Purplship
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PickupRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PickupRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pickup_date' => 'string',
'address' => '\Purplship\Model\AddressData',
'parcels' => '\Purplship\Model\ParcelData[]',
'ready_time' => 'string',
'closing_time' => 'string',
'instruction' => 'string',
'package_location' => 'string',
'options' => 'object'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pickup_date' => null,
'address' => null,
'parcels' => null,
'ready_time' => null,
'closing_time' => null,
'instruction' => null,
'package_location' => null,
'options' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
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
'parcels' => 'parcels',
'ready_time' => 'ready_time',
'closing_time' => 'closing_time',
'instruction' => 'instruction',
'package_location' => 'package_location',
'options' => 'options'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pickup_date' => 'setPickupDate',
'address' => 'setAddress',
'parcels' => 'setParcels',
'ready_time' => 'setReadyTime',
'closing_time' => 'setClosingTime',
'instruction' => 'setInstruction',
'package_location' => 'setPackageLocation',
'options' => 'setOptions'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pickup_date' => 'getPickupDate',
'address' => 'getAddress',
'parcels' => 'getParcels',
'ready_time' => 'getReadyTime',
'closing_time' => 'getClosingTime',
'instruction' => 'getInstruction',
'package_location' => 'getPackageLocation',
'options' => 'getOptions'    ];

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
        return self::$swaggerModelName;
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
        $this->container['pickup_date'] = isset($data['pickup_date']) ? $data['pickup_date'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['parcels'] = isset($data['parcels']) ? $data['parcels'] : null;
        $this->container['ready_time'] = isset($data['ready_time']) ? $data['ready_time'] : null;
        $this->container['closing_time'] = isset($data['closing_time']) ? $data['closing_time'] : null;
        $this->container['instruction'] = isset($data['instruction']) ? $data['instruction'] : null;
        $this->container['package_location'] = isset($data['package_location']) ? $data['package_location'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
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
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['parcels'] === null) {
            $invalidProperties[] = "'parcels' can't be null";
        }
        if ($this->container['ready_time'] === null) {
            $invalidProperties[] = "'ready_time' can't be null";
        }
        if ($this->container['closing_time'] === null) {
            $invalidProperties[] = "'closing_time' can't be null";
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
     * @return $this
     */
    public function setPickupDate($pickup_date)
    {
        $this->container['pickup_date'] = $pickup_date;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Purplship\Model\AddressData
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Purplship\Model\AddressData $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets parcels
     *
     * @return \Purplship\Model\ParcelData[]
     */
    public function getParcels()
    {
        return $this->container['parcels'];
    }

    /**
     * Sets parcels
     *
     * @param \Purplship\Model\ParcelData[] $parcels The shipment parcels to pickup.
     *
     * @return $this
     */
    public function setParcels($parcels)
    {
        $this->container['parcels'] = $parcels;

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
     * @return $this
     */
    public function setReadyTime($ready_time)
    {
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
     * @return $this
     */
    public function setClosingTime($closing_time)
    {
        $this->container['closing_time'] = $closing_time;

        return $this;
    }

    /**
     * Gets instruction
     *
     * @return string
     */
    public function getInstruction()
    {
        return $this->container['instruction'];
    }

    /**
     * Sets instruction
     *
     * @param string $instruction The pickup instruction.  eg: Handle with care.
     *
     * @return $this
     */
    public function setInstruction($instruction)
    {
        $this->container['instruction'] = $instruction;

        return $this;
    }

    /**
     * Gets package_location
     *
     * @return string
     */
    public function getPackageLocation()
    {
        return $this->container['package_location'];
    }

    /**
     * Sets package_location
     *
     * @param string $package_location The package(s) location.  eg: Behind the entrance door.
     *
     * @return $this
     */
    public function setPackageLocation($package_location)
    {
        $this->container['package_location'] = $package_location;

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
     * @param object $options Advanced carrier specific pickup options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

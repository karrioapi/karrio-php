<?php
/**
 * TrackingStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  Purplship\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Purplship Open Source Multi-carrier Shipping API
 *
 * Purplship is an open source multi-carrier shipping API that simplifies the integration of logistic carrier services  The **proxy** endpoints are stateless and forwards calls to carriers web services.
 *
 * OpenAPI spec version: v1-2020.8.2
 * Contact: hello@purplship.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.15
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Purplship\Client\Model;

use \ArrayAccess;
use \Purplship\Client\\ObjectSerializer;

/**
 * TrackingStatus Class Doc Comment
 *
 * @category Class
 * @package  Purplship\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TrackingStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TrackingStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'carrier_name' => 'string',
        'carrier_id' => 'string',
        'tracking_number' => 'string',
        'events' => '\Purplship\Client\\Model\TrackingEvent[]',
        'shipment_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'carrier_name' => null,
        'carrier_id' => null,
        'tracking_number' => null,
        'events' => null,
        'shipment_id' => null
    ];

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
        'id' => 'id',
        'carrier_name' => 'carrierName',
        'carrier_id' => 'carrierId',
        'tracking_number' => 'trackingNumber',
        'events' => 'events',
        'shipment_id' => 'shipmentId'
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
        'shipment_id' => 'setShipmentId'
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
        'shipment_id' => 'getShipmentId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['carrier_name'] = isset($data['carrier_name']) ? $data['carrier_name'] : null;
        $this->container['carrier_id'] = isset($data['carrier_id']) ? $data['carrier_id'] : null;
        $this->container['tracking_number'] = isset($data['tracking_number']) ? $data['tracking_number'] : null;
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
        $this->container['shipment_id'] = isset($data['shipment_id']) ? $data['shipment_id'] : null;
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id A unique identifier
     *
     * @return $this
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
     * @return $this
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
     * @return $this
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
     * @return $this
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
     * @return \Purplship\Client\\Model\TrackingEvent[]
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     *
     * @param \Purplship\Client\\Model\TrackingEvent[] $events The tracking details events
     *
     * @return $this
     */
    public function setEvents($events)
    {
        $this->container['events'] = $events;

        return $this;
    }

    /**
     * Gets shipment_id
     *
     * @return string
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id
     *
     * @param string $shipment_id The system shipment associated.
     *
     * @return $this
     */
    public function setShipmentId($shipment_id)
    {
        $this->container['shipment_id'] = $shipment_id;

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


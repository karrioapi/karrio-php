<?php
/**
 * TrackingEvent
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
 * TrackingEvent Class Doc Comment
 *
 * @category Class
 * @package  Purplship\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TrackingEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TrackingEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date' => 'string',
        'description' => 'string',
        'location' => 'string',
        'code' => 'string',
        'time' => 'string',
        'signatory' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date' => null,
        'description' => null,
        'location' => null,
        'code' => null,
        'time' => null,
        'signatory' => null
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
        'date' => 'date',
        'description' => 'description',
        'location' => 'location',
        'code' => 'code',
        'time' => 'time',
        'signatory' => 'signatory'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
        'description' => 'setDescription',
        'location' => 'setLocation',
        'code' => 'setCode',
        'time' => 'setTime',
        'signatory' => 'setSignatory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
        'description' => 'getDescription',
        'location' => 'getLocation',
        'code' => 'getCode',
        'time' => 'getTime',
        'signatory' => 'getSignatory'
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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['signatory'] = isset($data['signatory']) ? $data['signatory'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ((mb_strlen($this->container['date']) < 1)) {
            $invalidProperties[] = "invalid value for 'date', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ((mb_strlen($this->container['description']) < 1)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
        }
        if ((mb_strlen($this->container['location']) < 1)) {
            $invalidProperties[] = "invalid value for 'location', the character length must be bigger than or equal to 1.";
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
     * Gets date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string $date The tracking event's date
     *
     * @return $this
     */
    public function setDate($date)
    {

        if ((mb_strlen($date) < 1)) {
            throw new \InvalidArgumentException('invalid length for $date when calling TrackingEvent., must be bigger than or equal to 1.');
        }

        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The tracking event's description
     *
     * @return $this
     */
    public function setDescription($description)
    {

        if ((mb_strlen($description) < 1)) {
            throw new \InvalidArgumentException('invalid length for $description when calling TrackingEvent., must be bigger than or equal to 1.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location The tracking event's location
     *
     * @return $this
     */
    public function setLocation($location)
    {

        if ((mb_strlen($location) < 1)) {
            throw new \InvalidArgumentException('invalid length for $location when calling TrackingEvent., must be bigger than or equal to 1.');
        }

        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code The tracking event's code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param string $time The tracking event's time
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets signatory
     *
     * @return string
     */
    public function getSignatory()
    {
        return $this->container['signatory'];
    }

    /**
     * Sets signatory
     *
     * @param string $signatory The tracking signature on delivery
     *
     * @return $this
     */
    public function setSignatory($signatory)
    {
        $this->container['signatory'] = $signatory;

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



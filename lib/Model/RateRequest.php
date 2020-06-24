<?php
/**
 * RateRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  PurplShip
 * @author   PurplShip team
 * @link     https://github.com/PurplShip/purplship-php-client
 */

/**
 * PurplShip Multi-carrier API
 *
 * PurplShip is a Multi-carrier Shipping API that simplifies the integration of logistic carrier services
 *
 * OpenAPI spec version: v1
 * Contact: hello@purplship.com
 * Generated by: https://github.com/PurplShip/purplship-php-client.git
 * Swagger Codegen version: 2.4.14
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/PurplShip/purplship-php-client
 * Do not edit the class manually.
 */

namespace PurplShip\Model;

use \ArrayAccess;
use \PurplShip\ObjectSerializer;

/**
 * RateRequest Class Doc Comment
 *
 * @category Class
 * @package  PurplShip
 * @author   PurplShip team
 * @link     https://github.com/PurplShip/purplship-php-client
 */
class RateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipper' => '\PurplShip\Model\Address',
        'recipient' => '\PurplShip\Model\Address',
        'parcel' => '\PurplShip\Model\Parcel',
        'services' => 'string[]',
        'options' => '\PurplShip\Model\Options',
        'reference' => 'string',
        'carrier_ids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipper' => null,
        'recipient' => null,
        'parcel' => null,
        'services' => null,
        'options' => null,
        'reference' => null,
        'carrier_ids' => null
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
        'shipper' => 'shipper',
        'recipient' => 'recipient',
        'parcel' => 'parcel',
        'services' => 'services',
        'options' => 'options',
        'reference' => 'reference',
        'carrier_ids' => 'carrierIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipper' => 'setShipper',
        'recipient' => 'setRecipient',
        'parcel' => 'setParcel',
        'services' => 'setServices',
        'options' => 'setOptions',
        'reference' => 'setReference',
        'carrier_ids' => 'setCarrierIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipper' => 'getShipper',
        'recipient' => 'getRecipient',
        'parcel' => 'getParcel',
        'services' => 'getServices',
        'options' => 'getOptions',
        'reference' => 'getReference',
        'carrier_ids' => 'getCarrierIds'
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
        $this->container['shipper'] = isset($data['shipper']) ? $data['shipper'] : null;
        $this->container['recipient'] = isset($data['recipient']) ? $data['recipient'] : null;
        $this->container['parcel'] = isset($data['parcel']) ? $data['parcel'] : null;
        $this->container['services'] = isset($data['services']) ? $data['services'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['carrier_ids'] = isset($data['carrier_ids']) ? $data['carrier_ids'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipper'] === null) {
            $invalidProperties[] = "'shipper' can't be null";
        }
        if ($this->container['recipient'] === null) {
            $invalidProperties[] = "'recipient' can't be null";
        }
        if ($this->container['parcel'] === null) {
            $invalidProperties[] = "'parcel' can't be null";
        }
        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) < 1)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be bigger than or equal to 1.";
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
     * Gets shipper
     *
     * @return \PurplShip\Model\Address
     */
    public function getShipper()
    {
        return $this->container['shipper'];
    }

    /**
     * Sets shipper
     *
     * @param \PurplShip\Model\Address $shipper shipper
     *
     * @return $this
     */
    public function setShipper($shipper)
    {
        $this->container['shipper'] = $shipper;

        return $this;
    }

    /**
     * Gets recipient
     *
     * @return \PurplShip\Model\Address
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     *
     * @param \PurplShip\Model\Address $recipient recipient
     *
     * @return $this
     */
    public function setRecipient($recipient)
    {
        $this->container['recipient'] = $recipient;

        return $this;
    }

    /**
     * Gets parcel
     *
     * @return \PurplShip\Model\Parcel
     */
    public function getParcel()
    {
        return $this->container['parcel'];
    }

    /**
     * Sets parcel
     *
     * @param \PurplShip\Model\Parcel $parcel parcel
     *
     * @return $this
     */
    public function setParcel($parcel)
    {
        $this->container['parcel'] = $parcel;

        return $this;
    }

    /**
     * Gets services
     *
     * @return string[]
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param string[] $services The requested carrier service for the shipment. Please consult [the reference](#operation/all_references) for specific carriers services.  Note that this is a list because on a Multi-carrier rate request you could specify a service per carrier.
     *
     * @return $this
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \PurplShip\Model\Options
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \PurplShip\Model\Options $options options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference The shipment reference
     *
     * @return $this
     */
    public function setReference($reference)
    {

        if (!is_null($reference) && (mb_strlen($reference) < 1)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling RateRequest., must be bigger than or equal to 1.');
        }

        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets carrier_ids
     *
     * @return string[]
     */
    public function getCarrierIds()
    {
        return $this->container['carrier_ids'];
    }

    /**
     * Sets carrier_ids
     *
     * @param string[] $carrier_ids The list of configured carriers you wish to get rates from.
     *
     * @return $this
     */
    public function setCarrierIds($carrier_ids)
    {
        $this->container['carrier_ids'] = $carrier_ids;

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



<?php
/**
 * ShippingRequest
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
 * OpenAPI spec version: v1-2020.11
 * Contact: hello@purplship.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.23
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
 * ShippingRequest Class Doc Comment
 *
 * @category Class
 * @package  Purplship
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShippingRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShippingRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipper' => '\Purplship\Model\AddressData',
'recipient' => '\Purplship\Model\AddressData',
'parcels' => '\Purplship\Model\ParcelData[]',
'options' => 'object',
'payment' => '\Purplship\Model\Payment',
'customs' => '\Purplship\Model\CustomsData',
'doc_images' => '\Purplship\Model\Doc[]',
'reference' => 'string',
'selected_rate_id' => 'string',
'rates' => '\Purplship\Model\Rate[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipper' => null,
'recipient' => null,
'parcels' => null,
'options' => null,
'payment' => null,
'customs' => null,
'doc_images' => null,
'reference' => null,
'selected_rate_id' => null,
'rates' => null    ];

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
'parcels' => 'parcels',
'options' => 'options',
'payment' => 'payment',
'customs' => 'customs',
'doc_images' => 'doc_images',
'reference' => 'reference',
'selected_rate_id' => 'selected_rate_id',
'rates' => 'rates'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipper' => 'setShipper',
'recipient' => 'setRecipient',
'parcels' => 'setParcels',
'options' => 'setOptions',
'payment' => 'setPayment',
'customs' => 'setCustoms',
'doc_images' => 'setDocImages',
'reference' => 'setReference',
'selected_rate_id' => 'setSelectedRateId',
'rates' => 'setRates'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipper' => 'getShipper',
'recipient' => 'getRecipient',
'parcels' => 'getParcels',
'options' => 'getOptions',
'payment' => 'getPayment',
'customs' => 'getCustoms',
'doc_images' => 'getDocImages',
'reference' => 'getReference',
'selected_rate_id' => 'getSelectedRateId',
'rates' => 'getRates'    ];

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
        $this->container['parcels'] = isset($data['parcels']) ? $data['parcels'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['payment'] = isset($data['payment']) ? $data['payment'] : null;
        $this->container['customs'] = isset($data['customs']) ? $data['customs'] : null;
        $this->container['doc_images'] = isset($data['doc_images']) ? $data['doc_images'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['selected_rate_id'] = isset($data['selected_rate_id']) ? $data['selected_rate_id'] : null;
        $this->container['rates'] = isset($data['rates']) ? $data['rates'] : null;
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
        if ($this->container['parcels'] === null) {
            $invalidProperties[] = "'parcels' can't be null";
        }
        if ($this->container['payment'] === null) {
            $invalidProperties[] = "'payment' can't be null";
        }
        if ($this->container['selected_rate_id'] === null) {
            $invalidProperties[] = "'selected_rate_id' can't be null";
        }
        if ($this->container['rates'] === null) {
            $invalidProperties[] = "'rates' can't be null";
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
     * @return \Purplship\Model\AddressData
     */
    public function getShipper()
    {
        return $this->container['shipper'];
    }

    /**
     * Sets shipper
     *
     * @param \Purplship\Model\AddressData $shipper shipper
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
     * @return \Purplship\Model\AddressData
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     *
     * @param \Purplship\Model\AddressData $recipient recipient
     *
     * @return $this
     */
    public function setRecipient($recipient)
    {
        $this->container['recipient'] = $recipient;

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
     * @param \Purplship\Model\ParcelData[] $parcels The shipment's parcels
     *
     * @return $this
     */
    public function setParcels($parcels)
    {
        $this->container['parcels'] = $parcels;

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
     * @param object $options The options available for the shipment.<br/> Please consult [the reference](#operation/references) for additional specific carriers options.
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets payment
     *
     * @return \Purplship\Model\Payment
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \Purplship\Model\Payment $payment payment
     *
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets customs
     *
     * @return \Purplship\Model\CustomsData
     */
    public function getCustoms()
    {
        return $this->container['customs'];
    }

    /**
     * Sets customs
     *
     * @param \Purplship\Model\CustomsData $customs customs
     *
     * @return $this
     */
    public function setCustoms($customs)
    {
        $this->container['customs'] = $customs;

        return $this;
    }

    /**
     * Gets doc_images
     *
     * @return \Purplship\Model\Doc[]
     */
    public function getDocImages()
    {
        return $this->container['doc_images'];
    }

    /**
     * Sets doc_images
     *
     * @param \Purplship\Model\Doc[] $doc_images The list of documents to attach for a paperless interantional trade.  eg: Invoices...
     *
     * @return $this
     */
    public function setDocImages($doc_images)
    {
        $this->container['doc_images'] = $doc_images;

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
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets selected_rate_id
     *
     * @return string
     */
    public function getSelectedRateId()
    {
        return $this->container['selected_rate_id'];
    }

    /**
     * Sets selected_rate_id
     *
     * @param string $selected_rate_id The shipment selected rate.
     *
     * @return $this
     */
    public function setSelectedRateId($selected_rate_id)
    {
        $this->container['selected_rate_id'] = $selected_rate_id;

        return $this;
    }

    /**
     * Gets rates
     *
     * @return \Purplship\Model\Rate[]
     */
    public function getRates()
    {
        return $this->container['rates'];
    }

    /**
     * Sets rates
     *
     * @param \Purplship\Model\Rate[] $rates The list for shipment rates fetched previously
     *
     * @return $this
     */
    public function setRates($rates)
    {
        $this->container['rates'] = $rates;

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

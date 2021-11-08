<?php
/**
 * Shipment
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
 * Shipment Class Doc Comment
 *
 * @category Class
 * @package  Purplship
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Shipment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Shipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'status' => 'string',
        'carrier_name' => 'string',
        'carrier_id' => 'string',
        'label' => 'string',
        'tracking_number' => 'string',
        'shipment_identifier' => 'string',
        'selected_rate' => '\Purplship\Model\Rate',
        'selected_rate_id' => 'string',
        'rates' => '\Purplship\Model\Rate[]',
        'tracking_url' => 'string',
        'service' => 'string',
        'shipper' => '\Purplship\Model\Address',
        'recipient' => '\Purplship\Model\Address',
        'parcels' => '\Purplship\Model\Parcel[]',
        'services' => 'string[]',
        'options' => 'object',
        'payment' => '\Purplship\Model\Payment',
        'customs' => '\Purplship\Model\Customs',
        'reference' => 'string',
        'label_type' => 'string',
        'carrier_ids' => 'string[]',
        'tracker_id' => 'string',
        'created_at' => 'string',
        'test_mode' => 'bool',
        'meta' => 'object',
        'messages' => '\Purplship\Model\Message[]'
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
        'status' => null,
        'carrier_name' => null,
        'carrier_id' => null,
        'label' => null,
        'tracking_number' => null,
        'shipment_identifier' => null,
        'selected_rate' => null,
        'selected_rate_id' => null,
        'rates' => null,
        'tracking_url' => 'uri',
        'service' => null,
        'shipper' => null,
        'recipient' => null,
        'parcels' => null,
        'services' => null,
        'options' => null,
        'payment' => null,
        'customs' => null,
        'reference' => null,
        'label_type' => null,
        'carrier_ids' => null,
        'tracker_id' => null,
        'created_at' => null,
        'test_mode' => null,
        'meta' => null,
        'messages' => null
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
        'status' => 'status',
        'carrier_name' => 'carrier_name',
        'carrier_id' => 'carrier_id',
        'label' => 'label',
        'tracking_number' => 'tracking_number',
        'shipment_identifier' => 'shipment_identifier',
        'selected_rate' => 'selected_rate',
        'selected_rate_id' => 'selected_rate_id',
        'rates' => 'rates',
        'tracking_url' => 'tracking_url',
        'service' => 'service',
        'shipper' => 'shipper',
        'recipient' => 'recipient',
        'parcels' => 'parcels',
        'services' => 'services',
        'options' => 'options',
        'payment' => 'payment',
        'customs' => 'customs',
        'reference' => 'reference',
        'label_type' => 'label_type',
        'carrier_ids' => 'carrier_ids',
        'tracker_id' => 'tracker_id',
        'created_at' => 'created_at',
        'test_mode' => 'test_mode',
        'meta' => 'meta',
        'messages' => 'messages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'status' => 'setStatus',
        'carrier_name' => 'setCarrierName',
        'carrier_id' => 'setCarrierId',
        'label' => 'setLabel',
        'tracking_number' => 'setTrackingNumber',
        'shipment_identifier' => 'setShipmentIdentifier',
        'selected_rate' => 'setSelectedRate',
        'selected_rate_id' => 'setSelectedRateId',
        'rates' => 'setRates',
        'tracking_url' => 'setTrackingUrl',
        'service' => 'setService',
        'shipper' => 'setShipper',
        'recipient' => 'setRecipient',
        'parcels' => 'setParcels',
        'services' => 'setServices',
        'options' => 'setOptions',
        'payment' => 'setPayment',
        'customs' => 'setCustoms',
        'reference' => 'setReference',
        'label_type' => 'setLabelType',
        'carrier_ids' => 'setCarrierIds',
        'tracker_id' => 'setTrackerId',
        'created_at' => 'setCreatedAt',
        'test_mode' => 'setTestMode',
        'meta' => 'setMeta',
        'messages' => 'setMessages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'status' => 'getStatus',
        'carrier_name' => 'getCarrierName',
        'carrier_id' => 'getCarrierId',
        'label' => 'getLabel',
        'tracking_number' => 'getTrackingNumber',
        'shipment_identifier' => 'getShipmentIdentifier',
        'selected_rate' => 'getSelectedRate',
        'selected_rate_id' => 'getSelectedRateId',
        'rates' => 'getRates',
        'tracking_url' => 'getTrackingUrl',
        'service' => 'getService',
        'shipper' => 'getShipper',
        'recipient' => 'getRecipient',
        'parcels' => 'getParcels',
        'services' => 'getServices',
        'options' => 'getOptions',
        'payment' => 'getPayment',
        'customs' => 'getCustoms',
        'reference' => 'getReference',
        'label_type' => 'getLabelType',
        'carrier_ids' => 'getCarrierIds',
        'tracker_id' => 'getTrackerId',
        'created_at' => 'getCreatedAt',
        'test_mode' => 'getTestMode',
        'meta' => 'getMeta',
        'messages' => 'getMessages'
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
    const LABEL_TYPE_PDF = 'PDF';
    const LABEL_TYPE_ZPL = 'ZPL';

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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLabelTypeAllowableValues()
    {
        return [
            self::LABEL_TYPE_PDF,
            self::LABEL_TYPE_ZPL,
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
        $this->container['status'] = $data['status'] ?? 'created';
        $this->container['carrier_name'] = $data['carrier_name'] ?? null;
        $this->container['carrier_id'] = $data['carrier_id'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
        $this->container['tracking_number'] = $data['tracking_number'] ?? null;
        $this->container['shipment_identifier'] = $data['shipment_identifier'] ?? null;
        $this->container['selected_rate'] = $data['selected_rate'] ?? null;
        $this->container['selected_rate_id'] = $data['selected_rate_id'] ?? null;
        $this->container['rates'] = $data['rates'] ?? null;
        $this->container['tracking_url'] = $data['tracking_url'] ?? null;
        $this->container['service'] = $data['service'] ?? null;
        $this->container['shipper'] = $data['shipper'] ?? null;
        $this->container['recipient'] = $data['recipient'] ?? null;
        $this->container['parcels'] = $data['parcels'] ?? null;
        $this->container['services'] = $data['services'] ?? null;
        $this->container['options'] = $data['options'] ?? null;
        $this->container['payment'] = $data['payment'] ?? null;
        $this->container['customs'] = $data['customs'] ?? null;
        $this->container['reference'] = $data['reference'] ?? null;
        $this->container['label_type'] = $data['label_type'] ?? null;
        $this->container['carrier_ids'] = $data['carrier_ids'] ?? null;
        $this->container['tracker_id'] = $data['tracker_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['test_mode'] = $data['test_mode'] ?? null;
        $this->container['meta'] = $data['meta'] ?? null;
        $this->container['messages'] = $data['messages'] ?? null;
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['shipper'] === null) {
            $invalidProperties[] = "'shipper' can't be null";
        }
        if ($this->container['recipient'] === null) {
            $invalidProperties[] = "'recipient' can't be null";
        }
        if ($this->container['parcels'] === null) {
            $invalidProperties[] = "'parcels' can't be null";
        }
        $allowedValues = $this->getLabelTypeAllowableValues();
        if (!is_null($this->container['label_type']) && !in_array($this->container['label_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'label_type', must be one of '%s'",
                $this->container['label_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ((mb_strlen($this->container['created_at']) < 1)) {
            $invalidProperties[] = "invalid value for 'created_at', the character length must be bigger than or equal to 1.";
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
            throw new \InvalidArgumentException('invalid length for $id when calling Shipment., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

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
     * @param string|null $status The current Shipment status
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
     * Gets carrier_name
     *
     * @return string|null
     */
    public function getCarrierName()
    {
        return $this->container['carrier_name'];
    }

    /**
     * Sets carrier_name
     *
     * @param string|null $carrier_name The shipment carrier
     *
     * @return self
     */
    public function setCarrierName($carrier_name)
    {
        $this->container['carrier_name'] = $carrier_name;

        return $this;
    }

    /**
     * Gets carrier_id
     *
     * @return string|null
     */
    public function getCarrierId()
    {
        return $this->container['carrier_id'];
    }

    /**
     * Sets carrier_id
     *
     * @param string|null $carrier_id The shipment carrier configured identifier
     *
     * @return self
     */
    public function setCarrierId($carrier_id)
    {
        $this->container['carrier_id'] = $carrier_id;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label The shipment label in base64 string
     *
     * @return self
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets tracking_number
     *
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string|null $tracking_number The shipment tracking number
     *
     * @return self
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets shipment_identifier
     *
     * @return string|null
     */
    public function getShipmentIdentifier()
    {
        return $this->container['shipment_identifier'];
    }

    /**
     * Sets shipment_identifier
     *
     * @param string|null $shipment_identifier The shipment carrier system identifier
     *
     * @return self
     */
    public function setShipmentIdentifier($shipment_identifier)
    {
        $this->container['shipment_identifier'] = $shipment_identifier;

        return $this;
    }

    /**
     * Gets selected_rate
     *
     * @return \Purplship\Model\Rate|null
     */
    public function getSelectedRate()
    {
        return $this->container['selected_rate'];
    }

    /**
     * Sets selected_rate
     *
     * @param \Purplship\Model\Rate|null $selected_rate selected_rate
     *
     * @return self
     */
    public function setSelectedRate($selected_rate)
    {
        $this->container['selected_rate'] = $selected_rate;

        return $this;
    }

    /**
     * Gets selected_rate_id
     *
     * @return string|null
     */
    public function getSelectedRateId()
    {
        return $this->container['selected_rate_id'];
    }

    /**
     * Sets selected_rate_id
     *
     * @param string|null $selected_rate_id The shipment selected rate.
     *
     * @return self
     */
    public function setSelectedRateId($selected_rate_id)
    {
        $this->container['selected_rate_id'] = $selected_rate_id;

        return $this;
    }

    /**
     * Gets rates
     *
     * @return \Purplship\Model\Rate[]|null
     */
    public function getRates()
    {
        return $this->container['rates'];
    }

    /**
     * Sets rates
     *
     * @param \Purplship\Model\Rate[]|null $rates The list for shipment rates fetched previously
     *
     * @return self
     */
    public function setRates($rates)
    {
        $this->container['rates'] = $rates;

        return $this;
    }

    /**
     * Gets tracking_url
     *
     * @return string|null
     */
    public function getTrackingUrl()
    {
        return $this->container['tracking_url'];
    }

    /**
     * Sets tracking_url
     *
     * @param string|null $tracking_url The shipment tracking url
     *
     * @return self
     */
    public function setTrackingUrl($tracking_url)
    {
        $this->container['tracking_url'] = $tracking_url;

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
     * @param string|null $service The selected service
     *
     * @return self
     */
    public function setService($service)
    {
        $this->container['service'] = $service;

        return $this;
    }

    /**
     * Gets shipper
     *
     * @return \Purplship\Model\Address
     */
    public function getShipper()
    {
        return $this->container['shipper'];
    }

    /**
     * Sets shipper
     *
     * @param \Purplship\Model\Address $shipper shipper
     *
     * @return self
     */
    public function setShipper($shipper)
    {
        $this->container['shipper'] = $shipper;

        return $this;
    }

    /**
     * Gets recipient
     *
     * @return \Purplship\Model\Address
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     *
     * @param \Purplship\Model\Address $recipient recipient
     *
     * @return self
     */
    public function setRecipient($recipient)
    {
        $this->container['recipient'] = $recipient;

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
     * @param \Purplship\Model\Parcel[] $parcels The shipment's parcels
     *
     * @return self
     */
    public function setParcels($parcels)
    {
        $this->container['parcels'] = $parcels;

        return $this;
    }

    /**
     * Gets services
     *
     * @return string[]|null
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param string[]|null $services The carriers services requested for the shipment.  Please consult [the reference](#operation/references) for specific carriers services.<br/> Note that this is a list because on a Multi-carrier rate request you could specify a service per carrier.
     *
     * @return self
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

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
     * @param object|null $options The options available for the shipment.<br/> Please consult [the reference](#operation/references) for additional specific carriers options.
     *
     * @return self
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets payment
     *
     * @return \Purplship\Model\Payment|null
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \Purplship\Model\Payment|null $payment payment
     *
     * @return self
     */
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets customs
     *
     * @return \Purplship\Model\Customs|null
     */
    public function getCustoms()
    {
        return $this->container['customs'];
    }

    /**
     * Sets customs
     *
     * @param \Purplship\Model\Customs|null $customs customs
     *
     * @return self
     */
    public function setCustoms($customs)
    {
        $this->container['customs'] = $customs;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference The shipment reference
     *
     * @return self
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets label_type
     *
     * @return string|null
     */
    public function getLabelType()
    {
        return $this->container['label_type'];
    }

    /**
     * Sets label_type
     *
     * @param string|null $label_type The shipment label file type.
     *
     * @return self
     */
    public function setLabelType($label_type)
    {
        $allowedValues = $this->getLabelTypeAllowableValues();
        if (!is_null($label_type) && !in_array($label_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'label_type', must be one of '%s'",
                    $label_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['label_type'] = $label_type;

        return $this;
    }

    /**
     * Gets carrier_ids
     *
     * @return string[]|null
     */
    public function getCarrierIds()
    {
        return $this->container['carrier_ids'];
    }

    /**
     * Sets carrier_ids
     *
     * @param string[]|null $carrier_ids The list of configured carriers you wish to get rates from.  *Note that the request will be sent to all carriers in nothing is specified*
     *
     * @return self
     */
    public function setCarrierIds($carrier_ids)
    {
        $this->container['carrier_ids'] = $carrier_ids;

        return $this;
    }

    /**
     * Gets tracker_id
     *
     * @return string|null
     */
    public function getTrackerId()
    {
        return $this->container['tracker_id'];
    }

    /**
     * Sets tracker_id
     *
     * @param string|null $tracker_id The attached tracker id
     *
     * @return self
     */
    public function setTrackerId($tracker_id)
    {
        $this->container['tracker_id'] = $tracker_id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at The shipment creation datetime  Date Format: `YYYY-MM-DD HH:MM:SS.mmmmmmz`
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {

        if ((mb_strlen($created_at) < 1)) {
            throw new \InvalidArgumentException('invalid length for $created_at when calling Shipment., must be bigger than or equal to 1.');
        }

        $this->container['created_at'] = $created_at;

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
     * Gets messages
     *
     * @return \Purplship\Model\Message[]|null
     */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     *
     * @param \Purplship\Model\Message[]|null $messages The list of note or warning messages
     *
     * @return self
     */
    public function setMessages($messages)
    {
        $this->container['messages'] = $messages;

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



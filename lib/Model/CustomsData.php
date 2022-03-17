<?php
/**
 * CustomsData
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
 * CustomsData Class Doc Comment
 *
 * @category Class
 * @package  Karrio
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CustomsData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomsData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'commodities' => '\Karrio\Model\CommodityData[]',
        'duty' => '\Karrio\Model\Duty',
        'content_type' => 'string',
        'content_description' => 'string',
        'incoterm' => 'string',
        'invoice' => 'string',
        'invoice_date' => 'string',
        'commercial_invoice' => 'bool',
        'certify' => 'bool',
        'signer' => 'string',
        'options' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'commodities' => null,
        'duty' => null,
        'content_type' => null,
        'content_description' => null,
        'incoterm' => null,
        'invoice' => null,
        'invoice_date' => null,
        'commercial_invoice' => null,
        'certify' => null,
        'signer' => null,
        'options' => null
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
        'commodities' => 'commodities',
        'duty' => 'duty',
        'content_type' => 'content_type',
        'content_description' => 'content_description',
        'incoterm' => 'incoterm',
        'invoice' => 'invoice',
        'invoice_date' => 'invoice_date',
        'commercial_invoice' => 'commercial_invoice',
        'certify' => 'certify',
        'signer' => 'signer',
        'options' => 'options'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'commodities' => 'setCommodities',
        'duty' => 'setDuty',
        'content_type' => 'setContentType',
        'content_description' => 'setContentDescription',
        'incoterm' => 'setIncoterm',
        'invoice' => 'setInvoice',
        'invoice_date' => 'setInvoiceDate',
        'commercial_invoice' => 'setCommercialInvoice',
        'certify' => 'setCertify',
        'signer' => 'setSigner',
        'options' => 'setOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'commodities' => 'getCommodities',
        'duty' => 'getDuty',
        'content_type' => 'getContentType',
        'content_description' => 'getContentDescription',
        'incoterm' => 'getIncoterm',
        'invoice' => 'getInvoice',
        'invoice_date' => 'getInvoiceDate',
        'commercial_invoice' => 'getCommercialInvoice',
        'certify' => 'getCertify',
        'signer' => 'getSigner',
        'options' => 'getOptions'
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

    const CONTENT_TYPE_DOCUMENTS = 'documents';
    const CONTENT_TYPE_GIFT = 'gift';
    const CONTENT_TYPE_SAMPLE = 'sample';
    const CONTENT_TYPE_MERCHANDISE = 'merchandise';
    const CONTENT_TYPE_RETURN_MERCHANDISE = 'return_merchandise';
    const CONTENT_TYPE_OTHER = 'other';
    const INCOTERM_CFR = 'CFR';
    const INCOTERM_CIF = 'CIF';
    const INCOTERM_CIP = 'CIP';
    const INCOTERM_CPT = 'CPT';
    const INCOTERM_DAF = 'DAF';
    const INCOTERM_DDP = 'DDP';
    const INCOTERM_DDU = 'DDU';
    const INCOTERM_DEQ = 'DEQ';
    const INCOTERM_DES = 'DES';
    const INCOTERM_EXW = 'EXW';
    const INCOTERM_FAS = 'FAS';
    const INCOTERM_FCA = 'FCA';
    const INCOTERM_FOB = 'FOB';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContentTypeAllowableValues()
    {
        return [
            self::CONTENT_TYPE_DOCUMENTS,
            self::CONTENT_TYPE_GIFT,
            self::CONTENT_TYPE_SAMPLE,
            self::CONTENT_TYPE_MERCHANDISE,
            self::CONTENT_TYPE_RETURN_MERCHANDISE,
            self::CONTENT_TYPE_OTHER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIncotermAllowableValues()
    {
        return [
            self::INCOTERM_CFR,
            self::INCOTERM_CIF,
            self::INCOTERM_CIP,
            self::INCOTERM_CPT,
            self::INCOTERM_DAF,
            self::INCOTERM_DDP,
            self::INCOTERM_DDU,
            self::INCOTERM_DEQ,
            self::INCOTERM_DES,
            self::INCOTERM_EXW,
            self::INCOTERM_FAS,
            self::INCOTERM_FCA,
            self::INCOTERM_FOB,
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
        $this->container['commodities'] = $data['commodities'] ?? null;
        $this->container['duty'] = $data['duty'] ?? null;
        $this->container['content_type'] = $data['content_type'] ?? null;
        $this->container['content_description'] = $data['content_description'] ?? null;
        $this->container['incoterm'] = $data['incoterm'] ?? null;
        $this->container['invoice'] = $data['invoice'] ?? null;
        $this->container['invoice_date'] = $data['invoice_date'] ?? null;
        $this->container['commercial_invoice'] = $data['commercial_invoice'] ?? null;
        $this->container['certify'] = $data['certify'] ?? null;
        $this->container['signer'] = $data['signer'] ?? null;
        $this->container['options'] = $data['options'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['commodities'] === null) {
            $invalidProperties[] = "'commodities' can't be null";
        }
        $allowedValues = $this->getContentTypeAllowableValues();
        if (!is_null($this->container['content_type']) && !in_array($this->container['content_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'content_type', must be one of '%s'",
                $this->container['content_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getIncotermAllowableValues();
        if (!is_null($this->container['incoterm']) && !in_array($this->container['incoterm'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'incoterm', must be one of '%s'",
                $this->container['incoterm'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['invoice']) && (mb_strlen($this->container['invoice']) > 50)) {
            $invalidProperties[] = "invalid value for 'invoice', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['signer']) && (mb_strlen($this->container['signer']) > 50)) {
            $invalidProperties[] = "invalid value for 'signer', the character length must be smaller than or equal to 50.";
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
     * Gets commodities
     *
     * @return \Karrio\Model\CommodityData[]
     */
    public function getCommodities()
    {
        return $this->container['commodities'];
    }

    /**
     * Sets commodities
     *
     * @param \Karrio\Model\CommodityData[] $commodities The parcel content items
     *
     * @return self
     */
    public function setCommodities($commodities)
    {
        $this->container['commodities'] = $commodities;

        return $this;
    }

    /**
     * Gets duty
     *
     * @return \Karrio\Model\Duty|null
     */
    public function getDuty()
    {
        return $this->container['duty'];
    }

    /**
     * Sets duty
     *
     * @param \Karrio\Model\Duty|null $duty duty
     *
     * @return self
     */
    public function setDuty($duty)
    {
        $this->container['duty'] = $duty;

        return $this;
    }

    /**
     * Gets content_type
     *
     * @return string|null
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     *
     * @param string|null $content_type content_type
     *
     * @return self
     */
    public function setContentType($content_type)
    {
        $allowedValues = $this->getContentTypeAllowableValues();
        if (!is_null($content_type) && !in_array($content_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'content_type', must be one of '%s'",
                    $content_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets content_description
     *
     * @return string|null
     */
    public function getContentDescription()
    {
        return $this->container['content_description'];
    }

    /**
     * Sets content_description
     *
     * @param string|null $content_description content_description
     *
     * @return self
     */
    public function setContentDescription($content_description)
    {
        $this->container['content_description'] = $content_description;

        return $this;
    }

    /**
     * Gets incoterm
     *
     * @return string|null
     */
    public function getIncoterm()
    {
        return $this->container['incoterm'];
    }

    /**
     * Sets incoterm
     *
     * @param string|null $incoterm The customs 'term of trade' also known as 'incoterm'
     *
     * @return self
     */
    public function setIncoterm($incoterm)
    {
        $allowedValues = $this->getIncotermAllowableValues();
        if (!is_null($incoterm) && !in_array($incoterm, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'incoterm', must be one of '%s'",
                    $incoterm,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['incoterm'] = $incoterm;

        return $this;
    }

    /**
     * Gets invoice
     *
     * @return string|null
     */
    public function getInvoice()
    {
        return $this->container['invoice'];
    }

    /**
     * Sets invoice
     *
     * @param string|null $invoice The invoice reference number
     *
     * @return self
     */
    public function setInvoice($invoice)
    {
        if (!is_null($invoice) && (mb_strlen($invoice) > 50)) {
            throw new \InvalidArgumentException('invalid length for $invoice when calling CustomsData., must be smaller than or equal to 50.');
        }

        $this->container['invoice'] = $invoice;

        return $this;
    }

    /**
     * Gets invoice_date
     *
     * @return string|null
     */
    public function getInvoiceDate()
    {
        return $this->container['invoice_date'];
    }

    /**
     * Sets invoice_date
     *
     * @param string|null $invoice_date The invoice date
     *
     * @return self
     */
    public function setInvoiceDate($invoice_date)
    {
        $this->container['invoice_date'] = $invoice_date;

        return $this;
    }

    /**
     * Gets commercial_invoice
     *
     * @return bool|null
     */
    public function getCommercialInvoice()
    {
        return $this->container['commercial_invoice'];
    }

    /**
     * Sets commercial_invoice
     *
     * @param bool|null $commercial_invoice Indicates if the shipment is commercial
     *
     * @return self
     */
    public function setCommercialInvoice($commercial_invoice)
    {
        $this->container['commercial_invoice'] = $commercial_invoice;

        return $this;
    }

    /**
     * Gets certify
     *
     * @return bool|null
     */
    public function getCertify()
    {
        return $this->container['certify'];
    }

    /**
     * Sets certify
     *
     * @param bool|null $certify Indicate that signer certified confirmed all
     *
     * @return self
     */
    public function setCertify($certify)
    {
        $this->container['certify'] = $certify;

        return $this;
    }

    /**
     * Gets signer
     *
     * @return string|null
     */
    public function getSigner()
    {
        return $this->container['signer'];
    }

    /**
     * Sets signer
     *
     * @param string|null $signer signer
     *
     * @return self
     */
    public function setSigner($signer)
    {
        if (!is_null($signer) && (mb_strlen($signer) > 50)) {
            throw new \InvalidArgumentException('invalid length for $signer when calling CustomsData., must be smaller than or equal to 50.');
        }

        $this->container['signer'] = $signer;

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
     * @param object|null $options <details> <summary>Customs identification options.</summary>  ``` {     \"aes\": \"5218487281\",     \"eel_pfc\": \"5218487281\",     \"license_number\": \"5218487281\",     \"certificate_number\": \"5218487281\",     \"nip_number\": \"5218487281\",     \"eori_number\": \"5218487281\",     \"vat_registration_number\": \"5218487281\", } ```  Please check the docs for carrier specific options. </details>
     *
     * @return self
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



<?php
/**
 * CustomsData
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
 * OpenAPI spec version: v1-2021.0
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
 * CustomsData Class Doc Comment
 *
 * @category Class
 * @package  Purplship
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomsData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomsData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'aes' => 'string',
'eel_pfc' => 'string',
'content_type' => 'string',
'content_description' => 'string',
'incoterm' => 'string',
'commodities' => '\Purplship\Model\Commodity[]',
'duty' => '\Purplship\Model\Payment',
'invoice' => 'string',
'commercial_invoice' => 'bool',
'certify' => 'bool',
'signer' => 'string',
'certificate_number' => 'string',
'options' => 'object'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'aes' => null,
'eel_pfc' => null,
'content_type' => null,
'content_description' => null,
'incoterm' => null,
'commodities' => null,
'duty' => null,
'invoice' => null,
'commercial_invoice' => null,
'certify' => null,
'signer' => null,
'certificate_number' => null,
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
        'aes' => 'aes',
'eel_pfc' => 'eel_pfc',
'content_type' => 'content_type',
'content_description' => 'content_description',
'incoterm' => 'incoterm',
'commodities' => 'commodities',
'duty' => 'duty',
'invoice' => 'invoice',
'commercial_invoice' => 'commercial_invoice',
'certify' => 'certify',
'signer' => 'signer',
'certificate_number' => 'certificate_number',
'options' => 'options'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aes' => 'setAes',
'eel_pfc' => 'setEelPfc',
'content_type' => 'setContentType',
'content_description' => 'setContentDescription',
'incoterm' => 'setIncoterm',
'commodities' => 'setCommodities',
'duty' => 'setDuty',
'invoice' => 'setInvoice',
'commercial_invoice' => 'setCommercialInvoice',
'certify' => 'setCertify',
'signer' => 'setSigner',
'certificate_number' => 'setCertificateNumber',
'options' => 'setOptions'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aes' => 'getAes',
'eel_pfc' => 'getEelPfc',
'content_type' => 'getContentType',
'content_description' => 'getContentDescription',
'incoterm' => 'getIncoterm',
'commodities' => 'getCommodities',
'duty' => 'getDuty',
'invoice' => 'getInvoice',
'commercial_invoice' => 'getCommercialInvoice',
'certify' => 'getCertify',
'signer' => 'getSigner',
'certificate_number' => 'getCertificateNumber',
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
self::CONTENT_TYPE_OTHER,        ];
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
self::INCOTERM_FOB,        ];
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
        $this->container['aes'] = isset($data['aes']) ? $data['aes'] : null;
        $this->container['eel_pfc'] = isset($data['eel_pfc']) ? $data['eel_pfc'] : null;
        $this->container['content_type'] = isset($data['content_type']) ? $data['content_type'] : null;
        $this->container['content_description'] = isset($data['content_description']) ? $data['content_description'] : null;
        $this->container['incoterm'] = isset($data['incoterm']) ? $data['incoterm'] : null;
        $this->container['commodities'] = isset($data['commodities']) ? $data['commodities'] : null;
        $this->container['duty'] = isset($data['duty']) ? $data['duty'] : null;
        $this->container['invoice'] = isset($data['invoice']) ? $data['invoice'] : null;
        $this->container['commercial_invoice'] = isset($data['commercial_invoice']) ? $data['commercial_invoice'] : null;
        $this->container['certify'] = isset($data['certify']) ? $data['certify'] : null;
        $this->container['signer'] = isset($data['signer']) ? $data['signer'] : null;
        $this->container['certificate_number'] = isset($data['certificate_number']) ? $data['certificate_number'] : null;
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

        $allowedValues = $this->getContentTypeAllowableValues();
        if (!is_null($this->container['content_type']) && !in_array($this->container['content_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'content_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getIncotermAllowableValues();
        if (!is_null($this->container['incoterm']) && !in_array($this->container['incoterm'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'incoterm', must be one of '%s'",
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
     * Gets aes
     *
     * @return string
     */
    public function getAes()
    {
        return $this->container['aes'];
    }

    /**
     * Sets aes
     *
     * @param string $aes aes
     *
     * @return $this
     */
    public function setAes($aes)
    {
        $this->container['aes'] = $aes;

        return $this;
    }

    /**
     * Gets eel_pfc
     *
     * @return string
     */
    public function getEelPfc()
    {
        return $this->container['eel_pfc'];
    }

    /**
     * Sets eel_pfc
     *
     * @param string $eel_pfc eel_pfc
     *
     * @return $this
     */
    public function setEelPfc($eel_pfc)
    {
        $this->container['eel_pfc'] = $eel_pfc;

        return $this;
    }

    /**
     * Gets content_type
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     *
     * @param string $content_type content_type
     *
     * @return $this
     */
    public function setContentType($content_type)
    {
        $allowedValues = $this->getContentTypeAllowableValues();
        if (!is_null($content_type) && !in_array($content_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'content_type', must be one of '%s'",
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
     * @return string
     */
    public function getContentDescription()
    {
        return $this->container['content_description'];
    }

    /**
     * Sets content_description
     *
     * @param string $content_description content_description
     *
     * @return $this
     */
    public function setContentDescription($content_description)
    {
        $this->container['content_description'] = $content_description;

        return $this;
    }

    /**
     * Gets incoterm
     *
     * @return string
     */
    public function getIncoterm()
    {
        return $this->container['incoterm'];
    }

    /**
     * Sets incoterm
     *
     * @param string $incoterm The customs 'term of trade' also known as 'incoterm'
     *
     * @return $this
     */
    public function setIncoterm($incoterm)
    {
        $allowedValues = $this->getIncotermAllowableValues();
        if (!is_null($incoterm) && !in_array($incoterm, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'incoterm', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['incoterm'] = $incoterm;

        return $this;
    }

    /**
     * Gets commodities
     *
     * @return \Purplship\Model\Commodity[]
     */
    public function getCommodities()
    {
        return $this->container['commodities'];
    }

    /**
     * Sets commodities
     *
     * @param \Purplship\Model\Commodity[] $commodities The parcel content items
     *
     * @return $this
     */
    public function setCommodities($commodities)
    {
        $this->container['commodities'] = $commodities;

        return $this;
    }

    /**
     * Gets duty
     *
     * @return \Purplship\Model\Payment
     */
    public function getDuty()
    {
        return $this->container['duty'];
    }

    /**
     * Sets duty
     *
     * @param \Purplship\Model\Payment $duty duty
     *
     * @return $this
     */
    public function setDuty($duty)
    {
        $this->container['duty'] = $duty;

        return $this;
    }

    /**
     * Gets invoice
     *
     * @return string
     */
    public function getInvoice()
    {
        return $this->container['invoice'];
    }

    /**
     * Sets invoice
     *
     * @param string $invoice The invoice reference number
     *
     * @return $this
     */
    public function setInvoice($invoice)
    {
        $this->container['invoice'] = $invoice;

        return $this;
    }

    /**
     * Gets commercial_invoice
     *
     * @return bool
     */
    public function getCommercialInvoice()
    {
        return $this->container['commercial_invoice'];
    }

    /**
     * Sets commercial_invoice
     *
     * @param bool $commercial_invoice Indicates if the shipment is commercial
     *
     * @return $this
     */
    public function setCommercialInvoice($commercial_invoice)
    {
        $this->container['commercial_invoice'] = $commercial_invoice;

        return $this;
    }

    /**
     * Gets certify
     *
     * @return bool
     */
    public function getCertify()
    {
        return $this->container['certify'];
    }

    /**
     * Sets certify
     *
     * @param bool $certify Indicate that signer certified confirmed all
     *
     * @return $this
     */
    public function setCertify($certify)
    {
        $this->container['certify'] = $certify;

        return $this;
    }

    /**
     * Gets signer
     *
     * @return string
     */
    public function getSigner()
    {
        return $this->container['signer'];
    }

    /**
     * Sets signer
     *
     * @param string $signer signer
     *
     * @return $this
     */
    public function setSigner($signer)
    {
        $this->container['signer'] = $signer;

        return $this;
    }

    /**
     * Gets certificate_number
     *
     * @return string
     */
    public function getCertificateNumber()
    {
        return $this->container['certificate_number'];
    }

    /**
     * Sets certificate_number
     *
     * @param string $certificate_number certificate_number
     *
     * @return $this
     */
    public function setCertificateNumber($certificate_number)
    {
        $this->container['certificate_number'] = $certificate_number;

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
     * @param object $options options
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

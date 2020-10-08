<?php
/**
 * Payment
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
 * OpenAPI spec version: v1-2020.9.0
 * Contact: hello@purplship.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.22
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
 * Payment Class Doc Comment
 *
 * @category Class
 * @description The payment details.&lt;br/&gt; Note that this is required for a Dutiable parcel shipped internationally.
 * @package  Purplship
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Payment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Payment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'paid_by' => 'string',
'amount' => 'float',
'currency' => 'string',
'account_number' => 'string',
'credit_card' => '\Purplship\Model\Card',
'contact' => '\Purplship\Model\Address'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'paid_by' => null,
'amount' => null,
'currency' => null,
'account_number' => null,
'credit_card' => null,
'contact' => null    ];

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
'paid_by' => 'paidBy',
'amount' => 'amount',
'currency' => 'currency',
'account_number' => 'accountNumber',
'credit_card' => 'creditCard',
'contact' => 'contact'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'paid_by' => 'setPaidBy',
'amount' => 'setAmount',
'currency' => 'setCurrency',
'account_number' => 'setAccountNumber',
'credit_card' => 'setCreditCard',
'contact' => 'setContact'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'paid_by' => 'getPaidBy',
'amount' => 'getAmount',
'currency' => 'getCurrency',
'account_number' => 'getAccountNumber',
'credit_card' => 'getCreditCard',
'contact' => 'getContact'    ];

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

    const PAID_BY_SENDER = 'sender';
const PAID_BY_RECIPIENT = 'recipient';
const PAID_BY_THIRD_PARTY = 'third_party';
const PAID_BY_CREDIT_CARD = 'credit_card';
const CURRENCY_EUR = 'EUR';
const CURRENCY_AED = 'AED';
const CURRENCY_USD = 'USD';
const CURRENCY_XCD = 'XCD';
const CURRENCY_AMD = 'AMD';
const CURRENCY_ANG = 'ANG';
const CURRENCY_AOA = 'AOA';
const CURRENCY_ARS = 'ARS';
const CURRENCY_AUD = 'AUD';
const CURRENCY_AWG = 'AWG';
const CURRENCY_AZN = 'AZN';
const CURRENCY_BAM = 'BAM';
const CURRENCY_BBD = 'BBD';
const CURRENCY_BDT = 'BDT';
const CURRENCY_XOF = 'XOF';
const CURRENCY_BGN = 'BGN';
const CURRENCY_BHD = 'BHD';
const CURRENCY_BIF = 'BIF';
const CURRENCY_BMD = 'BMD';
const CURRENCY_BND = 'BND';
const CURRENCY_BOB = 'BOB';
const CURRENCY_BRL = 'BRL';
const CURRENCY_BSD = 'BSD';
const CURRENCY_BTN = 'BTN';
const CURRENCY_BWP = 'BWP';
const CURRENCY_BYN = 'BYN';
const CURRENCY_BZD = 'BZD';
const CURRENCY_CAD = 'CAD';
const CURRENCY_CDF = 'CDF';
const CURRENCY_XAF = 'XAF';
const CURRENCY_CHF = 'CHF';
const CURRENCY_NZD = 'NZD';
const CURRENCY_CLP = 'CLP';
const CURRENCY_CNY = 'CNY';
const CURRENCY_COP = 'COP';
const CURRENCY_CRC = 'CRC';
const CURRENCY_CUC = 'CUC';
const CURRENCY_CVE = 'CVE';
const CURRENCY_CZK = 'CZK';
const CURRENCY_DJF = 'DJF';
const CURRENCY_DKK = 'DKK';
const CURRENCY_DOP = 'DOP';
const CURRENCY_DZD = 'DZD';
const CURRENCY_EGP = 'EGP';
const CURRENCY_ERN = 'ERN';
const CURRENCY_ETB = 'ETB';
const CURRENCY_FJD = 'FJD';
const CURRENCY_GBP = 'GBP';
const CURRENCY_GEL = 'GEL';
const CURRENCY_GHS = 'GHS';
const CURRENCY_GMD = 'GMD';
const CURRENCY_GNF = 'GNF';
const CURRENCY_GTQ = 'GTQ';
const CURRENCY_GYD = 'GYD';
const CURRENCY_HKD = 'HKD';
const CURRENCY_HNL = 'HNL';
const CURRENCY_HRK = 'HRK';
const CURRENCY_HTG = 'HTG';
const CURRENCY_HUF = 'HUF';
const CURRENCY_IDR = 'IDR';
const CURRENCY_ILS = 'ILS';
const CURRENCY_INR = 'INR';
const CURRENCY_IRR = 'IRR';
const CURRENCY_ISK = 'ISK';
const CURRENCY_JMD = 'JMD';
const CURRENCY_JOD = 'JOD';
const CURRENCY_JPY = 'JPY';
const CURRENCY_KES = 'KES';
const CURRENCY_KGS = 'KGS';
const CURRENCY_KHR = 'KHR';
const CURRENCY_KMF = 'KMF';
const CURRENCY_KPW = 'KPW';
const CURRENCY_KRW = 'KRW';
const CURRENCY_KWD = 'KWD';
const CURRENCY_KYD = 'KYD';
const CURRENCY_KZT = 'KZT';
const CURRENCY_LAK = 'LAK';
const CURRENCY_LKR = 'LKR';
const CURRENCY_LRD = 'LRD';
const CURRENCY_LSL = 'LSL';
const CURRENCY_LYD = 'LYD';
const CURRENCY_MAD = 'MAD';
const CURRENCY_MDL = 'MDL';
const CURRENCY_MGA = 'MGA';
const CURRENCY_MKD = 'MKD';
const CURRENCY_MMK = 'MMK';
const CURRENCY_MNT = 'MNT';
const CURRENCY_MOP = 'MOP';
const CURRENCY_MRO = 'MRO';
const CURRENCY_MUR = 'MUR';
const CURRENCY_MVR = 'MVR';
const CURRENCY_MWK = 'MWK';
const CURRENCY_MXN = 'MXN';
const CURRENCY_MYR = 'MYR';
const CURRENCY_MZN = 'MZN';
const CURRENCY_NAD = 'NAD';
const CURRENCY_XPF = 'XPF';
const CURRENCY_NGN = 'NGN';
const CURRENCY_NIO = 'NIO';
const CURRENCY_NOK = 'NOK';
const CURRENCY_NPR = 'NPR';
const CURRENCY_OMR = 'OMR';
const CURRENCY_PEN = 'PEN';
const CURRENCY_PGK = 'PGK';
const CURRENCY_PHP = 'PHP';
const CURRENCY_PKR = 'PKR';
const CURRENCY_PLN = 'PLN';
const CURRENCY_PYG = 'PYG';
const CURRENCY_QAR = 'QAR';
const CURRENCY_RSD = 'RSD';
const CURRENCY_RUB = 'RUB';
const CURRENCY_RWF = 'RWF';
const CURRENCY_SAR = 'SAR';
const CURRENCY_SBD = 'SBD';
const CURRENCY_SCR = 'SCR';
const CURRENCY_SDG = 'SDG';
const CURRENCY_SEK = 'SEK';
const CURRENCY_SGD = 'SGD';
const CURRENCY_SHP = 'SHP';
const CURRENCY_SLL = 'SLL';
const CURRENCY_SOS = 'SOS';
const CURRENCY_SRD = 'SRD';
const CURRENCY_SSP = 'SSP';
const CURRENCY_STD = 'STD';
const CURRENCY_SYP = 'SYP';
const CURRENCY_SZL = 'SZL';
const CURRENCY_THB = 'THB';
const CURRENCY_TJS = 'TJS';
const CURRENCY_TND = 'TND';
const CURRENCY_TOP = 'TOP';
const CURRENCY__TRY = 'TRY';
const CURRENCY_TTD = 'TTD';
const CURRENCY_TWD = 'TWD';
const CURRENCY_TZS = 'TZS';
const CURRENCY_UAH = 'UAH';
const CURRENCY_UYU = 'UYU';
const CURRENCY_UZS = 'UZS';
const CURRENCY_VEF = 'VEF';
const CURRENCY_VND = 'VND';
const CURRENCY_VUV = 'VUV';
const CURRENCY_WST = 'WST';
const CURRENCY_YER = 'YER';
const CURRENCY_ZAR = 'ZAR';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaidByAllowableValues()
    {
        return [
            self::PAID_BY_SENDER,
self::PAID_BY_RECIPIENT,
self::PAID_BY_THIRD_PARTY,
self::PAID_BY_CREDIT_CARD,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCurrencyAllowableValues()
    {
        return [
            self::CURRENCY_EUR,
self::CURRENCY_AED,
self::CURRENCY_USD,
self::CURRENCY_XCD,
self::CURRENCY_AMD,
self::CURRENCY_ANG,
self::CURRENCY_AOA,
self::CURRENCY_ARS,
self::CURRENCY_AUD,
self::CURRENCY_AWG,
self::CURRENCY_AZN,
self::CURRENCY_BAM,
self::CURRENCY_BBD,
self::CURRENCY_BDT,
self::CURRENCY_XOF,
self::CURRENCY_BGN,
self::CURRENCY_BHD,
self::CURRENCY_BIF,
self::CURRENCY_BMD,
self::CURRENCY_BND,
self::CURRENCY_BOB,
self::CURRENCY_BRL,
self::CURRENCY_BSD,
self::CURRENCY_BTN,
self::CURRENCY_BWP,
self::CURRENCY_BYN,
self::CURRENCY_BZD,
self::CURRENCY_CAD,
self::CURRENCY_CDF,
self::CURRENCY_XAF,
self::CURRENCY_CHF,
self::CURRENCY_NZD,
self::CURRENCY_CLP,
self::CURRENCY_CNY,
self::CURRENCY_COP,
self::CURRENCY_CRC,
self::CURRENCY_CUC,
self::CURRENCY_CVE,
self::CURRENCY_CZK,
self::CURRENCY_DJF,
self::CURRENCY_DKK,
self::CURRENCY_DOP,
self::CURRENCY_DZD,
self::CURRENCY_EGP,
self::CURRENCY_ERN,
self::CURRENCY_ETB,
self::CURRENCY_FJD,
self::CURRENCY_GBP,
self::CURRENCY_GEL,
self::CURRENCY_GHS,
self::CURRENCY_GMD,
self::CURRENCY_GNF,
self::CURRENCY_GTQ,
self::CURRENCY_GYD,
self::CURRENCY_HKD,
self::CURRENCY_HNL,
self::CURRENCY_HRK,
self::CURRENCY_HTG,
self::CURRENCY_HUF,
self::CURRENCY_IDR,
self::CURRENCY_ILS,
self::CURRENCY_INR,
self::CURRENCY_IRR,
self::CURRENCY_ISK,
self::CURRENCY_JMD,
self::CURRENCY_JOD,
self::CURRENCY_JPY,
self::CURRENCY_KES,
self::CURRENCY_KGS,
self::CURRENCY_KHR,
self::CURRENCY_KMF,
self::CURRENCY_KPW,
self::CURRENCY_KRW,
self::CURRENCY_KWD,
self::CURRENCY_KYD,
self::CURRENCY_KZT,
self::CURRENCY_LAK,
self::CURRENCY_LKR,
self::CURRENCY_LRD,
self::CURRENCY_LSL,
self::CURRENCY_LYD,
self::CURRENCY_MAD,
self::CURRENCY_MDL,
self::CURRENCY_MGA,
self::CURRENCY_MKD,
self::CURRENCY_MMK,
self::CURRENCY_MNT,
self::CURRENCY_MOP,
self::CURRENCY_MRO,
self::CURRENCY_MUR,
self::CURRENCY_MVR,
self::CURRENCY_MWK,
self::CURRENCY_MXN,
self::CURRENCY_MYR,
self::CURRENCY_MZN,
self::CURRENCY_NAD,
self::CURRENCY_XPF,
self::CURRENCY_NGN,
self::CURRENCY_NIO,
self::CURRENCY_NOK,
self::CURRENCY_NPR,
self::CURRENCY_OMR,
self::CURRENCY_PEN,
self::CURRENCY_PGK,
self::CURRENCY_PHP,
self::CURRENCY_PKR,
self::CURRENCY_PLN,
self::CURRENCY_PYG,
self::CURRENCY_QAR,
self::CURRENCY_RSD,
self::CURRENCY_RUB,
self::CURRENCY_RWF,
self::CURRENCY_SAR,
self::CURRENCY_SBD,
self::CURRENCY_SCR,
self::CURRENCY_SDG,
self::CURRENCY_SEK,
self::CURRENCY_SGD,
self::CURRENCY_SHP,
self::CURRENCY_SLL,
self::CURRENCY_SOS,
self::CURRENCY_SRD,
self::CURRENCY_SSP,
self::CURRENCY_STD,
self::CURRENCY_SYP,
self::CURRENCY_SZL,
self::CURRENCY_THB,
self::CURRENCY_TJS,
self::CURRENCY_TND,
self::CURRENCY_TOP,
self::CURRENCY__TRY,
self::CURRENCY_TTD,
self::CURRENCY_TWD,
self::CURRENCY_TZS,
self::CURRENCY_UAH,
self::CURRENCY_UYU,
self::CURRENCY_UZS,
self::CURRENCY_VEF,
self::CURRENCY_VND,
self::CURRENCY_VUV,
self::CURRENCY_WST,
self::CURRENCY_YER,
self::CURRENCY_ZAR,        ];
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
        $this->container['paid_by'] = isset($data['paid_by']) ? $data['paid_by'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['credit_card'] = isset($data['credit_card']) ? $data['credit_card'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['paid_by'] === null) {
            $invalidProperties[] = "'paid_by' can't be null";
        }
        $allowedValues = $this->getPaidByAllowableValues();
        if (!is_null($this->container['paid_by']) && !in_array($this->container['paid_by'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'paid_by', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        $allowedValues = $this->getCurrencyAllowableValues();
        if (!is_null($this->container['currency']) && !in_array($this->container['currency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'currency', must be one of '%s'",
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
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets paid_by
     *
     * @return string
     */
    public function getPaidBy()
    {
        return $this->container['paid_by'];
    }

    /**
     * Sets paid_by
     *
     * @param string $paid_by The payment payer
     *
     * @return $this
     */
    public function setPaidBy($paid_by)
    {
        $allowedValues = $this->getPaidByAllowableValues();
        if (!in_array($paid_by, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'paid_by', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['paid_by'] = $paid_by;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount The payment amount if known
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency The payment amount currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $allowedValues = $this->getCurrencyAllowableValues();
        if (!in_array($currency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'currency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string $account_number The selected rate carrier payer account number
     *
     * @return $this
     */
    public function setAccountNumber($account_number)
    {
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets credit_card
     *
     * @return \Purplship\Model\Card
     */
    public function getCreditCard()
    {
        return $this->container['credit_card'];
    }

    /**
     * Sets credit_card
     *
     * @param \Purplship\Model\Card $credit_card credit_card
     *
     * @return $this
     */
    public function setCreditCard($credit_card)
    {
        $this->container['credit_card'] = $credit_card;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return \Purplship\Model\Address
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \Purplship\Model\Address $contact contact
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

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

<?php
/**
 * AddressData
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
 * AddressData Class Doc Comment
 *
 * @category Class
 * @package  Purplship\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddressData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AddressData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'postal_code' => 'string',
        'city' => 'string',
        'federal_tax_id' => 'string',
        'state_tax_id' => 'string',
        'person_name' => 'string',
        'company_name' => 'string',
        'country_code' => 'string',
        'email' => 'string',
        'phone_number' => 'string',
        'state_code' => 'string',
        'suburb' => 'string',
        'residential' => 'bool',
        'address_line1' => 'string',
        'address_line2' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'postal_code' => null,
        'city' => null,
        'federal_tax_id' => null,
        'state_tax_id' => null,
        'person_name' => null,
        'company_name' => null,
        'country_code' => null,
        'email' => null,
        'phone_number' => null,
        'state_code' => null,
        'suburb' => null,
        'residential' => null,
        'address_line1' => null,
        'address_line2' => null
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
        'postal_code' => 'postalCode',
        'city' => 'city',
        'federal_tax_id' => 'federalTaxId',
        'state_tax_id' => 'stateTaxId',
        'person_name' => 'personName',
        'company_name' => 'companyName',
        'country_code' => 'countryCode',
        'email' => 'email',
        'phone_number' => 'phoneNumber',
        'state_code' => 'stateCode',
        'suburb' => 'suburb',
        'residential' => 'residential',
        'address_line1' => 'addressLine1',
        'address_line2' => 'addressLine2'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'postal_code' => 'setPostalCode',
        'city' => 'setCity',
        'federal_tax_id' => 'setFederalTaxId',
        'state_tax_id' => 'setStateTaxId',
        'person_name' => 'setPersonName',
        'company_name' => 'setCompanyName',
        'country_code' => 'setCountryCode',
        'email' => 'setEmail',
        'phone_number' => 'setPhoneNumber',
        'state_code' => 'setStateCode',
        'suburb' => 'setSuburb',
        'residential' => 'setResidential',
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'postal_code' => 'getPostalCode',
        'city' => 'getCity',
        'federal_tax_id' => 'getFederalTaxId',
        'state_tax_id' => 'getStateTaxId',
        'person_name' => 'getPersonName',
        'company_name' => 'getCompanyName',
        'country_code' => 'getCountryCode',
        'email' => 'getEmail',
        'phone_number' => 'getPhoneNumber',
        'state_code' => 'getStateCode',
        'suburb' => 'getSuburb',
        'residential' => 'getResidential',
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2'
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

    const COUNTRY_CODE_AD = 'AD';
    const COUNTRY_CODE_AE = 'AE';
    const COUNTRY_CODE_AF = 'AF';
    const COUNTRY_CODE_AG = 'AG';
    const COUNTRY_CODE_AI = 'AI';
    const COUNTRY_CODE_AL = 'AL';
    const COUNTRY_CODE_AM = 'AM';
    const COUNTRY_CODE_AN = 'AN';
    const COUNTRY_CODE_AO = 'AO';
    const COUNTRY_CODE_AR = 'AR';
    const COUNTRY_CODE__AS = 'AS';
    const COUNTRY_CODE_AT = 'AT';
    const COUNTRY_CODE_AU = 'AU';
    const COUNTRY_CODE_AW = 'AW';
    const COUNTRY_CODE_AZ = 'AZ';
    const COUNTRY_CODE_BA = 'BA';
    const COUNTRY_CODE_BB = 'BB';
    const COUNTRY_CODE_BD = 'BD';
    const COUNTRY_CODE_BE = 'BE';
    const COUNTRY_CODE_BF = 'BF';
    const COUNTRY_CODE_BG = 'BG';
    const COUNTRY_CODE_BH = 'BH';
    const COUNTRY_CODE_BI = 'BI';
    const COUNTRY_CODE_BJ = 'BJ';
    const COUNTRY_CODE_BM = 'BM';
    const COUNTRY_CODE_BN = 'BN';
    const COUNTRY_CODE_BO = 'BO';
    const COUNTRY_CODE_BR = 'BR';
    const COUNTRY_CODE_BS = 'BS';
    const COUNTRY_CODE_BT = 'BT';
    const COUNTRY_CODE_BW = 'BW';
    const COUNTRY_CODE_BY = 'BY';
    const COUNTRY_CODE_BZ = 'BZ';
    const COUNTRY_CODE_CA = 'CA';
    const COUNTRY_CODE_CD = 'CD';
    const COUNTRY_CODE_CF = 'CF';
    const COUNTRY_CODE_CG = 'CG';
    const COUNTRY_CODE_CH = 'CH';
    const COUNTRY_CODE_CI = 'CI';
    const COUNTRY_CODE_CK = 'CK';
    const COUNTRY_CODE_CL = 'CL';
    const COUNTRY_CODE_CM = 'CM';
    const COUNTRY_CODE_CN = 'CN';
    const COUNTRY_CODE_CO = 'CO';
    const COUNTRY_CODE_CR = 'CR';
    const COUNTRY_CODE_CU = 'CU';
    const COUNTRY_CODE_CV = 'CV';
    const COUNTRY_CODE_CY = 'CY';
    const COUNTRY_CODE_CZ = 'CZ';
    const COUNTRY_CODE_DE = 'DE';
    const COUNTRY_CODE_DJ = 'DJ';
    const COUNTRY_CODE_DK = 'DK';
    const COUNTRY_CODE_DM = 'DM';
    const COUNTRY_CODE__DO = 'DO';
    const COUNTRY_CODE_DZ = 'DZ';
    const COUNTRY_CODE_EC = 'EC';
    const COUNTRY_CODE_EE = 'EE';
    const COUNTRY_CODE_EG = 'EG';
    const COUNTRY_CODE_ER = 'ER';
    const COUNTRY_CODE_ES = 'ES';
    const COUNTRY_CODE_ET = 'ET';
    const COUNTRY_CODE_FI = 'FI';
    const COUNTRY_CODE_FJ = 'FJ';
    const COUNTRY_CODE_FK = 'FK';
    const COUNTRY_CODE_FM = 'FM';
    const COUNTRY_CODE_FO = 'FO';
    const COUNTRY_CODE_FR = 'FR';
    const COUNTRY_CODE_GA = 'GA';
    const COUNTRY_CODE_GB = 'GB';
    const COUNTRY_CODE_GD = 'GD';
    const COUNTRY_CODE_GE = 'GE';
    const COUNTRY_CODE_GF = 'GF';
    const COUNTRY_CODE_GG = 'GG';
    const COUNTRY_CODE_GH = 'GH';
    const COUNTRY_CODE_GI = 'GI';
    const COUNTRY_CODE_GL = 'GL';
    const COUNTRY_CODE_GM = 'GM';
    const COUNTRY_CODE_GN = 'GN';
    const COUNTRY_CODE_GP = 'GP';
    const COUNTRY_CODE_GQ = 'GQ';
    const COUNTRY_CODE_GR = 'GR';
    const COUNTRY_CODE_GT = 'GT';
    const COUNTRY_CODE_GU = 'GU';
    const COUNTRY_CODE_GW = 'GW';
    const COUNTRY_CODE_GY = 'GY';
    const COUNTRY_CODE_HK = 'HK';
    const COUNTRY_CODE_HN = 'HN';
    const COUNTRY_CODE_HR = 'HR';
    const COUNTRY_CODE_HT = 'HT';
    const COUNTRY_CODE_HU = 'HU';
    const COUNTRY_CODE_IC = 'IC';
    const COUNTRY_CODE_ID = 'ID';
    const COUNTRY_CODE_IE = 'IE';
    const COUNTRY_CODE_IL = 'IL';
    const COUNTRY_CODE_IN = 'IN';
    const COUNTRY_CODE_IQ = 'IQ';
    const COUNTRY_CODE_IR = 'IR';
    const COUNTRY_CODE_IS = 'IS';
    const COUNTRY_CODE_IT = 'IT';
    const COUNTRY_CODE_JE = 'JE';
    const COUNTRY_CODE_JM = 'JM';
    const COUNTRY_CODE_JO = 'JO';
    const COUNTRY_CODE_JP = 'JP';
    const COUNTRY_CODE_KE = 'KE';
    const COUNTRY_CODE_KG = 'KG';
    const COUNTRY_CODE_KH = 'KH';
    const COUNTRY_CODE_KI = 'KI';
    const COUNTRY_CODE_KM = 'KM';
    const COUNTRY_CODE_KN = 'KN';
    const COUNTRY_CODE_KP = 'KP';
    const COUNTRY_CODE_KR = 'KR';
    const COUNTRY_CODE_KV = 'KV';
    const COUNTRY_CODE_KW = 'KW';
    const COUNTRY_CODE_KY = 'KY';
    const COUNTRY_CODE_KZ = 'KZ';
    const COUNTRY_CODE_LA = 'LA';
    const COUNTRY_CODE_LB = 'LB';
    const COUNTRY_CODE_LC = 'LC';
    const COUNTRY_CODE_LI = 'LI';
    const COUNTRY_CODE_LK = 'LK';
    const COUNTRY_CODE_LR = 'LR';
    const COUNTRY_CODE_LS = 'LS';
    const COUNTRY_CODE_LT = 'LT';
    const COUNTRY_CODE_LU = 'LU';
    const COUNTRY_CODE_LV = 'LV';
    const COUNTRY_CODE_LY = 'LY';
    const COUNTRY_CODE_MA = 'MA';
    const COUNTRY_CODE_MC = 'MC';
    const COUNTRY_CODE_MD = 'MD';
    const COUNTRY_CODE_ME = 'ME';
    const COUNTRY_CODE_MG = 'MG';
    const COUNTRY_CODE_MH = 'MH';
    const COUNTRY_CODE_MK = 'MK';
    const COUNTRY_CODE_ML = 'ML';
    const COUNTRY_CODE_MM = 'MM';
    const COUNTRY_CODE_MN = 'MN';
    const COUNTRY_CODE_MO = 'MO';
    const COUNTRY_CODE_MP = 'MP';
    const COUNTRY_CODE_MQ = 'MQ';
    const COUNTRY_CODE_MR = 'MR';
    const COUNTRY_CODE_MS = 'MS';
    const COUNTRY_CODE_MT = 'MT';
    const COUNTRY_CODE_MU = 'MU';
    const COUNTRY_CODE_MV = 'MV';
    const COUNTRY_CODE_MW = 'MW';
    const COUNTRY_CODE_MX = 'MX';
    const COUNTRY_CODE_MY = 'MY';
    const COUNTRY_CODE_MZ = 'MZ';
    const COUNTRY_CODE_NA = 'NA';
    const COUNTRY_CODE_NC = 'NC';
    const COUNTRY_CODE_NE = 'NE';
    const COUNTRY_CODE_NG = 'NG';
    const COUNTRY_CODE_NI = 'NI';
    const COUNTRY_CODE_NL = 'NL';
    const COUNTRY_CODE_NO = 'NO';
    const COUNTRY_CODE_NP = 'NP';
    const COUNTRY_CODE_NR = 'NR';
    const COUNTRY_CODE_NU = 'NU';
    const COUNTRY_CODE_NZ = 'NZ';
    const COUNTRY_CODE_OM = 'OM';
    const COUNTRY_CODE_PA = 'PA';
    const COUNTRY_CODE_PE = 'PE';
    const COUNTRY_CODE_PF = 'PF';
    const COUNTRY_CODE_PG = 'PG';
    const COUNTRY_CODE_PH = 'PH';
    const COUNTRY_CODE_PK = 'PK';
    const COUNTRY_CODE_PL = 'PL';
    const COUNTRY_CODE_PR = 'PR';
    const COUNTRY_CODE_PT = 'PT';
    const COUNTRY_CODE_PW = 'PW';
    const COUNTRY_CODE_PY = 'PY';
    const COUNTRY_CODE_QA = 'QA';
    const COUNTRY_CODE_RE = 'RE';
    const COUNTRY_CODE_RO = 'RO';
    const COUNTRY_CODE_RS = 'RS';
    const COUNTRY_CODE_RU = 'RU';
    const COUNTRY_CODE_RW = 'RW';
    const COUNTRY_CODE_SA = 'SA';
    const COUNTRY_CODE_SB = 'SB';
    const COUNTRY_CODE_SC = 'SC';
    const COUNTRY_CODE_SD = 'SD';
    const COUNTRY_CODE_SE = 'SE';
    const COUNTRY_CODE_SG = 'SG';
    const COUNTRY_CODE_SH = 'SH';
    const COUNTRY_CODE_SI = 'SI';
    const COUNTRY_CODE_SK = 'SK';
    const COUNTRY_CODE_SL = 'SL';
    const COUNTRY_CODE_SM = 'SM';
    const COUNTRY_CODE_SN = 'SN';
    const COUNTRY_CODE_SO = 'SO';
    const COUNTRY_CODE_SR = 'SR';
    const COUNTRY_CODE_SS = 'SS';
    const COUNTRY_CODE_ST = 'ST';
    const COUNTRY_CODE_SV = 'SV';
    const COUNTRY_CODE_SY = 'SY';
    const COUNTRY_CODE_SZ = 'SZ';
    const COUNTRY_CODE_TC = 'TC';
    const COUNTRY_CODE_TD = 'TD';
    const COUNTRY_CODE_TG = 'TG';
    const COUNTRY_CODE_TH = 'TH';
    const COUNTRY_CODE_TJ = 'TJ';
    const COUNTRY_CODE_TL = 'TL';
    const COUNTRY_CODE_TN = 'TN';
    const COUNTRY_CODE_TO = 'TO';
    const COUNTRY_CODE_TR = 'TR';
    const COUNTRY_CODE_TT = 'TT';
    const COUNTRY_CODE_TV = 'TV';
    const COUNTRY_CODE_TW = 'TW';
    const COUNTRY_CODE_TZ = 'TZ';
    const COUNTRY_CODE_UA = 'UA';
    const COUNTRY_CODE_UG = 'UG';
    const COUNTRY_CODE_US = 'US';
    const COUNTRY_CODE_UY = 'UY';
    const COUNTRY_CODE_UZ = 'UZ';
    const COUNTRY_CODE_VA = 'VA';
    const COUNTRY_CODE_VC = 'VC';
    const COUNTRY_CODE_VE = 'VE';
    const COUNTRY_CODE_VG = 'VG';
    const COUNTRY_CODE_VI = 'VI';
    const COUNTRY_CODE_VN = 'VN';
    const COUNTRY_CODE_VU = 'VU';
    const COUNTRY_CODE_WS = 'WS';
    const COUNTRY_CODE_XB = 'XB';
    const COUNTRY_CODE_XC = 'XC';
    const COUNTRY_CODE_XE = 'XE';
    const COUNTRY_CODE_XM = 'XM';
    const COUNTRY_CODE_XN = 'XN';
    const COUNTRY_CODE_XS = 'XS';
    const COUNTRY_CODE_XY = 'XY';
    const COUNTRY_CODE_YE = 'YE';
    const COUNTRY_CODE_YT = 'YT';
    const COUNTRY_CODE_ZA = 'ZA';
    const COUNTRY_CODE_ZM = 'ZM';
    const COUNTRY_CODE_ZW = 'ZW';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCountryCodeAllowableValues()
    {
        return [
            self::COUNTRY_CODE_AD,
            self::COUNTRY_CODE_AE,
            self::COUNTRY_CODE_AF,
            self::COUNTRY_CODE_AG,
            self::COUNTRY_CODE_AI,
            self::COUNTRY_CODE_AL,
            self::COUNTRY_CODE_AM,
            self::COUNTRY_CODE_AN,
            self::COUNTRY_CODE_AO,
            self::COUNTRY_CODE_AR,
            self::COUNTRY_CODE__AS,
            self::COUNTRY_CODE_AT,
            self::COUNTRY_CODE_AU,
            self::COUNTRY_CODE_AW,
            self::COUNTRY_CODE_AZ,
            self::COUNTRY_CODE_BA,
            self::COUNTRY_CODE_BB,
            self::COUNTRY_CODE_BD,
            self::COUNTRY_CODE_BE,
            self::COUNTRY_CODE_BF,
            self::COUNTRY_CODE_BG,
            self::COUNTRY_CODE_BH,
            self::COUNTRY_CODE_BI,
            self::COUNTRY_CODE_BJ,
            self::COUNTRY_CODE_BM,
            self::COUNTRY_CODE_BN,
            self::COUNTRY_CODE_BO,
            self::COUNTRY_CODE_BR,
            self::COUNTRY_CODE_BS,
            self::COUNTRY_CODE_BT,
            self::COUNTRY_CODE_BW,
            self::COUNTRY_CODE_BY,
            self::COUNTRY_CODE_BZ,
            self::COUNTRY_CODE_CA,
            self::COUNTRY_CODE_CD,
            self::COUNTRY_CODE_CF,
            self::COUNTRY_CODE_CG,
            self::COUNTRY_CODE_CH,
            self::COUNTRY_CODE_CI,
            self::COUNTRY_CODE_CK,
            self::COUNTRY_CODE_CL,
            self::COUNTRY_CODE_CM,
            self::COUNTRY_CODE_CN,
            self::COUNTRY_CODE_CO,
            self::COUNTRY_CODE_CR,
            self::COUNTRY_CODE_CU,
            self::COUNTRY_CODE_CV,
            self::COUNTRY_CODE_CY,
            self::COUNTRY_CODE_CZ,
            self::COUNTRY_CODE_DE,
            self::COUNTRY_CODE_DJ,
            self::COUNTRY_CODE_DK,
            self::COUNTRY_CODE_DM,
            self::COUNTRY_CODE__DO,
            self::COUNTRY_CODE_DZ,
            self::COUNTRY_CODE_EC,
            self::COUNTRY_CODE_EE,
            self::COUNTRY_CODE_EG,
            self::COUNTRY_CODE_ER,
            self::COUNTRY_CODE_ES,
            self::COUNTRY_CODE_ET,
            self::COUNTRY_CODE_FI,
            self::COUNTRY_CODE_FJ,
            self::COUNTRY_CODE_FK,
            self::COUNTRY_CODE_FM,
            self::COUNTRY_CODE_FO,
            self::COUNTRY_CODE_FR,
            self::COUNTRY_CODE_GA,
            self::COUNTRY_CODE_GB,
            self::COUNTRY_CODE_GD,
            self::COUNTRY_CODE_GE,
            self::COUNTRY_CODE_GF,
            self::COUNTRY_CODE_GG,
            self::COUNTRY_CODE_GH,
            self::COUNTRY_CODE_GI,
            self::COUNTRY_CODE_GL,
            self::COUNTRY_CODE_GM,
            self::COUNTRY_CODE_GN,
            self::COUNTRY_CODE_GP,
            self::COUNTRY_CODE_GQ,
            self::COUNTRY_CODE_GR,
            self::COUNTRY_CODE_GT,
            self::COUNTRY_CODE_GU,
            self::COUNTRY_CODE_GW,
            self::COUNTRY_CODE_GY,
            self::COUNTRY_CODE_HK,
            self::COUNTRY_CODE_HN,
            self::COUNTRY_CODE_HR,
            self::COUNTRY_CODE_HT,
            self::COUNTRY_CODE_HU,
            self::COUNTRY_CODE_IC,
            self::COUNTRY_CODE_ID,
            self::COUNTRY_CODE_IE,
            self::COUNTRY_CODE_IL,
            self::COUNTRY_CODE_IN,
            self::COUNTRY_CODE_IQ,
            self::COUNTRY_CODE_IR,
            self::COUNTRY_CODE_IS,
            self::COUNTRY_CODE_IT,
            self::COUNTRY_CODE_JE,
            self::COUNTRY_CODE_JM,
            self::COUNTRY_CODE_JO,
            self::COUNTRY_CODE_JP,
            self::COUNTRY_CODE_KE,
            self::COUNTRY_CODE_KG,
            self::COUNTRY_CODE_KH,
            self::COUNTRY_CODE_KI,
            self::COUNTRY_CODE_KM,
            self::COUNTRY_CODE_KN,
            self::COUNTRY_CODE_KP,
            self::COUNTRY_CODE_KR,
            self::COUNTRY_CODE_KV,
            self::COUNTRY_CODE_KW,
            self::COUNTRY_CODE_KY,
            self::COUNTRY_CODE_KZ,
            self::COUNTRY_CODE_LA,
            self::COUNTRY_CODE_LB,
            self::COUNTRY_CODE_LC,
            self::COUNTRY_CODE_LI,
            self::COUNTRY_CODE_LK,
            self::COUNTRY_CODE_LR,
            self::COUNTRY_CODE_LS,
            self::COUNTRY_CODE_LT,
            self::COUNTRY_CODE_LU,
            self::COUNTRY_CODE_LV,
            self::COUNTRY_CODE_LY,
            self::COUNTRY_CODE_MA,
            self::COUNTRY_CODE_MC,
            self::COUNTRY_CODE_MD,
            self::COUNTRY_CODE_ME,
            self::COUNTRY_CODE_MG,
            self::COUNTRY_CODE_MH,
            self::COUNTRY_CODE_MK,
            self::COUNTRY_CODE_ML,
            self::COUNTRY_CODE_MM,
            self::COUNTRY_CODE_MN,
            self::COUNTRY_CODE_MO,
            self::COUNTRY_CODE_MP,
            self::COUNTRY_CODE_MQ,
            self::COUNTRY_CODE_MR,
            self::COUNTRY_CODE_MS,
            self::COUNTRY_CODE_MT,
            self::COUNTRY_CODE_MU,
            self::COUNTRY_CODE_MV,
            self::COUNTRY_CODE_MW,
            self::COUNTRY_CODE_MX,
            self::COUNTRY_CODE_MY,
            self::COUNTRY_CODE_MZ,
            self::COUNTRY_CODE_NA,
            self::COUNTRY_CODE_NC,
            self::COUNTRY_CODE_NE,
            self::COUNTRY_CODE_NG,
            self::COUNTRY_CODE_NI,
            self::COUNTRY_CODE_NL,
            self::COUNTRY_CODE_NO,
            self::COUNTRY_CODE_NP,
            self::COUNTRY_CODE_NR,
            self::COUNTRY_CODE_NU,
            self::COUNTRY_CODE_NZ,
            self::COUNTRY_CODE_OM,
            self::COUNTRY_CODE_PA,
            self::COUNTRY_CODE_PE,
            self::COUNTRY_CODE_PF,
            self::COUNTRY_CODE_PG,
            self::COUNTRY_CODE_PH,
            self::COUNTRY_CODE_PK,
            self::COUNTRY_CODE_PL,
            self::COUNTRY_CODE_PR,
            self::COUNTRY_CODE_PT,
            self::COUNTRY_CODE_PW,
            self::COUNTRY_CODE_PY,
            self::COUNTRY_CODE_QA,
            self::COUNTRY_CODE_RE,
            self::COUNTRY_CODE_RO,
            self::COUNTRY_CODE_RS,
            self::COUNTRY_CODE_RU,
            self::COUNTRY_CODE_RW,
            self::COUNTRY_CODE_SA,
            self::COUNTRY_CODE_SB,
            self::COUNTRY_CODE_SC,
            self::COUNTRY_CODE_SD,
            self::COUNTRY_CODE_SE,
            self::COUNTRY_CODE_SG,
            self::COUNTRY_CODE_SH,
            self::COUNTRY_CODE_SI,
            self::COUNTRY_CODE_SK,
            self::COUNTRY_CODE_SL,
            self::COUNTRY_CODE_SM,
            self::COUNTRY_CODE_SN,
            self::COUNTRY_CODE_SO,
            self::COUNTRY_CODE_SR,
            self::COUNTRY_CODE_SS,
            self::COUNTRY_CODE_ST,
            self::COUNTRY_CODE_SV,
            self::COUNTRY_CODE_SY,
            self::COUNTRY_CODE_SZ,
            self::COUNTRY_CODE_TC,
            self::COUNTRY_CODE_TD,
            self::COUNTRY_CODE_TG,
            self::COUNTRY_CODE_TH,
            self::COUNTRY_CODE_TJ,
            self::COUNTRY_CODE_TL,
            self::COUNTRY_CODE_TN,
            self::COUNTRY_CODE_TO,
            self::COUNTRY_CODE_TR,
            self::COUNTRY_CODE_TT,
            self::COUNTRY_CODE_TV,
            self::COUNTRY_CODE_TW,
            self::COUNTRY_CODE_TZ,
            self::COUNTRY_CODE_UA,
            self::COUNTRY_CODE_UG,
            self::COUNTRY_CODE_US,
            self::COUNTRY_CODE_UY,
            self::COUNTRY_CODE_UZ,
            self::COUNTRY_CODE_VA,
            self::COUNTRY_CODE_VC,
            self::COUNTRY_CODE_VE,
            self::COUNTRY_CODE_VG,
            self::COUNTRY_CODE_VI,
            self::COUNTRY_CODE_VN,
            self::COUNTRY_CODE_VU,
            self::COUNTRY_CODE_WS,
            self::COUNTRY_CODE_XB,
            self::COUNTRY_CODE_XC,
            self::COUNTRY_CODE_XE,
            self::COUNTRY_CODE_XM,
            self::COUNTRY_CODE_XN,
            self::COUNTRY_CODE_XS,
            self::COUNTRY_CODE_XY,
            self::COUNTRY_CODE_YE,
            self::COUNTRY_CODE_YT,
            self::COUNTRY_CODE_ZA,
            self::COUNTRY_CODE_ZM,
            self::COUNTRY_CODE_ZW,
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
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['federal_tax_id'] = isset($data['federal_tax_id']) ? $data['federal_tax_id'] : null;
        $this->container['state_tax_id'] = isset($data['state_tax_id']) ? $data['state_tax_id'] : null;
        $this->container['person_name'] = isset($data['person_name']) ? $data['person_name'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['state_code'] = isset($data['state_code']) ? $data['state_code'] : null;
        $this->container['suburb'] = isset($data['suburb']) ? $data['suburb'] : null;
        $this->container['residential'] = isset($data['residential']) ? $data['residential'] : null;
        $this->container['address_line1'] = isset($data['address_line1']) ? $data['address_line1'] : null;
        $this->container['address_line2'] = isset($data['address_line2']) ? $data['address_line2'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
        }
        $allowedValues = $this->getCountryCodeAllowableValues();
        if (!is_null($this->container['country_code']) && !in_array($this->container['country_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'country_code', must be one of '%s'",
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
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code The address postal code
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city The address city. <br/> **(required to create as shipment)**
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets federal_tax_id
     *
     * @return string
     */
    public function getFederalTaxId()
    {
        return $this->container['federal_tax_id'];
    }

    /**
     * Sets federal_tax_id
     *
     * @param string $federal_tax_id The party frederal tax id
     *
     * @return $this
     */
    public function setFederalTaxId($federal_tax_id)
    {
        $this->container['federal_tax_id'] = $federal_tax_id;

        return $this;
    }

    /**
     * Gets state_tax_id
     *
     * @return string
     */
    public function getStateTaxId()
    {
        return $this->container['state_tax_id'];
    }

    /**
     * Sets state_tax_id
     *
     * @param string $state_tax_id The party state id
     *
     * @return $this
     */
    public function setStateTaxId($state_tax_id)
    {
        $this->container['state_tax_id'] = $state_tax_id;

        return $this;
    }

    /**
     * Gets person_name
     *
     * @return string
     */
    public function getPersonName()
    {
        return $this->container['person_name'];
    }

    /**
     * Sets person_name
     *
     * @param string $person_name attention to <br/> **(required to create as shipment)**
     *
     * @return $this
     */
    public function setPersonName($person_name)
    {
        $this->container['person_name'] = $person_name;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name The company name if the party is a company
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code The address country code
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $allowedValues = $this->getCountryCodeAllowableValues();
        if (!in_array($country_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'country_code', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email The party email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number The party phone number.<br/> Note that the expected format is: **1 514 0000000**  Country Code | Area Code | Phone --- | --- | --- 1 | 514 | 0000000
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets state_code
     *
     * @return string
     */
    public function getStateCode()
    {
        return $this->container['state_code'];
    }

    /**
     * Sets state_code
     *
     * @param string $state_code The address state code
     *
     * @return $this
     */
    public function setStateCode($state_code)
    {
        $this->container['state_code'] = $state_code;

        return $this;
    }

    /**
     * Gets suburb
     *
     * @return string
     */
    public function getSuburb()
    {
        return $this->container['suburb'];
    }

    /**
     * Sets suburb
     *
     * @param string $suburb The address suburb if known
     *
     * @return $this
     */
    public function setSuburb($suburb)
    {
        $this->container['suburb'] = $suburb;

        return $this;
    }

    /**
     * Gets residential
     *
     * @return bool
     */
    public function getResidential()
    {
        return $this->container['residential'];
    }

    /**
     * Sets residential
     *
     * @param bool $residential Indicate if the address is residential or commercial (enterprise)
     *
     * @return $this
     */
    public function setResidential($residential)
    {
        $this->container['residential'] = $residential;

        return $this;
    }

    /**
     * Gets address_line1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1
     *
     * @param string $address_line1 The address line with street number <br/> **(required to create as shipment)**
     *
     * @return $this
     */
    public function setAddressLine1($address_line1)
    {
        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2
     *
     * @param string $address_line2 The address line with suite number
     *
     * @return $this
     */
    public function setAddressLine2($address_line2)
    {
        $this->container['address_line2'] = $address_line2;

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



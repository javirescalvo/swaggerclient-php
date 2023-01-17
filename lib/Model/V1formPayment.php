<?php
/**
 * V1formPayment
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PAYCOMET REST API
 *
 * PAYCOMET API REST for customers.
 *
 * OpenAPI spec version: 2.78.0
 * Contact: tecnico@paycomet.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.36
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * V1formPayment Class Doc Comment
 *
 * @category Class
 * @description Payment data (mandatory, except in 107 - tokenization).
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1formPayment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1form_payment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'terminal' => 'int',
'methods' => 'int[]',
'excluded_methods' => 'int[]',
'order' => 'string',
'amount' => 'string',
'currency' => 'string',
'id_user' => 'int',
'token_user' => 'string',
'secure' => 'int',
'scoring' => 'string',
'product_description' => 'string',
'merchant_descriptor' => 'string',
'user_interaction' => 'int',
'trx_type' => 'string',
'sca_exception' => 'string',
'url_ok' => 'string',
'url_ko' => 'string',
'tokenize' => 'int',
'merchant_data' => '\Swagger\Client\Model\V1formPaymentMerchantData'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'terminal' => null,
'methods' => null,
'excluded_methods' => null,
'order' => null,
'amount' => null,
'currency' => null,
'id_user' => null,
'token_user' => null,
'secure' => null,
'scoring' => null,
'product_description' => null,
'merchant_descriptor' => null,
'user_interaction' => null,
'trx_type' => null,
'sca_exception' => null,
'url_ok' => null,
'url_ko' => null,
'tokenize' => null,
'merchant_data' => null    ];

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
        'terminal' => 'terminal',
'methods' => 'methods',
'excluded_methods' => 'excludedMethods',
'order' => 'order',
'amount' => 'amount',
'currency' => 'currency',
'id_user' => 'idUser',
'token_user' => 'tokenUser',
'secure' => 'secure',
'scoring' => 'scoring',
'product_description' => 'productDescription',
'merchant_descriptor' => 'merchantDescriptor',
'user_interaction' => 'userInteraction',
'trx_type' => 'trxType',
'sca_exception' => 'scaException',
'url_ok' => 'urlOk',
'url_ko' => 'urlKo',
'tokenize' => 'tokenize',
'merchant_data' => 'merchantData'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'terminal' => 'setTerminal',
'methods' => 'setMethods',
'excluded_methods' => 'setExcludedMethods',
'order' => 'setOrder',
'amount' => 'setAmount',
'currency' => 'setCurrency',
'id_user' => 'setIdUser',
'token_user' => 'setTokenUser',
'secure' => 'setSecure',
'scoring' => 'setScoring',
'product_description' => 'setProductDescription',
'merchant_descriptor' => 'setMerchantDescriptor',
'user_interaction' => 'setUserInteraction',
'trx_type' => 'setTrxType',
'sca_exception' => 'setScaException',
'url_ok' => 'setUrlOk',
'url_ko' => 'setUrlKo',
'tokenize' => 'setTokenize',
'merchant_data' => 'setMerchantData'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'terminal' => 'getTerminal',
'methods' => 'getMethods',
'excluded_methods' => 'getExcludedMethods',
'order' => 'getOrder',
'amount' => 'getAmount',
'currency' => 'getCurrency',
'id_user' => 'getIdUser',
'token_user' => 'getTokenUser',
'secure' => 'getSecure',
'scoring' => 'getScoring',
'product_description' => 'getProductDescription',
'merchant_descriptor' => 'getMerchantDescriptor',
'user_interaction' => 'getUserInteraction',
'trx_type' => 'getTrxType',
'sca_exception' => 'getScaException',
'url_ok' => 'getUrlOk',
'url_ko' => 'getUrlKo',
'tokenize' => 'getTokenize',
'merchant_data' => 'getMerchantData'    ];

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
        $this->container['terminal'] = isset($data['terminal']) ? $data['terminal'] : null;
        $this->container['methods'] = isset($data['methods']) ? $data['methods'] : null;
        $this->container['excluded_methods'] = isset($data['excluded_methods']) ? $data['excluded_methods'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['id_user'] = isset($data['id_user']) ? $data['id_user'] : null;
        $this->container['token_user'] = isset($data['token_user']) ? $data['token_user'] : null;
        $this->container['secure'] = isset($data['secure']) ? $data['secure'] : null;
        $this->container['scoring'] = isset($data['scoring']) ? $data['scoring'] : null;
        $this->container['product_description'] = isset($data['product_description']) ? $data['product_description'] : null;
        $this->container['merchant_descriptor'] = isset($data['merchant_descriptor']) ? $data['merchant_descriptor'] : null;
        $this->container['user_interaction'] = isset($data['user_interaction']) ? $data['user_interaction'] : null;
        $this->container['trx_type'] = isset($data['trx_type']) ? $data['trx_type'] : null;
        $this->container['sca_exception'] = isset($data['sca_exception']) ? $data['sca_exception'] : null;
        $this->container['url_ok'] = isset($data['url_ok']) ? $data['url_ok'] : null;
        $this->container['url_ko'] = isset($data['url_ko']) ? $data['url_ko'] : null;
        $this->container['tokenize'] = isset($data['tokenize']) ? $data['tokenize'] : null;
        $this->container['merchant_data'] = isset($data['merchant_data']) ? $data['merchant_data'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets terminal
     *
     * @return int
     */
    public function getTerminal()
    {
        return $this->container['terminal'];
    }

    /**
     * Sets terminal
     *
     * @param int $terminal Product or terminal Id.
     *
     * @return $this
     */
    public function setTerminal($terminal)
    {
        $this->container['terminal'] = $terminal;

        return $this;
    }

    /**
     * Gets methods
     *
     * @return int[]
     */
    public function getMethods()
    {
        return $this->container['methods'];
    }

    /**
     * Sets methods
     *
     * @param int[] $methods PAYCOMET payment methods available for customer (by default, all availables for merchant).
     *
     * @return $this
     */
    public function setMethods($methods)
    {
        $this->container['methods'] = $methods;

        return $this;
    }

    /**
     * Gets excluded_methods
     *
     * @return int[]
     */
    public function getExcludedMethods()
    {
        return $this->container['excluded_methods'];
    }

    /**
     * Sets excluded_methods
     *
     * @param int[] $excluded_methods PAYCOMET payment methods excluded for customer (by default, none).
     *
     * @return $this
     */
    public function setExcludedMethods($excluded_methods)
    {
        $this->container['excluded_methods'] = $excluded_methods;

        return $this;
    }

    /**
     * Gets order
     *
     * @return string
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param string $order Unique reference for merchant's purchase
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount Amount of the operation in number format. 1.00 EURO = 100, 4.50 EUROS = 450...
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
     * @param string $currency Currency of the transaction.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets id_user
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->container['id_user'];
    }

    /**
     * Sets id_user
     *
     * @param int $id_user Identification of user card given by PAYCOMET. Mandatory if is a card payment.
     *
     * @return $this
     */
    public function setIdUser($id_user)
    {
        $this->container['id_user'] = $id_user;

        return $this;
    }

    /**
     * Gets token_user
     *
     * @return string
     */
    public function getTokenUser()
    {
        return $this->container['token_user'];
    }

    /**
     * Sets token_user
     *
     * @param string $token_user Identification of user card given by PAYCOMET. Mandatory if is a card payment.
     *
     * @return $this
     */
    public function setTokenUser($token_user)
    {
        $this->container['token_user'] = $token_user;

        return $this;
    }

    /**
     * Gets secure
     *
     * @return int
     */
    public function getSecure()
    {
        return $this->container['secure'];
    }

    /**
     * Sets secure
     *
     * @param int $secure 0 or 1. Indicates if the transaction is secure.
     *
     * @return $this
     */
    public function setSecure($secure)
    {
        $this->container['secure'] = $secure;

        return $this;
    }

    /**
     * Gets scoring
     *
     * @return string
     */
    public function getScoring()
    {
        return $this->container['scoring'];
    }

    /**
     * Sets scoring
     *
     * @param string $scoring Risk scoring value from 0 to 100.
     *
     * @return $this
     */
    public function setScoring($scoring)
    {
        $this->container['scoring'] = $scoring;

        return $this;
    }

    /**
     * Gets product_description
     *
     * @return string
     */
    public function getProductDescription()
    {
        return $this->container['product_description'];
    }

    /**
     * Sets product_description
     *
     * @param string $product_description Description of the product sold.
     *
     * @return $this
     */
    public function setProductDescription($product_description)
    {
        $this->container['product_description'] = $product_description;

        return $this;
    }

    /**
     * Gets merchant_descriptor
     *
     * @return string
     */
    public function getMerchantDescriptor()
    {
        return $this->container['merchant_descriptor'];
    }

    /**
     * Sets merchant_descriptor
     *
     * @param string $merchant_descriptor Allows the business to send a text up to 25 characters that will be printed on the customer invoice. Limited to simple characters, no accents or special characters.
     *
     * @return $this
     */
    public function setMerchantDescriptor($merchant_descriptor)
    {
        $this->container['merchant_descriptor'] = $merchant_descriptor;

        return $this;
    }

    /**
     * Gets user_interaction
     *
     * @return int
     */
    public function getUserInteraction()
    {
        return $this->container['user_interaction'];
    }

    /**
     * Sets user_interaction
     *
     * @param int $user_interaction Indicates wether the business can interact with the customer
     *
     * @return $this
     */
    public function setUserInteraction($user_interaction)
    {
        $this->container['user_interaction'] = $user_interaction;

        return $this;
    }

    /**
     * Gets trx_type
     *
     * @return string
     */
    public function getTrxType()
    {
        return $this->container['trx_type'];
    }

    /**
     * Sets trx_type
     *
     * @param string $trx_type Obligatory only if an MIT exception has been selected in scaException
     *
     * @return $this
     */
    public function setTrxType($trx_type)
    {
        $this->container['trx_type'] = $trx_type;

        return $this;
    }

    /**
     * Gets sca_exception
     *
     * @return string
     */
    public function getScaException()
    {
        return $this->container['sca_exception'];
    }

    /**
     * Sets sca_exception
     *
     * @param string $sca_exception TYPE OF EXCEPTION TO THE SECURE PAYMENT. If not specified, PAYCOMET will try to assign it the most appropriate possible
     *
     * @return $this
     */
    public function setScaException($sca_exception)
    {
        $this->container['sca_exception'] = $sca_exception;

        return $this;
    }

    /**
     * Gets url_ok
     *
     * @return string
     */
    public function getUrlOk()
    {
        return $this->container['url_ok'];
    }

    /**
     * Sets url_ok
     *
     * @param string $url_ok Url where the customer will be redirected after finishing a correct transaction. (Max 255 characters)
     *
     * @return $this
     */
    public function setUrlOk($url_ok)
    {
        $this->container['url_ok'] = $url_ok;

        return $this;
    }

    /**
     * Gets url_ko
     *
     * @return string
     */
    public function getUrlKo()
    {
        return $this->container['url_ko'];
    }

    /**
     * Sets url_ko
     *
     * @param string $url_ko Url where the customer will be redirected after finishing a failed transaction. (Max 255 characters)
     *
     * @return $this
     */
    public function setUrlKo($url_ko)
    {
        $this->container['url_ko'] = $url_ko;

        return $this;
    }

    /**
     * Gets tokenize
     *
     * @return int
     */
    public function getTokenize()
    {
        return $this->container['tokenize'];
    }

    /**
     * Sets tokenize
     *
     * @param int $tokenize Attempt to tokenize if the methodId provided allows it.
     *
     * @return $this
     */
    public function setTokenize($tokenize)
    {
        $this->container['tokenize'] = $tokenize;

        return $this;
    }

    /**
     * Gets merchant_data
     *
     * @return \Swagger\Client\Model\V1formPaymentMerchantData
     */
    public function getMerchantData()
    {
        return $this->container['merchant_data'];
    }

    /**
     * Sets merchant_data
     *
     * @param \Swagger\Client\Model\V1formPaymentMerchantData $merchant_data merchant_data
     *
     * @return $this
     */
    public function setMerchantData($merchant_data)
    {
        $this->container['merchant_data'] = $merchant_data;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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

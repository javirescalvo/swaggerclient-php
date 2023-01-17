<?php
/**
 * InlineResponse20016Payment
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
 * InlineResponse20016Payment Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20016Payment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_16_payment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'paycomet_id' => 'int',
'operation_id' => 'int',
'method_id' => 'int',
'timestamp' => 'string',
'settlement_date' => 'string',
'order' => 'string',
'operation_type' => 'int',
'operation_name' => 'string',
'state' => 'int',
'state_name' => 'string',
'response' => 'string',
'terminal' => 'int',
'terminal_name' => 'string',
'user' => 'string',
'amount' => 'string',
'currency' => 'string',
'amount_display' => 'string',
'amount_eur' => 'string',
'terminal_currency' => 'string',
'amount_eur_display' => 'string',
'error_code' => 'int',
'error_description' => 'string',
'fee_euro' => 'float',
'fee_percent' => 'float',
'original_ip' => 'string',
'pan' => 'string',
'scoring' => 'string',
'merchant_bank' => 'string',
'bic_code' => 'string',
'product_description' => 'string',
'card_type' => 'string',
'card_category' => 'string',
'card_brand' => 'string',
'card_country' => 'string',
'secure' => 'string',
'split_id' => 'int',
'issuer_bank' => 'string',
'auth_code' => 'string',
'merchant_data' => '\Swagger\Client\Model\InlineResponse20016PaymentMerchantData',
'history' => '\Swagger\Client\Model\InlineResponse20016PaymentHistory[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'paycomet_id' => null,
'operation_id' => null,
'method_id' => null,
'timestamp' => null,
'settlement_date' => null,
'order' => null,
'operation_type' => null,
'operation_name' => null,
'state' => null,
'state_name' => null,
'response' => null,
'terminal' => null,
'terminal_name' => null,
'user' => null,
'amount' => null,
'currency' => null,
'amount_display' => null,
'amount_eur' => null,
'terminal_currency' => null,
'amount_eur_display' => null,
'error_code' => null,
'error_description' => null,
'fee_euro' => null,
'fee_percent' => null,
'original_ip' => null,
'pan' => null,
'scoring' => null,
'merchant_bank' => null,
'bic_code' => null,
'product_description' => null,
'card_type' => null,
'card_category' => null,
'card_brand' => null,
'card_country' => null,
'secure' => null,
'split_id' => null,
'issuer_bank' => null,
'auth_code' => null,
'merchant_data' => null,
'history' => null    ];

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
        'paycomet_id' => 'paycometId',
'operation_id' => 'operationId',
'method_id' => 'methodId',
'timestamp' => 'timestamp',
'settlement_date' => 'settlementDate',
'order' => 'order',
'operation_type' => 'operationType',
'operation_name' => 'operationName',
'state' => 'state',
'state_name' => 'stateName',
'response' => 'response',
'terminal' => 'terminal',
'terminal_name' => 'terminalName',
'user' => 'user',
'amount' => 'amount',
'currency' => 'currency',
'amount_display' => 'amountDisplay',
'amount_eur' => 'amountEur',
'terminal_currency' => 'terminalCurrency',
'amount_eur_display' => 'amountEurDisplay',
'error_code' => 'errorCode',
'error_description' => 'errorDescription',
'fee_euro' => 'feeEuro',
'fee_percent' => 'feePercent',
'original_ip' => 'originalIp',
'pan' => 'pan',
'scoring' => 'scoring',
'merchant_bank' => 'merchantBank',
'bic_code' => 'bicCode',
'product_description' => 'productDescription',
'card_type' => 'cardType',
'card_category' => 'cardCategory',
'card_brand' => 'cardBrand',
'card_country' => 'cardCountry',
'secure' => 'secure',
'split_id' => 'splitId',
'issuer_bank' => 'issuerBank',
'auth_code' => 'authCode',
'merchant_data' => 'merchantData',
'history' => 'history'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'paycomet_id' => 'setPaycometId',
'operation_id' => 'setOperationId',
'method_id' => 'setMethodId',
'timestamp' => 'setTimestamp',
'settlement_date' => 'setSettlementDate',
'order' => 'setOrder',
'operation_type' => 'setOperationType',
'operation_name' => 'setOperationName',
'state' => 'setState',
'state_name' => 'setStateName',
'response' => 'setResponse',
'terminal' => 'setTerminal',
'terminal_name' => 'setTerminalName',
'user' => 'setUser',
'amount' => 'setAmount',
'currency' => 'setCurrency',
'amount_display' => 'setAmountDisplay',
'amount_eur' => 'setAmountEur',
'terminal_currency' => 'setTerminalCurrency',
'amount_eur_display' => 'setAmountEurDisplay',
'error_code' => 'setErrorCode',
'error_description' => 'setErrorDescription',
'fee_euro' => 'setFeeEuro',
'fee_percent' => 'setFeePercent',
'original_ip' => 'setOriginalIp',
'pan' => 'setPan',
'scoring' => 'setScoring',
'merchant_bank' => 'setMerchantBank',
'bic_code' => 'setBicCode',
'product_description' => 'setProductDescription',
'card_type' => 'setCardType',
'card_category' => 'setCardCategory',
'card_brand' => 'setCardBrand',
'card_country' => 'setCardCountry',
'secure' => 'setSecure',
'split_id' => 'setSplitId',
'issuer_bank' => 'setIssuerBank',
'auth_code' => 'setAuthCode',
'merchant_data' => 'setMerchantData',
'history' => 'setHistory'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'paycomet_id' => 'getPaycometId',
'operation_id' => 'getOperationId',
'method_id' => 'getMethodId',
'timestamp' => 'getTimestamp',
'settlement_date' => 'getSettlementDate',
'order' => 'getOrder',
'operation_type' => 'getOperationType',
'operation_name' => 'getOperationName',
'state' => 'getState',
'state_name' => 'getStateName',
'response' => 'getResponse',
'terminal' => 'getTerminal',
'terminal_name' => 'getTerminalName',
'user' => 'getUser',
'amount' => 'getAmount',
'currency' => 'getCurrency',
'amount_display' => 'getAmountDisplay',
'amount_eur' => 'getAmountEur',
'terminal_currency' => 'getTerminalCurrency',
'amount_eur_display' => 'getAmountEurDisplay',
'error_code' => 'getErrorCode',
'error_description' => 'getErrorDescription',
'fee_euro' => 'getFeeEuro',
'fee_percent' => 'getFeePercent',
'original_ip' => 'getOriginalIp',
'pan' => 'getPan',
'scoring' => 'getScoring',
'merchant_bank' => 'getMerchantBank',
'bic_code' => 'getBicCode',
'product_description' => 'getProductDescription',
'card_type' => 'getCardType',
'card_category' => 'getCardCategory',
'card_brand' => 'getCardBrand',
'card_country' => 'getCardCountry',
'secure' => 'getSecure',
'split_id' => 'getSplitId',
'issuer_bank' => 'getIssuerBank',
'auth_code' => 'getAuthCode',
'merchant_data' => 'getMerchantData',
'history' => 'getHistory'    ];

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
        $this->container['paycomet_id'] = isset($data['paycomet_id']) ? $data['paycomet_id'] : null;
        $this->container['operation_id'] = isset($data['operation_id']) ? $data['operation_id'] : null;
        $this->container['method_id'] = isset($data['method_id']) ? $data['method_id'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['settlement_date'] = isset($data['settlement_date']) ? $data['settlement_date'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['operation_type'] = isset($data['operation_type']) ? $data['operation_type'] : null;
        $this->container['operation_name'] = isset($data['operation_name']) ? $data['operation_name'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['state_name'] = isset($data['state_name']) ? $data['state_name'] : null;
        $this->container['response'] = isset($data['response']) ? $data['response'] : null;
        $this->container['terminal'] = isset($data['terminal']) ? $data['terminal'] : null;
        $this->container['terminal_name'] = isset($data['terminal_name']) ? $data['terminal_name'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['amount_display'] = isset($data['amount_display']) ? $data['amount_display'] : null;
        $this->container['amount_eur'] = isset($data['amount_eur']) ? $data['amount_eur'] : null;
        $this->container['terminal_currency'] = isset($data['terminal_currency']) ? $data['terminal_currency'] : null;
        $this->container['amount_eur_display'] = isset($data['amount_eur_display']) ? $data['amount_eur_display'] : null;
        $this->container['error_code'] = isset($data['error_code']) ? $data['error_code'] : null;
        $this->container['error_description'] = isset($data['error_description']) ? $data['error_description'] : null;
        $this->container['fee_euro'] = isset($data['fee_euro']) ? $data['fee_euro'] : null;
        $this->container['fee_percent'] = isset($data['fee_percent']) ? $data['fee_percent'] : null;
        $this->container['original_ip'] = isset($data['original_ip']) ? $data['original_ip'] : null;
        $this->container['pan'] = isset($data['pan']) ? $data['pan'] : null;
        $this->container['scoring'] = isset($data['scoring']) ? $data['scoring'] : null;
        $this->container['merchant_bank'] = isset($data['merchant_bank']) ? $data['merchant_bank'] : null;
        $this->container['bic_code'] = isset($data['bic_code']) ? $data['bic_code'] : null;
        $this->container['product_description'] = isset($data['product_description']) ? $data['product_description'] : null;
        $this->container['card_type'] = isset($data['card_type']) ? $data['card_type'] : null;
        $this->container['card_category'] = isset($data['card_category']) ? $data['card_category'] : null;
        $this->container['card_brand'] = isset($data['card_brand']) ? $data['card_brand'] : null;
        $this->container['card_country'] = isset($data['card_country']) ? $data['card_country'] : null;
        $this->container['secure'] = isset($data['secure']) ? $data['secure'] : null;
        $this->container['split_id'] = isset($data['split_id']) ? $data['split_id'] : null;
        $this->container['issuer_bank'] = isset($data['issuer_bank']) ? $data['issuer_bank'] : null;
        $this->container['auth_code'] = isset($data['auth_code']) ? $data['auth_code'] : null;
        $this->container['merchant_data'] = isset($data['merchant_data']) ? $data['merchant_data'] : null;
        $this->container['history'] = isset($data['history']) ? $data['history'] : null;
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
     * Gets paycomet_id
     *
     * @return int
     */
    public function getPaycometId()
    {
        return $this->container['paycomet_id'];
    }

    /**
     * Sets paycomet_id
     *
     * @param int $paycomet_id PAYCOMET identifier
     *
     * @return $this
     */
    public function setPaycometId($paycomet_id)
    {
        $this->container['paycomet_id'] = $paycomet_id;

        return $this;
    }

    /**
     * Gets operation_id
     *
     * @return int
     */
    public function getOperationId()
    {
        return $this->container['operation_id'];
    }

    /**
     * Sets operation_id
     *
     * @param int $operation_id Bank Reference Identifier
     *
     * @return $this
     */
    public function setOperationId($operation_id)
    {
        $this->container['operation_id'] = $operation_id;

        return $this;
    }

    /**
     * Gets method_id
     *
     * @return int
     */
    public function getMethodId()
    {
        return $this->container['method_id'];
    }

    /**
     * Sets method_id
     *
     * @param int $method_id PAYCOMET payment method ID. 1 is for card.
     *
     * @return $this
     */
    public function setMethodId($method_id)
    {
        $this->container['method_id'] = $method_id;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param string $timestamp Timestamp of transaction
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets settlement_date
     *
     * @return string
     */
    public function getSettlementDate()
    {
        return $this->container['settlement_date'];
    }

    /**
     * Sets settlement_date
     *
     * @param string $settlement_date Settlement date of transaction
     *
     * @return $this
     */
    public function setSettlementDate($settlement_date)
    {
        $this->container['settlement_date'] = $settlement_date;

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
     * Gets operation_type
     *
     * @return int
     */
    public function getOperationType()
    {
        return $this->container['operation_type'];
    }

    /**
     * Sets operation_type
     *
     * @param int $operation_type PAYCOMET operation type ID.
     *
     * @return $this
     */
    public function setOperationType($operation_type)
    {
        $this->container['operation_type'] = $operation_type;

        return $this;
    }

    /**
     * Gets operation_name
     *
     * @return string
     */
    public function getOperationName()
    {
        return $this->container['operation_name'];
    }

    /**
     * Sets operation_name
     *
     * @param string $operation_name PAYCOMET operation type description.
     *
     * @return $this
     */
    public function setOperationName($operation_name)
    {
        $this->container['operation_name'] = $operation_name;

        return $this;
    }

    /**
     * Gets state
     *
     * @return int
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param int $state Identifier of the state of the operation. 0 means operation failed, 1 operation correct, 2 operation unfinished (pending payment).
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets state_name
     *
     * @return string
     */
    public function getStateName()
    {
        return $this->container['state_name'];
    }

    /**
     * Sets state_name
     *
     * @param string $state_name Literal of the state of the operation.
     *
     * @return $this
     */
    public function setStateName($state_name)
    {
        $this->container['state_name'] = $state_name;

        return $this;
    }

    /**
     * Gets response
     *
     * @return string
     */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
     * Sets response
     *
     * @param string $response Status of transation. OK, KO o UF (pending payment).
     *
     * @return $this
     */
    public function setResponse($response)
    {
        $this->container['response'] = $response;

        return $this;
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
     * Gets terminal_name
     *
     * @return string
     */
    public function getTerminalName()
    {
        return $this->container['terminal_name'];
    }

    /**
     * Sets terminal_name
     *
     * @param string $terminal_name Customer product name
     *
     * @return $this
     */
    public function setTerminalName($terminal_name)
    {
        $this->container['terminal_name'] = $terminal_name;

        return $this;
    }

    /**
     * Gets user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param string $user Administrative user of the operation
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

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
     * Gets amount_display
     *
     * @return string
     */
    public function getAmountDisplay()
    {
        return $this->container['amount_display'];
    }

    /**
     * Sets amount_display
     *
     * @param string $amount_display Literal of the operation amount (with currency symbol)
     *
     * @return $this
     */
    public function setAmountDisplay($amount_display)
    {
        $this->container['amount_display'] = $amount_display;

        return $this;
    }

    /**
     * Gets amount_eur
     *
     * @return string
     */
    public function getAmountEur()
    {
        return $this->container['amount_eur'];
    }

    /**
     * Sets amount_eur
     *
     * @param string $amount_eur Amount of the operation in decimal format in terminal currency, only in successful operations
     *
     * @return $this
     */
    public function setAmountEur($amount_eur)
    {
        $this->container['amount_eur'] = $amount_eur;

        return $this;
    }

    /**
     * Gets terminal_currency
     *
     * @return string
     */
    public function getTerminalCurrency()
    {
        return $this->container['terminal_currency'];
    }

    /**
     * Sets terminal_currency
     *
     * @param string $terminal_currency Currency of the PAYCOMET terminal.
     *
     * @return $this
     */
    public function setTerminalCurrency($terminal_currency)
    {
        $this->container['terminal_currency'] = $terminal_currency;

        return $this;
    }

    /**
     * Gets amount_eur_display
     *
     * @return string
     */
    public function getAmountEurDisplay()
    {
        return $this->container['amount_eur_display'];
    }

    /**
     * Sets amount_eur_display
     *
     * @param string $amount_eur_display Literal of the operation amount in PAYCOMET terminal currency (with currency symbol) and possible conversion applied in multicurrency operations
     *
     * @return $this
     */
    public function setAmountEurDisplay($amount_eur_display)
    {
        $this->container['amount_eur_display'] = $amount_eur_display;

        return $this;
    }

    /**
     * Gets error_code
     *
     * @return int
     */
    public function getErrorCode()
    {
        return $this->container['error_code'];
    }

    /**
     * Sets error_code
     *
     * @param int $error_code Error code given by PAYCOMET.
     *
     * @return $this
     */
    public function setErrorCode($error_code)
    {
        $this->container['error_code'] = $error_code;

        return $this;
    }

    /**
     * Gets error_description
     *
     * @return string
     */
    public function getErrorDescription()
    {
        return $this->container['error_description'];
    }

    /**
     * Sets error_description
     *
     * @param string $error_description PAYCOMET operation type description.
     *
     * @return $this
     */
    public function setErrorDescription($error_description)
    {
        $this->container['error_description'] = $error_description;

        return $this;
    }

    /**
     * Gets fee_euro
     *
     * @return float
     */
    public function getFeeEuro()
    {
        return $this->container['fee_euro'];
    }

    /**
     * Sets fee_euro
     *
     * @param float $fee_euro PAYCOMET fee for the transaction fixed per operation (in euros)
     *
     * @return $this
     */
    public function setFeeEuro($fee_euro)
    {
        $this->container['fee_euro'] = $fee_euro;

        return $this;
    }

    /**
     * Gets fee_percent
     *
     * @return float
     */
    public function getFeePercent()
    {
        return $this->container['fee_percent'];
    }

    /**
     * Sets fee_percent
     *
     * @param float $fee_percent PAYCOMET fee for the transaction variable per operation (in euros)
     *
     * @return $this
     */
    public function setFeePercent($fee_percent)
    {
        $this->container['fee_percent'] = $fee_percent;

        return $this;
    }

    /**
     * Gets original_ip
     *
     * @return string
     */
    public function getOriginalIp()
    {
        return $this->container['original_ip'];
    }

    /**
     * Sets original_ip
     *
     * @param string $original_ip IP Address of the customer that initiated the payment transaction
     *
     * @return $this
     */
    public function setOriginalIp($original_ip)
    {
        $this->container['original_ip'] = $original_ip;

        return $this;
    }

    /**
     * Gets pan
     *
     * @return string
     */
    public function getPan()
    {
        return $this->container['pan'];
    }

    /**
     * Sets pan
     *
     * @param string $pan Masked credit/debit card
     *
     * @return $this
     */
    public function setPan($pan)
    {
        $this->container['pan'] = $pan;

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
     * Gets merchant_bank
     *
     * @return string
     */
    public function getMerchantBank()
    {
        return $this->container['merchant_bank'];
    }

    /**
     * Sets merchant_bank
     *
     * @param string $merchant_bank Bank of merchant terminal.
     *
     * @return $this
     */
    public function setMerchantBank($merchant_bank)
    {
        $this->container['merchant_bank'] = $merchant_bank;

        return $this;
    }

    /**
     * Gets bic_code
     *
     * @return string
     */
    public function getBicCode()
    {
        return $this->container['bic_code'];
    }

    /**
     * Sets bic_code
     *
     * @param string $bic_code Biccode of the entity by which the transaction was processed.
     *
     * @return $this
     */
    public function setBicCode($bic_code)
    {
        $this->container['bic_code'] = $bic_code;

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
     * Gets card_type
     *
     * @return string
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     *
     * @param string $card_type Type of card. If it can be identified, information on the type of card will be sent (DEBIT, CREDIT, etc). Otherwise, the field will be returned blank.
     *
     * @return $this
     */
    public function setCardType($card_type)
    {
        $this->container['card_type'] = $card_type;

        return $this;
    }

    /**
     * Gets card_category
     *
     * @return string
     */
    public function getCardCategory()
    {
        return $this->container['card_category'];
    }

    /**
     * Sets card_category
     *
     * @param string $card_category Category of card. If it can be identified, information on the category of card will be sent. Otherwise, the field will be returned blank.
     *
     * @return $this
     */
    public function setCardCategory($card_category)
    {
        $this->container['card_category'] = $card_category;

        return $this;
    }

    /**
     * Gets card_brand
     *
     * @return string
     */
    public function getCardBrand()
    {
        return $this->container['card_brand'];
    }

    /**
     * Sets card_brand
     *
     * @param string $card_brand Brand of card. If it can be identified, information on the brand of card will be sent. Otherwise, the field will be returned blank.
     *
     * @return $this
     */
    public function setCardBrand($card_brand)
    {
        $this->container['card_brand'] = $card_brand;

        return $this;
    }

    /**
     * Gets card_country
     *
     * @return string
     */
    public function getCardCountry()
    {
        return $this->container['card_country'];
    }

    /**
     * Sets card_country
     *
     * @param string $card_country Country of the issuer of the card in ISO3 Code (ex.: 724 = Spain). May be left empty.
     *
     * @return $this
     */
    public function setCardCountry($card_country)
    {
        $this->container['card_country'] = $card_country;

        return $this;
    }

    /**
     * Gets secure
     *
     * @return string
     */
    public function getSecure()
    {
        return $this->container['secure'];
    }

    /**
     * Sets secure
     *
     * @param string $secure 0 or 1. Indicates if the transaction is secure.
     *
     * @return $this
     */
    public function setSecure($secure)
    {
        $this->container['secure'] = $secure;

        return $this;
    }

    /**
     * Gets split_id
     *
     * @return int
     */
    public function getSplitId()
    {
        return $this->container['split_id'];
    }

    /**
     * Sets split_id
     *
     * @param int $split_id Split identifier in some operations
     *
     * @return $this
     */
    public function setSplitId($split_id)
    {
        $this->container['split_id'] = $split_id;

        return $this;
    }

    /**
     * Gets issuer_bank
     *
     * @return string
     */
    public function getIssuerBank()
    {
        return $this->container['issuer_bank'];
    }

    /**
     * Sets issuer_bank
     *
     * @param string $issuer_bank Bank of the card
     *
     * @return $this
     */
    public function setIssuerBank($issuer_bank)
    {
        $this->container['issuer_bank'] = $issuer_bank;

        return $this;
    }

    /**
     * Gets auth_code
     *
     * @return string
     */
    public function getAuthCode()
    {
        return $this->container['auth_code'];
    }

    /**
     * Sets auth_code
     *
     * @param string $auth_code Authorization bank code of the transaction (required to execute a return).
     *
     * @return $this
     */
    public function setAuthCode($auth_code)
    {
        $this->container['auth_code'] = $auth_code;

        return $this;
    }

    /**
     * Gets merchant_data
     *
     * @return \Swagger\Client\Model\InlineResponse20016PaymentMerchantData
     */
    public function getMerchantData()
    {
        return $this->container['merchant_data'];
    }

    /**
     * Sets merchant_data
     *
     * @param \Swagger\Client\Model\InlineResponse20016PaymentMerchantData $merchant_data merchant_data
     *
     * @return $this
     */
    public function setMerchantData($merchant_data)
    {
        $this->container['merchant_data'] = $merchant_data;

        return $this;
    }

    /**
     * Gets history
     *
     * @return \Swagger\Client\Model\InlineResponse20016PaymentHistory[]
     */
    public function getHistory()
    {
        return $this->container['history'];
    }

    /**
     * Sets history
     *
     * @param \Swagger\Client\Model\InlineResponse20016PaymentHistory[] $history history
     *
     * @return $this
     */
    public function setHistory($history)
    {
        $this->container['history'] = $history;

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

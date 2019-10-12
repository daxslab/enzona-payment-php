<?php
/**
 * Payload3
 *
 * PHP version 5
 *
 * @category Class
 * @package  daxslab\enzona\payment
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PaymentAPI
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace daxslab\enzona\payment\model;

use \ArrayAccess;
use \daxslab\enzona\payment\ObjectSerializer;

/**
 * Payload3 Class Doc Comment
 *
 * @category Class
 * @package  daxslab\enzona\payment
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Payload3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Payload_3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'funding_source_uuid' => 'string',
        'amount' => 'string',
        'vendor_identity_code' => 'string',
        'description' => 'string',
        'currency' => 'string',
        'payment_password' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'funding_source_uuid' => null,
        'amount' => null,
        'vendor_identity_code' => null,
        'description' => null,
        'currency' => null,
        'payment_password' => null
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
        'funding_source_uuid' => 'funding_source_uuid',
        'amount' => 'amount',
        'vendor_identity_code' => 'vendor_identity_code',
        'description' => 'description',
        'currency' => 'currency',
        'payment_password' => 'payment_password'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'funding_source_uuid' => 'setFundingSourceUuid',
        'amount' => 'setAmount',
        'vendor_identity_code' => 'setVendorIdentityCode',
        'description' => 'setDescription',
        'currency' => 'setCurrency',
        'payment_password' => 'setPaymentPassword'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'funding_source_uuid' => 'getFundingSourceUuid',
        'amount' => 'getAmount',
        'vendor_identity_code' => 'getVendorIdentityCode',
        'description' => 'getDescription',
        'currency' => 'getCurrency',
        'payment_password' => 'getPaymentPassword'
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
        $this->container['funding_source_uuid'] = isset($data['funding_source_uuid']) ? $data['funding_source_uuid'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['vendor_identity_code'] = isset($data['vendor_identity_code']) ? $data['vendor_identity_code'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['payment_password'] = isset($data['payment_password']) ? $data['payment_password'] : null;
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
     * Gets funding_source_uuid
     *
     * @return string
     */
    public function getFundingSourceUuid()
    {
        return $this->container['funding_source_uuid'];
    }

    /**
     * Sets funding_source_uuid
     *
     * @param string $funding_source_uuid funding_source_uuid
     *
     * @return $this
     */
    public function setFundingSourceUuid($funding_source_uuid)
    {
        $this->container['funding_source_uuid'] = $funding_source_uuid;

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
     * @param string $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets vendor_identity_code
     *
     * @return string
     */
    public function getVendorIdentityCode()
    {
        return $this->container['vendor_identity_code'];
    }

    /**
     * Sets vendor_identity_code
     *
     * @param string $vendor_identity_code vendor_identity_code
     *
     * @return $this
     */
    public function setVendorIdentityCode($vendor_identity_code)
    {
        $this->container['vendor_identity_code'] = $vendor_identity_code;

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
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets payment_password
     *
     * @return string
     */
    public function getPaymentPassword()
    {
        return $this->container['payment_password'];
    }

    /**
     * Sets payment_password
     *
     * @param string $payment_password payment_password
     *
     * @return $this
     */
    public function setPaymentPassword($payment_password)
    {
        $this->container['payment_password'] = $payment_password;

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


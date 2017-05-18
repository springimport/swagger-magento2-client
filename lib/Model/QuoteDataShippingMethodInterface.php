<?php
/**
 * QuoteDataShippingMethodInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  SpringImport\Magento2SwaggerApi
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Community
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SpringImport\Magento2SwaggerApi\Model;

use \ArrayAccess;

/**
 * QuoteDataShippingMethodInterface Class Doc Comment
 *
 * @category    Class
 * @description Interface ShippingMethodInterface
 * @package     SpringImport\Magento2SwaggerApi
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QuoteDataShippingMethodInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'quote-data-shipping-method-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'carrierCode' => 'string',
        'methodCode' => 'string',
        'carrierTitle' => 'string',
        'methodTitle' => 'string',
        'amount' => 'float',
        'baseAmount' => 'float',
        'available' => 'bool',
        'extensionAttributes' => '\SpringImport\Magento2SwaggerApi\Model\QuoteDataShippingMethodExtensionInterface',
        'errorMessage' => 'string',
        'priceExclTax' => 'float',
        'priceInclTax' => 'float'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'carrierCode' => 'carrier_code',
        'methodCode' => 'method_code',
        'carrierTitle' => 'carrier_title',
        'methodTitle' => 'method_title',
        'amount' => 'amount',
        'baseAmount' => 'base_amount',
        'available' => 'available',
        'extensionAttributes' => 'extension_attributes',
        'errorMessage' => 'error_message',
        'priceExclTax' => 'price_excl_tax',
        'priceInclTax' => 'price_incl_tax'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'carrierCode' => 'setCarrierCode',
        'methodCode' => 'setMethodCode',
        'carrierTitle' => 'setCarrierTitle',
        'methodTitle' => 'setMethodTitle',
        'amount' => 'setAmount',
        'baseAmount' => 'setBaseAmount',
        'available' => 'setAvailable',
        'extensionAttributes' => 'setExtensionAttributes',
        'errorMessage' => 'setErrorMessage',
        'priceExclTax' => 'setPriceExclTax',
        'priceInclTax' => 'setPriceInclTax'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'carrierCode' => 'getCarrierCode',
        'methodCode' => 'getMethodCode',
        'carrierTitle' => 'getCarrierTitle',
        'methodTitle' => 'getMethodTitle',
        'amount' => 'getAmount',
        'baseAmount' => 'getBaseAmount',
        'available' => 'getAvailable',
        'extensionAttributes' => 'getExtensionAttributes',
        'errorMessage' => 'getErrorMessage',
        'priceExclTax' => 'getPriceExclTax',
        'priceInclTax' => 'getPriceInclTax'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['carrierCode'] = isset($data['carrierCode']) ? $data['carrierCode'] : null;
        $this->container['methodCode'] = isset($data['methodCode']) ? $data['methodCode'] : null;
        $this->container['carrierTitle'] = isset($data['carrierTitle']) ? $data['carrierTitle'] : null;
        $this->container['methodTitle'] = isset($data['methodTitle']) ? $data['methodTitle'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['baseAmount'] = isset($data['baseAmount']) ? $data['baseAmount'] : null;
        $this->container['available'] = isset($data['available']) ? $data['available'] : null;
        $this->container['extensionAttributes'] = isset($data['extensionAttributes']) ? $data['extensionAttributes'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
        $this->container['priceExclTax'] = isset($data['priceExclTax']) ? $data['priceExclTax'] : null;
        $this->container['priceInclTax'] = isset($data['priceInclTax']) ? $data['priceInclTax'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['carrierCode'] === null) {
            $invalid_properties[] = "'carrierCode' can't be null";
        }
        if ($this->container['methodCode'] === null) {
            $invalid_properties[] = "'methodCode' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalid_properties[] = "'amount' can't be null";
        }
        if ($this->container['baseAmount'] === null) {
            $invalid_properties[] = "'baseAmount' can't be null";
        }
        if ($this->container['available'] === null) {
            $invalid_properties[] = "'available' can't be null";
        }
        if ($this->container['errorMessage'] === null) {
            $invalid_properties[] = "'errorMessage' can't be null";
        }
        if ($this->container['priceExclTax'] === null) {
            $invalid_properties[] = "'priceExclTax' can't be null";
        }
        if ($this->container['priceInclTax'] === null) {
            $invalid_properties[] = "'priceInclTax' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['carrierCode'] === null) {
            return false;
        }
        if ($this->container['methodCode'] === null) {
            return false;
        }
        if ($this->container['amount'] === null) {
            return false;
        }
        if ($this->container['baseAmount'] === null) {
            return false;
        }
        if ($this->container['available'] === null) {
            return false;
        }
        if ($this->container['errorMessage'] === null) {
            return false;
        }
        if ($this->container['priceExclTax'] === null) {
            return false;
        }
        if ($this->container['priceInclTax'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets carrierCode
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->container['carrierCode'];
    }

    /**
     * Sets carrierCode
     * @param string $carrierCode Shipping carrier code.
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        $this->container['carrierCode'] = $carrierCode;

        return $this;
    }

    /**
     * Gets methodCode
     * @return string
     */
    public function getMethodCode()
    {
        return $this->container['methodCode'];
    }

    /**
     * Sets methodCode
     * @param string $methodCode Shipping method code.
     * @return $this
     */
    public function setMethodCode($methodCode)
    {
        $this->container['methodCode'] = $methodCode;

        return $this;
    }

    /**
     * Gets carrierTitle
     * @return string
     */
    public function getCarrierTitle()
    {
        return $this->container['carrierTitle'];
    }

    /**
     * Sets carrierTitle
     * @param string $carrierTitle Shipping carrier title. Otherwise, null.
     * @return $this
     */
    public function setCarrierTitle($carrierTitle)
    {
        $this->container['carrierTitle'] = $carrierTitle;

        return $this;
    }

    /**
     * Gets methodTitle
     * @return string
     */
    public function getMethodTitle()
    {
        return $this->container['methodTitle'];
    }

    /**
     * Sets methodTitle
     * @param string $methodTitle Shipping method title. Otherwise, null.
     * @return $this
     */
    public function setMethodTitle($methodTitle)
    {
        $this->container['methodTitle'] = $methodTitle;

        return $this;
    }

    /**
     * Gets amount
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param float $amount Shipping amount in store currency.
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets baseAmount
     * @return float
     */
    public function getBaseAmount()
    {
        return $this->container['baseAmount'];
    }

    /**
     * Sets baseAmount
     * @param float $baseAmount Shipping amount in base currency.
     * @return $this
     */
    public function setBaseAmount($baseAmount)
    {
        $this->container['baseAmount'] = $baseAmount;

        return $this;
    }

    /**
     * Gets available
     * @return bool
     */
    public function getAvailable()
    {
        return $this->container['available'];
    }

    /**
     * Sets available
     * @param bool $available The value of the availability flag for the current shipping method.
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->container['available'] = $available;

        return $this;
    }

    /**
     * Gets extensionAttributes
     * @return \SpringImport\Magento2SwaggerApi\Model\QuoteDataShippingMethodExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     * @param \SpringImport\Magento2SwaggerApi\Model\QuoteDataShippingMethodExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes($extensionAttributes)
    {
        $this->container['extensionAttributes'] = $extensionAttributes;

        return $this;
    }

    /**
     * Gets errorMessage
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
     * Sets errorMessage
     * @param string $errorMessage Shipping Error message.
     * @return $this
     */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;

        return $this;
    }

    /**
     * Gets priceExclTax
     * @return float
     */
    public function getPriceExclTax()
    {
        return $this->container['priceExclTax'];
    }

    /**
     * Sets priceExclTax
     * @param float $priceExclTax Shipping price excl tax.
     * @return $this
     */
    public function setPriceExclTax($priceExclTax)
    {
        $this->container['priceExclTax'] = $priceExclTax;

        return $this;
    }

    /**
     * Gets priceInclTax
     * @return float
     */
    public function getPriceInclTax()
    {
        return $this->container['priceInclTax'];
    }

    /**
     * Sets priceInclTax
     * @param float $priceInclTax Shipping price incl tax.
     * @return $this
     */
    public function setPriceInclTax($priceInclTax)
    {
        $this->container['priceInclTax'] = $priceInclTax;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\SpringImport\Magento2SwaggerApi\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\SpringImport\Magento2SwaggerApi\ObjectSerializer::sanitizeForSerialization($this));
    }
}



<?php
/**
 * QuoteDataTotalsAdditionalDataInterface
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
 * QuoteDataTotalsAdditionalDataInterface Class Doc Comment
 *
 * @category    Class
 * @description Additional data for totals collection.
 * @package     SpringImport\Magento2SwaggerApi
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QuoteDataTotalsAdditionalDataInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'quote-data-totals-additional-data-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'extensionAttributes' => '\SpringImport\Magento2SwaggerApi\Model\QuoteDataTotalsAdditionalDataExtensionInterface',
        'customAttributes' => '\SpringImport\Magento2SwaggerApi\Model\FrameworkAttributeInterface[]'
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
        'extensionAttributes' => 'extension_attributes',
        'customAttributes' => 'custom_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'extensionAttributes' => 'setExtensionAttributes',
        'customAttributes' => 'setCustomAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'extensionAttributes' => 'getExtensionAttributes',
        'customAttributes' => 'getCustomAttributes'
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
        $this->container['extensionAttributes'] = isset($data['extensionAttributes']) ? $data['extensionAttributes'] : null;
        $this->container['customAttributes'] = isset($data['customAttributes']) ? $data['customAttributes'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets extensionAttributes
     * @return \SpringImport\Magento2SwaggerApi\Model\QuoteDataTotalsAdditionalDataExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     * @param \SpringImport\Magento2SwaggerApi\Model\QuoteDataTotalsAdditionalDataExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes($extensionAttributes)
    {
        $this->container['extensionAttributes'] = $extensionAttributes;

        return $this;
    }

    /**
     * Gets customAttributes
     * @return \SpringImport\Magento2SwaggerApi\Model\FrameworkAttributeInterface[]
     */
    public function getCustomAttributes()
    {
        return $this->container['customAttributes'];
    }

    /**
     * Sets customAttributes
     * @param \SpringImport\Magento2SwaggerApi\Model\FrameworkAttributeInterface[] $customAttributes Custom attributes values.
     * @return $this
     */
    public function setCustomAttributes($customAttributes)
    {
        $this->container['customAttributes'] = $customAttributes;

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



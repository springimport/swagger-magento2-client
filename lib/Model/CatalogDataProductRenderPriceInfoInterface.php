<?php
/**
 * CatalogDataProductRenderPriceInfoInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  SpringImport\Swagger\Magento2\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Commerce for B2B 2.2
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SpringImport\Swagger\Magento2\Client\Model;

use \ArrayAccess;

/**
 * CatalogDataProductRenderPriceInfoInterface Class Doc Comment
 *
 * @category    Class
 * @description Price interface.
 * @package     SpringImport\Swagger\Magento2\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CatalogDataProductRenderPriceInfoInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'catalog-data-product-render-price-info-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'finalPrice' => 'float',
        'maxPrice' => 'float',
        'maxRegularPrice' => 'float',
        'minimalRegularPrice' => 'float',
        'specialPrice' => 'float',
        'minimalPrice' => 'float',
        'regularPrice' => 'float',
        'formattedPrices' => '\SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductRenderFormattedPriceInfoInterface',
        'extensionAttributes' => '\SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductRenderPriceInfoExtensionInterface'
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
        'finalPrice' => 'final_price',
        'maxPrice' => 'max_price',
        'maxRegularPrice' => 'max_regular_price',
        'minimalRegularPrice' => 'minimal_regular_price',
        'specialPrice' => 'special_price',
        'minimalPrice' => 'minimal_price',
        'regularPrice' => 'regular_price',
        'formattedPrices' => 'formatted_prices',
        'extensionAttributes' => 'extension_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'finalPrice' => 'setFinalPrice',
        'maxPrice' => 'setMaxPrice',
        'maxRegularPrice' => 'setMaxRegularPrice',
        'minimalRegularPrice' => 'setMinimalRegularPrice',
        'specialPrice' => 'setSpecialPrice',
        'minimalPrice' => 'setMinimalPrice',
        'regularPrice' => 'setRegularPrice',
        'formattedPrices' => 'setFormattedPrices',
        'extensionAttributes' => 'setExtensionAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'finalPrice' => 'getFinalPrice',
        'maxPrice' => 'getMaxPrice',
        'maxRegularPrice' => 'getMaxRegularPrice',
        'minimalRegularPrice' => 'getMinimalRegularPrice',
        'specialPrice' => 'getSpecialPrice',
        'minimalPrice' => 'getMinimalPrice',
        'regularPrice' => 'getRegularPrice',
        'formattedPrices' => 'getFormattedPrices',
        'extensionAttributes' => 'getExtensionAttributes'
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
        $this->container['finalPrice'] = isset($data['finalPrice']) ? $data['finalPrice'] : null;
        $this->container['maxPrice'] = isset($data['maxPrice']) ? $data['maxPrice'] : null;
        $this->container['maxRegularPrice'] = isset($data['maxRegularPrice']) ? $data['maxRegularPrice'] : null;
        $this->container['minimalRegularPrice'] = isset($data['minimalRegularPrice']) ? $data['minimalRegularPrice'] : null;
        $this->container['specialPrice'] = isset($data['specialPrice']) ? $data['specialPrice'] : null;
        $this->container['minimalPrice'] = isset($data['minimalPrice']) ? $data['minimalPrice'] : null;
        $this->container['regularPrice'] = isset($data['regularPrice']) ? $data['regularPrice'] : null;
        $this->container['formattedPrices'] = isset($data['formattedPrices']) ? $data['formattedPrices'] : null;
        $this->container['extensionAttributes'] = isset($data['extensionAttributes']) ? $data['extensionAttributes'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['finalPrice'] === null) {
            $invalid_properties[] = "'finalPrice' can't be null";
        }
        if ($this->container['maxPrice'] === null) {
            $invalid_properties[] = "'maxPrice' can't be null";
        }
        if ($this->container['maxRegularPrice'] === null) {
            $invalid_properties[] = "'maxRegularPrice' can't be null";
        }
        if ($this->container['minimalRegularPrice'] === null) {
            $invalid_properties[] = "'minimalRegularPrice' can't be null";
        }
        if ($this->container['specialPrice'] === null) {
            $invalid_properties[] = "'specialPrice' can't be null";
        }
        if ($this->container['minimalPrice'] === null) {
            $invalid_properties[] = "'minimalPrice' can't be null";
        }
        if ($this->container['regularPrice'] === null) {
            $invalid_properties[] = "'regularPrice' can't be null";
        }
        if ($this->container['formattedPrices'] === null) {
            $invalid_properties[] = "'formattedPrices' can't be null";
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

        if ($this->container['finalPrice'] === null) {
            return false;
        }
        if ($this->container['maxPrice'] === null) {
            return false;
        }
        if ($this->container['maxRegularPrice'] === null) {
            return false;
        }
        if ($this->container['minimalRegularPrice'] === null) {
            return false;
        }
        if ($this->container['specialPrice'] === null) {
            return false;
        }
        if ($this->container['minimalPrice'] === null) {
            return false;
        }
        if ($this->container['regularPrice'] === null) {
            return false;
        }
        if ($this->container['formattedPrices'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets finalPrice
     * @return float
     */
    public function getFinalPrice()
    {
        return $this->container['finalPrice'];
    }

    /**
     * Sets finalPrice
     * @param float $finalPrice Final price
     * @return $this
     */
    public function setFinalPrice($finalPrice)
    {
        $this->container['finalPrice'] = $finalPrice;

        return $this;
    }

    /**
     * Gets maxPrice
     * @return float
     */
    public function getMaxPrice()
    {
        return $this->container['maxPrice'];
    }

    /**
     * Sets maxPrice
     * @param float $maxPrice Max price of a product
     * @return $this
     */
    public function setMaxPrice($maxPrice)
    {
        $this->container['maxPrice'] = $maxPrice;

        return $this;
    }

    /**
     * Gets maxRegularPrice
     * @return float
     */
    public function getMaxRegularPrice()
    {
        return $this->container['maxRegularPrice'];
    }

    /**
     * Sets maxRegularPrice
     * @param float $maxRegularPrice Max regular price
     * @return $this
     */
    public function setMaxRegularPrice($maxRegularPrice)
    {
        $this->container['maxRegularPrice'] = $maxRegularPrice;

        return $this;
    }

    /**
     * Gets minimalRegularPrice
     * @return float
     */
    public function getMinimalRegularPrice()
    {
        return $this->container['minimalRegularPrice'];
    }

    /**
     * Sets minimalRegularPrice
     * @param float $minimalRegularPrice Minimal regular price
     * @return $this
     */
    public function setMinimalRegularPrice($minimalRegularPrice)
    {
        $this->container['minimalRegularPrice'] = $minimalRegularPrice;

        return $this;
    }

    /**
     * Gets specialPrice
     * @return float
     */
    public function getSpecialPrice()
    {
        return $this->container['specialPrice'];
    }

    /**
     * Sets specialPrice
     * @param float $specialPrice Special price
     * @return $this
     */
    public function setSpecialPrice($specialPrice)
    {
        $this->container['specialPrice'] = $specialPrice;

        return $this;
    }

    /**
     * Gets minimalPrice
     * @return float
     */
    public function getMinimalPrice()
    {
        return $this->container['minimalPrice'];
    }

    /**
     * Sets minimalPrice
     * @param float $minimalPrice
     * @return $this
     */
    public function setMinimalPrice($minimalPrice)
    {
        $this->container['minimalPrice'] = $minimalPrice;

        return $this;
    }

    /**
     * Gets regularPrice
     * @return float
     */
    public function getRegularPrice()
    {
        return $this->container['regularPrice'];
    }

    /**
     * Sets regularPrice
     * @param float $regularPrice Regular price
     * @return $this
     */
    public function setRegularPrice($regularPrice)
    {
        $this->container['regularPrice'] = $regularPrice;

        return $this;
    }

    /**
     * Gets formattedPrices
     * @return \SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductRenderFormattedPriceInfoInterface
     */
    public function getFormattedPrices()
    {
        return $this->container['formattedPrices'];
    }

    /**
     * Sets formattedPrices
     * @param \SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductRenderFormattedPriceInfoInterface $formattedPrices
     * @return $this
     */
    public function setFormattedPrices($formattedPrices)
    {
        $this->container['formattedPrices'] = $formattedPrices;

        return $this;
    }

    /**
     * Gets extensionAttributes
     * @return \SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductRenderPriceInfoExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     * @param \SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductRenderPriceInfoExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes($extensionAttributes)
    {
        $this->container['extensionAttributes'] = $extensionAttributes;

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
            return json_encode(\SpringImport\Swagger\Magento2\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\SpringImport\Swagger\Magento2\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


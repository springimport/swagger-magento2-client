<?php
/**
 * SalesDataShipmentCommentInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  SpringImport\Swagger\Magento2\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Enterprise
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

namespace SpringImport\Swagger\Magento2\Client\Model;

use \ArrayAccess;

/**
 * SalesDataShipmentCommentInterface Class Doc Comment
 *
 * @category    Class
 * @description Shipment comment interface. A shipment is a delivery package that contains products. A shipment document accompanies the shipment. This document lists the products and their quantities in the delivery package. A shipment document can contain comments.
 * @package     SpringImport\Swagger\Magento2\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SalesDataShipmentCommentInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'sales-data-shipment-comment-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'isCustomerNotified' => 'int',
        'parentId' => 'int',
        'extensionAttributes' => '\SpringImport\Swagger\Magento2\Client\Model\SalesDataShipmentCommentExtensionInterface',
        'comment' => 'string',
        'isVisibleOnFront' => 'int',
        'createdAt' => 'string',
        'entityId' => 'int'
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
        'isCustomerNotified' => 'is_customer_notified',
        'parentId' => 'parent_id',
        'extensionAttributes' => 'extension_attributes',
        'comment' => 'comment',
        'isVisibleOnFront' => 'is_visible_on_front',
        'createdAt' => 'created_at',
        'entityId' => 'entity_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'isCustomerNotified' => 'setIsCustomerNotified',
        'parentId' => 'setParentId',
        'extensionAttributes' => 'setExtensionAttributes',
        'comment' => 'setComment',
        'isVisibleOnFront' => 'setIsVisibleOnFront',
        'createdAt' => 'setCreatedAt',
        'entityId' => 'setEntityId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'isCustomerNotified' => 'getIsCustomerNotified',
        'parentId' => 'getParentId',
        'extensionAttributes' => 'getExtensionAttributes',
        'comment' => 'getComment',
        'isVisibleOnFront' => 'getIsVisibleOnFront',
        'createdAt' => 'getCreatedAt',
        'entityId' => 'getEntityId'
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
        $this->container['isCustomerNotified'] = isset($data['isCustomerNotified']) ? $data['isCustomerNotified'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['extensionAttributes'] = isset($data['extensionAttributes']) ? $data['extensionAttributes'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['isVisibleOnFront'] = isset($data['isVisibleOnFront']) ? $data['isVisibleOnFront'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['entityId'] = isset($data['entityId']) ? $data['entityId'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['isCustomerNotified'] === null) {
            $invalid_properties[] = "'isCustomerNotified' can't be null";
        }
        if ($this->container['parentId'] === null) {
            $invalid_properties[] = "'parentId' can't be null";
        }
        if ($this->container['comment'] === null) {
            $invalid_properties[] = "'comment' can't be null";
        }
        if ($this->container['isVisibleOnFront'] === null) {
            $invalid_properties[] = "'isVisibleOnFront' can't be null";
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

        if ($this->container['isCustomerNotified'] === null) {
            return false;
        }
        if ($this->container['parentId'] === null) {
            return false;
        }
        if ($this->container['comment'] === null) {
            return false;
        }
        if ($this->container['isVisibleOnFront'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets isCustomerNotified
     * @return int
     */
    public function getIsCustomerNotified()
    {
        return $this->container['isCustomerNotified'];
    }

    /**
     * Sets isCustomerNotified
     * @param int $isCustomerNotified Is-customer-notified flag value.
     * @return $this
     */
    public function setIsCustomerNotified($isCustomerNotified)
    {
        $this->container['isCustomerNotified'] = $isCustomerNotified;

        return $this;
    }

    /**
     * Gets parentId
     * @return int
     */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
     * Sets parentId
     * @param int $parentId Parent ID.
     * @return $this
     */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;

        return $this;
    }

    /**
     * Gets extensionAttributes
     * @return \SpringImport\Swagger\Magento2\Client\Model\SalesDataShipmentCommentExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     * @param \SpringImport\Swagger\Magento2\Client\Model\SalesDataShipmentCommentExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes($extensionAttributes)
    {
        $this->container['extensionAttributes'] = $extensionAttributes;

        return $this;
    }

    /**
     * Gets comment
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     * @param string $comment Comment.
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets isVisibleOnFront
     * @return int
     */
    public function getIsVisibleOnFront()
    {
        return $this->container['isVisibleOnFront'];
    }

    /**
     * Sets isVisibleOnFront
     * @param int $isVisibleOnFront Is-visible-on-storefront flag value.
     * @return $this
     */
    public function setIsVisibleOnFront($isVisibleOnFront)
    {
        $this->container['isVisibleOnFront'] = $isVisibleOnFront;

        return $this;
    }

    /**
     * Gets createdAt
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     * @param string $createdAt Created-at timestamp.
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets entityId
     * @return int
     */
    public function getEntityId()
    {
        return $this->container['entityId'];
    }

    /**
     * Sets entityId
     * @param int $entityId Invoice ID.
     * @return $this
     */
    public function setEntityId($entityId)
    {
        $this->container['entityId'] = $entityId;

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



<?php
/**
 * PublicObjectSearchRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Tickets
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Tickets
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v3
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Crm\Tickets\Model;

use \ArrayAccess;
use \HubSpot\Client\Crm\Tickets\ObjectSerializer;

/**
 * PublicObjectSearchRequest Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Tickets
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PublicObjectSearchRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PublicObjectSearchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'filter_groups' => '\HubSpot\Client\Crm\Tickets\Model\FilterGroup[]',
        'sorts' => 'string[]',
        'query' => 'string',
        'properties' => 'string[]',
        'limit' => 'int',
        'after' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'filter_groups' => null,
        'sorts' => null,
        'query' => null,
        'properties' => null,
        'limit' => null,
        'after' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'filter_groups' => 'filterGroups',
        'sorts' => 'sorts',
        'query' => 'query',
        'properties' => 'properties',
        'limit' => 'limit',
        'after' => 'after'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'filter_groups' => 'setFilterGroups',
        'sorts' => 'setSorts',
        'query' => 'setQuery',
        'properties' => 'setProperties',
        'limit' => 'setLimit',
        'after' => 'setAfter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'filter_groups' => 'getFilterGroups',
        'sorts' => 'getSorts',
        'query' => 'getQuery',
        'properties' => 'getProperties',
        'limit' => 'getLimit',
        'after' => 'getAfter'
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
        return self::$openAPIModelName;
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
        $this->container['filter_groups'] = isset($data['filter_groups']) ? $data['filter_groups'] : null;
        $this->container['sorts'] = isset($data['sorts']) ? $data['sorts'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['after'] = isset($data['after']) ? $data['after'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['filter_groups'] === null) {
            $invalidProperties[] = "'filter_groups' can't be null";
        }
        if ($this->container['sorts'] === null) {
            $invalidProperties[] = "'sorts' can't be null";
        }
        if ($this->container['properties'] === null) {
            $invalidProperties[] = "'properties' can't be null";
        }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
        if ($this->container['after'] === null) {
            $invalidProperties[] = "'after' can't be null";
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
     * Gets filter_groups
     *
     * @return \HubSpot\Client\Crm\Tickets\Model\FilterGroup[]
     */
    public function getFilterGroups()
    {
        return $this->container['filter_groups'];
    }

    /**
     * Sets filter_groups
     *
     * @param \HubSpot\Client\Crm\Tickets\Model\FilterGroup[] $filter_groups filter_groups
     *
     * @return $this
     */
    public function setFilterGroups($filter_groups)
    {
        $this->container['filter_groups'] = $filter_groups;

        return $this;
    }

    /**
     * Gets sorts
     *
     * @return string[]
     */
    public function getSorts()
    {
        return $this->container['sorts'];
    }

    /**
     * Sets sorts
     *
     * @param string[] $sorts sorts
     *
     * @return $this
     */
    public function setSorts($sorts)
    {
        $this->container['sorts'] = $sorts;

        return $this;
    }

    /**
     * Gets query
     *
     * @return string|null
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param string|null $query query
     *
     * @return $this
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return string[]
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param string[] $properties properties
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return int
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int $limit limit
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets after
     *
     * @return int
     */
    public function getAfter()
    {
        return $this->container['after'];
    }

    /**
     * Sets after
     *
     * @param int $after after
     *
     * @return $this
     */
    public function setAfter($after)
    {
        $this->container['after'] = $after;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



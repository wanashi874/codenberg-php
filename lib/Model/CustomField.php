<?php
/**
 * CustomField
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * コーデンベルク APIリファレンス
 *
 * 印刷APIプラットフォーム「[コーデンベルク](https://codenberg.io/)」はさまざまなシステムと連携することができるように、WebAPIを公開しています。コーデンベルク APIを使って、印刷物の注文はもちろん、テンプレートの登録や可変領域の設定ができます。コーデンベルク APIは、RESTfulな設計なのでかんたんにシステム連携できます。
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * CustomField Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CustomField implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CustomField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'field_type' => 'string',
        'default_value' => 'string',
        'height' => 'float',
        'width' => 'float',
        'x' => 'float',
        'y' => 'float',
        'rotate' => 'float',
        'page' => 'int',
        'is_background' => 'bool',
        'color_c' => 'int',
        'color_m' => 'int',
        'color_y' => 'int',
        'color_k' => 'int',
        'font' => '\Swagger\Client\Model\CustomFieldFont',
        'max_length' => 'int',
        'text_align' => 'string',
        'text_size' => 'int',
        'tracking' => 'int',
        'writing_mode' => 'string',
        'z_index' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'name' => null,
        'field_type' => null,
        'default_value' => null,
        'height' => null,
        'width' => null,
        'x' => null,
        'y' => null,
        'rotate' => null,
        'page' => 'int64',
        'is_background' => null,
        'color_c' => 'int64',
        'color_m' => 'int64',
        'color_y' => 'int64',
        'color_k' => 'int64',
        'font' => null,
        'max_length' => 'int64',
        'text_align' => null,
        'text_size' => 'int64',
        'tracking' => 'int64',
        'writing_mode' => null,
        'z_index' => 'int64'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'field_type' => 'field_type',
        'default_value' => 'default_value',
        'height' => 'height',
        'width' => 'width',
        'x' => 'x',
        'y' => 'y',
        'rotate' => 'rotate',
        'page' => 'page',
        'is_background' => 'is_background',
        'color_c' => 'color_c',
        'color_m' => 'color_m',
        'color_y' => 'color_y',
        'color_k' => 'color_k',
        'font' => 'font',
        'max_length' => 'max_length',
        'text_align' => 'text_align',
        'text_size' => 'text_size',
        'tracking' => 'tracking',
        'writing_mode' => 'writing_mode',
        'z_index' => 'z_index'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'field_type' => 'setFieldType',
        'default_value' => 'setDefaultValue',
        'height' => 'setHeight',
        'width' => 'setWidth',
        'x' => 'setX',
        'y' => 'setY',
        'rotate' => 'setRotate',
        'page' => 'setPage',
        'is_background' => 'setIsBackground',
        'color_c' => 'setColorC',
        'color_m' => 'setColorM',
        'color_y' => 'setColorY',
        'color_k' => 'setColorK',
        'font' => 'setFont',
        'max_length' => 'setMaxLength',
        'text_align' => 'setTextAlign',
        'text_size' => 'setTextSize',
        'tracking' => 'setTracking',
        'writing_mode' => 'setWritingMode',
        'z_index' => 'setZIndex'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'field_type' => 'getFieldType',
        'default_value' => 'getDefaultValue',
        'height' => 'getHeight',
        'width' => 'getWidth',
        'x' => 'getX',
        'y' => 'getY',
        'rotate' => 'getRotate',
        'page' => 'getPage',
        'is_background' => 'getIsBackground',
        'color_c' => 'getColorC',
        'color_m' => 'getColorM',
        'color_y' => 'getColorY',
        'color_k' => 'getColorK',
        'font' => 'getFont',
        'max_length' => 'getMaxLength',
        'text_align' => 'getTextAlign',
        'text_size' => 'getTextSize',
        'tracking' => 'getTracking',
        'writing_mode' => 'getWritingMode',
        'z_index' => 'getZIndex'
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

    const FIELD_TYPE_TEXT = 'text';
    const FIELD_TYPE_IMAGE = 'image';
    const TEXT_ALIGN_RIGHT = 'right';
    const TEXT_ALIGN_CENTER = 'center';
    const TEXT_ALIGN_LEFT = 'left';
    const TEXT_ALIGN_JUSTIFY = 'justify';
    const WRITING_MODE_HORIZONTAL_TB = 'horizontal_tb';
    const WRITING_MODE_VERTICAL_RL = 'vertical_rl';
    const WRITING_MODE_VERTICAL_LR = 'vertical_lr';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFieldTypeAllowableValues()
    {
        return [
            self::FIELD_TYPE_TEXT,
            self::FIELD_TYPE_IMAGE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTextAlignAllowableValues()
    {
        return [
            self::TEXT_ALIGN_RIGHT,
            self::TEXT_ALIGN_CENTER,
            self::TEXT_ALIGN_LEFT,
            self::TEXT_ALIGN_JUSTIFY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getWritingModeAllowableValues()
    {
        return [
            self::WRITING_MODE_HORIZONTAL_TB,
            self::WRITING_MODE_VERTICAL_RL,
            self::WRITING_MODE_VERTICAL_LR,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['field_type'] = isset($data['field_type']) ? $data['field_type'] : null;
        $this->container['default_value'] = isset($data['default_value']) ? $data['default_value'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['x'] = isset($data['x']) ? $data['x'] : null;
        $this->container['y'] = isset($data['y']) ? $data['y'] : null;
        $this->container['rotate'] = isset($data['rotate']) ? $data['rotate'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['is_background'] = isset($data['is_background']) ? $data['is_background'] : null;
        $this->container['color_c'] = isset($data['color_c']) ? $data['color_c'] : null;
        $this->container['color_m'] = isset($data['color_m']) ? $data['color_m'] : null;
        $this->container['color_y'] = isset($data['color_y']) ? $data['color_y'] : null;
        $this->container['color_k'] = isset($data['color_k']) ? $data['color_k'] : null;
        $this->container['font'] = isset($data['font']) ? $data['font'] : null;
        $this->container['max_length'] = isset($data['max_length']) ? $data['max_length'] : null;
        $this->container['text_align'] = isset($data['text_align']) ? $data['text_align'] : null;
        $this->container['text_size'] = isset($data['text_size']) ? $data['text_size'] : null;
        $this->container['tracking'] = isset($data['tracking']) ? $data['tracking'] : null;
        $this->container['writing_mode'] = isset($data['writing_mode']) ? $data['writing_mode'] : null;
        $this->container['z_index'] = isset($data['z_index']) ? $data['z_index'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getFieldTypeAllowableValues();
        if (!in_array($this->container['field_type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'field_type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getTextAlignAllowableValues();
        if (!in_array($this->container['text_align'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'text_align', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getWritingModeAllowableValues();
        if (!in_array($this->container['writing_mode'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'writing_mode', must be one of '%s'",
                implode("', '", $allowed_values)
            );
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

        $allowed_values = $this->getFieldTypeAllowableValues();
        if (!in_array($this->container['field_type'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getTextAlignAllowableValues();
        if (!in_array($this->container['text_align'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getWritingModeAllowableValues();
        if (!in_array($this->container['writing_mode'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets field_type
     * @return string
     */
    public function getFieldType()
    {
        return $this->container['field_type'];
    }

    /**
     * Sets field_type
     * @param string $field_type
     * @return $this
     */
    public function setFieldType($field_type)
    {
        $allowed_values = $this->getFieldTypeAllowableValues();
        if (!is_null($field_type) && !in_array($field_type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'field_type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['field_type'] = $field_type;

        return $this;
    }

    /**
     * Gets default_value
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->container['default_value'];
    }

    /**
     * Sets default_value
     * @param string $default_value
     * @return $this
     */
    public function setDefaultValue($default_value)
    {
        $this->container['default_value'] = $default_value;

        return $this;
    }

    /**
     * Gets height
     * @return float
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     * @param float $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets width
     * @return float
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     * @param float $width
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets x
     * @return float
     */
    public function getX()
    {
        return $this->container['x'];
    }

    /**
     * Sets x
     * @param float $x
     * @return $this
     */
    public function setX($x)
    {
        $this->container['x'] = $x;

        return $this;
    }

    /**
     * Gets y
     * @return float
     */
    public function getY()
    {
        return $this->container['y'];
    }

    /**
     * Sets y
     * @param float $y
     * @return $this
     */
    public function setY($y)
    {
        $this->container['y'] = $y;

        return $this;
    }

    /**
     * Gets rotate
     * @return float
     */
    public function getRotate()
    {
        return $this->container['rotate'];
    }

    /**
     * Sets rotate
     * @param float $rotate
     * @return $this
     */
    public function setRotate($rotate)
    {
        $this->container['rotate'] = $rotate;

        return $this;
    }

    /**
     * Gets page
     * @return int
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     * @param int $page
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets is_background
     * @return bool
     */
    public function getIsBackground()
    {
        return $this->container['is_background'];
    }

    /**
     * Sets is_background
     * @param bool $is_background
     * @return $this
     */
    public function setIsBackground($is_background)
    {
        $this->container['is_background'] = $is_background;

        return $this;
    }

    /**
     * Gets color_c
     * @return int
     */
    public function getColorC()
    {
        return $this->container['color_c'];
    }

    /**
     * Sets color_c
     * @param int $color_c
     * @return $this
     */
    public function setColorC($color_c)
    {
        $this->container['color_c'] = $color_c;

        return $this;
    }

    /**
     * Gets color_m
     * @return int
     */
    public function getColorM()
    {
        return $this->container['color_m'];
    }

    /**
     * Sets color_m
     * @param int $color_m
     * @return $this
     */
    public function setColorM($color_m)
    {
        $this->container['color_m'] = $color_m;

        return $this;
    }

    /**
     * Gets color_y
     * @return int
     */
    public function getColorY()
    {
        return $this->container['color_y'];
    }

    /**
     * Sets color_y
     * @param int $color_y
     * @return $this
     */
    public function setColorY($color_y)
    {
        $this->container['color_y'] = $color_y;

        return $this;
    }

    /**
     * Gets color_k
     * @return int
     */
    public function getColorK()
    {
        return $this->container['color_k'];
    }

    /**
     * Sets color_k
     * @param int $color_k
     * @return $this
     */
    public function setColorK($color_k)
    {
        $this->container['color_k'] = $color_k;

        return $this;
    }

    /**
     * Gets font
     * @return \Swagger\Client\Model\CustomFieldFont
     */
    public function getFont()
    {
        return $this->container['font'];
    }

    /**
     * Sets font
     * @param \Swagger\Client\Model\CustomFieldFont $font
     * @return $this
     */
    public function setFont($font)
    {
        $this->container['font'] = $font;

        return $this;
    }

    /**
     * Gets max_length
     * @return int
     */
    public function getMaxLength()
    {
        return $this->container['max_length'];
    }

    /**
     * Sets max_length
     * @param int $max_length
     * @return $this
     */
    public function setMaxLength($max_length)
    {
        $this->container['max_length'] = $max_length;

        return $this;
    }

    /**
     * Gets text_align
     * @return string
     */
    public function getTextAlign()
    {
        return $this->container['text_align'];
    }

    /**
     * Sets text_align
     * @param string $text_align
     * @return $this
     */
    public function setTextAlign($text_align)
    {
        $allowed_values = $this->getTextAlignAllowableValues();
        if (!is_null($text_align) && !in_array($text_align, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'text_align', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['text_align'] = $text_align;

        return $this;
    }

    /**
     * Gets text_size
     * @return int
     */
    public function getTextSize()
    {
        return $this->container['text_size'];
    }

    /**
     * Sets text_size
     * @param int $text_size
     * @return $this
     */
    public function setTextSize($text_size)
    {
        $this->container['text_size'] = $text_size;

        return $this;
    }

    /**
     * Gets tracking
     * @return int
     */
    public function getTracking()
    {
        return $this->container['tracking'];
    }

    /**
     * Sets tracking
     * @param int $tracking
     * @return $this
     */
    public function setTracking($tracking)
    {
        $this->container['tracking'] = $tracking;

        return $this;
    }

    /**
     * Gets writing_mode
     * @return string
     */
    public function getWritingMode()
    {
        return $this->container['writing_mode'];
    }

    /**
     * Sets writing_mode
     * @param string $writing_mode
     * @return $this
     */
    public function setWritingMode($writing_mode)
    {
        $allowed_values = $this->getWritingModeAllowableValues();
        if (!is_null($writing_mode) && !in_array($writing_mode, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'writing_mode', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['writing_mode'] = $writing_mode;

        return $this;
    }

    /**
     * Gets z_index
     * @return int
     */
    public function getZIndex()
    {
        return $this->container['z_index'];
    }

    /**
     * Sets z_index
     * @param int $z_index
     * @return $this
     */
    public function setZIndex($z_index)
    {
        $this->container['z_index'] = $z_index;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}



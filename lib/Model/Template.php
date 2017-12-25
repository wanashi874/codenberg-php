<?php
/**
 * Template
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
 * Template Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Template implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Template';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'keywords' => 'string',
        'comment' => 'string',
        'thumb' => '\Swagger\Client\Model\TemplateThumb',
        'pdf' => 'string',
        'page_count' => 'int',
        'selected_paper' => '\Swagger\Client\Model\Paper',
        'moq' => 'int',
        'spq' => 'int',
        'lot_price' => '\Swagger\Client\Model\LotPrice[]',
        'format_id' => 'int',
        'format' => '\Swagger\Client\Model\Format',
        'custom_fields' => '\Swagger\Client\Model\CustomField[]',
        'status' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'keywords' => null,
        'comment' => null,
        'thumb' => null,
        'pdf' => null,
        'page_count' => 'int64',
        'selected_paper' => null,
        'moq' => 'int64',
        'spq' => 'int64',
        'lot_price' => null,
        'format_id' => 'int64',
        'format' => null,
        'custom_fields' => null,
        'status' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time'
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
        'keywords' => 'keywords',
        'comment' => 'comment',
        'thumb' => 'thumb',
        'pdf' => 'pdf',
        'page_count' => 'page_count',
        'selected_paper' => 'selected_paper',
        'moq' => 'moq',
        'spq' => 'spq',
        'lot_price' => 'lot_price',
        'format_id' => 'format_id',
        'format' => 'format',
        'custom_fields' => 'custom_fields',
        'status' => 'status',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'keywords' => 'setKeywords',
        'comment' => 'setComment',
        'thumb' => 'setThumb',
        'pdf' => 'setPdf',
        'page_count' => 'setPageCount',
        'selected_paper' => 'setSelectedPaper',
        'moq' => 'setMoq',
        'spq' => 'setSpq',
        'lot_price' => 'setLotPrice',
        'format_id' => 'setFormatId',
        'format' => 'setFormat',
        'custom_fields' => 'setCustomFields',
        'status' => 'setStatus',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'keywords' => 'getKeywords',
        'comment' => 'getComment',
        'thumb' => 'getThumb',
        'pdf' => 'getPdf',
        'page_count' => 'getPageCount',
        'selected_paper' => 'getSelectedPaper',
        'moq' => 'getMoq',
        'spq' => 'getSpq',
        'lot_price' => 'getLotPrice',
        'format_id' => 'getFormatId',
        'format' => 'getFormat',
        'custom_fields' => 'getCustomFields',
        'status' => 'getStatus',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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

    const STATUS__PUBLIC = 'public';
    const STATUS__PRIVATE = 'private';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS__PUBLIC,
            self::STATUS__PRIVATE,
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
        $this->container['keywords'] = isset($data['keywords']) ? $data['keywords'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['thumb'] = isset($data['thumb']) ? $data['thumb'] : null;
        $this->container['pdf'] = isset($data['pdf']) ? $data['pdf'] : null;
        $this->container['page_count'] = isset($data['page_count']) ? $data['page_count'] : null;
        $this->container['selected_paper'] = isset($data['selected_paper']) ? $data['selected_paper'] : null;
        $this->container['moq'] = isset($data['moq']) ? $data['moq'] : null;
        $this->container['spq'] = isset($data['spq']) ? $data['spq'] : null;
        $this->container['lot_price'] = isset($data['lot_price']) ? $data['lot_price'] : null;
        $this->container['format_id'] = isset($data['format_id']) ? $data['format_id'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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

        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
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
     * @param string $name 名称
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets keywords
     * @return string
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     * @param string $keywords キーワード
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

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
     * @param string $comment コメント
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets thumb
     * @return \Swagger\Client\Model\TemplateThumb
     */
    public function getThumb()
    {
        return $this->container['thumb'];
    }

    /**
     * Sets thumb
     * @param \Swagger\Client\Model\TemplateThumb $thumb
     * @return $this
     */
    public function setThumb($thumb)
    {
        $this->container['thumb'] = $thumb;

        return $this;
    }

    /**
     * Gets pdf
     * @return string
     */
    public function getPdf()
    {
        return $this->container['pdf'];
    }

    /**
     * Sets pdf
     * @param string $pdf PDFファイルのURL
     * @return $this
     */
    public function setPdf($pdf)
    {
        $this->container['pdf'] = $pdf;

        return $this;
    }

    /**
     * Gets page_count
     * @return int
     */
    public function getPageCount()
    {
        return $this->container['page_count'];
    }

    /**
     * Sets page_count
     * @param int $page_count ページ数
     * @return $this
     */
    public function setPageCount($page_count)
    {
        $this->container['page_count'] = $page_count;

        return $this;
    }

    /**
     * Gets selected_paper
     * @return \Swagger\Client\Model\Paper
     */
    public function getSelectedPaper()
    {
        return $this->container['selected_paper'];
    }

    /**
     * Sets selected_paper
     * @param \Swagger\Client\Model\Paper $selected_paper
     * @return $this
     */
    public function setSelectedPaper($selected_paper)
    {
        $this->container['selected_paper'] = $selected_paper;

        return $this;
    }

    /**
     * Gets moq
     * @return int
     */
    public function getMoq()
    {
        return $this->container['moq'];
    }

    /**
     * Sets moq
     * @param int $moq 最小注文数
     * @return $this
     */
    public function setMoq($moq)
    {
        $this->container['moq'] = $moq;

        return $this;
    }

    /**
     * Gets spq
     * @return int
     */
    public function getSpq()
    {
        return $this->container['spq'];
    }

    /**
     * Sets spq
     * @param int $spq 注文単位
     * @return $this
     */
    public function setSpq($spq)
    {
        $this->container['spq'] = $spq;

        return $this;
    }

    /**
     * Gets lot_price
     * @return \Swagger\Client\Model\LotPrice[]
     */
    public function getLotPrice()
    {
        return $this->container['lot_price'];
    }

    /**
     * Sets lot_price
     * @param \Swagger\Client\Model\LotPrice[] $lot_price 注文数別の注文価格
     * @return $this
     */
    public function setLotPrice($lot_price)
    {
        $this->container['lot_price'] = $lot_price;

        return $this;
    }

    /**
     * Gets format_id
     * @return int
     */
    public function getFormatId()
    {
        return $this->container['format_id'];
    }

    /**
     * Sets format_id
     * @param int $format_id プロダクトのID
     * @return $this
     */
    public function setFormatId($format_id)
    {
        $this->container['format_id'] = $format_id;

        return $this;
    }

    /**
     * Gets format
     * @return \Swagger\Client\Model\Format
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     * @param \Swagger\Client\Model\Format $format
     * @return $this
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets custom_fields
     * @return \Swagger\Client\Model\CustomField[]
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     * @param \Swagger\Client\Model\CustomField[] $custom_fields 設定されている可変領域の情報
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status ステータス
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets created_at
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param \DateTime $created_at 作成日時
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     * @param \DateTime $updated_at 更新日時
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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


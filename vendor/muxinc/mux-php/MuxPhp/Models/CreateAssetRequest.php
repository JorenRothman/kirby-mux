<?php
/**
 * CreateAssetRequest
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  MuxPhp
 * @author   Mux API team
 * @link     https://docs.mux.com
 */

/**
 * Mux API
 *
 * Mux is how developers build online video. This API encompasses both Mux Video and Mux Data functionality to help you build your video-related projects better and faster than ever before.
 *
 * The version of the OpenAPI document: v1
 * Contact: devex@mux.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MuxPhp\Models;

use \ArrayAccess;
use \MuxPhp\ObjectSerializer;

/**
 * CreateAssetRequest Class Doc Comment
 *
 * @category Class
 * @package  MuxPhp
 * @author   Mux API team
 * @link     https://docs.mux.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CreateAssetRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateAssetRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'input' => '\MuxPhp\Models\InputSettings[]',
        'playback_policy' => '\MuxPhp\Models\PlaybackPolicy[]',
        'per_title_encode' => 'bool',
        'passthrough' => 'string',
        'mp4_support' => 'string',
        'normalize_audio' => 'bool',
        'master_access' => 'string',
        'test' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'input' => null,
        'playback_policy' => null,
        'per_title_encode' => 'boolean',
        'passthrough' => null,
        'mp4_support' => null,
        'normalize_audio' => 'boolean',
        'master_access' => null,
        'test' => 'boolean'
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
        'input' => 'input',
        'playback_policy' => 'playback_policy',
        'per_title_encode' => 'per_title_encode',
        'passthrough' => 'passthrough',
        'mp4_support' => 'mp4_support',
        'normalize_audio' => 'normalize_audio',
        'master_access' => 'master_access',
        'test' => 'test'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'input' => 'setInput',
        'playback_policy' => 'setPlaybackPolicy',
        'per_title_encode' => 'setPerTitleEncode',
        'passthrough' => 'setPassthrough',
        'mp4_support' => 'setMp4Support',
        'normalize_audio' => 'setNormalizeAudio',
        'master_access' => 'setMasterAccess',
        'test' => 'setTest'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'input' => 'getInput',
        'playback_policy' => 'getPlaybackPolicy',
        'per_title_encode' => 'getPerTitleEncode',
        'passthrough' => 'getPassthrough',
        'mp4_support' => 'getMp4Support',
        'normalize_audio' => 'getNormalizeAudio',
        'master_access' => 'getMasterAccess',
        'test' => 'getTest'
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

    public const MP4_SUPPORT_NONE = 'none';
    public const MP4_SUPPORT_STANDARD = 'standard';
    public const MASTER_ACCESS_NONE = 'none';
    public const MASTER_ACCESS_TEMPORARY = 'temporary';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMp4SupportAllowableValues()
    {
        return [
            self::MP4_SUPPORT_NONE,
            self::MP4_SUPPORT_STANDARD,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMasterAccessAllowableValues()
    {
        return [
            self::MASTER_ACCESS_NONE,
            self::MASTER_ACCESS_TEMPORARY,
        ];
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
        // MUX: enum hack (self::) due to OAS emitting problems.
        //      please re-integrate with mainline when possible.
        //      src: https://github.com/OpenAPITools/openapi-generator/issues/9038
        $this->container['input'] = $data['input'] ?? null;
        $this->container['playback_policy'] = $data['playback_policy'] ?? null;
        $this->container['per_title_encode'] = $data['per_title_encode'] ?? null;
        $this->container['passthrough'] = $data['passthrough'] ?? null;
        $this->container['mp4_support'] = $data['mp4_support'] ?? null;
        $this->container['normalize_audio'] = $data['normalize_audio'] ?? false;
        $this->container['master_access'] = $data['master_access'] ?? null;
        $this->container['test'] = $data['test'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getMp4SupportAllowableValues();
        if (!is_null($this->container['mp4_support']) && !in_array($this->container['mp4_support'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'mp4_support', must be one of '%s'",
                $this->container['mp4_support'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMasterAccessAllowableValues();
        if (!is_null($this->container['master_access']) && !in_array($this->container['master_access'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'master_access', must be one of '%s'",
                $this->container['master_access'],
                implode("', '", $allowedValues)
            );
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
     * Gets input
     *
     * @return \MuxPhp\Models\InputSettings[]|null
     */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
     * Sets input
     *
     * @param \MuxPhp\Models\InputSettings[]|null $input An array of objects that each describe an input file to be used to create the asset. As a shortcut, input can also be a string URL for a file when only one input file is used. See `input[].url` for requirements.
     *
     * @return self
     */
    public function setInput($input)
    {
        $this->container['input'] = $input;

        return $this;
    }

    /**
     * Gets playback_policy
     *
     * @return \MuxPhp\Models\PlaybackPolicy[]|null
     */
    public function getPlaybackPolicy()
    {
        return $this->container['playback_policy'];
    }

    /**
     * Sets playback_policy
     *
     * @param \MuxPhp\Models\PlaybackPolicy[]|null $playback_policy An array of playback policy names that you want applied to this asset and available through `playback_ids`. Options include: `\"public\"` (anyone with the playback URL can stream the asset). And `\"signed\"` (an additional access token is required to play the asset). If no playback_policy is set, the asset will have no playback IDs and will therefore not be playable. For simplicity, a single string name can be used in place of the array in the case of only one playback policy.
     *
     * @return self
     */
    public function setPlaybackPolicy($playback_policy)
    {
        $this->container['playback_policy'] = $playback_policy;

        return $this;
    }

    /**
     * Gets per_title_encode
     *
     * @return bool|null
     */
    public function getPerTitleEncode()
    {
        return $this->container['per_title_encode'];
    }

    /**
     * Sets per_title_encode
     *
     * @param bool|null $per_title_encode per_title_encode
     *
     * @return self
     */
    public function setPerTitleEncode($per_title_encode)
    {
        $this->container['per_title_encode'] = $per_title_encode;

        return $this;
    }

    /**
     * Gets passthrough
     *
     * @return string|null
     */
    public function getPassthrough()
    {
        return $this->container['passthrough'];
    }

    /**
     * Sets passthrough
     *
     * @param string|null $passthrough Arbitrary user-supplied metadata that will be included in the asset details and related webhooks. Can be used to store your own ID for a video along with the asset. **Max: 255 characters**.
     *
     * @return self
     */
    public function setPassthrough($passthrough)
    {
        $this->container['passthrough'] = $passthrough;

        return $this;
    }

    /**
     * Gets mp4_support
     *
     * @return string|null
     */
    public function getMp4Support()
    {
        return $this->container['mp4_support'];
    }

    /**
     * Sets mp4_support
     *
     * @param string|null $mp4_support Specify what level (if any) of support for mp4 playback. In most cases you should use our default HLS-based streaming playback ({playback_id}.m3u8) which can automatically adjust to viewers' connection speeds, but an mp4 can be useful for some legacy devices or downloading for offline playback. See the [Download your videos guide](/guides/video/download-your-videos) for more information.
     *
     * @return self
     */
    public function setMp4Support($mp4_support)
    {
        $allowedValues = $this->getMp4SupportAllowableValues();
        if (!is_null($mp4_support) && !in_array($mp4_support, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'mp4_support', must be one of '%s'",
                    $mp4_support,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mp4_support'] = $mp4_support;

        return $this;
    }

    /**
     * Gets normalize_audio
     *
     * @return bool|null
     */
    public function getNormalizeAudio()
    {
        return $this->container['normalize_audio'];
    }

    /**
     * Sets normalize_audio
     *
     * @param bool|null $normalize_audio Normalize the audio track loudness level. This parameter is only applicable to on-demand (not live) assets.
     *
     * @return self
     */
    public function setNormalizeAudio($normalize_audio)
    {
        $this->container['normalize_audio'] = $normalize_audio;

        return $this;
    }

    /**
     * Gets master_access
     *
     * @return string|null
     */
    public function getMasterAccess()
    {
        return $this->container['master_access'];
    }

    /**
     * Sets master_access
     *
     * @param string|null $master_access Specify what level (if any) of support for master access. Master access can be enabled temporarily for your asset to be downloaded. See the [Download your videos guide](/guides/video/download-your-videos) for more information.
     *
     * @return self
     */
    public function setMasterAccess($master_access)
    {
        $allowedValues = $this->getMasterAccessAllowableValues();
        if (!is_null($master_access) && !in_array($master_access, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'master_access', must be one of '%s'",
                    $master_access,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['master_access'] = $master_access;

        return $this;
    }

    /**
     * Gets test
     *
     * @return bool|null
     */
    public function getTest()
    {
        return $this->container['test'];
    }

    /**
     * Sets test
     *
     * @param bool|null $test Marks the asset as a test asset when the value is set to true. A Test asset can help evaluate the Mux Video APIs without incurring any cost. There is no limit on number of test assets created. Test asset are watermarked with the Mux logo, limited to 10 seconds, deleted after 24 hrs.
     *
     * @return self
     */
    public function setTest($test)
    {
        $this->container['test'] = $test;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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



<?php
/**
 * InlineObject3
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  belenka\Everifin\Client

 * 
 */





namespace belenka\Everifin\Client\Model;

use \ArrayAccess;
use \belenka\Everifin\Client\ObjectSerializer;

/**
 * InlineObject3 Class Doc Comment
 *
 * @category Class
 * @package  belenka\Everifin\Client

 * 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineObject3 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'float',
        'constant_symbol' => 'string',
        'currency' => 'string',
        'payment_message' => 'string',
        'recipient_iban' => 'string',
        'recipient_name' => 'string',
        'redirect_url' => 'string',
        'reference' => 'mixed',
        'specific_symbol' => 'string',
        'user_locale' => 'string',
        'variable_symbol' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'constant_symbol' => null,
        'currency' => null,
        'payment_message' => null,
        'recipient_iban' => null,
        'recipient_name' => null,
        'redirect_url' => null,
        'reference' => null,
        'specific_symbol' => null,
        'user_locale' => null,
        'variable_symbol' => null
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
        'amount' => 'amount',
        'constant_symbol' => 'constantSymbol',
        'currency' => 'currency',
        'payment_message' => 'paymentMessage',
        'recipient_iban' => 'recipientIban',
        'recipient_name' => 'recipientName',
        'redirect_url' => 'redirectUrl',
        'reference' => 'reference',
        'specific_symbol' => 'specificSymbol',
        'user_locale' => 'userLocale',
        'variable_symbol' => 'variableSymbol'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'constant_symbol' => 'setConstantSymbol',
        'currency' => 'setCurrency',
        'payment_message' => 'setPaymentMessage',
        'recipient_iban' => 'setRecipientIban',
        'recipient_name' => 'setRecipientName',
        'redirect_url' => 'setRedirectUrl',
        'reference' => 'setReference',
        'specific_symbol' => 'setSpecificSymbol',
        'user_locale' => 'setUserLocale',
        'variable_symbol' => 'setVariableSymbol'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'constant_symbol' => 'getConstantSymbol',
        'currency' => 'getCurrency',
        'payment_message' => 'getPaymentMessage',
        'recipient_iban' => 'getRecipientIban',
        'recipient_name' => 'getRecipientName',
        'redirect_url' => 'getRedirectUrl',
        'reference' => 'getReference',
        'specific_symbol' => 'getSpecificSymbol',
        'user_locale' => 'getUserLocale',
        'variable_symbol' => 'getVariableSymbol'
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['constant_symbol'] = $data['constant_symbol'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['payment_message'] = $data['payment_message'] ?? null;
        $this->container['recipient_iban'] = $data['recipient_iban'] ?? null;
        $this->container['recipient_name'] = $data['recipient_name'] ?? null;
        $this->container['redirect_url'] = $data['redirect_url'] ?? null;
        $this->container['reference'] = $data['reference'] ?? null;
        $this->container['specific_symbol'] = $data['specific_symbol'] ?? null;
        $this->container['user_locale'] = $data['user_locale'] ?? null;
        $this->container['variable_symbol'] = $data['variable_symbol'] ?? null;
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
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets constant_symbol
     *
     * @return string|null
     */
    public function getConstantSymbol()
    {
        return $this->container['constant_symbol'];
    }

    /**
     * Sets constant_symbol
     *
     * @param string|null $constant_symbol constant_symbol
     *
     * @return self
     */
    public function setConstantSymbol($constant_symbol)
    {
        $this->container['constant_symbol'] = $constant_symbol;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets payment_message
     *
     * @return string|null
     */
    public function getPaymentMessage()
    {
        return $this->container['payment_message'];
    }

    /**
     * Sets payment_message
     *
     * @param string|null $payment_message payment_message
     *
     * @return self
     */
    public function setPaymentMessage($payment_message)
    {
        $this->container['payment_message'] = $payment_message;

        return $this;
    }

    /**
     * Gets recipient_iban
     *
     * @return string|null
     */
    public function getRecipientIban()
    {
        return $this->container['recipient_iban'];
    }

    /**
     * Sets recipient_iban
     *
     * @param string|null $recipient_iban recipient_iban
     *
     * @return self
     */
    public function setRecipientIban($recipient_iban)
    {
        $this->container['recipient_iban'] = $recipient_iban;

        return $this;
    }

    /**
     * Gets recipient_name
     *
     * @return string|null
     */
    public function getRecipientName()
    {
        return $this->container['recipient_name'];
    }

    /**
     * Sets recipient_name
     *
     * @param string|null $recipient_name recipient_name
     *
     * @return self
     */
    public function setRecipientName($recipient_name)
    {
        $this->container['recipient_name'] = $recipient_name;

        return $this;
    }

    /**
     * Gets redirect_url
     *
     * @return string|null
     */
    public function getRedirectUrl()
    {
        return $this->container['redirect_url'];
    }

    /**
     * Sets redirect_url
     *
     * @param string|null $redirect_url redirect_url
     *
     * @return self
     */
    public function setRedirectUrl($redirect_url)
    {
        $this->container['redirect_url'] = $redirect_url;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return mixed|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param mixed|null $reference reference
     *
     * @return self
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets specific_symbol
     *
     * @return string|null
     */
    public function getSpecificSymbol()
    {
        return $this->container['specific_symbol'];
    }

    /**
     * Sets specific_symbol
     *
     * @param string|null $specific_symbol specific_symbol
     *
     * @return self
     */
    public function setSpecificSymbol($specific_symbol)
    {
        $this->container['specific_symbol'] = $specific_symbol;

        return $this;
    }

    /**
     * Gets user_locale
     *
     * @return string|null
     */
    public function getUserLocale()
    {
        return $this->container['user_locale'];
    }

    /**
     * Sets user_locale
     *
     * @param string|null $user_locale user_locale
     *
     * @return self
     */
    public function setUserLocale($user_locale)
    {
        $this->container['user_locale'] = $user_locale;

        return $this;
    }

    /**
     * Gets variable_symbol
     *
     * @return string|null
     */
    public function getVariableSymbol()
    {
        return $this->container['variable_symbol'];
    }

    /**
     * Sets variable_symbol
     *
     * @param string|null $variable_symbol variable_symbol
     *
     * @return self
     */
    public function setVariableSymbol($variable_symbol)
    {
        $this->container['variable_symbol'] = $variable_symbol;

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



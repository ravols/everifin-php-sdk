<?php
/**
 * InlineResponse2004Data
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  belenka\Everifin\Client

 *
 */

namespace belenka\Everifin\Client\Model;

use ArrayAccess;
use belenka\Everifin\Client\ObjectSerializer;

/**
 * InlineResponse2004Data Class Doc Comment
 *
 * @category Class
 * @package  belenka\Everifin\Client

 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse2004Data implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_4_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'float',
        'constant_symbol' => 'mixed',
        'currency' => 'string',
        'hook_data' => 'mixed',
        'id' => 'string',
        'instruction_id' => 'mixed',
        'payment_message' => 'string',
        'recipient_bank_bic' => 'mixed',
        'recipient_iban' => 'string',
        'recipient_name' => 'string',
        'reference' => 'mixed',
        'sender_iban' => 'mixed',
        'specific_symbol' => 'mixed',
        'status' => 'string',
        'variable_symbol' => 'string',
        'reason_code' => 'string',
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
        'hook_data' => null,
        'id' => null,
        'instruction_id' => null,
        'payment_message' => null,
        'recipient_bank_bic' => null,
        'recipient_iban' => null,
        'recipient_name' => null,
        'reference' => null,
        'sender_iban' => null,
        'specific_symbol' => null,
        'status' => null,
        'variable_symbol' => null,
        'reason_code' => null,
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
        'hook_data' => 'hookData',
        'id' => 'id',
        'instruction_id' => 'instructionId',
        'payment_message' => 'paymentMessage',
        'recipient_bank_bic' => 'recipientBankBic',
        'recipient_iban' => 'recipientIban',
        'recipient_name' => 'recipientName',
        'reference' => 'reference',
        'sender_iban' => 'senderIban',
        'specific_symbol' => 'specificSymbol',
        'status' => 'status',
        'variable_symbol' => 'variableSymbol',
        'reason_code' => 'reasonCode',
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
        'hook_data' => 'setHookData',
        'id' => 'setId',
        'instruction_id' => 'setInstructionId',
        'payment_message' => 'setPaymentMessage',
        'recipient_bank_bic' => 'setRecipientBankBic',
        'recipient_iban' => 'setRecipientIban',
        'recipient_name' => 'setRecipientName',
        'reference' => 'setReference',
        'sender_iban' => 'setSenderIban',
        'specific_symbol' => 'setSpecificSymbol',
        'status' => 'setStatus',
        'variable_symbol' => 'setVariableSymbol',
        'reason_code' => 'setReasonCode',
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
        'hook_data' => 'getHookData',
        'id' => 'getId',
        'instruction_id' => 'getInstructionId',
        'payment_message' => 'getPaymentMessage',
        'recipient_bank_bic' => 'getRecipientBankBic',
        'recipient_iban' => 'getRecipientIban',
        'recipient_name' => 'getRecipientName',
        'reference' => 'getReference',
        'sender_iban' => 'getSenderIban',
        'specific_symbol' => 'getSpecificSymbol',
        'status' => 'getStatus',
        'variable_symbol' => 'getVariableSymbol',
        'reason_code' => 'getReasonCode',
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
        $this->container['hook_data'] = $data['hook_data'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['instruction_id'] = $data['instruction_id'] ?? null;
        $this->container['payment_message'] = $data['payment_message'] ?? null;
        $this->container['recipient_bank_bic'] = $data['recipient_bank_bic'] ?? null;
        $this->container['recipient_iban'] = $data['recipient_iban'] ?? null;
        $this->container['recipient_name'] = $data['recipient_name'] ?? null;
        $this->container['reference'] = $data['reference'] ?? null;
        $this->container['sender_iban'] = $data['sender_iban'] ?? null;
        $this->container['specific_symbol'] = $data['specific_symbol'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['variable_symbol'] = $data['variable_symbol'] ?? null;
        $this->container['reason_code'] = $data['reason_code'] ?? null;
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
     * @return mixed|null
     */
    public function getConstantSymbol()
    {
        return $this->container['constant_symbol'];
    }

    /**
     * Sets constant_symbol
     *
     * @param mixed|null $constant_symbol constant_symbol
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
     * Gets hook_data
     *
     * @return mixed|null
     */
    public function getHookData()
    {
        return $this->container['hook_data'];
    }

    /**
     * Sets hook_data
     *
     * @param mixed|null $hook_data hook_data
     *
     * @return self
     */
    public function setHookData($hook_data)
    {
        $this->container['hook_data'] = $hook_data;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets instruction_id
     *
     * @return mixed|null
     */
    public function getInstructionId()
    {
        return $this->container['instruction_id'];
    }

    /**
     * Sets instruction_id
     *
     * @param mixed|null $instruction_id instruction_id
     *
     * @return self
     */
    public function setInstructionId($instruction_id)
    {
        $this->container['instruction_id'] = $instruction_id;

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
     * Gets recipient_bank_bic
     *
     * @return mixed|null
     */
    public function getRecipientBankBic()
    {
        return $this->container['recipient_bank_bic'];
    }

    /**
     * Sets recipient_bank_bic
     *
     * @param mixed|null $recipient_bank_bic recipient_bank_bic
     *
     * @return self
     */
    public function setRecipientBankBic($recipient_bank_bic)
    {
        $this->container['recipient_bank_bic'] = $recipient_bank_bic;

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
     * Gets sender_iban
     *
     * @return mixed|null
     */
    public function getSenderIban()
    {
        return $this->container['sender_iban'];
    }

    /**
     * Sets sender_iban
     *
     * @param mixed|null $sender_iban sender_iban
     *
     * @return self
     */
    public function setSenderIban($sender_iban)
    {
        $this->container['sender_iban'] = $sender_iban;

        return $this;
    }

    /**
     * Gets specific_symbol
     *
     * @return mixed|null
     */
    public function getSpecificSymbol()
    {
        return $this->container['specific_symbol'];
    }

    /**
     * Sets specific_symbol
     *
     * @param mixed|null $specific_symbol specific_symbol
     *
     * @return self
     */
    public function setSpecificSymbol($specific_symbol)
    {
        $this->container['specific_symbol'] = $specific_symbol;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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

    public function getReasonCode()
    {
        return $this->container['reason_code'];
    }

    public function setReasonCode($reason_code)
    {
        $this->container['reason_code'] = $reason_code;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
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
    public function offsetSet($offset, $value): void
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
     * @param int $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
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

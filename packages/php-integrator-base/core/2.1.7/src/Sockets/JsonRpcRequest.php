<?php

namespace PhpIntegrator\Sockets;

use JsonSerializable;
use UnexpectedValueException;

/**
 * A request in JSON-RPC 2.0 format.
 *
 * Value object.
 */
class JsonRpcRequest implements JsonSerializable
{
    /**
     * @var string
     */
    protected $jsonrpc;

    /**
     * @var string|int|null
     */
    protected $id;

    /**
     * @var string
     */
    protected $method;

    /**
     * @var array|null
     */
    protected $params;

    /**
     * @param string|int|null $id
     * @param string          $method
     * @param array|null      $params
     * @param string          $jsonrpc The version.
     */
    public function __construct($id, $method, array $params = null, $jsonrpc = '2.0')
    {
        $this->id = $id;
        $this->method = $method;
        $this->params = $params;
        $this->jsonrpc = $jsonrpc;
    }

    /**
     * @return string
     */
    public function getJsonrpc()
    {
        return $this->jsonrpc;
    }

    /**
     * Alias for {@see getJsonrpc}.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->getJsonrpc();
    }

    /**
     * @return string|int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return array|null
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param array $array
     *
     * @return static
     */
    public static function createFromArray(array $array)
    {
        return new static($array['id'], $array['method'], $array['params'], $array['jsonrpc']);
    }

    /**
     * @param string $json
     *
     * @throws UnexpectedValueException
     *
     * @return static
     */
    public static function createFromJson($json)
    {
        $data = json_decode($json, true);

        if (!is_array($data)) {
            throw new UnexpectedValueException('The specified JSON did not evaluate to an array');
        }

        return static::createFromArray($data);
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        return [
            'jsonrpc' => $this->getJsonrpc(),
            'id'      => $this->getId(),
            'method'  => $this->getMethod(),
            'params'  => $this->getParams()
        ];
    }
}

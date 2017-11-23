<?php

namespace Swaggest\Json;

class RawJson implements \JsonSerializable
{
    const MARKER = '__RAW_JSON__';
    private $value;

    /**
     * RawJson constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    function jsonSerialize()
    {
        return self::MARKER . $this->value . self::MARKER;
    }
}
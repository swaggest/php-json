<?php

namespace Swaggest\Json;

class Json
{
    private $value;
    private $options = 0;
    private $depth = 512;

    /**
     * Json constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    public function addOption($option)
    {
        $this->options += $option;
        return $this;
    }

    public function setDepth($depth) {
        $this->depth = $depth;
        return $this;
    }

    public function __toString()
    {
        if ($this->depth !== 512 && PHP_VERSION_ID > 504000) {
            $result = json_encode($this->value, $this->options, $this->depth);
        } else {
            $result = json_encode($this->value, $this->options);
        }
        $result = str_replace(array('"' . RawJson::MARKER, RawJson::MARKER . '"'), '', $result);
        return $result;
    }
}

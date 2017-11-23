<?php

class EncodeTest extends PHPUnit_Framework_TestCase
{
    public function testEncode()
    {
        $data = array(
            'val' => 'hello!',
            'callback' => new \Swaggest\Json\RawJson('function(){alert("hello!")}')
        );

        $json = (string)(new \Swaggest\Json\Json($data));
        $this->assertSame('{"val":"hello!","callback":function(){alert(\"hello!\")}}', $json);
    }

}
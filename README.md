# swaggest/json

JSON encoder with RAW support

```php
$data = array(
    'val' => 'hello!',
    'callback' => new \Swaggest\Json\RawJson('function(){alert("hello!")}')
);

$json = (string)(new \Swaggest\Json\Json($data));
$this->assertSame('{"val":"hello!","callback":function(){alert(\"hello!\")}}', $json);
```
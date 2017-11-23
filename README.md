# swaggest/json

JSON encoder with RAW support

[![Build Status](https://travis-ci.org/swaggest/php-json.svg?branch=master)](https://travis-ci.org/swaggest/php-json)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/swaggest/php-json/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/swaggest/php-json/?branch=master)
[![Code Climate](https://codeclimate.com/github/swaggest/php-json/badges/gpa.svg)](https://codeclimate.com/github/swaggest/php-json)

## Installation

```
composer require swaggest/json
```

## Usage

```php
$data = array(
    'val' => 'hello!',
    'callback' => new \Swaggest\Json\RawJson('function(){alert("hello!")}')
);

$json = (string)(new \Swaggest\Json\Json($data));
$this->assertSame('{"val":"hello!","callback":function(){alert(\"hello!\")}}', $json);
```
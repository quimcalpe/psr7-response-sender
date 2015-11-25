# quimcalpe/psr7-response-sender

[![Version](https://img.shields.io/packagist/v/quimcalpe/psr7-response-sender.svg?style=flat-square)](https://packagist.org/packages/quimcalpe/psr7-response-sender)
[![License](https://img.shields.io/packagist/l/quimcalpe/psr7-response-sender.svg?style=flat-square)](https://packagist.org/packages/quimcalpe/psr7-response-sender)
[![Build Status](https://img.shields.io/travis/quimcalpe/psr7-response-sender.svg?style=flat-square)](http://travis-ci.org/quimcalpe/psr7-response-sender)

Sends PSR-7 Response compatible object's content and headers to browser.

## Install

Via Composer

``` bash
$ composer require quimcalpe/psr7-response-sender
```

## Requirements

The following versions of PHP are supported by this version.

* PHP 5.5
* PHP 5.6
* PHP 7
* HHVM


## Basic Usage

```php
// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';

// $response must be Psr\Http\Message\ResponseInterface compatible
QuimCalpe\ResponseSender\send($response);
```

With PHP 5.6 you can import the function straight away:

```php
use function QuimCalpe\ResponseSender\send AS send_response;

send_response($response);
```

## Testing

``` bash
$ vendor/bin/phpunit
```

## License

The MIT License (MIT). Please see [License File](https://github.com/quimcalpe/psr7-response-sender/blob/master/LICENSE.md) for more information.

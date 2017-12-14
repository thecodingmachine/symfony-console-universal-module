[![Latest Stable Version](https://poser.pugx.org/thecodingmachine/symfony-console-universal-module/v/stable)](https://packagist.org/packages/thecodingmachine/symfony-console-universal-module)
[![Latest Unstable Version](https://poser.pugx.org/thecodingmachine/symfony-console-universal-module/v/unstable)](https://packagist.org/packages/thecodingmachine/symfony-console-universal-module)
[![License](https://poser.pugx.org/thecodingmachine/symfony-console-universal-module/license)](https://packagist.org/packages/thecodingmachine/symfony-console-universal-module)

# Symfony console universal module

This package integrates [symfony/console](https://github.com/symfony/console) in any [container-interop](https://github.com/container-interop/service-provider) compatible framework/container.

## Installation

```
composer require thecodingmachine/symfony-console-universal-module
```

Once installed, you need to register the [`TheCodingMachine\SymfonyConsoleServiceProvider`](src/SymfonyConsoleServiceProvider.php) into your container.

If your container supports thecodingmachine/discovery integration, you have nothing to do. Otherwise, refer to your framework or container's documentation to learn how to register *service providers*.

## Introduction

This service provider is meant to create a Symfony console in your container.

You can access the console using: `vendor/bin/app_console`.

For the console to work, you need to have a `container.php` file at the root of your project or in the 'config' directory. This file MUST returns your application's container.
This file will be used by the Symfony console to access and start the application.

Sample:

**container.php** (or **config/container.php**)
```php
<?php
use Simplex\Container;

$container = new Container([new \TheCodingMachine\SymfonyConsoleServiceProvider()]);

return $container;
```

## Provided services

This *service provider* provides the following services:

| Service name                | Description                          |
|-----------------------------|--------------------------------------|
| `HelperSet::class`          | An empty HelperSet                   |
| `Application::class`        | An empty console application         |


<small>Project template courtesy of <a href="https://github.com/thecodingmachine/service-provider-template">thecodingmachine/service-provider-template</a></small>

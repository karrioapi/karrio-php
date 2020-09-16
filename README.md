# Purplship PHP Client

Purplship is a Multi-carrier Shipping API that simplifies the integration of logistic carrier services.

Visit [purplship.com](https://purplship.com) to deploy your private cloud multi-carrier shipping API.

## Documentation

See the full [PHP API docs](https://docs.purplship.com).

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```bash
composer require purplship/purplship-php
```

### Development

```bash
composer install
```

### Usage

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$purplship = new \Purplship\Purplship('YOUR_API_KEY', 'https://instance.purplship.api/v1');

try {
    $result = $purplship->carriers->list();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling carriers->list: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Author

Purplship Team | hello@purplship.com | [purplship.com](https://purplship.com)

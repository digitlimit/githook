# Githook

[![Latest Version on Packagist](https://img.shields.io/packagist/v/digitlimit/githook.svg?style=flat-square)](https://packagist.org/packages/digitlimit/githook)
[![Total Downloads](https://img.shields.io/packagist/dt/digitlimit/githook.svg?style=flat-square)](https://packagist.org/packages/digitlimit/githook)
![GitHub Actions](https://github.com/digitlimit/githook/actions/workflows/main.yml/badge.svg)

This package is a simple Laravel Github Webhook helper for handling webhook events.


## Installation

You can install the package via composer:

```bash
composer require digitlimit/githook
```

Then publish config and mailable

```bash
php artisan vendor:publish --provider="Digitlimit\Githook\GithookServiceProvider"
```

## Usage
1. Add

1. Setup Github Webhook
https://github.com/your-username/your-repo/settings/hooks

![image](https://user-images.githubusercontent.com/2041419/137665069-f330f1e5-3907-4e59-a6b3-79c95be40ba0.png)

1. Add

1. Setup Github Webhook
https://github.com/your-username/your-repo/settings/hooks

![image](https://user-images.githubusercontent.com/2041419/137665069-f330f1e5-3907-4e59-a6b3-79c95be40ba0.png)


```php
// Usage description here
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email frankemeks77@yahoo.com instead of using the issue tracker.

## Credits

-   [Emeka Mbah](https://github.com/digitlimit)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

# Dev Jobs in your artisan

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sawirricardo/artisan-devjobs.svg?style=flat-square)](https://packagist.org/packages/sawirricardo/artisan-devjobs)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/sawirricardo/artisan-devjobs/run-tests?label=tests)](https://github.com/sawirricardo/artisan-devjobs/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/sawirricardo/artisan-devjobs/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/sawirricardo/artisan-devjobs/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sawirricardo/artisan-devjobs.svg?style=flat-square)](https://packagist.org/packages/sawirricardo/artisan-devjobs)

Search Jobs through your Artisan Console

<!-- ## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/artisan-devjobs.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/artisan-devjobs)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards). -->

## Installation

You can install the package via composer:

```bash
composer require sawirricardo/artisan-devjobs --dev
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="artisan-devjobs-views"
```

## Usage

```bash
php artisan devjobs:larajobs
php artisan devjobs:vuejobs
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [sawirricardo](https://github.com/sawirricardo)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

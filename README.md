# Aktiv

[![Packagist License](https://poser.pugx.org/barryvdh/laravel-debugbar/license.png)](http://choosealicense.com/licenses/mit/)
[![Latest Stable Version](https://poser.pugx.org/manojkiran/aktiv/v/stable)](https://packagist.org/packages/manojkiran/aktiv)
[![Total Downloads](https://poser.pugx.org/manojkiran/aktiv/downloads)](https://packagist.org/packages/manojkiran/aktiv)
[![Laravel5.8](https://img.shields.io/badge/Laravel-Framework-red.svg?style=flat)](https://www.laravel.com/)

Aktiv is a Laravel Helper Plugin that helpes to set the active menus

## Available Methods
  - ``` isRouteActive ```
  - ``` areRoutesActive ```
  - ``` isResourceActive ```
  - ``` areResourcesActive ```
  - ```isActivePattern```
  - ```areActivePatterns```
  - ```isUrlActive```
  - ```areUrlsActive```
  




### Installation

Aktiv requires [Laravel](https://laravel.com/) v 5.7 to use

From the command line:

```bash
composer require manojkiran/aktiv
```

Laravel 5.5+ will use the auto-discovery function.

If using 5.4 (or if you are not using auto-discovery) you will need to include the service providers / facade in `config/app.php`:

```php
'providers' => [
    ...,
    Manojkiran\Aktiv\AktivServiceProvider::class
];
```

And add a facade alias to the same file at the bottom:

```php
'aliases' => [
    ...,
    'Aktiv' => Manojkiran\Aktiv\Facade\AktivFacade\Aktiv::class
];
```  
### How to Use (BOOTSRAP)
| METHODS | EXAMPLES |
| ------ | ------ |
| isRouteActive | ``` Aktiv::isRouteActive('routeName') ``` |
| areRoutesActive | ``` Aktiv::areRoutesActive(['routeName1','routeName2','routeName3','routeNameN']) ``` |
| isResourceActive | ``` Aktiv::isResourceActive('resourceName') ``` |
| areResourcesActive | ``` Aktiv::areResourcesActive(['resourceName1','resourceName2','resourceName3','resourceNameN']) ``` |
| isActivePattern | ``` Aktiv::isActivePattern('pattern1') ``` |
| areActivePatterns | ``` Aktiv::areActivePatterns(['pattern1','pattern2','pattern3','patternN']) ``` |
| isUrlActive | ``` Aktiv::isUrlActive('url') ``` |
| areUrlsActive | ``` Aktiv::areUrlsActive(['url1','url2','url3','urln']) ``` |

### How to Use in  ```CUSTOM ACTIVE CLASS```
| METHODS | EXAMPLES |
| ------ | ------ |
| isRouteActive | ``` Aktiv::isRouteActive('routeName','activeClassName') ``` |
| areRoutesActive | ``` Aktiv::areRoutesActive(['routeName1','routeName2','routeName3',routeNameN],'activeClassName') ``` |
| isResourceActive | ``` Aktiv::isResourceActive('resourceName','activeClassName') ``` |
| areResourcesActive | ``` Aktiv::areResourcesActive(['resourceName1','resourceName2','resourceName3','resourceNameN'],'activeClassName') ``` |
| isActivePattern | ``` Aktiv::isActivePattern('pattern1','activeClassName') ``` |
| areActivePatterns | ``` Aktiv::areActivePatterns(['pattern1','pattern2','pattern3','patternN'],'activeClassName') ``` |
| isUrlActive | ``` Aktiv::isUrlActive('url','activeClassName') ``` |
| areUrlsActive | ``` Aktiv::areUrlsActive(['url1','url2','url3','urln'],'activeClassName') ``` | 


### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email manojkiran10031998@gmail.com instead of using the issue tracker.

## Credits

- [Manojkiran](https://github.com/manojkiran)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
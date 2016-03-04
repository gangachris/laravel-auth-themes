# Laravel Auth Themes

Laravel 5.2 package for replacing auth theme generated by
```bash
$ php artisan make:auth
```

## Install

Via Composer

``` bash
$ composer require ganga/laravel-auth-themes
```

## Usage
`Laravel Auth Themes` creates a `php artisan` command to enable you download auth themes from github.

Once you have required this package, go to `config/app.php` and add it to service providers.
``` php
$providers = [
    ...
    ...
    ...,
    Ganga\AuthThemes\AuthThemesServiceProvider::class,
];

$aliases = [
    ...
    ...
    ...
    'AuthTheme' => App\Providers\RouteServiceProvider::class,
];
```

Then head over to your terminal and `vendor:publish` the package. This simply creates a new console Command file in your `app/Console/Commands` directory called `AuthThemeCommand`.
```php
$ php artisan vendor:publish
```

We need to let Laravel's artisan know about this new command. So, head over to the `app/Console/Kernel.php` file and add the following under the commands array.
```php
protected $commands = [
    Commands\AuthThemeCommand::class,
];
```

Now, you need to first generate laravel default auth.
```bash
$ php artisan make:auth
```

This artisan command creates some blade view files in your `reources\views` folder. This are what Laravel Auth Themes will replace. Currently, there's only one repo with the structure of the default theme. But I will list them here as time goes. Feel free to create a theme too, and add a link here and send a PR.
```bash
$ php artisan auth:theme https://github.com/gangachris/default-laravel-auth-theme.git
```

### List of available themes
1. [Default Bootstrap Theme](https://github.com/gangachris/default-laravel-auth-theme)

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email ganga.chris@gmail.com instead of using the issue tracker.

## Credits

- [Ganga Christopher][link-author]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[link-author]: https://github.com/gangachris

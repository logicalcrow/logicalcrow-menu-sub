# **Installation in Laravel**
This package can be used with Laravel 9.0 or higher.

## **Installing**
`composer require spatie/laravel-permission`

## **Publish**
`php artisan vendor:publish --provider="Logicalcrow\Menu\MenuSubServiceProvider"`

## **Add config/app.php**
```php
'providers' => [
    // add line at end of provider
    App\Providers\MenuServiceProvider::class,
],
```
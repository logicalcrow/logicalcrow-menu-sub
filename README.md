# **Installation in Laravel**
This package can be used with Laravel 9.0 or higher.

## **Installing**
`composer require spatie/laravel-permission`

## **Publish**
`php artisan vendor:publish --provider="Logicalcrow\Menu\MenuSubServiceProvider"`

## **Add line to config/app.php**
```php
'providers' => [
    // add line at end of provider
    App\Providers\MenuServiceProvider::class,
],
```

## **Add function Models/User.php**
```php
// add function at end of Models/User.php
public function menus()
    return $this->belongsToMany(Menu::class, 'menu_users')->orderByPivot('menu_id');
}
```
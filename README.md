# **requirements in Laravel**
* This package can be used with Laravel 8.0 or higher.
* jetstream team requirement

## **Installing**
`composer require logicalcrow/menu-sub`

## **Publish**
`php artisan vendor:publish --provider="Logicalcrow\Menu\MenuSubServiceProvider"`

## **Add line to config/app.php**
```php
'providers' => [
    /*
     * Package Service Providers...
     */
    Logicalcrow\Menu\Providers\MenuServiceProvider::class,
],
```

## **Add function Models/User.php**
```php
use Logicalcrow\Menu\Models\Menu;
```

```php
// add function at end of Models/User.php
public function menus()
{
    return $this->belongsToMany(Menu::class, 'menu_users')->orderByPivot('menu_id');
}
```
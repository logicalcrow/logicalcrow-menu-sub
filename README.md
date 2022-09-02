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

## **Using**
example in bootstrap 4

```php
@foreach($menus as $menu)
    <li class="menu-item menu-item-submenu {{ Request::is('dashboard/'.$menu->url.'/*') ? 'menu-item-open menu-item-here' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
        <a href="javascript:;" class="menu-link menu-toggle">
            <span class="svg-icon menu-icon">
                <i class="kt-menu__link-icon {{ $menu->ico }}"></i>
            </span>
            <span class="menu-text">{{ $menu->name }}</span>
            <i class="menu-arrow"></i>
        </a>
        @if(isset($menu->menuSubs))
            <div class="menu-submenu">
                <i class="menu-arrow"></i>
                <ul class="menu-subnav">
                    @foreach($menu->menuSubs as $menuSub)
                    <li class="menu-item {{ Request::is('dashboard/'.$menu->url.'/'.$menuSub->url, 'dashboard/'.$menu->url.'/'.$menuSub->url.'/*') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                        <a href="/dashboard/{{ $menu->url }}/{{ $menuSub->url }}" class="menu-link">
                            <i class="menu-bullet menu-bullet-dot">
                                <span></span>
                            </i>
                            <span class="menu-text">{{ $menuSub->name }}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </li>
@endforeach
```
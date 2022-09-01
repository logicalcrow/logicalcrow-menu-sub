<?php

namespace Logicalcrow\Menu\Models;

use Illuminate\Database\Eloquent\Model;

class MenuSub extends Model
{
    protected $fillable = [
        'menu_id',
        'name',
        'url',
        'route',
        'order',
        'role',
    ];

    protected $hidden = ['created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}

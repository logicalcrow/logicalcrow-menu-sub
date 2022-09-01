<?php

namespace Logicalcrow\Menu\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Team;

class MenuSub extends Model
{
    protected $fillable = [
        'menu_id',
        'name',
        'url',
        'order',
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

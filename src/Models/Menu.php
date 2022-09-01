<?php

namespace Logicalcrow\Menu\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Team;

class Menu extends Model
{
    protected $fillable = [
        'name',
        'url',
        'ico',
        'namespace',
        'prefix',
        'base_path',
        'order',
    ];

    protected $hidden = ['created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function menuSubs()
    {
        return $this->hasMany(MenuSub::class);
    }
}

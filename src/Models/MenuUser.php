<?php

namespace Logicalcrow\Menu\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Team;

class MenuUser extends Model
{
    protected $fillable = [
        'team_id',
        'menu_id',
        'user_id',
    ];

    protected $hidden = ['created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function team()
    {
        return  $this->belongsTo(Team::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

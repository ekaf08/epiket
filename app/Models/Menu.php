<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'm_menu';
    protected $guarded = [];

    // public function children()
    // {
    //     $mumet = $this->belongsTo('App\Models\Menu', 'id', 'parent')->where([['parent', '!=', 0]]);
    //     return $mumet;
    // }

    // public function userCreatedBy(): BelongsTo
    // {
    //     return $this->belongsTo('App\Models\M_User', 'created_by', 'id_m_users');
    // }

    public function parent()
    {
        return $this->belongsTo(Menu::class, 'id_parent');
    }

    public function children()
    {
        return $this->hasMany(Menu::class, 'id_parent');
    }

    public function menu()
    {
        return $this->belongsToMany(RoleAccess::class, 'menu_id');
    }
}

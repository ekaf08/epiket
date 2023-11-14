<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Role extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'm_role';
    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function role_access()
    {
        return $this->belongsToMany(RoleAccess::class, 'role_id');
    }

    static public function getAkses($url)
    {
        $roleId = auth()->user()->id;
        $data = Role::leftJoin('role_access', 'role_access.role_id', 'm_role.id')
            ->leftJoin('m_menu', 'role_access.menu_id', 'm_menu.id')
            ->where('role_access.role_id', $roleId)
            ->where('m_menu.url', $url)
            ->whereNull('m_role.deleted_at')
            ->orderBy('m_menu.order', 'asc')
            ->first(['m_role.*', 'm_menu.*', 'role_access.*']);

        return $data;
    }
}

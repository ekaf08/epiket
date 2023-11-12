<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
}

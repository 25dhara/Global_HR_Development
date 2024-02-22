<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'is_active',
        'guard_name',
        'module_id'
    ];
    public function module()
    {
        return $this->belongsTo(Module::class);
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_has_permissions', 'permission_id', 'role_id');
    }
}

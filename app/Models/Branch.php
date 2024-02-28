<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Branch extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name',
        'is_active',
        'timezone',
        'prefix_code'
    ];
    public function users()
    {
        return $this->hasMany(User::class, 'branch_id');
    }
    public function departments()
    {
        return $this->belongsToMany(Department::class, 'branch_department', 'branch_id', 'department_id');
    }
}

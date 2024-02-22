<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'is_active',
        'created_by'
    ];
    public function users()
    {
        return $this->hasMany(User::class, 'branch_id');
    }
    public function activeDepartments()
    {
        return Department::where('is_active', 1)->where('branch_id', $this->id)->get();
    }
    public function departments()
    {
        return $this->belongsToMany(Department::class, 'branch_department', 'branch_id', 'department_id');
    }
}

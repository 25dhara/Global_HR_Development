<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Branch;

class Department extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'branch_id',
        'is_active',
        'created_by'
    ];
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }
}

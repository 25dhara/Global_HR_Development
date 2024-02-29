<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaritalStatus extends Model
{
    protected $table = 'marital_status';
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'name',
        'is_active',
    ];
}

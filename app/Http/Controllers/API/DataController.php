<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gender;
use App\Models\MaritalStatus;

class DataController extends Controller
{
    public function gender_data(){
        $genders = [
            ['name' => 'Male', 'is_active' => 1],
            ['name' => 'Female', 'is_active' => 1],
            ['name' => 'Other', 'is_active' => 1],
        ];

        foreach ($genders as $gender) {
            Gender::create($gender);
        }
    }
    public function marital_status_data(){
        $genders = [
            ['name' => 'Single', 'is_active' => 1],
            ['name' => 'Married', 'is_active' => 1],
        ];

        foreach ($genders as $gender) {
            MaritalStatus::create($gender);
        }
    }
}

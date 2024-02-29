<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gender;
use App\Models\MaritalStatus;

class DataController extends Controller
{
    public function gender_data()
    {
        $genders = [
            ['name' => 'Male', 'is_active' => 1],
            ['name' => 'Female', 'is_active' => 1],
            ['name' => 'Other', 'is_active' => 1],
        ];

        foreach ($genders as $gender) {
            Gender::updateOrCreate(
                ['name' => $gender['name']],
                ['is_active'=> $gender['is_active']]
            );
        }
    }
    public function marital_status_data()
    {
        $marital_status = [
            ['name' => 'Single', 'is_active' => 1],
            ['name' => 'Married', 'is_active' => 1],
        ];

        foreach ($marital_status as $marital) {

            MaritalStatus::updateOrCreate(
                ['name' => $marital['name']],
                ['is_active'=> $marital['is_active']]
            );
        }
    }
}

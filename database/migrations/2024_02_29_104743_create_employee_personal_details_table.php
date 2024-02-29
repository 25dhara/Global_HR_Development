<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employee_personal_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->string('second_name')->nullable();
            $table->string('aadhar_name')->nullable();
            $table->string('profile_pic')->nullable();
            $table->unsignedBigInteger('gender_id')->nullable();
            $table->date('d_o_b')->nullable();
            $table->unsignedBigInteger('marital_status_id')->nullable();
            $table->string('personal_email')->nullable();
            $table->string('primary_number')->nullable();
            $table->string('secondary_number')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('nationality_id')->nullable();
            $table->text('address')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->string('linkedin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_personal_details');
    }
};

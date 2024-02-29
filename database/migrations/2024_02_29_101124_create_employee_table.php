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
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('branch_dept_id');
            $table->unsignedBigInteger('team_type_id');
            $table->unsignedBigInteger('region_manager_id')->nullable();
            $table->unsignedBigInteger('senior_manager_id')->nullable();
            $table->unsignedBigInteger('manager_id')->nullable();
            $table->unsignedBigInteger('team_leader_id')->nullable();
            $table->integer('target')->nullable();
            $table->string('target_currency')->nullable();
            $table->boolean('is_manager')->default(0);
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->string('official_email')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('attendance_code')->nullable();
            $table->unsignedBigInteger('onboard_status_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};

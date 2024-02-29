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
        Schema::create('employee_official_details', function (Blueprint $table) {
            $table->id();
            $table->string('contract_status');
            $table->date('office_date')->nullable();
            $table->date('probation_date')->nullable();
            $table->date('leaving_date')->nullable();
            $table->string('job_title')->nullable();
            $table->string('timezone')->nullable();
            $table->string('time_slot')->nullable();
            $table->string('shift_type')->nullable();
            $table->string('work_location')->nullable();
            $table->integer('working_days')->nullable();
            $table->boolean('laptop')->default(0);
            $table->string('interview_type')->nullable();
            $table->string('scheduler')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_official_details');
    }
};

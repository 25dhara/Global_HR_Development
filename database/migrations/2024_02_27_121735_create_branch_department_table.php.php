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
        Schema::create('branch_department', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('branch_id');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('manager_id')->nullable();
            $table->integer('required_count')->nullable();
            $table->integer('vacancy')->nullable();
            $table->string('working_days')->nullable();
            $table->string('shift_type')->nullable();
            $table->time('shift_time_from')->nullable();
            $table->time('shift_time_till')->nullable();
            $table->boolean('is_active')->default(true);
            $table->unsignedBigInteger('action_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branch_department');
    }
};

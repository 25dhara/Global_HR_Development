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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->Integer('tka_id');
            $table->string('name');
            $table->string('country_code');
            $table->string('currency');
            $table->string('currency_title');
            $table->string('currency_symbol');
            $table->string('iso3');
            $table->string('sales_tax_label')->nullable();
            $table->boolean('charge_vat')->default(false);
            $table->decimal('vat_amount', 8, 2)->default(0.00);
            $table->decimal('vat_amount_elearning', 8, 2)->default(0.00);
            $table->boolean('conversion_required')->default(false);
            $table->decimal('exchange_rate', 8, 2)->default(1.00);
            $table->string('opening_hours')->nullable();
            $table->string('opening_days')->nullable();
            $table->string('date_format')->default('d/m/y');
            $table->boolean('is_advert')->default(false);
            $table->string('map_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};

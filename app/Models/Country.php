<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = 'countries';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'tka_id',
        'country_code',
        'currency',
        'currency_title',
        'currency_symbol',
        'iso3',
        'sales_tax_label',
        'charge_vat',
        'vat_amount',
        'vat_amount_elearning',
        'conversion_required',
        'exchange_rate',
        'opening_hours',
        'opening_days',
        'date_format',
        'is_advert',
        'map_id',
    ];
    public function regions()
    {
        return $this->hasMany(Region::class);
    }
}

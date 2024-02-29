<?php

namespace App\Http\Controllers\API;

use App\Models\Region;
use App\Models\Country;
use App\Models\Currency;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class CountryController extends Controller
{
    public function storeCountriesAndRegions()
    {
        $response = Http::get('https://www.theknowledgeacademy.com/_engine/scripts/get-country-location-continent-region.php');

        if ($response->successful()) {
            $data = $response->json();

            foreach ($data['continent'] as $continent) {
                foreach ($continent['zone'] as $zone) {
                    foreach ($zone['country'] as $tka_id => $countryData) {

                        $currency = Currency::updateOrCreate(
                            ['currency_code' => $countryData['currency']],
                            [
                                'name' => $countryData['currencyTitle'],
                                'currency_symbol' => $countryData['currencySymbol']
                            ]
                        );

                        $country = Country::updateOrCreate(
                            ['tka_id' => $tka_id],
                            [
                                'name' => $countryData['name'],
                                'country_code' => $countryData['countryCode'],
                                'currency' => $countryData['currency'],
                                'currency_title' => $countryData['currencyTitle'],
                                'currency_symbol' => $countryData['currencySymbol'],
                                'iso3' => $countryData['iso3'],
                                'sales_tax_label' => $countryData['salesTaxLabel'],
                                'charge_vat' => $countryData['chargeVAT'],
                                'vat_amount' => $countryData['vatAmount'],
                                'vat_amount_elearning' => $countryData['vatAmountElearning'],
                                'conversion_required' => $countryData['conversionRequired'],
                                'exchange_rate' => $countryData['exchangeRate'],
                                'opening_hours' => $countryData['openingHours'],
                                'opening_days' => $countryData['openingDays'],
                                'date_format' => $countryData['dateFormat'],
                                'is_advert' => $countryData['isAdvert'],
                                'map_id' => $countryData['mapId'],
                            ]
                        );

                        foreach ($countryData['region'] as $regionData) {
                            $region = new Region([
                                'name' => $regionData['name'],
                            ]);

                            $country->regions()->save($region);
                        }
                    }
                }
            }

            return response()->json(['message' => 'Data stored successfully'], 200);
        } else {
            return response()->json(['message' => 'Failed to fetch data from the API'], 500);
        }
    }
}

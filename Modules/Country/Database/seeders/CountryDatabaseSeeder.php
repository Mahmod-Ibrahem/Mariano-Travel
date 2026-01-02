<?php

namespace Modules\Country\Database\seeders;

use Illuminate\Database\Seeder;
use Modules\Country\Entities\Country;

class CountryDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            'Egypt',
            'Saudi Arabia '
        ];
        foreach ($countries as $country) {
            Country::create([
                'name' => $country
            ]);
        }
    }
}

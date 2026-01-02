<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Category\Database\seeders\CategorySeeder;
use Modules\Country\Database\seeders\CountryDatabaseSeeder;
use Modules\Exclusion\Database\seeders\ExclusionSeeder;
use Modules\Inclusion\Database\seeders\InclusionSeeder;
use Modules\Location\Database\seeders\LocationSeeder;
use Modules\Review\Database\seeders\ReviewSeeder;
use Modules\Setting\Database\seeders\SettingSeeder;
use Modules\SuperCategory\Database\seeders\SuperCategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Mahmoud Ibrahem',
            'email' => 'm@i.com',
        ]);

        $this->call([
            LocationSeeder::class,
            InclusionSeeder::class,
            ExclusionSeeder::class,
            SettingSeeder::class,
            CountryDatabaseSeeder::class,
            CategorySeeder::class,
            ReviewSeeder::class,
            SuperCategorySeeder::class,
        ]);
    }
}

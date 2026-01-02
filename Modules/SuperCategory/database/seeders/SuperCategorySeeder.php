<?php

namespace Modules\SuperCategory\Database\seeders;

use Illuminate\Database\Seeder;
use Modules\SuperCategory\App\Models\SuperCategory;

class SuperCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superCategory = ['Day Tours', 'Tour Packages'];
        foreach ($superCategory as $category) {
            SuperCategory::create([
                'name' => $category,
            ]);
        }
    }
}

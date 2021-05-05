<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'title' => 'TV Ads Not Showing'
        ]);
            
        Category::create([
            'title' => 'TV Display Broken'
        ]);
    }
}

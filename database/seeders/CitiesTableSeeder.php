<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'state_id' => '1',
            'city' => 'Shah Alam'
        ]);

        City::create([
            'state_id' => '2',
            'city' => 'Kota Bharu'
        ]);
    }
}

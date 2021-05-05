<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\District;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        District::create([
            'city_id' => '1',
            'district' => 'Seksyen 13'
        ]);

        District::create([
            'city_id' => '2',
            'district' => 'Ketereh'
        ]);
    }
}

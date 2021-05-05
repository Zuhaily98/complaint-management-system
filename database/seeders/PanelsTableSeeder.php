<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Panel;

class PanelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Panel::create([
            'district_id' => '1',
            'type' => 'Clinic',
            'name' => 'U.n.i KLINIK Shah Alam',
            'address' => '8, Jalan Boling Padang F 13/F',
            'postcode' => '40100',
            'latitude' => null,
            'longitude' => null
        ]);

        Panel::create([
            'district_id' => '1',
            'type' => 'Hospital',
            'name' => 'Hospital Shah Alam',
            'address' => 'Persiaran Kayangan',
            'postcode' => '40000',
            'latitude' => null,
            'longitude' => null
        ]);

        Panel::create([
            'district_id' => '2',
            'type' => 'Clinic',
            'name' => 'Klinik Ketereh',
            'address' => 'No.18, Pasar Besar Ketereh,',
            'postcode' => '16450',
            'latitude' => null,
            'longitude' => null
        ]);
    }
}

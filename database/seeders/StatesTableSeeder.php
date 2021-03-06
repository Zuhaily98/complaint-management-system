<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\State;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::create([
            'state' => 'Selangor'
        ]);

        State::create([
            'state' => 'Kelantan'
        ]);
    }
}

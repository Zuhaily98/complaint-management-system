<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guest;

class GuestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Guest::create([
            'name' => 'Ahmad Fareed',
            'email' => 'fareed@example.com',
            'phone' => '0191234456'
        ]);

        Guest::create([
            'name' => 'Amir Fikri',
            'email' => 'amir@example.com',
            'phone' => '0191230001'
        ]);

        Guest::create([
            'name' => 'Muhd Fakri',
            'email' => 'fakri@example.com',
            'phone' => '0134005020'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(GuestsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(DistrictsTableSeeder::class);
        $this->call(PanelsTableSeeder::class);
        $this->call(ComplaintsTableSeeder::class);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin Ahmad',
            'email' => 'ahmad@medkad.com',
            'role' => 'admin',
            'password' => Hash::make('admin@medkad.com')
        ]);

        User::create([
            'name' => 'Officer Abu',
            'email' => 'abu@medkad.com',
            'role' => 'officer',
            'password' => Hash::make('officer@medkad.com')
        ]);
    }
}

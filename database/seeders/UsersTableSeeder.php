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
            'email' => 'admin@medkad.com',
            'role' => 'admin',
            'password' => Hash::make('admin@medkad.com')
        ]);

        User::create([
            'name' => 'Admin Iman',
            'email' => 'iman@medkad.com',
            'role' => 'admin',
            'password' => Hash::make('iman@medkad.com')
        ]);

        User::create([
            'name' => 'Officer Abu',
            'email' => 'crew@medkad.com',
            'role' => 'officer',
            'password' => Hash::make('crew@medkad.com')
        ]);

        User::create([
            'name' => 'Officer Adib',
            'email' => 'adib@medkad.com',
            'role' => 'officer',
            'password' => Hash::make('adib@medkad.com')
        ]);
    }
}

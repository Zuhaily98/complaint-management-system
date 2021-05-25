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
            'uuid' => \Illuminate\Support\Str::uuid(),
            'email' => 'admin@medkad.com',
            'role' => 'admin',
            'password' => Hash::make('admin@medkad.com')
        ]);

        User::create([
            'name' => 'Admin Iman',
            'uuid' => \Illuminate\Support\Str::uuid(),
            'email' => 'iman@medkad.com',
            'role' => 'admin',
            'password' => Hash::make('iman@medkad.com')
        ]);

        User::create([
            'name' => 'Officer Abu',
            'uuid' => \Illuminate\Support\Str::uuid(),
            'email' => 'crew@medkad.com',
            'role' => 'officer',
            'password' => Hash::make('crew@medkad.com')
        ]);

        User::create([
            'name' => 'Officer Adib',
            'uuid' => \Illuminate\Support\Str::uuid(),
            'email' => 'adib@medkad.com',
            'role' => 'officer',
            'password' => Hash::make('adib@medkad.com')
        ]);
    }
}

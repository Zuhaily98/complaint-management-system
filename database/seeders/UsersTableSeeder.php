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
            'name' => 'Admin 5',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('admin@medkad.com')
        ]);

        User::create([
            'name' => 'Officer 3',
            'email' => 'officer@gmail.com',
            'role' => 'officer',
            'password' => Hash::make('officer@medkad.com')
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Complaint;

class ComplaintsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Complaint::create([
            'user_id' => '3',
            'guest_id' => '1',
            'category_id' => '1',
            'panel_id' => '1',
            'detail' => 'rosak',
            'priority' => 'Low',
            'status' => 'Pending'
        ]);

        Complaint::create([
            'user_id' => '4',
            'guest_id' => '2',
            'category_id' => '2',
            'panel_id' => '2',
            'detail' => 'hancur',
            'priority' => 'High',
            'status' => 'Closed'
        ]);

        Complaint::create([
            'user_id' => null,
            'guest_id' => '3',
            'category_id' => '2',
            'panel_id' => '3',
            'detail' => 'tak boleh display apa apa',
            'priority' => 'Low',
            'status' => 'Pending'
        ]);
    }
}

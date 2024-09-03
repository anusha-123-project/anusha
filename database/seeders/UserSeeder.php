<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Anu',
            'department_id' => 1,
            'designation_id' => 1, 
            'phone_number' => '8086162014',
        ]);

        User::create([
            'name' => 'Manu',
            'department_id' => 2,
            'designation_id' => 2, 
            'phone_number' => '9544425569',
        ]);

        User::create([
            'name' => 'Meenu',
            'department_id' => 3,
            'designation_id' => 3, 
            'phone_number' => '9544425258',
        ]);
        User::create([
            'name' => 'Neenu',
            'department_id' => 3,
            'designation_id' => 3, 
            'phone_number' => '9544425284',
        ]);
    }
}

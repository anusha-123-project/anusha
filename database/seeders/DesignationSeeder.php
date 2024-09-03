<?php

namespace Database\Seeders;
use App\Models\Designation; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesignationSeeder extends Seeder
{
   
    public function run()
    {
        Designation::create([
            'name' => 'H R Manager'
        ]);
        Designation::create([
            'name' => 'web designer'
        ]);
        Designation::create([
            'name' => 'PHP Developer'
        ]);
    }
}

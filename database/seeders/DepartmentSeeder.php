<?php

namespace Database\Seeders;
use App\Models\Department; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Department::create([
            'name' => 'Human Resources'
        ]);
        Department::create([
            'name' => 'UI/UX designer'
        ]);
        Department::create([
            'name' => 'Web Developer'
        ]);
    }
}

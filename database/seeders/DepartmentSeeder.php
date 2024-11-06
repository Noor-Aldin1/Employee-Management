<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    public function run()
    {
        // Sample departments
        Department::create([
            'department_name' => 'HR',
            'department_description' => 'Human Resources Department',
        ]);

        Department::create([
            'department_name' => 'IT',
            'department_description' => 'Information Technology Department',
        ]);

        Department::create([
            'department_name' => 'Marketing',
            'department_description' => 'Marketing and Advertising Department',
        ]);
    }
}

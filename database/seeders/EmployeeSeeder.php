<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        // Sample employees
        Employee::create([
            'full_name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone_number' => '123-456-7890',
            'date_of_employment' => '2024-01-15',
            'department_id' => 1,
        ]);

        Employee::create([
            'full_name' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'phone_number' => '987-654-3210',
            'date_of_employment' => '2023-06-10',
            'department_id' => 2,
        ]);

        Employee::create([
            'full_name' => 'Emily Johnson',
            'email' => 'emily.johnson@example.com',
            'phone_number' => '555-555-5555',
            'date_of_employment' => '2024-03-01',
            'department_id' => 3,
        ]);
    }
}

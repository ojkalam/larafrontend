<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Employee;
use App\Models\Project;
use App\Models\EmployeeProjectAssignment;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EmployeeProjectAssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $employeeIds = Employee::pluck('id')->toArray();
        $projectIds = Project::pluck('id')->toArray();

        // To avoid duplicate assignments, track them in an array
        $assigned = [];

        // Let's create 30 random assignments
        for ($i = 0; $i < 30; $i++) {
            $employee_id = $faker->randomElement($employeeIds);
            $project_id = $faker->randomElement($projectIds);

            // Skip if this pair already exists to avoid duplicates
            if (in_array("{$employee_id}-{$project_id}", $assigned)) {
                $i--;
                continue;
            }

            $assigned[] = "{$employee_id}-{$project_id}";
 
            EmployeeProjectAssignment::create([
                'employee_id' => $employee_id,
                'project_id' => $project_id,
                'hours' => $faker->numberBetween(1, 40), // hours worked
            ]);
        }
    }
}

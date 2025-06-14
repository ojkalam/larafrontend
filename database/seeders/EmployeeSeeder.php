<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;
use App\Models\Department;
use Faker\Factory as Faker;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Get department IDs to assign to employees
        $departmentIds = Department::pluck('id')->toArray();

        foreach (range(1, 20) as $i) {
            Employee::create([
                'dept_id'   => $faker->randomElement($departmentIds),
                'name'      => $faker->name,
                'email'     => $faker->unique()->safeEmail,
                'gender'    => $faker->randomElement(['male', 'female', 'other']),
                'address'   => $faker->address,
                'join_date' => $faker->dateTimeBetween('-3 years', 'now'),
            ]);
        }
    }
}

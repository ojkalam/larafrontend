<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Department;
use Faker\Factory as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Get all department IDs to assign projects to them
        $departmentIds = Department::pluck('id')->toArray();

        foreach (range(1, 10) as $i) {
            Project::create([
                'dept_id'      => $faker->randomElement($departmentIds),
                'project_name' => $faker->bs(), // e.g. "integrate scalable systems"
                'p_code'       => strtoupper($faker->bothify('PRJ-###??')),
                'p_location'   => $faker->city,
            ]);
        }
    }
}

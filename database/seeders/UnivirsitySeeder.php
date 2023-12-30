<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Univirsity;
use Illuminate\Database\Seeder;

class UnivirsitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Univirsity::factory(5)
        ->hasImages(5)
        ->has(
            Department::factory(5)->has(Teacher::factory(3)->hasImage())
        ->has(Student::factory(5)
        ->hasImage()
        ->hasRegistration()))
        ->create();
    }
}

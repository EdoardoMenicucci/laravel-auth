<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newProject = new Project();
        $newProject->name = 'Project 1';
        $newProject->description = 'Project 1 description';
        $newProject->start_date = '1972-03-24';
        $newProject->end_date = '1972-04-24';
        $newProject->status = 1;
        $newProject->save();
    }
}

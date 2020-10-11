<?php

use doctype_admin\Website\Models\Project;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'name' => 'Doctype Admin',
                'excerpt' => 'Doctype Admin Panel',
                'description' => '',
                'image' => 'uploads/website/project/project1-1602405773.jpg'
            ],
            [
                'name' => 'Doctype Admin',
                'excerpt' => 'Doctype Admin Panel',
                'description' => '',
                'image' => 'uploads/website/project/project2-1602405792.jpg'
            ],
            [
                'name' => 'Doctype Admin',
                'excerpt' => 'Doctype Admin Panel',
                'description' => '',
                'image' => 'uploads/website/project/project6-1602405829.jpg'
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}

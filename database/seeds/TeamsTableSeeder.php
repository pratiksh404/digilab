<?php

use doctype_admin\Website\Models\Team;
use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $media = [
            [
                'id' => 0,
                'url' => 'http://pratiksh404.github.io/',
                'icon' => 'fab fa-facebook',
                'name' => 'Facebook',
            ],
            [
                'id' => 0,
                'url' => 'http://pratiksh404.github.io/',
                'icon' => 'fab fa-twitter',
                'name' => 'Twitter',
            ],
            [
                'id' => 0,
                'url' => 'http://pratiksh404.github.io/',
                'icon' => 'fab fa-github',
                'name' => 'Github',
            ],
            [
                'id' => 0,
                'url' => 'http://pratiksh404.github.io/',
                'icon' => 'fab fa-instagram',
                'name' => 'Instagram',
            ],
        ];

        $teams = [
            [
                'name' => 'Lloyd Wilson',
                'designation' => 'CEO, FOUNDER',
                'description' => '',
                'phone_no' => json_decode(json_encode(["0123456789"])),
                'image' => 'uploads/website/team/staff1-1602241198.jpg',
                'social_media' => json_decode(json_encode($media))
            ],
            [
                'name' => 'Lloyd Wilson',
                'designation' => 'HR Head',
                'description' => '',
                'phone_no' => json_decode(json_encode(["0123456789"])),
                'image' => 'uploads/website/team/staff1-1602241198.jpg',
                'social_media' => json_decode(json_encode($media))
            ],
            [
                'name' => 'Lloyd Wilson',
                'designation' => 'IT Head',
                'description' => '',
                'phone_no' => json_decode(json_encode(["0123456789"])),
                'image' => 'uploads/website/team/staff1-1602241198.jpg',
                'social_media' => json_decode(json_encode($media))
            ],
            [
                'name' => 'Lloyd Wilson',
                'designation' => 'Project Manager',
                'description' => '',
                'phone_no' => json_decode(json_encode(["0123456789"])),
                'image' => 'uploads/website/team/staff1-1602241198.jpg',
                'social_media' => json_decode(json_encode($media))
            ],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}

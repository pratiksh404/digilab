<?php

use Illuminate\Database\Seeder;
use doctype_admin\Website\Models\Image;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            [
                'name' => 'Small Details Make A Big Impression',
                'image' => 'uploads/website/slider/bg_1-1601972024.jpg',
                'excerpt' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.',
                'portfolio_id' => null,
                'image_type' => 5,
                'youtube_link' => '',
                'image_description' => '',
                'redirect_link' => ''
            ],
            [
                'name' => 'Strategic Design And Technology Agency',
                'image' => 'uploads/website/slider/bg_2-1601972159.jpg',
                'excerpt' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.',
                'portfolio_id' => null,
                'image_type' => 5,
                'youtube_link' => '',
                'image_description' => '',
                'redirect_link' => ''
            ]
        ];

        foreach ($images as $image) {
            Image::create($image);
        }
    }
}

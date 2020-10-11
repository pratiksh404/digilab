<?php

use doctype_admin\Settings\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $settings = [
            [
                'setting_name' => 'prefix',
                'string_value' => 'Doctype',
                'integer_value' => null,
                'text_value' => null,
                'boolean_value' => null,
                'setting_type' => 1,
                'setting_custom' => null,
            ],
            [
                'setting_name' => 'suffix',
                'string_value' => 'Admin',
                'integer_value' => null,
                'text_value' => null,
                'boolean_value' => null,
                'setting_type' => 1,
                'setting_custom' => null,
            ],
            [
                'setting_name' => 'site_name',
                'string_value' => 'Doctype Admin',
                'integer_value' => null,
                'text_value' => null,
                'boolean_value' => null,
                'setting_type' => 1,
                'setting_custom' => null,
            ],
            [
                'setting_name' => 'counter_background',
                'string_value' => 'uploads/setting/p2UrdGh8JE1xSjX1bai7qyKeHECzf6RoeXHnoiVg.jpeg',
                'integer_value' => null,
                'text_value' => null,
                'boolean_value' => null,
                'setting_type' => 3,
                'setting_custom' => '{ "image" : { "fit" : { "width" : "1000", "height" : "700" }, "quality" : "80" } }',
            ],
            [
                'setting_name' => 'about',
                'string_value' => null,
                'integer_value' => null,
                'text_value' => '<p style="color: rgb(153, 153, 153); font-family: &quot;Nunito Sans&quot;, Arial, sans-serif;">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p><p style="color: rgb(153, 153, 153); font-family: &quot;Nunito Sans&quot;, Arial, sans-serif;">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p><p style="color: rgb(153, 153, 153); font-family: &quot;Nunito Sans&quot;, Arial, sans-serif;">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>',
                'boolean_value' => null,
                'setting_type' => 2,
                'setting_custom' => null,
            ],
            [
                'setting_name' => 'about_background',
                'string_value' => 'uploads/setting/k5V4cs9ixAdh1RBfRswHvkmJ2FsUvFrKYhfqqejJ.jpeg',
                'integer_value' => null,
                'text_value' => null,
                'boolean_value' => null,
                'setting_type' => 3,
                'setting_custom' => null,
            ],
            [
                'setting_name' => 'address',
                'string_value' => '198 West 21th Street, Suite',
                'integer_value' => null,
                'text_value' => null,
                'boolean_value' => null,
                'setting_type' => 1,
                'setting_custom' => null,
            ],
            [
                'setting_name' => 'contact_number',
                'string_value' => '+ 1235 2355 98',
                'integer_value' => null,
                'text_value' => null,
                'boolean_value' => null,
                'setting_type' => 1,
                'setting_custom' => null,
            ],
            [
                'setting_name' => 'email_address',
                'string_value' => 'info@yoursite.com',
                'integer_value' => null,
                'text_value' => null,
                'boolean_value' => null,
                'setting_type' => 1,
                'setting_custom' => null,
            ],
            [
                'setting_name' => 'website',
                'string_value' => 'yoursite.com',
                'integer_value' => null,
                'text_value' => null,
                'boolean_value' => null,
                'setting_type' => 1,
                'setting_custom' => null,
            ],
            [
                'setting_name' => 'map',
                'string_value' => 'https://maps.google.com/maps?q=samridhi%20college&t=&z=13&ie=UTF8&iwloc=&output=embed',
                'integer_value' => null,
                'text_value' => null,
                'boolean_value' => null,
                'setting_type' => 1,
                'setting_custom' => null,
            ],
        ];
        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}

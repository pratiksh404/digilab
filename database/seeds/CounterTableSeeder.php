<?php

use doctype_admin\Website\Models\Counter;
use Illuminate\Database\Seeder;

class CounterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $counters = [
            [
                'counter_name' => 'Cup of Coffee',
                'count' => 2020,
                'counter_icon' => 'fa fa-coffee'
            ],
            [
                'counter_name' => 'Clients',
                'count' => 258,
                'counter_icon' => 'fa fa-user'
            ],
            [
                'counter_name' => 'Projects',
                'count' => 550,
                'counter_icon' => 'fa fa-book'
            ],
            [
                'counter_name' => 'No. of Services',
                'count' => 18,
                'counter_icon' => 'fa fa-cogs'
            ],
        ];

        foreach ($counters as $counter) {
            Counter::create($counter);
        }
    }
}

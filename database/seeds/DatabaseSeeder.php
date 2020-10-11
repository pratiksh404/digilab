<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ConnectRelationshipsSeeder::class,
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            UsersTableSeeder::class,
            ImageTableSeeder::class,
            CounterTableSeeder::class,
            SettingsTableSeeder::class,
            ProjectsTableSeeder::class,
            ServicesTableSeeder::class,
            SettingsTableSeeder::class,
            TeamsTableSeeder::class,
        ]);
    }
}

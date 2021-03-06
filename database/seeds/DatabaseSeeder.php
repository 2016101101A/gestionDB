<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(AreasTableSeeder::class);
        $this->call(MaterialTypesTableSeeder::class);
        $this->call(AuthorsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}

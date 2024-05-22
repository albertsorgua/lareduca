<?php

use Illuminate\Database\Seeder;
use Database\Seeders\AssignmentSeeder;
use Database\Seeders\CourseSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            CourseSeeder::class,
            AssignmentSeeder::class
        ]);
    }
}
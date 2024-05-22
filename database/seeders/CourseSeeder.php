<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
            'title' => 'M3',
            'description' => 'Programación',
            'teacher_id' => 1
        ]);  

        DB::table('courses')->insert([
            'title' => 'M6',
            'description' => 'Desarrollo Web en entorno cliente',
            'teacher_id' => 2
        ]);

        DB::table('courses')->insert([
            'title' => 'M7',
            'description' => 'Desarrollo Web en entorno servidor',
            'teacher_id' => 2
        ]);

        DB::table('courses')->insert([
            'title' => 'M8',
            'description' => 'Despliegue de aplicaciones web',
            'teacher_id' => 1
        ]);

        DB::table('courses')->insert([
            'title' => 'M9',
            'description' => 'Desarrollo de interfaces',
            'teacher_id' => 2
        ]);

        DB::table('courses')->insert([
            'title' => 'M12',
            'description' => 'Proyecto',
            'teacher_id' => 1
        ]);
    }
}
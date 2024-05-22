<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('assignments')->insert([
            'title' => 'Práctica 1',
            'description' => 'Práctica de programación en Java',
            'course_id' => 1,
            'due_date' => '2024-04-25 23:59:59'
        ]);

        DB::table('assignments')->insert([
            'title' => 'Práctica 2',
            'description' => 'Práctica de programación en PHP',
            'course_id' => 1,
            'due_date' => '2024-05-25 23:59:59'
        ]);

        DB::table('assignments')->insert([
            'title' => 'Práctica 1',
            'description' => 'Práctica de diseño web con HTML y CSS',
            'course_id' => 2,
            'due_date' => '2024-04-25 23:59:59'
        ]);

        DB::table('assignments')->insert([
            'title' => 'Práctica 2',
            'description' => 'Práctica de diseño web con Bootstrap',
            'course_id' => 2,
            'due_date' => '2024-05-25 23:59:59'
        ]);

        DB::table('assignments')->insert([
            'title' => 'Práctica 1',
            'description' => 'Práctica de programación en PHP',
            'course_id' => 3,
            'due_date' => '2024-04-25 23:59:59'
        ]);

        DB::table('assignments')->insert([
            'title' => 'Práctica 2',
            'description' => 'Práctica de programación en Node.js',
            'course_id' => 3,
            'due_date' => '2024-05-25 23:59:59'
        ]);

        DB::table('assignments')->insert([
            'title' => 'Práctica 1',
            'description' => 'Práctica de programación en PHP',
            'course_id' => 4,
            'due_date' => '2024-04-25 23:59:59'
        ]);

        DB::table('assignments')->insert([
            'title' => 'Práctica 2',
            'description' => 'Práctica de programación en Java',
            'course_id' => 4,
            'due_date' => '2024-05-25 23:59:59'
        ]);

        DB::table('assignments')->insert([
            'title' => 'Práctica 1',
            'description' => 'Práctica de programación en PHP',
            'course_id' => 5,
            'due_date' => '2024-04-25 23:59:59'
        ]);

        DB::table('assignments')->insert([
            'title' => 'Práctica 2',
            'description' => 'Práctica de programación en Java',
            'course_id' => 5,
            'due_date' => '2024-05-25 23:59:59'
        ]);

        DB::table('assignments')->insert([
            'title' => 'Práctica 1',
            'description' => 'Práctica de programación en PHP',
            'course_id' => 6,
            'due_date' => '2024-04-25 23:59:59'
        ]);

        DB::table('assignments')->insert([
            'title' => 'Práctica 2',
            'description' => 'Práctica de programación en Java',
            'course_id' => 6,
            'due_date' => '2024-05-25 23:59:59'
        ]);
    }
}

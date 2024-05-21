<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Albert',
            'role' => 'admin',
            'email' => 'asg@email.com',
            'password' => Hash::make('Monlau2023'),
        ]);
        DB::table('users')->insert([
            'name' => 'Josep',
            'role' => 'teacher',
            'email' => 'jsr@email.com',
            'password' => Hash::make('Monlau2023'),
        ]);
        DB::table('users')->insert([
            'name' => 'Carlos',
            'role' => 'admin',
            'email' => 'cag@email.com',
            'password' => Hash::make('Monlau2023'),
        ]);
        DB::table('users')->insert([
            'name' => 'Carles',
            'role' => 'student',
            'email' => 'csr@email.com',
            'password' => Hash::make('Monlau2023'),
        ]);
        DB::table('users')->insert([
            'name' => 'Ruben',
            'role' => 'teacher',
            'email' => 'rs@email.com',
            'password' => Hash::make('Monlau2023'),
        ]);
    }
}




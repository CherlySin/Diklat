<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
            'name' => 'Member',
            'email' => 'member@gmail.com',
            'password' => Hash::make('123456'),
        ], 
        [
            'name' => 'Super Admin',
            'email' => 'superAdmin@gmail.com',
            'password' => Hash::make('123456'),
        ],
        [
            'name' => 'DPUK',
            'email' => 'dpuk@gmail.com',
            'password' => Hash::make('123456'),
        ],
        [
            'name' => 'Keuangan',
            'email' => 'keuangan@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}

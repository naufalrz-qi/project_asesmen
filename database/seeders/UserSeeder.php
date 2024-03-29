<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'     => 'admin',
            'username'     => 'admin',
            'email'    => 'admin@gmail.com',
            'password'     => Hash::make('admin'),
            'role'          => 'admin',
        ],
        [
            'name'     => 'user1',
            'username'     => 'user1',
            'email'    => 'user1@gmail.com',
            'password'     => Hash::make('user1'),
            'role'          => 'user',
        ]
    );

    }
}

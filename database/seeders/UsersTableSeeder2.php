<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // add more users
        $users = [
            [
                'username' => 'clara',
                'password' => bcrypt('senha'), // password_hash
            ],
            [
                'username' => 'gui',
                'password' => bcrypt('senha'), // password_hash 
            ]
        ];

        DB::table('users')->insert($users);
    }
}

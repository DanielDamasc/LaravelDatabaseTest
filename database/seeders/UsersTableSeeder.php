<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Escuta e carrega os métodos das outras classes, as outras seeders.
        $this->call([
            UsersTableSeeder1::class,
            UsersTableSeeder2::class
        ]);
    }
}

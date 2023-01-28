<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'name' => 'saeed',
            'email' => 'saeed@mail.com',
            'password' => '$2y$10$jsjlf0ywusv6QYszhhlLpudf8irUhGDxUfa6s0QDa/F.j1UC/crZW'
        ]);

        User::create([

            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => '$2y$10$jsjlf0ywusv6QYszhhlLpudf8irUhGDxUfa6s0QDa/F.j1UC/crZW'
        ]);
    }
}

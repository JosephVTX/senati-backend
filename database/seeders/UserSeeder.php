<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(19)->create();

        \App\Models\User::create([
            'name' => 'Vega AP',
            'email' => 'muchancho@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'demo1',
                'password' => Hash::make('skills2023d1'),
                'created_at' => now()
            ],
            [
                'name' => 'demo2',
                'password' => Hash::make('skills2023d2'),
                'created_at' => now()
            ],
        ];

        DB::table('users')->insert($users);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'type' => 1,
                'name' => 'Admin User',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456789'),
                'block' => 0,
                'status' => 0,
            ],
            [
                'type' => 2,
                'name' => 'Staff User',
                'email' => 'staff@gmail.com',
                'password' => bcrypt('123456789'),
                'block' => 0,
                'status' => 0,
            ],
            [
                'type' => 3,
                'name' => 'Customer User',
                'email' => 'customer@gmail.com',
                'password' => bcrypt('123456789'),
                'block' => 0,
                'status' => 0,
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}

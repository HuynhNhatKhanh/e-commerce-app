<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $passwordAdmin = 'Admin@123';
        $passwordUser = 'User@123';
        $createMultipleData = [
            ['name' => 'admin1', 'email' => 'admin1@gmail.com', 'password' => Hash::make($passwordAdmin), 'role' => 'admin'],
            ['name' => 'admin2', 'email' => 'admin2@gmail.com', 'password' => Hash::make($passwordAdmin), 'role' => 'admin'],
            ['name' => 'admin3', 'email' => 'admin3u@gmail.com', 'password' => Hash::make($passwordAdmin), 'role' => 'admin'],
            ['name' => 'user1', 'email' => 'user1@gmail.com', 'password' => Hash::make($passwordUser), 'role' => 'user'],
            ['name' => 'user2', 'email' => 'user2@gmail.com', 'password' => Hash::make($passwordUser), 'role' => 'user'],
            ['name' => 'user3', 'email' => 'user3@gmail.com', 'password' => Hash::make($passwordUser), 'role' => 'user'],
        ];

        User::insert($createMultipleData);
    }
}

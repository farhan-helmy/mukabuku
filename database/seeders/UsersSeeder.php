<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'test',
            'last_name' => 'user',
            'email' => 'user@mukabuku.com',
            'password' => Hash::make('password123'),
            'phone_number' => '0123456789',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'andretamanaha@decasport.com',
            'password' => \Hash::make('1234'),
            'created_at' => now(),
            'updated_at' => now(),
            'role' => 'admin',

        ]);
    }
}

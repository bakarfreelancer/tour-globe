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
        $users = [
            [
                'name': 'Abu Bakar',
                'email': 'bakar@mail.com',
                'password': Hash::make('12345'),
                'role': 'admin'
            ]
        ];
        foreach ($users as $user) {
            \App\Models\User::create($user);
        }
    }
}

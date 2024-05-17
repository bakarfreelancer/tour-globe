<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder

{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $users = [
            [
                'name'=> 'Abu Bakar',
                'email'=> 'bakar@mail.com',
                'password'=> Hash::make('12345'),
                'role'=> 'admin'
            ],
            [
                'name'=> 'John Doe',
                'email'=> 'john@mail.com',
                'password'=> Hash::make('12345'),
                'role'=> 'tourist'
            ]
        ];
        foreach ($users as $user) {
            \App\Models\User::create($user);
        }

    }
}

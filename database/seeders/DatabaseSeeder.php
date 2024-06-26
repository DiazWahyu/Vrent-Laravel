<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'SuperAdmin',
            'email' => 'superadmin@test.com',
            'role' => 'SuperAdmin',
            'password' => Hash::make('password')
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'role' => 'Admin',
            'password' => Hash::make('admin123')
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Diaz',
            'email' => 'diaz@gmail.com',
            'role' => 'user',
            'password' => Hash::make('diaz1234')
        ]);
    }
}

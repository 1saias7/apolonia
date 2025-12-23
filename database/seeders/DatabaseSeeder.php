<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Usuario Administrador
        User::create([
            'name' => 'Admin',
            'email' => 'admin@app.cl',
            'password' => Hash::make('CR_OymApp#2024'),
            'email_verified_at' => now(),
        ]);

        // Isaías
        User::create([
            'name' => 'Isaías',
            'email' => 'isaias@app.cl',
            'password' => Hash::make('Isaias2024!'),
            'email_verified_at' => now(),
        ]);

        // Manolo
        User::create([
            'name' => 'Manolo',
            'email' => 'manolo@app.cl',
            'password' => Hash::make('Manolo2024!'),
            'email_verified_at' => now(),
        ]);

        // João
        User::create([
            'name' => 'João',
            'email' => 'joao@app.cl',
            'password' => Hash::make('Joao2024!'),
            'email_verified_at' => now(),
        ]);

        // Alexis
        User::create([
            'name' => 'Alexis',
            'email' => 'alexis@app.cl',
            'password' => Hash::make('Alexis2024!'),
            'email_verified_at' => now(),
        ]);

        // Johnson
        User::create([
            'name' => 'Johnson',
            'email' => 'johnson@app.cl',
            'password' => Hash::make('Johnson2024!'),
            'email_verified_at' => now(),
        ]);
    }
}
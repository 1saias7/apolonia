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

        // Puedes agregar más seeders aquí
        // User::create([
        //     'name' => 'Isaías',
        //     'email' => 'isaias@app.cl',
        //     'password' => Hash::make('Isaias2024!'),
        //     'email_verified_at' => now(),
        // ]);
    }
}
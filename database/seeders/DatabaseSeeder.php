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
        // Crear usuario administrador
        User::create([
            'name' => 'Administrador OYM',
            'email' => 'admin@app.cl',
            'password' => Hash::make('CR_OymApp#2024'),
            'email_verified_at' => now(),
        ]);

        // Puedes crear más usuarios si lo necesitas
        // User::factory(5)->create();
    }
}
<?php

namespace Database\Seeders;

use App\Models\Compte;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Ben',
            'email' => 'ben@gmail.com',
            'password' => '12345678',
        ]);

        Compte::factory(45)->create();

    }
}

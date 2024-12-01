<?php

namespace Database\Seeders;

use App\Models\Compte;
use App\Models\Projets;
use App\Models\Transactions;
use App\Models\transactions_comptes;
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

        Compte::factory()->create([
            'name' => 'Fond Général',
            'total' => random_int(2000, 6000),
        ]);
        Compte::factory()->create([
            'name' => 'Fond de fonctionnement',
            'total' => random_int(1000, 6000),
        ]);

        Compte::factory(4)->create();


        $transactions = Transactions::factory(100)->create();

        foreach ($transactions as $transaction) {
            $transaction->compte_id = Compte::all()->random()->id;
            $transaction->save();
        }

        Projets::factory(15)->create();

    }
}

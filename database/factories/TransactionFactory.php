<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date'=> $this->faker->dateTimeBetween(),
            'communication'=> $this->faker->sentence(),
            'montant'=> $this->faker->numberBetween(-15000,40000),
        ];
    }
}

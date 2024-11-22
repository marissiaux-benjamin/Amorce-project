<?php

namespace Database\Factories;
use App\Models\Compte;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompteFactory extends Factory
{
    protected $model = Compte::class;

    public function definition(): array
    {
        return [
            'name'=> $this->faker->company(),
            'total'=> $this->faker->numberBetween(800,2000),
        ];
    }
}

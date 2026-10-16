<?php

namespace Database\Factories;

use App\Models\Trader;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Trader>
 */
class TraderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //['name', 'description', 'country']
            'name' => fake('hu_HU')->firstName(),
            'description' => fake()->sentence(5),
            'country' => fake()->country()
        ];
    }
}

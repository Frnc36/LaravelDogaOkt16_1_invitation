<?php

namespace Database\Factories;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends Factory<Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //['user_id', 'event_id', 'status']
            'user_id' => User::all()->random()->id,
            //'event_id' => Event::all()->random()->id,
            'status' => fake()->numberBetween(0, 1),

        ];
    }
}

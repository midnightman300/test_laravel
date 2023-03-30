<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ActorMovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'actor_id' => $this->faker->numberBetween(0,50),
            'movie_id' => $this->faker->numberBetween(0,50),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Songs>
 */
class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idUser' => 1,
            'idGender' => 1,
            'title' => $this->faker->sentence(),
            'artist' => $this->faker->name(),
            'image' => $this->faker->imageUrl(),
            'url' => 'https://www.youtube.com/watch?v=3iSnwlW-1LI',
            'date' => NULL,
            'played' => 0,
        ];
    }
}

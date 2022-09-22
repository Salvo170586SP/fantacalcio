<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $ragSoc = $this->faker->randomElement(['fc.', 'ssc.', 'ac.']);
        $squadra = $this->faker->city();
        $nome = $ragSoc . $squadra;

        return [
            'name' => $nome,
            'city' => $this->faker->city(),
            'logo' => 'https://picsum.photos/200/300.jpg',
            'championship' => $this->faker->randomElement(['A', 'B', 'C']),
            'ceo' => $this->faker->name(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Makanan>
 */
class MakananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->word(),
            'rasa' => $this->faker->word(),
            'harga' => $this->faker->randomNumber(5, true),
            'penjual_id' => $this->faker->numberBetween(1, 5),
        ];
        
    }
}

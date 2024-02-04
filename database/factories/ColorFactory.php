<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ColorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $color = ['yellow', 'black', 'white', 'gold', 'silver'];
        return [
            'color'=> fake()->unique()->randomElement($color),
            'user_id'=> 2
        ];
    }
}

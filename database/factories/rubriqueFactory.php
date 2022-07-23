<?php

namespace Database\Factories;

use App\Models\rubrique;
use Illuminate\Database\Eloquent\Factories\Factory;

class rubriqueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(rand(1, 3), true)
        ];
    }
}

<?php

namespace Database\Factories;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_objet' =>$this->faker->word(rand(5, 10), true),

            'description' =>$this->faker->realText($maxNbChars = 70, $indexSize = 2),

            'dco'=>$this->faker->year($max = 'now'),

            'image' => 'https://picsum.photos/200'

        ];
    }
}
// imageUrl($width = 640, $height = 480)
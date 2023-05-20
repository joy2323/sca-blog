<?php

namespace Database\Factories;

use App\Models\User;
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
            'title' => $this->faker->sentence, //Generates a fake sentence
            'body' => $this->faker->paragraph(15), //generates fake 30 paragraphs
            'user_id' => User::factory()->create()->id,
            //Generates a User from factory and extracts id

        ];
    }
}

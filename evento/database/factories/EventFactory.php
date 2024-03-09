<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'location' => $this->faker->address(),
            'date' => $this->faker->date(),
            'image' => 'uploads/default.jpg',
            'available_seats' => $this->faker->numberBetween(1, 999),
            'prix' => $this->faker->randomFloat(1, 1, 999),
            'user_id' => User::factory(),
            'categorie_id' => Category::factory(),
        ];
    }
}

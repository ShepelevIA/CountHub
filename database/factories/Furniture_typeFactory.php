<?php

namespace Database\Factories;

use App\Models\Furniture_type;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Furniture_type>
 */
class Furniture_typeFactory extends Factory
{
    protected $model = Furniture_type::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word
        ];
    }
}

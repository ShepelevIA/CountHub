<?php

namespace Database\Factories;

use App\Models\Cabinet;
use App\Models\Furniture_type;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Furniture>
 */
class FurnitureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'furniture_type_id' => Furniture_type::get()->random()->id,
            'cabinet_id' => Cabinet::get()->random()->id,
            'inventory_number' => $this->faker->randomNumber(),
            'color' => $this->faker->colorName
        ];
    }
}

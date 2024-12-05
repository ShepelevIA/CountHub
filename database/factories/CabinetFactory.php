<?php

namespace Database\Factories;

use App\Models\Cabinet_type;
use App\Models\Floor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cabinet>
 */
class CabinetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type_cabinet_id' => Cabinet_type::get()->random()->id,
            'title' => $this->faker->word,
            'number_cabinet' => $this->faker->randomNumber(),
            'floor' => Floor::get()->random()->id,
        ];
    }
}

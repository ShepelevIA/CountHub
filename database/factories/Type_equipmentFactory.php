<?php

namespace Database\Factories;

use App\Models\Type_equipment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Type_equipment>
 */
class Type_equipmentFactory extends Factory
{
    protected $model = Type_equipment::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word,
        ];
    }
}

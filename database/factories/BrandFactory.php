<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Type_equipment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    protected $model = Brand::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type_equipment_id' => Type_equipment::get()->random()->id,
            'title' => $this->faker->word
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Model_equipment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model_equipment>
 */
class Model_equipmentFactory extends Factory
{
    protected $model = Model_equipment::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type_brand_id' => Brand::get()->random()->id,
            'title' => $this->faker->word
        ];
    }
}

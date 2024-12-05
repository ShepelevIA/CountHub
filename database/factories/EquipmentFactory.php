<?php

namespace Database\Factories;

use App\Models\Cabinet;
use App\Models\Equipment;
use App\Models\Model_equipment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipment>
 */
class EquipmentFactory extends Factory
{
    protected $model = Equipment::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'model_id' => Model_equipment::get()->random()->id,
            'cabinet_id' => Cabinet::get()->random()->id,
            'inventory_number' => $this->faker->randomNumber()
        ];
    }
}

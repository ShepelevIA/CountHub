<?php

namespace Database\Factories;

use App\Models\Cabinet_type;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cabinet_type>
 */
class Cabinet_typeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Cabinet_type::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word,
        ];
    }
}

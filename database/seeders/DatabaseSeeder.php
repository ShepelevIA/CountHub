<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Brand;
use App\Models\Building;
use App\Models\Cabinet;
use App\Models\Cabinet_type;
use App\Models\Equipment;
use App\Models\Furniture;
use App\Models\Furniture_type;
use App\Models\Model_equipment;
use App\Models\Type_equipment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $buildings = Building::factory(5)->create();

        // foreach ($buildings as $building) {
        //     for ($i = 1; $i <= $building->count_floor; $i++) {
        //         $building->floors()->create([
        //             'floor' => $i,
        //             'building_id' => $building->id
        //         ]);
        //     }
        // }

        // Cabinet_type::factory(10)->create();
        // Cabinet::factory(50)->create();
        // Type_equipment::factory(40)->create();
        // Brand::factory(150)->create();
        // Model_equipment::factory(300)->create();
        // Equipment::factory(500)->create();
        // Furniture_type::factory(10)->create();
        // Furniture::factory(500)->create();
    }
}

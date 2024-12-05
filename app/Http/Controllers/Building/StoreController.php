<?php

namespace App\Http\Controllers\Building;

use App\Http\Controllers\Controller;
use App\Http\Requests\Building\StoreRequest;
use App\Models\Building;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $count_floor = $data['count_floor'];

        $building = Building::firstOrCreate($data);

        for ($i = 1; $i <= $count_floor; $i++) {
            $building->floors()->create([
                'floor' => $i,
                'building_id' => $building->id
            ]);
        }

       // return response()->json(['message' => '111111']);
    }
}

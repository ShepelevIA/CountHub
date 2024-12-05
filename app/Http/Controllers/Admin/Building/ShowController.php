<?php

namespace App\Http\Controllers\Admin\Building;

use App\Http\Controllers\Controller;
use App\Models\Building;

class ShowController extends Controller
{
    public function __invoke(Building $building)
    {
        $countFloor = $building->cabinets->groupBy('floor')->count();
        return view('building.show', compact('building', 'countFloor'));
    }
}

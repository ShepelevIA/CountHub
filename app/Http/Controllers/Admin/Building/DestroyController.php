<?php

namespace App\Http\Controllers\Admin\Building;

use App\Http\Controllers\Controller;
use App\Models\Building;

class DestroyController extends Controller
{
    public function __invoke(Building $building)
    {
        $building->delete();
        return redirect()->route('building.index');
    }
}

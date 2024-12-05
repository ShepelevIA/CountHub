<?php

namespace App\Http\Controllers\Admin\Building;

use App\Http\Controllers\Controller;
use App\Models\Building;

class EditController extends Controller
{
    public function __invoke(Building $building)
    {
        return view('building.edit', compact('building'));
    }
}

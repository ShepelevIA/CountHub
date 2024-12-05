<?php

namespace App\Http\Controllers\Admin\Furniture;

use App\Http\Controllers\Controller;
use App\Models\Cabinet;
use App\Models\Furniture_type;

class CreateController extends Controller
{
    public function __invoke()
    {
        $furnitureTypes = Furniture_type::all();
        $cabinets = Cabinet::all();
        return view('furniture.create', compact( 'furnitureTypes', 'cabinets'));
    }
}

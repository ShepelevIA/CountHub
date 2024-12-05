<?php

namespace App\Http\Controllers\Admin\Furniture;

use App\Http\Controllers\Controller;
use App\Models\Cabinet;
use App\Models\Furniture;
use App\Models\Furniture_type;

class EditController extends Controller
{
    public function __invoke(Furniture $furniture)
    {
        $furnitureTypes = Furniture_type::all();
        $cabinets = Cabinet::all();
        return view('furniture.edit', compact('furniture','furnitureTypes', 'cabinets'));
    }
}

<?php

namespace App\Http\Controllers\Admin\FurnitureType;

use App\Http\Controllers\Controller;
use App\Models\Furniture_type;

class IndexController extends Controller
{
    public function __invoke()
    {
        $furniture_types = Furniture_type::all();
        return view('furnitureType.index', compact('furniture_types'));
    }
}

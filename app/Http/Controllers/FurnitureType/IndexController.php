<?php

namespace App\Http\Controllers\FurnitureType;

use App\Http\Controllers\Controller;
use App\Http\Resources\FurnitureType\FurnitureTypeResource;
use App\Models\Furniture_type;

class IndexController extends Controller
{
    public function __invoke()
    {
        $furniture_types = Furniture_type::all();
        return FurnitureTypeResource::collection($furniture_types);
    }
}

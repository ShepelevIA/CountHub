<?php

namespace App\Http\Controllers\FurnitureType;

use App\Http\Controllers\Controller;
use App\Http\Resources\FurnitureType\FurnitureTypeResource;
use App\Models\Furniture_type;

class ShowController extends Controller
{
    public function __invoke(Furniture_type $furniture_type)
    {
        return new FurnitureTypeResource($furniture_type);
    }
}

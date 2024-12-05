<?php

namespace App\Http\Controllers\Furniture;

use App\Http\Controllers\Controller;
use App\Http\Resources\Furniture\FurnitureResource;
use App\Models\Furniture;

class IndexController extends Controller
{
    public function __invoke()
    {
        $furnitures = Furniture::all();

        return FurnitureResource::collection($furnitures);
    }
}

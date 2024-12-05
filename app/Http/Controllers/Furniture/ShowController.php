<?php

namespace App\Http\Controllers\Furniture;

use App\Http\Controllers\Controller;
use App\Http\Resources\Furniture\FurnitureResource;
use App\Models\Furniture;

class ShowController extends Controller
{
    public function __invoke(Furniture $furniture)
    {
        return new FurnitureResource($furniture);
    }
}

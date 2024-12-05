<?php

namespace App\Http\Controllers\FurnitureType;

use App\Http\Controllers\Controller;
use App\Http\Requests\FurnitureType\StoreRequest;
use App\Models\Furniture_type;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Furniture_type::firstOrCreate($data);
    }
}

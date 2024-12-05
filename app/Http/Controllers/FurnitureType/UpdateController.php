<?php

namespace App\Http\Controllers\FurnitureType;

use App\Http\Controllers\Controller;
use App\Http\Requests\FurnitureType\UpdateRequest;
use App\Models\Furniture_type;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Furniture_type $furniture_type)
    {
        $data = $request->validated();
        $furniture_type->update($data);
    }
}

<?php

namespace App\Http\Controllers\Equipment;

use App\Http\Controllers\Controller;
use App\Http\Resources\Equipment\EquipmentResource;
use App\Models\Equipment;

class IndexController extends Controller
{
    public function __invoke()
    {
        $equipments = Equipment::paginate(10);
        return EquipmentResource::collection($equipments);
    }
}

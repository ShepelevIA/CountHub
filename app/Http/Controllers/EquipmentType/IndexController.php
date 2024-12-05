<?php

namespace App\Http\Controllers\EquipmentType;

use App\Http\Controllers\Controller;
use App\Http\Resources\EquipmentType\EquipmentTypeResource;
use App\Models\Type_equipment;

class IndexController extends Controller
{
    public function __invoke()
    {
        $type_equipments = Type_equipment::all();
        return EquipmentTypeResource::collection($type_equipments);
    }
}

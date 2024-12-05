<?php

namespace App\Http\Controllers\EquipmentType;

use App\Http\Controllers\Controller;
use App\Http\Resources\EquipmentType\EquipmentTypeResource;
use App\Models\Type_equipment;

class ShowController extends Controller
{
    public function __invoke(Type_equipment $type_equipment)
    {
        return new EquipmentTypeResource($type_equipment);
    }
}

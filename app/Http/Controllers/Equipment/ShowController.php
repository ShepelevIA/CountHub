<?php

namespace App\Http\Controllers\Equipment;

use App\Http\Controllers\Controller;
use App\Http\Resources\Equipment\EquipmentResource;
use App\Models\Equipment;

class ShowController extends Controller
{
    public function __invoke(Equipment $equipment)
    {
        return new EquipmentResource($equipment);
    }
}

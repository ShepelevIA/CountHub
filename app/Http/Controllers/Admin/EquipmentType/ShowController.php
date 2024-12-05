<?php

namespace App\Http\Controllers\Admin\EquipmentType;

use App\Http\Controllers\Controller;
use App\Models\Type_equipment;

class ShowController extends Controller
{
    public function __invoke(Type_equipment $type_equipment)
    {
        return view('equipmentType.show', compact('type_equipment'));
    }
}

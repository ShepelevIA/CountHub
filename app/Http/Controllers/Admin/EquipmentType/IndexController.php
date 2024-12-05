<?php

namespace App\Http\Controllers\Admin\EquipmentType;

use App\Http\Controllers\Controller;
use App\Models\Type_equipment;

class IndexController extends Controller
{
    public function __invoke()
    {
        $type_equipments = Type_equipment::all();
        return view('equipmentType.index', compact('type_equipments'));
    }
}

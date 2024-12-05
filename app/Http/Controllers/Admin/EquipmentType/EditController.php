<?php

namespace App\Http\Controllers\Admin\EquipmentType;

use App\Http\Controllers\Controller;
use App\Models\Type_equipment;

class EditController extends Controller
{
    public function __invoke(Type_equipment $type_equipment)
    {
        return view('equipmentType.edit', compact('type_equipment'));
    }
}

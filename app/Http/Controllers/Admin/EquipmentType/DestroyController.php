<?php

namespace App\Http\Controllers\Admin\EquipmentType;

use App\Http\Controllers\Controller;
use App\Models\Type_equipment;

class DestroyController extends Controller
{
    public function __invoke(Type_equipment $type_equipment)
    {
        $type_equipment->delete();
        return redirect()->route('equipmentType.index');
    }
}

<?php

namespace App\Http\Controllers\Admin\EquipmentType;

use App\Http\Controllers\Controller;
use App\Http\Requests\EquipmentType\UpdateRequest;
use App\Models\Type_equipment;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Type_equipment $type_equipment)
    {
        $data = $request->validated();
        $type_equipment->update($data);
        return redirect()->route('equipmentType.show', $type_equipment->id);
    }
}

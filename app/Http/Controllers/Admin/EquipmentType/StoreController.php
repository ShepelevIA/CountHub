<?php

namespace App\Http\Controllers\Admin\EquipmentType;

use App\Http\Controllers\Controller;
use App\Http\Requests\EquipmentType\StoreRequest;
use App\Models\Type_equipment;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Type_equipment::firstOrCreate($data);
        return redirect()->route('equipmentType.index');
    }
}

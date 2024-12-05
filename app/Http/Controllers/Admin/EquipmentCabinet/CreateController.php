<?php

namespace App\Http\Controllers\Admin\EquipmentCabinet;

use App\Http\Controllers\Controller;
use App\Models\Building;
use App\Models\Cabinet_type;

class CreateController extends Controller
{
    public function __invoke()
    {
        $buildings = Building::all();
        $cabinetTypes = Cabinet_type::all();
        return view('equipmentCabinet.create', compact('buildings', 'cabinetTypes'));
    }
}

<?php

namespace App\Http\Controllers\Admin\Equipment;

use App\Http\Controllers\Controller;
use App\Models\Cabinet;
use App\Models\Equipment;
use App\Models\Model_equipment;

class EditController extends Controller
{
    public function __invoke(Equipment $equipment)
    {
        $models = Model_equipment::all();
        $cabinets = Cabinet::all();
        return view('equipment.edit', compact('equipment','models', 'cabinets'));
    }
}

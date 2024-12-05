<?php

namespace App\Http\Controllers\Admin\Equipment;

use App\Http\Controllers\Controller;
use App\Models\Cabinet;
use App\Models\Model_equipment;

class CreateController extends Controller
{
    public function __invoke()
    {
        $models = Model_equipment::all();
        $cabinets = Cabinet::all();
        return view('equipment.create', compact( 'models', 'cabinets'));
    }
}

<?php

namespace App\Http\Controllers\Admin\Equipment;

use App\Http\Controllers\Controller;
use App\Models\Equipment;

class IndexController extends Controller
{
    public function __invoke()
    {
        $equipments = Equipment::all();
        return view('equipment.index', compact('equipments'));
    }
}

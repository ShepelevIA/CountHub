<?php

namespace App\Http\Controllers\EquipmentCabinet;

use App\Http\Controllers\Controller;
use App\Models\Cabinet;

class IndexController extends Controller
{
    public function __invoke()
    {
        //$cabinets = Cabinet::all();
        return view('equipmentCabinet.index');
    }
}

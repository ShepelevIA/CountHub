<?php

namespace App\Http\Controllers\EquipmentCabinet;

use App\Http\Controllers\Controller;
use App\Models\Cabinet;

class ShowController extends Controller
{
    public function __invoke(Cabinet $cabinet)
    {
        return view('equipmentCabinet.show', compact('cabinet'));
    }
}

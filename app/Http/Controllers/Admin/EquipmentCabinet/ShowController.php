<?php

namespace App\Http\Controllers\Admin\EquipmentCabinet;

use App\Http\Controllers\Controller;
use App\Models\Cabinet;

class ShowController extends Controller
{
    public function __invoke(Cabinet $cabinet)
    {
        return view('equipmentCabinet.show', compact('cabinet'));
    }
}

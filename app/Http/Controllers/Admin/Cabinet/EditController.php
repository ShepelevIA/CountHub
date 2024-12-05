<?php

namespace App\Http\Controllers\Admin\Cabinet;

use App\Http\Controllers\Controller;
use App\Models\Building;
use App\Models\Cabinet;
use App\Models\Cabinet_type;

class EditController extends Controller
{
    public function __invoke(Cabinet $cabinet)
    {
        $buildings = Building::all();
        $cabinetTypes = Cabinet_type::all();
        return view('cabinet.edit', compact('cabinet','buildings', 'cabinetTypes'));
    }
}

<?php

namespace App\Http\Controllers\Admin\Equipment;

use App\Http\Controllers\Controller;
use App\Models\Equipment;

class ShowController extends Controller
{
    public function __invoke(Equipment $equipment)
    {
        return view('equipment.show', compact('equipment'));
    }
}

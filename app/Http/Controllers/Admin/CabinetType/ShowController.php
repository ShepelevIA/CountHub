<?php

namespace App\Http\Controllers\Admin\CabinetType;

use App\Http\Controllers\Controller;
use App\Models\Cabinet_type;

class ShowController extends Controller
{
    public function __invoke(Cabinet_type $cabinet_type)
    {
        return view('cabinetType.show', compact('cabinet_type'));
    }
}
